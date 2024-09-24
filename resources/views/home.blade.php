<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--font family links--}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


    <style>
        body, html {
            color:white;
             
        }         
        

  .srchdiv:hover {
    color: #007bff;  
    transition: color 0.3s ease;  
  }
    </style>

    @include('css')

</head>
<body>

    <div class="container-fluid" style="background-color:black;height:922px">
        <div class="row">
          
          @include('sidebar')
            
    
         
            <div class="col-10 secondcolumnn scrollbar" style="overflow: auto" >
             

                <h6 class="font">Suggested for you</h6>
                @foreach($users as $user)
    <div class="col-10" style="padding:15px;">
        <div class="row">

            <div class="col-1 " >
                <img class="img9" src="{{ asset('images/' . $user->user_image) }}">
            </div>

            <div class="col-8 homecolumN">
                <span class="font" style="font-weight:bolder">{{ $user->name }}</span><br>
                <span style="font-weight:lighter;color:#a8a8a8" class="font">{{ $user->userName }}</span><br>
                <span style="font-weight:lighter;font-size:13px;color:#a8a8a8" class="font">Suggested for you</span>
            </div>

            <div class="col-3 bghover">
                <h5 class="font" style="padding:10px 10px 60px 10px;">Follow</h5>
            </div>

        </div>
    </div>
@endforeach

              
                
            </div>



            @include('createhtml')
         
        </div>
    </div>


    @include('more')
     
    
    @include('ajax')
</body>
</html>