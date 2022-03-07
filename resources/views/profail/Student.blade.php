<x-profial_master>

@section('content')
<h4>Choose Your Estimated Annual Income (USD)</h4>
        
        <div class="container">
        <form action="/quc/create-Student" method="post" class="col-12">
        {{ csrf_field() }}
        <div class="row col-12" style="margin-bottom: 10px;">
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Employment/Salary" type="radio" class="radio-button__input" id="Student-1" name="Student">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Employment/Salary</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Pension" type="radio" class="radio-button__input" id="Student-2" name="Student">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Pension</span>
                    </label>
                </div>

            </div>
   
            <div class="row col-12" style="margin-bottom: 10px;">
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Family/ Partner" type="radio" class="radio-button__input" id="Student-1" name="Student">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Family/ Partner</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                    <label  style="margin-left: 5px;" class="radio-button">
                        <input value="Bank Loan" type="radio" class="radio-button__input" id="Student-2" name="Student">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Bank Loan</span>
                    </label>
                </div>

            </div>
            <div class="row col-12" style="margin-bottom: 50px;">
                <div style="display: flex;
              justify-content: start; " class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Other" type="radio" class="radio-button__input" id="Student-1" name="Student">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Other</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option1" >
                   
                </div>




            </div>
            <div class="row col-12 botton">


                <button type="button" style="display: flex;
               justify-content: center;" class="col-lg-3 col-md-5  col-ms-12 Back"><a style="color: inherit; 
    text-decoration: inherit;" href="{{ url()->previous() }}">Back</a></button>




                <button type="submit" type="button" style="display: flex;
              justify-content: center;" class="col-lg-3 col-md-5  col-ms-12 Continue2">Continue</button>

            </div>
        </form>
@endsection
</x-profial_master>