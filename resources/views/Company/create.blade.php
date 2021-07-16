@extends("layouts\adminDashboardLayout")

@section('content')
<div class="container">
        <h3 class="text-center">Add New Company</h3>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <form method="POST" action="/companies/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="full_name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="full_name">
                    @error('name')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                    @error('email')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="full_name">Website</label>
                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" id="wbsite">
                    @error('name')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-file">    
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Upload Image</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection