<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;

class EventController extends Controller
{
    
    public function index()
    {
        $event = Event::latest()->get();
        return view('admin.event', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.editEvent', compact('event'));
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'judul'          => 'required',
            'jadwal_acara'   => 'required',
            'lokasi'         => 'required', 
        ],
            [
                'judul.required' => 'Masukkan Judul Event !',
                'jadwal_acara.required' => 'Masukkan Jadwal Event !',
                'lokasi.required' => 'Masukkan Lokasi Event !',
            ]
        );

        if($validator->fails()) {

            return redirect()->back()->with('error', 'Silahkan Isi Bidang Yang Kosong!');

        } else {

            $event = Event::create([
                'judul'             => $request->input('judul'),
                'jadwal_acara'      => $request->input('jadwal_acara'),
                'lokasi'            => $request->input('lokasi'),
            ]);


            if ($event) {
                return redirect()->back()->with('sukses', 'Event Berhasil Dibuat!');
            } else {
                return redirect()->back()->with('error', 'Event Gagal Dibuat!');
            }
        }
    }


    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'judul'          => 'required',
            'jadwal_acara'   => 'required',
            'lokasi'         => 'required', 
        ],
            [
                'judul.required' => 'Masukkan Judul Event !',
                'jadwal_acara.required' => 'Masukkan Jadwal Event !',
                'lokasi.required' => 'Masukkan Lokasi Event !',
            ]
        );

        if($validator->fails()) {

            return redirect()->back()->with('error', 'Silahkan Isi Bidang Yang Kosong!');

        } else {
            $event = Event::whereId($request->input('id'))->update([
                'judul'             => $request->input('judul'),
                'jadwal_acara'      => $request->input('jadwal_acara'),
                'lokasi'            => $request->input('lokasi'),
                ]);
                
            if ($event) {
                return redirect('admin/event')->with('success', 'Event Berhasil di Update!');
            } else {
                return redirect()->back()->with('gagal', 'Event Gagal di Update!');
            }

        }

    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        if ($event) {
            return redirect()->back()->with('success', 'Event deleted!');
        } else {
            return redirect()->back()->with('error', 'Event Gagal Dihapus!');
        }

    }
}
