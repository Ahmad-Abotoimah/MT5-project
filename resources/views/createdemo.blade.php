<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href={{asset('img/favicon.ico')}}>
    <link id="boot" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/dashboard/style.css')}} />
    <link rel="stylesheet" href={{asset('css/createdemo.css')}} />
    <style>
        .modal,.Withdraw {
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
.modal-overlay,.Withdraw {
    position: fixed;
    left: 0;
    top: 0;
    height: 100vh;
    width: 100vw;
    z-index: 100;
}

.modal,
.modal-card,
.modal-body,.Withdraw {
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
.Continue2{
    display: flex;
    justify-content: start;
    align-items: center;
    background-color: #6149CD;
    margin: 10px;
    color: white;
    font-family: Manrope-Medium;
    border: 0px  #707070;
    border-radius: 22px;
    width: 50px;
    height: 30px;
    cursor: pointer;

}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo-left-container hover-curser" >
                <img src={{asset('img/dashimgs/logohulul.png')}} alt="logo"/>
            </div>
            <div class="first-left-container">
                <ul class="list">
                    <a href="demos">
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

                            Dashbord
                        </li>
                    </a>
                    <a href="#accounts">
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.999" height="20" viewBox="0 0 19.999 20">
                            <path id="Campaigns_icon" data-name="Campaigns icon"
                                d="M46.253,229C42.392,229,40,226.608,40,222.756v-7.5c0-3.864,2.392-6.256,6.253-6.256h7.493c3.844,0,6.254,2.392,6.254,6.253v2.322a.764.764,0,0,1-.763.765h-.011a.756.756,0,0,1-.756-.756c0-.006,0-.012,0-.018v-2.313c0-3.043-1.68-4.723-4.723-4.723H46.253c-3.053,0-4.723,1.68-4.723,4.723v7.5c0,3.043,1.68,4.714,4.723,4.714h7.493c3.052,0,4.723-1.68,4.723-4.714a.765.765,0,1,1,1.53,0c0,3.855-2.391,6.247-6.243,6.247Zm-.553-4.521a.765.765,0,0,1-.738-.791v-6.4a.757.757,0,0,1,.782-.731h.009a.766.766,0,0,1,.739.792v6.391a.765.765,0,0,1-.765.739Zm3.57-.779v-9.379a.765.765,0,1,1,1.53,0h0V223.7a.765.765,0,1,1-1.53,0Zm4.239-.009V220.7a.765.765,0,0,1,1.531,0v2.991a.765.765,0,0,1-1.531,0Zm-4.239-9.414v0Z"
                                transform="translate(-40 -209)" fill="#7a86a1" />
                        </svg>
                        Accounts
                    </li>
                </a>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.97" height="20" viewBox="0 0 16.97 20">
                            <path id="Statement"
                                d="M46.565,279A4.579,4.579,0,0,1,42,274.4q0-.049,0-.1v-2.523a.747.747,0,1,1,1.493,0v2.523a3.1,3.1,0,0,0,3.011,3.181h8.006a3.16,3.16,0,0,0,2.964-3.182v-8.925l-3.809-4.014v1.316a1.829,1.829,0,0,0,1.809,1.837.755.755,0,0,1,0,1.51h0a3.334,3.334,0,0,1-3.3-3.348v-2.162H46.565a3.075,3.075,0,0,0-3.068,3v4.159a.747.747,0,1,1-1.493,0v-4.159a4.6,4.6,0,0,1,4.562-4.51h6.3a.428.428,0,0,1,.057-.012.577.577,0,0,1,.057.012h.2a.743.743,0,0,1,.539.233l5.04,5.312a.761.761,0,0,1,.211.523v9.228A4.64,4.64,0,0,1,54.514,279Zm.8-5.594a.755.755,0,0,1,0-1.51h5.371a.755.755,0,0,1,0,1.51Zm0-4.986a.755.755,0,0,1,0-1.51H50.7a.755.755,0,0,1,0,1.51Z"
                                transform="translate(-42.002 -259)" fill="#7a86a1" />
                        </svg>
                        Statement
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

                        Promos
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.999" height="19.924"
                            viewBox="0 0 19.999 19.924">
                            <path id="project_icon" data-name="project icon"
                                d="M48.784,378.134a.755.755,0,0,1,.751-.758h6.2a2.211,2.211,0,0,0,1.933-.831,3.155,3.155,0,0,0,.633-1.709c.031-.558.185-2.321.185-2.321a.743.743,0,0,1,1.485.059c0,.023-.141,1.806-.173,2.356a4.635,4.635,0,0,1-.974,2.585,3.72,3.72,0,0,1-3.086,1.378h-6.2a.754.754,0,0,1-.753-.754Zm-4.522.755a3.718,3.718,0,0,1-3.087-1.379,4.623,4.623,0,0,1-.974-2.585c-.032-.549-.173-2.327-.173-2.355a.743.743,0,0,1,1.485-.058s.154,1.765.187,2.321a3.136,3.136,0,0,0,.631,1.708,2.21,2.21,0,0,0,1.934.832H45.4a.757.757,0,0,1,0,1.514Zm4.986-5.1v-1.307a.75.75,0,1,1,1.5,0v1.306a.75.75,0,1,1-1.5,0h0Zm2.5-2.146a1.8,1.8,0,0,0-1.755-1.365,1.831,1.831,0,0,0-1.78,1.368.75.75,0,0,1-.716.559.766.766,0,0,1-.111-.008,17.064,17.064,0,0,1-7.05-2.645A.759.759,0,0,1,40,368.92v-3.5a3.836,3.836,0,0,1,3.819-3.842h1.954a2.975,2.975,0,0,1,2.931-2.605h2.583a2.974,2.974,0,0,1,2.939,2.605h1.964A3.83,3.83,0,0,1,60,365.421v3.5a.761.761,0,0,1-.336.632,17.077,17.077,0,0,1-7.081,2.653.762.762,0,0,1-.1.006.75.75,0,0,1-.73-.57Zm1.214-1.029a15.654,15.654,0,0,0,5.535-2.106v-3.085a2.321,2.321,0,0,0-2.308-2.329H50.005a.757.757,0,0,1,0-1.514h2.7a1.465,1.465,0,0,0-1.415-1.09H48.7a1.467,1.467,0,0,0-1.456,1.472v.373a.752.752,0,0,1-.745.758H43.819a2.326,2.326,0,0,0-2.318,2.33v3.085a15.6,15.6,0,0,0,5.513,2.1,3.335,3.335,0,0,1,2.98-1.84,3.286,3.286,0,0,1,2.97,1.849Z"
                                transform="translate(-40 -358.974)" fill="#7a86a1" />
                        </svg>
                        Tools
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.941" height="19" viewBox="0 0 19.941 19">
                            <path id="payout_iocn" data-name="payout iocn"
                                d="M53.532,427.318a.674.674,0,0,1,.665-.682,4.5,4.5,0,0,0,4.439-4.554v-5.717H55.362a2,2,0,0,0,0,4.008h1.36a.682.682,0,0,1,0,1.364h-1.36a3.369,3.369,0,0,1,0-6.736h3.274v-.082a4.5,4.5,0,0,0-4.439-4.555h-8.4a4.444,4.444,0,0,0-4.205,3.164h8.762a.682.682,0,0,1,0,1.364H41.357v7.189a4.5,4.5,0,0,0,4.439,4.554h4.228a.682.682,0,0,1,0,1.364H45.792a5.851,5.851,0,0,1-5.768-5.917v-7.163A5.851,5.851,0,0,1,45.792,409h8.4a5.852,5.852,0,0,1,5.769,5.919v7.162A5.852,5.852,0,0,1,54.2,428,.674.674,0,0,1,53.532,427.318Zm1.974-8.329a.682.682,0,0,1,0-1.364h.3a.682.682,0,0,1,0,1.364Z"
                                transform="translate(-40.025 -409)" fill="#7a86a1" />
                        </svg>
                        Fund Mangamement
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
                        Profile
                    </li>
                </ul>
            </div>
            <div class="second-left-container">
                <h5 class="second-left-container-title">insights</h5>
                <ul class="list">
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.988" height="18" viewBox="0 0 19.988 18">
                            <path id="inbox_icon" data-name="inbox icon"
                                d="M45.807,540a5.83,5.83,0,0,1-5.8-5.845v-6.31a5.822,5.822,0,0,1,5.8-5.845H54.2a5.84,5.84,0,0,1,5.8,5.845v1.462a.71.71,0,0,1-.706.713h0l-.01-.02a.7.7,0,0,1-.5-.209.716.716,0,0,1-.207-.5v-1.446a4.437,4.437,0,0,0-4.373-4.41H45.807a4.438,4.438,0,0,0-4.373,4.41v6.309a4.438,4.438,0,0,0,4.373,4.411H54.2a4.437,4.437,0,0,0,4.375-4.411.715.715,0,0,1,1.423,0A5.84,5.84,0,0,1,54.2,540Zm2.248-8.02-4.119-3.324a.725.725,0,0,1-.106-1.007.7.7,0,0,1,.983-.113l.007.006,4.153,3.316a1.423,1.423,0,0,0,1.768,0l4.11-3.316h.009a.711.711,0,0,1,.884,1.114l-4.11,3.324A2.836,2.836,0,0,1,48.055,531.98Z"
                                transform="translate(-40.011 -522)" fill="#7a86a1" />
                        </svg>
                        inbox
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.977" height="19.594"
                            viewBox="0 0 16.977 19.594">
                            <path id="Notifications_icon" data-name="Notifications icon"
                                d="M46.692,589.954a.731.731,0,0,1,.095-1.043l.005,0a.778.778,0,0,1,1.075.1,2.046,2.046,0,0,0,.417.4,2.009,2.009,0,0,0,2.773-.4h.009a.779.779,0,0,1,1.076-.1.73.73,0,0,1,.105,1.041l-.005.006a3.531,3.531,0,0,1-4.884.658,3.461,3.461,0,0,1-.671-.658Zm-1.639-2.724a4.863,4.863,0,0,1-3.066-1.507,3.95,3.95,0,0,1-.966-2.683v-.12a4.072,4.072,0,0,1,.727-2.057l.072-.089a3.729,3.729,0,0,0,.886-1.724v-1.776a.769.769,0,0,1,.994-.416.752.752,0,0,1,.468.57V579.2a.412.412,0,0,1,0,.1,5.117,5.117,0,0,1-1.223,2.4,2.446,2.446,0,0,0-.389,1.225v.19a2.493,2.493,0,0,0,.584,1.68,3.341,3.341,0,0,0,2.073.966,40.756,40.756,0,0,0,8.576,0,3.347,3.347,0,0,0,2.117-1.009,2.462,2.462,0,0,0,.558-1.629v-.2a2.539,2.539,0,0,0-.38-1.232,5.133,5.133,0,0,1-1.3-2.4.551.551,0,0,1,0-.1v-1.787c-.257-2.6-2.924-4.213-5.244-4.213a5.835,5.835,0,0,0-2.817.715.781.781,0,0,1-.776,0,.73.73,0,0,1-.279-1.007.746.746,0,0,1,.316-.293,7.336,7.336,0,0,1,3.49-.905c3.064,0,6.5,2.12,6.89,5.526v1.776a3.651,3.651,0,0,0,.886,1.724.729.729,0,0,1,.071.1A3.923,3.923,0,0,1,58,582.843l-.027.18a4.008,4.008,0,0,1-.94,2.7,4.913,4.913,0,0,1-3.118,1.509,41.526,41.526,0,0,1-8.858,0Z"
                                transform="translate(-41.02 -571.714)" fill="#7a86a1" />
                        </svg>
                        notification
                    </li>
                    <li class="links">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.642" height="19.997"
                            viewBox="0 0 19.642 19.997">
                            <path id="chat_icon" data-name="chat icon"
                                d="M47.851,640.763a.751.751,0,0,1-.559-.895.736.736,0,0,1,.878-.57h0a8.342,8.342,0,0,0,9.945-6.466A8.5,8.5,0,0,0,51.768,622.7a8.191,8.191,0,0,0-1.8-.2h-.006A8.422,8.422,0,0,0,41.618,631a8.629,8.629,0,0,0,.946,3.934l.188.375a2,2,0,0,1,.132,1.482q-.3.8-.52,1.633c.551-.169,1.22-.421,1.711-.6l.2-.074a.731.731,0,0,1,.941.45.753.753,0,0,1-.442.959l-.2.073a23.221,23.221,0,0,1-2.4.791.781.781,0,0,1-.174.018,1.172,1.172,0,0,1-.874-.34,1.324,1.324,0,0,1-.331-1,.826.826,0,0,1,.019-.148,17.689,17.689,0,0,1,.677-2.245.483.483,0,0,0-.048-.309l-.19-.374a10.091,10.091,0,0,1,4.164-13.489A9.67,9.67,0,0,1,49.964,621h.012a10,10,0,0,1-.009,20,9.653,9.653,0,0,1-2.11-.235ZM53.114,631a1.167,1.167,0,1,1,1.168,1.188A1.178,1.178,0,0,1,53.114,631ZM48.8,631a1.167,1.167,0,1,1,1.168,1.188A1.178,1.178,0,0,1,48.8,631h0Zm-4.328,0a1.167,1.167,0,1,1,1.167,1.189A1.178,1.178,0,0,1,44.468,631Z"
                                transform="translate(-40.143 -621)" fill="#7a86a1" />
                        </svg>
                        chat
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
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAABHNCSVQICAgIfAhkiAAADplJREFUeF7tXAlwVed1/g4ErH179963aN83JLSA2PfFNosNiYNrt3VbZ9xp4yROpmmmrdtma+tpnLh1xm06aesubottgovBYPYdsQoJ7fu+vUUCJBDEOEnnw4LQSve/71lyBhedGY+Zuefd+9/v/Pes3y/BfSY3BwdmAvAAGAiKsaXeT8uT+2kxd9Zyc3BgOv8dFGP72f20vvsSrPsJoHvXMgVWAJaZdLBuDPhCAfwZgG3BNq1MtZYbAwNxAH4fwD8E22xdKt2bgwNzADwG4OWgGNuwhe4TAFIAvBIUY/swADyUqp8EWMsAHAXwVrBN+zU1WL6vAvgbAF8NtmmvWgD7DoDNAJYH22zHLMDqBhALICEoRm2EQID8JMBiNONLnQm2aR0WYEUBWA9gd7BNu2KhG0+gRo3wgQWwuQBmAXg72Gb7RSCAqHQnHazJWtj9eJ8psAKwyoTAGvH5HgIQEqJpl62eOeLzhQGQEE1TOmfeZ8TniwZwI0TTblrd98aATwNwNdim3fJD1wDgC7ZpP7fSHe/6BMHyHhn1I2khmt6iWsCIz+cDEAEgKkTTRsx0R3y+IABD/C9E0wiEqdwY8NGPdQI4FWzTFlvo3gk8rwTbtD/4lYN13ev9OwCbAOSG6rrSQY/4vPsB8OVmhWi6aWY+4vPNAFAJoDdE01ZZGEAHUAFga4imfd0CrCIA+wB8KdimvfUrB+vjPPDT/JsJfYaf5hf/OGufAisA1PwC65rHw0TzfQD7wwzjr1X3v+bx0o/sEMFrobq+VaV73evNA/CPAL4YqusXLXTpG5nxPx2q671qX+b9DoACAFtCNF0ZUUd8vv9iAAbwXIimKRNYf8Fi6cASoj3MMJLVYHmWADgO4N/CDOO3LQC4U+4QrB9Z6G4DwJpvYaiun7bQbQOQBMAVqut95pHXy1YQwZzGjlCIpivTD7/A4sOueTzpAIbDDKPfAizek6VGW5hhXLPYhYx8LE1qwgz1Qq97vczT0hgpQ3VdmSdd93pjRoGqtvrKrnu93AjBobrebKXrN1hWN3oQrk+BFYCVx4A11O9mPyobQHmEw65s6w67PXYALCGqw+2G0jkOuz3sp08PtxuNVuu75vHkswcfZhg9fugWj/rSAYtPnv6JPbHqMEO/buHzgkddycVQ/ZcJ9HhgfQ/AHzIzj3DY31XddKjffUEEXGxWuN3eoNIddntu0IkCCA+3m/uyYbcnBABf5ma43eCiTeWa57YB6Gsqwgyj0EL3UQB7ALwWZhhftgDrTwF8F8DnQnWdfbTbMh5YqwG8COA3Ihx2pWWH+t3PjUaozREOu2m9xwcNu90M5zkM5+F2u6mDHnZ7GJmYTtwItxtfsjAAnf4bIjgYZhgsvVTAstT6ZwAvhRkGa1qFrnchgL8E8GyYoTOyjg+W1bZ/kK9POfgArD8F1mSDdaW3L1Q+cqRHI13Op1T3v9rXnwCgipOVSKfj2+oA0b8MkN0Anopw2Hepdd1fAfAXAEoiHPZ6C93/FMFKRvVwu920dTTs9nCznGdSCiAv3G4ok12/dtaVnl6mCCwbqqNiXQzrpnK1t28ehxUAfhjpcr5gAezvAWCZ85uRTsd/WADwBoMOgMIIh509LFMZ6nezH8YqQo9w2E1TimG3m8GEXV6mFZHhdnWq5BdYXNXlnp5wAT6Iio39qdXOvdLby7bwUJTLpczTrvb2CQQsTQYjnU5lnna1r3+aANERTocyn+LahvrdLKPCIhx2y3b3UL+b6cyMCIfdst3tN1hWAD0I16fACsDKY8Aa6OhgFb4agp/YEhKVZcFgV9fs0dJoW0x8vPKTu9zd/TB9Q3RcHLNopVzp6dkCSHdUrKtUpXilt3c6IM8IcCbS5ayz8I+sDBic3o90OpT9sKG+fjtEmPFvv/fzHAOWr739VQi+IsBmW2LSDtUCBjo72QLJFSAnJiFBudjBri72ij7DCU9MfLypf7jc3R0OCKc7P4uOi6W+qVzp6c0CwOfWRsW62OpRBR7yJFi+/X2ky/m8BbAsdVjy/Fak0/Hvd3THgtXWlgEBOQqvaknJV5VgdXQsAsAR08u2xERl42yws5OLTY1JSCC3wVQGu7pEIL8D4MPo+Li7Cx3vB5e7e2ZA8EVG6ejY2EMWwEZCQJC2R7lcyjr2am8fG5y/DsGPIp3OuwFlymdZ+YR7rk+BFQhY7uam6fa0dEs6oqeleSYgt4zUVEtWiretlbnLT/XkFEtdX3v7Q1pSkmXuNtDRQcPOtCUmWuoOdnUx2ZweEx9vOdK/3N1Nv/iL6Lg4Swykv6nBDYjTkZ5hmuq7m5tIDSIptsyelr5AZQxPS0s2BLUAXjdSUr+g0vW2tZKa9A4gz+rJyf+i0vW1t3Oq9A0I5mqJSRfUgaejFBA2+mJtCQleM136x9HKhMbVVeBe7u4Okr7G+lY6XmdGluku6G9qZJZNTkGpIz1jrWqh7pamfIFwrPUdIzWNPSxT8bS2PCnAm4Cs11NSlCmFr63tBwC+DEGOlpSsHC4MdLQfAIQ9KYctMdE08g50drIqIEeDGX9CTEKC6YYZ7Op6yG+f1d9YL+wVOjIyLT8td3PjNHua+U69Fz1PS/M0IzXNL1aLt611mp6c4peur71tmpaUbKk7+nmLLTHRUtdvsALwg/9vVafACsC0Y8Dqrq0iNed3AfnzuJxZdOqm0ltX8yQgJRC86MrKUY7J+xrq/pjRDJDvOjOzTLd8f2MD1/QKBHWO9MwfK/1jcxPJdCTu7rGnpe+0CDw6BC+RGW2kpCoDhLetldXA1wD5lp6czEn8bRkDVld15WsAnhfBxrjc/PdUC+iprWaTj32jzNicWcoRV299LUmzdKThrqwc00l1X0N9+G0ym+CWMyOLHAtT6W9qvFPuVDrSM1inmoq7uelxCHYI5G+N1LSvWQSevxKAxn1aT0m9y9cYA1Zn1aVoARhJDsTnzVaygrtrKhMAoRX2xuXmKR1/T10NJzv22Oxc5WSFL9FbXzsPkJ+7srLZxTSVvsZ6RrPlgHQ4MjKVzEN3UyOBXwnBeXtahrIn5mlpjgRAzsZBIzXt7hcz5bMm4rMC+O0Dp+r3zmqvKOPRkcGkgmLlMJUIdlaWJzIzTsgvVH7GXdWXWJbEA9IVPytfmed011QFQaDH5eQpj63w+T11NRECBLuyc91WFu1rqCP94JYzM9uyBe0XWG3l53VAOAppSiqck6FaQMelixznM9psTZxd9LRKt7Oqgq2Y15mZJ+QVMLCYSld1JSPjcyJYEpebf9Ii8HD6k8lyJzZnlmmjr7e+lsZisGF9GOrKypk4P6v14jmSRU4LcDK5qIT9I1NpL7+QBMEhpghJBcX/agHsCpLeIPL5xPzCsxbAvgDICwIsjs+brex0dtcwostSjs3icvNMU5qe2mpulj0Q4ShsRWx27sSZf1Zb+UG57tdn+KCAYfWeU2BZIXTP9TFgNZ4+wSNt34dgU8b8JcpeddPZU39EChEEq9JLFimjSfP5028KiW8ia1PnzDc9MNladpZOl4lrR0rxvGdU79JWfp7DjRM8CJpcOIcUIVPpuFSWBAgZ199MnF30ttI/VlasgOCHAB5NyCswL3caSo+x1iKvYG3mwmUHVDdtPHOCGfYcQFIy5i++y2Ma7zfN50o5/GApE5pWspDEtnGl5cIZcq443bmWOmc+z/qYSmvZOQ5XaNBzKUUlpA2oAs9GCFg/vpRUMOdPLALPt3hsBSKuxHvSnzE7q+7kkZkiSASkOWvRcmV0aCg9HgqBPXPBUjYQldJ45mSUCMLS5y2+aymzHzSfKzVYtabNXags5Pn7lgtn4kXkakrxPAJsKm0Xz7Efx6PA3clFc5Wt6faKMqYSWlJB8f9iZk/5LCsr33N9CqxPAqyaYwfIpWrNXbZaWW7Unjg8/aNOACqyl6xUVvf1p44yGVwEwamshctN/Rjfp/H0cQMQsqhPZixYopzENJ09xQMOtvR5i0h9Ukrz+dNFAtxKnbuA7Sal+LWzqo/uiyX3gN/7rOVrSWQ1lZrjBxcLwAi1PWfpah4fMZW6k4efB4RlztezF6/gQMJU6kuPbRXcnpSvyFy4jKf7TaXxzAkalLVsYsb8JRy0jCtNZ09Ng+BDgRCHoLSShUpf5hdYVYf3shf0Cg2ct/IRhlRTqT663wbgByLyRu6yNcqReu3xQ6wzvw3BN3OWrFI2D+tOHlkjgmd5KCpr0QplmtJQeuwZiJB1/YXMBUuV9V7jmZNs8rky5i9W0r35wn6BZbU9H5TrU2AFYOkJg1Vx4D0pWLPBcpYYwJpQdWSf5K142K971hw7ILnL1vilW3fisGQvWemX7njrnRBY5ft2shfFcie9cO1jpuf6+OBLB3aXc0bLc4CzV683daSVh94njYhOuT9/5aPKIybVR/bFfKQrO2ctX6vsndUcP8iDoOUCvJizdLXygKmZYScE1sW9O1gOrQIkruiRx5U9por9uwgA//RAdMHajaZgXTq4mww9/lkD3+zV60kTN5Wqw3vZkWWZtTdv5SPrLAIPT/IfFMg3cpeveTmQnX5Hd0Jgle15ZxogQcXrNlu2msv3vvsZCGYUPvy4Mp/iwir275rJaF6wZoOyLU3dykN7mKt9kL9qnSULpurIPjYxR/z9xP8voBMC6+NY59P8mymwArDepIN1btc2fhZM8HaVbPy8kpR7Yfd2TlbYs3pjzvrPKScxZe//N4m+qwH5cdGjm5Sfcvm+naRF0d+9XvjwY5bsGH/xmnSwzu58m4MC/jGwbfMe27JFtZBz7217geN08grmbniC/zeVC7u3k/S2WQQritd9VlnuXNy7g+UOjZZR9MimQX/BsNKbdLBOv/vmDAE2AFI9//Enm1QLOLvzbRuZ0QK8VbJxCyOgqZx/7ycsjbhj/mnuhieUJJSyPe+wLvQWr/usJaXSCqB7r086WIE8/NOmOwVWABa7L8Eq3bF1pgAfLtj01KQ55wAwMVX9Hx6tpgIHhJM9AAAAAElFTkSuQmCC" />
                                </g>
                            </g>
                        </g>
                        <g id="text">
                            <text id="Get_Pro_Now-2" data-name="Get Pro Now" transform="translate(153 913.073)"
                                fill="#fff" font-size="16" font-family="SegoeUI, Segoe UI">
                                <tspan x="-45.168" y="0">Get Pro Now</tspan>
                            </text>
                            <text id="Get_Free_Moonths_of_Premium" data-name="Get Free Moonths
              of Premium" transform="translate(104.973 864.568)" fill="#f6efff" font-size="14"
                                font-family="SegoeUI, Segoe UI">
                                <tspan x="0" y="0">Get Free Moonths</tspan>
                                <tspan x="0" y="20">of Premium</tspan>
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
                <section class="main-basic-section1">
                    <h1 class="sub-title" >  Dashboard</h1>
                    <small>Mr.hulul , welcome back</small>
                </section>
                <section class="search-bar">
                    <form action="#">
                        <button class="search-bar-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 19.816 19.862">
                                <path id="search_icon" data-name="search icon"
                                    d="M1196.5,71.527,1193.1,68.19h0l-.08-.122a.8.8,0,0,0-1.126,0h0a8.026,8.026,0,0,1-10.422.338,7.635,7.635,0,0,1-1.69-10.081,7.991,7.991,0,0,1,9.984-2.947,7.691,7.691,0,0,1,4.274,9.318.774.774,0,0,0,.18.766.814.814,0,0,0,.767.23.793.793,0,0,0,.588-.536h0a9.274,9.274,0,0,0-4.954-11.17,9.652,9.652,0,0,0-12.016,3.121,9.2,9.2,0,0,0,1.347,12.108,9.684,9.684,0,0,0,12.42.511l3.016,2.955a.811.811,0,0,0,1.127,0,.78.78,0,0,0,.011-1.1l-.011-.011h0Z"
                                    transform="translate(-1176.928 -53.049)" />
                            </svg>
                        </button>
                        <input type="search" placeholder="search everything..."
                        class="search-bar-input" />
                    </form>
                    <span class="menue-btn">
                        <svg viewBox="0 0 100 80" width="40" height="20">
                            <rect width="100" height="10" fill="#3f4450b2"></rect>
                            <rect y="30" width="100" height="10" fill="#3f4450b2"></rect>
                            <rect y="60" width="100" height="10" fill="#3f4450b2"></rect>
                        </svg>
                    </span>
                </section>
                </div>
                
    <div class="create-demo-container">
    <p class="create-demo-title">Create Demo Account</p>
    <form  class="create-demo-form" method="GET" >
    @csrf
    <div class="items">
    <div class="item">
    <div class="form-group row" >
    <label for="platform" class="col-sm-3 col-form-label" id="platform-label">Platform</label>
    <div class="col-sm-9" id="platform-input">
    <input type="radio"  name="platform" value="Meta Trader S" >
    <label for="meta_trader_S">Meta Trader S</label>
    </div>
  </div>
  </div>
  <div class="item">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Account type</label>
    <div class="col-sm-9">
    <select name="account-type" class="form-select" aria-label="Default select example" >
  <option selected>FIXED</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>  
    </div>
  </div>
  </div>
  <div class="item">
  <div class="form-group row">
    <label for="leverage" class="col-sm-3 col-form-label">Leverage</label>
    <div class="col-sm-9">
    <select name="leverage" class="form-select" aria-label="Default select example" >
  <option selected>1:500</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>  
    </div>
  </div>
  </div>
  <div class="item">
  <div class="form-group row">
    <label for="currency" class="col-sm-3 col-form-label">Currency</label>
    <div class="col-sm-9">
    <select name="currency" class="form-select" aria-label="Default select example" >
  <option selected>USD</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>  
    </div>
  </div>
  </div>
  <div class="item-button">
  <button type="button" class="btn-submit">SUBMIT</button>
 </div>   
 </div>
</form>
</div>
</body>
</html>