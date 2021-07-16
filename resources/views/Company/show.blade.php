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
                <p><span class="font-weight-bold">Name: </span>MicroMerger</p>
                <p><span class="font-weight-bold">Email: </span>info@micromerger.com</p>
                <p><span class="font-weight-bold">Website: </span>www.micromerger.com</p>
            </div>
        </div>
    </div>
    <div class="company-employees">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Controls</th>
                        </tr>
                    </thead>
                    <tbody>
                
                        <tr style="backgroundColor:#fff">
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td> 
                            <td class="justify-content-center"> 
                                <a href="#" class="btn btn-info btn-sm text-light">View</a>
                                <a href="#" class="btn btn-success btn-sm text-light">Edit</a>
                                <form action="#" method="POST" style="display:inline-block">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                                </form>
                            </td>
                        </tr>
                        <div><a href="#" class="btn btn-primary">Add Employee</a></div>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>   
</div>
@endsection