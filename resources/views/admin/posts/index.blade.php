@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Posts</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Content</th>
                    <th scope="col">State</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        
                    <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->content}}</td>
                  </tr>

                  @endforeach
                </tbody>
              </table>

        </div>
    </div>
</div>

@endsection