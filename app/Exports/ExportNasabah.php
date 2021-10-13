<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ExportNasabah implements FromView
{
    use Exportable;

    public function view(): View
    {
        // TODO: Implement view() method.
        return view('admin.nasabah.NasabahAllExcel',[
            'nasabah' => User::where('role', '=', 'nasabah')->get()
        ]);
    }
}
