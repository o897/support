<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
        
        </div>
      </nav>

      
   


    <main >
        <div class="row">
            <div class="col-lg-2">
                <nav class="nav px-2 block">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agent.index') }}">
                                <i class=""></i>
                                <span class=""><h3>Dashboard</h3></span>
                            </a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class=""></i>
                                <span class=""><h3>Tickets</h3></span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class=""></i>
                                <span class=""><h3>Ticket logs</h3></span>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <h3>{{ __('Logout') }}</h3>
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>               
                        </li>
            
                       
                       
                    </ul>
                </nav>
            </div>

            <div class="col">
                <h4>Ticket 6</h4>
            </div>
            

            
          </div>
    </main>
</body>
</html>