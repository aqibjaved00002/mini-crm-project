<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Hash;
use DB;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = DB::table('companies')->paginate(15);

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
        $validateDta=$request->validate([
            'name' => 'required:max:40',
            'email' => 'required|unique:users|max:190'
        ]);

        $company=new Company;
        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;
        if($request->hasFile('image')) {
            $company->image = $request->image->store('company_logos', 'public');
        }
        $company->save();
        return redirect()->back()->with('msg_success', 'User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::find($id);
        return view('Company.show', $company);
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
        $validatedData = $request->validate([
            'name' => 'required:max:40',
            'email' => 'required|unique:users|max:190'
        ]);

        $company = Company::find($id);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;
        if($request->hasFile('image')) {
            $company->image = $request->image->store('company_logos', 'public');
        }
        $company->save();
        return redirect()->back()->with('msg_success', 'User Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
