@extends('layouts.app')

@section('title',"Dashboard")

@section('content')

        <div class="pt-3 px-4">
            <div class="d-flex justify-content-end  mediatabs mb-2">
                <div class="memebrs d-flex align-items-center">
                    <img src="{{ asset('assets/email.png') }}" width="10" alt="">
                    <p class="mb-0 ms-2">Email</p>
                   
                </div>
                <div class="memebrs d-flex align-items-center">
                    <img src="{{asset('/assets/call.png')}}" width="15" alt="">
                    <p class="mb-0 ms-2"> call log</p>
                   
                </div>
                <div class="memebrs p-0 d-flex align-items-center">
                    <div class=" d-flex align-items-center p-1">
                        <img src="{{asset('/assets/sms.png')}}" width="15" alt="">
                        <p class="mb-0 ms-2"> SMS</p>
                        
                    </div>
                    <div class="border-start p-1 " style="height: 100%;">
                        <img src="{{asset('/assets/downarrow.png')}}" width="8" alt="">
                    </div>
                </div>
               
                <div class="memebrs d-flex align-items-center">
                    <img src="{{asset('/assets/task.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2">Task</p>
                   
                </div>
                <div class="memebrs d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <img src="{{asset('/assets/meeting.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2"> meeeting</p>
                   
                </div>

                <div class="memebrs d-flex align-items-center">
                    <img src="{{asset('/assets/salesAc.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2"> sales Activities</p>
                   
                </div>
                <div class="memebrs p-0 d-flex align-items-center"> 
                    <div class=" d-flex align-items-center p-1">
                        <img src="{{asset('/assets/deals.png')}}" width="10" alt="">
                        <p class="mb-0 ms-2"> Add Deal</p>
                        
                    </div>
                    <div class="border-start p-1" style="height: 100%;">
                        <img src="{{asset('/assets/downarrow.png')}}" width="8" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                @include('company.leftsidebar')
                <div class="col-md-10 px-0  rigthbarsection">
                    
                    <div class="bg-white p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Contract Team Members</h6>

                            <div class="pb-2" >
                            <button class="p-2 bg-white text-dark border addbutton addbutton2 d-flex align-items-center" data-toggle="modal" data-target="#add-team-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                </svg>
                                Add Team Member
                            </button>
                        </div>
                        </div>

                        <div class="mt-5">
                            <table class="table">
                                <tr class="">
                                    <th class="font12 tablecontactteamTh"><p class="mb-3 pb-3">Name</p></th>
                                    <th class="font12 tablecontactteamTh"><p class="mb-3 pb-3">Title</p></th>
                                    <th class="font12 tablecontactteamTh"><p class="mb-3 pb-3">Email</p></th>
                                    <!-- <th class="font12 tablecontactteamTh"><p class="mb-3 pb-3">PERMISSIONS ON THIS RECORD</p></th> -->
                                    <th class="font12 tablecontactteamTh"><p class="mb-3 pb-3">UPDATED AT</p></th>
                                </tr>
                                @foreach($contractUser as $user)

                                <tr>
                                    <td class="font12 tablecontactteamTh">{{$user->full_name}}</td>
                                    <td class="font12 tablecontactteamTh">{{$user->title}}</td>
                                    <td class="font12 tablecontactteamTh">{{$user->email}}</td>
                                    <!-- <td class="font12 tablecontactteamTh colorblue">Can view, edit, delete <img src="{{asset('/assets/secttinsengle.png')}}" class="mb-1 ms-1 " width="10" alt=""> </td> -->
                                    <td class="font12 tablecontactteamTh">{{$user->updated_at}}</td>
                                </tr>
                                @endforeach
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade" id="add-team-modal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                   
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    
                    
                    
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    
@endsection
