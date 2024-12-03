@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fb;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-bottom: 1px solid #d3dce6;
            margin-left: 35px;
        }

        .tabs {
            display: flex;
            align-items: center;
        }

        .tabs div {
            margin-right: 20px;
            font-size: 14px;
            color: #576482;
            cursor: pointer;
        }

        .tabs div.active {
            color: #1a73e8;
            font-weight: 500;
        }

        .tabs .badge {
            background-color: #4e8dba;
            color: white;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 12px;
        }

        .controls {
            display: flex;
            align-items: center;
        }

        .controls button {
            background-color: #f4f7fb;
            border: 1px solid #d3dce6;
            padding: 5px 10px;
            font-size: 14px;
            margin-right: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .controls button i {
            margin-right: 5px;
            color: #576482;
        }

        .controls .import-btn {
            background-color: #fff;
            border: 1px solid #d3dce6;
        }

        .controls .add-contact-btn {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 5px 15px;
        }

        /* Dropdown arrow */
        .dropdown-arrow {
            margin-left: 5px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #576482;
        }

        .filter-section {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #f4f7fb;
            margin-left: 35px;
        }

        .filter-section button {
            background-color: #fff;
            border: 1px solid #d3dce6;
            padding: 5px 10px;
            font-size: 14px;
            margin-right: 10px;
            cursor: pointer;
        }

        .company-table {
            padding: 20px;
            display: flex;
            gap: 10px;
            justify-content: space-between;
        }

        .table-column {
            background-color: white;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            padding: 15px;
            width: 33%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .company-card {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .company-card h4 {
            font-size: 16px;
            color: black;
            margin-bottom: 5px;
        }

        .company-card p {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .company-card span {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #e9f5ff;
            color: black;
            font-size: 12px;
            margin-right: 5px;
        }

        .boxdrops {
            display: block;
        }
    </style>
    <div>

        <!-- Navbar -->
        <div class="navbar">
            <div class="tabs">
                <div>My Contacts</div>
                <div>New Contacts</div>
                <div class="active">All Contacts <span class="badge">12</span></div>
                <div>+ 12 more...</div>
            </div>
            <div class="controls">
                <button><i class="fas fa-filter"></i> Customize Contact Cards</button>
                <button class="import-btn"><i class="fas fa-download"></i> Import Contacts <span
                        class="dropdown-arrow"></span></button>
                <button class="add-contact-btn"><i class="fas fa-plus"></i> Add Contact</button>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <button>Status <span class="dropdown-arrow"></span></button>
            <button>Sort by Score <span class="dropdown-arrow"></span></button>
            <button>Filter by <span class="dropdown-arrow"></span></button>
        </div>
        <div class="row">

            {{-- @include('rfqproject.rfqleftsidebar') --}}

            {{-- <div class="col-md-10 px-0  rigthbarsection"> --}}

            <!-- Company Table -->
            <div class="company-table ms-4">
                <!-- New Project Column -->
                <div class="table-column">
                    <h3>New Project</h3>
                    <?php 
                        if($rfqDetails->status == "0") {
                    ?>
                    <div class="company-card" id="q1">
                        <h4><a href="{{ route('showformbuilder', $rfqDetails->id) }}">{{ $rfqDetails->name }}</a></h4>
                        <p>Total PAX</p>
                        <p>Total Travelers {{ $rfqDetails->num_guest }}</p>
                        <div class="d-flex align-items-center">
                            <span>Status</span>
                            <select name="" id="" class="form-select ps-2"
                                onchange="updateProjectStatus(this.value)">
                                <option value="0">New</option>
                                <option value="5">Completed</option>
                                <option value="2">Under process</option>
                            </select>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Under Process Column -->
                <div class="table-column">
                    <h3>Under Process</h3>
                    <?php 
                        if($rfqDetails->status != "0" && $rfqDetails->status != "5" && $rfqDetails->status != "6") {
                    ?>
                    <div class="company-card boxdrops" id="q2">
                        <h4><a href="{{ route('showformbuilder', $rfqDetails->id) }}">{{ $rfqDetails->name }}</a></h4>
                        <p>Total PAX</p>
                        <p>Total Travelers {{ $rfqDetails->num_guest }}</p>
                        <div class="d-flex align-items-center">
                            <span>Status</span>
                            <select name="" id="" class="form-select ps-2"
                                onchange="updateProjectStatus(this.value)">
                                <option value="2">Under process</option>
                                <option value="5">Completed</option>
                                <option value="0">New</option>
                            </select>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Completed Project Column -->
                <div class="table-column">
                    <h3>Completed</h3>
                    <?php 
                        if($rfqDetails->status == "5") {
                    ?>
                    <div class="company-card boxdrops" id="q3">
                        <h4><a href="{{ route('showformbuilder', $rfqDetails->id) }}">{{ $rfqDetails->name }}</a></h4>
                        <p>Total PAX</p>
                        <p>Total Travelers {{ $rfqDetails->num_guest }}</p>
                        <div class="d-flex align-items-center">
                            <span>Status</span>
                            <select name="" id="" class="form-select ps-2"
                                onchange="updateProjectStatus(this.value)">
                                <option value="5">Completed</option>
                                <option value="0">New</option>
                                <option value="2">Under process</option>
                            </select>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            {{-- </div> --}}

        </div>

    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->
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
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
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
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
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

    <div class="formaddcompany" id="formaddcompany">

        <div class="d-flex justify-content-between align-items-center mb-3 p-4">
            <h5 class="mb-0">Add company</h5>
            <div>
                <div>
                    <p class="mb-0 customizefields">customize fields</p>
                </div>
            </div>

            <div onclick="closeme()">
                <svg xmlns="http://www.w3.org/2000/svg" class="crosss"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                </svg>
            </div>
        </div>

        <div class="basicinfo">
            <p class="mb-0"> BASIC INFOMATION</p>

        </div>

        <div class="px-3 forminputs">
            <div class="mb-2">
                <label for="name" class="mb-2">name</label>
                <br>
                <input type="text" name="" id="">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">website</label>
                <br>
                <input type="text" name="" id="">
            </div>
            <div class="mb-2">
                <label for="" class="mb-2">phone </label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">sales owner</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">industry type</label>
                <br>
                <input type="text" name="" id="">
            </div>

            <div class="mb-2">
                <label for="" class="mb-2">business type</label>
                <br>
                <input type="text" name="" id="">
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

    <script>
        function closeme() {
            document.getElementById("formaddcompany").style.display = "none"
        }

        function openme() {
            document.getElementById("formaddcompany").style.display = "block"
        }



        function tabon(e) {
            for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
                document.getElementsByClassName("tabb")[index].classList.remove("tabmy")

            }

            e.classList.add("tabmy")
        }


        function updateProjectStatus(status) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/updateprojectstatus",
                type: 'POST',
                data: {
                    'project_id': {{ $rfqDetails->id }},
                    'status': status
                },
                success: function(response) {
                    if (response.status == true) {
                        location.reload();
                    }
                },
                error: function(response) {
                    console.log('Error:', response.message);
                    $('.alertmsg').css('display', 'block');
                }
            });
        }
    </script>

@endsection
