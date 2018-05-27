<?php

namespace App\Http\Controllers;

use App\Rule;
use App\TuorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rule::paginate(10);
        $tours = TuorDetail::all();
        return view('admin.rules.index', compact('rules','tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = TuorDetail::all();
        return view('admin.rules.create', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rues = $request->all();
        try{
            DB::beginTransaction();
            $rule = new Rule();
            $rule_id = $rule->saveRule($rues);
            DB::commit();
            alert()->overlay('Create Rule', 'Success Create Rule', 'success');
            return redirect(route('rules.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }

        return redirect(route('rules.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rule = Rule::find($id);
        $tours = TuorDetail::all();

        return view('admin.rules.edit', compact('rule','tours'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $request->all();
        try{
            DB::beginTransaction();
            $rule = Rule::find($id);
            $rule->updateRule($rules);
            DB::commit();
            alert()->overlay('Save Rules', 'Success Save Rules', 'info');
            return redirect(route('rules.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Rule::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        alert()->overlay('Delete Rule', 'Success Delete Rule', 'error');
        return redirect(route('rules.index'));
    }
}
