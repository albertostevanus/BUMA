@extends('layouts.app')
@section('content')
<link href="{{ asset('css/employee.css') }}" rel="stylesheet">
<script src="{{ asset('js/employee.js') }}" defer></script>
    <div class="container">
        <form action="/employee/{{$employee->id}}/update" method="POST">
        {{csrf_field()}}
            <div>						
                <h4>Edit Employee</h4>
            </div>
            <div>	
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control" value="{{$employee->id}}" readonly>
                </div>				
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$employee->name}}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{$employee->email}}" required>
                </div>
                <div class="form-group">
                    <label>Address</label> 
                    <textarea class="form-control" name="address" required>{{$employee->address}}</textarea>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control" value="{{$employee->role}}" required>
                </div>					
            </div>
            <div>
            <a href="/employees">
                <input type="button" class="btn btn-default" value="Cancel">
            </a>
            <input type="submit" class="btn btn-info" value="Save">
            </div>
        </form>
    </div>                        
@endsection