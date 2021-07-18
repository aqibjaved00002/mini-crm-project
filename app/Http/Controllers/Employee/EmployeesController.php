<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Organization;
use DB;
use Session;

class EmployeesController extends Controller
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
        $employee = DB::table('employees')->latest()->paginate(10);
        return view('Employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();
        return view('Employee.create', compact('companies'));
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
        $rule=['first_name'=> 'required','last_name' => 'required'];
        $custom_message=['first_name.required' => 'Employee first name is required.',
                          'last_name.required' => 'Employee last name is required.'
        ];
        $this->validate($request,$rule,$custom_message);
        //insert employee
        $employee=new Employee();
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->company=$request->selected;
        $employee->save();
        Session::flash('success', 'Employee added successfuly.');
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
        $employee=Employee::findOrFail($id);
        return view('Employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        $companies=Company::all();
        return view("Employee.edit", compact('employee','companies'));
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
        $rule=['first_name'=> 'required','last_name' => 'required'];
        $custom_message=['first_name.required' => 'Employee first name is required.',
                           'last_name.required' => 'Employee last name is required.'
        ];
        $this->validate($request,$rule,$custom_message);
        //edit employee details
        $employee = Employee::find($id);
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->company=$request->selected;
        $employee->save();
        Session::flash('success', 'Employee records updated successfuly.');
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
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->back();
    }
}
