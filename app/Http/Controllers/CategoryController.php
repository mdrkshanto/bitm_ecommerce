<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $catetory, $categories;

    public function index()
    {
        return view('website.category.index');
    }

    public function admin()
    {
        return view('admin.category.index');
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage',[
            'categories' => $this->categories
        ]);
    }

    public function store(Request $request)
    {
        Category::create($request);
        return back()->with('message', 'Category created successfully.');
    }

    public function edit($id)
    {
        $this->catetory = Category::find($id);
        return view('admin.category.edit', [
            'category' => $this->catetory
        ]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);

        return redirect(route('manage.category'))->with('message','Category Updated Successfully.');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return back()->with('message','Category Deleted Successfully.');
    }
}
