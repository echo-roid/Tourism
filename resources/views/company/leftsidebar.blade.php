{{-- <div class="col-md-2 p-2 border-end leftsideinnerbar">
    <div class="d-flex align-items-center mb-3">
        <img src="{{asset('assets/iconpro.png')}}" width="60" height="60" class="circleredius" alt="">
        <div class="ms-2">
            <p class="mb-0 font13">Spector Calista</p>
            <span class="minifont">Sales Mnager</span>
        </div>
    </div>

    <div class="detailsStart d-flex justify-content-between align-items-center mx-2">
        <div>
            <div class="d-flex mb-2">
                <p class="mb-0 minifont">score</p>
                <p class="mb-0 minifont ms-2">Customer fit</p>
            </div>
            <div class="d-flex align-items-center">
                <h6 class="mb-0">65</h6>
                <img src="{{asset('assets/startgrop.png')}}" class="ms-3 starticons" alt="">
            </div>
        </div>
        <img src="{{asset('assets/arroeblueright.png')}}" width="20" alt="">
   </div>

   <div class="d-flex align-items-center justify-content-between mt-3 mb-3 px-2">
       <h6 class="mb-0 font12">Contact information</h6>
       <img src="{{asset('assets/settingborder.png')}}"  width="20" alt="">
   </div>

    <div>
        <ul class="contactinfoul">
            <li class="activeinsideofleftbar"> 
                <img src="{{asset('assets/user.png')}}" alt="">
                <a href="{{ route('company.contract',['companyId' => $companyId]) }}" class="text-dark">Contracts</a>
            </li>
           <!--  <li class=""> 
                <img src="{{asset('assets/contacticon.png')}}" alt="">
                <a href="" class="text-dark">Contract team</a> route('company.contract-team',['companyId' => $companyId])
            </li> -->
            <li class="">
                <img src="{{asset('assets/grid.png')}}" alt="">
                <a href="./overviewpage.html" class="text-dark">Overview</a>
            </li>
            <li>
                <a href="./conve.html" class="text-dark">
                <img src="{{asset('assets/recent.png')}}" alt=""> Conversations</a>
            </li>
            <li>
                <img src="{{asset('assets/activity.png')}}" alt=""><a href="./activities.html" class="text-dark">Activities</a>
            </li>
            <li>
                <img src="{{asset('assets/activity.png')}}" alt="">
                <a href="./files.html" class="text-dark">Files</a>
            </li>
        </ul>
    </div>
</div> --}}

<div class="col-md-2 p-2 border-end leftsideinnerbar">
    <div class="d-flex align-items-center mb-3">
        <img src="{{asset('/public/assets/iconpro.png')}}" width="60" height="60" class="circleredius" alt="">
        <div class="ms-2">
            <p class="mb-0 font13">{{$companyDetails->name}}</p>
            <span class="minifont">Company</span>
        </div>
    </div>
    <div class="detailsStart d-flex justify-content-between align-items-center mx-2">
    <div>
        <div class="d-flex mb-2">
            <p class="mb-0 minifont">score</p>
            <p class="mb-0 minifont ms-2">Customer fit</p>
        </div>
        <div class="d-flex align-items-center">
            <h6 class="mb-0">65</h6>
            <img src="{{asset('assets/startgrop.png')}}" class="ms-3 starticons" alt="">
        </div>
    </div>

            <img src="{{asset('assets/arroeblueright.png')}}" width="20" alt="">
            
    </div>

    <div class="d-flex align-items-center justify-content-between mt-3 mb-3 px-2">
        <h6 class="mb-0 font12">Contact information</h6>
        <img src="{{asset('assets/settingborder.png')}}"  width="20" alt="">
    </div>
    
    <div>
        <ul class="contactinfoul">
            <li class="cmpnyoverview activeinsideofleftbar"><img src="{{asset('/public/assets/grid.png')}}" alt="">
                <a href="{{ route('company.overview',['companyId' => $companyDetails->id]) }}" class="text-dark">Overview</a>
            </li>

            <li class="cmpnycontact"> <img src="{{asset('/public/assets/user.png')}}" alt=""><a href="{{ route('company.companyContacts',['companyId' => $companyDetails->id]) }}" class="text-dark">contact details</a></li>
            
            <li class="cmpnyrfq"> 
                <img src="{{asset('/public/assets/contacticon.png')}}" alt="">
                <a href="{{ route('company.contract',['companyId' => $companyDetails->id]) }}" class="text-dark">RFQ</a>
            </li>
            {{-- <li class="cpmnyconv">
                <a href="{{route('company.conversation',['companyId' => $companyDetails->id])}}" class="text-dark">
                    <img src="{{asset('/public/assets/recent.png')}}" alt=""> Conversations
                </a>
            </li> --}}
            <li class="compnyactivity">
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="{{ route('company.activity',['companyId' => $companyDetails->id]) }}" class="text-dark">Activities</a>
            </li>
            <li class="cmpnyfile">
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="{{ route('company.files',['companyId' => $companyDetails->id]) }}" class="text-dark">Files</a> 
            </li>
            <li class="cmpnysetting">
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="#" class="text-dark">Setting</a>  
            </li>
        </ul>
    </div>
</div>