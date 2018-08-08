@extends('layouts.app')
@include ('includes.style_links')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-body">
            <h4>Welcome to Laravel</h4>
            <a class="btn" href="{{ url('home/create') }}">Submit Data To Database</a> <br>
            <a class="btn" href="{{ url('home/show') }}">Retrieve Data From Database</a>
        </div>
    </div>
</div>
</div>

