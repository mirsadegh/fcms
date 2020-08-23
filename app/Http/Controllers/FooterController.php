<?php

namespace App\Http\Controllers;


use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('footers.edit',compact('footer'));
    }

    public function update(Request $request , Footer $footer)
    {
//       dd($request->all());
       $data = $request->validate([
            'title'         => 'nullable|string|max:191',
            'address'       => 'nullable',
            'description_1' => 'nullable|string|max:1000',
            'description_2' => 'nullable|string|max:1000',
            'telephones'    => 'nullable',
            'emails'        => 'nullable',
            'facebook'      => 'nullable|string|max:191',
            'twitter'       => 'nullable|string|max:191',
            'google'        => 'nullable|string|max:191',
            'linkedin'      => 'nullable|string|max:191',
            'instagram'     => 'nullable|string|max:191',
            'telegram'      => 'nullable|string|max:191',

       ]);

       $data['telephones'] = str_replace("\r\n",",", $data['telephones'] );
       $data['emails'] = str_replace("\r\n",",", $data['emails'] );

       $footer->update($data);
        return back()->withMessage('فوتر با موفقیت ویرایش شد.');

    }

}
