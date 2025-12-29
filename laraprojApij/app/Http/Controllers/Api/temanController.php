<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teman;

class temanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status'=>true,
            'data'=>teman::all(),
            'msg'=>''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:30',
            'alamat'=>'required',
            'kota'=>'required|max:50',
            'telp'=>'required|max:20'
        ]);

        $dtateman = teman::create($request->all());

        return response()->json([
            'status'=>true,
            'data'=>$dtateman,
            'msg'=>'Data Berhasil di Simpan'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required|max:30',
            'alamat'=>'required',
            'kota'=>'required|max:50',
            'telp'=>'required|max:20'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
