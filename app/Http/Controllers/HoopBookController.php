<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoopBookController extends Controller
{
    // DASHBOARD
    public function dashboard()
    {
        return view('dashboard');
    }

    // SIMPAN LAPANGAN
    public function storeLapangan(Request $request)
    {
        return redirect()
            ->back()
            ->with(
                'success',
                'Lapangan berhasil ditambahkan'
            );
    }

    // HAPUS LAPANGAN
    public function destroyLapangan($id)
    {
        return redirect()
            ->back()
            ->with(
                'success',
                'Lapangan berhasil dihapus'
            );
    }
}