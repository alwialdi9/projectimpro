<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListEvent;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d');
        $list = ListEvent::all();
        foreach ($list as $ev) {
            $date1 = $ev['mulai_acara'];
            $date2 = $ev['akhir_acara'];

            if ($date1 == $date) {
                $status = "Sedang Berlangsung";
            }
            if ($date2 < $date) {
                $status = "Selesai";
            }
            if ($date1 > $date) {
                $status = "Akan Datang";
            }

            DB::table('list_event')->where('id', $ev['id'])->update([
                'status' => $status
            ]);
        }

        $title = 'Dashboard';
        return view('dashboard', compact('title'));
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
}
