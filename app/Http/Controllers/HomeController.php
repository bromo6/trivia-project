<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Log;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function logout() {
      Auth::logout();
    return redirect('/login');
    }


// below is the function to call the API

public function searchQuestion()  //request request is to communitcate with link
{
    // code that will eventually detect if a question is right/wrong,
    // record that to the db




    $curl = curl_init();

    curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apifort-trivia-database-v1.p.mashape.com/v1/query/trivia?count=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic YXJteW1hbmpkOk15U3BvcnRzMSE=",
    "Cache-Control: no-cache",
    "Postman-Token: d9c12396-a0ea-4f1e-9f0f-48362af17be8",
    "X-Mashape-Key: BYUGGmSh06mshhKbproAIooNCAXzp136QpVjsn86Pj5ojxZnFT"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    //now create a new variable to convert api to php
    $question = json_decode($response, TRUE);

    // save this to the db

    //then now pass it on to the viewport
    //create a new variable
    $data = [
        'question'=> $question,

    ];
    return view('questionaire')->with($data); //now this will send it to the view page inputed, now go and do a new web.php route
    }
}
