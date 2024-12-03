@extends('layouts.app')

@section('title',"Dashboard")

@section('content')

    <div class="pt-5 px-4">
        <div class="row">
            @include('company.leftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">
                <div class="bg-white p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Contract</h6>

                        <div class="pb-2"  onclick="openme()">
                            <button class="p-2 bg-white text-dark border addbutton addbutton2 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                </svg>
                                Add Contract
                            </button>
                        </div>
                    </div>

                    <div  class="d-flex">
                        <p class="mb-0 colorcc">Filter :</p>
                        <div class="d-flex px-3 align-items-center">
                            <p class="mb-0 colorblue pe-2">Products</p>
                            <img src="{{asset('public/assets/dwonarrowcontract.png')}}" width="10" alt="">
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 colorblue pe-2">Deal stage</p>
                            <img src="{{asset('public/assets/dwonarrowcontract.png')}}" width="10" alt="">
                        </div>
                    </div>

                    <div class="mt-5">
                        <table class="Contract">
                            <tr class="">
                                <th class="font12 tablecontactteamTh">
                                    <p class="mb-3 border-bottom pb-3">Deal Name</p>
                                </th>
                                <th class="font12 lowwid">
                                    <p class="mb-3 border-bottom pb-3">Deal Value</p>
                                </th>
                                <th class="font12 tablecontactteamTh">
                                    <p class="mb-3 border-bottom pb-3">Deal Stage</p>
                                </th>
                                <th class="font12 tablecontactteamTh">
                                    <p class="mb-3 border-bottom pb-3">Realeted User</p>
                                </th>
                                
                                <th class="font12 tablecontactteamTh">
                                    <p class="mb-3 border-bottom pb-3">Deal Type</p>
                                </th>
                                <th class="font12 tablecontactteamTh">..</th>
                            </tr>
                            @foreach($contract as $contract)
                            <tr>
                                <td class="font12 tablecontactteamTh">   
                                    <a href="{{ route('company.contract-team',['companyId' => $companyId , 'contractId' => $contract->id]) }}"><img src="{{asset('public/assets/gogreen.png')}}" width="20" alt=""> {{ $contract->name }} </a>
                                </td>
                            
                                <td class="font12 lowwid">{{ $contract->amount }}</td>
                                <td class="font12 tablecontactteamTh colorblue">
                                    <select class="form-select selectordiv form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected value="0">Pending</option>
                                        <option value="1">In Process</option>
                                        <option value="2">Complete</option>
                                    </select>
                                </td>
                                <td class="font12 tablecontactteamTh">{{ $contract->related_user }}</td>
                                <td class="font12 tablecontactteamTh">{{ $contract->type }}</td>
                            </tr>
                            @endforeach()
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
             <h5 class="mb-0">Add company</h5>

             <div>
                 <div>
                    <p class="mb-0 customizefields">customize fields</p>
                 </div>


                 
             </div>


             <div onclick="closeme()">
                <svg xmlns="http://www.w3.org/2000/svg"  class="crosss" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
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
      
    <script>
        function closeme(){
            document.getElementById("formaddcompany").style.display ="none"
        }
        
        function openme(){
            $("#formaddcompany").css("display","block");
        }
        function tabon(e){
            for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
                document.getElementsByClassName("tabb")[index].classList.remove("tabmy")
                
            }
            
            e.classList.add("tabmy")
        }
    
    function opencutomtable(){
            document.getElementsByClassName("cutomizetable")[0].style.height ="300px"
            document.getElementsByClassName("cutomizetable")[0].style.opacity = "1"
        }
    
        function Closecutomtable(){
            document.getElementsByClassName("cutomizetable")[0].style.height ="0"
            document.getElementsByClassName("cutomizetable")[0].style.opacity = "0"
        }
    </script>
@endsection