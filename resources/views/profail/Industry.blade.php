<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <h4>Choose Your Employment Status</h4>

        <div class="container">
        <form action="/quc/create-EmploymentStatus" method="post" class="col-10" style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
        {{ csrf_field() }}
            <div class="row col-10 " style="justify-content: center; margin-bottom: -10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="104" height="67" viewBox="0 0 104 67">
                    <g id="title" transform="translate(-1460.783 -274.279)">
                      <text id="Select_Industry_" data-name="Select Industry
                  " transform="translate(1460.783 291.279)" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Select Industry</tspan><tspan x="0" y="23"></tspan><tspan font-family="Manrope-Bold" font-weight="700"><tspan x="0" y="46"></tspan></tspan></text>
                    </g>
                  </svg>
                  
            </div>
            <div class="row col-10 " style="justify-content: center; margin-bottom: 50px;">
                <div class="selectWrapper col-10 ">
                    <select name="Industry" class="selectBox col-12">
                    <option>Select from a list</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                  </select>
                  </div>
            </div>
            <div class="row col-10 " style="justify-content: space-between; margin-bottom: -10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="104" height="67" viewBox="0 0 104 67">
                    <g id="title" transform="translate(-1460.783 -274.279)">
                      <text id="Select_Industry_" data-name="Select Industry
                  " transform="translate(1460.783 291.279)" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Source of Funds

                </tspan><tspan x="0" y="23"></tspan><tspan font-family="Manrope-Bold" font-weight="700"><tspan x="0" y="46"></tspan></tspan></text>
                    </g>
                  </svg>
                  
            </div>
            <div class="row col-10 " style="justify-content: center; margin-bottom: 60px;">
                <div class="selectWrapper col-10 ">
                    <select name="Funds" class="selectBox col-12">
                    <option>Select from a list</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                  </select>
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
            </div>
        

   



</body>

</html>