@extends('layouts.app')

@section('title',"Dashboard")
<script>
    function daysCalculate(){
       var date1 = new Date($('#start_date').val());
       var date2 = new Date($('#end_date').val());
       if(date1=='Invalid Date'){
           $("#dateerror").html('Start date missing');
           $("#end_date").val('');
       }
       else if(date2=='Invalid Date'){
           $("#dateerror").html('End date missing');
           $("#end_date").val('');
       }
       else if(date1 > date2) {
           $("#dateerror").html("Start date can't greater then end date");
           $("#start_date").val('');
           $("#end_date").val('');
       }
       else{
           var timeDiff = Math.abs(date2 - date1);
           var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
           $("#projectdayes").val(diffDays);
           $("#dateerror").html("");
       }
   }
</script>
@section('content')

<style>

    .dropdown {
        position: relative;
        width: 100%;
        top: 0;
    }
    
    #searchInput {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
    }
    #contact_person {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
    }
    
    .dropdown-list {
        display: none;
        position: absolute;
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        border: 1px solid #ddd;
        background: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 0;
        padding: 0;
        list-style: none;
        box-sizing: border-box;
        position: relative;
    }
    
    .dropdown-list li {
        padding: 10px;
        cursor: pointer;
    }
    
    .dropdown-list li:hover {
        background-color: #f0f0f0;
    }
    
    p {
        margin-top: 10px;
    }
    
</style>
    <div>
        <div class="row pt-4 px-4">
            @include('company.leftsidebar')
            <div class="col-md-10 px-0  rigthbarsection">
                
                <div class="bg-white p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">RFQ  (Request For Quote)</h6>

                        <div class="pb-2"  onclick="openme()">
                            <button class="p-2 bg-white text-dark border addbutton addbutton2 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                </svg>
                                Add RFQ 
                            </button>
                        </div>
                    </div>

                    <div  class="d-flex">
                        <p class="mb-0 colorcc">Filter :</p>
                        <div class="d-flex px-3 align-items-center">
                            <p class="mb-0 colorblue pe-2">Products</p>
                            <img src="./assets/dwonarrowcontract.png" width="10" alt="">
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 colorblue pe-2">Deal stage</p>
                            <img src="./assets/dwonarrowcontract.png" width="10" alt="">
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="contractsection">
                            <table class="Contract contractsectiontable">
                                <tr class="">
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">RFQ Name</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Project Type</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Number of Guest</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Location</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">DOP</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Days</p></th>

                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Receive Date</p></th>
                                    
                                    {{-- <th class="font12 "><p class="mb-3 border-bottom pb-3">Contact Person</p></th> --}}
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">RFQ Coordinator</p></th>
                                    <th  class="font12 "><p class="mb-3 border-bottom pb-3">Sales Stage</p></th>
                                </tr>
                                @foreach ($contract as $contract)
                                <tr>
                                    <td class="font12 ">  
                                        <a href="{{ route('rfqproject.overview',['rfqId' => $contract->id]) }}">{{ Str::ucfirst($contract->name) }}</a> 
                                    </td>
                                
                                    <td class="font12 ">
                                        {{ ($contract->project_type == '1') ? 'Domastic' : 'International' }}
                                    </td>
                                    <td class="font12  colorblue">{{$contract->num_guest}}</td>
                                    <td class="font12 ">{{$contract->location}}</td>
                                    <td class="font12 ">{{$contract->start_date}} - {{$contract->end_date}}</td>
                                    <td class="font12 ">{{$contract->project_days}} Day</td>
                                    <td class="font12 ">{{$contract->recieved_date}}</td>
                                    {{-- <td class="font12 ">{{$contract->contactPerson}}</td> --}}
                                    <td class="font12 ">{{$contract->salesPerson}}</td>

                                    <td>
                                        <select class="form-select w-50 font12" aria-label="Default select example">
                                        <!-- <option selected>Open this select menu</option> -->
                                        <option value="1">New</option>
                                        <option value="2">Qualification</option>
                                        <option value="">Discovery</option>
                                        <option value="">Presentation</option>
                                        <option value="">Negotiation</option>
                                        <option value="">Win or Lost</option>
                                        
                                        </select>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </table>
                        </div>
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
            <h5 class="mb-0">Add RFQ</h5>
            <div>
                <div>
                    <p class="mb-0 customizefields">customize fields</p>
                </div>
            </div>
            <div onclick="closeme()">
                <svg xmlns="http://www.w3.org/2000/svg"  class="crosss" viewBox="0 0 448 512">
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
                </svg>
            </div>
        </div>

        <div class="basicinfo">
            <p class="mb-0"> BASIC INFOMATION</p>
                
        </div>
        <form action="{{route('company.createProject')}}" method="POST">
            @csrf
            <input type="hidden" name="company_id" value="{{$companyDetails->id}}">
            <div class="px-3 forminputs">
                <div class="mb-2">
                    <label for="name" class="mb-2"> RFQ Name</label>
                    <br>
                    <input type="text" name="name" id="name" value="{{old('name')}}">
                </div>
                <div class="mb-2">
                    <label for="project_type" class="mb-2">Project Type</label>
                    <br>
                    <select class="form-select font12" aria-label="Default select example" name="project_type" id="project_type">
                    <option value="0">Open this select menu</option>
                    <option value="1" {{ (old('project_type')=='1') ? 'selected' : '' }}>Domastic</option>
                  <option value="2" {{ (old('project_type')=='2') ? 'selected' : '' }}>International</option>
                    
                    </select>
                </div>
                <div class="mb-2">
                    <label for="num_guest" class="mb-2">Number of Guest </label>
                    <br>
                    <input type="number" name="num_guest" id="num_guest" value="{{old('num_guest')}}">
                </div>
    
                <div class="mb-2">
                    <label for="location" class="mb-2">Location</label>
                    <br>
                    <input type="text" name="location" id="location" value="{{old('location')}}">
                </div>
    
                <div class="mb-2">
                    <label for="" class="mb-2">Duration Of Project (StartDate - End Date)	</label>
                    <br>
                    <div class="d-flex align-items-center mb-4">
                    <input onblur="daysCalculate()" type="date" class=" me-3 w-50" name="start_date" id="start_date" value="{{old('start_date')}}">
                    <input onblur="daysCalculate()" type="date" class="w-50" name="end_date" id="end_date" value="{{old('end_date')}}">
                    </div>
                    <label id="dateerror" for="" class="mb-2 text-danger"></label>
                </div>
    
                <div class="mb-2">
                    <label for="projectdayes" class="mb-2">Project Number of Days</label>
                    <br>
                    <input type="text" name="projectdayes" id="projectdayes" readonly="true">
                </div>
    
                <div class="mb-2">
                    <label for="received_date" class="mb-2">RFQ - Receive-Date</label>
                    <br>
                    <input type="date" name="received_date" id="received_date" value="{{old('received_date')}}">
                </div>
                
                <div class="mb-2">
                    <label for="" class="mb-2">Sale Coordinator</label>
                        <div class="dropdown">
                            <input type="hidden" name="sales_person_id" id="sales_person_id" value="{{old('sales_person_id')}}">
                            <input type="text" id="sales" placeholder="Search...">
                            <ul id="salesList" class="dropdown-list">
                                @foreach ($contacts as $contact)
                                <li data-value="{{$contact->id}}">{{$contact->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <p id="show_add_cordinator" style="display: none"><span class="text-primary" ><a href="{{route("company.contacts")}}">Add - Manager</a></span></p>
                </div>
    
                <div class="mb-2">
                    <label for="rfq_value" class="mb-2"> RFQ Value</label>
                    <br>
                    <input type="text" name="rfq_value" id="rfq_value" value="{{old('rfq_value')}}">
                </div>
            </div>
        
            <div class="saveclearbutton">
                <button class="cl" type="button" onclick="closeme()"> cancel </button>
                <button class="sv"> save </button>
            </div>
        </form>
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
            document.getElementById("formaddcompany").style.display ="block"
        }

        function tabon(e){
            for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
                document.getElementsByClassName("tabb")[index].classList.remove("tabmy")
                
            }
            
            e.classList.add("tabmy")
        }

        document.getElementById('sales').addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const list = document.getElementById('salesList');
            const items = list.querySelectorAll('li');

            list.style.display = filter ? 'block' : 'none';

            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(filter)) {
                    item.style.display = '';
                    document.getElementById('show_add_cordinator').style.display='none';
                } else {
                    item.style.display = 'none';
                    document.getElementById('show_add_cordinator').style.display='block';
                }
            });
        });

        document.querySelectorAll('#salesList li').forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('sales').value = this.textContent;
                document.getElementById('sales_person_id').value = `${this.getAttribute('data-value')}`;
                document.getElementById('salesList').style.display = 'none';
            });
        });
    </script>
@endsection


