@extends("layouts\adminDashboardLayout")

@section('content')
<div class="container-employee-detail">
    <div class="employee-heading">
        <h2 class="text-center">Employee Details</h2>
    </div>
    <div class="employee-header">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <img src="/images/no-photo.png" height="100px" width="100px" alt="">
            </div>
            <div class="col-md-8">
                <p><span class="font-weight-bold">Name: </span>{{$employee->first_name}}</p>
                <p><span class="font-weight-bold">Name: </span>{{$employee->last_name}}</p>
                <p><span class="font-weight-bold">Email: </span>{{$employee->email}}</p>
                <p><span class="font-weight-bold">Name: </span>{{$employee->phone}}</p>
                <p><span class="font-weight-bold">Website: </span>{{$employee->company}}</p>
            </div>
        </div>
    </div>
</div>
@endsection