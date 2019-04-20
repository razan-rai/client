<?php
 
namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Model\client;
use DB;
use Excel;
use Illuminate\Http\Request;
use App\Exports\CustomerExport;
class ExcelController extends Controller
{
    /**.
     *
     * @var string
     */
    private $filename;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importExport()
    {
        return view('importExport');
    }

    /**
     * Download all the order in xls formate
     *
     * @param  excel formate type  $type
     * @return Download
     */
    public function downloadExcel($type)
    {
        if (! in_array($type, ['xls', 'csv'])) {
            $type = 'csv';
        }
        $fn = 'Client'.'-'.date('Y-m-d_H-i-s');
        return Excel::download(new CustomerExport, $fn.'.'.$type);   
    }
    
}