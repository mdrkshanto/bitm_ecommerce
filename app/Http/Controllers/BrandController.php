<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private static $brand, $brands;

    public function create()
    {
        return view('admin.brand.index');
    }

    public function store(Request $request)
    {
        self::$brand = Brand::storeBrand($request);
        return back()->with('message', 'Brand crated successfully.');
    }

    public function manage()
    {
        self::$brands = Brand::all();
        return view('admin.brand.manage',[
            'brands' => self::$brands
        ]);
    }

    public function edit($id)
    {
        self::$brand = Brand::find($id);

        return view('admin.brand.edit',[
            'brand' => self::$brand
        ]);
    }

    public function update(Request $request, $id)
    {
        Brand::brandUpdate($request, $id);
        return redirect(route('brand.manage'))->with('message','Brand Updated Successfully.');
    }

    public function delete($id)
    {
        Brand::deleteBrand($id);
        return back()->with('message', 'Brand deleted successfully.');
    }
}
