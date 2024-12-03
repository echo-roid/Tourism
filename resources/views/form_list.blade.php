@extends('layouts.app')
<title>Form List</title>
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .table-container {
            width: 100%;
            /* margin: 20px auto 20px 69px; */
            border-collapse: collapse;
            /* box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); */
            background-color: white;
        }

        .table-container th,
        .table-container td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }

        .table-container th {
            background-color: #f1f1f1;
            color: #333;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 24px;
        }

        .search-filter {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            font-size: 16px;
        }

        .download-btn {
            padding: 10px;
            margin: 10px 0;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            float: right;
        }





        .stickyone {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
            /* box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); */
        }

        .stickyone li {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            background-color: white;
            font-size: 14px;
        }

        .stickyone li:first-child {
            background-color: #f1f1f1;
            font-weight: bold;
            border-bottom: 2px solid #ddd;
        }

        .stickyone li:last-child {
            border-bottom: none;
        }

        .maintablediv {
            margin: 1px auto 15px 20px;
            width: 100%;
        }

        .tablewrapper {
            width: 1230px;
        }

        


      
        /* The dropdowndop content (hidden by default) */
     
     

        

        /* Hover effect */
        
       
        .infotooltip {
            position: absolute;
            right: 0;
            top: 5px;
            color: green;
            display: none;
            width: 40%;
            text-align: right;
            padding-right: 20px;
        }
        

        .threedots:hover~.infotooltip{
                  display: block;

        }

        .infotooltip:hover{
                display: block;
        }



        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="overflow-x-hidden">

    <div class="ms-5 ps-4 mt-3">
        <h3>Form List</h3>
    </div>

    <div class="mt-4 ms-5 d-flex justify-content-between align-items-center ps-3">
        <div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="d-flex align-items-center">
            <button class="download-btn me-2 ms-2"><i class="fa-solid fa-eye"></i> <span
                class="">cutomize</span></button>
            <button class="download-btn me-2 ms-2"><i class="fa-solid fa-filter"></i> <span
                class="ms-1">Filter</span></button>
            <button class="download-btn me-2">Download All</button>

        </div>
    </div>


    <!-- <input type="text" class="search-filter" placeholder="Search..." /> -->

    <div class=" d-flex  maintablediv">
        {{-- <div>
            <ul class="stickyone">
                <li>UNIQUE ID</li>
                <li></li>
            </ul>
        </div> --}}
        <div class="overflow-auto  tablewrapper">
            <table class="table-container  tab">
                <thead>
                    <tr>
                        <th>Form Title</th>
                        <th>Status</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                        <tr>
                            <td>{{$form->form_title}}</td>
                            <td>{{ ($form->status === 0) ? 'Pending' : 'Live'}}</td>
                            <td>{{ $form->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <textarea name="" class="w-100" id=""></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</body> 
@endsection