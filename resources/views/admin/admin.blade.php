<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href={{asset('img/favicon.ico')}}>

    <title>Document</title>
</head>
<body>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">amount</th>
      <th scope="col">User Login</th>
      <th scope="col">Date</th>
      <th scope="col">Accept</th>
      <th scope="col">Reject</th>
    </tr>
  </thead>
  <tbody>
      @foreach($usersAccounts as $userAccount)
    <tr>
      <th scope="row">{{$userAccount->id}}</th>
      <td>{{$userAccount->user->name}}</td>
      <td>{{$userAccount->Amount}}</td>
      <td>{{$userAccount->user_login}}</td>
      <td>{{$userAccount->date}}</td>
      <td>
         
      <form method="post" action="{{route('account.update',$userAccount->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <input hidden type="text" name="agreed" value="1">
                                        <button class="btn btn-primary"
                                      
                                        >Accept</button>
                                </form>
      </td>
      <td>
      <form method="post" action="{{route('account.update',$userAccount->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <input hidden type="text" name="agreed" value="0">
                                        <button class="btn btn-danger"
                                      
                                        >Reject</button>
                                        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

</body>
</html>