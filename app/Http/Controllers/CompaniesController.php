<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
use App\Helpers\LogActivity;
use Notification;
use App\Notifications\NewCompanyNotification;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::paginate(10);
        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
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
            'name' => 'required',
            'address' => 'required'
        ]);

        $company = new Companies([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'website' => $request->get('website'),
        ]);

        $company->save();

        $user = Auth::user();
        $details = [
            'greeting' => 'Hi' . $user->name,
            'body' => 'A new company has been added.',
            'actionText' => 'View Company Detail',
            'actionURL' => url('/'),
            'from' => $user->email
        ];
  
        // Notification::send($user, new NewCompanyNotification($details));
        LogActivity::addToLog('Added new company');
        return redirect('/admin/companies')->with('success', 'New company is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Companies::find($id);
        return view('admin.company.edit', compact('company'));
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
            'name' => 'required',
            'address' => 'required'
        ]);

        $company = Companies::find($id);
        $company->name = $request->get('name');
        $company->address = $request->get('address');
        $company->website = $request->get('website');
        $company->save();
        LogActivity::addToLog('Updated a company');
        return redirect('/admin/companies')->with('success', 'Company is now updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Companies::find($id);
        $company->delete();
        LogActivity::addToLog('Deleted a company');
        return redirect('/admin/companies')->with('success', $company->name . ' was successfully deleted.');
    }
}
