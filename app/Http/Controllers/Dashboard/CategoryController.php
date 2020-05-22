<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('dashboard.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('dashboard.categories.create');
    }


    public function store(Request $request)
    {
        Category::create($this->validateAttributes());
        return redirect(route('dashboard.categories.index'));
    }


    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $category->update($this->validateAttributes());
        return redirect(route('dashboard.categories.index'));
    }


    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect(route('dashboard.categories.index'));
    }

    public function validateAttributes(){
        return request()->validate([
            'name' => 'required|unique:categories'
        ]);
    }
}
