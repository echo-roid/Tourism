@if(Auth::user())
<div class="rightbar">
    <div class="mb-3 text-center mt-4">
        <a href="{{ url('/home') }}"><img src="{{asset('assets/sideorangeicon.png')}}" alt="" class="orangeiconleft"></a>
    </div>
        <ul class="iconbar">
                <!--<li  class="activeliicon"> <a href="./second.html"> <img src="{{ asset('public/assets/ficon1.png') }}" alt=""></a></li>-->
                <li><a href="{{ url('/home') }}"><img src="{{ asset('assets/ficon2.png') }}" alt=""></a></li>
                <!--<li><a href="./allfrom.html"> <img src="{{ asset('assets/ficon3.png') }}" alt=""></a></li>-->
                <!--<li><a href="./travelerslist.html"><img src="{{ asset('assets/ficon4.png') }}" alt=""></a></li>-->
                <!--<li><a href="./contract.html"><img src="{{ asset('assets/ficon5.png') }}" alt=""></a></li>-->
                <li><a href="{{ route('company.project') }}"><img src="{{ asset('assets/ficon6.png') }}" alt=""></a></li>
                 <!--<li><a href="{{ url('/project') }}"><img src="{{ asset('assets/ficon6.png') }}" alt=""></a></li>-->
                <li><a href="{{ route('form_list') }}"><i class="fa-solid fa-align-justify"></i></a></li>
                <li><a href="{{ route('company.contacts') }}"><i class="fa-solid fa-address-book"></i></a></li>
                <li><a href="{{ route('roles.index') }}"><i class="fa-solid fa-gear"></i></a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>    
                </li>
        </ul>
</div>
@endif