<?php

namespace App\Http\Controllers;

use App\Models\QueryApiRest;
use Illuminate\Http\Request;

class QueryApiRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valor= "algo";
        dd($valor);
        return view('api/index');
    }

    public function list(Request $request)
    {
        $result = file_get_contents("http://universities.hipolabs.com/search?country=argentina"); // consume the Stooq.com API 

        $objectJson = json_decode($result, true, 10);

        // $client = new Client();

        // $client->firstName = $request->firstName;
        // $client->lastName = $request->lastName;
        // $client->cuit = $request->cuit;
        // $client->email = $request->email;
        // $client->email_2 = $request->email_2;
        // $client->email_3 = $request->email_3;
        // $client->tel_1 = $request->tel_1;
        // $client->tel_2 = $request->tel_2;
        // $client->tel_3 = $request->tel_3;
        // $client->comments = $request->comments;
        // $client->deleted = $request->deleted;

        // $client->save();

        // return $client;

        dd($objectJson);

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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QueryApiRest  $queryApiRest
     * @return \Illuminate\Http\Response
     */
    public function show(QueryApiRest $queryApiRest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QueryApiRest  $queryApiRest
     * @return \Illuminate\Http\Response
     */
    public function edit(QueryApiRest $queryApiRest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QueryApiRest  $queryApiRest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QueryApiRest $queryApiRest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QueryApiRest  $queryApiRest
     * @return \Illuminate\Http\Response
     */
    public function destroy(QueryApiRest $queryApiRest)
    {
        //
    }
}
