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
        overflow: visible;
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
    .stickyone li{
        padding: 10px;
    }
    
</style>
    <h6 class="p-3 px-3 mb-0 ms-4">RFQ Management</h6>
    <div class=" bg-white pt-5 px-4 d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <div class="tabb tabmy" onclick="tabon(this,1)">
                <p class="mb-0 fontapex">My RFQ</p>
            </div>
            <div class="tabb mx-4 " onclick="tabon(this,2)">
                <p class="mb-0 fontapex">All RFQ</p>
            </div>
            
        </div>
        <div class="d-flex align-items-center">
            <div class="pb-2 position-relative">
                <img src="./assets/adjust.png" class="customtableicon" alt="" >
                <span class="fontprice" onclick="opencutomtable()">Customize table</span>
                    <div class="cutomizetable ">

                
                <div class="cutomizetableinner">
                    <div class="d-flex align-items-center movestrip">
                        <input type="checkbox">
                        <label for="" class="font12 ps-2 font500">Name</label>
                    </div>
                    
                    <div class="d-flex align-items-center movestrip">
                        <input type="checkbox">
                        <label for="" class="font12 ps-2 font500">Related User</label>
                    </div>  

                    <div class="d-flex align-items-center movestrip">
                        <input type="checkbox">
                        <label for="" class="font12 ps-2 font500">website</label>
                    </div>
                    
                    <div class="d-flex align-items-center movestrip">
                        <input type="checkbox">
                        <label for="" class="font12 ps-2 font500">Open Contracts a...</label>
                    </div>  
                    <div class="d-flex align-items-center movestrip">
                        <input type="checkbox">
                        <label for="" class="font12 ps-2 font500">sales Owner</label>
                    </div>  


                </div>

                    <div class="buttontoaction">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" onclick="Closecutomtable()">Cancel</button>
                    </div>
                </div>
            </div>

            
            

            <div class="pb-2"  onclick="openme()">
                <button class="p-2 addbutton d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                    </svg>
                    Add RFQ
                </button>
            </div>

        </div>
    </div>

    <div class="p-3 alltabscom activecom" id="com1">
        <div class="px-2 mb-2 d-flex align-items-center">
            <div class="d-flex align-items-center border boxtable justify-content-between ">
                <div>
                    <img src="{{asset('/public/assets/tableicon.png')}}" class="tabicon" alt="">
                    <span class="px-2 fontprice">My RFQ's</span>
                </div>
                
                <img src="{{asset('/public/assets/downarrow.png')}}" class="tbicon" alt="">
            </div>
            <div class="text-center">
                <img src="{{asset('/public/assets/updown.png')}}" class="arrowdown" alt="">
            </div>

            <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                <img src="{{asset('/public/assets/plate.png')}}" class="arrowdown me-1" alt="">
                <span class="fontprice">Bulk Action</span>
            </div>


            <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                <img src="{{asset('/public/assets/filter.png')}}" class="arrowdown me-1" alt="">
                <span class="fontprice">Filter by</span>
            </div>
        </div>
        <div class=" d-flex  maintablediv">
            <div>
                <ul class="stickyone">
                    <li>RFQ Name</li>
                     @foreach ($data['projects'] as $project)
                    <li><a href="{{ route('rfqproject.overview',['rfqId' => $project->id]) }}">{{ Str::ucfirst($project->name) }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="overflow-auto  tablewrapper">
              
                <table class="table-container  tab">
                    <thead>
                        
                        <tr>
                            <th>Project Type</th>
                            <th>Number of Guest</th>
                            <th class="position-relative">Location </th>
                            <th>Days</th>
                            <th>Receive Date</th>
                            <th>Coordinator</th>
                            <th>Stage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['projects'] as $project)
                        <tr>
                            <td >
                                <div class="d-flex justify-content-between position-relative">
                                    {{ ($project->project_type == '1') ? 'Domastic' : 'International'}}
                                </div>
                            </td>
                           
                            <td >
                                <div class="d-flex justify-content-between  position-relative">
                                    {{$project->num_guest}}
                                </div>
                               
                            </td>
    
                            <td >
                                <div class="d-flex justify-content-between  position-relative">
                                    {{$project->location}} 
                                </div>
    
                            </td>
                            <td >
                                <div class="d-flex justify-content-between position-relative">
                                   {{$project->project_days}}
                                </div>
                                
                            </td>
                            <td>
                                <div class="d-flex justify-content-between position-relative">
                                    {{$project->recieved_date}}
                                </div>
                            </td>

                            <td> 
                                <div class="d-flex justify-content-between position-relative">
                                    {{($project->cordinator->title) ? $project->cordinator->title : ''}} {{($project->cordinator->name) ? $project->cordinator->name : ''}}
                                </div>
                            </td>

                            <td> 
                                <div class="d-flex justify-content-between position-relative">
                                    @php
                                    if($project->status == 0){
                                        $status = 'New';
                                    }
                                    elseif ($project->status == 1) {
                                        $status = 'Qualification';
                                    }
                                    elseif ($project->status == 2) {
                                        $status = 'Discovery';
                                    }
                                    elseif ($project->status == 3) {
                                        $status = 'Presentation';
                                    }
                                    elseif ($project->status == 4) {
                                        $status = 'Negotiation';
                                    }
                                    elseif ($project->status == 5) {
                                        $status = 'Win';
                                    }
                                    else{
                                        $status = 'Lost';
                                    }  
                                    @endphp
                                    {{$status}}
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
           
            </div>
    
        </div>
    </div>

    <div class="p-3 alltabscom" id="com2">
        <div class="px-2 mb-2 d-flex align-items-center">
            <div class="d-flex align-items-center border boxtable justify-content-between ">
                <div>
                    <img src="./assets/tableicon.png" class="tabicon" alt="">
                    <span class="px-2 fontprice">All RFQ's</span>
                </div>
                
                <img src="./assets/downarrow.png" class="tbicon" alt="">
            </div>
            <div class="text-center">
                <img src="./assets/updown.png" class="arrowdown" alt="">
            </div>

            <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                <img src="./assets/plate.png" class="arrowdown me-1" alt="">
                <span class="fontprice">Bulk Action</span>
            </div>


            <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                <img src="./assets/filter.png" class="arrowdown me-1" alt="">
                <span class="fontprice">Filter by</span>
            </div>
        </div>
        <div class=" d-flex  maintablediv">
            <div>
                <ul class="stickyone">
                    <li>RFQ Name</li>
                     @foreach ($data['projects'] as $project)
                    <li><a href="{{ route('rfqproject.overview',['rfqId' => $project->id]) }}">{{ Str::ucfirst($project->name) }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="overflow-auto  tablewrapper">
              
                <table class="table-container  tab">
                    <thead>
                        
                        <tr>
                            <th>Project Type</th>
                            <th>Number of Guest</th>
                            <th class="position-relative">Location </th>
                            <th>Days</th>
                            <th>Receive Date</th>
                            <th>Coordinator</th>
                            <th>Stage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['projects'] as $project)
                        <tr>
                            <td >
                                <div class="d-flex justify-content-between position-relative">
                                    {{ ($project->project_type == '1') ? 'Domastic' : 'International'}}
                                </div>
                            </td>
                           
                            <td >
                                <div class="d-flex justify-content-between  position-relative">
                                    {{$project->num_guest}}
                                </div>
                               
                            </td>
    
                            <td >
                                <div class="d-flex justify-content-between  position-relative">
                                    {{$project->location}} 
                                </div>
    
                            </td>
                            <td >
                                <div class="d-flex justify-content-between position-relative">
                                   {{$project->project_days}}
                                </div>
                                
                            </td>
                            <td>
                                <div class="d-flex justify-content-between position-relative">
                                    {{$project->recieved_date}}
                                </div>
                            </td>

                            <td> 
                                <div class="d-flex justify-content-between position-relative">
                                    {{($project->cordinator->title) ? $project->cordinator->title : ''}} {{($project->cordinator->name) ? $project->cordinator->name : ''}}
                                </div>
                            </td>

                            <td> 
                                <div class="d-flex justify-content-between position-relative">
                                    @php
                                    if($project->status == 0){
                                        $status = 'New';
                                    }
                                    elseif ($project->status == 1) {
                                        $status = 'Qualification';
                                    }
                                    elseif ($project->status == 2) {
                                        $status = 'Discovery';
                                    }
                                    elseif ($project->status == 3) {
                                        $status = 'Presentation';
                                    }
                                    elseif ($project->status == 4) {
                                        $status = 'Negotiation';
                                    }
                                    elseif ($project->status == 5) {
                                        $status = 'Win';
                                    }
                                    else{
                                        $status = 'Lost';
                                    }  
                                    @endphp
                                    {{$status}}
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
           
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
                <svg xmlns="http://www.w3.org/2000/svg"  class="crosss" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
             </div>

            
        </div>

        <div class="basicinfo">
            <p class="mb-0"> BASIC INFOMATION</p>
                 
        </div>
        <form action="{{route('company.createProject')}}" method="POST">
            @csrf
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
                <label for="" class="mb-2">Duration Of Project (StartDate - End Date)   </label>
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
                <input type="text" name="projectdayes" id="projectdayes" readonly="true" value="{{old('projectdayes')}}">
            </div>

            <div class="mb-2">
                <label for="received_date" class="mb-2">RFQ - Receive-Date</label>
                <br>
                <input type="date" name="received_date" id="received_date" value="{{old('received_date')}}">
            </div>
            
            <div class="mb-2">
                <label for="" class="mb-2">Company</label>
                <div class="dropdown">
                    <input type="hidden" name="company_id" id="company_id" value="{{old('company_id')}}">
                    <input type="text" id="company" placeholder="Search..." autocomplete="off">
                    <ul id="companyList" class="dropdown-list">
                        @foreach ($data['company'] as $company)
                            <li data-value="{{$company->id}}">{{$company->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- <div class="mb-2">
                <label for="" class="mb-2">Contact persan</label>
                <div class="dropdown">
                    <input type="hidden" name="contact_person" id="contact_person_id">
                    <input type="text" id="contact_person" placeholder="Search...">
                    <ul id="contactPersonList" class="dropdown-list">
                        @foreach ($data['contacts'] as $contact)
                            <li data-value="{{$contact->id}}">{{$contact->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <p><span class="text-primary" ><a href="{{route("company.contacts")}}">Add - Contact</a></span></p>
            </div> --}}
            <div class="mb-2">
                <label for="" class="mb-2">Sale Coordinator</label>
                    <div class="dropdown">
                        <input type="hidden" name="sales_person_id" id="sales_person_id">
                        <input type="text" id="sales" placeholder="Search..." autocomplete="off">
                        <ul id="salesList" class="dropdown-list">
                            @foreach ($data['contacts'] as $contact)
                            <li data-value="{{$contact->id}}">{{$contact->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <p id="show_add_cordinator" style="display: none"><span class="text-primary" ><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Add - Contact</a></span></p>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <h5 class="modal-title" id="exampleModalLabel"></h5> -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <label for="formFileLg" class="form-label">Upload File</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
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

    function tabon(e,id){
        for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
            document.getElementsByClassName("tabb")[index].classList.remove("tabmy")
            document.getElementsByClassName("alltabscom")[index].classList.remove("activecom")
            
        }
        e.classList.add("tabmy")
        document.getElementById(`com${id}`).classList.add("activecom")
    }

    function opencutomtable(){
        document.getElementsByClassName("cutomizetable")[0].style.height ="300px"
        document.getElementsByClassName("cutomizetable")[0].style.opacity = "1"
    }

    function Closecutomtable(){
        document.getElementsByClassName("cutomizetable")[0].style.height ="0"
        document.getElementsByClassName("cutomizetable")[0].style.opacity = "0"
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
                const addButton = document.getElementById('show_add_cordinator');
                addButton.dataset.bsToggle = "modal";
                addButton.dataset.bsTarget = "#exampleModal1";
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


    document.getElementById('company').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const list = document.getElementById('companyList');
        const items = list.querySelectorAll('li');

        list.style.display = filter ? 'block' : 'none';

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(filter)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    });

    document.querySelectorAll('#companyList li').forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('company').value = this.textContent;
            document.getElementById('company_id').value = `${this.getAttribute('data-value')}`;
            document.getElementById('companyList').style.display = 'none';
            // document.getElementById('selectedOption').textContent = `Selected: ${this.textContent}`;
        });
    });
    

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.getElementById('dropdownList').style.display = 'none';
        }
    });

</script>

@endsection