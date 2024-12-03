@extends('layouts.app')

<title>Form Builder</title>

@section('content')

    <style>

    

        /* Sidebar styling */
        .sidebar {
            width: 300px;
            background-color: #2e3a47;
            height: 100vh;
            position: fixed;
            color: white;
            overflow-y: auto;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 20px;
            background-color: #1e272e;
            font-size: 18px;
            font-weight: 500;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #404b57;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li:hover {
            background-color: #3d4855;
        }

        .sidebar ul li i {
            font-size: 20px;
            margin-right: 15px;
        }

        .sidebar ul li span {
            font-size: 16px;
        }

        /* Tabbed section header */
        .sidebar .tabs {
            display: flex;
            justify-content: space-around;
            background-color: #242f38;
            padding: 10px 0;
            border-bottom: 1px solid #404b57;
        }

        .sidebar .tabs div {
            padding: 5px 10px;
            cursor: pointer;
            color: white;
        }

        .sidebar .tabs div.active {
            border-bottom: 3px solid orange;
        }

        .search-bar {
            padding: 15px;
            background-color: #1e272e;
            display: flex;
            justify-content: center;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        .payments ul li {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #404b57;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payments ul li img {
            width: 24px;
            margin-right: 15px;
        }

        .payments ul li span {
            font-size: 16px;
        }
        .form_heading{
            width: 100%;
            border: none;
            outline: none;
            border-bottom: 1px solid black;
        }

        .spanHead{
            width: 100%;
            border: none;
            outline: none;
            border-bottom: 1px solid black;
            
        }
        .readonly{
            border: none;
        }
    </style>
 <?php 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captcha =  substr(str_shuffle(str_repeat($characters, ceil(5 / strlen($characters)))), 0, 5);
 ?>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            Form Elements
        </div>

        <!-- Tabbed Navigation -->
        <div class="tabs">
            <div class="tab active" onclick="tabsme(0,this)">Basic</div>
            <div class="tab" onclick="tabsme(1,this)">Payments</div>
            <div class="tab" onclick="tabsme(2,this)">Widgets</div>
        </div>

        <!-- Search bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>

        <!-- List of Form Elements -->
         <div class="basicform boxtabsme activemetab" id="bm0">
          <ul>
            <li onclick="addFormElement('heading')"><i class="fa fa-heading"></i> <span>Heading</span></li>
            <li onclick="addFormElement('fullName')"><i class="fa fa-user"></i> <span>Full Name</span></li>
            <li onclick="addFormElement('email')"><i class="fa fa-envelope"></i> <span>Email</span></li>
            <li onclick="addFormElement('address')"><i class="fa fa-map-marker"></i> <span>Address</span></li>
            <li onclick="addFormElement('phone')"><i class="fa fa-phone"></i> <span>Phone</span></li>
            <li onclick="addFormElement('paragraph')"><i class="fa-solid fa-paragraph"></i> <span>Paragraph</span></li>
            <li onclick="addFormElement('dropdown')"><i class="fa-solid fa-square-caret-down"></i> <span>DropDown</span></li>
            <li onclick="addFormElement('image')"><i class="fa-solid fa-image"></i> <span>Image</span></li>
            <li onclick="addFormElement('fileupload')"><i class="fa-solid fa-file-arrow-up"></i> <span>File Uploader</span></li>
            <li onclick="addFormElement('time')"><i class="fa-regular fa-clock"></i> <span>Time</span></li>
            <li onclick="addFormElement('captcha')"><i class="fa fa-calendar"></i> <span>Captcha</span></li>  
            <li onclick="addFormElement('input')"><i class="fa-solid fa-keyboard"></i> <span>Input</span></li> 
            <li onclick="addFormElement('number')"><i class="fa-solid fa-arrow-up-1-9"></i> <span>Number</span></li>  
        </ul>
         </div>
       

        <div class="payments boxtabsme"  id="bm1">
          <ul>
              <li><img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Square_Inc._logo.svg" alt="Square"> <span>Square</span></li>
              <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal Business"> <span>PayPal Business</span></li>
              <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal Personal"> <span>PayPal Personal</span></li>
              <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal Invoicing"> <span>PayPal Invoicing</span></li>
              <li><img src="https://upload.wikimedia.org/wikipedia/commons/f/f7/AuthorizeNet_logo.png" alt="Authorize.Net"> <span>Authorize.Net</span></li>
              <li><img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Stripe_Logo%2C_revised_2016.svg" alt="Stripe"> <span>Stripe</span></li>
          </ul>
      </div>

      <div class="basicform boxtabsme " id="bm2">
        <ul>
          <li><i class="fa-solid fa-calculator"></i> <span>Form Calculation</span></li>
          <li><i class="fa-solid fa-signature"></i> <span>Signature</span></li>
          <li><i class="fa-brands fa-d-and-d"></i> <span>Terms & Conditions</span></li>
          <li><i class="fa-solid fa-camera-rotate"></i> <span>Take Photo</span></li>
          
      </ul>
       </div>
    </div>



    <section class="fornsection py-5">
        <div class="container px-5">
            <div class="text-center mb-5">
                <img src="https://admin.liquorroad.in/public/assets/formbanner.png" class="bannerform" alt="">
            </div>

            <div class=" bg-white bannerform mx-auto">
                <div class="p-4 border-bottom">
                    <h3 class="">
                        <input class="form_heading" type="text" value="MDRT Day Training Manila - August 2024">
                    </h3 class="mb-5">
                </div>
                
                <form action="">
                    <div class="p-4 dunamic_add_fields">
                        
                    </div>

                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                </form>
            </div>
        </div>
    </section>

   

 <script>
    function tabsme(id,e){
      let a = document.getElementsByClassName("boxtabsme")
      let b = document.getElementsByClassName("tab")
        for (let index = 0; index < a.length; index++) {

            a[index].classList.remove("activemetab")
            b[index].classList.remove("active")

        }

        document.getElementById(`bm${id}`).classList.add("activemetab")
        e.classList.add("active")
    }


    function addFormElement(type){
        console.log(type);
        const now = new Date();
        let dynamic_slug = now.getMinutes() +'_'+ now.getSeconds();
        let append = '';
        // console.log(now.getMinutes());
        // console.log(now.getSeconds());
        // console.log(dynamic_slug);
        if(type == 'input'){
            append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_input_'+dynamic_slug+'"><div class="form-row"><div class="form-group "><label class="form-label"><input type="text" class="spanHead input_label_'+dynamic_slug+'" value="" name="input_label_'+dynamic_slug+'"></label><input type="text" class="form-control w-50" name="input_'+dynamic_slug+'" class="input_'+dynamic_slug+'"></div></div></div>';
        }
        else if(type == 'number'){
            append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_number_'+dynamic_slug+'"><div class="form-row"><div class="form-group "><label class="form-label"><input type="text" class="spanHead number_label_'+dynamic_slug+'" value="" name="number_label_'+dynamic_slug+'"></label><input type="number" class="form-control w-50" name="number_'+dynamic_slug+'" class="number_'+dynamic_slug+'"></div></div></div>';
        }
        else if(type == 'time'){

            append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_date_'+dynamic_slug+'"><div class="form-row"><div class="form-group "><label class="form-label"><input type="text" class="spanHead date_label_'+dynamic_slug+'" value="" name="date_label_'+dynamic_slug+'"></label><input type="date" class="form-control w-50" name="date_'+dynamic_slug+'" class="date_'+dynamic_slug+'"></div></div></div>';
            
        }
        else if(type == 'fullName'){   
            append = '<div class="d-flex p-3 mb-3 border justify-content-center align-items-center div_fullname_'+dynamic_slug+'"><div class="form-group pe-3 w-50"><label><input class="spanHead readonly firstname_label_'+dynamic_slug+'" type="text" readonly="true" name="firstName_label_'+dynamic_slug+'" value="First Name"/></label><input type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstName_'+dynamic_slug+'"></div><div class="form-group w-50"><label><input class="spanHead readonly lastname_label_'+dynamic_slug+'" type="text" readonly="true" name="lastname_label_'+dynamic_slug+'" value="Last Name"/></label><input type="text" class="form-control mt-2" placeholder="Enter Last Name" name="lastname_'+dynamic_slug+'"></div></div>';
        }
        else if(type == 'email'){
            append = '<div class="p-3 border justify-content-center align-items-center mb-3 div_email_'+dynamic_slug+'"><div class="form-group"><label class="form-label"><input type="text" class="spanHead email_label_'+dynamic_slug+'" name="email_label_'+dynamic_slug+'" value="Email address"></label><input type="email" class="form-control mt-2"  aria-describedby="emailHelp" placeholder="Enter email" name="email_'+dynamic_slug+'" class="email_'+dynamic_slug+'"></div></div>';
        }
        else if(type == 'heading'){
            append = '<div class="justify-content-center align-items-center mb-3 div_heading_'+dynamic_slug+'"><h4 class="mb-3"><input type="text" class="spanHead heading_label_'+dynamic_slug+'" name="heading_label_'+dynamic_slug+'" value="" placeholder="Heading...."></h4></div>';
        }
        else if(type == "address"){
           append = '<div class="p-3 border mb-3 div_addressform_'+dynamic_slug+'"><h4 class="mb-4">Address Form</h4><div class="d-flex align-items-center justify-content-center"><div class="form-group w-50 pe-2"><label><input class="spanHead readonly street_label_'+dynamic_slug+'" type="text" readonly="true" name="street_label_'+dynamic_slug+'" value="Street Address"/></label><input type="text" class="form-control mt-2 street_'+dynamic_slug+'" placeholder="1234 Main St" name="street_'+dynamic_slug+'"></div><div class="form-group w-50"><label><input class="spanHead readonly city_label_'+dynamic_slug+'" type="text" readonly="true" name="city_label_'+dynamic_slug+'" value="City"/></label><input type="text" class="form-control mt-2 city_'+dynamic_slug+'" placeholder="City" name="city_'+dynamic_slug+'"></div></div><div class="form-row mt-4"><div class="d-flex align-items justify-content-center"><div class="form-group w-50 pe-2"><label><input class="spanHead readonly state_label_'+dynamic_slug+'" type="text" readonly="true" name="zipcode_label_'+dynamic_slug+'" value="State"/></label><select id="inputState" class="form-control mt-2" name="state_'+dynamic_slug+'"><option value="">Choose...</option><option value="1">California</option><option value="2">New York</option><option value="3">Texas</option></select></div><div class="form-group w-50"><label><input class="spanHead readonly zipcode_label_'+dynamic_slug+'" type="text" readonly="true" name="zipcode_label_'+dynamic_slug+'" value="Zip Code"/></label><input type="text" class="form-control mt-2 zipcode_'+dynamic_slug+'" placeholder="Zip Code" name="zipcode_'+dynamic_slug+'"></div></div></div></div>';
        }
        else if(type == 'phone'){
            append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_phonenumber_'+dynamic_slug+'"><div class="form-row"><div class="form-group "><label for="inputPhone"><input type="text" class="spanHead readonly phonenumber_label_'+dynamic_slug+'" value="Phone Number" name="number_label_'+dynamic_slug+'"></label><input type="tel" class="form-control mt-2 phonenumber_'+dynamic_slug+'" name="phonenumber_'+dynamic_slug+'" placeholder="(123) 456-7890"></div></div></div>';
        }
        else if(type == 'paragraph'){
            append = '<div class="mb-5 div_paragraph_'+dynamic_slug+'"><p class="mb-3"><textarea class="form-control " rows="3" name="paragraph_'+dynamic_slug+'"></textarea></p></div>';
        }
        else if(type == 'dropdown'){
            append = '<div class="form-row div_dropdown_'+dynamic_slug+'"><div class="form-group w-100"><label><input class="spanHead dropdown_span_'+dynamic_slug+'" type="text" name="dropdown_span_'+dynamic_slug+'" value="" placeholder="Dropdown heading.."></label></div><div class="d-flex p-3 mb-3 border justify-content-center align-items-center div_fullname_20_28"><div class="form-group pe-3 w-50"><label><input class="spanHead readonly option_label_'+dynamic_slug+'" type="text" readonly="true" name="option_label_'+dynamic_slug+'[]" value="Option"></label><input type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Enter option" name="option_'+dynamic_slug+'[]"></div><div class="form-group w-50"><label><input class="spanHead readonly option_label_'+dynamic_slug+'" type="text" readonly="true" name="option_label_'+dynamic_slug+'[]" value="Option"></label><input type="text" class="form-control mt-2" placeholder="Enter option" name="option_'+dynamic_slug+'[]"></div><div class="form-group pe-3 w-50"><label><input class="spanHead readonly option_label_'+dynamic_slug+'" type="text" readonly="true" name="option_label_'+dynamic_slug+'[]" value="Option"></label><input type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Enter option" name="option_'+dynamic_slug+'[]"></div><div class="form-group w-50"><label><input class="spanHead readonly option_label_'+dynamic_slug+'" type="text" readonly="true" name="option_label_'+dynamic_slug+'[]" value="Option"></label><input type="text" class="form-control mt-2" placeholder="Enter option" name="option_'+dynamic_slug+'[]"></div></div></div>';
        }
        else if(type == 'fileupload'){
            append = '<div class="mb-5 position-relative div_fileupload_'+dynamic_slug+'"><label for="" class="mb-3"><input type="text" class="spanHead fileupload_label_'+dynamic_slug+'" value="" name="fileupload_label_'+dynamic_slug+'"></label><img src="https://admin.liquorroad.in/public/assets/uploadform.png" class="w-100" alt=""><input type="file" class="uploadforminput" name="fileupload_'+dynamic_slug+'"></div>';
        }
        else if(type == 'captcha'){
            append =  '<div class="border p-3 div_captcha_'+dynamic_slug+'"><div class="form-row"><div class="form-group "><label for="" class="mb-3"><input type="text" class="spanHead readonly captcha_label_'+dynamic_slug+'" value="Captcha Verification" name="captcha_label_'+dynamic_slug+'" readonly="true"></label><input type="text" class="form-control mt-2" value="{{ $captcha }}" name="captcha_'+dynamic_slug+'"></div></div></div>';

        }

        $(".dunamic_add_fields").append(append);
        $("."+ type +"_label_" + dynamic_slug).focus();

    }


 </script>

</body>
@endsection
