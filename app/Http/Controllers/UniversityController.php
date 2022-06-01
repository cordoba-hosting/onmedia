<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use AnourValar\Office\Drivers\SheetsService;


class UniversityController extends Controller
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

    public function export() 
    {
        $result = file_get_contents("http://universities.hipolabs.com/search?name="); // consume the Stooq.com API 

        $universityListArray = json_decode($result, true, 10);

        (new \AnourValar\Office\SheetsService())
            ->generate('template2.xlsx', $universityListArray)
            ->saveAs('universities.xlsx');

        
    }

    

     /**
     * consumes the Stooq.com API for a received $stock_code, saves the response in the database and sends an email with the values to the user
     * @author: Alejandro Esteban González
     * @version: 1.0.0
     * @param Request $request
     * @param Response $response
     * @param array $args the array contains the stock_code
     * @return Response  
     */
    public function consumeApi(Request $request, Response $response)
    {
        $name = ($request->name == '') ? '': $name='name='.$request->name; 
        $country = ($request->country == '') ? '': $country='country='.str_replace(" ", "%20", $request->country ); 
        $union = ($country != '' &&  $request->name != '') ? '&' : '';
        $parameters = ($country != '' || $request->name != '') ? '?' : '';

        $result = file_get_contents('http://universities.hipolabs.com/search'.$parameters.$country.$union.$name); // consume the API 

        $universityListArray = json_decode($result, true, 10);

        $result1 = file_get_contents('https://restcountries.com/v3.1/all');

        $countriesListArray = json_decode($result1, true, 10);
       // dd($countriesListArray[0]['name']['common']);
        return view('api/index', compact('universityListArray', 'countriesListArray', 'country', 'name'));
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
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        //
    }
}
