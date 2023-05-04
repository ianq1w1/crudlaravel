<?php

namespace App\Http\Controllers;

use App\Models\Coisa;
use Illuminate\Http\Request;

class CoisaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        echo User::find(Auth::user()->id);
        $coisa = new Coisa();
       $coisa->nome = $request->nome;

       $coisa->save();

       return redirect (route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coisa  $coisa
     * @return \Illuminate\Http\Response
     */
    public function show(Coisa $coisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coisa  $coisa
     * @return \Illuminate\Http\Response
     */
    public function edit(Coisa $coisa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coisa  $coisa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coisa $coisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coisa  $coisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coisa $coisa)
    {
        //
    }
}
