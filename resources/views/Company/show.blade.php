@extends("layouts\adminDashboardLayout")

@section('content')
<div class="container-employee-detail">
    <div class="employee-heading">
        <h2 class="text-center">Company Details</h2>
    </div>
    <div class="employee-header">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <img src="/images/no-photo.png" height="100px" width="100px" alt="">
            </div>
            <div class="col-md-8">
                <p><span class="font-weight-bold">Name: </span>{{$company->name}}</p>
                <p><span class="font-weight-bold">Email: </span>{{$company->email}}</p>
                <p><span class="font-weight-bold">Website: </span>{{$company->website}}</p>
            </div>
        </div>
    </div>
</div>
@endsection