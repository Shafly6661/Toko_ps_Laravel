@extends('adminlte::page')

@section('title','Profile ')

@section('content_header')
        <h1>Profile</h1>
@stop

@section('content')
<p>Welcome to this Beautiful Profile</p>
<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">password</label>
      <input type="password" class="form-control" id="password" placeholder="password">
    </div>
    <button class="btn btn-danger" type="submit">Submit</button>
  </form>
@stop
@section('footer')
<div class="float-right d-none d-sm-block">
    <b>Version</b>1.0.0
</div>
<strong>CopyRight &copy; {{date('Y')}}
    <a href="http://ft.unsur.ac.id/" target="_blank">Fakultas Teknik
        Universitas Suryakancana</a>.</strong>All Right reserved
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script>console.log ('HI!')</script>

@stop
