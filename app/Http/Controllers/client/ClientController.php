<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Model\client;
use Response;
use Redirect;
use Datatables;
class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric|unique:clients',
            'email' => 'required|email|unique:clients',
            'address' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'edu_background' => 'required',
            'dob' => 'required|date',
            'mode_of_contact' => 'required',
            'nationality' => 'required',
        ]);

        $input = $request->all();

        if ($validator->fails()) 
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        
           
              $error_message = '';
             try {
                    // store ckient detail
                    $client_create = Client::create($input);

                    return Redirect::back()->withFlashSuccess("New Client added successfully");
             }
            catch (Exception $e)
             {
                $error_message = $e->getMessage();
                return Redirect::back()->withErrors($error_message)->withInput();
             }
             return Redirect::back()->withFlashSuccess("Cannot add order! Please check again");
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllClients()
    {
        $clients = $this->getForDataTable();
        return Datatables::of($clients)
        ->escapeColumns([])
        ->addColumn('actions', function ($clients) {
            return '<a href="'.route('clients.edit', $clients->id).'" class="btn btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a>

            <a href="'.route('clients.show', $clients->id).'" class="btn btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="View"></i></a>

            <a href="'.route('clients.destroy', $clients->id).'"
             data-method="delete"
             data-trans-button-cancel="Cancel"
             data-trans-button-confirm="Delete"
             data-trans-title="Are you sure to delete"
             class=" delete-form btn btn-danger"><i class="icon_close_alt2" data-toggle="tooltip" data-placement="top" title="Delete"></i></a> 

             ';
        })
        ->make(true);
    }

    /**
     * Get all the required data
     *
     * @return Response
     */
    public function getForDataTable()
    {
        /**
         * Note: You must return deleted_at or the news getActionButtonsAttribute won't
         * be able to differentiate what buttons to show for each row.
         */
        $dataTableQuery = Client::query()
            ->orderBy('created_at', 'desc')
            ->select([
                'clients.id as id',
                'clients.name as name',
                'clients.email as email',
                'clients.gender as gender',
                'clients.address as address',
                'clients.nationality as nationality',
                'clients.edu_background as edu_background',
                'clients.dob as dob',
                'clients.mode_of_contact as mode_of_contact',
                'clients.phone as phone',
                'clients.created_at as created_at',
                'clients.updated_at as updated_at'
            ]);
        // active() is a scope on the UserScope trait
        return $dataTableQuery;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}


