<?php

namespace App\Http\Controllers;

use Auth;
use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $qs = Answer::all();
        return view('answer_index')->with('qs' , $qs);
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

        $request->validate([
            'conten' => 'required'
        ]);


        $o = new Answer();
        $o->publisher_id = $request->publisher_id;
        $o->question_id = $request->question_id;
        $o->content = $request->conten;
        $o->save();

        return redirect('/questions/show/'.$request->question_id);
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
        $this->authorize('viewAny',Answer::class);
        $o = Answer::find($id);
        return view('answer_edit')->with('o',$o);
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
        $this->authorize('viewAny',Answer::class);
        $o = Answer::find($id);
        $o->content = $request->conten;
        $o->save();
        return redirect('/questions/show/'. $o->question_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('viewAny',Answer::class);
        Answer::find($id)->delete();

        return redirect('/answers/show');

    }
}
