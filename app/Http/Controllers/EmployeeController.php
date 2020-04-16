<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use App\Companies;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::paginate(10);
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Companies::pluck('name', 'id');
        return view('admin.employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'company_id' => 'required',
            'email' => 'email:rfc,dns'
        ]);

        $employee = new Employees([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'company_id' => $request->get('company_id'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        ]);

        $employee->save();
        \LogActivity::addToLog('New employee is added');
        return redirect('/admin/employees')->with('success', 'New employee is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employees::find($id);
        return view('admin.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::find($id);
        $selectedID = $employee->company_id;

        $companies = Companies::pluck('name', 'id');
        return view('admin.employee.edit', compact('selectedID', 'employee', 'companies'));
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
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'company_id' => 'required',
            'email' => 'email:rfc,dns'
        ]);

        $employee = Employees::find($id);
        $employee->firstname = $request->get('firstname');
        $employee->lastname = $request->get('lastname');
        $employee->company_id = $request->get('company_id');
        $employee->email = $request->get('email');
        $employee->phone = $request->get('phone');
        $employee->save();
        \LogActivity::addToLog('Updated an employee');
        return redirect('/admin/employees')->with('success', 'Employee is now updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        \LogActivity::addToLog('Deleted an employee');
        return redirect('/admin/employees')->with('success', $employee->firstname . ' ' . $employee->lastname . ' was successfully deleted.');
    }
}
