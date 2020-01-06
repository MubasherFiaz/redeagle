<?php

namespace App\Exports;

use App\clientt;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ExportController implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	
        return clientt::all();
    }
        public function headings() : array
    {
        return [
            'Id',
        
            'First Name',
'Last Name',
'Number',
'Address',
'City',
'State',
'Zip',
'Lead Type',
'Status',
'Submit Date',
'Update Date',
'Name of Saler',
'Saler ID',
        ];
    }
}
