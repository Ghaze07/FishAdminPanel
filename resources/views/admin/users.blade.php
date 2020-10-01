@extends('layouts.admin')

@section('title')

   Dashboard | Registerd Users

@endsection
    


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Customers</h4>
          @if (session('status'))
           <div class="alert alert-success" role="alert">

            {{ session('status')}}

           </div>

          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                 
                @foreach($users as $user)
                      
                      <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->mobile }}</td>
                      <td>{{ $user->role }}</td>
                        <td>
                        <a href="/user-edit/{{ $user->id }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                          <form action="/user-delete/{{ $user->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                      </td>
                        
                      </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
@endsection

@section('script')
    
@endsection