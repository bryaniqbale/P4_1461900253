<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Perpus;

use App\Exports\Data_1461900253;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpus = Perpus::join('jenis_buku', 'buku.id', 'jenis_buku.id')
        ->select('buku.judul', 'buku.tahun_terbit', 'jenis_buku.jenis')
        ->get();
        return view('tmpln0253', ['perpus' => $perpus]);
    }

    public function perpusexport()
    {
        return Excel::download(new Data_1461900253, 'perpus.xlsx');
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
