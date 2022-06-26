<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FishBangController extends Controller
{
    private $products;
    private $product;
    private $categories;
    private $subCategories;
    private $category;

    public function index()
    {
        return view('front.home.home');
    }

    public function home()
    {
        $this->products = Product::orderBy('id','desc')->take(12)->get();
        $this->categories = Category::all();
        return view('front.home.fishbang',[
            'categories'    => $this->categories,
            'products'      => $this->products,
        ]);
    }

    public function categoryProduct($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id','desc')->get();
        return view('front.category.category-product',['products' => $this->products]);
    }

    public function subCategoryProduct($id)
    {
        $this->products = Product::where('sub_category_id', $id)->orderBy('id','desc')->get();
        return view('front.subCategory.sub-category-product',['products' => $this->products]);
    }

    public function productDetail($id)
    {
        $this->product = Product::find($id);
        return view('front.product.product-detail',['product' => $this->product]);
    }
}
