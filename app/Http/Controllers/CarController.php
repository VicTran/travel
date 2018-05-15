<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarDetailImage;
use CKSource\CKFinder\Filesystem\File\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(10);

        return view('cars.index',compact(
            'cars'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = $request->all();
        try{
            DB::beginTransaction();
            $car = new Car();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = microtime() . $file->getClientOriginalName();
                $path = public_path('upload/images/' . $filename);
                Image::make($file->getRealPath())->resize(600, 600)->save($path);
                $car->image_src = 'upload/images/' . $filename;
            }


            if ($request->hasFile('fImages')) {
                foreach ($request->file('fImages') as $key => $file) {
                    if (isset($file)) {
                        $filename = microtime() . $file->getClientOriginalName();
                        $car->image_detail_src = 'upload/images/image_details/' . $filename;
                        $file->move('upload/images/image_details/', $filename);
                    }
                }
            }
            $car_id = $car->saveCar($cars);
            DB::commit();
            alert()->overlay('Create Car', 'Success Create Car', 'success');
            return redirect(route('car.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }
        return redirect(route('car.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('cars.edit', compact('car'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cars = $request->all();
        try{
            DB::beginTransaction();
            $car = Car::find($id);
            if ($request->hasFile('image')) {
                //xoa anh cu trong project
                if (Storage::exists($car->image_src)) {
                    Storage:delete($car->image_src);
                }

                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $path = public_path('upload/images/' . $filename);
                Image::make($file->getRealPath())->resize(600, 600)->save($path);
                $car->image_src = 'upload/images/' . $filename;

            }

            // save into product_image and move to upload/images/image_details
            if ($request->hasFile('fImages')) {
                foreach ($request->file('fImages') as $key => $file) {
                    if (isset($file)) {
                        if (Storage::exists($car->image_detail_src)) {
                            Storage::delete($car->image_detail_src);
//                            Storage:delete($car->image_detail_src);
                        }

                        $filename = $file->getClientOriginalName();
                        $path = public_path('upload/images/image_details/' . $filename);
                        Image::make($file->getRealPath())->resize(600, 600)->save($path);
                        $car->image_detail_src = 'upload/images/image_details/' . $filename;
                    }
                }
            }
            $car->updateCar($cars);

            DB::commit();
            alert()->overlay('Update Car', 'Success Update Car', 'info');

            return redirect(route('car.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Car::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        alert()->overlay('Delete Car', 'Success Delete Car', 'error');
        return redirect(route('car.index'));
    }
}
