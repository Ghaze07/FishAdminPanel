@extends('layouts.admin')

@section('title')

   Dashboard | Blogs

@endsection
    


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Blogs</h4>
          <a href="/blog-create" class="btn btn-success">Add New Blog</a>
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
                <th>Title</th>
                <th>Author</th>
                <th>Language</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                 
                @foreach($blogs as $blog)
                      
                      <tr>
                      <td>{{ $blog->id }}</td>
                      <td>{{ $blog->title }}</td>
                      <td>{{ $blog->author->name_en }}</td>
                      <td>{{ $blog->language }}</td>
                        <td>
                        <a href="/blog-edit/{{ $blog->id }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                          <form action="/blog-delete/{{ $blog->id }}" method="POST">
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