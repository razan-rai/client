<?php
namespace App\Exports;

use App\Model\client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Client::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Gender',
            'Address',
            'Nationality',
            'Edu Background',
            'Date of birth',
            'Mode of Contact',
            'Email',
            'Phone',
            'Created at',
        ];
    }

}