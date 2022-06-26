<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $categories;
    private $category;

    public function add()
    {
        return view('admin.category.add');
    }

    public function create(Request $request)
    {
       Category::newCategory($request);
       return redirect()->back()->with('message', 'category created Successfully');
    }

    public function manage()
    {
        $this->categories = Category::orderBy('id','desc')->get();
        return view('admin.category.manage',['categories' => $this->categories]);
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',['category' => $this->category]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request,$id);
        return redirect()->back()->with('message', 'Category updated Successfully');
    }

    public function delete($id)
    {
        $this->category = Category::find($id);
        if (file_exists($this->category->image))
        {
            unlink($this->category->image);
        }
        $this->category->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
}
