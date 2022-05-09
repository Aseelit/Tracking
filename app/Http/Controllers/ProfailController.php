<?php

namespace App\Http\Controllers;

use App\Models\Profail;
use App\Http\Requests\StoreProfailRequest;
use App\Http\Requests\UpdateProfailRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $users=User::with(['social'])->where('id',$id)->first();
        return view('Profail.profail',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profail  $profail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profail  $profail
     * @return \Illuminate\Http\Response
     */
    public function edit(Profail $profail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfailRequest  $request
     * @param  \App\Models\Profail  $profail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfailRequest $request, Profail $profail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profail  $profail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profail $profail)
    {
        //
    }
}
