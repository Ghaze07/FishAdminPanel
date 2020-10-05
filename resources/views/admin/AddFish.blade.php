@extends('layouts.admin')

@section('title')

   Dashboard | Add-Fish

@endsection
    


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add-Fish</h4>
          <a href="{{ url('/dashboard/fishes') }}" class="btn btn-primary py-2">Back</a>
          
        </div>
        <div class="card-body">
        <form action="{{ url('dashboard/fish-store') }}" method="POST">
            {{ csrf_field() }} 
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Fish Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Fish Title">
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>In Stock</label>
                        <input type="text" name="stock" class="form-control" placeholder="Enter Yes or No">
                    </div>
                </div>              
              </div>

              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Fish Price">
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Quantity</label>
                      <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                  </div>
              </div>
                          
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <button type="submit" class="btn btn-info" value="save">Save</button>
              </div>  
                
            </div>  
        </form>
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