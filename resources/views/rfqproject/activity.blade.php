@extends('layouts.app')

@section('title',"Dashboard")

@section('content')
    <div class="pt-4 px-4">
        <div class="d-flex justify-content-end  mediatabs mb-2">
            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/email.png')}}" width="10" alt="">
                <p class="mb-0 ms-2">Email</p>

            </div>
            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/call.png')}}" width="15" alt="">
                <p class="mb-0 ms-2"> call log</p>

            </div>
            <div class="memebrs p-0 d-flex align-items-center">
                <div class=" d-flex align-items-center p-1">
                    <img src="{{asset('/public/assets/sms.png')}}" width="15" alt="">
                    <p class="mb-0 ms-2"> SMS</p>

                </div>
                <div class="border-start p-1 " style="height: 100%;">
                    <img src="{{asset('/public/assets/downarrow.png')}}" width="8" alt="">
                </div>
            </div>

            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/task.png')}}" width="10" alt="">
                <p class="mb-0 ms-2">Task</p>

            </div>
            <div class="memebrs d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <img src="{{asset('/public/assets/meeting.png')}}" width="10" alt="">
                <p class="mb-0 ms-2"> meeeting</p>

            </div>

            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/salesAc.png')}}" width="10" alt="">
                <p class="mb-0 ms-2"> sales Activities</p>

            </div>
            <div class="memebrs p-0 d-flex align-items-center">
                <div class=" d-flex align-items-center p-1">
                    <img src="{{asset('/public/assets/deals.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2"> Add Deal</p>

                </div>
                <div class="border-start p-1" style="height: 100%;">
                    <img src="{{asset('/public/assets/downarrow.png')}}" width="8" alt="">
                </div>
            </div>

            <div class="memebrs p-0 d-flex align-items-center">
                <div class=" d-flex align-items-center p-1">
                    <img src="{{asset('/public/assets/deals.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2"  onclick="openme()"> Add Contract</p>

                </div>
                <div class="border-start p-1" style="height: 100%;">
                    <img src="{{asset('/public/assets/downarrow.png')}}" width="8" alt="">
                </div>
            </div>

        </div>
        <div class="row">
            
            @include('rfqproject.rfqleftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">
                
                <div class="bg-white ">
                    <div class="d-flex">
                        <div class="border-end tabmewidth p-3" >
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <li class="font13 colorblue me-4">activity Timeline</li>
                                <li class="font13">Notes</li>
                                <li class="font13 mx-4">Task</li>
                                <li class="font13" data-bs-toggle="modal" data-bs-target="#exampleModal1">Meeting</li>
                            </ul>
                        </div>

                        <div class="d-flex align-items-center px-3">
                                <img src="./assets/bluecircle.png" width="20" alt="">
                                <p class="mb-0 colorblue ms-2">Create custom sale activity</p>
                        </div>
                    

                    
                    </div>

                    <div class="d-flex p-3 stripcolor mb-3">
                        <p class="font12 mb-0 colorblue">filter by</p>
                        <div class="d-flex align-items-center mx-4">
                            <p class="font12 mb-0 colorblue me-2">All Activities</p>
                            <img src="./assets/downarrow.png" width="10" alt="">
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="font12 mb-0 colorblue me-2">All time products</p>
                            <img src="./assets/downarrow.png" width="10" alt="">
                        </div>
                    </div>
                </div>
                {{-- activities --}}
                <div class="p-4 overflowtorightactivitie">
                    <div class="mb-4">
                        <h5>july 28 2024</h5>
                    </div>

                    @foreach ($projectActivity as $activity)
                   
                        <div class="p-3 bg-white  boxshadowgernet mb-3">
                            <div class="d-flex align-items-center mb-3">
                                <p class="font13 mb-0 me-3"><strong>{{Str::ucfirst($activity->title) }}</strong></p>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <p class="font13 font500 mb-0">{{ Str::ucfirst($activity->description) }}</p>
                            </div>

                            <div>
                                <p class="font13 font500 mb-0"> <span class="colorcc">Updated to </span> {{$activity->updated_at}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
              
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                      </div>
                      
                      <label for="basic-url" class="form-label">Your vanity URL</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>
                      
                      <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                      </div>
                      
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                      </div>
                      
                      <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        
        
        
        
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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



