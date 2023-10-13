@extends('layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Register Form</div>
        <div class="card-body"> 
        
            <form action= "{{ route('register') }}" method="post">
             {!! csrf_field() !!}   
            <label>First Name</label>
            <input type="text" name="fname" id="fname" class ="form-control"> </br>

            <label>Last Name</label>
            <input type="text" name="lname" id="lname" class ="form-control"> </br>

            <label>Mobile No.</label>
            <input type="number" name="mobile" id="mobile" class ="form-control"> </br>

      
            <label>Email</label>
            <input type="email" name="email" id="email" class ="form-control"> </br>


            <label>Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>
            <input type="submit" value="Save" class="btn btn-success"> 

            </form>
        </div>
    </div>

@stop