<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TuorDetail;


class TourController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = TuorDetail::paginate(10);
        return view('tour.index', compact('tours'));
    }

    public function home()
    {
        $pageIndex = true;
        $tours = DB::table('tuor_details')
            ->orderBy('number_booking', 'desc')
            ->take(10)
            ->get();
        $seaTours = DB::table('tuor_details')
            ->take(10)
            ->get();
        return view('home', compact('tours', 'seaTours','pageIndex'));
    }


    public function show($id)
    {
        $tour = TuorDetail::find($id);
        $tourDetailImages = DB::table('tour_detail_images')
                            ->where('tour_id','=',$id)
                            ->get();

        return view('tour.detail', compact('tour','tourDetailImages'
        ));
    }

    public  function saveBook($id, Request $request)
    {
        alert()->overlay('Save Booking', 'Success Save Booking ', 'success');
        return redirect(route('index'));
    }
}
