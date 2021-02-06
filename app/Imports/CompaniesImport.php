<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;

class CompaniesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $name = $row[0];
        $tax = $row[1];
        if($name && $tax) {
            return Company::updateOrCreate(
                ['tax_id' => $tax],
                ['name' => $name]
            );
        }else {
            return null;
        }
    }
}
