<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionVotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionVotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function up($id){


        $q1 =QuestionVotes::where([['post_id','=',$id],['voter_id','=',auth::id()]]);
        $c1 = count($q1->get());

        $q2 = QuestionVotes::where([ ['post_id','=',$id] , ['voter_id','=',auth::id()] ,  ['value','=',-1]]);
        $c2 = count($q2->get());
        $o = Question::find($id);

        if($c1 == 0) {
            $o->score += 1;
            $o->save();
            $a = new  QuestionVotes();
            $a->post_id = $o->id;
            $a->voter_id = auth::id();
            $a->value = 1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }else if ($c2 == 1){
            $q2->delete();
            $o->score += 2;
            $o->save();
            $a = new  QuestionVotes();
            $a->post_id = $o->id;
            $a->voter_id = auth::id();
            $a->value = 1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }
        return redirect('/questions/show/'.$id);
    }

    public function down($id){

        $q1 =QuestionVotes::where([['post_id','=',$id],['voter_id','=',auth::id()]]);
        $c1 = count($q1->get());

        $q2 = QuestionVotes::where([ ['post_id','=',$id] , ['voter_id','=',auth::id()] ,  ['value','=',1]]);
        $c2 = count($q2->get());
        $o = Question::find($id);
        if($c1 == 0) {
            $o->score -= 1;
            $o->save();
            $a = new  QuestionVotes();
            $a->post_id = $o->id;
            $a->voter_id = auth::id();
            $a->value = -1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }else if ($c2 == 1){
            $q2->delete();
            $o->score -= 2;
            $o->save();
            $a = new  QuestionVotes();
            $a->post_id = $o->id;
            $a->voter_id = auth::id();
            $a->value = -1;
            $a->save();
            //return view('answer_create')->with('o', $o);
        }else{
            //return view('answer_create')->with('o', $o);
        }
        return redirect('/questions/show/'.$id);
    }




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
