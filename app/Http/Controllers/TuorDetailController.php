<?php

namespace App\Http\Controllers;

use App\TourDetailImage;
use App\TuorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class TuorDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = TuorDetail::paginate(1);

        return view('tourdetail.index',compact(
            'tours'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tourdetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tours = $request->all();

        try{
            DB::beginTransaction();
            $tour = new TuorDetail();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = microtime() . $file->getClientOriginalName();
                $path = public_path('upload/images/' . $filename);
                Image::make($file->getRealPath())->resize(600, 600)->save($path);
                $tour->image = 'upload/images/' . $filename;
            }

            $tour_id = $tour->saveTourDetail($tours);

            if ($request->hasFile('fImages')) {
                foreach ($request->file('fImages') as $key => $file) {
                    $tour_detail_image = new TourDetailImage();
                    if (isset($file)) {
                        $filename = microtime() . $file->getClientOriginalName();
                        $tour_detail_image->tour_id = $tour_id;
                        $tour_detail_image->path = 'upload/images/image_details/' . $filename;
                        $file->move('upload/images/image_details/', $filename);
                        $tour_detail_image->save();
                    }
                }
            }
            DB::commit();
            return redirect(route('tour.index'))->with(['flash_level' => 'success', 'flash_message' => 'Success!!! Complete create product!']);
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }


        return redirect(route('tour.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TuorDetail  $tuorDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TuorDetail $tuorDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TuorDetail  $tuorDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = TuorDetail::find($id);
        return view('tourdetail.edit', compact('tour'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TuorDetail  $tuorDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TuorDetail $tuorDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TuorDetail  $tuorDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TuorDetail $tuorDetail)
    {
        //
    }
}
