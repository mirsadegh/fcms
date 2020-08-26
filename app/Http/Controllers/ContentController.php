<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param Section $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('contents.edit',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Section $section
     * @return void
     */
    public function update(Request $request, Section $section)
    {
        dd($request->all());
        dd($section);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Section $section
     * @return void
     */
    public function destroy( Section $section)
    {
        //
    }
}
