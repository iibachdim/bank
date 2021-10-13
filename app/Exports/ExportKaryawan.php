<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ExportKaryawan implements FromView
{
    use Exportable;

    public function view(): View
    {
        // TODO: Implement view() method.
        return view('admin.karyawan.KaryawanAllExcel',[
            'karyawan' => User::where('role', '=', 'karyawan')->get()
        ]);
    }
}
