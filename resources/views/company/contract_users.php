<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>


        <section class="sectionbackground p-4">
            <div>
                <div class="d-flex justify-content-end  mediatabs mb-2">
                    <div class="memebrs d-flex align-items-center">
                        <img src="./assets/email.png" width="10" alt="">
                        <p class="mb-0 ms-2">Email</p>
                       
                    </div>
                    <div class="memebrs d-flex align-items-center">
                        <img src="./assets/call.png" width="15" alt="">
                        <p class="mb-0 ms-2"> call log</p>
                       
                    </div>
                    <div class="memebrs p-0 d-flex align-items-center">
                        <div class=" d-flex align-items-center p-1">
                            <img src="./assets/sms.png" width="15" alt="">
                            <p class="mb-0 ms-2"> SMS</p>
                            
                        </div>
                        <div class="border-start p-1 " style="height: 100%;">
                            <img src="./assets/downarrow.png" width="8" alt="">
                        </div>
                    </div>
                   
                    <div class="memebrs d-flex align-items-center">
                        <img src="./assets/task.png" width="10" alt="">
                        <p class="mb-0 ms-2">Task</p>
                       
                    </div>
                    <div class="memebrs d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <img src="./assets/meeting.png" width="10" alt="">
                        <p class="mb-0 ms-2"> meeting</p>
                       
                    </div>

                    <div class="memebrs d-flex align-items-center">
                        <img src="./assets/salesAc.png" width="10" alt="">
                        <p class="mb-0 ms-2"> sales Activities</p>
                       
                    </div>
                    <div class="memebrs p-0 d-flex align-items-center"> 
                        <div class=" d-flex align-items-center p-1">
                            <img src="./assets/deals.png" width="10" alt="">
                            <p class="mb-0 ms-2"> Add Deal</p>
                            
                        </div>
                        <div class="border-start p-1" style="height: 100%;">
                            <img src="./assets/downarrow.png" width="8" alt="">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-2 p-2 border-end leftsideinnerbar">
                        <div class="d-flex align-items-center mb-3">
                            <img src="./assets/iconpro.png" width="60" height="60" class="circleredius" alt="">
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
                                        <img src="./assets/startgrop.png" class="ms-3 starticons" alt="">
                                    </div>
                                </div>

                                <img src="./assets/arroeblueright.png" width="20" alt="">
                                
                       </div>

                       <div class="d-flex align-items-center justify-content-between mt-3 mb-3 px-2">
                           <h6 class="mb-0 font12">Contact information</h6>
                           <img src="./assets/settingborder.png"  width="20" alt="">
                       </div>



                       <div>
                        <ul class="contactinfoul">
                            <li class=""><img src="./assets/grid.png" alt=""><a href="./overviewpage.html" class="text-dark">Overview</a></li>
                            <li class="activeinsideofleftbar"> <img src="./assets/contacticon.png" alt=""><a href="./contract.html" class="text-dark">Contact details</a></li>
                            <li><a href="./formview.html" class="text-dark"><img src="./assets/recent.png" alt=""> Conversations</a></li>
                            <li><img src="./assets/activity.png" alt=""><a href="./activities.html" class="text-dark">Activities</a></li>
                            <li><a href="/allfrom.html" class="text-dark"><img src="./assets/deals.png" alt="">Deals</a></li>
                            <li>
                                 <img src="./assets/freddy.png" alt="">
                                Friend Ai insights
                            </li>

                            <li>
                                <img src="./assets/activity.png" alt="">
                                <a href="./files.html" class="text-dark">Files</a>
                                
                            </li>
                        </ul>
                       </div>
                    </div>
                    <div class="col-md-10 px-0  rigthbarsection">
                        
                                <div class="bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Contract</h6>

                                        <div class="pb-2"  onclick="openme()">
                                            <button class="p-2 bg-white text-dark border addbutton addbutton2 d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="downlineaarow me-1"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                                </svg>
                                                Add company
                                            </button>
                                        </div>
                                    </div>


                                    <div  class="d-flex">
                                        <p class="mb-0 colorcc">Filter :</p>
                                        <div class="d-flex px-3 align-items-center">
                                            <p class="mb-0 colorblue pe-2">Products</p>
                                            <img src="./assets/dwonarrowcontract.png" width="10" alt="">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 colorblue pe-2">Deal stage</p>
                                            <img src="./assets/dwonarrowcontract.png" width="10" alt="">
                                        </div>
                                        
                                       
                                    </div>


                                    <div class="mt-5">

                                        <table class="Contract">
                                            <tr class="">
                                              <th class="font12 tablecontactteamTh"><p class="mb-3 border-bottom pb-3">DEAL NAME</p></th>
                                              <th class="font12 lowwid"><p class="mb-3 border-bottom pb-3">DEAL VALUE</p></th>
                                              <th class="font12 tablecontactteamTh"><p class="mb-3 border-bottom pb-3">DEAL STAGE</p></th>
                                              <th class="font12 tablecontactteamTh"><p class="mb-3 border-bottom pb-3">PRODUCTS</p></th>
                                              <th class="font12 tablecontactteamTh"><p class="mb-3 border-bottom pb-3">EXPECTED..</p></th>
                                            </tr>
                                            <tr>
                                              <td class="font12 tablecontactteamTh"><img src="./assets/gogreen.png" width="20" alt=""> GOA - 23 - 2...</td>
                                              <td class="font12 lowwid">700</td>
                                              <td class="font12 tablecontactteamTh colorblue">New</td>
                                              <td class="font12 tablecontactteamTh">Click to add</td>
                                              <td class="font12 tablecontactteamTh">Click to add</td>
                                            </tr>
                                          
                                          </table>
                                    </div>
                                   
                                    
                                </div>
                    </div>
                    
                </div>
               
            </div>
              
        </section>



        <div class="rightbar">
            <div class="mb-3 text-center mt-4">
                <a href="./index.html"><img src="./assets/sideorangeicon.png" alt="" class="orangeiconleft"></a>
            </div>
                <ul class="iconbar">
                        <li  class="activeliicon"> <a href="./second.html"> <img src="./assets/ficon1.png" alt=""></a></li>
                        <li><a href="./overviewpage.html"><img src="./assets/ficon2.png" alt=""></a></li>
                        <li><a href="./allfrom.html"> <img src="./assets/ficon3.png" alt=""></a></li>
                        <li><a href="./travelerslist.html"><img src="./assets/ficon4.png" alt=""></a></li>
                        <li><a href="./contract.html"><img src="./assets/ficon5.png" class="leftbaractive" alt=""></a></li>
                        <li><a href="./QcTeam.html"><img src="./assets/ficon6.png" alt=""></a></li>
                        <li><a href="./manage.html"><img src="./assets/ficonsection.png" alt=""></a></li>
                </ul>
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
      



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
   

    </script>



    <script>
        function closeme(){
   
    document.getElementById("formaddcompany").style.display ="none"
}

    </script>


<script>
    function openme(){

document.getElementById("formaddcompany").style.display ="block"
}



    function tabon(e){
        for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
            document.getElementsByClassName("tabb")[index].classList.remove("tabmy")
            
        }
        
        e.classList.add("tabmy")
    }
</script>





</body>

</html>



