<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::paginate(10);
        return view('hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotels = $request->all();

        try{
            DB::beginTransaction();
            $hotel = new Hotel();

            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $filename = microtime() . $file->getClientOriginalName();
                $path = public_path('upload/images/' . $filename);
                Image::make($file->getRealPath())->resize(600, 600)->save($path);
                $hotel->img = 'upload/images/' . $filename;
            }

            $hotel->saveHotel($hotels);
            DB::commit();
            alert()->overlay('Create Hotel', 'Success Create Hotel', 'success');

            return redirect(route('hotel.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }


        return redirect(route('hotel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        return view('hotels.edit', compact('hotel'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $hotels = $request->all();
        try{
            DB::beginTransaction();
            $hotel = Hotel::find($id);
            if ($request->hasFile('img')) {
                //xoa anh cu trong project
                if (Storage::exists($hotel->img)) {
                    Storage:delete($hotel->img);
                }

                $file = $request->file('img');
                $filename = $file->getClientOriginalName();
                $path = public_path('upload/images/' . $filename);
                Image::make($file->getRealPath())->resize(600, 600)->save($path);
                $hotel->img = 'upload/images/' . $filename;

            }

            $hotel->updateHotel($hotels);

            DB::commit();
            alert()->overlay('Update Hotel', 'Success Update Hotel', 'info');

            return redirect(route('hotel.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Hotel::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        alert()->overlay('Delete Hotel', 'Success Delete Hotel', 'error');
        return redirect(route('hotel.index'));
    }
}
