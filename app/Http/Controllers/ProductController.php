<?php

namespace App\Http\Controllers;

use App\Models\OtherImage;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products;
    private $product;
    private $subCategories;
    private $categoryId;

    public function add()
    {
        return view('admin.product.add',[
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all(),
        ]);
    }

    public function subcategoryId()
    {
        $this->categoryId = $_GET['id'];
        $this->subCategories = SubCategory::where('category_id', $this->categoryId)->get();
        return response()->json($this->subCategories);
    }


    public function create(Request $request)
    {
        $this->product = Product::newProduct($request);
        OtherImage::newOtherImage($request, $this->product->id);
        return redirect('/add-product')->with('message', 'New Product Created successfully');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.manage',['products' => $this->products]);
    }

    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.detail',['product' => $this->product]);
    }
    public function edit($id)
    {
        return view('admin.product.edit',[
            'product'           => Product::find($id),
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($request->file('other_image'))
        {
            OtherImage::updateOtherImage($request, $id);
        }
        return redirect('/manage-product')->with('message', 'Product info update successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Product info Deleted successfully.');
    }

}
