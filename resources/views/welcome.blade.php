<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       

        <title>Teams</title>

  
       
    </head>
    <body>
        <div class="blog-masthead">
            <div class="container">
                    @if (Auth::check())
                    <a class="nav-link ml-auto" href="#">{{ Auth()->user()->name }}</a>
                    <a class="nav-link ml-auto" href="/logout">Logout</a>
                    @endif
                    @if(!Auth::check())
                    
                    <a class="nav-link ml-auto" href="/register">Registration</a>
                    <a class="nav-link ml-auto" href="/login">Login</a>

                    @endif
                </nav>
            </div>
        </div>
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
