<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('index');
        return view('client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('create');
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store',$request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        dd('show');
        return view('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        dd('edit',$client);
        return view('client.create',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        dd('update',$request->all(),$client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        dd('destroy',$client);
    }
}
