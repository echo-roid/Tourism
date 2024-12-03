@extends('layouts.app')

@section('title',"User Details")

@section('content')
    <section style="min-height:600px">
        <div class="p-3 boxshadowgernet backbluelight">
                <ul class=" d-flex align-items-center mb-0 list-unstyled">
                    <li class="font500 font13">
                        <a href="{{ route('users.index') }}">Back</a>
                        
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
                    <li class="font13 font500">View User Details</li>
                </ul>
        </div>

        <div class="boxhalf mt-3 boxshadowgernet">
            <div class="card-header">
               User Details
              </div>
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                          <label for="user" class="form-label">Name : <a href="#" class="">{{ $user->name }}</a></label>
                        </div>
                        <div class="col-md-12">
                          <label for="user" class="form-label">Email : <a href="#" class="">{{ $user->email }}</a></label>
                        </div>
                       
                        <div class="col-md-12">
                          <label for="roles" class="form-label">Roles : </label>
                        </div>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            <div class="col-md-4">
                                <label class="form-check-label" for="gridCheck"><a href="#" class="">{{Str::ucfirst( $v) }} </a> </label>
                            </div>

                            @endforeach
                        @endif
                      </form>
                </div>
            </div>
        </div>
    </section>
@endsection