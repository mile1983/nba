<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       

        <title>Teams</title>

  
       
    </head>
    <body>
            <h1>
                {{$player->first_name}}
                {{$player->last_name}}
                {{$player->email}}
                {{$player->team->name}}
                
                
                
            </h1>
          






    </body>
</html>