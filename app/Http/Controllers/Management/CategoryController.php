<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('management.category')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // validate incoming data

         $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);
        // save to database
        $category = new Category();
        $category->name = $request->name;

        $category->save();

        $request->session()->flash('status', $request->name . " is save successfully");

        // redirect some where

        return redirect('management/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('management.updateCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
         // validate incoming data

         $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);
        // save to database
        $category->name = $request->name;
        $category->save();

        $request->session()->flash('status', $request->name . " is updated successfully");

        // redirect some where

        return redirect('management/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        Session()->flash('status',"Category is deleted successfully");

        // redirect some where

        return redirect('management/category');
    }
}
