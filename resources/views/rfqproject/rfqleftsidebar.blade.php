<div class="col-md-2 p-2 border-end leftsideinnerbar">
    <div class="d-flex align-items-center mb-3">
        <img src="{{asset('assets/iconpro.png')}}" width="60" height="60" class="circleredius" alt="">
        <div class="ms-2">
            <p class="mb-0 font13">{{ Str::ucfirst($rfqDetails->name) }}</p>
            <span class="minifont">{{($rfqDetails->type==1) ? 'Domastic' : 'International'}}</span>
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
            <li class="projectoverview activeinsideofleftbar"><img src="{{asset('/public/assets/grid.png')}}" alt="">
                <a href="{{ route('rfqproject.overview',['rfqId' => $rfqDetails->id]) }}" class="text-dark">Overview</a>
            </li>

            <li class="projectcontact"> <img src="{{asset('/public/assets/user.png')}}" alt=""><a href="{{ route('rfqproject.rfqContacts',['rfqId' => $rfqDetails->id]) }}" class="text-dark">contact details</a></li>
            
            {{-- <li>
                <a href="{{route('rfqproject.conversation',['rfqId' => $rfqDetails->id])}}" class="text-dark">
                    <img src="{{asset('/public/assets/recent.png')}}" alt=""> Conversations
                </a>
            </li> --}}
            <li class="projectactivity">
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="{{ route('rfqproject.activity',['rfqId' => $rfqDetails->id]) }}" class="text-dark">Activities</a>
            </li>
            <li class="projectguest">
                <img src="{{asset('/public/assets/deals.png')}}" alt="">
                <a href="{{ route('rfqproject.guestlist',['rfqId' => $rfqDetails->id]) }}" class="text-dark">Guest List</a>  
            </li>
            <li class="projectconversation">
                <a href="{{route('rfqproject.conversation',['rfqId' => $rfqDetails->id])}}" class="text-dark">
                    <img src="{{asset('/public/assets/recent.png')}}" alt=""> Conversations
                </a>
            </li>
            {{-- <li>
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="./files.html" class="text-dark">Setting</a>  
            </li> --}}
            <li class="projectfile">
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="{{ route('rfqproject.files',['rfqId' => $rfqDetails->id]) }}" class="text-dark">Files</a> 
            </li>
            
            <li class="projectmanage">
                <img src="{{asset('/public/assets/activity.png')}}" alt="">
                <a href="{{ route('rfqproject.manageproject',['rfqId' => $rfqDetails->id]) }}" class="text-dark">Manage Project</a> 
            </li>
        </ul>
    </div>
</div>