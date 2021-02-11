<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FirstSheetImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $name = $row['nev'] ?? null;
        $email = $row['e_mail_cim'] ?? null;
        $tax =  explode('-', $row['adoszam'] ?? null)[0] ?? null;
        if($name && $tax) {
            return Company::create([
               'name' => $name,
               'email' => $email,
               'tax_id' => $tax,
            ]);
        }else {
            return null;
        }
    }
}
