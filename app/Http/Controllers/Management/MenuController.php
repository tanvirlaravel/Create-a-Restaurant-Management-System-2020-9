<?php

namespace App\Http\Controllers\Management;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('management.menu')->with('menus', Menu::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('management.createMenu')->with('categories', $categories);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // validate incoming data

       $data = $request->validate([
        'name' => 'required|unique:menus|max:255',
        'category_id' => 'required|numeric',
        'price' => 'required|numeric',
        // 'image' => 'required',
        'description' => '',
    ]);
    $imageName = "noimage.png";

    if($request->image){
        $request->validate([
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:5000'
        ]);
        $imageName = date('mdYHis').uniqid().".".$request->image->extension();
        $request->image->move(public_path('menu_images'), $imageName);
    }
    // save to database
    $data["image"] = $imageName;
    Menu::create($data);


    $request->session()->flash('status', $request->name . " is save successfully");

    // redirect some where

    return redirect('management/menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
