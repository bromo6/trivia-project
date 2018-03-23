<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Log;
use App\Question;
use App\AnswerChoice;
use App\CorrectAnswer;
use DB;

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

public function submitAnswer(Request $request){

    $question = Question::find($request->questionId);

    if ($request->answerChoice == $question->answer) {
        $newAnswer = new CorrectAnswer;
        $newAnswer->user_id = Auth::id();
        $newAnswer->question_id = $request->questionId;
        $newAnswer->answer = $request->answerChoice;
        $newAnswer->save();

        return redirect('/questionaire');
    } else {

        $questionsRight = CorrectAnswer::where("user_id", '=', Auth::id())->count();

        $data = [
            'questionsRight' => $questionsRight
        ];
        return view('home')->with($data);
        // the answer was wrong. return to home
    }



    // code that will eventually detect if a question is right/wrong,
    // record that to the db
    // if the user answered the question correctly, continue on this function
    // else if they got it wrong return to the home page

}

public function startGame()
{
    // reset the game, then go to the questionaire page
    DB::statement("SET foreign_key_checks=0");
    Question::truncate();
    CorrectAnswer::truncate();
    AnswerChoice::truncate();
    DB::statement("SET foreign_key_checks=1");

    return redirect('questionaire');
}

public function searchQuestion()  //request request is to communitcate with link
{
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
    $newQuestion = new Question;
    $newQuestion->question_name = $question['result'][0]['question'];
    $newQuestion->category = $question['result'][0]['category'];
    $newQuestion->answer = $question['result'][0]['answer'];
    $newQuestion->save();

    foreach ($question['result'][0]['chooices'] as $choice) {
        $newChoice = new AnswerChoice;
        $newChoice->question_id = $newQuestion->id;
        $newChoice->answer_name = $choice;
        $newChoice->save();
    }

    //then now pass it on to the viewport
    //create a new variable
    $data = [
        'question'=> $question,
        'questionId' => $newQuestion->id

    ];
    return view('questionaire')->with($data); //now this will send it to the view page inputed, now go and do a new web.php route
    }
}
