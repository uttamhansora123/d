<?php

namespace App\Imports;

use App\Models\pd;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class iimport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pd([
            'id'       =>$row[0],
            'name'     => $row[1],
            'email'    => $row[2],
            'phone'    => $row[3],
            'dob'      => $row[4],
            'created_at' =>$row[5],
            'updated_at' =>$row[6]
        ]);
    }
}
