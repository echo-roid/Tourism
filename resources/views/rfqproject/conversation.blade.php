@extends('layouts.app')

@section('title',"Dashboard")

<style>
 

  .wrappercontainer {
      display: flex;
      gap: 20px;
      width: 1200px;
      background-color: white;
      overflow: auto;
      width: 100%;
      padding: 20px 10px;
     
  }

  /* Shared Styles */
  .section {
      background-color: #f5f5f5;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
  }

  h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #00838f;
  }

  .wrappercontainer .left-section {
      width: 20%;
  }

  .wrappercontainer .right-section {
      width: 80%;
  }

  /* Left Section (Conversation Layout) */
  .conversation-wrappercontainer {
      width: 100%;
      background-color: white;
      border-radius: 20px;
      height: 600px;
      overflow: auto;
    
  }
  

  .conversation-wrappercontainer::-webkit-scrollbar {
 display: none;
}



  .conversation-wrappercontainer .header {
      font-weight: bold;
      font-size: 22px;
      margin-bottom: 15px;
      color: #00796b;
  }

  .assigned {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
  }

  .assigned-to {
      color: #fbc02d;
  }

  .conversations {
      font-size: 14px;
      color: #607d8b;
      margin-bottom: 15px;
  }

  .conversation {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      font-size: 11px;
      justify-content: space-between;
  }

  .conversation img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      border: 2px solid #009688;
  }

  .conversation-details {
      flex-grow: 1;
  }

  .name {
      font-weight: bold;
      color: #00796b;
  }

  .type {
      font-size: 12px;
      color: gray;
  }

  .time {
      font-size: 12px;
      color: #009688;
  }

  .status-dot {
      height: 10px;
      width: 10px;
      background-color: #fbc02d;
      border-radius: 50%;
      display: inline-block;
      margin-left: 5px;
  }

  /* Right Section (Customer Call UI and Profile Tabs) */
  .header {
      display: flex;
      align-items: center;
      border-bottom: 2px solid #b2dfdb;
      padding-bottom: 10px;
      margin-bottom: 20px;
  }

  .header img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 15px;
      border: 2px solid #009688;
  }

  .header .details h1 {
      font-size: 24px;
      margin-bottom: 5px;
      color: #004d40;
  }

  .header .details span {
      font-size: 14px;
      color: #757575;
  }

  .header .call-status {
      text-align: right;
  }

  .header .call-status span {
      font-size: 12px;
      color: red;
  }

  .call-actions {
      display: flex;
      gap: 20px;
      align-items: center;
      margin-bottom: 20px;
  }

  .call-actions button {
      padding: 10px 15px;
      font-size: 14px;
      border: 2px solid #004d40;
      background-color: white;
      color: #004d40;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }

  .call-actions button:hover {
      background-color: #004d40;
      color: white;
  }

  .call-actions .end-call {
      background-color: #d32f2f;
      color: white;
      border: none;
  }

  .tabs {
      display: flex;
      border-bottom: 2px solid #b2dfdb;
  }

  .tabs button {
      padding: 12px 20px;
      font-size: 14px;
      cursor: pointer;
      background-color: white;
      border: none;
      color: #00796b;
      border-bottom: 3px solid transparent;
      transition: border-color 0.3s ease;
  }

  .tabs button:hover {
      background-color: #f5f5f5;
  }

  .tabs .active {
      border-bottom: 3px solid #00796b;
      font-weight: bold;
  }

  .profile-details {
      margin-bottom: 10px;
  }

  .profile-details span {
      display: block;
      font-size: 14px;
      color: #004d40;
      margin-top: 10px;
  }

  .order-details {
      display: flex;
      align-items: center;
  }

  .order-actions {
      margin-top: 10px;
      display: flex;
      gap: 10px;
      margin-left: 10px;
  }

  .order-details img {
      width: 100px;
      margin-right: 10px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  }

  .order-actions button {
      margin-right: 10px;
      padding: 10px;
      font-size: 14px;
      border-radius: 10px;
      border: 2px solid #009688;
      color: #004d40;
      transition: all 0.3s ease;
  }

  .order-actions button:hover {
      background-color: #004d40;
      color: white;
  }

  /* Additional Profile & Order Section */
  .profile-orders {
      display: flex;
      justify-content: space-between;
  }

  .customer-profile {
      background-color: #fafafa;
      border: 1px solid #eaeaea;
      padding: 20px;
      border-radius: 8px;
      width:35%;
      margin-top: 20px;
  }

  .latest-orders {
      background-color: #fafafa;
      border: 1px solid #eaeaea;
      padding: 20px;
      border-radius: 8px;
      width: 60%;
      margin-top: 20px;
  }

  .customer-profile h3,
  .latest-orders h3 {
      font-size: 18px;
      margin-bottom: 10px;
      font-weight: bold;
  }

  .customer-profile .details,
  .latest-orders .details {
      font-size: 10px;
      line-height: 1.8;
  }

  .details span {
      display: block;
  }

  .order-item {
      display: flex;
      align-items: center;
      margin-top: 15px;
  }

  .order-item img {
      width: 100px;
      margin-right: 20px;
      border-radius: 5px;
  }

  .order-actions button {
      font-size: 12px;
      padding: 8px 15px;
  }


  .table-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            background-color: #f1f1f1;
        }

        .table-header select,
        .table-header input {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .table-header input {
            width: 200px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #f9f9f9;
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }

        tbody tr {
            border-bottom: 1px solid #eee;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody td {
            padding: 12px;
        }

        .icon {
            margin-right: 8px;
        }

        .incoming {
            color: green;
        }

        .outgoing {
            color: blue;
        }

        .cancelled {
            color: red;
        }

        .search-icon {
            margin-left: -25px;
            cursor: pointer;
        }
  
  </style>
@section('content')

    <div class="pt-4 px-4">

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

            <div class="memebrs p-0 d-flex align-items-center">
                <div class=" d-flex align-items-center p-1">
                    <img src="{{asset('/public/assets/deals.png')}}" width="10" alt="">
                    <p class="mb-0 ms-2"  onclick="openme()"> Add Contract</p>

                </div>
                <div class="border-start p-1" style="height: 100%;">
                    <img src="{{asset('/public/assets/downarrow.png')}}" width="8" alt="">
                </div>
            </div>

        </div>
        <div class="row">

            @include('rfqproject.rfqleftsidebar')

            <div class="col-md-10 px-0  rigthbarsection">
               <div class="wrappercontainer">
                                      <!-- Left Section (Conversation Layout) -->
                                      <div class="left-section">
                                          <div class="conversation-wrappercontainer">
                                              <div class="header">Conversation</div>
                                              <div class="assigned">
                                                  <span>Assigned to you</span>
                                                  <span>Inbox</span>
                                              </div>
                                              <div class="conversations">6 conversations</div>
                                              <div>
                                                <div>
                                                  <h6 class="colorcc" >Chat</h6>
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Voice">
                                                      <div class="conversation-details">
                                                          <div class="name pointercursor" onclick="tabWorking('chat')">Annette Black</div>
                                                          <div class="type">+1 814-458-3724</div>
                                                      </div>
                                                      <div class="time">10:50 AM</div>
                                                  </div>
                                                </div>
                                                 
                                                <div>
                                                  <h6 class="colorcc ">SMS</h6>
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Chat">
                                                      <div class="conversation-details">
                                                          <div class="name pointercursor" onclick="tabWorking('sms')">Jerome Bell</div>
                                                          <div class="type">Hey there! I'm having trouble...</div>
                                                      </div>
                                                      <div class="time">06:35 AM</div>
                                                  </div>
                                  
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Chat">
                                                      <div class="conversation-details">
                                                          <div class="name pointercursor">Kathryn Murphy</div>
                                                          <div class="type">Could you help me with...</div>
                                                      </div>
                                                      <div class="time">Yesterday</div>
                                                  </div>
                                                </div>
  
                                                <div>
                                                  <h6 class="colorcc" >Email</h6>
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Chat">
                                                      <div class="conversation-details">
                                                          <div class="name pointercursor"><a href="/mail.html">Jerome Bell</a></div>
                                                          <div class="type">Hey there! I'm having trouble...</div>
                                                      </div>
                                                      <div class="time">06:35 AM</div>
                                                  </div>
                                  
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Chat">
                                                      <div class="conversation-details">
                                                          <div class="name">Kathryn Murphy</div>
                                                          <div class="type">Could you help me with...</div>
                                                      </div>
                                                      <div class="time">Yesterday</div>
                                                  </div>
                                                </div>

                                                <div>
                                                  <h6 class="colorcc" >Call</h6>
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Chat">
                                                      <div class="conversation-details">
                                                          <div class="name pointercursor" onclick="tabWorking('call')">Jerome Bell</div>
                                                          <div class="type">Hey there! I'm having trouble...</div>
                                                      </div>
                                                      <div class="time">06:35 AM</div>
                                                  </div>
                                  
                                                  <div class="conversation">
                                                      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Chat">
                                                      <div class="conversation-details">
                                                          <div class="name">Kathryn Murphy</div>
                                                          <div class="type">Could you help me with...</div>
                                                      </div>
                                                      <div class="time">Yesterday</div>
                                                  </div>
                                                </div>
                                              </div>
                                             
                                             
                                          </div>
                                      </div>
                              
                                      <!-- Right Section (Customer Call UI and Profile Tabs) -->
                                      <div class="right-section">
                                          <!-- Call Header -->
                                          <div class="header">
                                              <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Customer Profile">
                                              <div class="details">
                                                  <h1>Annette Black</h1>
                                                  <span>Last conversation: 2 days ago</span>
                                              </div>
                                              <div class="call-status">
                                                  <span>Call in progress...</span>
                                              </div>
                                          </div>
                              
                                          <!-- Call Actions -->
                                          <div class="call-actions">
                                              <button>Mute</button>
                                              <button>Hold</button>
                                              <button class="end-call">End Call</button>
                                          </div>
                              
                                          <!-- Tabs for Profile Information -->
                                          <div class="tabs">
                                              <!-- <button class="active">Profile</button> -->
                                              <button onclick="tabWorking('history')">History</button>
                                              <button>Notes</button>
                                          </div>
                                          <div class=" commonpro " id="chat">
                                            <div class="chat-container">
                                              <!-- Message 1 -->
                                              <div class="message commonpro">
                                                  <div class="text">
                                                      Ap ko kl dekha deta hu
                                                      <div class="time">12:07 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 2 -->
                                              <div class="message-right message">
                                                  <div class="text">
                                                      Ok
                                                      <div class="time">12:08 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 3 -->
                                              <div class="message">
                                                  <div class="text">
                                                      sir 12 baje meet kar sakte hai
                                                      <div class="time">10:58 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 4 -->
                                              <div class="message-right message">
                                                  <div class="text">
                                                      ok
                                                      <div class="time">11:00 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Google Meet Link -->
                                              <div class="message commonpro d-none">
                                                  <div class="text">
                                                      <a class="link" href="https://meet.google.com/qtm-zhxp-gyi" target="_blank">
                                                          meet.google.com <br>
                                                          https://meet.google.com/qtm-zhxp-gyi
                                                      </a>
                                                      <div class="time">11:51 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 5 -->
                                              <div class="message">
                                                  <div class="text">
                                                      join sir
                                                      <div class="time">11:51 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Liquorroad Link -->
                                              <div class="message">
                                                  <div class="text">
                                                      <a class="link" href="https://demo.liquorroad.in/index.html" target="_blank">
                                                          demo.liquorroad.in <br>
                                                          https://demo.liquorroad.in/index.html
                                                      </a>
                                                      <div class="time">12:15 pm</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 6 -->
                                              <div class="message-right message">
                                                  <div class="text">
                                                      Give me 2 mints
                                                      <div class="time">11:54 am</div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          </div>

                                          <div class="sms commonpro " id="sms">
                                            <div class="chat-container bg-primary">
                                              <!-- Message 1 -->
                                              <div class="message">
                                                  <div class="text">
                                                      Ap ko kl dekha deta hu
                                                      <div class="time">12:07 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 2 -->
                                              <div class="message-right message">
                                                  <div class="text">
                                                      Ok
                                                      <div class="time">12:08 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 3 -->
                                              <div class="message">
                                                  <div class="text">
                                                      sir 12 baje meet kar sakte hai
                                                      <div class="time">10:58 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 4 -->
                                              <div class="message-right message">
                                                  <div class="text">
                                                      ok
                                                      <div class="time">11:00 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Google Meet Link -->
                                              <div class="message">
                                                  <div class="text">
                                                      <a class="link" href="https://meet.google.com/qtm-zhxp-gyi" target="_blank">
                                                          meet.google.com <br>
                                                          https://meet.google.com/qtm-zhxp-gyi
                                                      </a>
                                                      <div class="time">11:51 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 5 -->
                                              <div class="message">
                                                  <div class="text">
                                                      join sir
                                                      <div class="time">11:51 am</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Liquorroad Link -->
                                              <div class="message">
                                                  <div class="text">
                                                      <a class="link" href="https://demo.liquorroad.in/index.html" target="_blank">
                                                          demo.liquorroad.in <br>
                                                         
                                                      </a>
                                                      <div class="time">12:15 pm</div>
                                                  </div>
                                              </div>
                                          
                                              <!-- Message 6 -->
                                              <div class="message-right message">
                                                  <div class="text">
                                                      Give me 2 mints
                                                      <div class="time">11:54 am</div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          </div>
                                          <!-- Profile Details and Order Section -->
                                           <div class="commonpro activeprofiles">
                                            <div class="profile-orders  ">

                                              <div class="customer-profile">
                                                  <h3>Customer Profile</h3>
                                                  <div class="details">
                                                      <span>Email: annette.black@example.com</span>
                                                      <span>Phone: +1 814-458-3724</span>
                                                      <span>Location: New York, USA</span>
                                                  </div>
                                              </div>
                              
                                          
                                              <div class="latest-orders">
                                                  <h3>Latest Orders</h3>
                                                  <div class="order-item">
                                                      <img src="https://via.placeholder.com/100" alt="Product">
                                                      <div class="details">
                                                          <span>Order #123456</span>
                                                          <span>Placed on: 2024-09-21</span>
                                                          <span>Total: $199.99</span>
                                                      </div>
                                                      <div class="order-actions">
                                                          <button>View</button>
                                                          <button>Cancel</button>
                                                      </div>
                                                  </div>
                              
                                                  <div class="order-item">
                                                      <img src="https://via.placeholder.com/100" alt="Product">
                                                      <div class="details">
                                                          <span>Order #654321</span>
                                                          <span>Placed on: 2024-09-20</span>
                                                          <span>Total: $299.99</span>
                                                      </div>
                                                      <div class="order-actions">
                                                          <button>View</button>
                                                          <button>Cancel</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                           </div>
                                       

                                              <div class="commonpro" id="call">
                                               
                                          
                                              <table class="table">
                                                  <thead>
                                                      <tr>
                                                          <th>Name</th>
                                                          <th>Phone Number</th>
                                                          <th>Type</th>
                                                          <th>Duration</th>
                                                          <th>Date</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td><img class="icon" src="https://img.icons8.com/color/48/000000/phone.png" alt="outgoing"/> H. K. S.</td>
                                                          <td>415-356-2000</td>
                                                          <td class="outgoing">Outgoing</td>
                                                          <td>01:24:03</td>
                                                          <td>2022-02-06 15:37:28</td>
                                                      </tr>
                                                      <tr>
                                                          <td><img class="icon" src="https://img.icons8.com/color/48/000000/end-call.png" alt="cancelled"/> David</td>
                                                          <td>888-276-7202</td>
                                                          <td class="cancelled">Cancelled</td>
                                                          <td>00:00:00</td>
                                                          <td>2022-02-06 15:36:12</td>
                                                      </tr>
                                                      <tr>
                                                          <td><img class="icon" src="https://img.icons8.com/color/48/000000/phone.png" alt="outgoing"/> David</td>
                                                          </tr>
                                                        </tbody>
                                          
                                          
                                          
                                                        </table>
                                          
                                          
                                              </div>

                                              <div class="table-container commonpro" id="history">
                                                <div class="table-header">
                                                    <select>
                                                        <option value="all">All</option>
                                                        <option value="incoming">Incoming</option>
                                                        <option value="outgoing">Outgoing</option>
                                                        <option value="cancelled">Cancelled</option>
                                                    </select>
                                                    <div>
                                                        <input type="text" placeholder="Search" />
                                                        <i class="fas fa-search search-icon"></i>
                                                    </div>
                                                </div>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Phone Number</th>
                                                            <th>Type</th>
                                                            <th>Duration</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-phone-alt outgoing icon"></i> H. K. S...</td>
                                                            <td>415-356-2000</td>
                                                            <td>Outgoing</td>
                                                            <td>01:24:03</td>
                                                            <td>2022-02-06 15:37:28</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone-slash cancelled icon"></i> David ...</td>
                                                            <td>888-276-7202</td>
                                                            <td>Cancelled</td>
                                                            <td>00:00:00</td>
                                                            <td>2022-02-06 15:36:12</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone-alt outgoing icon"></i> David ...</td>
                                                            <td>888-276-7202</td>
                                                            <td>Outgoing</td>
                                                            <td>00:05:10</td>
                                                            <td>2022-02-06 15:25:04</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone incoming icon"></i> H. K. S...</td>
                                                            <td>415-356-2000</td>
                                                            <td>Incoming</td>
                                                            <td>00:03:51</td>
                                                            <td>2022-02-06 09:06:50</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone incoming icon"></i> H. K. S...</td>
                                                            <td>415-356-2000</td>
                                                            <td>Incoming</td>
                                                            <td>00:28:04</td>
                                                            <td>2022-02-05 19:24:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone-alt outgoing icon"></i> David ...</td>
                                                            <td>888-276-7202</td>
                                                            <td>Outgoing</td>
                                                            <td>00:10:00</td>
                                                            <td>2022-02-05 15:36:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone-slash cancelled icon"></i> David ...</td>
                                                            <td>888-276-7202</td>
                                                            <td>Cancelled</td>
                                                            <td>00:05:00</td>
                                                            <td>2022-02-05 12:23:02</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                         


                                         
                                      </div>
                                  </div>
                              
                                   
                                   
                                    
                                </div>
            </div>
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
    
    
  
    function tabWorking(val) {
    console.log(val)
    // Get all elements with the class "commonpro"
    let elements = document.getElementsByClassName("commonpro");

    // Loop through each element
    for (let index = 0; index < elements.length; index++) {
        // Remove the 'activeprofiles' class and add 'd-none' to hide all
        elements[index].classList.remove("activeprofiles");
       
    }

    // Add 'activeprofiles' and remove 'd-none' to the selected element (based on index 'val')
   document.getElementById(`${val}`).classList.add("activeprofiles");
    
}
</script>

@endsection