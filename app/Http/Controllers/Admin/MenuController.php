<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository as MenuRepo;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    protected $view = 'admin.menus';
    protected $menuRepo;

    public function __construct(MenuRepo $menuRepo)
    {
        $this->menuRepo = $menuRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Menu $menu)
    {
        $this->authorize('viewAny', $menu);
        $menus = $this->menuRepo->getMenus();
        return view($this->view.'.index', [
            'menus' => $menus,
            'view' => $this->view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Menu $menu)
    {
        $this->authorize('create', $menu);
        return view($this->view.'.create', [
            'menu' => $menu,
            'view' => $this->view
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setup(Menu $menu)
    {
        return view($this->view.'.setup', [
            'menu' => $menu,
            'view' => $this->view
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuRequest $request)
    {
        $data = $request->only('name', 'key');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['created_by'] = Auth::id();
        $this->menuRepo->create($data);
        return redirect(route('menus.index'))->with('success',  'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $this->authorize('update', $menu);
        return view($this->view.'.update', [
            'menu' => $menu,
            'view' => $this->view
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuRequest  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $data = $request->only('name', 'key');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $this->menuRepo->update($data, $menu['id']);
        return redirect(route('menus.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
