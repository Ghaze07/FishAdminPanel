@extends('layouts.admin')

@section('title')

   Dashboard | Edit Fishes

@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit Fish</h4>
          <div class="card-body">
          <form action="{{url('fish-update/'.$fishes->id)}}" method="POST">
                {{ csrf_field() }} 
                {{ method_field('PUT') }}
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Fish Title</label>
                          <input type="text" name="title" class="form-control" value="{{$fishes->title}}" placeholder="Enter Fish Title">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>In Stock</label>
                        <input type="text" name="stock" class="form-control" value="{{$fishes->instock}}" placeholder="Enter Yes or No">
                        </div>
                    </div>              
                  </div>
    
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                        <input type="text" name="price" class="form-control" value="{{$fishes->price}}" placeholder="Enter Fish Price">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Quantity</label>
                      <input type="text" name="quantity" class="form-control" value="{{$fishes->quantity}}" placeholder="Enter Quantity">
                      </div>
                  </div>
                              
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-info" value="save">Update</button>
                  </div>  
                    
                </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
</div>      
@endsection