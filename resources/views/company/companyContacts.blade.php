@extends('layouts.app')

@section('title',"Dashboard")

@section('content')

    <div class="pt-4 px-4">
        <div class="d-flex justify-content-end  mediatabs mb-2">
            <div class="memebrs d-flex align-items-center">
                <img src="./assets/email.png" width="10" alt="">
                <p class="mb-0 ms-2">Email</p>
                
            </div>
            <div class="memebrs d-flex align-items-center">
                <img src="./assets/call.png" width="15" alt="">
                <p class="mb-0 ms-2"> call log</p>
                
            </div>
            <div class="memebrs p-0 d-flex align-items-center">
                <div class=" d-flex align-items-center p-1">
                    <img src="./assets/sms.png" width="15" alt="">
                    <p class="mb-0 ms-2"> SMS</p>
                    
                </div>
                <div class="border-start p-1 " style="height: 100%;">
                    <img src="./assets/downarrow.png" width="8" alt="">
                </div>
            </div>
            
            <div class="memebrs d-flex align-items-center">
                <img src="./assets/task.png" width="10" alt="">
                <p class="mb-0 ms-2">Task</p>
                
            </div>
            <div class="memebrs d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <img src="./assets/meeting.png" width="10" alt="">
                <p class="mb-0 ms-2"> meeeting</p>
                
            </div>

            <div class="memebrs d-flex align-items-center">
                <img src="./assets/salesAc.png" width="10" alt="">
                <p class="mb-0 ms-2"> sales Activities</p>
                
            </div>
            <div class="memebrs p-0 d-flex align-items-center"> 
                <div class=" d-flex align-items-center p-1">
                    <img src="./assets/deals.png" width="10" alt="">
                    <p class="mb-0 ms-2"> Add Deal</p>
                    
                </div>
                <div class="border-start p-1" style="height: 100%;">
                    <img src="./assets/downarrow.png" width="8" alt="">
                </div>
            </div>
            
        </div>
        <div class="row">
            
            @include('company.leftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">
                
                <div class="bg-white p-3">
                    <div class="mt-5">
                        <table>
                            <tr class="">
                                <th class="cell1">
                                    <div class="bg-white p-2 mb-2 border-end">
                                        <div>
                                            <div class="ms-5">
        
                                                <span class="fontapex color">Name</span>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="cell3">
                                    <div class="bg-white p-2 mb-2  border-end">
                                        <div>
                                            <span class="fontapex color">	
                                                Profile</span>
                                        </div>
                                    </div>
                                </th>
                                <th class="cell4">
                                    <div class="bg-white p-2 mb-2  border-end">
                                        <div>
                                            <span class="fontapex color">Contact Number</span>
                                        </div>
                                    </div>
                                </th>
                                <th class="cell5">
                                    <div class="bg-white p-2 mb-2  border-end">
                                        <div>
                                            <span class="fontapex color">Additional Number</span>
                                        </div>
                                    </div>
                                </th>
                                <th class="cell6">
                                    <div class="bg-white p-2 mb-2  border-end">
                                        <div>
                                            <span class="fontapex color">Email</span>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            @foreach ($contact as $contact)
                            <tr>
                                <td>
                                    <a href="#">
                                        <div class="bg-white p-2  border-bottom ">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <label class="cutomcheck">
                                                        <input type="checkbox" >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="ms-5">
                                                        <img src="{{asset('/public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                        <span class="fontapex  text-decoration-none">{{$contact->title}} {{$contact->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="bg-white p-2 border-bottom border-start border-end">
                                        <p class="font12 mb-0">{{$contact->profile}}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="bg-white p-2 border-bottom border-end text-center d-flex align-items-center justify-content-between position-relative">
                                        <p class=" mb-0  font12"> {{$contact->contact_number}}</p>
                                        <i class="fa-solid fa-ellipsis-vertical threedots"></i>
                                        <div class="infotooltip">
                                            <span>
                                                <i class="fa-solid fa-phone mx-2"></i>
                                                <i class="fa-brands fa-whatsapp"></i>
                                                <i class="fa-solid fa-comment"></i>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="bg-white p-2 border-bottom border-end d-flex align-items-center justify-content-between position-relative">
                                        <p class=" mb-0  font12"> {{$contact->contact_number}}</p>
                                        <i class="fa-solid fa-ellipsis-vertical threedots"></i>
                                        <div class="infotooltip">
                                            <span>
                                                <i class="fa-solid fa-phone mx-2"></i>
                                                <i class="fa-brands fa-whatsapp"></i>
                                                <i class="fa-solid fa-comment"></i>
                                            </span>
                                        </div>
                                    </div>
                                </td>
        
                                <td>
                                    <!-- caller -->
                                    <div class="bg-white p-1 border-bottom border-end d-flex align-items-center justify-content-between position-relative">
                                        <!-- <div class="crownbox"> -->
                                            <!-- <img src="./assets/crown.png" class="crownimg" alt=""> -->
                                            <span class="font12">{{$contact->email}}</span>

                                            <i class="fa-solid fa-ellipsis-vertical threedots"></i>
                                        <div class="infotooltip">
                                            <span>
                                                
                                                <!-- <i class="fa-solid fa-phone mx-2"></i>
                                                <i class="fa-brands fa-whatsapp"></i>
                                                <i class="fa-solid fa-comment"></i> -->
                                                <!-- <i class="fa-solid fa-note-sticky" ></i> -->
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                        </div>
                                        <!-- </div> -->
        
                                    </div>
                                </td>
        
                            </tr>
                            @endforeach
                        </table>
                    </div>
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

      <div class="formaddcompany" id="formaddcompany" >

        <div class="d-flex justify-content-between align-items-center mb-3 p-4">
             <h5 class="mb-0">Team Membars </h5>

             <div>
                 <div>
                    <p class="mb-0 customizefields">customize fields</p>
                 </div>


                 
             </div>


             <div onclick="closeme()">
                <svg xmlns="http://www.w3.org/2000/svg"  class="crosss" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
             </div>

            
        </div>

        <div class="basicinfo">
            <p class="mb-0"> BASIC INFOMATION</p>
                 
        </div>

        <div class="px-3 forminputs">
            <div class="mb-2">
                <label for="name" class="mb-2">Name</label>
                <br>
                <input type="text" name="" id="">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Role</label>
                <br>
                <input type="text" name="" id="">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Groups </label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Status	</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Avctions</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Email</label>
                <br>
                <input type="text" name="" id="">
            </div>

           
        </div>

        <div class="saveclearbutton">
            <button class="cl">
                cancel
            </button>

            <button class="sv">
                save
            </button>
        </div>
    </div>
    
    <script>
        function closeme(){
    
            document.getElementById("formaddcompany").style.display ="none"
        }
        function openme(){

            document.getElementById("formaddcompany").style.display ="block"
        }
    </script>
@endsection
