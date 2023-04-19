<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PruebaMailable;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $data = new Record();
        $data->type_id              = isset($request[0]['type_id']) ? $request[0]['type_id'] : null;
        $data->name                 = isset($request[0]['name']) ? $request[0]['name'] : null;
        $data->description          = isset($request[0]['description']) ? $request[0]['description'] : null;
        $data->phone                = isset($request[0]['phone']) ? $request[0]['phone'] : null;
        $data->email                = isset($request[0]['email']) ? $request[0]['email'] : null ;
        $data->adress               = isset($request[0]['adress']) ? $request[0]['adress'] : null;
        $data->contact_name         = isset($request[0]['contact_name']) ? $request[0]['contact_name'] : null;
        $data->contact_email        = isset($request[0]['contact_email']) ? $request[0]['contact_email'] : null;
        $data->contact_position     = isset($request[0]['contact_position']) ? $request[0]['contact_position'] : null;
        $data->project_id           = isset($request[0]['project_id']) ? $request[0]['project_id'] : null;
        $data->save();

        Mail::to('juliocd94@gmail.com')->send(new PruebaMailable($data));
        Mail::to('todoennegocio@gmail.com')->send(new PruebaMailable($data));

        return "El registro fue exitoso";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
