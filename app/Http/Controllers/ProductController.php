<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product, $products, $categories, $subCategories, $brands, $units;

    public function index()
    {
        return view('website.product.index');
    }

    public function create()
    {
        $this->categories = Category::all();
        $this->subCategories = SubCategory::all();
        $this->brands = Brand::all();
        $this->units = Unit::all();

        return view('admin.product.index', [
            'categories' => $this->categories,
            'subCategories' => $this->subCategories,
            'brands' => $this->brands,
            'units' => $this->units
        ]);
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
