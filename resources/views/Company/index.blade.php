@extends("layouts\adminDashboardLayout")

@section('content')

<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($companies as $company)
                <tr style="backgroundColor:#fff">
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->website}}</td>
                    <td>{{$company->created_at}}</td>
                    <td>{{$company->updated_at}}</td> 
                    <td class="justify-content-center"> 
                        <a href="{{'companies/'.$company->id}}" class="btn btn-info btn-sm text-light">View</a>
                        <a href="{{'companies/edit/'.$company->id}}" class="btn btn-success btn-sm text-light">Edit</a>
                        <form action="#" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No Records Found.</td>
                </tr>
                @endforelse
                <div><a href="{{route('companies.create')}}" class="btn btn-primary">Add Company</a></div>
                
            </tbody>
        </table>
        
    </div>
</div>

@endsection