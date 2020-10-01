@extends('layouts.admin')

@section('title')

   Dashboard | Edit Registerd Users

@endsection
    
 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">

                <h3>Edit User Role</h3>

                </div> 
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="/user-role-update/{{ $users->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <h4>{{ $users->name }}</h4>                                    
                                </div>
                                <div class="form-group">
                                    <label>Assign Role</label>
                                    <select name="usertype" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="customer">Customer</option>
        
                                    </select>
        
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/dashboard/users" class="btn btn-danger">Cancel</a>
        
                            </form>
                        </div>
                    </div>
                    

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@section('script')
    
@endsection