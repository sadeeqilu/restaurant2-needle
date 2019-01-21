<?php

namespace App\Http\Controllers;

use App\Restaurateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurateurController extends Controller
{


    public function saveNewRestaurateur(Request $req){
      $restaurateur = new Restaurateur([
          'firstName' => $req['firstName'],
          'lastName' => $req['lastName'],
          'phonenumber' => $req['phonenumber']
      ]);

      $restaurateur->save();
      return redirect()->back()->with('success', 'Congratulations, We will confirm and contact you soon...');
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurateur  $restaurateur
     * @return \Illuminate\Http\Response
     */
    public function showRestaurateur()
    {
        return view('restaurateurPages.restaurateur');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurateur  $restaurateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurateur $restaurateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurateur  $restaurateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurateur $restaurateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurateur  $restaurateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurateur $restaurateur)
    {
        //
    }
}
