<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Event;
use App\User;
use App\ListEvent;

class EventController extends Controller
{
    /** EVENT FORM*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = ListEvent::all();
        // $berlangsung = Event::where('mulai_acara', '=', $date)->count();
        // $selesai = Event::where('akhir_acara', '<', $date)->count();
        // $akandatang = Event::where('mulai_acara', '>', $date)->count();

        $title = 'Event List';
        return view('event.listevent', compact('title', 'event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Session::get('login')) {
            Session::flash('alert', 'Anda harus Masuk ke Akun');
            return redirect('login')->with('error');
        } else {
            $title = 'Event';
            return view('event.eventform', compact('title'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->step) {
            $event = $request->namaEvent;
            $lokasi = $request->lokasiEvent;
            $email = $request->email;

            $info = User::where('email', $email)->first();

            if ($info) {
                $title = 'Event Register';
                return view('event.eventregister', compact('title', 'event', 'lokasi', 'email'));
            } else {
                Session::flash('alert', 'Email yang digunakan tidak terdaftar');
                return redirect('/event');
            }
        } else {

            $this->validate($request, [
                'namaEvent' => 'required',
                'lokasi' => 'required',
                'email' => 'required',
                'pengantar' => 'required|file|mimes:pdf,doc,docx',
                'proposal' => 'required|file|mimes:pdf,doc,docx,pptx,ppt',
                'proposalRamai' => 'required|file|mimes:pdf,doc,docx',
                'deskripsi' => 'required|max:300',
            ], [
                'required' => 'The field is required',
                'mimes' => 'The field is wrong format'
            ]);

            $pengantar = $request->file('pengantar');
            $nama_pengantar = $pengantar->getClientOriginalName();
            $pengantar->move(public_path('dokumen/pengantar'), $nama_pengantar);

            $proposal = $request->file('proposal');
            $nama_proposal = $proposal->getClientOriginalName();
            $proposal->move(public_path('dokumen/proposal'), $nama_proposal);

            $proposalRamai = $request->file('proposalRamai');
            $nama_proposalRamai = $proposalRamai->getClientOriginalName();
            $proposalRamai->move(public_path('dokumen/proposalKeramaian'), $nama_proposalRamai);

            $date1 = substr($request->tanggalEvent, 0, 10);
            $date2 = substr($request->tanggalEvent, 15, 10);
            // dd($request->tanggalEvent, $date1, $date2);


            Event::create([
                'nama_event' => $request->namaEvent,
                'lokasi' => $request->lokasi,
                'email' => $request->email,
                'surat_pengantar' => $nama_pengantar,
                'proposal_acara' => $nama_proposal,
                'proposal_keramaian' => $nama_proposalRamai,
                'deskripsi_event' => $request->deskripsi,
                'mulai_acara' => $date1,
                'akhir_acara' => $date2,
            ]);

            $date = date('Y-m-d');

            if ($date1 == $date) {
                $status = "Sedang Berlangsung";
            }
            if ($date2 < $date) {
                $status = "Selesai";
            }
            if ($date1 > $date) {
                $status = "Akan Datang";
            }

            ListEvent::create([
                'nama_event' => $request->namaEvent,
                'mulai_acara' => $date1,
                'akhir_acara' => $date2,
                'lokasi' => $request->lokasi,
                'status' => $status,
            ]);

            return redirect('/event-list');

            // dd($request->all(), $nama_pengantar, $nama_proposal, $nama_proposalRamai);
        }
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
