<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $subCategory, $subCategories, $categories;

    public function create()
    {
        $this->categories = Category::all();
        return view('admin.sub-category.index',[
            'categories' => $this->categories
        ]);
    }

    public function store(Request $request)
    {
        SubCategory::create($request);
        return back()->with('message', 'Sub Category Has Created Successfully.');
    }

    public function manage()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.sub-category.manage',[
            'sub_categories'=>$this->subCategories
        ]);
    }

    public function edit($id)
    {
        $this->subCategory = SubCategory::find($id);
        $this->categories = Category::all();
        return view('admin.sub-category.edit',[
            'sub_category'=>$this->subCategory,
            'categories' => $this->categories
        ]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);

        return redirect(route('sub-category.manage'))->with('message','Sub Category Updated Successfully.');
    }

    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return back()->with('message', 'Sub Category Has Deleted Successfully.');
    }
}
