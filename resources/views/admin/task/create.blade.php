@extends('layouts.master')


@section('content')
<div class="container">

    <h2>Create Task</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/task/create" method="post">
        @csrf
        <div class="form-group">
            <label for="title">title :</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
    <a href="/">    <button class="btn btn-danger">send</button></a>
    </form>
<a href="/"><button class="btn btn-success">BACK</button></a>
    </div>
@endsection
