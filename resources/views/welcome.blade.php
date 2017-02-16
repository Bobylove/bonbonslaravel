<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bonbon</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

    <h1>Welcome</h1>

    <br>
    <br>
    <br>
    <div>
        
     @foreach ($bonbons as $value)
     <div class="ui card">
        <h3>il vous reste : <span data-valeur="{{$value->id}}" class="{{$value->id}}">{{$value->qty}}</span> {{$value->name}} </h3>
        
        <div class="ui extra content">
            <div class="ui three column grid">
                <form  class="action_moins ui form" action="/welcome/sell/{{$value->id}}" method="post">
                   {{csrf_field()}}
                   <span data-valeur="{{$value->id}}" class="idid">{{$value->qty}}</span>

                   <input  class="ui big black button" type="submit" value="moins"> 
               </form>

               <form class="action_plus ui form"  action="/welcome/restock/{{$value->id}}" method="post">
                   {{csrf_field()}}
                   <span data-valeur="{{$value->id}}" class="idid">{{$value->qty}}</span>
                   <input class="ui big orange button" type="submit"  value="plus"> 
               </form>


               <form action="/welcome/delete/{{$value->id}}" method="post">
                   {{csrf_field()}}
                   <input class="ui red button" type="submit" value="Delete"> 
               </form>
           </div>
       </div>
   </div>
   <br>
   <br>

   @endforeach



   <br>
   <br>
   <br>
   <br>
   <h1>
       <form class="ui form" action="/welcome" method="post">
        {{csrf_field()}}
        <label for="name">Nom du bonbon</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="qty">Quantité</label>
        <input type="text" name="qty" id="qty">
        <br>
        <input type="submit" value="save" class="ui green button">

    </form>
</h1>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>