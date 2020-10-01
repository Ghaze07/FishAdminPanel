@extends('layouts.admin')

@section('title')

   Dashboard | New Blog

@endsection
    


@section('content')

<div class="container">
    <div class="col-md-12">
      <div class="card overflow-auto">
        <div class="card-header">
          <h4 class="card-title"> Create Blog</h4>
          
          
        </div>
        <div class="container">
          
          <div class="col-md-6">
            <form action="" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title">
                        {{-- <label>slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Enter slug"> --}}
                        {{-- <label>Author Id</label>
                        <input type="number" name="author_id" class="form-control" placeholder="Enter id"> --}}
                        <label>Author</label>
                        <select class="custom-select" id="authors">
                          @foreach($authors as $author)
                          <option value="{{ $author->id }}">{{ $author->name_en }}</option>
                          @endforeach
                      </select>
                        {{-- <label>Language</label>
                        <input type="text" name="language" class="form-control" placeholder="Enter language"> --}}
                        <label>content</label>
                        <textarea></textarea>
                                                      
                    </div>
                     
                    <button type="submit" class="btn btn-success">Publish</button>
                    <a href="/dashboard/blogs" class="btn btn-danger">Cancel</a>

                </form>
            </div>
          
        </div>
      </div>
    </div>

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