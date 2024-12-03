@extends('layouts.app')

@section('title',"Dashboard")

<style>
    .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .folder-icon {
            width: 40px;
            height: 40px;
            background-color: #5ac8fa;
            border-radius: 4px;
        }

        .text-container {
            flex: 1;
            margin-left: 12px;
        }

        .text-container h3 {
            margin: 0;
            font-size: 16px;
        }

        .text-container span {
            font-size: 14px;
            color: gray;
        }

        .ab-icons {
            display: flex;
            align-items: center;
        }

        .ab-icons div {
            width: 24px;
            height: 24px;
            border-radius: 4px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        .ab-icons .icon-a {
            background-color: #a4c8ff;
        }

        .ab-icons .icon-b {
            background-color: #2854b8;
            margin-left: -6px;
        }

        .winputw{
            width: 100%;
            opacity: 0;
            position: absolute;
            height: 100%;
        }

</style>
@section('content')

    <div class="pt-2 px-4">
        <div class="d-flex justify-content-end  mediatabs mb-2">
            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/email.png')}}" width="10" alt="">
                <p class="mb-0 ms-2">Email</p>
                
            </div>
            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/call.png')}}" width="15" alt="">
                <p class="mb-0 ms-2"> call log</p>
                
            </div>
            <div class="memebrs p-0 d-flex align-items-center">
                <div class=" d-flex align-items-center p-1">
                    <img src="{{asset('/public/assets/sms.png')}}" width="15" alt="">
                    <p class="mb-0 ms-2"> SMS</p>
                    
                </div>
                <div class="border-start p-1 " style="height: 100%;">
                    <img src="{{asset('/public/assets/downarrow.png')}}" width="8" alt="">
                </div>
            </div>
            
            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/task.png')}}" width="10" alt="">
                <p class="mb-0 ms-2">Task</p>
                
            </div>
            <div class="memebrs d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <img src="{{asset('/public/assets/meeting.png')}}" width="10" alt="">
                <p class="mb-0 ms-2"> meeeting</p>
                
            </div>

            <div class="memebrs d-flex align-items-center">
                <img src="{{asset('/public/assets/salesAc.png')}}" width="10" alt="">
                <p class="mb-0 ms-2"> sales Activities</p>
                
            </div>
            <div class="memebrs p-0 d-flex align-items-center"> 
                <div class=" d-flex align-items-center p-1">
                    <img src="{{asset('/public/assets/deals.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2"> Add Deal</p>
                    
                </div>
                <div class="border-start p-1" style="height: 100%;">
                    <img src="{{asset('/public/assets/downarrow.png')}}" width="8" alt="">
                </div>
            </div>
            <button class="backblue px-3 py-2 ms-0 text-light addbutton position-relative">
                <input type="file" class="winputw" name="" id="">
               Add File
            </button>
        </div>
        
        <div class="row">
            @include('company.leftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">
                        
                <!-- <div class="d-flex centerting align-items-center justify-content-center flex-column">
                      <img src="./assets/fileuploader.png" width="100" alt="">
                      <p class="font13 colorcc mt-3">No files found.</p>
                      <button class="backblue px-3 py-2 ms-0 text-light addbutton">
                        add file
                      </button>
                </div> -->


                <div class="p-4">
                    <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="folder-icon"></div>
                                    <div class="text-container">
                                        <h3>Documents</h3>
                                        <span>24 Files</span>
                                    </div>
                                    <div class="ab-icons">
                                        <div class="icon-a">A</div>
                                        <div class="icon-b">B</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="folder-icon"></div>
                                    <div class="text-container">
                                        <h3>Documents</h3>
                                        <span>24 Files</span>
                                    </div>
                                    <div class="ab-icons">
                                        <div class="icon-a">A</div>
                                        <div class="icon-b">B</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="folder-icon"></div>
                                    <div class="text-container">
                                        <h3>Documents</h3>
                                        <span>24 Files</span>
                                    </div>
                                    <div class="ab-icons">
                                        <div class="icon-a">A</div>
                                        <div class="icon-b">B</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
              
@endsection

</html>



