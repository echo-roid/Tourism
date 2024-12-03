@extends('layouts.app')

@section('title',"Dashboard")

@section('content')


  
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
                            <img src="./assets/tableicon.png" class="tabicon" alt="">
                            <span class="px-2 fontprice">Table1</span>
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
    
                                            <span class="fontapex color">
                                                RFQ Name</span>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            
                            
                            
                            <th class="cell2">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">	
                                            Project Type</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell3">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">	
                                            Number of Guest</span>
    
                                    </div>
                                </div>
                            </th>
                            <th class="cell4">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Location</span>
    
                                    </div>
                                </div>
                            </th>
                            <!-- <th class="cell5">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Location</span>
    
                                    </div>
                                </div>
                            </th> -->
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">Days</span>
    
                                    </div>
                                </div>
                            </th>
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">	
                                            Receive Date</span>
    
                                    </div>
                                </div>
                            </th>
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">	
                                               RFQ Coordinator</span>
    
                                    </div>
                                </div>
                            </th>
    
                            <th class="cell6">
                                <div class="bg-white p-2 mb-2  border-end">
                                    <div>
    
    
                                        <span class="fontapex color">	
                                            Sales Stage</span>
    
                                    </div>
                                </div>
                            </th>
                        </tr>
    
                      
                        <tr>
                            <td>
                                <a href="./RFQ_overview.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="./assets/profilename.png" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="./assets/profilename.png" class="profilenameimg" alt="">
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
                                        <img src="./assets/crown.png" class="crownimg" alt="">
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
                            <td></td>

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
                                                <img src="./assets/profilename.png" class="profilenameimg" alt="">
                                                <span class="fontapex">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                            </td>
    
                            <td>
                                <div class="bg-white p-2 border-bottom border-start border-end">
                                    <img src="./assets/profilename.png" class="profilenameimg" alt="">
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
                                        <img src="./assets/crown.png" class="crownimg" alt="">
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




            <div class="p-3 alltabscom" id="com2">
                <div class="px-2 mb-2 d-flex align-items-center">
                    <div class="d-flex align-items-center border boxtable justify-content-between ">
                        <div>
                            <img src="./assets/tableicon.png" class="tabicon" alt="">
                            <span class="px-2 fontprice">Table2</span>
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

                                        <span class="fontapex color">
                                            RFQ Name</span>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th class="cell2">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">	
                                        Project Type</span>

                                </div>
                            </div>
                        </th>
                        <th class="cell3">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">	
                                        Number of Guest</span>

                                </div>
                            </div>
                        </th>
                        <th class="cell4">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">Location</span>

                                </div>
                            </div>
                        </th>
                        <th class="cell5">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">Location</span>

                                </div>
                            </div>
                        </th>
                        <th class="cell6">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">Days</span>

                                </div>
                            </div>
                        </th>

                        <th class="cell6">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">	
                                        Receive Date</span>

                                </div>
                            </div>
                        </th>

                        <th class="cell6">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">	
                                       	RFQ Coordinator</span>

                                </div>
                            </div>
                        </th>

                        <th class="cell6">
                            <div class="bg-white p-2 mb-2  border-end">
                                <div>


                                    <span class="fontapex color">	
                                        Sales Stage</span>

                                </div>
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <a href="./RFQ_overview.html">
                                <div class="bg-white p-2  border-bottom ">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <label class="cutomcheck">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ms-5">
                                                <img src="./assets/profilename.png" class="profilenameimg" alt="">
                                                <span class="fontapex  text-decoration-none">Apex IQ (sample)</span>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </a>
                           
                        </td>

                        <td>
                            <div class="bg-white p-2 border-bottom border-start border-end">
                                <img src="./assets/profilename.png" class="profilenameimg" alt="">
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
                                    <img src="./assets/crown.png" class="crownimg" alt="">
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
                                            <img src="./assets/profilename.png" class="profilenameimg" alt="">
                                            <span class="fontapex">Apex IQ (sample)</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </a>
                        </td>

                        <td>
                            <div class="bg-white p-2 border-bottom border-start border-end">
                                <img src="./assets/profilename.png" class="profilenameimg" alt="">
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
                                    <img src="./assets/crown.png" class="crownimg" alt="">
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
                                            <img src="./assets/profilename.png" class="profilenameimg" alt="">
                                            <span class="fontapex">Apex IQ (sample)</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </a>
                        </td>

                        <td>
                            <div class="bg-white p-2 border-bottom border-start border-end">
                                <img src="./assets/profilename.png" class="profilenameimg" alt="">
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
                                    <img src="./assets/crown.png" class="crownimg" alt="">
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
             <h5 class="mb-0">Add RFQ</h5>

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
                <label for="name" class="mb-2"> RFQ Name</label>
                <br>
                <input type="text" name="" id="">
            </div>
            
            
            <div class="mb-2">
                <label for="name" class="mb-2"> Company Name</label>
                <br>
                <input type="text" name="" id="">
            </div>
            
            <div class="mb-2">
                <label for="" class="mb-2">Project Type</label>
                <br>
                <select class="form-select font12" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">Company</option>
                  <option value="2">Individual</option>
                 
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Number of Guest </label>
                <br>
                <input type="number" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Location</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Duration Of Project (StartDate - End Date)	</label>
                <br>
                <div class="d-flex align-items-center mb-4">
                  <input type="date" class=" me-3 w-50" name="" id="">
                
                

                  <input type="date" class="w-50" name="" id="">
                </div>
               
            </div>


            <div class="mb-2">
                <label for="" class="mb-2">Project Number of Days</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
              <label for="" class="mb-2">RFQ - Receive-Date</label>
              <br>
              <input type="text" name="" id="">
          </div>

          <div class="mb-2">
            <label for="" class="mb-2" >Contact Person</label>
            <br>
            <input type="text" disabled name="" id="">
        </div>

        <div class="mb-2">
          <label for="" class="mb-2">Sale Coordinator</label>
          <br>
          <input type="text" disabled name="" id="">
      </div>

      <div class="mb-2">
        <label for="" class="mb-2"> RFQ Value</label>
        <br>
        <input type="number" name="" id="">
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

    </script>

<script>
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
</script>

<script>
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