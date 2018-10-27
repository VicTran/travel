<?php

namespace App\Http\Controllers;

use App\QuestionRiaSec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionRiaSecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = QuestionRiaSec::paginate(10);
        return view('admin.questions.RIASEC.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.RIASEC.create', compact(''));
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
            $questionRiaSec = new QuestionRiaSec();
            $question_id = $questionRiaSec->saveQuestionRiaSec($question);
            DB::commit();
            alert()->overlay('Create Question RIASEC', 'Success Create Question RIASEC', 'success');
            return redirect(route('riasec.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }

        return redirect(route('riasec.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionRiaSec  $questionRiaSec
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionRiaSec  $questionRiaSec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = QuestionRiaSec::find($id);

        return view('admin.questions.RIASEC.edit', compact('question'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionRiaSec  $questionRiaSec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = $request->all();
        try{
            DB::beginTransaction();
            $questionRiaSec = QuestionRiaSec::find($id);
            $questionRiaSec->updateQuestionRiaSec($question);
            DB::commit();
            alert()->overlay('Update Question RIASEC', 'Success Update Question RIASEC', 'info');
            return redirect(route('riasec.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionRiaSec  $questionRiaSec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            QuestionRiaSec::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        alert()->overlay('Delete Question RIASEC', 'Success Delete Question RIASEC', 'error');
        return redirect(route('riasec.index'));
    }
}
