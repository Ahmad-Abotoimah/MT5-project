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
                    <h5>{{__('massage.verification')}}</h5>
                    <div class="form-content">
                        @if(Auth::user()->email_verified_at == null)
                       <a href="/email_verified"><button>{{__('massage.Email_Verification')}}</button></a>
                       @else
                       <h2>{{__('massage.Your_email_verified')}}</h2>
                       @endif
                    </div>

                </div>
            </div>
@endsection
</x-client-master>