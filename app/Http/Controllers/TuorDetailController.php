<?php

namespace App\Http\Controllers;

use App\TourDetailImage;
use App\TuorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $tours = TuorDetail::paginate(10);

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
            alert()->overlay('Create Tour', 'Success Create Tour', 'success');

            return redirect(route('tour.index'));
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
        $tour_images = TourDetailImage::where('tour_id', '=', $id)->get();

        return view('tourdetail.edit', compact('tour','tour_images'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TuorDetail  $tuorDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tours = $request->all();
        try{
            DB::beginTransaction();
            $tour = TuorDetail::find($id);
            if ($request->hasFile('image')) {
                //xoa anh cu trong project
                if (Storage::exists($tour->image)) {
                    Storage:delete($tour->image);
                }

                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $path = public_path('upload/images/' . $filename);
                Image::make($file->getRealPath())->resize(600, 600)->save($path);
                $tour->image = 'upload/images/' . $filename;

            }
            $tour->updateTourDetail($tours);

            // save into product_image and move to upload/images/image_details
            if ($request->hasFile('fImages')) {
                foreach ($request->file('fImages') as $key => $file) {
                    $tour_detail_image = new TourDetailImage();
                    if (isset($file)) {
                        $filename = microtime() . $file->getClientOriginalName();
                        $tour_detail_image->tour_id = $id;
                        $tour_detail_image->path = 'upload/images/image_details/' . $filename;
                        $file->move('upload/images/image_details/', $filename);
                        $tour_detail_image->save();
                    }
                }
            }
            DB::commit();
            alert()->overlay('Update Tour', 'Success Update Tour', 'info');

            return redirect(route('tour.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }


    }
    public function deleteImage(Request $request)
    {
        $data = $request->all();
        //xoa anh cu trong project
        if ($data['tour_image']) {
            Storage::delete($data['tour_image']);
        }
        $tour_image = TourDetailImage::find($data['tour_image_id']);
        $tour_image->delete();
        return '{"status" : "ok"}';
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TuorDetail  $tuorDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            TuorDetail::destroy($id);
//            DB::table('product_stores')->where('product_id', $id)->delete();
//            DB::table('prices')->where('product_id', $id)->delete();
//            DB::table('variation_details')->where('product_id', $id)->delete();
//            DB::table('product_images')->where('product_id', $id)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        return redirect(route('tour.index'));
    }

}
