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
                    <div class="pb-2 position-relative">
                        <img src="{{asset('public/assets/adjust.png')}}" class="customtableicon" alt="" >
                        <span class="fontprice" onclick="opencutomtable()">Customize table</span>
                         <div class="cutomizetable ">

                     
                        <div class="cutomizetableinner">
                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">Name</label>
                            </div>
                            
                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">Phone</label>
                            </div>  

                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">Email ID</label>
                            </div>
                            
                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">Number of RFQ</label>
                            </div> 

                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">Number Projects</label>
                            </div>  
                           
                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">Total Travellers Number</label>
                            </div>  

                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500"> Total Travellers Data Numb</label>
                            </div> 
                           
                            <div class="d-flex align-items-center movestrip">
                                <input type="checkbox">
                                <label for="" class="font12 ps-2 font500">  Relationship Manager</label>
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
                            Add company
                        </button>
                    </div>

                </div>

            </div>
            <div class="p-3 alltabscom activecom" id="com1">
                <div class="px-2 mb-2 d-flex align-items-center">
                    <div class="d-flex align-items-center border boxtable justify-content-between ">
                        <div>
                            <img src="{{asset('public/assets/tableicon.png')}}" class="tabicon" alt="">
                            <span class="px-2 fontprice">Table1</span>
                        </div>
                      
                        <img src="{{asset('public/assets/downarrow.png')}}" class="tbicon" alt="">
                    </div>
                    <div class="text-center">
                        <img src="{{asset('public/assets/updown.png')}}" class="arrowdown" alt="">
                    </div>

                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('public/assets/plate.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Bulk Action</span>
                    </div>


                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('public/assets/filter.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Filter by</span>
                    </div>
                </div>
                <div class="checktblefeild">
                    <table class="tableindex">
                        
                        <tr class="">
                            <th class="cell1">
                                <div class="bg-white p-2 mb-2 border-end">
                                    <div>
                                        <label class="cutomcheck">
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="ms-5">
                                            <span class="fontapex color">Name</span>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="cell2">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Phone Number</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell3">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color">Email ID</span>
                                    </div>
                                </div>
                            </th>
                            <th class="cell4">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color">Number of RFQ</span>
                                    </div>
                                </div>
                            </th>
                            <th class="cell5">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color">Number Projects</span>
                                    </div>
                                </div>
                            </th>
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color">Total Travellers Number	</span>
                                    </div>
                                </div>
                            </th>
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color font12">Total Travellers Data Numb		</span>
                                    </div>
                                </div>
                            </th>
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color font12">Relationship Manager</span>
                                    </div>
                                </div>
                            </th>

                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color font12">Label 1</span>
                                    </div>
                                </div>
                            </th>

                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color font12">Label 2</span>
                                    </div>
                                </div>
                            </th>

                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
                                        <span class="fontapex color font12">Label 3</span>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        
                        @foreach ($companies as $company)
                        <tr>
                            <td>
                                <a href="{{ route('company.contract',['companyId' => $company->id]) }}">
                                    <div class="bg-white p-2  border-bottom posi">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <label class="cutomcheck">
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="ms-5 ">
                                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                    <span class="fontapex  text-decoration-none">{{$company->name}}</span>
                                                    <img src="{{asset('public/assets/eye.png')}}" class="iconmo" alt="">
                                                    <div class="viewcard">
                                                        <ul class="list-unstyled text-dark">
                                                            <li>
                                                                Name : {{$company->name}}
                                                            </li>
                                                            <li>
                                                                email : {{$company->email}}
                                                            </li>
    
                                                            <li>
                                                                 Number : xxxxxxxxxxx
                                                            </li>
                                                            <li>
                                                                website : {{$company->website}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </a>
                               
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center d-flex align-items-center justify-content-between position-relative">
                                    <p class=" mb-0  font12"> {{$company->contact_number}}</p>
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

                                <div class="bg-white p-1 border-bottom border-end d-flex align-items-center justify-content-between position-relative">
                                    <span class="font12">{{$company->email}}</span>
                                    <i class="fa-solid fa-ellipsis-vertical threedots"></i>
                                <div class="infotooltip">
                                    <span>
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice text-center">{{count($company->contacts)}}</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <p class="mb-0 fontprice text-center">{{count($company->contacts)}}</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2  border-bottom">
                                    <p class="mb-0 fontprice text-center">{{count($company->contacts)}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">100</p>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    @php 
                                    $title = '';
                                    $name = '';
                                    if($company->manager){
                                        $manger = $company->manager;
                                        $title = ($manger->title) ? $manger['title'] : '';
                                        $name = ($manger['name']) ? $manger['name'] : '';
                                    }
                                //    die;
                                    @endphp
                                    <p class="mb-0 fontprice">{{ $title }} {{ $name }}</p>
                                </div>
                            </td>
    
                        </tr>
                        @endforeach
                        
                    </table>
                </div>
               
            </div>

            <div class="p-3 alltabscom" id="com2">
                <div class="px-2 mb-2 d-flex align-items-center">
                    <div class="d-flex align-items-center border boxtable justify-content-between ">
                        <div>
                            <img src="{{asset('public/assets/tableicon.png')}}" class="tabicon" alt="">
                            <span class="px-2 fontprice">Table1</span>
                        </div>
                      
                        <img src="{{asset('public/assets/downarrow.png')}}" class="tbicon" alt="">
                    </div>
                    <div class="text-center">
                        <img src="{{asset('public/assets/updown.png')}}" class="arrowdown" alt="">
                    </div>

                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('public/assets/plate.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Bulk Action</span>
                    </div>


                    <div class="text-center d-flex align-items-center bulkbox justify-content-center">
                        <img src="{{asset('public/assets/filter.png')}}" class="arrowdown me-1" alt="">
                        <span class="fontprice">Filter by</span>
                    </div>
                </div>
                <div class="checktblefeild">
                    <table class="tableindex">
                        <tr class="">
                            <th class="cell1">
                                <div class="bg-white p-2 mb-2 border-end">
                                    <div>
                                        <label class="cutomcheck">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="ms-5">
    
                                            <span class="fontapex color">Name</span>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="cell2">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Phone Number</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell3">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Email ID</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell4">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Number of RFQ</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell5">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Number Projects</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Total Travellers Number	</span>
    
                                    </div>
                                </div>
                            </th>
    
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color font12">Total Travellers Data Numb		</span>
    
                                    </div>
                                </div>
                            </th>
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color font12">Relationship Manager</span>
    
                                    </div>
                                </div>
                            </th>

                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color font12">Label 1</span>
    
                                    </div>
                                </div>
                            </th>

                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color font12">Label 2</span>
    
                                    </div>
                                </div>
                            </th>

                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color font12">Label 3</span>
    
                                    </div>
                                </div>
                            </th>
                        </tr>
    
                        <tr>
                            <td>
                                <a href="./second.html">
                                    <div class="bg-white p-2  border-bottom posi">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <label class="cutomcheck">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="ms-5 ">
                                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                    <span class="fontapex  text-decoration-none">Apex IQ (sample)</span>
                                                    <img src="{{asset('public/assets/eye.png')}}" class="iconmo" alt="">
                                                    <div class="viewcard">
                                                        <ul class="list-unstyled text-dark">
                                                            <li>
                                                                Name : zyx
                                                            </li>
                                                            <li>
                                                                email : ayx@gmail.com
                                                            </li>
    
                                                            <li>
                                                                 Number : xxxxxxxxxxx
                                                            </li>
                                                            <li>
                                                                website : zyx.com
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
        
        
                                        </div>
                                    </div>
                                </a>
                               
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center">
                                    <p class="fontapex mb-1">apexiqsolutions.c</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <div class="crownbox">
                                        <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                                        <span class="caller">Caller6 HiWalk</span>
                                    </div>
    
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2  border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="widthplusicon"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                    </svg>
                                    <span class="fontgray ">Add task</span>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                        </tr>
                        <tr>
                            <td>
                                <a href="./second.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center">
                                    <p class="fontapex mb-1">apexiqsolutions.c</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <div class="crownbox">
                                        <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                                        <span class="caller">Caller6 HiWalk</span>
                                    </div>
    
                                </div>
                            </td>
    
                            <td>
                                
                                <div class="bg-white p-2  border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="widthplusicon"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                    </svg>
                                    <span class="fontgray ">Add task</span>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                        </tr>

                        <tr>
                            <td>
                                <a href="./second.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center">
                                    <p class="fontapex mb-1">apexiqsolutions.c</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <div class="crownbox">
                                        <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                                        <span class="caller">Caller6 HiWalk</span>
                                    </div>
    
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2  border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="widthplusicon"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                    </svg>
                                    <span class="fontgray ">Add task</span>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
                            
    
                        </tr>
                        <tr>
                            <td>
                                <a href="./second.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center">
                                    <p class="fontapex mb-1">apexiqsolutions.c</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <div class="crownbox">
                                        <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                                        <span class="caller">Caller6 HiWalk</span>
                                    </div>
    
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2  border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="widthplusicon"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                    </svg>
                                    <span class="fontgray ">Add task</span>
                                </div>
                            </td>
    
                        </tr>
                        <tr>
                            <td>
                                <a href="./second.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center">
                                    <p class="fontapex mb-1">apexiqsolutions.c</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <div class="crownbox">
                                        <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                                        <span class="caller">Caller6 HiWalk</span>
                                    </div>
    
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2  border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="widthplusicon"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                    </svg>
                                    <span class="fontgray ">Add task</span>
                                </div>
                            </td>
    
                        </tr>
                        <tr>
                            <td>
                                <a href="./second.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="bg-white p-2 border-bottom border-end text-center">
                                    <p class="fontapex mb-1">apexiqsolutions.c</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-end">
                                    <p class="mb-0 fontprice">$0</p>
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-1 border-bottom border-end">
                                    <div class="crownbox">
                                        <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                                        <span class="caller">Caller6 HiWalk</span>
                                    </div>
    
                                </div>
                            </td>
    
                            <td>
                                <div class="bg-white p-2  border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="widthplusicon"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                    </svg>
                                    <span class="fontgray ">Add task</span>
                                </div>
                            </td>
    
                        </tr>
                    </table>
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
        <form action="{{route('company.create')}}" method="POST">
            @csrf
        <div class="px-3 forminputs">
            <div class="mb-2">
                <label for="name" class="mb-2">Company or Client Name</label>
                <br>
                <input type="text" name="name" id="name">
            </div>
            <div class="mb-2">
                <label for="email" class="mb-2">Email</label>
                <br>
                <input type="text" name="email" id="email">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Client Type</label>
                <br>
                <select class="form-select font12" aria-label="Default select example" name="client_type">
                    <option selected>Open this select menu</option>
                    <option value="Company">Company</option>
                    <option value="Individual">Individual</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="website" class="mb-2">Website </label>
                <br>
                <input type="text" name="website" id="">
            </div>

            <div class="mb-2">
                <label for="contact_number" class="mb-2">Phone</label>
                <br>
                <input type="text" name="contact_number" id="contact_number">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Contact persan</label>
                <div class="dropdown">
                    <input type="hidden" name="contact_person" id="contact_person_id">
                    <input type="text" id="contact_person" placeholder="Search..." autocomplete="off">
                    <ul id="contactPersonList" class="dropdown-list">
                        @foreach ($contacts as $contact)
                            <li data-value="{{$contact->id}}">{{$contact->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <p id="show_add_contact" style="display: none"><span class="text-primary" ><a href="{{route("company.contacts")}}">Add - Contact</a></span></p>
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Relation Ship Manager</label>
                    <div class="dropdown">
                        <input type="hidden" name="relation_manager" id="relation_manager_id">
                        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off">
                        <ul id="dropdownList" class="dropdown-list">
                            @foreach ($contacts as $contact)
                            <li data-value="{{$contact->id}}">{{$contact->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <p id="show_add_manager" style="display: none"><span class="text-primary" ><a href="{{route("company.contacts")}}">Add - Manager</a></span></p>
            </div>
            
            <div class="mb-2">
                <label for="" class="mb-2">Industry Type</label>
                <br>
                <select name="industry_type" class="form-select font12" aria-label="Default select example" onchange="gettheselectone(this)">
                    <option selected>Select</option>
                    <option value="1">Banking</option>
                    <option value="2">Retail</option>
                    <option value="3">tourism</option>
                    <option value="4">manufacturing</option>
                   <option value="5">Corporate Governance</option>
                   <option value="6">Pharmaceuticals</option>
                   <option value="7">Oil and Natural Gas</option>
                   <option value="">Corporate</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="address" class="mb-2">Address</label>
                <br>
                <input type="text" name="address" id="">
            </div>

            <div class="mb-2">
                <label for="cin_number" class="mb-2">CIN</label>
                <br>
                <input type="text" name="cin_number" id="cin_number">
            </div>

            <div class="mb-2">
                <label for="gst_number" class="mb-2">GST</label>
                <br>
                <input type="text" name="gst_number" id="gst_number">
            </div>

            <div class="mb-2">
                <label for="pan_number" class="mb-2">PAN</label>
                <br>
                <input type="text" name="pan_number" id="pan_number">
            </div>

            <div class="mb-2">
                <label for="state" class="mb-2">State</label>
                <br>
                <input type="text" name="state" id="state">
            </div>

            {{-- <div class="mb-2">
                <label for="" class="mb-2">Address</label>
                <br>
                <input type="text" name="" id="">
            </div> --}}

            <div class="mb-2">
                <label for="pin_code" class="mb-2">Pin Code</label>
                <br>
                <input type="text" name="pin_code" id="pin_code">
            </div>
        </div>

        <div class="saveclearbutton">
            <button type="button" class="cl"  onclick="closeme()"> cancel </button>
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
                document.getElementById('show_add_contact').style.display='block';
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
@endsection