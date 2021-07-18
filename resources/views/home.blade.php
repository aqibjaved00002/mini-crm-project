@extends('layouts.adminDashboardLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--Success Msg--}}
            @if (session('msg_success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('msg_success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="text-center">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-4">Companies</h1>
                        <h1 class="display-3" style="color:green;">{{$companies_count}}</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-4">Employees</h1>
                        <h1 class="display-3" style="color:green;">{{$employees_count}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="instructions">
                <h6 style="color:red;"><u>Important instructions:</u></h6>
                <span>1. Welcome to mini CRM project.</span><br>
                <span>2. There are two optios:-
                    <ul>
                        <li>Companies</li>
                        <li>Employees</li>
                    </ul>
                </span>
                <span>3. In order to add employees you need to add company first.</span><br>
                <span>4. When you add company, the added companies will be displayed in combo box of employee form.</span><br>
                <span>5. After that you'll be able to add employees in a specific company.</span><br>
                <span>6. An email notification will be sent autometically when you create a company.</span>
            </div>
        </div>
    </div>
</div>
@endsection
