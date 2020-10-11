<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::latest()->get();
        return view('admin.attendance', compact('attendance'));
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'event'          => 'required',
            'status'         => 'required', 
        ],
            [
                'name.required' => 'Masukkan Nama !',
                'event.required' => 'Masukkan Jadwal Attendance !',
                'status.required' => 'Masukkan status Attendance !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $attendance = Attendance::create([
                'name'               => $request->input('name'),
                'event'              => $request->input('event'),
                'status'              => $request->input('status'),
            ]);


            if ($attendance) {
                return response()->json([
                    'success' => true,
                    'message' => 'Attendance Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Attendance Gagal Disimpan!',
                ], 400);
            }
        }
    }


}
