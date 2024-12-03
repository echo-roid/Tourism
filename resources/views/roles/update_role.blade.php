@extends('layouts.app')

@section('title',"Dashboard")

@section('content')
    <section style="min-height:600px">
        <div class="p-3 boxshadowgernet backbluelight">
                <ul class=" d-flex align-items-center mb-0 list-unstyled">
                    <li class="font500 font13">
                        <a href="{{ route('roles.index') }}">Back</a>
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
                    <li class="font13 font500">Cerate Role</li>
                </ul>
        </div>

        <div class="boxhalf mt-3 boxshadowgernet">
            <div class="card-header">
               New Role Create
              </div>
            <div class="card">
                <div class="card-body">
                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id],'class' => 'row g-3']) !!}
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Role Name</label>
                          {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                        <div class="col-md-6"></div>
                        @foreach($permission as $value)
                        <div class="col-3">
                            <div class="form-check">
                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update Permission</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection