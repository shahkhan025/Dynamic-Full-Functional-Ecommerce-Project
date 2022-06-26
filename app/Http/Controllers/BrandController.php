<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    private $brands;
    private $brand;

    public function add()
    {
        return view('admin.brand.add');
    }

    public function create(Request $request)
    {
        Brand::newBrand($request);
        return redirect()->back()->with('message', 'New Brand Created Successfully');
    }

    public function manage()
    {
        $this->brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brand.manage',['brands' => $this->brands]);
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',['brand'=> $this->brand]);
    }
    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/manage-brand')->with('message', 'Brand updated Successfully');
    }
    public function delete($id)
    {
        $this->brand = Brand::find($id);
        if (file_exists($this->brand->image))
        {
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return redirect('/manage-brand')->with('message', 'Brand deleted Successfully');
    }
}
