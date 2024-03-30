@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Form Add User</h3>
  </div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="user_id">User ID</label>
        <select class="form-control" id="user_id">
          <option value="1">User 1</option>
          <option value="2">User 2</option>
          <option value="3">User 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="level_id">Level ID</label>
        <select class="form-control" id="level_id">
          <option value="1">Level 1</option>
          <option value="2">Level 2</option>
          <option value="3">Level 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Form Add Level</h3>
  </div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="level_id">Level ID</label>
        <select class="form-control" id="level_id">
          <option value="1">Level 1</option>
          <option value="2">Level 2</option>
          <option value="3">Level 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="level_kode">Level Code</label>
        <input type="text" class="form-control" id="level_kode" placeholder="Enter level code">
      </div>
      <div class="form-group">
        <label for="level_nama">Level Name</label>
        <input type="text" class="form-control" id="level_nama" placeholder="Enter level name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@stop
@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop