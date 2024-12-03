@extends('layouts.app')

<title>Form Builder</title>

@section('content')
<style>
    .circle-rating {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .circle {
        width: 50px;
        height: 50px;
        border: 2px solid #c3c9d4;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        color: #5e6a80;
        margin: 0 10px;
    }

    .circle:hover {
        background-color: #e9edf5;
        cursor: pointer;
    }

    .star-rating {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .star {
        width: 30px;
        height: 30px;
        background-color: #e9edf5;
        clip-path: polygon(50% 0%,
                61% 35%,
                98% 35%,
                68% 57%,
                79% 91%,
                50% 70%,
                21% 91%,
                32% 57%,
                2% 35%,
                39% 35%);
        margin: 0 5px;
    }

    .star:hover,
    .star:hover~.star {
        background-color: #c3c9d4;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    th,
    td {
        padding: 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #e9edf5;
        font-weight: bold;
    }

    .row-header {
        background-color: #e9edf5;
        text-align: left;
    }

    .radio-cell {
        width: 50px;
    }

    .radio-cell input {
        margin: 0;
    }

    th:first-child {
        border-top-left-radius: 10px;
    }

    th:last-child {
        border-top-right-radius: 10px;
    }


    .fileimage {
        position: absolute;
        appearance: none;
        opacity: 0;
    }

    .captcha-container {
        display: flex;
        flex-direction: column;
        width: 300px;
    }

    .captcha {
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 5px;
        padding: 10px;
        background-color: #f0f0f0;
        text-align: center;
        margin-bottom: 10px;
        user-select: none;
    }

    .input-fieldd {
        margin-bottom: 15px;
    }

    .sbutton {
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        cursor: pointer;
    }

    .sbutton:hover {
        background-color: #218838;
    }

    /* Sidebar styling */
    .sidebar {
        width: 300px;
        background-color: #2e3a47;
        height: 100vh;
        position: fixed;
        color: white;
        overflow-y: auto;
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        /* padding-left: 40px; */
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

    .navbasr {
        display: flex;
        background: linear-gradient(to right, #fbb03b, #ff6a00);
        /* Gradient Background */
        padding: 10px;
        align-items: center;
        position: absolute;
        top: 0;
        right: 0;
        width: 76%;
    }

    .navbasr div {
        flex: 1;
        text-align: center;
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    .navbasr .preview {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
        margin-left: 10px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 2px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    .minput:checked+.slider {
        background-color: #ff9900;
    }

    .minput:checked+.slider:before {
        transform: translateX(26px);
    }

    /*  */

    /* Container for the form settings */
    .form-settings {
        width: 100%;
        max-width: 600px;
        background-color: #f8f9fc;
        border-radius: 8px;
        padding: 20px;
        font-family: 'Arial', sans-serif;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Form header */
    .form-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .settings-icon {
        width: 40px;
        height: 40px;
        margin-right: 15px;
    }

    .form-header h1 {
        font-size: 20px;
        margin: 0;
        color: #303545;
    }

    .form-header p {
        margin: 5px 0 0 0;
        color: #656b8b;
        font-size: 14px;
    }

    /* Form section titles */
    .form-section h2 {
        font-size: 18px;
        margin: 20px 0 5px;
        color: #303545;
    }

    .form-section label {
        display: block;
        font-size: 14px;
        color: #656b8b;
        margin-bottom: 8px;
    }

    .form-title {
        width: 100%;
        padding: 12px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 16px;
        margin-bottom: 20px;
    }

    /* Status box */
    .status-box {
        display: flex;
        align-items: center;
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 15px;
        transition: box-shadow 0.3s ease;
    }

    .status-box:hover {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .status-icon img {
        width: 30px;
        height: 30px;
        margin-right: 15px;
    }

    .status-text {
        flex: 1;
    }

    .status-title {
        font-size: 16px;
        color: #28a745;
        margin: 0;
    }

    .status-text p {
        margin: 5px 0 0;
        color: #656b8b;
        font-size: 14px;
    }

    .status-arrow {
        font-size: 18px;
        color: #ced4da;
    }



    /* General styling for the form container */
    .email-settings {
        width: 100%;
        max-width: 600px;
        background-color: #f8f9fc;
        padding: 20px;
        border-radius: 8px;
        font-family: 'Arial', sans-serif;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        display: none;
    }

    /* Header styling */
    .email-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .email-header .email-icon {
        width: 40px;
        height: 40px;
        margin-right: 15px;
    }

    .email-header h1 {
        font-size: 20px;
        color: #303545;
        margin: 0;
    }

    .email-header p {
        color: #656b8b;
        margin: 5px 0 0;
        font-size: 14px;
    }

    /* Email item styling */
    .email-item {
        display: flex;
        align-items: center;
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
        transition: box-shadow 0.3s ease;
    }

    .email-item:hover {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .email-icon-box {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }

    .email-icon-box img {
        width: 30px;
        height: 30px;
    }

    .email-details h2 {
        font-size: 16px;
        color: #303545;
        margin: 0;
    }

    .email-details p {
        font-size: 14px;
        color: #656b8b;
        margin: 5px 0 0;
    }

    /* Arrow box styling */
    .arrow-box {
        margin-left: auto;
        font-size: 18px;
        color: #ced4da;
    }

    .notification-email .email-icon-box {
        background-color: #ff6f3f;
    }

    .autoresponder-email .email-icon-box {
        background-color: #28a745;
    }

    .digest-email .email-icon-box {
        background-color: #845ef7;
    }


    .condition-settings {
        width: 100%;
        max-width: 600px;
        background-color: #f8f9fc;
        padding: 20px;
        border-radius: 8px;
        font-family: 'Arial', sans-serif;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        display: none;
    }

    /* Header styling */
    .condition-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .condition-header .condition-icon {
        width: 40px;
        height: 40px;
        margin-right: 15px;
    }

    .condition-header h1 {
        font-size: 20px;
        color: #303545;
        margin: 0;
    }

    .condition-header p {
        color: #656b8b;
        margin: 5px 0 0;
        font-size: 14px;
    }

    /* Condition item styling */
    .condition-item {
        display: flex;
        align-items: center;
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
        transition: box-shadow 0.3s ease;
    }

    .condition-item:hover {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .condition-icon-box {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }

    .condition-icon-box img {
        width: 30px;
        height: 30px;
    }

    .condition-details h2 {
        font-size: 16px;
        color: #303545;
        margin: 0;
    }

    .condition-details p {
        font-size: 14px;
        color: #656b8b;
        margin: 5px 0 0;
    }

    /* Arrow box styling */
    .arrow-box {
        margin-left: auto;
        font-size: 18px;
        color: #ced4da;
    }




    .sidebarforsetting {
        width: 250px;
        background-color: #2C3E50;
        padding: 20px;
        height: 100vh;
        color: white;
        width: 300px;
        background-color: #2e3a47;
        height: 100vh;
        position: fixed;
        color: white;
        overflow-y: auto;
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .menu-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .menu-item img {
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .menu-item .title {
        font-weight: bold;
        font-size: 16px;
    }

    .menu-item .description {
        font-size: 12px;
        color: #BDC3C7;
    }

    .menu-item.conditions {
        background-color: #34495E;
        padding: 10px;
        border-radius: 5px;
    }

    .menu-item.conditions .title,
    .menu-item.conditions .description {
        color: white;
    }

    .payments ul li span {
        font-size: 16px;
    }

    .form_heading {
        width: 100%;
        border: none;
        outline: none;
        border-bottom: 1px solid black;
    }

    .spanHead {
        width: 100%;
        border: none;
        outline: none;
        border-bottom: 1px solid black;

    }

    .readonly {
        border: none;
    }

    .form_submit_btn {
        margin: 0 10px 6px 25%;
        width: 30%;
    }




    /*  */



    .container {
      max-width: 600px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    h2 {
      font-size: 18px;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }
    select, input, button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #28a745;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #218838;
    }
    .add-btn {
      margin-top: 10px;
      display: block;
      color: #007bff;
      text-decoration: none;
      cursor: pointer;
      font-size: 14px;
    }
    .add-btn:hover {
      text-decoration: underline;
    }
    
    #cfc{
        display:none;
        margin-top:40px;
    }
</style>



<body>
    <?php
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captcha = substr(str_shuffle(str_repeat($characters, ceil(5 / strlen($characters)))), 0, 5);
    ?>
    <!-- Sidebar -->
    <div class="sidebar " id="fframe" style="display:block">
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
                <li onclick="addFormElement('paragraph')"><i class="fa-solid fa-paragraph"></i> <span>Paragraph</span>
                </li>
                <li onclick="addFormElement('dropdown')"><i class="fa-solid fa-square-caret-down"></i>
                    <span>DropDown</span>
                </li>
                <li onclick="addFormElement('image')"><i class="fa-solid fa-image"></i> <span>Image</span></li>
                <li onclick="addFormElement('fileupload')"><i class="fa-solid fa-file-arrow-up"></i> <span>File
                        Uploader</span></li>
                <li onclick="addFormElement('time')"><i class="fa-regular fa-clock"></i> <span>Time</span></li>
                <li onclick="addFormElement('captcha')"><i class="fa fa-calendar"></i> <span>Captcha</span></li>
                <li onclick="addFormElement('input')"><i class="fa-solid fa-keyboard"></i> <span>Input</span></li>
                <li onclick="addFormElement('number')"><i class="fa-solid fa-arrow-up-1-9"></i> <span>Number</span></li>


                <li onclick="addFormElement('time')"><i class="fa-regular fa-clock"></i> <span>Date Picker</span></li>
                <li onclick="addFormElement('time')"><i class="fa-regular fa-clock"></i> <span>Appointment</span></li>

                <li onclick="addFormElement('input_table')"><i class="fa-solid fa-arrow-up-1-9"></i> <span> Input
                        Table</span></li>
                <li onclick="addFormElement('start_rating')"><i class="fa-solid fa-arrow-up-1-9"></i> <span> Star
                        Rating</span></li>
                <li onclick="addFormElement('circle_rating')"><i class="fa-solid fa-arrow-up-1-9"></i> <span> Scale
                        Rating</span></li>
                <li onclick="addFormElement('divider')"><i class="fa-solid fa-arrow-up-1-9"></i> <span>Divider</span>
                </li>
                <li onclick="addFormElement('page_break')"><i class="fa-solid fa-arrow-up-1-9"></i> <span>Page
                        Break</span></li>
                {{-- <li onclick="addFormElement('sign')"><i class="fa-solid fa-arrow-up-1-9"></i> <span>Sign</span></li> --}}
            </ul>
        </div>


        <div class="payments boxtabsme" id="bm1">
            <ul>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Square_Inc._logo.svg" alt="Square">
                    <span>Square</span>
                </li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal Business">
                    <span>PayPal Business</span>
                </li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal Personal">
                    <span>PayPal Personal</span>
                </li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal Invoicing">
                    <span>PayPal Invoicing</span>
                </li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/f/f7/AuthorizeNet_logo.png"
                        alt="Authorize.Net"> <span>Authorize.Net</span></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Stripe_Logo%2C_revised_2016.svg"
                        alt="Stripe"> <span>Stripe</span></li>
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

    <div class="sidebarforsetting dnone" id="sframe" style="direction: none">
        <div class="menu-item">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/settings.png" alt="Settings Icon">
            <div>
                <div class="title" onclick="changers('frame1')">FORM SETTINGS</div>
                <div class="description">Customize form status and properties</div>
            </div>
        </div>

        <div class="menu-item">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/email.png" alt="Email Icon">
            <div>
                <div class="title" onclick="changers('frame2')">EMAILS</div>
                <div class="description">Send autoresponders and notifications</div>
            </div>
        </div>

        <div class="menu-item conditions">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/condition.png" alt="Conditions Icon">
            <div>
                <div class="title" onclick="changers('frame3')">CONDITIONS</div>
                <div class="description">Set up conditional logic</div>
            </div>
        </div>
    </div>


    <section class="fornsection  py-5 " id="form">
        <div class="navbasr">
            <div onclick="GotoB()">BUILD</div>
            <div onclick="GotoS()">SETTINGS</div>
            <div onclick="GotoP()">PUBLISH</div>
            <div class="preview">
                Preview Form
                <label class="switch">
                    <input type="checkbox" class="minput">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="container px-5 mt-5">
            <div class="text-center mb-5">
                <img src="./public/assets/formbanner.png" class="bannerform" alt="">
            </div>
            <form id="userForm" method="post">
                @csrf
                <div class=" bg-white bannerform mx-auto">
                    <input type="hidden" value="{{ $id }}" name="project_id">
                    <input type="hidden" value="{{ $formUN }}" name="form_un">
                    <div class="p-4 border-bottom">
                        <h3 class="">
                            <input class="form_heading" name="form_title" type="text"
                                value="MDRT Day Training Manila - August 2024">
                        </h3 class="mb-5">
                    </div>
                    <div class="p-4 dunamic_add_fields"></div>
                    <button type="submit" class="btn btn-primary form_submit_btn">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <section class="fornsection py-5 dnone" id="settingform" style="display: none">
        <div class="navbasr">
            <div onclick="GotoB()">BUILD</div>
            <div onclick="GotoS()">SETTINGS</div>
            <div onclick="GotoP()">PUBLISH</div>
            <div class="preview">
                Preview Form
                <label class="switch">
                    <input type="checkbox" class="minput">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="form-settings allsetting mx-auto mt-5 " id="frame1">
            <div class="form-header ">
                <img src="settings-icon.png" alt="Settings Icon" class="settings-icon" />
                <div>
                    <h1>FORM SETTINGS</h1>
                    <p>Customize form status and properties</p>
                </div>
            </div>

            <div class="form-section">
                <h2>Title</h2>
                <label for="form-title">Enter a name for your form</label>
                <input type="text" id="form-title" class="form-title" value="Form" />
            </div>

            <div class="form-section">
                <h2>Form Status</h2>
                <p>Enable, disable, or conditionally enable your form</p>
                <div class="status-box">
                    <div class="status-icon">
                        <img src="enabled-icon.png" alt="Enabled Icon" />
                    </div>
                    <div class="status-text">
                        <h3 class="status-title">ENABLED</h3>
                        <p>Your form is currently visible and able to receive submissions</p>
                    </div>
                    <div class="status-arrow">
                        <span>&#x25B6;</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="email-settings allsetting mx-auto mt-5 " id="frame2" style="display: none">
            <div class="email-header">
                <img src="new-email-icon.png" alt="New Email Icon" class="email-icon">
                <div>
                    <h1>NEW EMAIL</h1>
                    <p>Select an email type below to create your email.</p>
                </div>
            </div>

            <div class="email-item notification-email">
                <div class="email-icon-box">
                    <img src="notification-email-icon.png" alt="Notification Email Icon">
                </div>
                <div class="email-details">
                    <h2>NOTIFICATION EMAIL</h2>
                    <p>Receive an email when someone fills out your form</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>

            <div class="email-item autoresponder-email">
                <div class="email-icon-box">
                    <img src="autoresponder-email-icon.png" alt="Autoresponder Email Icon">
                </div>
                <div class="email-details">
                    <h2>AUTORESPONDER EMAIL</h2>
                    <p>Send an email to the person who fills out your form</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>

            <div class="email-item digest-email">
                <div class="email-icon-box">
                    <img src="digest-email-icon.png" alt="Digest Email Icon">
                </div>
                <div class="email-details">
                    <h2>DIGEST EMAIL</h2>
                    <p>Receive regular digest emails for new submissions</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>
        </div>


        <div class="condition-settings allsetting mt-5 mx-auto" id="frame3" style="display: none">
            <div class="condition-header">
                <img src="https://cdn-icons-png.flaticon.com/512/1370/1370956.png" alt="New Condition Icon" class="condition-icon">
                <div>
                    <h1>NEW CONDITION</h1>
                    <p>Automatically trigger an action if a condition is met</p>
                </div>
            </div>

            <div class="condition-item" id="showHideField">
                <div class="condition-icon-box">
                    <img src="https://cdn-icons-png.flaticon.com/512/709/709699.png" alt="Show/Hide Field Icon">
                </div>
                <div class="condition-details" onclick ="showcfc()">
                    <h2>SHOW/HIDE FIELD</h2>
                    <p>Change visibility of specific form fields</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>

            <div class="condition-item">
                <div class="condition-icon-box">
                    <img src="https://cdn-icons-png.flaticon.com/512/1041/1041916.png" alt="Update/Calculate Field Icon">
                </div>
                <div class="condition-details">
                    <h2>UPDATE/CALCULATE FIELD</h2>
                    <p>Copy a field's value or perform complex calculations</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>

            <div class="condition-item" id="ENABLEREQUIREMASKFIELD">
                <div class="condition-icon-box">
                    <img src="https://cdn-icons-png.flaticon.com/512/4281/4281855.png" alt="Enable/Require/Mask Icon">
                </div>
                <div class="condition-details">
                    <h2>ENABLE/REQUIRE/MASK FIELD</h2>
                    <p>Require or disable a field, or set a mask</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>

            <div class="condition-item">
                <div class="condition-icon-box">
                    <img src="https://cdn-icons-png.flaticon.com/512/847/847955.png" alt="Skip/Hide Page Icon">
                </div>
                <div class="condition-details">
                    <h2>SKIP TO/HIDE A PAGE</h2>
                    <p>Skip to or hide a specific page</p>
                </div>
                <div class="arrow-box">
                    <span>&#x25B6;</span>
                </div>
            </div>

           
        </div>

        <div class="card mx-auto" style="display: none;">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-1">SHOW/HIDE FIELD</h4>
                <p class="mb-0">Change visibility of specific form fields</p>
            </div>
            <div class="card-body">
                <form id="showHideForm">
                    @csrf
                    <!-- IF Section -->
                    <div class="form-group row mb-2">
                        <input type="text" name="formUN" value="{{ $formUN }}">
                        <label for="ifField" class="col-sm-2 col-form-label">If</label>
                        <div class="col-sm-10">
                            <select id="ifField" name="ifField" class="form-control">
                                <option value="" disabled selected>Select Field</option>
                                <option value="name">Name</option>
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ifState" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                            <select id="ifState" name="ifState" class="form-control">
                                <option value="" disabled selected>Select State</option>
                                <option value="empty">Is Empty</option>
                                <option value="filled">Is Filled</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <!-- DO Section -->
                    <div class="form-group row mb-2">
                        <label for="doField" class="col-sm-2 col-form-label">Do</label>
                        <div class="col-sm-10">
                            <select id="doField" name="doField" class="form-control">
                                <option value="" disabled selected>Select Field</option>
                                <option value="hide">Hide</option>
                                <option value="show">Show</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="doState" class="col-sm-2 col-form-label">Field</label>
                        <div class="col-sm-10">
                            <select id="doState" name="doState" class="form-control">
                                <option value="" disabled selected>Select field</option>

                                <option value="name">Name</option>
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-right mt-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!--show mask field-->
        <div class="card mx-auto" id="enableRequireMaskCard" style="display: none;">
            <div class="card-header bg-success text-white">
                <h4 class="mb-1">ENABLE/REQUIRE MASK FIELD</h4>
                <p class="mb-0">Set required or optional fields</p>
            </div>
            <div class="card-body">
                <form id="enableRequireForm">
                    @csrf
                    <!-- IF Section -->
                    <div class="form-group row mb-2">
                        <input type="hidden" name="formUN" value="{{ $formUN }}">
                        <label for="enableIfField" class="col-sm-2 col-form-label">If</label>
                        <div class="col-sm-10">
                            <select id="enableIfField" name="enableIfField" class="form-control">
                                <option value="" disabled selected>Select Field</option>
                                <option value="name">Name</option>
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="enableIfState" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                            <select id="enableIfState" name="enableIfState" class="form-control">
                                <option value="" disabled selected>Select State</option>
                                <option value="empty">Is Empty</option>
                                <option value="filled">Is Filled</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <!-- DO Section -->
                    <div class="form-group row mb-2">
                        <label for="enableDoField" class="col-sm-2 col-form-label">Do</label>
                        <div class="col-sm-10">
                            <select id="enableDoField" name="enableDoField" class="form-control">
                                <option value="" disabled selected>Select Action</option>
                                <option value="require">Require</option>
                                <option value="optional">Optional</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="enableDoState" class="col-sm-2 col-form-label">Field</label>
                        <div class="col-sm-10">
                            <select id="enableDoState" name="enableDoState" class="form-control">
                                <option value="" disabled selected>Select Field</option>
                                <option value="name">Name</option>
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-right mt-2">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>


<div class="container" id ="cfc">
    <h2>Show/Hide Field Configuration</h2>
    <form id="condition-form">
      <!-- IF Section -->
      <label for="if-field">IF</label>
      <select id="if-field" name="if-field">
        <option value="" disabled selected>Select field</option>
        <option value="field1">Field 1</option>
        <option value="field2">Field 2</option>
      </select>

      <label for="if-state">STATE</label>
      <select id="if-state" name="if-state">
        <option value="" disabled selected>Select field state</option>
        <option value="is-equal-to">Is Equal To</option>
        <option value="is-not-equal-to">Is Not Equal To</option>
      </select>

      <label for="if-value">VALUE</label>
      <input type="text" id="if-value" name="if-value" placeholder="Please type a value here">

      <!-- DO Section -->
      <label for="do-action">DO</label>
      <select id="do-action" name="do-action">
        <option value="" disabled selected>Select action</option>
        <option value="show">Show</option>
        <option value="hide">Hide</option>
      </select>

      <label for="do-field">FIELD</label>
      <select id="do-field" name="do-field">
        <option value="" disabled selected>Select field</option>
        <option value="field1">Field 1</option>
        <option value="field2">Field 2</option>
      </select>

      <!-- Save Button -->
      <button type="submit">SAVE</button>

      <!-- Add More Conditions -->
      <a class="add-btn" href="#">+ Add Another Condition</a>
    </form>
  </div>



        

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            GotoB();
        });


        
        const showcfc =()=>{
            document.getElementById("cfc").style.display ="block"
            document.getElementById("frame3").style.display ="none"
        }

        function changers(val) {
            for (let index = 0; index < document.getElementsByClassName("allsetting").length; index++) {
                document.getElementsByClassName("allsetting")[index].style.display = "none"

            }
            document.getElementById(val).style.display = "block"
        }

        function tabsme(id, e) {
            let a = document.getElementsByClassName("boxtabsme")
            let b = document.getElementsByClassName("tab")
            for (let index = 0; index < a.length; index++) {
                a[index].classList.remove("activemetab")
                b[index].classList.remove("active")
            }
            document.getElementById(`bm${id}`).classList.add("activemetab")
            e.classList.add("active")
        }

        function GotoB() {
            console.log("call this one");
            document.getElementById("fframe").style.display = "block"
            document.getElementById("form").style.display = "block"
            document.getElementById("sframe").style.display = "none"
            document.getElementById("settingform").style.display = "none"
        }

        function GotoS() {
            document.getElementById("fframe").style.display = "none"
            document.getElementById("form").style.display = "none"
            document.getElementById("sframe").style.display = "block"
            document.getElementById("settingform").style.display = "block"
        }
    </script>

    <script>
        // Function to generate random captcha
        function generateCaptcha() {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
                captcha += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            document.getElementById('captcha').innerText = captcha;
        }

        // Function to validate the entered captcha
        function validateCaptcha() {
            const enteredCaptcha = document.getElementById('captchaInput').value;
            const captcha = document.getElementById('captcha').innerText;
            if (enteredCaptcha === captcha) {
                document.getElementById('result').innerText = 'Captcha matched!';
                document.getElementById('result').style.color = 'green';
            } else {
                document.getElementById('result').innerText = 'Captcha does not match, try again!';
                document.getElementById('result').style.color = 'red';
            }
            // Regenerate new captcha after validation
            generateCaptcha();
        }
        window.onload = generateCaptcha;



        function addFormElement(type) {
            console.log(type);
            const now = new Date();
            let dynamic_slug = now.getMinutes() + '_' + now.getSeconds();
            let append = '';
            // console.log(now.getMinutes());
            // console.log(now.getSeconds());
            // console.log(dynamic_slug);
            if (type == 'input') {
                append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_input_' +
                    dynamic_slug +
                    '"><div class="form-row"><div class="form-group "><label class="form-label"><input type="text" class="spanHead input_label_' +
                    dynamic_slug + '" value="" name="input_label_' + dynamic_slug +
                    '"></label><input type="text" class="form-control w-50" name="input_' + dynamic_slug +
                    '" class="input_' + dynamic_slug + '"></div></div></div>';
            } else if (type == 'number') {
                append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_number_' +
                    dynamic_slug +
                    '"><div class="form-row"><div class="form-group "><label class="form-label"><input type="text" class="spanHead number_label_' +
                    dynamic_slug + '" value="" name="number_label_' + dynamic_slug +
                    '"></label><input type="number" class="form-control w-50" name="number_' + dynamic_slug +
                    '" class="number_' + dynamic_slug + '"></div></div></div>';
            } else if (type == 'time') {

                append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_date_' +
                    dynamic_slug +
                    '"><div class="form-row"><div class="form-group "><label class="form-label"><input type="text" class="spanHead date_label_' +
                    dynamic_slug + '" value="" name="date_label_' + dynamic_slug +
                    '"></label><input type="date" class="form-control w-50" name="date_' + dynamic_slug + '" class="date_' +
                    dynamic_slug + '"></div></div></div>';

            } else if (type == 'fullName') {
                append = '<div class="d-flex p-3 mb-3 border justify-content-center align-items-center div_fullname_' +
                    dynamic_slug +
                    '"><div class="form-group pe-3 w-50"><label><input class="spanHead readonly firstname_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="firstName_label_' + dynamic_slug +
                    '" value="First Name"/></label><input type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstName_' +
                    dynamic_slug +
                    '"></div><div class="form-group w-50"><label><input class="spanHead readonly lastname_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="lastname_label_' + dynamic_slug +
                    '" value="Last Name"/></label><input type="text" class="form-control mt-2" placeholder="Enter Last Name" name="lastname_' +
                    dynamic_slug + '"></div></div>';
            } else if (type == 'email') {
                append = '<div class="p-3 border justify-content-center align-items-center mb-3 div_email_' + dynamic_slug +
                    '"><div class="form-group"><label class="form-label"><input type="text" class="spanHead email_label_' +
                    dynamic_slug + '" name="email_label_' + dynamic_slug +
                    '" value="Email address"></label><input type="email" class="form-control mt-2"  aria-describedby="emailHelp" placeholder="Enter email" name="email_' +
                    dynamic_slug + '" class="email_' + dynamic_slug + '"></div></div>';
            } else if (type == 'heading') {
                append = '<div class="justify-content-center align-items-center mb-3 div_heading_' + dynamic_slug +
                    '"><h4 class="mb-3"><input type="text" class="spanHead heading_label_' + dynamic_slug +
                    '" name="heading_label_' + dynamic_slug + '" value="" placeholder="Heading...."></h4></div>';
            } else if (type == "address") {
                append = '<div class="p-3 border mb-3 div_addressform_' + dynamic_slug +
                    '"><h4 class="mb-4">Address Form</h4><div class="d-flex align-items-center justify-content-center"><div class="form-group w-50 pe-2"><label><input class="spanHead readonly street_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="street_label_' + dynamic_slug +
                    '" value="Street Address"/></label><input type="text" class="form-control mt-2 street_' + dynamic_slug +
                    '" placeholder="1234 Main St" name="street_' + dynamic_slug +
                    '"></div><div class="form-group w-50"><label><input class="spanHead readonly city_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="city_label_' + dynamic_slug +
                    '" value="City"/></label><input type="text" class="form-control mt-2 city_' + dynamic_slug +
                    '" placeholder="City" name="city_' + dynamic_slug +
                    '"></div></div><div class="form-row mt-4"><div class="d-flex align-items justify-content-center"><div class="form-group w-50 pe-2"><label><input class="spanHead readonly state_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="zipcode_label_' + dynamic_slug +
                    '" value="State"/></label><select id="inputState" class="form-control mt-2" name="state_' +
                    dynamic_slug +
                    '"><option value="">Choose...</option><option value="1">California</option><option value="2">New York</option><option value="3">Texas</option></select></div><div class="form-group w-50"><label><input class="spanHead readonly zipcode_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="zipcode_label_' + dynamic_slug +
                    '" value="Zip Code"/></label><input type="text" class="form-control mt-2 zipcode_' + dynamic_slug +
                    '" placeholder="Zip Code" name="zipcode_' + dynamic_slug + '"></div></div></div></div>';
            } else if (type == 'phone') {
                append = '<div class="border p-3 mb-3 border justify-content-center align-items-center div_phonenumber_' +
                    dynamic_slug +
                    '"><div class="form-row"><div class="form-group "><label for="inputPhone"><input type="text" class="spanHead readonly phonenumber_label_' +
                    dynamic_slug + '" value="Phone Number" name="number_label_' + dynamic_slug +
                    '"></label><input type="tel" class="form-control mt-2 phonenumber_' + dynamic_slug +
                    '" name="phonenumber_' + dynamic_slug + '" placeholder="(123) 456-7890"></div></div></div>';
            } else if (type == 'paragraph') {
                append = '<div class="mb-5 div_paragraph_' + dynamic_slug +
                    '"><p class="mb-3"><textarea class="form-control " rows="3" name="paragraph_' + dynamic_slug +
                    '"></textarea></p></div>';
            } else if (type == 'dropdown') {
                append = '<div class="form-row div_dropdown_' + dynamic_slug +
                    '"><div class="form-group w-100"><label><input class="spanHead dropdown_span_' + dynamic_slug +
                    '" type="text" name="dropdown_span_' + dynamic_slug +
                    '" value="" placeholder="Dropdown heading.."></label></div><div class="d-flex p-3 mb-3 border justify-content-center align-items-center div_fullname_20_28"><div class="form-group pe-3 w-50"><label><input class="spanHead readonly option_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="option_label_' + dynamic_slug +
                    '[]" value="Option"></label><input type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Enter option" name="option_' +
                    dynamic_slug +
                    '[]"></div><div class="form-group w-50"><label><input class="spanHead readonly option_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="option_label_' + dynamic_slug +
                    '[]" value="Option"></label><input type="text" class="form-control mt-2" placeholder="Enter option" name="option_' +
                    dynamic_slug +
                    '[]"></div><div class="form-group pe-3 w-50"><label><input class="spanHead readonly option_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="option_label_' + dynamic_slug +
                    '[]" value="Option"></label><input type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Enter option" name="option_' +
                    dynamic_slug +
                    '[]"></div><div class="form-group w-50"><label><input class="spanHead readonly option_label_' +
                    dynamic_slug + '" type="text" readonly="true" name="option_label_' + dynamic_slug +
                    '[]" value="Option"></label><input type="text" class="form-control mt-2" placeholder="Enter option" name="option_' +
                    dynamic_slug + '[]"></div></div></div>';
            } else if (type == 'fileupload') {
                append = '<div class="mb-5 position-relative div_fileupload_' + dynamic_slug +
                    '"><label for="" class="mb-3"><input type="text" class="spanHead fileupload_label_' + dynamic_slug +
                    '" value="" name="fileupload_label_' + dynamic_slug +
                    '"></label><img src="./assets/uploadform.png" class="w-100" alt=""><input type="file" class="uploadforminput" name="fileupload_' +
                    dynamic_slug + '"></div>';
            } else if (type == 'captcha') {
                append = '<div class="border p-3 div_captcha_' + dynamic_slug +
                    '"><div class="form-row"><div class="form-group "><label for="" class="mb-3"><input type="text" class="spanHead readonly captcha_label_' +
                    dynamic_slug + '" value="Captcha Verification" name="captcha_label_' + dynamic_slug +
                    '" readonly="true"></label><input type="text" class="form-control mt-2" value="{{ $captcha }}" name="captcha_' +
                    dynamic_slug + '"></div></div></div>';

            } else if (type == 'input_table') {
                append =
                    '<div class="border p-3 mb-3"><h4 class="mb-3">Input Table</h4><div><table><thead><tr><th></th><th>Not Satisfied</th><th>Somewhat Satisfied</th><th>Satisfied</th><th>Any thoughts?</th></tr></thead><tbody><tr><td class="row-header">Service Quality</td><td class="radio-cell"><input type="radio" name="service" /></td><td class="radio-cell"><input type="radio" name="service" /></td><td class="radio-cell"><input type="radio" name="service" /></td><td></td></tr><tr><td class="row-header">Cleanliness</td><td class="radio-cell"><input type="radio" name="cleanliness" /></td><td class="radio-cell"><input type="radio" name="cleanliness" /></td><td class="radio-cell"><input type="radio" name="cleanliness" /></td><td></td></tr><tr><td class="row-header">Responsiveness</td><td class="radio-cell"><input type="radio" name="responsiveness" /></td><td class="radio-cell"><input type="radio" name="responsiveness" /></td><td class="radio-cell"><input type="radio" name="responsiveness" /></td><td></td></tr><tr><td class="row-header">Friendliness</td><td class="radio-cell"><input type="radio" name="friendliness" /></td><td class="radio-cell"><input type="radio" name="friendliness" /></td><td class="radio-cell"><input type="radio" name="friendliness" /></td><td></td></tr></tbody></table></div></div>';

            } else if (type == 'start_rating') {
                append =
                    '<div class="border p-3 mb-3"><h4 class="mb-3">star rating</h4><div><div class="star-rating"><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div></div></div></div>';
            } else if (type == 'circle_rating') {
                append =
                    '<div class="border p-3 mb-3"><h4 class="mb-3">Circle Rating</h4><div><div class="circle-rating"><div class="circle">1</div><div class="circle">2</div><div class="circle">3</div><div class="circle">4</div><div class="circle">5</div></div></div></div>';
            } else if (type == 'divider') {
                append = '<div class="border  mb-3" style="height: 2px;"></div>';
            } else if (type == 'page_break') {
                append = '<div class="border  mb-3" style="height: 120px"><div class="border-top mt-4 p-3"></div></div>';
            } else if (type == 'sign') {
                append =
                    '<div class="border p-3  mb-3" ><div><img src="./assets/signature.svg" class="w-50" alt=""></div></div>';
            }

            $(".dunamic_add_fields").append(append);
            $("." + type + "_label_" + dynamic_slug).focus();

        }
    </script>
    <script>
        $(document).ready(function() {
            $('#showHideField').click(function() {
                $('#hideShowCard').show();
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#showHideForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                const formData = $(this).serialize(); // Serialize form data

                $.ajax({
                    url: "{{ route('save.show.hide.form') }}", // Replace with your route name or URL
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        if (response.success) {
                            alert('Form saved successfully!');

                            // Clear the form
                            $('#showHideForm')[0].reset();

                            // Hide the card
                            $('#hideShowCard').hide();
                        }
                    },
                    error: function(xhr) {
                        // Handle error response
                        alert('Something went wrong! Please try again.');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#userForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Collect form data
                let formData = $(this).serialize();

                // AJAX request
                $.ajax({
                    url: '{{ route("createform") }}',
                    type: 'POST',
                    data: formData,
                    beforeSend: function() {
                        // Optional: Show a loading spinner or disable the button
                        $('.form_submit_btn').attr('disabled', true).text('Submitting...');
                    },
                    success: function(response) {
                        // Handle success
                        alert('Form submitted successfully!');
                        console.log(response);
                    },
                    error: function(xhr) {
                        // Handle error
                        alert('Something went wrong. Please try again.');
                        console.error(xhr.responseText);
                    },
                    complete: function() {
                        // Re-enable the button after the request is complete
                        $('.form_submit_btn').attr('disabled', false).text('Submit');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Show the new modal on button click
            $('#ENABLEREQUIREMASKFIELD').click(function() {
                $('#enableRequireMaskCard').show();
            });

            // Handle form submission with AJAX
            $('#enableRequireForm').submit(function(event) {
                event.preventDefault();
                let formData = $(this).serialize();

                $.ajax({
                    url: '/enable-require-mask-field', // Update with your backend endpoint
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        alert('Field configuration saved successfully!');
                        $('#enableRequireMaskCard').hide();
                    },
                    error: function(error) {
                        alert('Failed to save configuration. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

@endsection