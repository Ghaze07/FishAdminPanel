@extends('layouts.admin')

@section('title')

   Dashboard | New Blog

@endsection
    


@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add Fishes</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Dashboard</a></li>
          <li class="breadcrumb-item active">Add Fishes</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <form method="post" action="">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        
          <label class="col-md-3">Title</label>
          <div class="col-md-6"><input type="text" name="title" class="form-control" placeholder="Enter Fish Nmae"></div>
          <div class="clearfix"></div>
          <label class="col-md-3">In Stock</label>
          <div class="col-md-6"><input type="text" name="instock" class="form-control" placeholder="For Yes enter 1:For No enter 0"></div>
          <div class="clearfix"></div>
          <label class="col-md-3">Price</label>
          <div class="col-md-6"><input type="number" name="price" class="form-control" placeholder="Enter Price"></div>
          <div class="clearfix"></div>
          <label class="col-md-3">Quantity</label>
          <div class="col-md-6"><input type="text" name="quantity" class="form-control" placeholder="Enter Quanities i-e 1,2,3" pattern="[0-99],[0-99],[0-99]"></div>
          <div class="clearfix"></div>
          <textarea></textarea>
        
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>

  

@endsection

@section('script')


@endsection

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

	<script>
		tinymce.init({
			selector: 'textarea'
			
		});
	</script>