@extends('layouts.master')

@section('title')
    Halaman Pendaftaran
@endsection
@section('content')
    
<form action="/kirim" method="POST">
    @csrf
    <label >Full Name</label> <br>
    <input type="text" name="fullname" > <br> <br>
    <label >Usia</label> <br>
    <input type="number" name="age"> <br> <br>

    <input type="submit" value="daftar">
</form>
@endsection