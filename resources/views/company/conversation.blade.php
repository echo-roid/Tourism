@extends('layouts.app')

@section('title',"Dashboard")

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
            
        </div>
        <div class="row">
          @include('company.leftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">
				<div class="bg-white p-3">
					<div class="d-flex justify-content-between align-items-center">
						<h6 class="mb-0"> Conversations</h6>
					</div>
					<div class="mt-5">
						<table >
							<tr class="">
								<th class="font12" style="width: 10%"><p class="mb-3 border-bottom pb-3">Name</p></th>
								<th class="font12" style="width: 10%"><p class="mb-3 border-bottom pb-3">Title</p></th>
								<th class="font12" style="width: 20%"><p class="mb-3 border-bottom pb-3">Description</p></th>
								<th class="font12" style="width: 10%"><p class="mb-3 border-bottom pb-3">PERMISSIONS</p></th>
								<th class="font12" style="width: 10%"><p class="mb-3 border-bottom pb-3">UPDATED AT</p></th>
							</tr>
							@foreach ($conversation as $conv)
							<tr>
								<td class="font12">Mukesh{{$conv->created_by}}</td>
								<td class="font12">{{Str::limit($conv->title, 20)}}</td>
								<td class="font12">{{Str::limit($conv->description, 100)}}</td>
								<td class="font12 colorblue">Can view, edit, delete <img src="{{asset('/public/assets/secttinsengle.png')}}" class="mb-1 ms-1 " width="10" alt=""> </td>
								<td class="font12">{{$conv->updated_at}}</td>
							</tr>
							@endforeach
						</table>
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
@endsection