<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Transport;
use App\Models\Transport_Driver;
use App\Models\TransportDriver;
use App\Models\Way;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{


    public function openHomepage()
    {
        return view('myview');
    }

    public function getDrivers()
    {

        $drivers = Driver::all();
//        $drivers = Driver::orderBy('name', 'desc')->get();
//        $drivers = Driver::where('age', '<', '1990-01-01')->get();
//        $drivers = Driver::latest()->get();
        return view('drivers', ['drivers' => $drivers]);
    }

    public function getDriver($id)
    {
        $drivers = Driver::where('id', '=', $id)->get();
        if (count($drivers) == 0) {
            return view('error');
        }
        return view('driver', ['driver' => $drivers[0]]);
    }

    public function getTransportsInfo()
    {
        $transports = Transport::with('drivers')->get();
        return view('transports', ['transports' => $transports]);
    }

    public function getWaysInfo(){
          $ways = Way::with('transports')->get();
                return view('ways', ['ways' => $ways]);
    }
}



/*$transports = DB::table('transport_driver')->'transports')->get();
  return view('transports', ['transports' => $transports]);*/
//        $transports = Transport::query()->crossJoin('transports')->crossJoin('drivers')->where('transport_id', '=', '4')->get();
//        $transports = Transport::query()->crossJoin('drivers')->get();

//        $transports = Way::with('transports')->get();
//        $transports = Driver::with('transports')->get();
