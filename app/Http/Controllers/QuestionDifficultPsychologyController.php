<?php

namespace App\Http\Controllers;

use App\QuestionDifficultPsychology;
use App\TypePsychology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionDifficultPsychologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = QuestionDifficultPsychology::paginate(10);
        $types = TypePsychology::all();
        return view('admin.questions.Psychology.index', compact('questions','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = TypePsychology::all();
        return view('admin.questions.Psychology.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = $request->all();
        try{
            DB::beginTransaction();
            $questionDPL = new QuestionDifficultPsychology();
            $questionDPL_id = $questionDPL->saveQuestionDifficultPsychology($question);
            DB::commit();
            alert()->overlay('Create QuestionDifficult Psychology', 'Success Create QuestionDifficult Psychology', 'success');
            return redirect(route('psychology.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionDifficultPsychology  $questionDifficultPsychology
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionDifficultPsychology $questionDifficultPsychology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionDifficultPsychology  $questionDifficultPsychology
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = TypePsychology::all();
        $question = QuestionDifficultPsychology::find($id);

        return view('admin.questions.Psychology.edit', compact('question','types'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionDifficultPsychology  $questionDifficultPsychology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = $request->all();
        try{
            DB::beginTransaction();
            $questionDPL = QuestionDifficultPsychology::find($id);
            $questionDPL->updateQuestionDifficultPsychology($question);
            DB::commit();
            alert()->overlay('Update Difficult Psychology', 'Success Update Difficult Psychology', 'info');
            return redirect(route('psychology.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionDifficultPsychology  $questionDifficultPsychology
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            QuestionDifficultPsychology::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        alert()->overlay('Delete Question Difficult Psychology', 'Success Delete QuestionDifficult Psychology', 'error');
        return redirect(route('psychology.index'));
    }
}
