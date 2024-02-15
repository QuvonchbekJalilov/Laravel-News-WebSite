<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Category::class, 'category');
    }

    public function index()
    {
        $categories = Category::paginate(20);
        
        return view('backend.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('backend.categories.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        $categories = Category::all();
        if ($categories->where('name', $request->name)->isNotEmpty()) {
            return view('backend.categories.index', compact('categories'))->with('success', 'User deleted successfully deleted');
        } else {
            Category::create($request->all());
        }


        return redirect()->back();
    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {

        $category = Category::find($category->id);


        return view('backend.categories.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {

        $categories = Category::all();
        $category->update($request->all());

        return view('backend.categories.index', compact('categories'));
    }


    public function destroy(Category $category)
    {

        $category->delete();

        return redirect()->back()->with('success', 'User deleted successfully deleted');
    }
}
