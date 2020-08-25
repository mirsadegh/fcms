<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $section_types = ['features','tabs','prices','cards','faq','clients','posts'];
          $count = Section::count();
          $section = new Section;
          return view('sections.create_or_edit',compact('section_types','count','section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * post Request to sections
     */
    public function store(Request $request)
    {
         $data =  self::validation();
         Section::create($data);
         return redirect('home')->withMessage('بخش مورد نظر اضافه شد.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $section_types = ['features','tabs','prices','cards','faq','clients','posts'];
        $count = Section::count();
        return view('sections.create_or_edit',compact('section_types','section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     * put request to sections /{id}
     */
    public function update(Request $request, Section $section)
    {
        $data =  self::validation();
        $section->update($data);
        return redirect('home')->withMessage('بخش مورد نظر ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }

    public static function validation()
    {
       return  request()->validate([
            'type'      => 'required',
            'position'  => 'required',
        ]);
    }
}
