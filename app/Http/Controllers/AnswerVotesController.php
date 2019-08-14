<?php

namespace App\Http\Controllers;

use App\AnswerVotes;
use App\Question;
use Illuminate\Http\Request;
use App\Answer;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AnswerVotesController extends Controller
{


    public function up($id1){
        //id1 answer
        //id2 question

       # dd($obj);
       $this->middleware('auth');

        $q1 =AnswerVotes::where([['answer_id','=',$id1],['voter_id','=',auth::id()]]);
        $c1 = count($q1->get());

        $q2 = AnswerVotes::where([ ['answer_id','=',$id1] , ['voter_id','=',auth::id()] ,  ['value','=',-1]]);
        $c2 = count($q2->get());
        //$o = Question::find($id2);
        $o1 = Answer::find($id1);
        if($c1 == 0) {
            $o1->score += 1;
            $o1->save();
            $a = new AnswerVotes();
            $a->answer_id = $id1;
            $a->voter_id = auth::id();
            $a->value = 1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }else if($c2 == 1){

            $q2->delete();
            $o1->score += 2;
            $o1->save();
            $a = new AnswerVotes();
            $a->answer_id = $id1;
            $a->voter_id = auth::id();
            $a->value = 1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }
        return redirect('/questions/show/'.$o1->question_id);
    }

    public function down($id1){

        $this->middleware('auth');

        $q1 =AnswerVotes::where([['answer_id','=',$id1],['voter_id','=',auth::id()]]);
        $c1 = count($q1->get());

        $q2 = AnswerVotes::where([ ['answer_id','=',$id1] , ['voter_id','=',auth::id()] ,  ['value','=',1]]);
        $c2 = count($q2->get());
        
        $o1 = Answer::find($id1);

        if($c1 == 0) {
            $o1->score -= 1;
            $o1->save();
            $a = new AnswerVotes();
            $a->answer_id = $id1;
            $a->voter_id = auth::id();
            $a->value = -1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }else if ($c2 == 1){

            $q2->delete();
            $o1->score -= 2;
            $o1->save();
            $a = new AnswerVotes();
            $a->answer_id = $id1;
            $a->voter_id = auth::id();
            $a->value = -1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }
        return redirect('/questions/show/'.$o1->question_id);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
