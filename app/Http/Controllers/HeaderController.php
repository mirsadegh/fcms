<?php

namespace App\Http\Controllers;

use App\Header;
use App\HeaderMobilePhoto;
use Illuminate\Http\Request;

class HeaderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
            $data['bg_path'] = upload($phote,$header->bg_path);
        }else{
            $data['bg_path'] = null;
        }

        if ($sliders = $request->slider){
            foreach ($sliders as $slider) {
               $path = upload($slider);
                HeaderMobilePhoto::make($path);
            }

        }

        $photos_id= $request->photo_ids;

        if ($photos_id){
           foreach ($photos_id as $id){
               $photo_delete = HeaderMobilePhoto::find($id);
               if (file_exists($photo_delete->path)){
                   \File::delete($photo_delete->path);
               }
               $photo_delete->delete();
           }
        }

        $header->update($data);
        return back()->withMessage('هدر با موفقیت ویرایش شد.');
    }

}
