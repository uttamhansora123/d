<?php

namespace App\Exports;

use App\Models\pd;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class eexport implements FromCollection,WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pd::all();
    }
}
