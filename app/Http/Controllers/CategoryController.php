<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Add-category');
    }
    public function AddCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
        Category::create([
            'name' => $request->name,
        ]);
        return redirect('Add-category')->with('success', 'Category Added successfully');
    }
    public function show()
    {
        $categories = Category::all();
        return view('category-list', ['categories' => $categories]);
    }
    public function DestroyCategory(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return redirect()->back();
    }
    public function showData($id)
    {
        $data = Category::find($id);
        return view('edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        // $category = Category::find($request->id);
        // return $category();
        // $category->name = $request->name;
        // $category->save();
        // return redirect()->back();
    }

    public function get_all()
    {
        $categories = Category::all();
        return ["status" => true, "data" => $categories];
    }
}
