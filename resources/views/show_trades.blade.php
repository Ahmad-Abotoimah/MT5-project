
@extends('layouts.app')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <a href='{{route('hulul.create')}}' class="btn btn-primary">create</a>
    <a href='/demos' class="btn btn-primary">show</a>
    <a href="{{route('information.create')}}" class="btn btn-primary">information</a>
    <a href="/quc/step1" class="btn btn-primary">Declarations</a>
    @if(Auth::user()->type == 'admin')
    <a href="/admin" class="btn btn-primary">Admin</a>
    @endif
    <div class="table-responsive">
    <div class="container">
    <form action="  {{route('demos.filter')}}  " method="post">
        @csrf
        <input hidden type="text" name="login" value="{{$login}}">
        <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">From</span>
        <input type="date" value="{{ old('from') }}" class="form-control" name="from" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">To</span>
        <input type="date" value="{{ old('to') }}" class="form-control" name="to" aria-describedby="inputGroup-sizing-sm">
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
        </form>
        </div>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">Order</th>
                <th scope="col">ExternalID</th>
                <th scope="col">Login</th>
                <th scope="col">Dealer</th>
                <th scope="col">Symbol</th>
                <th scope="col">Digits</th>
                <th scope="col">DigitsCurrency</th>
                <th scope="col">ContractSize</th>
                <th scope="col">State</th>
                <th scope="col">Reason</th>
                <th scope="col">TimeSetup</th>
                <th scope="col">TimeDoneMsc</th>
                <th scope="col">ModifyFlags</th>
                <th scope="col">Type</th>
                <th scope="col">TypeFill</th>
                <th scope="col">TypeTime</th>
                <th scope="col">PriceOrder</th>
                <th scope="col">PriceTrigger</th>
                <th scope="col">PriceCurrent</th>
                <th scope="col">PriceSL</th>
                <th scope="col">PriceCurrent</th>
                <th scope="col">PriceTP</th>
                <th scope="col">VolumeInitial</th>
                <th scope="col">VolumeInitialExt</th>
                <th scope="col">ExpertID</th>
                <th scope="col">ExpertPositionID</th>
                <th scope="col">PositionByID</th>
                <th scope="col">Comment</th>
                <th scope="col">ActivationMode</th>
                <th scope="col">ActivationTime</th>
                <th scope="col">ActivationPrice</th>
                <th scope="col">ActivationFlags</th>
            </tr>
            </thead>
            <tbody>
            @if($trades!==null)
            @foreach($trades as $trade)
                <tr>
                    <th scope="row">{{$trade->Order}}</th>
                    <td >{{$trade->ExternalID}}</td>
                    <td >{{$trade->Login}}</td>
                    <td >{{$trade->Dealer}}</td>
                    <td >{{$trade->Symbol}}</td>
                    <td >{{$trade->Digits}}</td>
                    <td >{{$trade->DigitsCurrency}}</td>
                    <td >{{$trade->ContractSize}}</td>
                    <td >{{$trade->State}}</td>
                    <td >{{$trade->Reason}}</td>
                    <td >{{(date('Y-m-d  h:i:s',$trade->TimeSetup))}}</td>
                    <td >{{$trade->TimeDoneMsc}}</td>
                    <td >{{$trade->ModifyFlags}}</td>
                    <td >{{$trade->Type}}</td>
                    <td >{{$trade->TypeFill}}</td>
                    <td >{{$trade->TypeTime}}</td>
                    <td >{{$trade->PriceOrder}}</td>
                    <td >{{$trade->PriceTrigger}}</td>
                    <td >{{$trade->PriceCurrent}}</td>
                    <td >{{$trade->PriceSL}}</td>
                    <td >{{$trade->PriceCurrent}}</td>
                    <td >{{$trade->PriceTP}}</td>
                    <td >{{$trade->VolumeInitial}}</td>
                    <td >{{$trade->VolumeInitialExt}}</td>
                    <td >{{$trade->ExpertID}}</td>
                    <td >{{$trade->ExpertPositionID}}</td>
                    <td >{{$trade->PositionByID}}</td>
                    <td >{{$trade->Comment}}</td>
                    <td >{{$trade->ActivationMode}}</td>
                    <td >{{$trade->ActivationTime}}</td>
                    <td >{{$trade->ActivationPrice}}</td>
                    <td >{{$trade->ActivationFlags}}</td>
                </tr>
            @endforeach
            @else
                <div>You Dont Have ANy History</div>
            @endif


            </tbody>
        </table>
    </div>
@endsection
