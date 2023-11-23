<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RentalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $now = Carbon::now();

        $results = DB::table('managements')
        ->join('rentals', 'managements.id', '=', 'rentals.car_id')
        ->select('managements.*', 'rentals.*')
        ->where(function ($query) use ($now) {
            $query->where('rentals.date_rented', '>', $now)
                ->orWhere('rentals.date_returned', '<', $now);
        })  
        ->where('managements.user_id', '!=', $id)
        ->get();
        return view('rental.index',compact('results'));
    }
    public function fetch(Request $request){
        return "test";
    }
}
