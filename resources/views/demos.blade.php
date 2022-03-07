<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @foreach($accountsInformations as $demo)
     <div>name: {{$demo['name']}}</div>
     <div>login: {{$demo['login']}}</div>
     <div>created_at: {{$demo['created_at']}}</div>
     <div>balance:{{$demo['balance']}}</div>
     <div>freeMargin:{{$demo['freeMargin']}}</div>
     <div>equity:{{$demo['equity']}}</div>
         <a href="{{route('demos.show',$demo['login'])}}">
             show
         </a>
         <a style="margin: 20vh" href={{route('hulul.show',$demo['login'])}}>show inf</a>
         @endforeach
    



         
</body>
</html>
