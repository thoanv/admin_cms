<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Image;
use AWS\CRT\HTTP\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\ImageRepository as ImageRepo;

class CategoryController extends Controller
{
    protected $view = 'admin.categories';
    protected $categoryRepo;
    protected $imageRepo;

    public function __construct(CategoryRepo $categoryRepo, ImageRepo $imageRepo)
    {
        $this->categoryRepo = $categoryRepo;
        $this->imageRepo = $imageRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $this->authorize('viewAny', $category);
        $categories =  $this->categoryRepo->getCategories();
        return view($this->view.'.index', [
            'categories' => $categories,
            'view' => $this->view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $this->authorize('create', $category);
        $category = new Category();
        $categories = $this->getCategories();
        return view($this->view.'.create', [
            'category' => $category,
            'categories' => $categories,
            'view' => $this->view
        ]);
    }
    private function getCategories()
    {
        $categories = $this->categoryRepo->getCategoriesStatus();
        $listCategory = [];
        Category::recursive($categories, $parent = 0, $level = 1, $listCategory);
        return $listCategory;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->only('name', 'parent_id', 'type', 'cover', 'description', 'lang');
        $data['slug'] = Str::slug($request->get('name'), '-');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['noi_bat'] = isset($request['noi_bat']) ? 1 : 0;
        $data['created_by'] = Auth::id();
        if ($data['parent_id'] == null) {
            $children = Category::whereNull('parent_id')->count();
        } else {
            $children = Category::where('parent_id', '=', $request->get('parent_id'))->count();
        }
        $data['serial'] = $children + 1;
        if($request->parent_lang)
            $data['parent_lang'] = $request->parent_lang;
        $result = $this->categoryRepo->create($data);
        if($request->gallery && !empty($request->gallery)):
            foreach ($request->gallery as $v_image):
                $image['url'] = $v_image;
                $image['category_id'] = $result['id'];
                $this->imageRepo->create($image);
            endforeach;
        endif;
        return redirect(route('categories.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categories)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $this->authorize('update', $category);
        if(!$category) return abort(404);
        $category_parent_lang = 0;
        $images = $this->imageRepo->getImageByCategoryId($category['id']);
        $lang = $category['lang'];
        $categories = $this->categoryRepo->getAllCategories($lang);
        return view('categories.update', [
            'category' => $category,
            'categories' => $categories,
            'images' => $images,
            'lang'     => $lang,
            'category_parent_lang' => $category_parent_lang
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->only('name', 'parent_id', 'type', 'cover', 'description', 'lang');
        $data['slug'] = Str::slug($request->get('name'), '-');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['noi_bat'] = isset($request['noi_bat']) ? 1 : 0;
        $this->categoryRepo->update($data, $category['id']);
        Image::where('category_id', $category['id'])->delete();
        if($request->gallery && !empty($request->gallery)):
            foreach ($request->gallery as $v_image):
                $image['url'] = $v_image;
                $image['category_id'] = $category['id'];
                $this->imageRepo->create($image);
            endforeach;
        endif;
        return redirect(route('categories.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);
        $category->delete();
        return redirect()->route('type-permissions.index')->with('success','Xóa thành công');
    }
}
