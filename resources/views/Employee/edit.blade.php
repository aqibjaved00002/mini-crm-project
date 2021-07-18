@extends("layouts\adminDashboardLayout")

@section('content')
<div class="container">
        <h3 class="text-center">Edit Employee</h3>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fad show" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @error('first_name')
            <div class="alert alert-danger alert-dismissible fad show" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
            @error('last_name')
            <div class="alert alert-danger alert-dismissible fad show" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
            <form method="POST" action="{{url('employees/' . $employee->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
                <div class="form-group">
                    <label for="full_name">First Name</label>
                    <input type="text" name="first_name" class="form-control @error('name') is-invalid @enderror" value='{{$employee->first_name}}' id="full_name">
                </div>
                <div class="form-group">
                    <label for="full_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control @error('name') is-invalid @enderror" value='{{$employee->last_name}}' id="full_name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value='{{$employee->email}}' id="email">
                </div>
                <div class="form-group">
                    <label for="full_name">Phone</label>
                    <input type="text" name="phone" class="form-control @error('website') is-invalid @enderror" value='{{$employee->phone}}' id="wbsite">
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <select name="selected" id="select" value='{{$employee->company}}' class="form-control form-control-user">
                    @forelse($companies as $company)
                        <option value="{{$company->name}}">{{$company->name}}</option>
                    @empty
                        <option selected>No Company Selected</option>
                    </select>
                    @endforelse

                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection