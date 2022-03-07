<x-client-master>
@section('content')
<div class="basic-form">
                <div class="form-header">
                    <div class="header-text" >
                       
                    </div>
                    <div class="header-text" >
                      
                    </div>
                    <div class="header-text" >
                        
                    </div>
                </div>
                <div class="form-main">
                    <h5>{{__('massage.Financial_profile')}}</h5>
                    <div class="form-content">
                       <ul>
                           <li>
                           <p> <strong>{{__('massage.q1')}} </strong> {{$user[0]->Income}}</p>
                           </li>
                           <li>
                           <p> <strong>{{__('massage.q2')}} </strong> {{$user[0]->Investments}}</p>
                           </li>
                           <li>
                           <p> <strong>{{__('massage.q3')}} </strong> {{$user[0]->Available_Amount}}</p>
                           </li>
                           <li>
                           <p> <strong>{{__('massage.Status')}} </strong> {{$user[0]->Status}}</p>
                           </li>
                           @if($user[0]->Status == "Student")
                           <li>
                           <p> <strong>{{__('massage.Source_of_Funds')}} </strong> {{$user[0]->Student}}</p>
                           </li>
                           @else 
                           <li>
                           <p> <strong>{{__('massage.Industry')}} </strong> {{$user[0]->Industry}}</p>
                           </li>
                           <li>
                           <p> <strong>{{__('massage.Source_of_Funds')}} </strong> {{$user[0]->Funds}}</p>
                           </li>
                           @endif
                       </ul>
                    </div>

                </div>
            </div>
@endsection
</x-client-master>