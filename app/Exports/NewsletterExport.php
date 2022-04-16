<?php

namespace App\Exports;

use App\newstletter;
use Maatwebsite\Excel\Concerns\FromCollection;

class NewsletterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return newstletter::select('email')->get();
    }
}
