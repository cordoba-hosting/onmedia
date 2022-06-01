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
        //$this->validator->array($args, ['stock_code' => V::noWhitespace()]); 

    //    if ($this->validator->isValid()) {  //validate the stock_code


            //verificar si parámetro existe


            $name = ($request->name == '') ? '': $name='name='.$request->name; 
            $country = ($request->country == '') ? '': $country='country='.$request->country; 
            $union = ($country != '' &&  $request->name != '') ? '&' : '';
            $parameters = ($country != '' || $request->name != '') ? '?' : '';

          // dd('http://universities.hipolabs.com/search'.$parameters.$country.$union.$name);

            $result = file_get_contents('http://universities.hipolabs.com/search'.$parameters.$country.$union.$name); // consume the API 

            $universityListArray = json_decode($result, true, 10);
            
            if (count($universityListArray) > 0) { //verify if the stock_code return some data

               

                // $university = new University;

                // $university->name = $universityListArray['symbols'][0]['name'];
                // $university->symbol = $universityListArray['symbols'][0]['symbol'];
                // $university->open = $universityListArray['symbols'][0]['open'];
                // $university->high = $universityListArray['symbols'][0]['high'];
                // $university->low = $universityListArray['symbols'][0]['low'];
                // $university->close = $universityListArray['symbols'][0]['close'];
                // $university->user_id = $userData->data->userId;

                // $stock->save(); // save the obtained data 

                
                // $data = [
                //     'alpha_two_code' => $universityListArray['name'],
                //     'domains' => $universityListArray['domains'],
                //     'country' => $universityListArray['country'],
                //     'state-province' => $universityListArray['state-province'],
                //     'web_pages' => $universityListArray['symbols'][0]['web_pages'],
                //     'name' => $universityListArray['symbols'][0]['name'],
                    
                // ];

                // return view('/api/index', compact('universityListArray'));
            } else {
                // $response = $this->jsonResponse($response, "error", "Code $stock_code unavailable", 400);
                // $response = $response->withStatus(400);
            }
        // } else {
        //     $errors = $this->validator->getErrors();
        //     $response = $this->jsonResponse($response, "error", $errors, 400);
        //     $response = $response->withStatus(400);
            
        // }


        return view('api/index', compact('universityListArray', 'country', 'name'));
        
       
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
