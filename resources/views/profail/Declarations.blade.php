<x-profial_master>

@section('content')
<h4>Declarations and Acknowledgement of Risks</h4>
        
        <div class="container">
        <form action="/quc/create-step5" method="post" class="col-12" style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
        {{ csrf_field() }}
        <div class="row col-8">
                <div style="display: flex;
                justify-content: start;" class="col-12 Declarations">
  
                      <label style="margin-left: 5px;" class="radio-button">
                          <input type="radio" class="radio-button__input" id="choice1-1" name="choice1">
                          <span class="radio-button__control"></span>
                          <span class="radio-button__label ">I understand that the nature of my transactions with Hulul will be buying and selling only
                            CFD products in various underlying assets.</span>
                      </label>
  
  
                  </div>
                <div style="display: flex;
                justify-content: start;" class="col-12 Declarations">
  
                      <label style="margin-left: 5px;" class="radio-button">
                          <input type="radio" class="radio-button__input" id="choice1-2" name="choice2">
                          <span class="radio-button__control"></span>
                          <span class="radio-button__label ">I am aware that by not submitting the KYC documents as requested by the Company may
                            lead to the suspension of my trading rights
                           </span>
                      </label>
  
  
                  </div>
                <div style="display: flex;
                justify-content: start;" class="col-lg-12 col-ms-12 Declarations">
  
                      <label style="margin-left: 5px;" class="radio-button">
                          <input type="radio" class="radio-button__input" id="choice1-3" name="choice3">
                          <span class="radio-button__control"></span>
                          <span class="radio-button__label ">I am aware that the products offered by Hulul are leverage CFD products which carry a high
                            level of risk, and it is possible to lose all my capital deposited with Hulul. I further acknowledge 
                           that I have read the Risk Disclosure Notice as available online.</span>
                      </label>
  
  
                  </div>
                <div style="display: flex;
                justify-content: start;" class="col-12 Declarations">
  
                      <label style="margin-left: 5px;" class="radio-button">
                          <input type="radio" class="radio-button__input" id="choice1-4" name="choice4">
                          <span class="radio-button__control"></span>
                          <span class="radio-button__label ">I have reviewed my answers and responded as accurately as possible</span>
                      </label>
  
  
                  </div>
                
            </div>
            <div class="row col-lg-9 col-ms-12 "  style="margin-left: 15px;">
                <div style="display: flex;
                justify-content: start;" class="col-12 Declarations">
                      <label style="margin-left: 5px;" class="radio-button">
                        <input name="checkbox" type="checkbox" class="c2" />
                          <span class="radio-button__label ">By clicking this tick box, I agree to each of the above declarations</span>
                      </label>
                  </div>
            </div>
            <div class="row col-8 col-ms-12 Note" style="display: flex;
            justify-content: start;">
                <span class="circle col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="54" viewBox="0 0 12 54">
                    <text id="_" data-name="!" transform="translate(0 44)" fill="#fff" font-size="41" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">!</tspan></text>
                  </svg>
                  </span>
                  <p class="col-9">Important Note: After clicking "Submit", you won't be able to
                    change any previous step information. Make sure all information is correct!</p>
                  
            </div>
 

            <div class="row col-9  ">
                <button type="button" style="display: flex;
               justify-content: center;" class="col-5 Back"><a style="color: inherit; 
    text-decoration: inherit;" href="{{ url()->previous() }}">Back</a></button>
                <button type="submit" type="button" style="display: flex;
              justify-content: center;" class="col-5 Continue2">Submit</button>
            </div>
              </form>
        </div>
@endsection
</x-profial_master>