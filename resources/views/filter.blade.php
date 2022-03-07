<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href='img/favicon.ico'>

  <link id="boot" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href={{asset('css/filter.css')}} />
  <style>
    .modal,
    .Withdraw {
      visibility: hidden;
      transition: all 0.4s;
      opacity: 0;
    }

    .modal.open {
      visibility: visible;
      opacity: 1;
    }

    .Withdraw.open {
      visibility: visible;
      opacity: 1;
    }

    .modal,
    .modal-overlay,
    .Withdraw {
      position: fixed;
      left: 0;
      top: 0;
      height: 100vh;
      width: 100vw;
      z-index: 100;
    }

    .modal,
    .modal-card,
    .modal-body,
    .Withdraw {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .modal-content {
      overflow: auto;
      flex-grow: 1;
    }

    .modal-overlay {
      background: rgba(0, 0, 0, 0.5);
    }

    .modal-body {
      z-index: 101;
      margin: auto;
      max-height: calc(100vh - 1rem);
      max-width: calc(100vw - 1rem);
      border-radius: 10px;
      overflow: hidden;
      width: 500px;
      height: 500px;
      background: white;
    }

    .modal-header,
    .modal-content,
    .modal-footer {
      padding: 1rem;
    }

    .modal-header {
      background: rebeccapurple;
      text-transform: capitalize;
      font-size: 1.25rem;
      color: white;
      font-weight: bold;
    }

    .modal-footer {
      display: flex;
      justify-content: space-between;
    }

    .Continue2 {
      display: flex;
      justify-content: start;
      align-items: center;
      background-color: #6149CD;
      margin: 10px;
      color: white;
      font-family: Manrope-Medium;
      border: 0px #707070;
      border-radius: 22px;
      width: 50px;
      height: 30px;
      cursor: pointer;

    }
    #daterange:focus{
    outline: none;
}

    option {
      color: #7A86A1;
    }

    .dropdown2 {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    th {
      color: #C0BDCC;
    }

    input[type="date"] {
      display: block;
      position: relative;
      padding: 1rem 3.5rem 1rem 0.75rem;

      font-size: 1rem;
      font-family: monospace;

      border: 1px solid #8292a2;
      border-radius: 0.25rem;
      background:
        white url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' viewBox='0 0 20 22'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23688EBB' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' transform='translate(1 1)'%3E%3Crect width='18' height='18' y='2' rx='2'/%3E%3Cpath d='M13 0L13 4M5 0L5 4M0 8L18 8'/%3E%3C/g%3E%3C/svg%3E") right 1rem center no-repeat;

      cursor: pointer;
    }

    input[type="date"]:focus {
      outline: none;
      border-color: #3acfff;
      box-shadow: 0 0 0 0.25rem rgba(0, 120, 250, 0.1);
    }

    ::-webkit-datetime-edit {}

    ::-webkit-datetime-edit-fields-wrapper {}

    ::-webkit-datetime-edit-month-field:hover,
    ::-webkit-datetime-edit-day-field:hover,
    ::-webkit-datetime-edit-year-field:hover {
      background: rgba(0, 120, 250, 0.1);
    }

    ::-webkit-datetime-edit-text {
      opacity: 0;
    }

    ::-webkit-clear-button,
    ::-webkit-inner-spin-button {
      display: none;
    }

    ::-webkit-calendar-picker-indicator {
      position: absolute;
      width: 2.5rem;
      height: 100%;
      top: 0;
      right: 0;
      bottom: 0;

      opacity: 0;
      cursor: pointer;

      color: rgba(0, 120, 250, 1);
      background: rgba(0, 120, 250, 1);

    }

    input[type="date"]:hover::-webkit-calendar-picker-indicator {
      opacity: 0.05;
    }

    input[type="date"]:hover::-webkit-calendar-picker-indicator:hover {
      opacity: 0.15;
    }

    .dropdown2 a:hover {
      background-color: #ddd;
    }

    .show {
      display: block;
    }
    #myDropdown{
        background-color: white
    }
  </style>

  <style id="table_style" type="text/css">
    @media print {
      table {
        border: 1px solid #ccc;
        border-collapse: collapse;
      }

      table th {
        background-color: #F7F7F7;
        color: #333;
        font-weight: bold;
      }

      table th,
      table td {
        padding: 5px;
        border: 1px solid #ccc;
      }
    }
  </style>
</head>

<body>
  <div class="cont altbody">
  <header class="header">
            <div class="logo-left-container hover-curser" style="margin: 2vh">
                <img src={{asset('img/dashimgs/logohulul.png')}} alt="logo" style="width: 80%; margin-left: 10%" />
            </div>
            <div class="first-left-container">
                <ul class="list">
                    <a href="test.html">
                        <li class="links">
                            <!-- <svg

                  xmlns="http://www.w3.org/2000/svg"
                  width="8"
                  height="35"
                  viewBox="0 0 8 35"
                >
                  <path
                    id="icon-active"
                    d="M1622,65h0a8,8,0,0,1,8,8V92a8,8,0,0,1-8,8h0Z"
                    transform="translate(-1622 -65)"
                    fill="#6149cd"
                  />
                </svg> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.997" height="20" viewBox="0 0 19.997 20">
                                <path id="dashboard_icon" data-name="dashboard icon"
                                    d="M54,179a3.086,3.086,0,0,1-3.026-3.1V172.88A3.061,3.061,0,0,1,54,169.791h2.96A3.085,3.085,0,0,1,60,172.88V175.9a3.1,3.1,0,0,1-3.034,3.1Zm-1.4-6.121V175.9a1.433,1.433,0,0,0,.408,1.015,1.369,1.369,0,0,0,.983.421h2.981a1.369,1.369,0,0,0,.983-.421,1.429,1.429,0,0,0,.407-1.015V172.88a1.44,1.44,0,0,0-.41-1.012,1.379,1.379,0,0,0-.99-.421H54a1.418,1.418,0,0,0-1.4,1.433Zm-9.567,6.105A3.133,3.133,0,0,1,40,175.892V172.88a3.123,3.123,0,0,1,.889-2.187,2.991,2.991,0,0,1,2.145-.9h1.216a.809.809,0,0,1,.779.386.847.847,0,0,1,0,.884.811.811,0,0,1-.779.387H43.035a1.425,1.425,0,0,0-1.41,1.431v2.984a1.454,1.454,0,0,0,1.41,1.43h2.979a1.382,1.382,0,0,0,1-.421,1.443,1.443,0,0,0,.414-1.015v-4.476a.842.842,0,0,1,.365-.856.8.8,0,0,1,.915.026.843.843,0,0,1,.316.876v4.462a3.066,3.066,0,0,1-3.034,3.1h0Zm12.747-10.746a.836.836,0,0,1,0-1.659h1.188a1.392,1.392,0,0,0,1-.432,1.459,1.459,0,0,0,.4-1.028V162.1a1.435,1.435,0,0,0-1.4-1.43H54a1.417,1.417,0,0,0-1.4,1.43v4.519a.833.833,0,0,1-.835.815.8.8,0,0,1-.569-.258.836.836,0,0,1-.215-.595V162.1a3.122,3.122,0,0,1,.883-2.191A3,3,0,0,1,54,159h2.96a3.133,3.133,0,0,1,3.025,3.1v3.013a3.123,3.123,0,0,1-.859,2.195,3,3,0,0,1-2.128.933ZM46,168.209H43.035A3.087,3.087,0,0,1,40,165.12V162.1a3.1,3.1,0,0,1,3.034-3.1H46a3.084,3.084,0,0,1,3.03,3.1v3.022a3.1,3.1,0,0,1-.889,2.187A2.976,2.976,0,0,1,46,168.209Zm-3.974-7.132a1.454,1.454,0,0,0-.421,1.021v3.022a1.451,1.451,0,0,0,.41,1.04,1.39,1.39,0,0,0,.988.421h3a1.388,1.388,0,0,0,1-.432,1.45,1.45,0,0,0,.4-1.028V162.1a1.432,1.432,0,0,0-1.4-1.43H43.008A1.379,1.379,0,0,0,42.026,161.077Z"
                                    transform="translate(-40.001 -159)" fill="#7a86a1" />
                            </svg>

                            {{__('massage.Dashbord')}}
                        </li>
                    </a>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.999" height="20" viewBox="0 0 19.999 20">
                            <path id="Campaigns_icon" data-name="Campaigns icon"
                                d="M46.253,229C42.392,229,40,226.608,40,222.756v-7.5c0-3.864,2.392-6.256,6.253-6.256h7.493c3.844,0,6.254,2.392,6.254,6.253v2.322a.764.764,0,0,1-.763.765h-.011a.756.756,0,0,1-.756-.756c0-.006,0-.012,0-.018v-2.313c0-3.043-1.68-4.723-4.723-4.723H46.253c-3.053,0-4.723,1.68-4.723,4.723v7.5c0,3.043,1.68,4.714,4.723,4.714h7.493c3.052,0,4.723-1.68,4.723-4.714a.765.765,0,1,1,1.53,0c0,3.855-2.391,6.247-6.243,6.247Zm-.553-4.521a.765.765,0,0,1-.738-.791v-6.4a.757.757,0,0,1,.782-.731h.009a.766.766,0,0,1,.739.792v6.391a.765.765,0,0,1-.765.739Zm3.57-.779v-9.379a.765.765,0,1,1,1.53,0h0V223.7a.765.765,0,1,1-1.53,0Zm4.239-.009V220.7a.765.765,0,0,1,1.531,0v2.991a.765.765,0,0,1-1.531,0Zm-4.239-9.414v0Z"
                                transform="translate(-40 -209)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.Accounts')}}
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.97" height="20" viewBox="0 0 16.97 20">
                            <path id="Statement"
                                d="M46.565,279A4.579,4.579,0,0,1,42,274.4q0-.049,0-.1v-2.523a.747.747,0,1,1,1.493,0v2.523a3.1,3.1,0,0,0,3.011,3.181h8.006a3.16,3.16,0,0,0,2.964-3.182v-8.925l-3.809-4.014v1.316a1.829,1.829,0,0,0,1.809,1.837.755.755,0,0,1,0,1.51h0a3.334,3.334,0,0,1-3.3-3.348v-2.162H46.565a3.075,3.075,0,0,0-3.068,3v4.159a.747.747,0,1,1-1.493,0v-4.159a4.6,4.6,0,0,1,4.562-4.51h6.3a.428.428,0,0,1,.057-.012.577.577,0,0,1,.057.012h.2a.743.743,0,0,1,.539.233l5.04,5.312a.761.761,0,0,1,.211.523v9.228A4.64,4.64,0,0,1,54.514,279Zm.8-5.594a.755.755,0,0,1,0-1.51h5.371a.755.755,0,0,1,0,1.51Zm0-4.986a.755.755,0,0,1,0-1.51H50.7a.755.755,0,0,1,0,1.51Z"
                                transform="translate(-42.002 -259)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.Statement')}}
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.778" height="19.776"
                            viewBox="0 0 19.778 19.776">
                            <g id="Group_16" data-name="Group 16" transform="translate(-1654.752 -1306.447)">
                                <g id="Group_14" data-name="Group 14" transform="translate(1654.902 1306.598)">
                                    <path id="Path_11" data-name="Path 11"
                                        d="M1665.437,1326.073a4.619,4.619,0,0,1-3.277-1.355l-5.9-5.9a4.634,4.634,0,0,1,0-6.554l4.307-4.307a4.638,4.638,0,0,1,3.526-1.351l5.6.3a4.626,4.626,0,0,1,4.379,4.379l.3,5.6a4.64,4.64,0,0,1-1.351,3.526l-4.307,4.308A4.62,4.62,0,0,1,1665.437,1326.073Zm-1.593-18.363a3.527,3.527,0,0,0-2.491,1.031l-4.307,4.307a3.522,3.522,0,0,0,0,4.981l5.9,5.9a3.527,3.527,0,0,0,4.981,0l4.307-4.308a3.528,3.528,0,0,0,1.026-2.679l-.3-5.6h0a3.516,3.516,0,0,0-3.328-3.328l-5.6-.3C1663.97,1307.713,1663.907,1307.711,1663.844,1307.711Z"
                                        transform="translate(-1654.902 -1306.598)" fill="#7a86a1" stroke="#707070"
                                        stroke-width="0.3" />
                                </g>
                                <g id="Group_15" data-name="Group 15" transform="translate(1667.589 1309.726)">
                                    <path id="Path_12" data-name="Path 12"
                                        d="M1733.736,1329.241a1.832,1.832,0,1,1,1.3-.536A1.82,1.82,0,0,1,1733.736,1329.241Zm0-2.551a.719.719,0,0,0-.509,1.228.735.735,0,0,0,1.018,0,.719.719,0,0,0-.509-1.228Z"
                                        transform="translate(-1731.904 -1325.578)" fill="#7a86a1" stroke="#707070"
                                        stroke-width="0.3" />
                                </g>
                            </g>
                        </svg>

                        {{__('massage.Promos')}}
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.999" height="19.924"
                            viewBox="0 0 19.999 19.924">
                            <path id="project_icon" data-name="project icon"
                                d="M48.784,378.134a.755.755,0,0,1,.751-.758h6.2a2.211,2.211,0,0,0,1.933-.831,3.155,3.155,0,0,0,.633-1.709c.031-.558.185-2.321.185-2.321a.743.743,0,0,1,1.485.059c0,.023-.141,1.806-.173,2.356a4.635,4.635,0,0,1-.974,2.585,3.72,3.72,0,0,1-3.086,1.378h-6.2a.754.754,0,0,1-.753-.754Zm-4.522.755a3.718,3.718,0,0,1-3.087-1.379,4.623,4.623,0,0,1-.974-2.585c-.032-.549-.173-2.327-.173-2.355a.743.743,0,0,1,1.485-.058s.154,1.765.187,2.321a3.136,3.136,0,0,0,.631,1.708,2.21,2.21,0,0,0,1.934.832H45.4a.757.757,0,0,1,0,1.514Zm4.986-5.1v-1.307a.75.75,0,1,1,1.5,0v1.306a.75.75,0,1,1-1.5,0h0Zm2.5-2.146a1.8,1.8,0,0,0-1.755-1.365,1.831,1.831,0,0,0-1.78,1.368.75.75,0,0,1-.716.559.766.766,0,0,1-.111-.008,17.064,17.064,0,0,1-7.05-2.645A.759.759,0,0,1,40,368.92v-3.5a3.836,3.836,0,0,1,3.819-3.842h1.954a2.975,2.975,0,0,1,2.931-2.605h2.583a2.974,2.974,0,0,1,2.939,2.605h1.964A3.83,3.83,0,0,1,60,365.421v3.5a.761.761,0,0,1-.336.632,17.077,17.077,0,0,1-7.081,2.653.762.762,0,0,1-.1.006.75.75,0,0,1-.73-.57Zm1.214-1.029a15.654,15.654,0,0,0,5.535-2.106v-3.085a2.321,2.321,0,0,0-2.308-2.329H50.005a.757.757,0,0,1,0-1.514h2.7a1.465,1.465,0,0,0-1.415-1.09H48.7a1.467,1.467,0,0,0-1.456,1.472v.373a.752.752,0,0,1-.745.758H43.819a2.326,2.326,0,0,0-2.318,2.33v3.085a15.6,15.6,0,0,0,5.513,2.1,3.335,3.335,0,0,1,2.98-1.84,3.286,3.286,0,0,1,2.97,1.849Z"
                                transform="translate(-40 -358.974)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.Tools')}}
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.941" height="19" viewBox="0 0 19.941 19">
                            <path id="payout_iocn" data-name="payout iocn"
                                d="M53.532,427.318a.674.674,0,0,1,.665-.682,4.5,4.5,0,0,0,4.439-4.554v-5.717H55.362a2,2,0,0,0,0,4.008h1.36a.682.682,0,0,1,0,1.364h-1.36a3.369,3.369,0,0,1,0-6.736h3.274v-.082a4.5,4.5,0,0,0-4.439-4.555h-8.4a4.444,4.444,0,0,0-4.205,3.164h8.762a.682.682,0,0,1,0,1.364H41.357v7.189a4.5,4.5,0,0,0,4.439,4.554h4.228a.682.682,0,0,1,0,1.364H45.792a5.851,5.851,0,0,1-5.768-5.917v-7.163A5.851,5.851,0,0,1,45.792,409h8.4a5.852,5.852,0,0,1,5.769,5.919v7.162A5.852,5.852,0,0,1,54.2,428,.674.674,0,0,1,53.532,427.318Zm1.974-8.329a.682.682,0,0,1,0-1.364h.3a.682.682,0,0,1,0,1.364Z"
                                transform="translate(-40.025 -409)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.Fund_Management')}}

                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.189" height="20.762"
                            viewBox="0 0 15.189 20.762">
                            <g id="Iconly_Curved_Profile" data-name="Iconly/Curved/Profile"
                                transform="translate(-1671.25 -296.65)" style="isolation: isolate">
                                <g id="Profile">
                                    <path id="Stroke-1"
                                        d="M1678.844,316.662c-3.692,0-6.844-.574-6.844-2.875s3.133-4.425,6.844-4.425c3.692,0,6.845,2.1,6.845,4.4S1682.556,316.662,1678.844,316.662Z"
                                        fill="none" stroke="#7a86a1" stroke-width="1.5" />
                                    <path id="Stroke-3" d="M1678.837,306.174a4.372,4.372,0,1,0-.031,0Z" fill="none"
                                        stroke="#7a86a1" stroke-width="1.5" />
                                </g>
                            </g>
                        </svg>
                        {{__('massage.Profile')}}
                    </li>
                </ul>
            </div>
            <div class="second-left-container">
                <h5 style="margin-left: 18%">{{__('massage.insights')}}</h5>
                <ul class="list">
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.988" height="18" viewBox="0 0 19.988 18">
                            <path id="inbox_icon" data-name="inbox icon"
                                d="M45.807,540a5.83,5.83,0,0,1-5.8-5.845v-6.31a5.822,5.822,0,0,1,5.8-5.845H54.2a5.84,5.84,0,0,1,5.8,5.845v1.462a.71.71,0,0,1-.706.713h0l-.01-.02a.7.7,0,0,1-.5-.209.716.716,0,0,1-.207-.5v-1.446a4.437,4.437,0,0,0-4.373-4.41H45.807a4.438,4.438,0,0,0-4.373,4.41v6.309a4.438,4.438,0,0,0,4.373,4.411H54.2a4.437,4.437,0,0,0,4.375-4.411.715.715,0,0,1,1.423,0A5.84,5.84,0,0,1,54.2,540Zm2.248-8.02-4.119-3.324a.725.725,0,0,1-.106-1.007.7.7,0,0,1,.983-.113l.007.006,4.153,3.316a1.423,1.423,0,0,0,1.768,0l4.11-3.316h.009a.711.711,0,0,1,.884,1.114l-4.11,3.324A2.836,2.836,0,0,1,48.055,531.98Z"
                                transform="translate(-40.011 -522)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.inbox')}}
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.977" height="19.594"
                            viewBox="0 0 16.977 19.594">
                            <path id="Notifications_icon" data-name="Notifications icon"
                                d="M46.692,589.954a.731.731,0,0,1,.095-1.043l.005,0a.778.778,0,0,1,1.075.1,2.046,2.046,0,0,0,.417.4,2.009,2.009,0,0,0,2.773-.4h.009a.779.779,0,0,1,1.076-.1.73.73,0,0,1,.105,1.041l-.005.006a3.531,3.531,0,0,1-4.884.658,3.461,3.461,0,0,1-.671-.658Zm-1.639-2.724a4.863,4.863,0,0,1-3.066-1.507,3.95,3.95,0,0,1-.966-2.683v-.12a4.072,4.072,0,0,1,.727-2.057l.072-.089a3.729,3.729,0,0,0,.886-1.724v-1.776a.769.769,0,0,1,.994-.416.752.752,0,0,1,.468.57V579.2a.412.412,0,0,1,0,.1,5.117,5.117,0,0,1-1.223,2.4,2.446,2.446,0,0,0-.389,1.225v.19a2.493,2.493,0,0,0,.584,1.68,3.341,3.341,0,0,0,2.073.966,40.756,40.756,0,0,0,8.576,0,3.347,3.347,0,0,0,2.117-1.009,2.462,2.462,0,0,0,.558-1.629v-.2a2.539,2.539,0,0,0-.38-1.232,5.133,5.133,0,0,1-1.3-2.4.551.551,0,0,1,0-.1v-1.787c-.257-2.6-2.924-4.213-5.244-4.213a5.835,5.835,0,0,0-2.817.715.781.781,0,0,1-.776,0,.73.73,0,0,1-.279-1.007.746.746,0,0,1,.316-.293,7.336,7.336,0,0,1,3.49-.905c3.064,0,6.5,2.12,6.89,5.526v1.776a3.651,3.651,0,0,0,.886,1.724.729.729,0,0,1,.071.1A3.923,3.923,0,0,1,58,582.843l-.027.18a4.008,4.008,0,0,1-.94,2.7,4.913,4.913,0,0,1-3.118,1.509,41.526,41.526,0,0,1-8.858,0Z"
                                transform="translate(-41.02 -571.714)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.Notification')}}
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.642" height="19.997"
                            viewBox="0 0 19.642 19.997">
                            <path id="chat_icon" data-name="chat icon"
                                d="M47.851,640.763a.751.751,0,0,1-.559-.895.736.736,0,0,1,.878-.57h0a8.342,8.342,0,0,0,9.945-6.466A8.5,8.5,0,0,0,51.768,622.7a8.191,8.191,0,0,0-1.8-.2h-.006A8.422,8.422,0,0,0,41.618,631a8.629,8.629,0,0,0,.946,3.934l.188.375a2,2,0,0,1,.132,1.482q-.3.8-.52,1.633c.551-.169,1.22-.421,1.711-.6l.2-.074a.731.731,0,0,1,.941.45.753.753,0,0,1-.442.959l-.2.073a23.221,23.221,0,0,1-2.4.791.781.781,0,0,1-.174.018,1.172,1.172,0,0,1-.874-.34,1.324,1.324,0,0,1-.331-1,.826.826,0,0,1,.019-.148,17.689,17.689,0,0,1,.677-2.245.483.483,0,0,0-.048-.309l-.19-.374a10.091,10.091,0,0,1,4.164-13.489A9.67,9.67,0,0,1,49.964,621h.012a10,10,0,0,1-.009,20,9.653,9.653,0,0,1-2.11-.235ZM53.114,631a1.167,1.167,0,1,1,1.168,1.188A1.178,1.178,0,0,1,53.114,631ZM48.8,631a1.167,1.167,0,1,1,1.168,1.188A1.178,1.178,0,0,1,48.8,631h0Zm-4.328,0a1.167,1.167,0,1,1,1.167,1.189A1.178,1.178,0,0,1,44.468,631Z"
                                transform="translate(-40.143 -621)" fill="#7a86a1" />
                        </svg>
                        {{__('massage.Chat')}}
                    </li>
                </ul>
            </div>
            <div class="third-left-container">
                <svg class="svg-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="margin-left: 1rem" width="200" height="100" viewBox="0 0 212 102">
                    <defs>
                        <linearGradient id="linear-gradient" y1="0.963" x2="1" y2="0.037"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#8e5bda" />
                            <stop offset="0.66" stop-color="#ad6be0" />
                            <stop offset="1" stop-color="#cb7ae6" />
                        </linearGradient>
                        <clipPath id="clip-path">
                            <rect id="bg" width="212" height="102" rx="30" transform="translate(40 833)"
                                fill="url(#linear-gradient)" />
                        </clipPath>
                    </defs>
                    <g id="get_pro_now" data-name="get pro now" transform="translate(-40 -833)">
                        <g id="bg_image" data-name="bg &amp; image">
                            <g id="bg_" data-name="bg ">
                                <g id="bg_2" data-name="bg ">
                                    <rect id="bg-2" data-name="bg" width="212" height="102" rx="30"
                                        transform="translate(40 833)" fill="url(#linear-gradient)" />
                                </g>
                                <g id="Clip" clip-path="url(#clip-path)">
                                    <image id="your_image_here" data-name="your image here" width="86" height="92"
                                        transform="translate(16 823)"
                                        xlink:href="data:image/png;base64,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" />
                                    <image id="your_image_here-2" data-name="your image here" width="75" height="75"
                                        transform="translate(178 883)" opacity="0.4"
                                        xlink:href="data:image/png;base64,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" />
                                </g>
                            </g>
                        </g>
                        <g id="text">
                            <text id="Get_Pro_Now-2" data-name="Get Pro Now" transform="translate(153 913.073)"
                                fill="#fff" font-size="16" font-family="SegoeUI, Segoe UI">
                                <tspan x="-45.168" y="0">{{__('massage.Get_Pro_Now')}}</tspan>
                            </text>
                            <text id="Get_Free_Moonths_of_Premium" data-name="Get Free Moonths
              of Premium" transform="translate(104.973 864.568)" fill="#f6efff" font-size="14"
                                font-family="SegoeUI, Segoe UI">
                                <tspan x="0" y="0">{{__('massage.Get_Free_Months')}}</tspan>
                                <tspan x="0" y="20">{{__('massage.Premium')}}</tspan>
                            </text>
                            <path id="arrow"
                                d="M218.324,913.793a.648.648,0,0,1-.059-.869l.059-.068,4.329-4.187H210.68a.661.661,0,0,1-.083-1.319l.083,0H224.3a.681.681,0,0,1,.629.409.647.647,0,0,1-.088.651l-.061.066-5.495,5.319a.7.7,0,0,1-.954.009l-.009-.009Zm3.1-7.643-.067-.057-3.035-2.936a.649.649,0,0,1,0-.936.7.7,0,0,1,.895-.061l.071.06,3.03,2.933a.651.651,0,0,1,0,.937.7.7,0,0,1-.893.061Z"
                                fill="#fff" />
                        </g>
                    </g>
                </svg>
            </div>
        </header>
    <main class="main">
      <div class="title">
        <section class="search-bar" style="display: flex; justify-content: end;">
          <form action="#">
            <button style="
                  background-color: rgba(255, 255, 255, 0);
                  border: 0px;
                  margin-top: 1vh;
                ">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 19.816 19.862">
                <path id="search_icon" data-name="search icon" d="M1196.5,71.527,1193.1,68.19h0l-.08-.122a.8.8,0,0,0-1.126,0h0a8.026,8.026,0,0,1-10.422.338,7.635,7.635,0,0,1-1.69-10.081,7.991,7.991,0,0,1,9.984-2.947,7.691,7.691,0,0,1,4.274,9.318.774.774,0,0,0,.18.766.814.814,0,0,0,.767.23.793.793,0,0,0,.588-.536h0a9.274,9.274,0,0,0-4.954-11.17,9.652,9.652,0,0,0-12.016,3.121,9.2,9.2,0,0,0,1.347,12.108,9.684,9.684,0,0,0,12.42.511l3.016,2.955a.811.811,0,0,0,1.127,0,.78.78,0,0,0,.011-1.1l-.011-.011h0Z" transform="translate(-1176.928 -53.049)" />
              </svg>
            </button>
            <input type="search" placeholder="{{__('massage.search')}}" style="border: 0px; height: 39px; padding-left: 10px" />
          </form>
          <span class="menue-btn">
            <svg viewBox="0 0 100 80" width="40" height="20">
              <rect width="100" height="10" fill="#3f4450b2"></rect>
              <rect y="30" width="100" height="10" fill="#3f4450b2"></rect>
              <rect y="60" width="100" height="10" fill="#3f4450b2"></rect>
            </svg>
          </span>
          <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        {{ Config::get('languages')[App::getLocale()] }}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach (Config::get('languages') as $lang => $language)
                      @if ($lang != App::getLocale())
          <li><a class="dropdown-item aref" href="{{ route('lang.switch', $lang) }}">{{$language}}</a></li>
          @endif
                  @endforeach

        </ul>
      </div>
          <!-- <button class="absolute top-5 right-5 rounded-lg border-2 border-[#979797] px-2 py-1 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Config::get('languages')[App::getLocale()] }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <a class="dropdown-item aref" href="{{ route('lang.switch', $lang) }}">{{$language}}</a></li>
                @endif
            @endforeach
         -->
                        </ul>
        </section>
        <section style="margin-top: -3vh">
          <h1 class="sub-title" style="margin-bottom: 0%"> {{__('massage.Statement')}}</h1>
          <small style="color: rgba(0, 0, 0, 0.699)">{{__('massage.Daily_account_Summary')}} - MT5 </small>
        </section>
        <div style="display: flex; flex-direction: column; margin-top: 30px;">
          <div style="display: flex;">
            <svg style="  margin-right: 6px;" xmlns="http://www.w3.org/2000/svg" width="27.766" height="27.763" viewBox="0 0 27.766 27.763">
              <path id="arrow" d="M478.422,356.842a13.421,13.421,0,1,1,13.423-13.421v.376A13.422,13.422,0,0,1,478.422,356.842Zm0-14.736h0l3.946,3.958a1,1,0,0,0,1.416.02l.007-.007a1.006,1.006,0,0,0,.3-.723.979.979,0,0,0-.3-.7l-4.658-4.684a1,1,0,0,0-1.418,0l0,0-4.658,4.684a.94.94,0,0,0-.3.7,1,1,0,0,0,.3.725,1.015,1.015,0,0,0,.71.29.983.983,0,0,0,.713-.3l3.946-3.958Z" transform="matrix(-0.999, 0.035, -0.035, -0.999, 503.999, 340.397)" fill="#6149cd" />
            </svg>
            <p>{{__('massage.account')}}</p>

          </div>
          <p style="font-size: 21px;">{{__('massage.Withdraw_History')}}</p>
          <div class="table">
            <div class="table_head" style="display: flex;">
              <section class="search-bar" style="display: flex; justify-content: start; width: 35%;">
                <form action="#">
                  <button style="
                              background-color: rgba(255, 255, 255, 0);
                              border: 0px;
                              margin-top: 1vh;
                            ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 19.816 19.862">
                      <path id="search_icon" data-name="search icon" d="M1196.5,71.527,1193.1,68.19h0l-.08-.122a.8.8,0,0,0-1.126,0h0a8.026,8.026,0,0,1-10.422.338,7.635,7.635,0,0,1-1.69-10.081,7.991,7.991,0,0,1,9.984-2.947,7.691,7.691,0,0,1,4.274,9.318.774.774,0,0,0,.18.766.814.814,0,0,0,.767.23.793.793,0,0,0,.588-.536h0a9.274,9.274,0,0,0-4.954-11.17,9.652,9.652,0,0,0-12.016,3.121,9.2,9.2,0,0,0,1.347,12.108,9.684,9.684,0,0,0,12.42.511l3.016,2.955a.811.811,0,0,0,1.127,0,.78.78,0,0,0,.011-1.1l-.011-.011h0Z" transform="translate(-1176.928 -53.049)" />
                    </svg>
                  </button>
                  <input type="search" placeholder="{{__('massage.sch')}}" style="border: 0px;
                                        height: 39px; padding-left: 10px; width: 70%; " />
                </form>
                <span class="menue-btn">
                  <svg viewBox="0 0 100 80" width="40" height="20">
                    <rect width="100" height="10" fill="#3f4450b2"></rect>
                    <rect y="30" width="100" height="10" fill="#3f4450b2"></rect>
                    <rect y="60" width="100" height="10" fill="#3f4450b2"></rect>
                  </svg>
                </span>
              </section>
              <div style="display: flex;">
                <div>

                  <form style="width: 112%;"
                   action="  {{route('demos.filter')}}  " id="form" method="post">
                    @csrf

                    <input hidden type="text" name="login" value="{{$login}}">
                    <div style="width: 92%; border: 1px solid rgba(128, 128, 128, 0.5);
                    border-radius: 10px;
                    " >
                    <svg style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" width="27.995" height="27.031" viewBox="0 0 14.995 17.031">
                      <path id="icon_calendar" data-name="icon calendar" d="M157.29,5105.007h-.009a4.24,4.24,0,0,1-3.116-1.176,4.432,4.432,0,0,1-1.157-3.184l-.009-7.089a4.392,4.392,0,0,1,1.015-2.979,4.076,4.076,0,0,1,2.738-1.3v-.639a.666.666,0,0,1,.183-.471.629.629,0,0,1,.9.013.66.66,0,0,1,.18.457v.6l4.885-.007v-.6a.665.665,0,0,1,.182-.47.629.629,0,0,1,.9.013.659.659,0,0,1,.18.455v.639a4.1,4.1,0,0,1,2.766,1.266,4.308,4.308,0,0,1,1.049,2.967l.009,7.174a3.988,3.988,0,0,1-4.271,4.32Zm6.572-4.945a.7.7,0,1,0,.008,0Zm-6.768,0h0a.718.718,0,0,0-.673.732.693.693,0,0,0,.676.681h.032a.667.667,0,0,0,.471-.226.708.708,0,0,0,.179-.511.684.684,0,0,0-.682-.681Zm3.388,0h0a.721.721,0,0,0-.673.733.693.693,0,0,0,.678.682h.03a.7.7,0,0,0,.649-.733.684.684,0,0,0-.682-.681ZM157.091,5097h0a.718.718,0,0,0-.673.732.691.691,0,0,0,.676.682h.033a.667.667,0,0,0,.469-.226.71.71,0,0,0,.178-.511.684.684,0,0,0-.681-.681Zm3.389-.03h0a.718.718,0,0,0-.674.732.693.693,0,0,0,.679.682h.03a.7.7,0,0,0,.648-.733.684.684,0,0,0-.682-.681Zm3.39,0h0a.7.7,0,0,0-.673.715v.01a.685.685,0,0,0,.684.682h.016a.7.7,0,0,0-.023-1.4Zm-7.116-6.391c-1.653.17-2.491,1.171-2.489,2.974v.265l12.45-.017v-.3c-.033-1.8-.889-2.786-2.544-2.933v.656a.644.644,0,0,1-.634.652.629.629,0,0,1-.449-.187.667.667,0,0,1-.181-.464v-.689l-4.885.007v.688a.644.644,0,0,1-.637.651.63.63,0,0,1-.446-.186.666.666,0,0,1-.181-.465v-.655Z" transform="translate(-152.996 -5087.981)" fill="#6149cd" />
                    </svg>

                    <input id="daterange" style="height: 39px;
                                  border: 0px ;
                                  /* border-radius: 20px; */
                                  /* padding: 5px; */
                                  text-align: center;
                                  margin-left: -14px;
                                    background: none;
                                  color:#7A86A1;
                                height: 39px;" type="text" name="daterange" />
                                </div>

                  </form>
                </div>

                <div>
                  <form action="  {{route('demos.filter')}}  " id="form" method="post">
                    @csrf

                    <select style="    width: 124px;
                                        height: 39px;
                                        border: 1px solid gray;
                                        /* border-radius: 20px; */
                                                color:#7A86A1;
                                        text-align: center;" onchange="this.form.submit()" name="date" class="form-select" aria-label="Default select example">
                      <option selected>{{__('massage.Select_date')}} </option>
                      <option value="Today">{{__('massage.Today')}}</option>
                      <option value="Yesterday">{{__('massage.Yesterday')}}</option>
                      <option value="This Week">{{__('massage.This_Week')}}</option>
                      <option value="Last Week">{{__('massage.Last_Week')}}</option>
                      <option value="This Month">{{__('massage.This_Month')}}</option>
                      <option value="Last Month">{{__('massage.Last_Month')}}</option>
                    </select>
                    <input hidden type="text" name="login" value="{{$login}}">
                  </form>
                </div>


              </div>
              <div class="dropdown2">

                <svg class="dropbtn" onclick="myFunction()" style="margin-top: -6px; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 46 45">
                  <g id="button_dowload" data-name="button dowload" transform="translate(0.167 0.036)">
                    <g id="bg_copy" data-name="bg copy" transform="translate(-0.167 -0.036)" fill="#fff" stroke="#ebebeb" stroke-width="1">
                      <rect width="46" height="45" rx="19" stroke="none" />
                      <rect x="0.5" y="0.5" width="45" height="44" rx="18.5" fill="none" />
                    </g>
                    <path id="icon_dowload" data-name="icon dowload" d="M1307.007,1011.834v-3.2a.584.584,0,1,1,1.165-.08l.005.08v3.2h3.632a3.529,3.529,0,0,1,3.381,3.5v4.2a3.552,3.552,0,0,1-3.216,3.656h-8.608a3.517,3.517,0,0,1-3.374-3.5V1015.5a3.554,3.554,0,0,1,3.208-3.657l.158,0h3.647v5.115l-1.216-1.322a.554.554,0,0,0-.811-.018l-.017.018a.694.694,0,0,0-.061.821l.061.08,2.212,2.409a.547.547,0,0,0,.771.057l.057-.057,2.211-2.409a.677.677,0,0,0,0-.9.553.553,0,0,0-.76-.062l-.065.062-1.208,1.32v-5.115Z" transform="translate(-1285.171 -993.528)" fill="#7a86a1" />
                  </g>
                </svg>

                <div id="myDropdown" class="dropdown-content">


                  <a style=" background: white;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
  <path id="icon_print" data-name="icon print" d="M681.136,4325h-5.129a3.33,3.33,0,0,1-3.046-3.533v-.977h-.331a1.632,1.632,0,0,1-1.63-1.629v-.491a1.632,1.632,0,0,1,1.63-1.63h.331v-3.357a3.185,3.185,0,0,1,2.91-3.383h3.445a.325.325,0,0,1,.3.345v2.415a2.371,2.371,0,0,0,2.156,2.505c.278,0,.518,0,.73,0h1.249a.316.316,0,0,1,.291.336v1.138h.331a1.631,1.631,0,0,1,1.629,1.63v.491a1.631,1.631,0,0,1-1.629,1.629h-.331v1.143A3.169,3.169,0,0,1,681.136,4325Zm1.924-7.5a1.132,1.132,0,1,0,.969,1.12A1.055,1.055,0,0,0,683.06,4317.5Zm-8.81,0v1.51h6.53v-1.51Zm9.208-3.325h-.635c-.378,0-.735,0-.968-.005a1.432,1.432,0,0,1-1.3-1.514v-1.977a.336.336,0,0,1,.3-.36.292.292,0,0,1,.229.111l2.6,3.14a.4.4,0,0,1-.01.506A.3.3,0,0,1,683.458,4314.175Z" transform="translate(-671 -4310)" fill="#6149cd"/>
</svg>

                   <button onclick="tablePrint()" style="background: none;
                                        color: inherit;
                                        border: none;
                                        padding: 0;
                                        font: inherit;
                                        cursor: pointer;
                                        outline: inherit;" type="submit">{{__('massage.Print')}} </button> </a>
                                        <hr>
                                        <div style="text-align: center;">
                                            <span style="font-size: 10px; ">{{__('massage.DOWNLOAD_OPTION')}}</span>
                                        </div>
                                        <a style=" background: white;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="27" viewBox="0 3 13 27">
                                                <text id="_" data-name="" transform="translate(0 22)" fill="#f96767" font-size="20" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0"></tspan></text>
                                              </svg>

                                           <button id="btnExport"  onclick="Export()" style="background: none;
                                           color: inherit;
                                           border: none;
                                           padding: 0;
                                           font: inherit;
                                           cursor: pointer;
                                           outline: inherit;">
                                    .PDF</button> </a>

                  <a style=" background: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="27" viewBox="0 3 13 27">
                        <text id="_" data-name="" transform="translate(0 22)" fill="#6149cd" font-size="20" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0"></tspan></text>
                      </svg>

                   <button onclick="exportData()" style="background: none;
                   color: inherit;
                   border: none;
                   padding: 0;
                   font: inherit;
                   cursor: pointer;
                   outline: inherit;">
            .CSV</button> </a>



                  {{-- <a href="{{route('demos.show',$demo['login'])}}">State</a> --}}
                </div>
              </div>
            </div>
            <div id="table">
              <table id="tblStocks" class="table table-borderless">
                <tr>
                  <th>{{__('massage.Login')}}</th>
                  <th>{{__('massage.Date')}}</th>
                  <th>{{__('massage.BALANCE')}}</th>
                  <th>{{__('massage.Profit-Closed')}}</th>
                  <th>{{__('massage.Profit-Floating')}}</th>
                  <th>{{__('massage.Equity')}}</th>
                  <th></th>
                </tr>

                @if($trades!==null)
                @foreach($trades as $trade)
                <tr>
                  <td>{{$trade->Login}}</td>
                  <td>{{(date('Y-m-d h:i:s',$trade->TimeSetup))}} </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="15.187" height="12.152" viewBox="0 0 15.187 12.152">
                      <path id="icon_view" data-name="icon view" d="M1322.577,1169.152c-3.136,0-5.956-2.191-7.543-5.862a.551.551,0,0,1,0-.434c1.585-3.667,4.4-5.856,7.543-5.856h.008a7.068,7.068,0,0,1,4.357,1.554,10.813,10.813,0,0,1,3.19,4.3.551.551,0,0,1,0,.434c-1.584,3.672-4.407,5.862-7.547,5.862Zm-2.955-6.076a2.962,2.962,0,1,0,2.978-2.946h-.016A2.954,2.954,0,0,0,1319.622,1163.076Zm1.11,0a1.886,1.886,0,0,1,.037-.361h.037a1.519,1.519,0,0,0,1.519-1.459,1.511,1.511,0,0,1,.258-.023,1.837,1.837,0,1,1-1.852,1.842Z" transform="translate(-1314.989 -1157)" fill="#c0bdcc" />
                    </svg>
                  </td>
                </tr>


                @endforeach
                @endif

              </table>


            </div>
            <div style="display: flex; justify-content: end;">{{ $trades->links() }}</div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-7">
              <div>
  <canvas id="myChart" width="500px" ></canvas>
</div>


              </div>
              <div class="col-5 ml-3">
              <div>
  <canvas id="BarChart" width="500px" height="350px" ></canvas>
</div>

              </div>

            </div>
          </div>
        </div>
      </div>






    </main>

    <div class="arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="12.79" height="12.705" viewBox="0 0 12.79 12.705">
        <path id="icon_arrow_left" data-name="icon / arrow left" d="M266,517.29l10.7-5.645L266,506" transform="translate(-265.627 -505.292)" fill="none" stroke="#7a86a1" stroke-width="1.6" />
      </svg>
    </div>
    <footer class="footer">
            <div style="
            display: flex;
            justify-content: end;
            background-image: url('img/your\ image\ here.png');
            width: 400px;
            height: 375px;
          ">
                <div style="display: flex; margin-right: 150px; flex-direction: column">
                    <img style="margin-bottom: 0; width: 200px; height: 200px" src={{asset('img/dashimgs/image.png')}}
                        alt="" />
                    <div style="margin-top: -50px">{{__('massage.Mr')}}</div>
                    <small>hulul@example.com</small>
                    <div style="
                display: flex;
                justify-content: center;
                gap: 15px;
                margin-top: 5vh;
              ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.992" height="19.992"
                            viewBox="0 0 19.992 19.992">
                            <g id="Group_10" data-name="Group 10" transform="translate(-1783.999 99.993)">
                                <path id="activities_icon" data-name="activities icon"
                                    d="M1853.3,74a.74.74,0,0,1-.743-.731.75.75,0,0,1,.743-.74h2.951c2.924,0,4.54-1.6,4.566-4.526V61.537a.729.729,0,0,1,1.458,0V68c0,3.7-2.315,5.993-6.025,5.993ZM1843,68V60.811c0-3.712,2.306-6.012,6.016-6.012h6.5a.743.743,0,0,1,.733.74.733.733,0,0,1-.735.732h-6.5c-2.924,0-4.54,1.612-4.54,4.535V68c0,2.924,1.616,4.526,4.54,4.526a.749.749,0,0,1,.743.74.74.74,0,0,1-.739.735C1845.305,74,1843,71.7,1843,68Zm4.646-.607a.74.74,0,0,1-.132-1.031l2.889-3.75a.745.745,0,0,1,1.042-.132l2.712,2.123,2.386-3.039a.732.732,0,0,1,1.151.878l-2.827,3.637a.788.788,0,0,1-.5.282.743.743,0,0,1-.539-.158l-2.71-2.122-2.438,3.161a.734.734,0,0,1-1.035.151Zm10.148-10.773a2.6,2.6,0,1,1,2.616,2.58h-.017a2.583,2.583,0,0,1-2.6-2.567Zm1.475,0a1.121,1.121,0,1,0,1.125-1.118h0a1.121,1.121,0,0,0-1.12,1.118Z"
                                    transform="translate(-59 -154)" fill="#6149cd" />
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.677" viewBox="0 0 20 18.677">
                            <g id="setting" transform="translate(-176 -997.073)">
                                <path id="setting_icon" data-name="setting icon"
                                    d="M188.473,1012.058a3.706,3.706,0,0,1,3.761-3.641,3.885,3.885,0,0,1,.84.091.853.853,0,0,1,.668,1.013l0,.007a.885.885,0,0,1-1.057.643,2.025,2.025,0,0,0-2.4,1.527,1.957,1.957,0,0,0-.044.358,2,2,0,0,0,4,0,1.893,1.893,0,0,0-.027-.321.858.858,0,0,1,.724-.98h0a.88.88,0,0,1,1.015.7,3.525,3.525,0,0,1,.051.6,3.762,3.762,0,0,1-7.523,0h0Zm-11.592.853a.854.854,0,1,1,0-1.708h7.235a.854.854,0,1,1,0,1.708h-7.235Zm-.882-12.2a3.5,3.5,0,0,1,.052-.6.879.879,0,0,1,1.015-.7.858.858,0,0,1,.725.98h0a2.005,2.005,0,1,0,2-1.612,2.036,2.036,0,0,0-.475.049.881.881,0,0,1-1.06-.638.852.852,0,0,1,.656-1.019h0a3.767,3.767,0,0,1,4.511,2.772,3.626,3.626,0,0,1,.095.771,3.764,3.764,0,0,1-7.523,0Zm11.882.854a.854.854,0,1,1,0-1.708h7.233a.854.854,0,1,1,0,1.708Z"
                                    fill="#6149cd" />
                            </g>
                        </svg>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="19.946" height="18.952"
                            viewBox="0 0 19.946 18.952">

                            <g id="log_out" data-name="log out" transform="translate(-231.991 -997.02)">
                                <path id="log_out_icon" data-name="log out icon"
                                    d="M236.309,1015.971a4.273,4.273,0,0,1-4.319-4.214.738.738,0,0,1,.747-.729h0a.738.738,0,0,1,.748.728h0a2.793,2.793,0,0,0,2.823,2.755h4.734a2.783,2.783,0,0,0,2.816-2.745v-.892a.748.748,0,1,1,1.5,0v.892a4.262,4.262,0,0,1-4.312,4.2Zm11.512-6.2a.717.717,0,0,1-.018-1.014l.018-.018,1.556-1.51H239.52a.73.73,0,0,1,0-1.46h11.67a.748.748,0,0,1,.691.452.719.719,0,0,1-.164.8l-2.839,2.757a.761.761,0,0,1-1.057,0Zm-15.831-1.329v-7.215a4.263,4.263,0,0,1,4.311-4.2h4.734a4.273,4.273,0,0,1,4.321,4.214v.883a.748.748,0,0,1-1.5,0v-.883a2.793,2.793,0,0,0-2.824-2.755H236.3a2.783,2.783,0,0,0-2.815,2.745v7.215a.748.748,0,0,1-1.5,0Zm16.55-3.491-.716-.69a.716.716,0,0,1-.019-1.013l.019-.018a.758.758,0,0,1,1.057-.005l.715.689a.717.717,0,0,1,.023,1.014l-.018.018a.761.761,0,0,1-1.057.005Z"
                                    fill="#6149cd" />
                            </g>
                        </svg></a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </div>
            <hr style="width: 70%; text-align: left; margin-top: -100px" />
            <div style="display: flex; flex-direction: column;">
                <div style="display: flex; margin: auto; margin-bottom: 2vh; gap: 70px">
                    <div style="display: flex; gap: 15px">
                        <svg style="margin-top: 0vh" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 14.989 14.903">
                            <path id="icon_star" data-name="icon star"
                                d="M1338.933,562.092a.888.888,0,0,0-.239.761l.666,3.859a.865.865,0,0,1-.337.847.793.793,0,0,1-.877.063l-3.319-1.812a.817.817,0,0,0-.375-.1h-.2a.589.589,0,0,0-.2.071l-3.32,1.82a.84.84,0,0,1-.532.086.87.87,0,0,1-.667-1l.667-3.859a.9.9,0,0,0-.239-.768l-2.706-2.745a.875.875,0,0,1-.2-.886.853.853,0,0,1,.666-.588l3.724-.565a.834.834,0,0,0,.66-.478l1.64-3.521a.813.813,0,0,1,.15-.212l.068-.055a.5.5,0,0,1,.121-.1l.082-.031.127-.055h.315a.839.839,0,0,1,.659.471l1.663,3.506a.836.836,0,0,0,.622.478l3.724.565a.86.86,0,0,1,.682.588.879.879,0,0,1-.217.886Z"
                                transform="translate(-1327.004 -552.821)" fill="#f9b035" />
                        </svg>
                        <div style="font-size: large; font-weight: bold">{{__('massage.Quick_Links')}}</div>
                    </div>
                </div>
                <ul style="display: flex; list-style: none; gap: 5%">
                    <li onclick="openModal()" class="right-link">{{__('massage.Deposit')}}</li>
                    <li  onclick="openModal2()" class="right-link">{{__('massage.Withdraw')}}</li>
                </ul>
                <ul style="display: flex; list-style: none; gap: 5%">
                    <li class="right-link">{{__('massage.Transfer')}}</li>
                    <li class="right-link">{{__('massage.History')}}</li>
                </ul>
                <ul style="display: flex; list-style: none; gap: 5%">
                    <li class="right-link">{{__('massage.Exchange')}}</li>
                    <li class="right-link">{{__('massage.Bonuses')}}</li>
                </ul>
                <ul style="display: flex; list-style: none; gap: 5%">
                    <li class="right-link">MT5</li>
                    <li class="right-link">{{__('massage.Partner')}}</li>
                </ul>
            </div>
            <hr style="width: 70%; text-align: left; margin-top: 4vh" />
            <div style="display: flex;flex-direction: column;margin-top: 15px;justify-content: space-around;gap: 5vh;">
                <div style="display: flex;justify-content: space-evenly;">
                    <div>
                    {{__('massage.Latest_Activities')}}
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="4.001" viewBox="0 0 18 4.001">
                        <path id="icon_more" data-name="icon more"
                            d="M1854,959a2,2,0,1,1,2,2A2,2,0,0,1,1854,959Zm-7,0a2,2,0,1,1,2,2A2,2,0,0,1,1847,959Zm-7,0a2,2,0,1,1,2,2A2,2,0,0,1,1840,959Z"
                            transform="translate(-1840 -957)" fill="#c0bdcc" />
                    </svg>

                </div>
                <div style="display: flex;margin-left: 45px;">
                    <div>
                        <img src={{asset('img/dashimgs/avatar1.png')}} alt="avatar">
                    </div>
                    <section style="margin-top: 1vh;padding-left: 5px;">
                        <div>Tony Cook:<small>1hr20min</small></div>
                        <small style="font-size: 10px;">Added 2 file to project Evoo Design</small>
                    </section>
                </div>
                <div style="display: flex;margin-left: 45px;">
                    <div>
                        <img src={{asset('img/dashimgs/avatar2.png')}} alt="avatar">
                    </div>
                    <section style="margin-top: 1vh;padding-left: 5px;">
                        <div>Bod Dean: <small> 1hr20min</small></div>
                        <small style="font-size: 10px;">Added a new member </small>
                    </section>

                </div>
            </div>
            <div class="footer-of-all">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="180"
                    height="188" viewBox="0 0 180 188">
                    <g id="images" transform="translate(-1583 -1243)">
                        <image id="Your_image_here" data-name="Your image here" width="97" height="96"
                            transform="translate(1598 1262)"
                            xlink:href="data:image/png;base64,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" />
                        <image id="Your_image_here-2" data-name="Your image here" width="72" height="69"
                            transform="translate(1654 1243)"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAYAAADpc6CZAAAABHNCSVQICAgIfAhkiAAAHjZJREFUeF7FnAl4HdV5/t9z5s7ddLXL1mJZ3uRNBq94r10CGIIJUEjgIXEIBlKeNCEpbVbapGnzT8O/TSn0SUKahAQaIBAnNTimCSY8uDa2sY0NXmRZGEuWJVmyNmu/68ycPmebmXslbwm09+Eyc+/VMvPz+33nfO/5jgj+jx6dnYMhQlALYCoI8glIHoB8dTlJYicGjWRr2hhtSgbizYdiy//mzP/FpZL/jV86sOMnBYTi44TYN4A4VxDCKoBMPowAYIbhBGJgoTI4kQo4oUowGnQviwEg9gijybMdNNPTRlM9TTTdsxtO5qn8q76c/KCv/wMDNPD6z4qoPfx3NH3ujkC8pZogDRgOQBlA5ZHwc8Jf+46UwolMhp03C1ZsnngyIw9g/D/xP5BMPwLDhxI01fEeyQz9npHItwoWf37og4D1vgMa2Paja6g19F1zuGkRCxgEoSAQMCQQZxSEjYKyuAtJADIIwK+EcrlwAgDhRzj8BHZeHTL5K5ApXAmHxlxYjH9rsg1m/84ETfc2OLTwKwWLP//6+wnqfQPUt/1X1yAY/H8wzRV28VTKYhMBIwhCCL9H98jvnjpJ0EwfaPIMaLIVNNkCI/EeCEsrSI66R35UoDgsEFh5i5ApvA6Z2EIwRsAYAwcFaxShvt85xmhzs2NO+ErB4i+8+H6A+qMBdRxrKCdw/j+Lld4NM2IQSkD9UKgCJGQhQVGuFPD35a8XR2aDJk+Djh6DMXIIJHVKqonZ3pE5gGMDzIFjlCJTfBPShdfAIWEJijO0RhHu2cJo8swxhxZ8rGDpl979Y0D9UYBaW/s2EkIeo5QUeWAI+LmnGu+civcVKAVMstKgvFshmQGQkQOgw3tAU61gHJT7tOS5bYORCNLFtyJdeCNsDYox0GQnImdfSDmIvlCw7Msb/1BIfxCglpbeMkrJzwghN4ub1qpRAISCqA4rCciFI5SjPuNXzb9OJCAhquwHDx3+SJ8BHdwBY2QPYI+CMUsqycnIowCVh1TJHUgVXg/GDDhCUQzBgT0Intt9xjKr1hUt/ezxywV12YBOtfQspZRupoRU65s2WAY0MwzqpCQYMXxHgVABCA2IkCKEZuUiT0k+BZ2HD08ygpWdBBnZjcDANiDTDSYgcVhpwLYEKCdQicSE+5GJLHQhIX0OeZ0vjNq0+PNFSz/z1OVAuixAzad67jAoeSY41BUKdh2HOdAMc7QdxBmSQ3jAAVFH+ZoAeWVAfiVYrAYsfxqQXwsSLBNhpSJLHc93KQqOHOEhYDEbZORNBPpfBtIdYFxJFgdlARZXFZDJWylAWUahUJLjOIh0b7VooveJwpV//ZeXCumSATU3nf1stL3x+9GTbxBzpAMI2BJIwAEMec6hyNfqPGgAZgAIBEBMfm6CGAZYdCKQPweIzQaLzAIxQup6zxdjGo6cC4lRS4SQDTK8A4H+LUC6F8xWSlKQGMlHvOxepPLXuGoyBw4yc/Dos0UrH/rUpUC6JEBnduz6Vuz47m+YQ+0KigISsCUQDssPR7xHFBQDJGhKSAF5FE8ehvwZCANRDutKIDyDx+fY69bqkVNFOQ9SYSeOdgLGwH/B6P8NWCYhw01AIoBNkI6txsjE++GQCByHwRg9hVDfnv8oXvngRZP3RQF1bdr0WOy9Aw8RmvLB0erRoCSkrPAyKYhpCgURriKuHn40OCQFinJFmYDBJ5L8sygQnQtEFwBGURYooRopHEGIH7Wa5BDPwDJnYXY/DTL8NmBxNfEcxSFR2EY5hqseQiY4RUCiyQ6Eevf+a+mK+794ISVdEFD3fzz7lbxTh/+JGBZgKggqtAQQrR5x5PnHF2rBABDkcDiMoAtJwBGQggIKUUcBiD9llgdCk4FwHWBWjwXlh6NhaUh88j20A4Gun4KkBwHbEYA4KOaEMFLxABL5KySkRIcVOvfO58pW3P3j80E6L6DO5zcvi504tJeyOCEcislv3gaL5cEpLgWLREDC6sZJChRJEGsIxOoDsXpBeIIOmiAclMg9XE287NAKCir1cFASFriiqCEB6QzOlRSeD2ZO9u5BhZyeRbtK4iriCZnDyvTBPPtDGANviaTNITEOyiaIl96OkbJbNaT+YH/9dRNXfPzt8SCNC6jjuZeCkY5TPcHBzgIWMZCunYPM5FrYVdNBQhEQSsW8RjzFnEeei7KCn/PpTapLlBJEPJtB0p2AQSUkEVZBkEDIPeeQiABlKkA6F4npMcBrMA4q4IESYaZKDXmUocfVwZ+MOaC9WxA6+4xQkgQkn8nCD2Gw4pNweD03evrt0Ln61RP+5J4x7sC4gHqeePrVcFfLutEly5CcuwAkFFZAfGDGgZMFiZcU/gkjn9wlTwPxE0DyJIgTl2riI5gRAqEhpSQFSaZjb/LI6zSWAmghWGQFYJSponUsJA8Qn0c6wGgjwm2Pgqb6wWyZk2BRJAtWYmDSfbAZYA6dfLR6/sov5apoDKCOpzdfFxzo2TZ47XUUsXwYREPJgUOpq5xcMHoWLWuyscWqiJ5MD1j8OJBqEgoRQ72AFPLCS1ydD5STAlgS4EezVoDipYYe1URocVWpMNMqsjmBdD8ip/8ZdKTJVREHxfNRf829YFYqZTPMr62tPuGHNAbQmWe3HBpdumQBCQRgiFCi6qjCyB9eurTIDTENhkIVrnpS6E0OsxJKugNInQCsHqkiVa9J88d3uVyFApB6ciCRVWDhRRKMDjkfID5B1Ipy7DQi7T+C2bdHKEjnpXjxNeifdAefTL5cO6P85vMCannpv29J1k7dQkIhHxwOZnwV6dzDP9dVus5DUjk8zHxWB3/vQmOqMwqkTwGZVi4xqZ6sb+DDNoeTkOWFOE+BBarAYrfA4eGncpHDC38xsjngCpKq4rAchNt/jlD3awKSyEsWxeCkOzFUtoZ/vnJWbeVefZlZv/74O+/tQl50dbZyqFABNcaGmA6t3ILVhaITt/gtvtLiYlNYlgEyp4D0SV6p+sSm8hAPMQVHABKvASd2A1hkuUi8MrxkieEqSCdvx0Go49eIdLzsAoJtoKf2QcRjM7bNqq348BhARxpalxiUHtAhZYiw8YeXByhrFPOFWbblkV3Na+/Hn3cvxgk8pDIngfS7MkGLRM1nyPzIFZQCbA2ITwxTYMHZsIo2iFmzqxpbjmoCmqrL+Hm44zeInNnihptNS9BR90VYNLJ8zqyq/VnXeqSh9UmD0vtz845+TeEgkOZ2qQUKG+AjmxkEifCK3Tfcq6E+Nzn7AV0WJJGnU0DqMJA6lgOIw0rJGkxU9AoSKYBV+mnY5lQx1PMQ8xSlYTlwbIZo6/OIdG5X4WYgXrgQ3TM2PDVnVtV97nUeqm8ppJR2GJRGNZDg8BCi7Sdh9pyGOdQJmu6XM2c1YZSFKp9AAixWAFJYDhRWAcXTgKLpILFJY+2NHMlctM7JlZjdB4xulzmKq8tOg2lFCTj8mZHv2zaskrtg5V8jc5AIN/9ThZ7tIP/kzxDuOQjGE7dF0TXr/sRIYe2EeXOqR8U1Hqpv+SSl9BkOJ9rVjYID+xHuPi1hmLykUCWE/zyn1BhT1UcLgbJ5IBOWgJQuATFj40bUZUPiiTtZDwxvA7NHlGnGofA8xKFlwEQdJo927GqkJmwEAz0PIF7splFc/68I8GLcMpAxK9C+4HP3zp075WkN6HmD4a6yXW8hv6FeQtFKMbVSZKnhqUi9L3wf9b7rBfleG3wWFgAtXQRMXAtSvBQwIlmwLh8SLx2GwAZeBBI87LRhplQl4HBoPIelYYfnIVX9ZWHJeirSCpKJnCT7UHroUdBkQkDqmXrzm5OvuX0VOXik2QiA9FZsfaMo2npagskCpGEpEAKcD4rf6lDnub6QfG3I5Z9QHkjZGpCya4HIdBfUHwSJp6eRvUDfJsCOS9UIZ9FSKuKAOCgHTnA64lO/DpvmK0gyB0lgEpbZV4/S+qdEmCXypmXa528Mk4OHm68q293wVslbRwHTcgHJ0JI5x1UTV4qq6t0cpFWTa3fkmGd8sVBA4saZ8IECILE5IBNvBGJLZBU/ji19oZHOdRjTnSBnfwjGSxkOh9scXEHcZeRPsRBC4ZjViE/7W1hG0ZhwsxWkosZfIK/jCJhloLv25pvIsa37v1y9aec/UyPjwfDnHqUYDWlMolYhNsZu5YCUs+g6jDzc+CKhMM0UKK7fSCVI2a1AwSoX1LgTNa/wkB/7vSE+Lzr7U6B/p/SBBBj+ZKKCFxNCDilQgZFaPySpHgnIAUuNoHLf46CJJAbLr/o5afvOf+4urG9elRVaYwBJ5bAoLy4tUJbwWa7j2K067AQQZcHy5WaDSWhcLAKQhkSFFYtwNciEO4H8JZemJV8lz2HxmTJ6NoN2PgdYcrWDQxEFqqMreQI7WIPBWV+FTfJkeKkJpYaU17obJY2vIl5Ye5R0PfR0X6Srt0QDEiNXmCE1fRKsaTWwyyeClZSBRKLS0lBlh2ElYaQGQeO9oMNnQEfaQAdOgNj9HhQNxIUkgYk1eQGMA6LKfuXFLzfLKJA3G6RiIxCedt4Iy3IWfVYHnwhiYC8CLd8V+YeHlnYVXePMprAiMzE4669gwxSQdIjxI7NSqH7je8iYRX3k3MYfpQKJkSAJ2mAhhuGVczG6ZB5ILO+8M2k/qNxywxg9C9J3DKTnIMhgA0DSXqhxMKqBgagGBtG4oEFxQKKu4xYsAUrWgUzcAPDmBX/N6g+tcfwgDokMN8A8+W2wNK/XpFGmVaQtj1TRMgzM2KhKEw2JHxkKmnehoPVwhvRv+KFtZBLUmhBG111r4Ewodqt3dxbNVZNbj4kl5GyzbIztYSdAuvaBnN0BDDUAlJv7Uj1SRV6nh2xiUAricMT6NDf+i0EmfQYoXCHTjg+OXi/Ty85uoarsV8RPI3j8H0DSoy4gzzSTvtBw9a0Yrro2Kw9xFdH4ICa/8SQjA3f8gLEoQfsDV4MV+VXj1WEeKD8UCc2r6H2O4nhr84kuoP13QNfrgDNy/hYY1d0h22KUq8gdgZIPAdV/ARgxb9lHAFMekPakRS5SJj6nOdqKcMO3QVKjYMrA166isDucAPrqPodEATfzs1U0ac8vHDJ48/dYx4bFSMyrGmNxuHXZOKaZC2Y8y9XnB2nbQ1o8XOZJkM7fg7W9CFjnAKLUJIDo9hdtc+TYHcGJwPSvgeXNVWrywfF5Qbqs0Ecy0oJI/SMgaT7bVo6i61FT2IFSdC75K9jEdEczrqKS42+A9Gx8irU8tMaXb7Ry+NFX0YuQGqeizwEkw0xV8j67Q4DSnRz8c14WdL4K1vpLwBqQ/UN+9ejz3DRNDLDJ94OV3+IZZDlwtC/tB0X7jyGv/nHA4sM+Vw5xq3gRapWr0Ve7PgtQtPMkSPM/vpzqXT8nyG8s1weSr733RR5S751PQW4eGg+S9oS0mvjRToK1vwS0bZZVO+GgvEYqd8LD3xP5R865Wemfwp72IBgJuiYZH+U9w8wrUDWoYOcuRN99Jsu891Y7AuhY+hkkomUq1BgCw+cscvSZ3T3xeRPL/N7PGMNMQ8oF5E/UPptjDCRfTtI9QspD84y0ZBfw3k+Bc/slA1dBuea9gsRVkz8H1qyvgQXyRW+Qt7KRbW+4S0EOQ+TEJoTb3nDXylxX0aaIl8xFx8KPugmbJkb6yMGtBxszVfmzPUA5oeWzWz0DX9mpfjX5VjB08s72hJSjqG1XpTBXE7oY690PcuLfgcyAEovugfHHGm+4UkvQ4Upk6r4BJ1iWox7PvJcmmVwv4yuuhQceR2Cww7dWJm0OrqbWlfchESuToWZZR8i+1w5vtovCt+UaZQHbQaypHdH2MzAHekEzozCsOGAysGgQLBYCKy6GXTYRrKwSTsVUkFA0q3nKryTdzcEzkQwh5U8rMPKgXmSGQE78GKRnr1TSmIcHCLwNzyxF6oqH4UQqlTEm1eQ6iGpU06YZHelCyZuPARm16qrWyrgfNDhpITqv4MO+GNFeJLt213+LBAPf8AMqOdCEkjePil5Ctyh1uzm89XjhE7nFKuCUV8OePAv21AVAwUS15JO97JPbYeZW8Xol1QeDnvk96MmnpeeTNVNU3yWSM4dFwILFSF75MOxwuWrHUyus7iKipyJ+89Gm7Sh49zV3CUib9w6N4MS6P+f1LQf0TbJzX8PHKCG/EiFGKCZtOYyCxlbp8fjdQ7/Ncb4CVfcHGQ6c8imwZyyFPYWbZaGsfsRcBWWpJ0ctZLgF9MijIMle9YkHRyhOhJo8MrME8YUPwwqVXAQSX2W1MHHnDxAYOuclbRFmBlpW3Ybhkgquols5oHIAZ7mCyvafQcW2Y9LScN1D7g8pc8zXrJDVqODrCRKKE3WWfPI1fHvmatizrgbCsezGTa+5TIZXrimkZs0kPQTjyPdAB1Q/po46BUYCkpCcSBWGF38FjhF2J4yuH61XOdQx3NGAsrc2ewuJahmoa85KdM+azxVULS5p576GwxRk/tx/eROBRFx5zb5uDm15aOtVeD1eFe9aHT57w7U6dP1lBgQoq+5GIMgdxexFxFxTXwuJ5xLxcCyY9T+BcVYsNrhAtIpEqPG5DQMyRXMwvPCzYCCeWa89abE2ptfIGKpefxLBgXPeGplN0V9Th9ZFq+pXXTX7Sg3o0VBP4q/nPH7ANeVlePkh5fQA+W1Wf/ud3wPikz9RnEqrg08GuaKseethTV8tOzlyVZSdbNSMWb3pOAgefw6Btp2qJvOB0ioSkAjiU9dhdMaNMln74HgLiAw2cxBrPoKJB1/LmhsNlU9D86qrH1m9dM7faEDLYk1D+6b/5KjPi/b3/2T3Ao3bVabb7rJMMlWYqgJVFqfyPae4CullG8AKq8eGVu6o5e9PBBA69gLM1h2eivyhpgBxm2Ng6aeRKq6VK6p6JHMVJK1WpNOYtvUnIGk+ohlCSecm16Jl+crVa5bN3eNG/YFN+5tqv390ur8XSNur8VllSMytQqaiCKyAt78YCKRTMAcHYQ4NINR9BmZ3O/R+DKkav1mm9mXo9/X+DIMgPe8GZOZcN8ZJzBWS3qch05KD8JHnEWzbmwVJjmg8HKWK7FAxetZ8AbbBPR/ZDqPnQ36jrHLXK8hv5XatXIrumTFnoG3J4pK1y+v4T5SP3duPfm3e1w88IlcoZGK2Skx0fHwB0jWlXvuLrr14Aatn0oTCcGyEzp5B5OQxBFsbQZBRyVqbY1I9rg/k28Ril9UgsfIesEiRm6ezZj+6DdivJMdB3ltPwuxqzFGSzkXyODJ1BfrnXe9TkDLpfQm7qPEoKg7sk+tiNkXnvCuem/nAnZ/0zcxEoi6a8fjxnry2wYBoygwyNH9hCTJVBapRShWqvN9ZraSKukw3KfiayGk6hUhTA6JH98BIDXtqckNMFaa+XT4sFEF89T2wy+RKhwTkdm96zZvqPZG8rSQKd/4AxlC3gpStIF6QMgTQec0DSEeLRKh5rTGe1RruOotp214RcBwE0b54QU3dPTe3ZQHiL05+advWsl2dH+HJeWhhEVrvqZMVvbY7xoHjekIClAdMdNfbNiInDktQae4B5RhkCpDcFgVhmI0uvR3pKYu9CNPNm4LX2C5XDqd4+xMg3KTXE0cVYiLUHILR6jp0XbU+Ow/5GhuMkRHM+fVLAtC5mpq9NV+9d6W+gKyZx9HHdlVU/Ka9w0wmSddNVehaV+31Bp0Xjk9FbsuLbpxS2xCsDPIO7UH0+D4QwrssdbJW+8TccJNFanzRTUjOdK/R7WqVjJS2fG3AkVNvo+DgVqkiPxz12mEGWtffi3Q4Om6yJskkrnjuRWTMCOtcNG963cabWsYFxN9s+vwrm0v2dt/WfVMlum6cJL5Oh5J31M0KKg+5nWR6p4/uDcruMDN7u1C482UYw72+zXR+k0wpiTCMLFmP5MxlXrjpDXU+F1G2A0vTrHT7swh1t3kza9HVqiaQDkXfvOXorVs87ohmDg1j7i+3oXf2jBenffHjt/sHiDELmg3/uCNSsqv3XLrKDLc8wLeUykc2HN0w5QHx2u2yIeU6itTKoHD3qwifOu7baag20PktDgIMrrwFyWlXSkjai9ahltMnHRjsReXvnpZbonJCjL9OFk7AqfV/ljVJ1A1W+e1dmLSnPnlmxZVFC++4OnVBQPzDE1997RMlu3qea3zkCjghr/NdG2aym8wPRwFzPSFpr8oOM+FrqK467xg78hYKDuzyILkekM9mNSjOrbsLqQnVWVsy3e0I/h5pxlD65quINalRTeUfUciq88Y774JlBuXEUQ35/H6r9h13HGp8YtaDf/ZLP5wxSdr/YfNnXtmaqgp+pOeGiqzv4TfN533FR88ir71fhIpVFEZqcgkS0yaKBUHq3/Lkb+TUm+rU59ETjSh54zW59VL70brtTtkcdl4MXR/5FJxQ2NdhrxO235NmMAf7MfmlF2R1r/ORBuUQnLr+WgxVTnRHMhEZlo2J7zQ/O+vBW+/OhXNBQO9+/XUabkucOnP35BorP5D1vVN+2Yiihi5v04qaPTt5BoYW1mBgxWzYsUj2pjrlR3u7DOWvj73biJKdr2dbreIjz0mMT61Fz9U3jknWWVsRVC6a/F9bEO7qHZuwHYLTa5fj3IwaN9HzXxM9O7A9XlF0LZ8UXhYg/sWN39xeboxahzs/NqncX2nP+/v9YibtekFiHV4vCjpwwgR9a+dicNlMtVrqGfbiTBfuyjQrOvg2ig4cGGu1+jJk1w03IT5JbkuQm31kgpYpyVNS8dF6TNz3tsxDPFH7lNT6J4vQN3eqy4E47EhxY+e6K+69rns8OBdUkP6G4//w31dmisxXB1YUu7E289GjiHQNy2XknNrLX5zGp5ag8/blcCLcD/JcxKy9quoXVb38e0Ta2n1etE9FAFKlpWi7/VY3YcvSQ86L/IDC3X2Y9uKr4ybqU9cvxUBtpb413qD9p2uX113wDxZcUltO4ze3LxudGdsyOjNPQCre34fJz58cE2IiOemiVU0KUxUxtG5YDScqd0CLfxV99KkpMBJHzXO/AR/lXHMxx25tu3kd4pMqxirHl6xJOoN5T24ZA4gn6uP3fAipoii/BD7P4WHVfD7l6PcvCRD/4obv7Jgfn573UnxadBr/Z5vyZBMK6/vcjXRuU8I4jQqj00pwesMyMdOWTHxh5vOFyvbWo3T/saz843baAxicMw0d1yx3/8BAVg6SsSZGqAVPbAXhE2tfeKWKYjh+3xqROQCsW7u8rv1icC4pxPw/5NgjO6rjM/J+lZgSXUHTDqb8+0nknxxUqtHWhm538RoVeInRfts8DF4pGzvdbbz+c15pJNOY9ePfgvC9qPqfzv0nZMjkR/HuRi9ZZ+0+VKFGOKB/+90YBbV9eB76Fkzif3Tgo2uX1w1cCpzLBsS/4a1NB0yaZk8kpkQ+zShB5eZ2lO7skknatVp9VbuyOIZml6DlEwvkffs77nO676duehOxtt7s1QyfzusfXA/HoG7uyb3RSM8wZj+1xx3FuIpGakrQtGHRd0HIw2uX13E//pIflxxiuT/x4M/335WqDD1mFZgVscZhVG1qQ6g7rpK2ryjlnRwGw8j0AjTdv2DMhWlg+oOq1xsx4YAqhcZZ8jn64LWww+Z5b7B8TwsqtjcpQECiPD/dftPsDVd9dMWvL5mK7wv/YED8Z9Q/+kZ5oib67VRl6F4nQI2CQwMo2d2L2HuDvOnW7eCwowStn5yF4dnFF73Gqtfew4R9p32JWn8LAzMMHPnSh8CVO96Dpm3M+f4+mENp0fY7NKfsSP/88nUL7l1z3mH8Yhf0RwHSP/zQj99cnS4NPpIuD61xTAqa4htG4giMWmBBgviUGOzIOJt1x7m62p+9g7zWQflJjoKGpxej+e6F498TA2r+sxHF7/RgZHpRx8iUwj+f/bcf/u3FAFzs8/cFkP4lh5/Yc2OyKvyQVWBeb+ddGhD/BcaaBjDjp/XZu3zEFcoJYdN98/nNj7knmnFQ+dsWFuqKd45OLfz67G/ccFl/POBCkN5XQPoXHfunnatSFaFP2dHALanyUKUTki2+F3oUHOvH5F+chJGyfCOYN/vvXD8FPVdL+0U/iMP3Wox0x04M7nMC9NtzH75OrQld7Ldd+ucfCCCfooxgT+oeK9+8lhlkGWFsRrosROywBBYYySDSGkfhkQF+o55yfHVYuiSEjttqMHSlm7+4oXHMSNiv5p0cej3SHn9l9t+v039P59Lv/BK/8gMFlHsNDd/ZUWP2pe8MjFirjFF7rjFqlxsjVjQwapk8qxJuQYQNpEtNO1kdsUfmFvQMLSg8zijhwxovDbhC9q9dXsdp/q88/geealX2pQS/3wAAAABJRU5ErkJggg==" />
                        <image id="Your_image_here-3" data-name="Your image here" width="35" height="35"
                            transform="translate(1672 1299)"
                            xlink:href="data:image/png;base64,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" />
                    </g>
                    <g id="button_invite_user" data-name="button invite user" transform="translate(-1583 -1243)">
                        <rect id="bg" width="180" height="55" rx="22" transform="translate(1583 1376)" fill="#6149cd" />
                        <text id="Invite_User" data-name="Invite User" transform="translate(1672.579 1408.802)"
                            fill="#fff" font-size="16" font-family="SegoeUI, Segoe UI">
                            <tspan x="-37.367" y="0">{{__('massage.Invite_User')}}</tspan>
                        </text>
                    </g>
                </svg>
            </div>
            <section style="text-align:left;padding: 5px;margin-bottom: 10px;margin-left: 2rem;">
                <h5 style="margin-bottom: 2px;">© 2022 hulul fx</h5>
                <small style="margin-top: 0;color: #809FB8;font-size: small;">High Risk Investment Warning: CFDs are
                    leveraged
                    products and can
                    result in the loss of all invested capital. Please consider our
                    Risk Disclosure Notic</small>
            </section>

        </footer>
        <div class="modal ">
  <div class="modal-overlay" onclick="closeModal()" ></div>
  <div class="modal-card">
    <div class="modal-body">
      <div class="modal-header">{{__('massage.Deposit')}}</div>
      <div class="modal-content">
      <form action="{{route('account.store')}}" method="post">
      {{ csrf_field() }}

  <div class="form-group">
    <label for="formGroupExampleInput">{{__('massage.Amount_of_Deposit')}}</label>
    <input type="number" name="Amount" class="form-control" id="formGroupExampleInput" >
  </div>
  <input hidden type="text" name="type"  value="Deposit">
  <div class="form-group">
  <label for="standard-select">{{__('massage.Your_Login')}}</label>
<div class="select">
  <select name="Login" id="standard-select">
      @foreach($mtHulul as $value)
    <option value="{{$value->login}}">{{$value->login}}</option>
    @endforeach
  </select>
</div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">{{__('massage.Date')}}</label>
    <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder=" ">
  </div>
  <button type="submit" type="button" style="display: flex;
              justify-content: center;" class="col-5 Continue2">{{__('massage.Submit')}}</button>
</form>
      </div>
      <div class="modal-footer" >

        <button onclick="closeModal()">{{__('massage.Close')}}</button>
      </div>
    </div>
  </div>
</div>





        <div class="Withdraw ">
  <div class="modal-overlay" onclick="closeModal2()" ></div>
  <div class="modal-card">
    <div class="modal-body">
      <div class="modal-header">{{__('massage.Withdraw')}}</div>
      <div class="modal-content">
      <form action="{{route('account.store')}}" method="post">
      {{ csrf_field() }}

      <input hidden type="text" name="type" value="Withdraw">

  <div class="form-group">
    <label for="formGroupExampleInput">{{__('massage.Amount_of_Withdraw')}}</label>
    <input type="number" name="Amount" class="form-control" id="formGroupExampleInput" placeholder=" ">
  </div>
  <div class="form-group">
  <label for="standard-select">{{__('massage.Your_Login')}}</label>
<div class="select">
  <select name="Login" id="standard-select">
      @foreach($mtHulul as $value)
    <option value="{{$value->login}}">{{$value->login}}</option>
    @endforeach
  </select>
</div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">{{__('massage.Date')}}</label>
    <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="">
  </div>
  <button type="submit" type="button" style="display: flex;
              justify-content: center;" class="col-5 Continue2">{{__('massage.Submit')}}</button>
</form>
      </div>
      <div class="modal-footer" >

        <button onclick="closeModal2()">{{__('massage.Close')}}</button>
      </div>
    </div>
  </div>
</div>
@include('sweetalert::alert')
    <!-- @include('sweetalert::alert') -->

    <script src={{asset('js/dashboard/hulul.js')}}></script>
    <script>
      function closeModal() {
        document.querySelector(".modal").classList.remove("open");
      }

      function openModal() {
        document.querySelector(".modal").classList.add("open");
      }

      function closeModal2() {
        document.querySelector(".Withdraw").classList.remove("open");
      }

      function openModal2() {
        document.querySelector(".Withdraw").classList.add("open");
      }
    </script>
    <script>
      /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.querySelector(".dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
    <script>
      $(function() {
        $('input[name="daterange"]').daterangepicker({
          opens: 'left'
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          var x = document.getElementById("form");
          x.querySelectorAll('input')[2].value = JSON.stringify({
            start: start.format('YYYY-MM-DD'),
            end: end.format('YYYY-MM-DD')
          });
          x.submit()

          ;
        });
      });
    </script>
    <script type="text/javascript">
      function show(value) {
        document.querySelector(".text-box").value = value;

        // this.form.submit()
      }

      let dropdown = document.querySelector(".dropdown")
      dropdown.onclick = function() {
        dropdown.classList.toggle("active")
      }
      // function tablePrint() {
      //   var divToPrint=document.getElementById("table");
      //   console.log(divToPrint);
      //       newWin= window.open("");
      //       newWin.document.write(divToPrint.outerHTML);
      //       newWin.print();
      //       newWin.close();
      // }
      function tablePrint() {

        var printWindow = window.open('', '', 'height=600,width=600');
        printWindow.document.write('<html><head><title>Table Contents</title>');

        //Print the Table CSS.
        var table_style = document.getElementById("table_style").innerHTML;
        console.log(table_style);
        printWindow.document.write('<style>');
        printWindow.document.write(table_style);
        printWindow.document.write('</style>');
        printWindow.document.write('</head>');

        //Print the DIV contents i.e. the HTML Table.
        printWindow.document.write('<body>');
        var divContents = document.getElementById("table").innerHTML;
        console.log(divContents);
        printWindow.document.write(divContents);
        printWindow.document.write('</body>');

        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();


      }
    </script>
    <script>


function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("tblStocks");
    console.log(table);

    /* Declaring array variable */
    var rows =[];

      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;

    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column5
            ]
        );

        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });

        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Stock_Price_Report.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript">
    function Export() {
        html2canvas(document.getElementById('tblStocks'), {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("Table.pdf");
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
	var day=JSON.parse('{!! json_encode($days) !!}');
	var Balance=JSON.parse('{!! json_encode($Balance) !!}');
    const container = document.querySelector(".altbody");
        const langBtn = document.querySelector(".aref");

        if (langBtn.innerHTML == "en") {
    // wraper.style.gap = "3rem";
    container.style.direction = "rtl";
    console.log('asdasdasd');
} else {
    // wraper.style.gap = "0";
    // wraper.style.fontFamily = "Noto Kufi Arabic";
    container.style.direction = "ltr";
}

</script>
<script>
  // const labels = [
  //   'January',
  //   'February',
  //   'March',
  //   'April',
  //   'May',
  //   'June',
  // ];

  const data = {
    labels: day,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: '#6149CD',
      borderColor: '#6149CD',
      data: Balance,
    }]

  };


  const config = {
  type: 'line',
  data: data,
  options: {
    animations: {
      tension: {
        duration: 1000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
    scales: {
      y: { // defining min and max so hiding the dataset does not change scale range
        min: 0,
        max: Balance[2]+1000
      }
    }
  }
};
</script>
<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
<script>
        // const labels = Utils.months({count: 7});
const data2 = {
  labels: day,
  datasets: [{
    label: 'My First Dataset',
    data: Balance,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};
const config2 = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};
    </script>
<script>
  const BarChart = new Chart(
    document.getElementById('BarChart'),
    config2
  );
</script>


</body>

</html>
