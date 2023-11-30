@extends('layouts.admin.master')
@section('content')
    <form method="post" action="{{route("doctors.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control"  placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label >Doctor's Image</label><br>
            <input type="file" class="btn btn-gradient-primary" name="img" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Degree</label>
            <input type="text" class="form-control"  placeholder="Enter Degree" name="degree">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Experience</label>
            <textarea class="form-control"  placeholder="Enter experience" name="experience"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">About</label>
            <input type="text" class="form-control"  placeholder="Enter About" name="about">
        </div>


        <button type="submit" class="btn btn-gradient-primary">Add</button>
    </form>
@endsection
