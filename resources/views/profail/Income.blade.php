<x-profial_master>

@section('content')
<h4>Choose Your Estimated Annual Income (USD)</h4>
        
        <div class="container">
        <form action="/quc/create-step1" method="post" class="col-12">
        {{ csrf_field() }}
            <div class="row col-12">
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
               
                    <label class="radio-button">
                      <input type="radio" value="Between $0 and $5,000" class="radio-button__input" id="Income-1" name="Income">
                      <span class="radio-button__control"></span>
                      <span class="radio-button__label">Between $0 and $5,000</span>
                    </label>
                  
                  
              </div>
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                <label class="radio-button">
                    <input type="radio" value="Between $5,001 and $10,000" class="radio-button__input" id="Income-2" name="Income">
                    <span class="radio-button__control"></span>
                    <span class="radio-button__label">Between $5,001 and $10,000</span>
                  </label>
              </div>
            
            </div>
            <div class="row col-12">
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
               
                    <label class="radio-button">
                      <input type="radio" value="Between $10,001 and $50,000" class="radio-button__input" id="Income-1" name="Income">
                      <span class="radio-button__control"></span>
                      <span class="radio-button__label">Between $10,001 and $50,000</span>
                    </label>
                  
                  
              </div>
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                <label class="radio-button">
                    <input type="radio" value="Between $50,001 and $100,000" class="radio-button__input" id="Income-2" name="Income">
                    <span class="radio-button__control"></span>
                    <span class="radio-button__label">Between $50,001 and $100,000</span>
                  </label>
              </div>
            
            </div>
            <div class="row col-12">
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
               
                    <label class="radio-button">
                      <input type="radio" value="Between $100,001 and $250,000" class="radio-button__input" id="Income-1" name="Income">
                      <span class="radio-button__control"></span>
                      <span class="radio-button__label">Between $100,001 and $250,000</span>
                    </label>
                  
                  
              </div>
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                <label class="radio-button">
                    <input type="radio" value="Between $250,001 and $500,000" class="radio-button__input" id="Income-2" name="Income">
                    <span class="radio-button__control"></span>
                    <span class="radio-button__label">Between $250,001 and $500,000</span>
                  </label>
              </div>
            
            </div>
            <div class="row col-12">
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
               
                    <label class="radio-button">
                      <input type="radio" value="Between $500,001 and $1,000,000" class="radio-button__input" id="Income-1" name="Income">
                      <span class="radio-button__control"></span>
                      <span class="radio-button__label">Between $500,001 and $1,000,000</span>
                    </label>
                  
                  
              </div>
              <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                <label class="radio-button">
                    <input type="radio" value="More than $1,000,001" class="radio-button__input" id="Income-2" name="Income">
                    <span class="radio-button__control"></span>
                    <span class="radio-button__label">More than $1,000,001</span>
                  </label>
              </div>
              
              
                  
              
            </div>
            <div class="col-ms-6" style="display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
            ">
                <button type="submit" class="Continue">Continue</button>
                </div>
 
            
              </form>
        </div>
@endsection
</x-profial_master>