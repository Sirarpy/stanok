<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('categories.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|unique:categories|max:255',
            'type'        => 'required|boolean',
        ]);

        $category = new Category();

        $category->name = $request->input('name');

        $category->save();

        return redirect()->route('categories.index')->withStatus(__('Category successfully created.'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'type'        => 'required|boolean',
        ]);

        $category->name =  $request->input('name');

        $category->save();

        return redirect()->route('categories.index')->withStatus(__('Category successfully updated.'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->withStatus(__('Category successfully deleted.'));
    }
}
