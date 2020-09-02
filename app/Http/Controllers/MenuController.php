<?php

namespace App\Http\Controllers;

use App\MenuItem as Item;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function edit()
    {
       $items = Item::orderBy('position')->get();
       return view('menu.edit',compact('items'));

    }

    public function update(Request $request)
    {
       dd($request->all());
    }

}
