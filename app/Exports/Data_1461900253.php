<?php

namespace App\Exports;

use App\Models\Perpus;
use Maatwebsite\Excel\Concerns\FromCollection;

class Data_1461900253 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perpus::join('jenis_buku', 'buku.id', 'jenis_buku.id')
        ->select('buku.judul', 'buku.tahun_terbit', 'jenis_buku.jenis')
        ->get();
    }
}
