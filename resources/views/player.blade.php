<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       

        <title>Teams</title>

  
       
    </head>
    <body>
            <h1>
                {{$player->first_name}}
                <br>
                {{$player->last_name}}
                <br>
                {{$player->email}}
                <br>
                {{$player->team->name}}
                
                
                
            </h1>
          






    </body>
</html>