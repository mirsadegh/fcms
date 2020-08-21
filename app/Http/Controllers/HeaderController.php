<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('headers.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
//        dd($request->all());
        $data = $request->validate([
            'title' => 'nullable',
            'btn_name' => 'nullable',
            'btn_link' => 'nullable',
            'description' => 'nullable|string|max:1000',
            'mobile_visible' => 'nullable|boolean',
            'preloader' => 'nullable|boolean',
            'bg_path' => 'nullable|mimes:jpeg,png,bmp,tiff|max:1000',
        ]);

        $phote = $request->bg_path;
        if ($phote){
            if (file_exists($header->bg_path)){
                \File::delete($header->bg_path);
            }
            $relative_path = "storage/app/public/images";
            $file_name = rs().'.'. $phote->getClientOriginalExtension();
            $phote->move( base_path($relative_path) ,$file_name);
            $data['bg_path'] = 'storage/images/' . $file_name;
        }else{
            $data['bg_path'] = null;
        }


        $header->update($data);
        return back()->withMessage('هدر با موفقیت ویرایش شد.');
    }

}
