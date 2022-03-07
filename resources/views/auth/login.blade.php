<x-login-master>
@section('content')

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <p class="mt-10 mb-[5px] text-[#7A86A1]">
            {{__('massage.email_login')}}
            </p>
            <div class="lg:flex flex-row" >
                <div class="lg:flex flex-col">
                    <h6>{{__('massage.email')}}</h6>
                    <input
                        class="mr-[20px] h-12 w-[299px] rounded-lg border-2 border-[#EBEBEB] p-2"
                        type="email"
                        name="email"
                    />
                    @error('email')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
               
                <div class="lg:flex flex-col">
                    <h6>{{__('massage.password')}}</h6>
                    <input
                        class="mr-[20px] h-12 w-[299px] rounded-lg border-2 border-[#EBEBEB] p-2"
                        type="password"
                        name="password"
                    />
                    @error('password')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="remember_me" class="mr-[14px]" />
                <p class="mr-[34px]">{{__('massage.Remember_me')}}</p>
                <p class="text-[#6149CD]">{{__('massage.Forgot')}}</p>
            </div>
            <div class="sign__in--line relative mt-10 mb-16 items-center lg:flex">
                <button
                    class="sign__in__btn mr-6 h-[55px] w-[300px] rounded-2xl text-white"
                >
                {{__('massage.signin')}}
                </button>
                <p>
                {{__('massage.client')}}
                    <span class="mt-2 text-[#6149CD]"><a href="/register">{{__('massage.Create_account')}}</a></span>
                </p>
            </div>
            <div class="lg:m-b-0 mb-10 flex text-[#707070]">
                <p class="border-b-4 border-[#70707028]">{{__('massage.help')}}</p>
               <a href="/live_chat"> <p class="ml-8 border-b-4 border-[#70707028]">{{__('massage.chat')}}</p></a>
            </div>
            <div class="lg:m-b-0 md:flex mb-10 mt-5 hidden text-[#707070]">
                <p>{{__('massage.Documents')}}</p>
                <p class="mx-5">{{__('massage.Risk')}}</p>
                <p>{{__('massage.cookies')}}</p>
            </div>
            </form>
            @endsection
</x-login-master>


