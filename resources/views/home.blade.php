@extends('layouts.app')

@section('title',"Dashboard")

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
    
            <div class="ms-4 p-2">
                <h6 class="mb-0">Company</h6>
         </div>

            <div class=" bg-white pt-5 px-4 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="tabb tabmy" onclick="tabon(this,1)">
                        <p class="mb-0 fontapex">My companies</p>
                    </div>
                    <div class="tabb mx-4 " onclick="tabon(this,2)">
                        <p class="mb-0 fontapex">All companies</p>
                    </div>
                   
                </div>
                <div class="d-flex align-items-center">
                    <!--<div class="pb-2 position-relative">-->
                    <!--    <img src="{{asset('public/assets/adjust.png')}}" class="customtableicon" alt="" >-->
                    <!--    <span class="fontprice" onclick="opencutomtable()">Customize table</span>-->
                    <!--     <div class="cutomizetable ">-->

                     
                    <!--    <div class="cutomizetableinner">-->
                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">Name</label>-->
                    <!--        </div>-->
                            
                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">Phone</label>-->
                    <!--        </div>  -->

                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">Email ID</label>-->
                    <!--        </div>-->
                            
                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">Number of RFQ</label>-->
                    <!--        </div> -->

                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">Number Projects</label>-->
                    <!--        </div>  -->
                           
                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">Total Travellers Number</label>-->
                    <!--        </div>  -->

                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500"> Total Travellers Data Numb</label>-->
                    <!--        </div> -->
                           
                    <!--        <div class="d-flex align-items-center movestrip">-->
                    <!--            <input type="checkbox">-->
                    <!--            <label for="" class="font12 ps-2 font500">  Relationship Manager</label>-->
                    <!--        </div> -->



                    <!--    </div>-->

                    <!--        <div class="buttontoaction">-->
                    <!--            <button type="button" class="btn btn-primary">Save</button>-->
                    <!--            <button type="button" class="btn btn-secondary" onclick="Closecutomtable()">Cancel</button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                      <div class="pb-2 position-relative">
                        <img src="./assets/adjust.png" class="customtableicon" alt="">
                        <span class="fontprice" onclick="opencutomtable()">Customize table</span>
                        <div class="cutomizetable ">


                            <div class="cutomizetableinner">
                                <div class="d-flex align-items-center justify-content-between movestrip">
                                    <div>
                                        <input type="checkbox">
                                    <label for="" class="font12 ps-2 font500 ">Name</label>
                                    </div>
                                    
                                    <input type="text" value="1" class="positionadjust text-center ms-3">
                                </div>

                                <div class="d-flex justify-content-between align-items-center movestrip">
                                    <div>
                                        <input type="checkbox">
                                        <label for="" class="font12 ps-2 font500">Phone</label>
                                    </div>
                                  
                                    <input type="text" value="2" class="positionadjust text-center ms-3">
                                </div>

                                <div class="d-flex align-items-center justify-content-between movestrip">
                                    <div>
                                        <input type="checkbox">
                                        <label for="" class="font12 ps-2 font500">Email ID</label>
                                    </div>
                                   
                                    <input type="text" value="3" class="positionadjust ms-3 text-center">
                                </div>

                                <div class="d-flex align-items-center justify-content-between movestrip">
                                    <div class="justify-content-between">
                                        <input type="checkbox">
                                    <label for="" class="font12 ps-2 font500">Number of RFQ</label>
                                    </div>
                                    
                                    <input type="text" value="4" class="positionadjust ms-3 text-center">
                                </div>
                                <div class="d-flex align-items-center justify-content-between movestrip">
                                    <div> 
                                        <input type="checkbox">
                                        <label for="" class="font12 ps-2 font500">Number Projects</label>
                                    </div>
                                   
                                    <input type="text" value="5" class="positionadjust ms-3 text-center">
                                </div>

                                <div class="d-flex justify-content-between align-items-center movestrip">
                                    <div>   
                                        <input type="checkbox">
                                        <label for="" class="font12 ps-2 font500">Total Travellers Number</label>
                                    </div>
                                  
                                    <input type="text" value="6" class="positionadjust ms-3 text-center">
                                </div>

                                <div class="d-flex align-items-center justify-content-between movestrip">
                                    <div>
                                        <input type="checkbox">
                                        <label for="" class="font12 ps-2 font500"> Total Travellers Data Numb</label>
                                    </div>
                                  
                                    <input type="text" value="7" class="positionadjust ms-3 text-center">
                                </div>

                                <div class="d-flex align-items-center movestrip justify-content-between">
                                    <div>   
                                        <input type="checkbox">
                                        <label for="" class="font12 ps-2 font500"> Relationship Manager</label>
                                    </div>
                                   
                                    <input type="text" value="8" class="positionadjust ms-3 text-center">
                                </div>



                            </div>

                            <div class="buttontoaction">
                                <button type="button" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary"
                                    onclick="Closecutomtable()">Cancel</button>
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
                            Add company
                        </button>
                    </div>
                </div>

            </div>
            <div class="p-3 alltabscom activecom" id="com1">
                <div class="px-2 mb-2 d-flex align-items-center">
                    <div class="d-flex align-items-center border boxtable justify-content-between ">
                        <div>
                            <img src="{{asset('assets/tableicon.png')}}" class="tabicon" alt="">
                            <span class="px-2 fontprice">My Compaies</span>
                        </div>
                      
                        <img src="{{asset('assets/downarrow.png')}}" class="tbicon" alt="">
                    </div>
                    <div class="text-center">
                        <img src="{{asset('assets/updown.png')}}" class="arrowdown" alt="">
                    </div>

                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('assets/plate.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Bulk Action</span>
                    </div>


                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('assets/filter.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Filter by</span>
                    </div>
                </div>
                <div class=" d-flex  maintablediv">
                    <!-- <div>
                        <ul class="stickyone">
                            <li>select</li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                        </ul>
                    </div> -->
                    <div>
                        <ul class="stickyone">
                            <li>Name</li>
                            @foreach ($companies as $company)
                            <li><a href="{{ route('company.overview',['companyId' => $company->id]) }}">{{ Str::ucfirst($company->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="overflow-auto  tablewrapper">
                      
                        <table class="table-container  tab">
                            <thead>
                                <tr>
                                    <!-- <th>Name</th> -->
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                    <th class="position-relative">Number of RFQ </th>
                                    <th>Number Projects</th>
                                    <th>Total Travellers Number</th>
                                    <th>Total Travellers Data Numb</th>
                                    <th>Relationship Manager</th>
                                   <th> Label 1</th>
                                    <th>Label 2</th>
                                    <th>Label 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                    <td >
                                        <div class="d-flex justify-content-between position-relative">
                                             {{$company->contact_number}}
                                            <i class="fa-solid fa-ellipsis-vertical threedots"></i>
            
                                            <div class="infotooltip">
                                                <span>
                                                    <i class="fa-solid fa-user"></i>
                                                    <i class="fa-solid fa-phone mx-2"></i>
                                                    <i class="fa-solid fa-envelope me-2"></i>
                                                    <i class="fa-solid fa-comment"></i>
                                                </span>
                                            </div>
                                           
                                        </div>
                                    </td>
                                   
                                    <td >
                                        <div class="d-flex justify-content-between  position-relative">
                                            {{$company->email}}
                                        </div>
                                       
                                    </td>
            
                                    <td >
                                        <div class="d-flex justify-content-between  position-relative">
                                            {{count($company->contacts)}}  
                                        </div>
            
                                    </td>
                                    <td >
                                        <div class="d-flex justify-content-between position-relative">
                                           {{count($company->contacts)}}
                                        </div>
                                        
                                    </td>
            
                                    <td>{{count($company->contacts)}}</td>
                                    <td>100<td>
                                    <td>
                                        @php 
                                            $title = '';
                                            $name = '';
                                            if($company->manager){
                                                $manger = $company->manager;
                                                $title = ($manger->title) ? $manger['title'] : '';
                                                $name = ($manger['name']) ? $manger['name'] : '';
                                            }
                                        @endphp
                                    {{ Str::ucfirst($title) }} {{ Str::ucfirst($name) }}
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
                            <img src="{{asset('assets/tableicon.png')}}" class="tabicon" alt="">
                            <span class="px-2 fontprice">All Compnies</span>
                        </div>
                      
                        <img src="{{asset('assets/downarrow.png')}}" class="tbicon" alt="">
                    </div>
                    <div class="text-center">
                        <img src="{{asset('assets/updown.png')}}" class="arrowdown" alt="">
                    </div>

                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('assets/plate.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Bulk Action</span>
                    </div>


                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('assets/filter.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Filter by</span>
                    </div>
                </div>
                <div class=" d-flex  maintablediv">
                    <!-- <div>
                        <ul class="stickyone">
                            <li>select</li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                            <li><input type="checkbox"></li>
                        </ul>
                    </div> -->
                    <div>
                        <ul class="stickyone">
                            <li>Name</li>
                            @foreach ($companies as $company)
                            <li><a href="{{ route('company.overview',['companyId' => $company->id]) }}">{{ Str::ucfirst($company->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="overflow-auto  tablewrapper">
                      
                        <table class="table-container  tab">
                            <thead>
                                
                                <tr>
                                    <!-- <th>Name</th> -->
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                    <th class="position-relative">Number of RFQ </th>
                                    <th>Number Projects</th>
                                    <th>Total Travellers Number</th>
                                    <th>Total Travellers Data Numb</th>
                                    <th>Relationship Manager</th>
                                   <th> Label 1</th>
                                    <th>Label 2</th>
                                    <th>Label 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                    <td >
                                        <div class="d-flex justify-content-between position-relative">
                                             {{$company->contact_number}}
                                            <i class="fa-solid fa-ellipsis-vertical threedots"></i>
            
                                            <div class="infotooltip">
                                                <span>
                                                    <i class="fa-solid fa-user"></i>
                                                    <i class="fa-solid fa-phone mx-2"></i>
                                                    <i class="fa-solid fa-envelope me-2"></i>
                                                    <i class="fa-solid fa-comment"></i>
                                                </span>
                                            </div>
                                           
                                        </div>
                                    </td>
                                   
                                    <td >
                                        <div class="d-flex justify-content-between  position-relative">
                                            {{$company->email}}
                                        </div>
                                       
                                    </td>
            
                                    <td >
                                        <div class="d-flex justify-content-between  position-relative">
                                            {{count($company->contacts)}}  
                                        </div>
            
                                    </td>
                                    <td >
                                        <div class="d-flex justify-content-between position-relative">
                                           {{count($company->contacts)}}
                                        </div>
                                        
                                    </td>
            
                                    <td>{{count($company->contacts)}}</td>
                                    <td>100<td>
                                    <td>
                                        @php 
                                            $title = '';
                                            $name = '';
                                            if($company->manager){
                                                $manger = $company->manager;
                                                $title = ($manger->title) ? $manger['title'] : '';
                                                $name = ($manger['name']) ? $manger['name'] : '';
                                            }
                                        @endphp
                                    {{ Str::ucfirst($title) }} {{ Str::ucfirst($name) }}
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
            {{-- {{dd($validator)}}       --}}
        </div>
        <form action="{{route('company.create')}}" method="POST">
            @csrf
        <div class="px-3 forminputs">
            <div class="mb-2">
                <label for="name" class="mb-2">Company or Client Name</label>
                <br>
                <input type="text" name="name" id="name" value="{{old('name')}}">
            </div>
            <div class="mb-2">
                <label for="email" class="mb-2">Email</label>
                <br>
                <input type="email" name="email" id="email" value="{{old('email')}}">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Client Type</label>
                <br>
                <select class="form-select font12" aria-label="Default select example" name="client_type">
                    <option value="">Open this select menu</option>
                    <option value="Company" {{ (old('client_type')=='Company') ? 'selected' :'' }}>Company</option>
                    <option value="Individual" {{ (old('client_type')=='Individual') ? 'selected' :'' }}>Individual</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="website" class="mb-2">Website </label>
                <br>
                <input type="text" name="website" id="" value="{{old('website')}}">
            </div>

            <div class="mb-2">
                <label for="contact_number" class="mb-2">Phone</label>
                <br>
                <input type="text" name="contact_number" id="contact_number" value="{{old('contact_number')}}">
            </div>

            <!--<div class="mb-2">-->
            <!--    <label for="" class="mb-2">Contact persan</label>-->
            <!--    <div class="dropdown">-->
            <!--        <input type="hidden" name="contact_person" id="contact_person_id" value="{{old('contact_person')}}">-->
            <!--        <input type="text" id="contact_person" placeholder="Search..." autocomplete="off">-->
            <!--        <ul id="contactPersonList" class="dropdown-list">-->
            <!--            @foreach ($contacts as $contact)-->
            <!--                <li data-value="{{$contact->id}}">{{$contact->name}}</li>-->
            <!--            @endforeach-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--    <p id="show_add_contact" style="display: none"><span class="text-primary" >-->
            <!--        {{-- <input type="text" name="" p> --}}-->
            <!--        <a href="{{route("company.contacts")}}">Add - Contact</a>-->
            <!--        {{-- <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Add - Contact</a> --}}-->
            <!--        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactmodal">-->
            <!--            Launch demo modal-->
            <!--          </button> --}}-->
            <!--    </span></p>-->
            <!--</div>-->
            <!--<div class="mb-2">-->
            <!--    <label for="" class="mb-2">Relation Ship Manager</label>-->
            <!--        <div class="dropdown">-->
            <!--            <input type="hidden" name="relation_manager" id="relation_manager_id" value="{{old('relation_manager')}}">-->
            <!--            <input type="text" id="searchInput" placeholder="Search..." autocomplete="off">-->
            <!--            <ul id="dropdownList" class="dropdown-list">-->
            <!--                @foreach ($contacts as $contact)-->
            <!--                <li data-value="{{$contact->id}}">{{$contact->name}}</li>-->
            <!--                @endforeach-->
            <!--            </ul>-->
            <!--        </div>-->
            <!--        <p id="show_add_manager" style="display: none"><span class="text-primary" ><a href="{{route("company.contacts")}}">Add - Manager</a></span></p>-->
            <!--</div>-->
            
            
             <div class="mb-2">
                <label for="" class="mb-2">Contact persan</label>
                <div class="search-container">
                    <div class="search-group">
                        <input type="text" class="search font12 w-100" placeholder="Search or Add...">
                        <div class="dropdown font12"></div>
                    </div>
                </div>
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Relation Ship Manager</label>

                <div class="search-container">
                    <div class="search-group">
                        <input type="text" class="search font12 w-100" placeholder="Search or Add...">
                        <div class="dropdown font12"></div>
                    </div>
                </div>

            </div>
            
            <div class="mb-2">
                <label for="" class="mb-2">Industry Type</label>
                <br>
                <select name="industry_type" class="form-select font12" aria-label="Default select example" onchange="gettheselectone(this)">
                    <option selected>Select</option>
                    @php
                        $indstryType=array("1"=>"Banking","2"=>"Retail","3"=>"Tourism","4"=>"Manufacturing","5"=>"Corporate Governance","6"=>"Pharmaceuticals","7"=>"Oil and Natural Gas","8"=>"Corporate");
                    @endphp
                    @foreach ($indstryType as $key => $inds)
                        @php
                            $s = ($key == old('industry_type')) ? 'selected' : '';
                        @endphp
                        <option value="{{$key}}" {{$s}}>{{$inds}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label for="address" class="mb-2">Address</label>
                <br>
                <input type="text" name="address" id="" value="{{old('address')}}">
            </div>

            <div class="mb-2">
                <label for="cin_number" class="mb-2">CIN</label>
                <br>
                <input type="text" name="cin_number" id="cin_number" value="{{old('cin_number')}}">
            </div>

            <div class="mb-2">
                <label for="gst_number" class="mb-2">GST</label>
                <br>
                <input type="text" name="gst_number" id="gst_number" value="{{old('gst_number')}}">
            </div>

            <div class="mb-2">
                <label for="pan_number" class="mb-2">PAN</label>
                <br>
                <input type="text" name="pan_number" id="pan_number" value="{{old('pan_number')}}">
            </div>

            <div class="mb-2">
                <label for="state" class="mb-2">State</label>
                <br>
                <input type="text" name="state" id="state" value="{{old('state')}}">
            </div>

            {{-- <div class="mb-2">
                <label for="" class="mb-2">Address</label>
                <br>
                <input type="text" name="" id="">
            </div> --}}

            <div class="mb-2">
                <label for="pin_code" class="mb-2">Pin Code</label>
                <br>
                <input type="text" name="pin_code" id="pin_code" value="{{old('pin_code')}}">
            </div>
        </div>

        <div class="saveclearbutton">
            <button type="button" class="cl"  onclick="closeme()"> cancel </button>
            <button class="sv"> save </button>
        </div>
        </form>
    </div>

    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div> --}}






   <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Add Contact</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                   
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Email</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Phone Number</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">  Additional Number</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Profile</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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


    function showindivi(){
        document.getElementById("addtext").style.display ="block" 
    }

    function showindivi2(){
        document.getElementById("addtext2").style.display ="block" 
    }

    // $(document).ready(function() {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $.ajax({
    //         url: "/contacts",
    //         type: 'GET',
    //         success: function(response) {
    //             // console.log(response);
    //             items =response.contacts;
    //         },
    //         error: function(xhr) {
    //             console.log('Error:', xhr.status, xhr.statusText);
    //         }
    //     });
    // });


    document.getElementById('searchInput').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const list = document.getElementById('dropdownList');
        const items = list.querySelectorAll('li');

        list.style.display = filter ? 'block' : 'none';

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(filter)) {
                item.style.display = '';
                document.getElementById('show_add_manager').style.display='none';
            } else {
                item.style.display = 'none';
                document.getElementById('show_add_manager').style.display='block';
            }
        });
    });
    document.querySelectorAll('#dropdownList li').forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('searchInput').value = this.textContent;
            document.getElementById('relation_manager_id').value = `${this.getAttribute('data-value')}`;
            document.getElementById('dropdownList').style.display = 'none';
            // document.getElementById('selectedOption').textContent = `Selected: ${this.textContent}`;
        });
    });
    document.getElementById('contact_person').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const list = document.getElementById('contactPersonList');
        const items = list.querySelectorAll('li');

        list.style.display = filter ? 'block' : 'none';

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(filter)) {
                item.style.display = '';
                document.getElementById('show_add_contact').style.display='none';
            } else {
                item.style.display = 'none';
                document.getElementById('show_add_contact').style.display='block';
            }
        });
    });

    document.querySelectorAll('#contactPersonList li').forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('contact_person').value = this.textContent;
            document.getElementById('contact_person_id').value = `${this.getAttribute('data-value')}`;
            document.getElementById('contactPersonList').style.display = 'none';
            // document.getElementById('selectedOption').textContent = `Selected: ${this.textContent}`;
        });
    });
    

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.getElementById('dropdownList').style.display = 'none';
        }
    });


        



</script>


<script>
    
    function movetopage(e){
   if(e.value){
       window.location.href ="./flightConnectionAssign.html"
       
   }
   else{
         window.location.href ="./connection.html"
        
   }
}
let items = ["Apple", "Banana", "Orange", "Pineapple", "Grapes", "Mango", "Strawberry", "Watermelon", "Peach", "Blueberry"];

document.querySelectorAll('.search').forEach(searchInput => {
    searchInput.addEventListener('keyup', (e) => showSuggestions(e.target));
});

function showSuggestions(inputElement) {
    const inputValue = inputElement.value.toLowerCase();
    const suggestionsBox = inputElement.nextElementSibling; // Get the related dropdown div
    suggestionsBox.innerHTML = "";  // Clear the previous suggestions

    if (inputValue) {
        const filteredItems = items.filter(item => item.toLowerCase().includes(inputValue));

        // Display filtered suggestions
        filteredItems.forEach(item => {
            const suggestion = document.createElement("div");
            // suggestion.dataset.bsToggle = "modal";
            // suggestion.dataset.bsTarget = "#exampleModal1";
          
            suggestion.classList.add("suggestion-item");
            suggestion.textContent = item;
            suggestion.onclick = () => {
                inputElement.value = item;
                suggestionsBox.innerHTML = ""; // Clear suggestions after selecting
            };
            suggestionsBox.appendChild(suggestion);
        });

        // Show "Add" button if the input does not match any item in the list
        if (!filteredItems.length) {
            const addButton = document.createElement("div");
            addButton.classList.add("suggestion-item", "add-item");
            addButton.dataset.bsToggle = "modal";
            addButton.dataset.bsTarget = "#exampleModal1";
            addButton.innerHTML = `Add "<strong >${inputValue}</strong>"`;
          
           
            // addButton.onclick = () => {
            //     addItem(inputValue, inputElement);
            // };
            suggestionsBox.appendChild(addButton);
        }
    }
}
    
</script>




@endsection