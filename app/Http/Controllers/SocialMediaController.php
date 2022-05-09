<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Http\Requests\StoreSocialMediaRequest;
use App\Http\Requests\UpdateSocialMediaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        // $this->middleware('permission:soical-list|soical-create|soical-edit|soical-delete', ['only' => ['index', 'show']]);
        // $this->middleware('permission:soical-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:soical-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:soical-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $soicals=SocialMedia::with(['user'])->get();
        return view('SocialMedia.socialmedia',compact('soicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SocialMedia.add_socialmedia');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSocialMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $soical=new SocialMedia();
        $soical->facebook=$request->facebook;
        $soical->twitter=$request->twitter;
        $soical->instagram=$request->insta;
        $soical->whatsApp=$request->whatsApp;
        $soical->user_id=Auth::user()->id;
        $soical->save();
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        return view('SocialMedia.edit_socialmedia',compact('socialMedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social=SocialMedia::find($id);
        return view('SocialMedia.edit_socialmedia',compact("social"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialMediaRequest  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialMediaRequest $request, $id)
    {
        $socialMedia=SocialMedia::find($id);
        $socialMedia->update($request->all());
        return redirect()->route('profile.index')->with('success','Social Media Edit Successfly');
        
    }

  
    public function destroy($id)
    {
        SocialMedia::find($id)->delete();
        return redirect()->route('Soical.index')->with('sucess','deleted soical media successfly');
    }
}
