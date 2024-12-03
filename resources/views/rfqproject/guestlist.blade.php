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

    <div class="pt-4 px-4">
        <div class="row">
            @include('rfqproject.rfqleftsidebar')
            <div class="col-md-10 px-0  rigthbarsection">
                <div class="bg-white p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0"> RFQ Guest List</h6>
                        <div class="d-flex">
                            <div class="pb-2 me-3"  >
                                <button class="p-2 bg-white text-dark border addbutton addbutton2 d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                    </svg>
                                    <a href="./files.html" class="text-dark">  Import Guest</a>
                                    
                                </button>
                            </div>
                            <div class="pb-2"  onclick="openme()">
                                <button class="p-2 bg-white text-dark border addbutton addbutton2 d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                    </svg>
                                    Add Guest 
                                </button>
                            </div>
                        </div>
                        
                    </div>

                    <div class="mt-5">
                        <div class="contractsection">
                            <table class="Contract contractsectiontable">
                                <tr class="">
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3"> UNIQUE ID</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Name</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Contact Number</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Email Id</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Gander</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Category</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Contact Persan</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Location</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">State</p></th>
                                    <th  class="font12 "><p class="mb-3 border-bottom pb-3">Resion</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Qualified For</th>
                                    <th  class="font12 "><p class="mb-3 border-bottom pb-3">Status</p></th>
                                    <th class="font12 "><p class="mb-3 border-bottom pb-3">Support Team</th>
                                </tr>
                                @foreach ($guestlist as $guest)
                                <tr>
                                    <td style="padding-top:15px">{{$guest->guest_id}}</td>
                                    <td style="padding-top:15px">{{$guest->name}}</td>
                                    <td style="padding-top:15px">{{$guest->contact}}</td>
                                    <td style="padding-top:15px">{{$guest->email}}</td>
                                    <td style="padding-top:15px">{{$guest->gender}}</td>
                                    <td style="padding-top:15px">{{$guest->category}}</td>
                                    @php
                                        $contactperson = $guest->contactperson;
                                    @endphp
                                    <td style="padding-top:15px">{{$contactperson->title}} {{$contactperson->name}}</td>
                                    <td style="padding-top:15px">{{$guest->location}}</td>
                                    <td style="padding-top:15px">{{$guest->state}}</td>
                                    <td style="padding-top:15px">{{$guest->resion}}</td>
                                    <td style="padding-top:15px">{{$guest->qualified}}</td>
                                    <td style="padding-top:15px">{{ ($guest->status==1) ? 'Active' : 'In Active' }}</td>
                                    <td style="padding-top:15px">{{$guest->support_team}}</td>
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
            <h5 class="mb-0">Add Guest</h5>
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
        <form action="{{route('rfqproject.guestcreate')}}" method="POST">
            @csrf
            <input type="hidden" name="rfq_id" value="{{$rfqDetails->id}}">
            <div class="px-3 forminputs">
                <div class="mb-2">
                    <label for="name" class="mb-2"> UNIQUE ID </label>
                    <br>
                    <input type="text" name="guest_id" id="" value="{{ old('guest_id') }}">
                </div>
                <div class="mb-2">
                    <label for="name" class="mb-2"> Name </label>
                    <br>
                    <input type="text" name="name" id="">
                </div>
                <div class="mb-2">
                    <label for="" class="mb-2">Gander</label>
                    <br>
                    <select class="form-select font12" aria-label="Default select example" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="mb-2">Contact Number</label>
                    <br>
                    <input type="number" name="contact" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">Email Id</label>
                    <br>
                    <input type="email" name="email" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">Category</label>
                    <br>
                    <div class="d-flex align-items-center mb-4">
                        <input type="text" class="" name="category" id="">
                    </div>
                    
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">Contact persan</label>
                    <div class="dropdown">
                        <input type="hidden" name="contact_person_id" id="contact_person_id">
                        <input type="text" id="contact_person" placeholder="Search..." autocomplete="off">
                        <ul id="contactPersonList" class="dropdown-list">
                            @foreach ($contacts as $contact)
                                <li data-value="{{$contact->id}}">{{$contact->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <p id="show_add_contact" style="display: none"><span class="text-primary" ><a href="{{route("company.contacts")}}">Add - Contact</a></span></p> --}}
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">Location</label>
                    <br>
                    <input type="text" name="location" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2" >State</label>
                    <br>
                    <input type="text" name="state" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">Resion</label>
                    <br>
                    <input type="text" name="resion" id="">
                </div>

                <div class="mb-2">
                    <label for="" class="mb-2">Qualified For</label>
                    <br>
                    <input type="number" name="qualified" id="">
                </div>
                <div class="mb-2">
                    <label for="" class="mb-2">Status</label>
                    <br>
                    <select class="form-select font12" aria-label="Default select example" name="status">
                        <option value="1">Active</option>
                        <option value="2">In-Active</option>
                    </select>
                </div>

                <!--<div class="mb-2">-->
                <!--    <label for="" class="mb-2">Support Team</label>-->
                <!--    <br> -->
                <!--    <input type="number" name="support_team" id="">-->
                <!--</div>-->
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