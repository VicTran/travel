<?php

namespace App\Http\Controllers;

use App\ExplainQuestionNEO;
use Illuminate\Http\Request;

class ExplainQuestionNEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exQuestions = ExplainQuestionNEO::paginate(10);

        return view('admin.Explains.NEO.index', compact('exQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Explains.NEO.create', compact(''));
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
     * @param  \App\ExplainQuestionNEO  $explainQuestionNEO
     * @return \Illuminate\Http\Response
     */
    public function show(ExplainQuestionNEO $explainQuestionNEO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExplainQuestionNEO  $explainQuestionNEO
     * @return \Illuminate\Http\Response
     */
    public function edit(ExplainQuestionNEO $explainQuestionNEO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExplainQuestionNEO  $explainQuestionNEO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExplainQuestionNEO $explainQuestionNEO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExplainQuestionNEO  $explainQuestionNEO
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExplainQuestionNEO $explainQuestionNEO)
    {
        //
    }
}
