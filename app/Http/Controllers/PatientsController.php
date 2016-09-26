<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Patients;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Patients::all();
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
        $patients = new Patients;
        $patients->first_name = $request->first_name;
        $patients->middle_name = $request->middle_name;
        $patients->last_name = $request->last_name;
        $patients->gender = $request->gender;
        $patients->birthdate = $request->date_of_birth;
        $patients->mobile_number = $request->mobile_number;
        $patients->nextOfKin = $request->nextOfKin;
        $patients->street_name = $request->street;
        $patients->district_name = $request->district;
        $patients->region_name = $request->region;
        $patients->country_name = $request->country;
        $patients->email_address = $request->email;
        $patients->password = $request->passwd;
        $patients->save();

        return $patients;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Patients::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patients = Patients::find($id);
        //Updates
        $patients->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patients::find($id);
        $patients->delete();
        $patients->save();
    }
}
