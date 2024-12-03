@extends('layouts.app')

@section('title',"Dashboard")

<style>
    .stickyone li{
        padding: 10px !important;
    }
</style>
@section('content')
                <div class="ms-4 p-2">
                       <h6 class="mb-0">CONTACTS</h6>
                </div>
        <div>
               


            <div class=" bg-white pt-5 px-4 d-flex justify-content-between">
              
                <div class="d-flex align-items-center justify-content-end w-100">
                    
                   

                    <div class="pb-2"  onclick="openme()">
                        <button class="p-2 addbutton greenbutton d-flex align-items-center">
                           <!-- <img src="./assets/doengreenarrow.png" width="15" alt=""> -->
                           Add Contact
                        </button>
                    </div>
                </div>

            </div>
            <div class="p-3">
                <div class="px-2 mb-2 d-flex align-items-center">
                    <div class="d-flex align-items-center border boxtable justify-content-between ">
                        <div>
                            <img src="./assets/tableicon.png" class="tabicon" alt="">
                            <span class="px-2 fontprice">Table</span>
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
                    <div style="width: 20%">
                        <ul class="stickyone">
                            <li>Name</li>
                            @foreach ($data as $contact)
                            <li><a href="javascript:void(0)">{{ Str::ucfirst($contact->title) }} {{ Str::ucfirst($contact->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="overflow-auto  tablewrapper">
                    
                        <table class="table-container  tab">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Contact Type</th>
                                    <th class="position-relative">Profile</th>
                                    <th>Contact Number</th>
                                    <th>Additional Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $contact)
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-between position-relative">
                                            <span class="font12">{{$contact->email}}</span>
                                            <i class="fa-solid fa-ellipsis-vertical threedots"></i>
                                            <div class="infotooltip">
                                                <span>
                                                    <i class="fa-solid fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                
                                    <td >
                                        <div class="d-flex justify-content-between  position-relative">
                                            {{ ($contact->contact_type==1) ? 'Client' : '' }} 
                                            {{ ($contact->contact_type==2) ? 'Vendor' : '' }}
                                            {{ ($contact->contact_type==3) ? 'Employee' : '' }}
                                            {{ ($contact->contact_type==4) ? 'Freelancer' : '' }}
                                        </div>
                                    
                                    </td>
            
                                    <td >
                                        <div class="d-flex justify-content-between  position-relative">
                                            {{$contact->profile}}
                                        </div>
            
                                    </td>
                                    <td >
                                        <div class="d-flex justify-content-between position-relative">
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
                                        <div class="d-flex justify-content-between position-relative">
                                            <p class=" mb-0  font12"> {{$contact->additional_number}}</p>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                    </div>
                </div>
            </div>

        </div>
   


    <div class="formaddcompany" id="formaddcompany" >
        <form action="{{route('company.createContacts')}}" method="POST">
            @csrf
            <div class="d-flex justify-content-between align-items-center mb-3 p-4">
                <h5 class="mb-0">Add Contacts</h5>

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
                    <label for="name" class="mb-2">Title</label>
                    <br>
                    <select class="form-select font12" aria-label="Default select example" name="title">
                        <option >Select</option>
                        <option value="Mr" {{ (old('title')=='Mr') ? 'selected' : '' }}>Mr</option>
                        <option value="Ms" {{ (old('title')=='Ms') ? 'selected' : '' }}>Ms</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="name" class="mb-2">Name</label>
                    <br>
                    <input type="text" name="name" id="name" value="{{old('name')}}">
                </div>

                <div class="mb-2">
                    <label for="contact_type" class="mb-2">Contact Type</label>
                    <br>
                    <select name="contact_type" class="form-select font12" aria-label="Default select example" onchange="gettheselectone(this)">
                        <option value="0" {{ (old('contact_type')=='0') ? 'selected' : '' }}>Client</option>
                        <option value="1" {{ (old('contact_type')=='1') ? 'selected' : '' }}>Vendor</option>
                        <option value="2" {{ (old('contact_type')=='2') ? 'selected' : '' }}>Employee</option>
                        <option value="3" {{ (old('contact_type')=='3') ? 'selected' : '' }}>Freelancer</option>
                    </select>
                </div>

                <div class="mb-2 bbox" id="comindi" >
                    <label for="" class="mb-2">Company / Individual</label>
                    <br>
                    <input type="text" name="" id="" onclick="showindivi()" value="{{old('')}}">

                    <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div>
                </div>
                <div class="mb-2 bbox" id="comindi1">
                    <label for="" class="mb-2">Add Vendor</label>
                    <br>
                    <input type="text" name="" id="" onclick="showindivi()" >

                    <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div>
                </div>
                <div class="mb-2 bbox" id="comindi2">
                    <label for="contract_relate" class="mb-2">add Employee</label>
                    <br>
                    <input type="text" name="contract_relate" id="contract_relate" onclick="showindivi()" >

                    <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div>
                </div> 

                <div class="mb-2 " >
                    <label for="profile" class="mb-2">Profile</label>
                    <br>
                    <input type="text" name="profile" id="profile" onclick="showindivi()" value="{{old('profile')}}">

                    <!-- <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div> -->
                </div>
                <div class="mb-2 " >
                    <label for="" class="mb-2">Contact Number</label>
                    <br>
                    <input type="text" name="contact_number" max="10" id="" onclick="showindivi()" placeholder="Enter a 10 digit Number" value="{{old('contact_number')}}">

                    <!-- <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div> -->
                </div>
                <div class="mb-2 " >
                    <label for="additional_number" class="mb-2">Additional Number</label>
                    <br>
                    <input type="text" max="10" name="additional_number" id="additional_number" onclick="showindivi()" placeholder="Enter a 10 digit Number" value="{{old('additional_number')}}">

                    <!-- <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div> -->
                </div>
            
                <div class="mb-2 " >
                    <label for="email" class="mb-2">Email</label>
                    <br>
                    <input type="email" name="email"  id="email" onclick="showindivi()" value="{{old('email')}}">

                    <!-- <div class="indivicom" id="addtext">
                            <div class="">
                                    <p class="font12 mb-0 " ><span class="text-primary" onclick="addCompany()">Add - Company / Individual</span></p>
                            </div>
                    </div> -->
                </div>

            
            </div>

            <div class="saveclearbutton">
                <button class="cl" type="button" onclick="closeme()">
                    cancel
                </button>

                <button class="sv">
                    save
                </button>
            </div>
        </form>
    </div>

    <div class="formaddcompany" id="formaddcompany2" >

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
                <label for="name" class="mb-2">Company or Client Name</label>
                <br>
                <input type="text" name="" id="">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Client Type</label>
                <br>
                <select class="form-select font12" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Company</option>
                    <option value="2">Individual</option>
                   
                  </select>
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">Website </label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Phone    </label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Relation Ship Manager</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Industry Type</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Address</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">CIN</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">GST</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">Sate</label>
                <br>
                <input type="text" name="" id="">
            </div>
        </div>

        <div class="saveclearbutton">
            <button class="cl" type="button">
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
     document.getElementById("formaddcompany2").style.display ="none"
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
      function showindivi(){
        document.getElementById("addtext").style.display ="block" 
      }
       function addCompany(){
          document.getElementById("formaddcompany2").style.display ="block"
       }



       function gettheselectone(val){
        for (let index = 0; index < document.getElementsByClassName("bbox").length; index++) {
           document.getElementsByClassName("bbox")[index].style.display="none"
            
        }
       
        if(val.value ==="0"){
            document.getElementById("comindi").style.display ="block"

        }
        if(val.value ==="1"){
            document.getElementById("comindi1").style.display ="block"
        }
        if(val.value ==="2"){
            document.getElementById("comindi2").style.display ="block"
        }
        if(val.value ==="3"){
            document.getElementById("comindi3").style.display ="block"
        }
        
           
       }
</script>

@endsection