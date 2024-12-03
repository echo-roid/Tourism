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

            @include('company.leftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">

                <div class="bg-white ">

                    <div class="d-flex justify-content-between p-4">
                        <h4>Overview</h4>
        
                        <div class="d-flex align-items-center border p-2 roundedbox">
                            <img src="{{asset('/public/assets/settingborder.png')}}" width="20" alt="">
                            <p class="mb-0 ms-2 font13 font500 colorblue" data-bs-toggle="modal" data-bs-target="#exampleModal">customize Overview</p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 border-top border-bottom pe-0">
                            <div class="p-3 py-4 boxshaowside">
                                <div class="d-flex align-items-center ">
                                    <img src="{{asset('/public/assets/bagtag.png')}}" width="20" alt="">
                                    <p class="font500 font500 mb-0 ms-2">Information</p>

                                </div>
                            </div>

                            <div class="p-4 border border-start-0 border-end-0">
                                <div class="d-flex justify-content-between boxox mb-4">
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">{{ ($companyDetails->client_type=='Company') ? 'Company Name' : 'Client Name' }}</p>
                                        <p class="mb-0 font13 colorblue font500">{{Str::ucfirst($companyDetails->name)}}</p>
                                    </div>
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">Phone</p>
                                        <p class="mb-0 font13 colorblue font500">{{$companyDetails->contact_number}}</p>
                                    </div>
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">	
                                            Email ID</p>
                                        <p class="mb-0 font13 colorblue font500">{{$companyDetails->email}}</p>
                                    </div>
                                </div>
                                @php
                                    $travellers =0;
                                    $num_project =0;
                                    $num_rfq =0;
                                    foreach ($companyDetails->contacts as $contracts){
                                        $travellers += $contracts->num_guest;
                                        $num_project = ($contracts->status == 5) ? $num_project+1 : $num_project;
                                        $num_rfq++;
                                    }
                                @endphp

                                <div class="d-flex justify-content-between boxox mb-4">
                                    <div class="contentboxboxox">
                                        <p class="mb-2 colorcc">Number of RFQ</p>
                                        <p class="mb-0 font13 colorblue font500">{{$num_rfq}}</p>
                                    </div>
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">Number Projects</p>
                                        {{-- colorcc --}}
                                        <p class="mb-0 font13 colorblue font500">{{$num_project}}</p>
                                    </div>
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">	
                                            Total Travellers Number</p>
                                        <p class="mb-0 font13 font500 colorblue">{{$travellers}}</p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between boxox mb-4">
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">last connected time</p>
                                        <p class="mb-2 font13 colorblue">2024-09-12</p>
                                        
                                    </div>
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">Relationship Manager</p>
                                        @php
                                            $manager = $companyDetails->manager;
                                        @endphp
                                        @if($manager)
                                        <p class="mb-2 font13 colorblue">{{$manager->title}} {{$manager->name}}</p>
                                        @endif
                                    </div>
                                    <div class="contentboxboxox">
                                        <p class="mb-2 font13 colorcc">Total Travellers Data Number</p>
                                        <p class="mb-0 font13 colorblue font500">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="p-3 py-4  mb-4 boxshaowside">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{asset('/public/assets/bagtag.png')}}" width="20" alt="">
                                        <p class="font500 font500 mb-0 ms-2 ">Information</p>

                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex justify-content-between boxox mb-4">
                                        <div class="contentboxboxox">
                                            <p class="mb-2 font13 colorcc"> Industry Type</p>
                                            <p class="mb-0 font13  font500">
                                                @php
                                                    if($companyDetails->industry_type == 1)
                                                        echo "Banking";
                                                    elseif ($companyDetails->industry_type == 2) {
                                                        echo "Retail";
                                                    }
                                                    elseif ($companyDetails->industry_type == 3) {
                                                        echo "Tourism";
                                                    }
                                                    elseif ($companyDetails->industry_type == 4) {
                                                        echo "Manufacturing";
                                                    }
                                                    elseif ($companyDetails->industry_type == 5) {
                                                        echo "Corporate Governance";
                                                    }
                                                    elseif ($companyDetails->industry_type == 6) {
                                                        echo "Pharmaceuticals";
                                                    }
                                                    elseif ($companyDetails->industry_type == 7) {
                                                        echo "Oil and Natural Gas";
                                                    }
                                                    else {
                                                        echo "Corporate";
                                                    }
                                                @endphp
                                                </p>
                                        </div>
                                        <div class="contentboxboxox">
                                            <p class="mb-2 font13 colorcc"> Gst</p>
                                            <p class="mb-0 font13  font500">{{$companyDetails->gst_number}}</p>
                                        </div>
                                        <div class="contentboxboxox">
                                            <p class="mb-2 font13 colorcc">	
                                                PinCode</p>
                                            <p class="mb-0 font13  font500">{{$companyDetails->pin_code}}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between boxox">
                                        <div class="contentboxboxox">
                                            <p class="mb-2 font13 colorcc">Pan Number</p>
                                            <p class="mb-2 font13 ">{{$companyDetails->pan_number}}</p>
                                        </div>
                                        <div class="contentboxboxox">
                                            <p class="mb-2 font13 colorcc">State</p>
                                            <p class="mb-2 font13 ">{{$companyDetails->state}}</p>
                                            
                                        </div>
                                        <div class="contentboxboxox">
                                            <p class="mb-2 font13 colorcc">Address</p>
                                            <p class="mb-2 font13 ">{{$companyDetails->address}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ps-0">
                            <div class="border border-bottom-0 border-end-0 h-100 p-4">
                                <textarea class="noteadd" name="" id="" placeholder="note.."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    
<!-- Button trigger modal -->

  
  <!-- Modal -->
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
         <h5 class="mb-0">Add company</h5>

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
            <label for="name" class="mb-2">name</label>
            <br>
            <input type="text" name="" id="">
        </div>
        <div class="mb-2">
            <label for="" class="mb-2">website</label>
            <br>
            <input type="text" name="" id="">
        </div>
        <div class="mb-2">
            <label for="" class="mb-2">phone </label>
            <br>
            <input type="text" name="" id="">
        </div>

        <div class="mb-2">
            <label for="" class="mb-2">sales owner</label>
            <br>
            <input type="text" name="" id="">
        </div>

        <div class="mb-2">
            <label for="" class="mb-2">industry type</label>
            <br>
            <input type="text" name="" id="">
        </div>

        <div class="mb-2">
            <label for="" class="mb-2">business type</label>
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

</script>


<script>
function openme(){

document.getElementById("formaddcompany").style.display ="block"
}



function tabon(e){
    for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
        document.getElementsByClassName("tabb")[index].classList.remove("tabmy")
        
    }
    
    e.classList.add("tabmy")
}
</script>

@endsection