<?php

namespace App\Exports;

use App\company;

use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return company::all();
    }
}
