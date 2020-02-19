<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;

class reservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = reservation::all();

        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'author'=>'required',
            'dated' =>'required'
        ]);

        $datas = [
            'name' => $request->get('name'),
            'code' => $request->get('code'),
            'author' => $request->get('author'),
            'dated' => $request->get('dated'),
            'kind' => $request->get('kind')
        ];
        $livre = new reservation();
        $livre->fill($datas);
        $livre->save();
        return redirect('/reservations')->with('success', 'reservation sauvgarder !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livre = reservation::find($id);
        return view('reservations.edit', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livre = Reservation::find($id);
        return view('reservations.edit', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'author'=>'required'
        ]);

        $livre = Reservation::find($id);
        $livre->name =  $request->get('name');
        $livre->code = $request->get('code');
        $livre->author = $request->get('author');
        $livre->dated = $request->get('dated');
        $livre->kind = $request->get('kind');
        $livre->save();

        return redirect('/reservations')->with('success', 'Reservation mis a jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livre = Reservation::find($id);
        $livre->delete();

        return redirect('/reservations')->with('success', 'Reservation supprimer !');
    }
}