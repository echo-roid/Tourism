@extends('layouts.app')

@section('title',"Users")

@section('content')


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
        <li class="font13 font500">Manage Users</li>
    </ul>
</div>
<div class="p-4">
    <h3>Manage Users</h3>
    <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Roles</th>
          <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $user)
         <tr>
           <td>{{ ++$i }}</td>
           <td>{{ $user->name }}</td>
           <td>{{ $user->email }}</td>
           <td>
             @if(!empty($user->getRoleNames()))
               @foreach($user->getRoleNames() as $v)
                  <label class="badge badge-success text-info">{{ $v }}</label>
               @endforeach
             @endif
           </td>
           <td>
              {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
              <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
               {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                   {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
               {!! Form::close() !!} --}}

               <a class="createrole" href="{{ route('users.show',$user->id) }}">Show</a>
               @can('role-edit')
               <a class="createrole" href="{{ route('users.edit',$user->id) }}">Edit</a>
               @endcan
               @can('role-delete')
                   {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                   {!! Form::submit('Delete', ['class' => 'createrole']) !!}
                   {!! Form::close() !!}
               @endcan
           </td>
         </tr>
        @endforeach
       </table>


    {!! $data->render() !!}
       
</div>

@endsection