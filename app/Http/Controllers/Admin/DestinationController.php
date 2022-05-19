<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Http\Controllers\Controller;
use App\Repositories\DestinationRepository as DestinationRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    protected $view = 'admin.destinations';
    protected $destinationRepo;

    public function __construct(DestinationRepo $destinationRepo)
    {
        $this->destinationRepo = $destinationRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Destination $destination, Request $request)
    {
        $this->authorize('viewAny', $destination);
        $destinations = $this->destinationRepo->getData($request);
        return view($this->view.'.index', [
            'destinations' => $destinations,
            'view' => $this->view,
            'request' => $request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Destination $destination)
    {
        $this->authorize('viewAny', $destination);
        return view($this->view.'.create', [
            'destination' => $destination,
            'view' => $this->view
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDestinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDestinationRequest $request)
    {
        $data = $request->only('name', 'avatar', 'description');
        $data['slug'] = Str::slug($request->get('name'), '-');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['featured'] = isset($request['featured']) ? 1 : 0;
        $data['created_by'] = Auth::id();
        $this->destinationRepo->create($data);
        return redirect(route('destinations.index'))->with('success',  'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        $this->authorize('update', $destination);
        return view($this->view.'.update', [
            'destination' => $destination,
            'view' => $this->view
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDestinationRequest  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $data = $request->only('name', 'avatar', 'description');
        $data['slug'] = Str::slug($request->get('name'), '-');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['featured'] = isset($request['featured']) ? 1 : 0;
        $this->destinationRepo->update($data, $destination['id']);
        return redirect(route('destinations.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
