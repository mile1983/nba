<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       

        <title>Teams</title>

  
       
    </head>
    <body>


        <h1>Teams</h1>
        <ul>
                @foreach($teams as $team)
                <li>
               <a href ="{{route("single-team",["id"=>$team->id])}}" >
                {{$team->name}}
                 </a> 
                </li>
       
                @endforeach
            </ul>







    </body>
</html>
