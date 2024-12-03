@extends('layouts.app')

@section('title',"Roles")

@section('content')
<div class="p-3 boxshadowgernet backbluelight">
    <ul class=" d-flex align-items-center mb-0 list-unstyled">
        <li class="font500 font13">
            <a href="{{route('users.index')}}">Back</a>
        </li>
        <li class="mx-2">
            <img src="{{ asset('public/assets/rightarrow.png') }}" alt="">
        </li>
        <li class="colorblue font500 font13 ms-4">
            Admin Setting  
        </li>
        <li class="mx-2">
            <img src="{{ asset('public/assets/rightarrow.png') }}" alt="">
        </li>
        <li class="font13 font500">Manage Users</li>
    </ul>
</div>

<div class="p-4">

    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id],'class'=>'row g-3']) !!}

    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
    </div>

    <div class="col-md-6">
        <label for="password" class="form-label">Password:</label>
        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
    </div>
    <div class="col-md-6">
        <label for="confirm-password" class="form-label">Confirm Password:</label>
        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <label for="role" class="form-label">Role:</label>
        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
</div>
@endsection