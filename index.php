<!--Company Settings-->

<link rel="icon" href="https://fc.bicodev.com/mt-demo/80100/80168/mt-content/uploads/2019/04/favicon.ico">

<!-- Calendar-->
<link rel="stylesheet" href="https://fc.bicodev.com/css/summernote/summernote-bs4.css">
<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/plugins/main.css">

<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/plugins/style.css">
<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/plugins/flatpickr.min.css">

<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/plugins/animate.min.css">

<!-- font css -->
<link rel="stylesheet" href="https://fc.bicodev.com/assets/fonts/tabler-icons.min.css">
<link rel="stylesheet" href="https://fc.bicodev.com/assets/fonts/feather.css">
<link rel="stylesheet" href="https://fc.bicodev.com/assets/fonts/fontawesome.css">
<link rel="stylesheet" href="https://fc.bicodev.com/assets/fonts/material.css">

<!--bootstrap switch-->
<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/plugins/bootstrap-switch-button.min.css">

<!-- vendor css -->
<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/style.css" id="main-style-link">

<link rel="stylesheet" href="https://fc.bicodev.com/assets/css/customizer.css">
<link rel="stylesheet" href="https://fc.bicodev.com/css/custom.css" id="main-style-link">

<link rel="stylesheet" href="https://fc.bicodev.com/css/summernote/summernote-bs4.css">

</head>
<div id="company-settings" class="card">
  <div class="card-header">
    <h5>Company Settings</h5>
    <small class="text-muted">Edit your company details</small>
  </div>
  <form method="POST" action="https://fc.bicodev.com/company-settings" accept-charset="UTF-8"><input name="_token" type="hidden" value="UuqgAYDJHxfTf9sfPWB9x03Lhde5Yu2cKyhBzi5c">
    <div class="card-body">

      <div class="row">
        <div class="form-group col-md-6">
          <label for="company_name *" class="form-label">Company Name *</label>
          <input class="form-control font-style" name="company_name" type="text" value="jsons communications">
        </div>
        <div class="form-group col-md-6">
          <label for="company_address" class="form-label">Address</label>
          <input class="form-control font-style" name="company_address" type="text" value="Plot 84-A, second floor,Ovais center، 3, Phase 2 Pakistan Town," id="company_address">
        </div>
        <div class="form-group col-md-6">
          <label for="company_city" class="form-label">City</label>
          <input class="form-control font-style" name="company_city" type="text" value="Islamabad," id="company_city">
        </div>
        <div class="form-group col-md-6">
          <label for="company_state" class="form-label">State</label>
          <input class="form-control font-style" name="company_state" type="text" value="Punjab" id="company_state">
        </div>
        <div class="form-group col-md-6">
          <label for="company_zipcode" class="form-label">Zip/Post Code</label>
          <input class="form-control" name="company_zipcode" type="text" value="44000" id="company_zipcode">
        </div>
        <div class="form-group  col-md-6">
          <label for="company_country" class="form-label">Country</label>
          <input class="form-control font-style" name="company_country" type="text" value="Pakistan" id="company_country">
        </div>
        <div class="form-group col-md-6">
          <label for="company_telephone" class="form-label">Telephone</label>
          <input class="form-control" name="company_telephone" type="text" value="0333 5655756" id="company_telephone">
        </div>
        <div class="form-group col-md-6">
          <label for="company_email" class="form-label">System Email *</label>
          <input class="form-control" name="company_email" type="text" value="Jobs@jsonscommunications.com" id="company_email">
        </div>
        <div class="form-group col-md-6">
          <label for="company_email_from_name" class="form-label">Email (From Name) *</label>
          <input class="form-control font-style" name="company_email_from_name" type="text" value="Jobs@jsonscommunications.com" id="company_email_from_name">
        </div>
        <div class="form-group col-md-6">
          <label for="registration_number" class="form-label">Company Registration Number *</label>
          <input class="form-control" name="registration_number" type="text" value="123456" id="registration_number">
        </div>

        <div class="form-group col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="form-check form-check-inline form-group mb-3">
                <input type="radio" id="customRadio8" name="tax_type" value="VAT" class="form-check-input" checked>
                <label class="form-check-label" for="customRadio8">VAT Number</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-check form-check-inline form-group mb-3">
                <input type="radio" id="customRadio7" name="tax_type" value="GST" class="form-check-input">
                <label class="form-check-label" for="customRadio7">GST Number</label>
              </div>
            </div>
          </div>
          <input class="form-control" placeholder="Enter VAT / GST Number" name="vat_number" type="text" value="14545">
        </div>

        <div class="form-group col-md-6 mt-2">
          <label for="timezone" class="form-label">Timezone</label>
          <select type="text" name="timezone" class="form-control custom-select" id="timezone">
            <option value="">Select Timezone</option>
            
            <option value="Atlantic/South_Georgia">(GMT-2:00) Atlantic/South_Georgia (South Georgia Standard Time)</option>
           
            <option value="Asia/Karachi">(GMT+5:00) Asia/Karachi (Pakistan Time)</option>
            <option value="Asia/Oral">(GMT+5:00) Asia/Oral (Oral Time)</option>
            <option value="Asia/Samarkand">(GMT+5:00) Asia/Samarkand (Uzbekistan Time)</option>
            <option value="Asia/Tashkent">(GMT+5:00) Asia/Tashkent (Uzbekistan Time)</option>
            <option value="Asia/Yekaterinburg">(GMT+5:00) Asia/Yekaterinburg (Yekaterinburg Time)</option>
            <option value="Indian/Kerguelen">(GMT+5:00) Indian/Kerguelen (French Southern &amp; Antarctic Lands Time)</option>
            
            <option value="Australia/Eucla">(GMT+8:45) Australia/Eucla (Central Western Standard Time (Australia))</option>
            <option value="Asia/Dili">(GMT+9:00) Asia/Dili (Timor-Leste Time)</option>
            <option value="Asia/Jayapura">(GMT+9:00) Asia/Jayapura (East Indonesia Time)</option>
            <option value="Asia/Pyongyang">(GMT+9:00) Asia/Pyongyang (Korea Standard Time)</option>
            <option value="Asia/Seoul">(GMT+9:00) Asia/Seoul (Korea Standard Time)</option>
            <option value="Asia/Tokyo">(GMT+9:00) Asia/Tokyo (Japan Standard Time)</option>
            <option value="Asia/Yakutsk">(GMT+9:00) Asia/Yakutsk (Yakutsk Time)</option>
            <option value="Australia/Adelaide">(GMT+9:30) Australia/Adelaide (Central Standard Time (South Australia))</option>
            <option value="Australia/Broken_Hill">(GMT+9:30) Australia/Broken_Hill (Central Standard Time (South Australia/New South Wales))</option>
            <option value="Australia/Darwin">(GMT+9:30) Australia/Darwin (Central Standard Time (Northern Territory))</option>
            <option value="Australia/North">(GMT+9:30) Australia/North (Central Standard Time (Northern Territory))</option>
            <option value="Australia/South">(GMT+9:30) Australia/South (Central Standard Time (South Australia))</option>
            <option value="Australia/Yancowinna">(GMT+9:30) Australia/Yancowinna (Central Standard Time (South Australia/New South Wales))</option>
            <option value="Antarctica/DumontDUrville">(GMT+10:00) Antarctica/DumontDUrville (Dumont-d&#039;Urville Time)</option>
            <option value="Asia/Sakhalin">(GMT+10:00) Asia/Sakhalin (Sakhalin Time)</option>
            <option value="Asia/Vladivostok">(GMT+10:00) Asia/Vladivostok (Vladivostok Time)</option>
            <option value="Australia/ACT">(GMT+10:00) Australia/ACT (Eastern Standard Time (New South Wales))</option>
            <option value="Australia/Brisbane">(GMT+10:00) Australia/Brisbane (Eastern Standard Time (Queensland))</option>
            <option value="Australia/Canberra">(GMT+10:00) Australia/Canberra (Eastern Standard Time (New South Wales))</option>
            <option value="Australia/Currie">(GMT+10:00) Australia/Currie (Eastern Standard Time (New South Wales))</option>
            <option value="Australia/Hobart">(GMT+10:00) Australia/Hobart (Eastern Standard Time (Tasmania))</option>
            <option value="Australia/Lindeman">(GMT+10:00) Australia/Lindeman (Eastern Standard Time (Queensland))</option>
            <option value="Australia/Melbourne">(GMT+10:00) Australia/Melbourne (Eastern Standard Time (Victoria))</option>
            <option value="Australia/NSW">(GMT+10:00) Australia/NSW (Eastern Standard Time (New South Wales))</option>
            <option value="Australia/Queensland">(GMT+10:00) Australia/Queensland (Eastern Standard Time (Queensland))</option>
            <option value="Australia/Sydney">(GMT+10:00) Australia/Sydney (Eastern Standard Time (New South Wales))</option>
            <option value="Australia/Tasmania">(GMT+10:00) Australia/Tasmania (Eastern Standard Time (Tasmania))</option>
            <option value="Australia/Victoria">(GMT+10:00) Australia/Victoria (Eastern Standard Time (Victoria))</option>
            <option value="Australia/LHI">(GMT+10:30) Australia/LHI (Lord Howe Standard Time)</option>
            <option value="Australia/Lord_Howe">(GMT+10:30) Australia/Lord_Howe (Lord Howe Standard Time)</option>
            <option value="Asia/Magadan">(GMT+11:00) Asia/Magadan (Magadan Time)</option>
            <option value="Antarctica/McMurdo">(GMT+12:00) Antarctica/McMurdo (New Zealand Standard Time)</option>
            <option value="Antarctica/South_Pole">(GMT+12:00) Antarctica/South_Pole (New Zealand Standard Time)</option>
            <option value="Asia/Anadyr">(GMT+12:00) Asia/Anadyr (Anadyr Time)</option>
            <option value="Asia/Kamchatka">(GMT+12:00) Asia/Kamchatka (Petropavlovsk-Kamchatski Time)</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="company_start_time" class="form-label">Company Start Time *</label>
          <input class="form-control" name="company_start_time" type="time" value="08:00" id="company_start_time">
        </div>

        <div class="form-group col-md-6">
          <label for="company_end_time" class="form-label">Company End Time *</label>
          <input class="form-control" name="company_end_time" type="time" value="18:00" id="company_end_time">
        </div>
