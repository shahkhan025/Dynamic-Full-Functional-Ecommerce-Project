<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $subCategories;
    private $subCategory;

    public function add()
    {
        return view('admin.subCategory.add');
    }

    public function create(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect()->back()->with('message', 'Subcategory Created Successfully');
    }

    public function manage()
    {
        $this->subCategories = SubCategory::orderBy('id','desc')->get();
        return view('admin.subCategory.manage',['subCategories' => $this->subCategories]);
    }

    public function edit($id)
    {
        $this->subCategory = SubCategory::find($id);
        return view('admin.subCategory.edit',['subCategory' => $this->subCategory]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect()->back()->with('message', 'SubCategory Updated Successfully');
    }

    public function delete($id)
    {
        $this->subCategory = SubCategory::find($id);
        if (file_exists($this->subCategory->image))
        {
            unlink($this->subCategory->image);
        }
        $this->subCategory->delete();
        return redirect()->back()->with('message', 'SubCategory Deleted Successfully');
    }
}
