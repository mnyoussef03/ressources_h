<?php

namespace App\Http\Controllers;


use App\Models\Employer;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes=Employer::all();
        return view('employes.index',compact('employes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employes.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'registration_number'=>'required|numeric|unique:employers,registration_number',
            'firstName'=>'required|',
            'lastName'=>'required|',
            'departement'=>'required|',
            'hire_date'=>'required|',
            'phone'=>'required|unique:employers,phone',
            'adress'=>'required|unique:employers,adress',
            'city'=>'required|',
        ]);

            Employer::create(
                $request-> except('_token')
            );
            return redirect()->route('employes.index')->with([
                'success'=>'Employe added successfully'
            ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $employe=Employer::where('registration_number',$id)->first();
        return view('employes.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employe=Employer::where('registration_number',$id)->first();
        return view('employes.edit',compact('employe'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $employe=Employer::where('registration_number',$id)->first();
        $request->validate([
            'registration_number'=>'required|numeric',
            'firstName'=>'required',
            'lastName'=>'required',
            'departement'=>'required',
            'hire_date'=>'required',
            'phone'=>'required',
            'adress'=>'required',
            'city'=>'required']);
            $employe->update(
                $request-> except('_token','_method')
            );
            return redirect()->route('employes.index')->with([
                'success'=>'Employe Updated successfully'
            ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $employe=Employer::where('registration_number',$id)->first();
        $employe->delete();

        return redirect()->route('employes.index')->with([
            'success'=>'Employe Deleted successfully'
        ]);
    }
    public function vacationRequest($id){
        $employe=Employer::where('registration_number',$id)->first();
        return view('employes.vacation-Request',compact('employe'));

    }
    public function certificateRequest($id){
        $employe=Employer::where('registration_number',$id)->first();
        return view('employes.certificate-Request',compact('employe'));

    }
}
