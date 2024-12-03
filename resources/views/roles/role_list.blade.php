@extends('layouts.app')

@section('title',"Roles")

@section('content')
    <section style="min-height: 550px">
        <div class="p-3 boxshadowgernet backbluelight">
                <ul class=" d-flex align-items-center mb-0 list-unstyled">
                    <li class="font500 font13">
                        <a href="{{route('home')}}">Back</a>
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
                    <li class="font13 font500">Role</li>
                </ul>
        </div>

        <div class="boxhalf boxshadowgernet mt-2 p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center">
                    <img src="./assets/menwithkey.png" width="20" alt="">
                    <p class="font15 colorblue font500 mb-0 ms-2">Roles and permission</p>
                </div>
                <div>
                    {{-- <button class="license"><img src="./assets/shop.png" width="10" alt="">
                            Manage Users</button> --}}
                    <a class="createrole" href="{{ route('users.index') }}"> Manage Users</a>
                    @can('role-create')
                        <a class="createrole" href="{{ route('roles.create') }}"> Create Role</a>
                    @endcan
                </div>
                </div>
                
                <div>
                    <p class="font13 colorblue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolores quasi doloremque voluptatibus ab aliquid <br> voluptas Lorem ipsum dolor sit amet  consectetur adipisicing elit. Illo quaerat vitae minima repellendus maiores <br> autem, mollitia, quo ut temporibus br, ullam ipsam commodi? Repudiandae magni, explicabo quas possimus <br>  ipsam veritatis soluta. nesciunt Aspernatur vel velit est excepturi maiores, quibusdam expedita et, voluptatum .</p>
                </div>

                <div>

                <button class="learmore">
                    <img src="./assets/ques.png" width="15" alt="">
                    Learn more
                </button>
                </div>
        </div>

        <div class="boxhalf mt-3 boxshadowgernet">

            <div class="p-2  musdardcolor">
                <p class="mb-0 font13 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi impedit error veritatis nihil, rerum quasi ducimus alias officia est ut non unde modi ipsa, culpa aspernatur quos. Reprehenderit, id nam!</p>
        </div>
        <div class="">
            <table class="Contract w-100">
                <tr class="backgroundlightblue ">
                    <th><p class=" p-2 mb-0">Sr.</p></th>
                    <th><p class=" p-2 mb-0">Roles</p></th>
                    <th><p class=" p-2 mb-0">liceness</p></th>
                    {{-- <th><p class=" p-2 mb-0">USER</p></th> --}}
                    <th><p class=" p-2 mb-0">CREATED</p></th>
                    <th><p class=" p-2 mb-0">UPDATED </p></th>
                    <th>Action</th>
                    
                </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td class="font12 px-2 py-2"> {{ ++$i }}</td>
                    <td class="font12 px-2 py-2"> {{ $role->name }}</td>
                    <td class="font12 px-2 py-2">700</td>
                    {{-- <td class="font12 px-2 py-2 colorblue">New</td> --}}
                    <td class="font12 px-2 py-2">{{ date("Y-m-d",strtotime($role->created_at)) }}</td>
                    <td class="font12 px-2 py-2">{{ date("Y-m-d",strtotime($role->updated_at)) }}</td>
                    <td>
                        <a class="createrole" href="{{ route('roles.show',$role->id) }}">Show</a>
                            @can('role-edit')
                            <a class="createrole" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'createrole']) !!}
                                {!! Form::close() !!}
                            @endcan

                        {{-- <button class="colorblue mliceneses">Manager liceneses</button> --}}
                    </td>
                </tr>
                @endforeach

                </table>
                {!! $roles->render() !!}
        </div>
    </section>
@endsection