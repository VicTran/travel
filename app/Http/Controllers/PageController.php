<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\TuorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
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

    public function about()
    {
        return view('pages.about');
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

    public function search(Request $request)
    {
        if(!empty($request->all()))
        {
            $rules = $request->all();
            $condition = $rules['expense']."&&".$rules['time']."&&".$rules['vehicle']."&&".$rules['range']."&&".$rules['scenery'];
            $rules = DB::table('rules')->where('condition',$condition )->get();
            if(isset($rules))
            {
                $tour_ids = [];
                foreach ($rules as $rule)
                {
                    $tour_ids[] = $rule->tour_id;
                }
            }
            if(!empty($tour_ids))
            {
                $tours = DB::table('tuor_details')->whereIn('id',$tour_ids )->get();
            }else
            {
                $tours = [];
            }
            return view('pages.search',compact('tours'));
        }
        $tours = TuorDetail::all();
        return view('pages.search',compact('tours'));
    }
}
