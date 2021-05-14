
@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="my-8">Task Management
        <small> </small>
    </h1>
      <h2>All Task</h2>


    <a href="admin/task/create">

        <button class="btn btn-info">Create Task</button>
    </a>

      <table class="table">
          <thead>
              <tr>
                  <th>id</th>
                  <th>title</th>
                  <th>Operation</th>
              </tr>
          </thead>
          <tbody>
              @foreach($articles ?? '' as $article)
                  <tr>
                      <td>{{ $article->id }}</td>

                      <td>{{ $article->title }}</td>
                      <td>
                          <form action="/admin/task/{{$article->id}}" method="post">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger">delete</button>
                          </form>


                             <a  href="admin/task/{{$article->id}}/edit">
                             <button class="btn btn-success">Edit</button></a>


                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>

</div>
@endsection




