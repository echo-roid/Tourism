@extends('layouts.app')

@section('title',"Dashboard")

@section('content')

    <div class="bg-white pt-5 px-4 d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <div class="tabb tabmy" onclick="tabon(this)">
                <p class="mb-0 fontapex">My companies</p>
            </div>
            <!-- <div class="tabb mx-4 " onclick="tabon(this)">
                <p class="mb-0 fontapex">All companies</p>
            </div>
            <div class="tabb" onclick="tabon(this)">
                <p class="mb-0 fontapex">My territory campa..</p>
            </div> -->
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

            <div class="pb-2">
                <div class="border d-flex align-items-center ms-3">
                    <!-- <div class="py-2 px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow"
                            viewBox="0 0 576 512">
                            <path
                                d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7 96 64c0-17.7 14.3-32 32-32s32 14.3 32 32l0 301.7 32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 480c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-96 0zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32l160 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-160 0zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L320 96z" />
                        </svg>
                        <span class="fontprice">Import companies</span>
                    </div> -->

                    <div class="ms-2 border-start p-2 h-100 d-flex align-items-center justify-content-center">
                        <img src="{{asset('public/assets/downarrow.png')}}" class="arrowdownpick" alt="">
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
    <div class="p-3">
        <div class="px-2 mb-2 d-flex align-items-center">
            <div class="d-flex align-items-center border boxtable justify-content-between ">
                <div>
                    <img src="{{asset('public/assets/tableicon.png')}}" class="tabicon" alt="">
                    <span class="px-2 fontprice">Table</span>
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
        <table>
           
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


                            <span class="fontapex color">Related User</span>

                        </div>
                    </div>
                </th>
                <th class="cell3">
                    <div class="bg-white p-2 mb-2  border-end">
                        <div>


                            <span class="fontapex color">website</span>

                        </div>
                    </div>
                </th>
                <th class="cell4">
                    <div class="bg-white p-2 mb-2  border-end">
                        <div>


                            <span class="fontapex color">Open Contracts</span>

                        </div>
                    </div>
                </th>
                <th class="cell5">
                    <div class="bg-white p-2 mb-2  border-end">
                        <div>


                            <span class="fontapex color">sales Owner</span>

                        </div>
                    </div>
                </th>
                <th class="cell6">
                    <div class="bg-white p-2 mb-2  border-end">
                        <div>


                            <span class="fontapex color">Next Activity</span>

                        </div>
                    </div>
                </th>
            </tr>

            @foreach ($companies as $company)
            <tr>
                <td>
                    <a href="{{ route('company.contract',['companyId' => $company->id]) }}">
                        <div class="bg-white p-2  border-bottom ">
                            <div class="d-flex align-items-center">
                                <div>
                                    <label class="cutomcheck">
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="ms-5">
                                        <img src="{{asset('public/assets/profilename.png')}}" class="profilenameimg" alt="">
                                        <span class="fontapex  text-decoration-none">{{$company->name}}</span>
                                        <img src="{{asset('public/assets/eye.png')}}" class="iconmo" alt="" style="height:20px;position:abslute">
                                            <div class="viewcard" style="position:abslute">
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
                        <p class="fontapex mb-1">{{$company->website}}</p>
                    </div>
                </td>

                <td>
                    <div class="bg-white p-2 border-bottom border-end">
                        <p class="mb-0 fontprice">${{$company->contracts}}</p>
                    </div>
                </td>

                <td>
                    <div class="bg-white p-1 border-bottom border-end">
                        <div class="crownbox">
                            <img src="{{asset('public/assets/crown.png')}}" class="crownimg" alt="">
                            <span class="caller">{{$company->sales_owner}}</span>
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

            @endforeach
        </table>
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
                    <label for="name" class="mb-2">name</label>
                    <br>
                    <input type="text" name="name" id="">
                </div>
                <div class="mb-2">
                    <label for="" class="mb-2">website</label>
                    <br>
                    <input type="text" name="website" id="">
                </div>
                <div class="mb-2">
                    <label for="" class="mb-2">phone </label>
                    <br>
                    <input type="text" name="contact_number" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">sales owner</label>
                    <br>
                    <input type="text" name="sales_owner" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">open Contract</label>
                    <br>
                    <input type="text" name="open_contract" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">industry type</label>
                    <br>
                    <input type="text" name="industry_type" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">business type</label>
                    <br>
                    <input type="text" name="business_type" id="">
                </div>
            </div>

            <div class="saveclearbutton">
                <button type="button" class="cl"> cancel </button>
                <button type="submit" class="sv">Save</button>
            </div>
        </form>
    </div>
@endsection
