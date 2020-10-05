@extends('layouts.admin')

@section('title')

   Dashboard | Fishes

@endsection
    


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Fishes</h4>

        <a href="{{ url('/fish-add') }}" class="btn btn-primary py-2">Add Fish</a>
          @if (session('status'))
           <div class="alert alert-success" role="alert">

            {{ session('status')}}

           </div>

          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="dataTable" class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Title</th>
                <th>In Stock</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                 
                @foreach($fishes as $fish)
                      
                      <tr>
                      <td>{{ $fish->id }}</td>
                      <td>{{ $fish->title }}</td>
                      <td>{{ $fish->instock }}</td>
                      <td>{{ $fish->price }}</td>
                      <td>{{ $fish->quantity }}</td>
                      <td>
                        <a href="/fish-edit/{{ $fish->id }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                          <form action="/fish-delete/{{ $fish->id }}" method="POST">
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

@section('scripts')
    <script>
    $(document).ready( function () {
      $('#dataTable').DataTable();
    } );
    </script>
@endsection