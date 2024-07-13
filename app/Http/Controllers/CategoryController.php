<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('admin.pages.category.create');
    }

    public function store(Request $request){
        $validate = $request ->validate([
            'name'=> 'required|string',
        ]);
        $obj = new Category();
        $obj->name = $request->name;
        $obj-> save();
        return redirect('/getAllCategories');
    }   

    public function getAllCategories(){
        $data = Category::all();
        return view('admin.pages.category.all', compact('data'));
    }
    public function edit($id){
        $data = Category::find($id);
        return view('admin.pages.category.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $validate = $request ->validate([
            'name'=> 'required|string',
        ]);
        $obj = Category::find($id);
        $obj->name = $request->name;
        $obj-> save();
        return redirect()->back()->with('msg', 'Category updated successfully');
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back()->with('msg', 'Category deleted successfully');
    }
}