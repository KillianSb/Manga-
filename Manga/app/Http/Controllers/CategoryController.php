<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::with('posts')->get();
    	return view("categories.index", compact('categories'));
    }

    public function show($categoryId)
    {
    	$category = Category::find($categoryId);
    	return view("categories.show", compact('category'));
    }

    public function create()
    {
		return view("categories.create");
    }

    public function store(Request $request)
    {
    	$category = new Category();
    	$category->name = $request->get('name');
    	$category->save();

    	return redirect()->route('category.index');
    }

    public function edit($categoryId)
    {
    	$category = Category::find($categoryId);
    	return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $categoryId)
    {
    	$category = Category::find($categoryId);
    	$category->name = $request->get('name');
    	$category->save();
		return redirect()->route('category.index');
    }

    public function delete($categoryId)
    {
    	$category = Category::find($categoryId);
    	$category->delete();
    	return redirect()->route('category.index');
    }
}
