<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelLog;

class TravelLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan seluruh data
        $travel_logs = TravelLog::all();
        return view('travel.index', compact('travel_logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untuk menampilkan view form tambah data
        return view('travel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // logic untuk tambah data
        // $travel_logs = new TravelLog;
        // $travel_logs->date = $request->date;
        // $travel_logs->time = $request->time;
        // $travel_logs->location = $request->location;
        // $travel_logs->temperature = $request->temperature;
        // $travel_logs->save();

        $travel_logs = TravelLog::create($request->all());
        return redirect('/travel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // untuk menampilkan single data / data tertentu
        $travel_log = TravelLog::find($id);

        return view('travel.show', compact('travel_log'));
    }

    public function edit($id)
    {
        // untuk menampilkan view form ubah data
        $travel_log = TravelLog::find($id);
        return view('travel.edit', compact('travel_log'));
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
        // logic untuk ubah data
        $travel_log = TravelLog::where('id', $id)->first()->update([
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'temperature' => $request->temperature
        ]);

        return redirect()->route('travel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // logic untuk hapus data
        $travel_logs = TravelLog::find($id)->delete();
        return redirect('/travel');
    }
}