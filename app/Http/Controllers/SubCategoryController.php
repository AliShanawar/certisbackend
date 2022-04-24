<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    //
    public function show()
    {
        $categories = Category::all();
        return view('Sub-Category', ['categories' => $categories]);
    }


    public function AddSubCategory(Request $request)
    {
        $addcategory = Category::find($request->category_id);
        if (!$addcategory) {
            return redirect()->back()->with('error', 'Please Select Category!');
        } else {

            $subcategory = new SubCategory();
            $subcategory->sub_categories_name = $request->sub_categories_name;
            $subcategory->AddCategory_id = $request->category_id;
            $subcategory->save();
            return redirect()->back()->with('success', 'Sub-Category Added!');
        }
    }

    public function list()
    {
        $subcategory = SubCategory::with('category')->get();
        return view('SubCategory-list', ['subcategories' => $subcategory]);
    }

    public function DestroyCategory(Request $request)
    {
        $subcategory = SubCategory::firstOrFail()->where('sub_categories_id', $request->sub_categories_id);
        $subcategory->delete();
        return redirect()->back();
    }

    public function get_all(Request $request)
    {
        if ($request->category_id) {
            $subcategory = SubCategory::whereIn('AddCategory_id', [$request->category_id])->with('category')->get();
            return ["status" => true, "data" => $subcategory];
        } else {
            return ["status" => false, "message" => "category_id is required"];
        }
    }
}
