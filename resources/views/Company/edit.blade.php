@extends("layouts\adminDashboardLayout")

@section('content')
<div class="container">
    <h3 class="text-center">Edit Company Details</h3>
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
            @error('name')
            <div class="alert alert-danger alert-dismissible fad show" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
            <form method="POST" action="{{url('companies/' . $company->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="full_name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="full_name" value='{{$company->name}}'>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value='{{$company->email}}'>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" id="website" value='{{$company->website}}'>
                </div>
                <div class="form-group">
                    <div class="custom-file">    
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Upload New Image</label>
                    </div>
                </div>
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection