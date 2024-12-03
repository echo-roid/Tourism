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
                        <img src="./assets/rightarrow.png" alt="">
                    </li>
                    <li class="colorblue font500 font13 ms-4">
                        Admin Setting  
                    </li>
                    <li class="mx-2">
                        <img src="{{ asset('public/assets/rightarrow.png') }}" alt="">
                    </li>
                    <li class="font13 font500">View Role Permission</li>
                </ul>
        </div>

        <div class="boxhalf mt-3 boxshadowgernet">
            <div class="card-header">
               Viw Role Permission
              </div>
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                          <label for="inputEmail4" class="form-label">Role : <a href="#" class="">{{ $role->name }}</a></label>
                        </div>
                        <div class="col-md-12">
                          <label for="inputPassword4" class="form-label">Module Permissions : </label>
                        </div>
                        @foreach($rolePermissions as $v)
                            <div class="col-3">
                            <div class="form-check">
                                <label class="form-check-label" for="gridCheck"><a href="#" class="">{{Str::ucfirst( $v->name) }} </a> </label>
                            </div>
                            </div>
                        @endforeach
                      </form>
                </div>
            </div>
        </div>
    </section>
@endsection