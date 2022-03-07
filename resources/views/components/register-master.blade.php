<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- CSS only -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href={{asset('css/custom.css')}} />
    <link rel="icon" type="image/x-icon" href={{asset('img/favicon.ico')}}>

    <title>Document</title>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6212e1ad1ffac05b1d7ad584/1fscs33up';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
<body>
<div class="w-screen altbody">
    <div class="md:flex altWRAPER">
        <div class="bg__img--signup md:w-2/4 lg:w-2/5 overflow-hidden position-relative overflow-hidden">
            <div class="md:mt-[130px]">
                <h1
                    class="title md:pt-0 md:text-right md:text-4xl md:text-5xl sm:pt-[120px] relative max-w-[330px] pt-[90px] text-center text-3xl"
                >
                    HULUL FX
                </h1>
                <p
                    class="md:text-xl md:text-right mt-3 max-w-[330px] text-center text-xs"
                >
                    Software FX Solution Support
                </p>
            </div>
            <h3
                class="md:absolute md:block bottom-20 left-10 hidden w-[300px] text-3xl text-white lg:text-4xl"
            >
            {{__('massage.JOIN_SUCCESS')}}
            </h3>
        </div>
        <div
            class=" flex flex-col items-center lg:mt-[20px] lg:ml-[100px] lg:block">
            <div>
                <button class="absolute top-5 right-5 rounded-lg border-2 border-[#979797] px-2 py-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Config::get('languages')[App::getLocale()] }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <li><a class="dropdown-item aref" href="{{ route('lang.switch', $lang) }}">{{$language}}</a></li>
                @endif
            @endforeach

                        </ul>
            </div>

            <h3 class="relative text-[43px]">
            {{__('massage.sign')}} <span class="ml-5 text-xl">{{__('massage.reg')}} </span>
            </h3>
            <p class="mt-5 mb-10 text-[#707070]">{{__('massage.Account')}}</p>
            <div class="mb-6 grid grid-cols-3">
                <div class="border-b-4 border-[#2088D0]"><a href="/signup">{{__('massage.Individual')}}</a></div>
                <div class="border-b-4 border-[#CE5A98]"><a href="/corporate">{{__('massage.Corporate')}}</a></div>
                <div class="border-b-4 border-[#6361C2]">{{__('massage.Partner')}}</div>
            </div>
            <div class="m-auto lg:flex">
                <a href="{{url('/auth/google')}}"><button
                    class="google__btn mr-5 mb-6 h-[55px] w-full text-xs text-white lg:mb-0 lg:w-[357px]"
                >
                    <img
                        src="./img/Google Icon.png"
                        class="inline-block"
                        alt="google"
                    />
                    {{__('massage.google')}}
                </button></a>
                <a href="{{ route('facebook.login') }}"><button
                    class="facebook__btn h-[55px] w-full text-xs text-[#6149cd] lg:w-[240px]"
                >
                    <img src="./img/f.png" class="inline-block" alt="facebook" />
                    {{__('massage.facebook')}}
                </button></a>
            </div>

            <p class="mt-10 mb-[5px] text-[#7A86A1]">
            {{__('massage.email_login')}}
            </p>

            @yield('content')
            <footer
                class="md:text-right relative right-0 text-center text-[#7A86A1]"
            >
                ©Copyright 2022. Made by Hulul FX
            </footer>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('./js/main.js')}}"></script>

</body>
</html>
