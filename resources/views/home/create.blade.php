@extends('layouts.app')
@include ('includes.style_links')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-5">
            <div class="card card-body" id="save-card">
                <h4>Create Content Here</h4>
                    <form method="post" action="{{ url('home/create') }}" >
                    {{ csrf_field() }}

                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors -> all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(\Session:: has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session:: get('success')}}</p>
                        </div>
                    @endif
                        <div class="input-field ">
                            <input id="last_name" type="text" class="validate" name="name" >
                            <label for="last_name">First Name</label>
                        </div>
                        <div class="input-field">
                            <input id="last_name" type="text" name="description" class="validate">
                            <label for="last_name">Description</label>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" class="btn" value="Save To Database">
                        </div>
                    </form>
                </div>  
       </div>    
    </div>
</div>
@include ('includes.scripts')

