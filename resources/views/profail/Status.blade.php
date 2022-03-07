<x-profial_master>

@section('content')
<h4>Choose Your Employment Status</h4>

<div class="container">
<form action="/quc/create-step4" method="post" class="col-10">
        {{ csrf_field() }}
    <div class="row col-10 " style="justify-content: space-between; margin-bottom: 50px;">
        <div style="display: flex;
      justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 ">
            
            <label style="" class="radio-button">
                
                <input type="radio" value="Employed" class="radio-button__input" id="Status-1" name="Status">
                <span class="radio-button__control"></span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="246" height="116" viewBox="0 0 246 116">
                   
                    <defs>

                      <filter id="bg" x="0" y="0" width="246" height="116" filterUnits="userSpaceOnUse">
                        <feOffset dy="3" input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="3" result="blur"/>
                        <feFlood flood-opacity="0.161"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                      </filter>
                    </defs>
                    
                    <g id="folder_2" data-name="folder 2" transform="translate(-605 -599)">
                      <g transform="matrix(1, 0, 0, 1, 605, 599)" filter="url(#bg)">
                        <rect id="bg-2" data-name="bg" width="228" height="98" rx="30" transform="translate(9 6)" fill="#fff"/>
                      </g>
                      <path id="Shape_1" data-name="Shape 1" d="M647.711,657.009H640.2c-3.848,0-6.238-2.4-6.238-6.257v-7.517c0-4.146,1.84-6.248,5.469-6.248h1.611a2.954,2.954,0,0,1,2.338,1.151l.88,1.171a1.471,1.471,0,0,0,1.15.561h3.069a5.44,5.44,0,0,1,4,1.362,6.373,6.373,0,0,1,1.48,4.654v4.875a5.784,5.784,0,0,1-6.248,6.247Zm-8.378-8.219a.743.743,0,0,0-.751.736c0,.005,0,.011,0,.016a.751.751,0,0,0,.751.751h9.258a.746.746,0,0,0,.74-.751.737.737,0,0,0-.723-.752h-9.275Z" transform="translate(77.938 -7.016)" fill="#7a86a1"/>
                      <text id="Unemployed" transform="translate(691.5 675.236)" fill="#7a86a1" font-size="13" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Employed</tspan></text>
                    </g>
                  </svg>
                  
                  
               
            </label>

        </div>
        <div style="display: flex;
      justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 ">
            
              
            <label style="" class="radio-button">
                
                <input type="radio" value="Self Employed" class="radio-button__input" id="Status-1" name="Status">
                <span class="radio-button__control"></span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="246" height="116" viewBox="0 0 246 116">
                   
                    <defs>

                      <filter id="bg" x="0" y="0" width="246" height="116" filterUnits="userSpaceOnUse">
                        <feOffset dy="3" input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="3" result="blur"/>
                        <feFlood flood-opacity="0.161"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                      </filter>
                    </defs>
                    
                    <g id="folder_2" data-name="folder 2" transform="translate(-605 -599)">
                      <g transform="matrix(1, 0, 0, 1, 605, 599)" filter="url(#bg)">
                        <rect id="bg-2" data-name="bg" width="228" height="98" rx="30" transform="translate(9 6)" fill="#fff"/>
                      </g>
                      <path id="Shape_1" data-name="Shape 1" d="M647.711,657.009H640.2c-3.848,0-6.238-2.4-6.238-6.257v-7.517c0-4.146,1.84-6.248,5.469-6.248h1.611a2.954,2.954,0,0,1,2.338,1.151l.88,1.171a1.471,1.471,0,0,0,1.15.561h3.069a5.44,5.44,0,0,1,4,1.362,6.373,6.373,0,0,1,1.48,4.654v4.875a5.784,5.784,0,0,1-6.248,6.247Zm-8.378-8.219a.743.743,0,0,0-.751.736c0,.005,0,.011,0,.016a.751.751,0,0,0,.751.751h9.258a.746.746,0,0,0,.74-.751.737.737,0,0,0-.723-.752h-9.275Z" transform="translate(77.938 -7.016)" fill="#7a86a1"/>
                      <text id="Unemployed" transform="translate(691.5 675.236)" fill="#7a86a1" font-size="13" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Self Employed</tspan></text>
                    </g>
                  </svg>
                  
                  
               
            </label>


        </div>
        <div style="display: flex;
        justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 ">
              
              <label style="" class="radio-button">
                
                <input type="radio" value="Student" class="radio-button__input" id="Status-1" name="Status">
                <span class="radio-button__control"></span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="246" height="116" viewBox="0 0 246 116">
                   
                    <defs>

                      <filter id="bg" x="0" y="0" width="246" height="116" filterUnits="userSpaceOnUse">
                        <feOffset dy="3" input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="3" result="blur"/>
                        <feFlood flood-opacity="0.161"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                      </filter>
                    </defs>
                    
                    <g id="folder_2" data-name="folder 2" transform="translate(-605 -599)">
                      <g transform="matrix(1, 0, 0, 1, 605, 599)" filter="url(#bg)">
                        <rect id="bg-2" data-name="bg" width="228" height="98" rx="30" transform="translate(9 6)" fill="#fff"/>
                      </g>
                      <path id="Shape_1" data-name="Shape 1" d="M647.711,657.009H640.2c-3.848,0-6.238-2.4-6.238-6.257v-7.517c0-4.146,1.84-6.248,5.469-6.248h1.611a2.954,2.954,0,0,1,2.338,1.151l.88,1.171a1.471,1.471,0,0,0,1.15.561h3.069a5.44,5.44,0,0,1,4,1.362,6.373,6.373,0,0,1,1.48,4.654v4.875a5.784,5.784,0,0,1-6.248,6.247Zm-8.378-8.219a.743.743,0,0,0-.751.736c0,.005,0,.011,0,.016a.751.751,0,0,0,.751.751h9.258a.746.746,0,0,0,.74-.751.737.737,0,0,0-.723-.752h-9.275Z" transform="translate(77.938 -7.016)" fill="#7a86a1"/>
                      <text id="Unemployed" transform="translate(691.5 675.236)" fill="#7a86a1" font-size="13" font-family="SegoeUI, Segoe UI"><tspan x="10" y="0">Student</tspan></text>
                    </g>
                  </svg>
                  
                  
               
            </label>


          </div>

    </div>
    <div class="row col-10 " style="justify-content: space-between; margin-bottom: 50px;">
        <div style="display: flex;
      justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 ">
            
              
            <label style="" class="radio-button">
                
                <input type="radio" value="Retired" class="radio-button__input" id="Status-1" name="Status">
                <span class="radio-button__control"></span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="246" height="116" viewBox="0 0 246 116">
                   
                    <defs>

                      <filter id="bg" x="0" y="0" width="246" height="116" filterUnits="userSpaceOnUse">
                        <feOffset dy="3" input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="3" result="blur"/>
                        <feFlood flood-opacity="0.161"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                      </filter>
                    </defs>
                    
                    <g id="folder_2" data-name="folder 2" transform="translate(-605 -599)">
                      <g transform="matrix(1, 0, 0, 1, 605, 599)" filter="url(#bg)">
                        <rect id="bg-2" data-name="bg" width="228" height="98" rx="30" transform="translate(9 6)" fill="#fff"/>
                      </g>
                      <path id="Shape_1" data-name="Shape 1" d="M647.711,657.009H640.2c-3.848,0-6.238-2.4-6.238-6.257v-7.517c0-4.146,1.84-6.248,5.469-6.248h1.611a2.954,2.954,0,0,1,2.338,1.151l.88,1.171a1.471,1.471,0,0,0,1.15.561h3.069a5.44,5.44,0,0,1,4,1.362,6.373,6.373,0,0,1,1.48,4.654v4.875a5.784,5.784,0,0,1-6.248,6.247Zm-8.378-8.219a.743.743,0,0,0-.751.736c0,.005,0,.011,0,.016a.751.751,0,0,0,.751.751h9.258a.746.746,0,0,0,.74-.751.737.737,0,0,0-.723-.752h-9.275Z" transform="translate(77.938 -7.016)" fill="#7a86a1"/>
                      <text id="Unemployed" transform="translate(691.5 675.236)" fill="#7a86a1" font-size="13" font-family="SegoeUI, Segoe UI"><tspan style="margin-left: 5px;" x="10" y="0">Retired</tspan></text>
                    </g>
                  </svg>
                  
                  
               
            </label>


        </div>
        <div style="display: flex;
      justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 ">
            
              
            <label style="" class="radio-button">
                
                <input type="radio" value="Unemployed" class="radio-button__input" id="Status-1" name="Status">
                <span class="radio-button__control"></span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="246" height="116" viewBox="0 0 246 116">
                   
                    <defs>

                      <filter id="bg" x="0" y="0" width="246" height="116" filterUnits="userSpaceOnUse">
                        <feOffset dy="3" input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="3" result="blur"/>
                        <feFlood flood-opacity="0.161"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                      </filter>
                    </defs>
                    
                    <g id="folder_2" data-name="folder 2" transform="translate(-605 -599)">
                      <g transform="matrix(1, 0, 0, 1, 605, 599)" filter="url(#bg)">
                        <rect id="bg-2" data-name="bg" width="228" height="98" rx="30" transform="translate(9 6)" fill="#fff"/>
                      </g>
                      <path id="Shape_1" data-name="Shape 1" d="M647.711,657.009H640.2c-3.848,0-6.238-2.4-6.238-6.257v-7.517c0-4.146,1.84-6.248,5.469-6.248h1.611a2.954,2.954,0,0,1,2.338,1.151l.88,1.171a1.471,1.471,0,0,0,1.15.561h3.069a5.44,5.44,0,0,1,4,1.362,6.373,6.373,0,0,1,1.48,4.654v4.875a5.784,5.784,0,0,1-6.248,6.247Zm-8.378-8.219a.743.743,0,0,0-.751.736c0,.005,0,.011,0,.016a.751.751,0,0,0,.751.751h9.258a.746.746,0,0,0,.74-.751.737.737,0,0,0-.723-.752h-9.275Z" transform="translate(77.938 -7.016)" fill="#7a86a1"/>
                      <text id="Unemployed" transform="translate(691.5 675.236)" fill="#7a86a1" font-size="13" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Unemployed</tspan></text>
                    </g>
                  </svg>
                  
                  
               
            </label>


        </div>
        <div style="display: flex;
        justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 ">
          </div>

          </div>

    

    <div class="row col-12 botton">


        <button type="button" style="display: flex;
       justify-content: center;" class="col-3 Back"><a style="color: inherit; 
    text-decoration: inherit;" href="{{ url()->previous() }}">Back</a></button>




        <button type="submit" type="button" style="display: flex;
      justify-content: center;" class="col-3 Continue2">Continue</button>

    </div>
    </form>
    </div>
@endsection
</x-profial_master>