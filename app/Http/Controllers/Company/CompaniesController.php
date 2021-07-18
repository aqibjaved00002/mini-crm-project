<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Company;
use Hash;
use DB;
use Session;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = DB::table('companies')->latest()->paginate(10);

        return view('Company.index', ['companies' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validations
        $rule=['name'=> 'required'];
        $custom_message=['name.required' => 'Company name is required.'];
        $this->validate($request,$rule,$custom_message);
        //insert company
        $company=new Company;
        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;
        //Logo uploading
        if($request->hasFile('image')) {
            $company->image = $request->image->store('company_logos', 'public');
        }
        $company->save();
        Mail::send('emails.companyCreatedEmail', $company->toArray(),
        function($message){
            $message->to('crm@gmail.com',' Aqib Javed')
            ->subject('Company created successfuly');

        }
        );
        Session::flash('success', 'Company created successfuly.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::findOrFail($id);
        return view('Company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('Company.edit', compact('company'));
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
        //validations
        $rule=['name'=> 'required'];
        $custom_message=['name.required' => 'Company name is required.'];
        $this->validate($request,$rule,$custom_message);
        //edit company details
        $company = Company::find($id);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;
        if($request->hasFile('image')) {
            $company->image = $request->image->store('company_logos', 'public');
        }
        $company->save();
        Session::flash('success', 'Company details updated successfuly.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company=Company::find($id);
        $company->delete();
        return redirect()->back();
    }
    
}
