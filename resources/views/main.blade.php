<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Covid Monitor</title>
        <script src="/js/app.js"></script>
        <link href="/css/app.css" rel="stylesheet">
     
    </head>
    <body>
        <div class="container-fluid nav-container">
            <aside class="sidebar">
                <h1>Covid Monitor</h1>
               <ul class="sidebar-ul">
                    <li class="item"><a href="">Countries</a></li>
                    <li class="item"><a href="">Statistic</a></li>
               </ul>
            </aside>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
            
                <form class="form-inline my-2 my-lg-0">
                    <input class="input-search mr-sm-2" type="search" placeholder="Search">
                    <button class="input-btn my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
       
       
        <div class="container-fluid content">
            <div class="row">
                <div class="col-md"><h1>Overview <span class="text-muted">/ Thailand</span></h1> </div>
             
            </div>
            <div class="row">
                <div class="col-md ">
                    <div class="card-custom">
                        <p class="card-title">Total Cases</p>
                        <p class="card-content">
                            1150
                        </p>
                    </div>
                </div>
                <div class="col-md"><div class="card-custom">
                        <p class="card-title">New Cases</p>
                        <p class="card-content"></p>
                    </div></div>
                <div class="col-md"><div class="card-custom">
                        <p class="card-title">Recovery</p>
                        <p class="card-content"></p>
                    </div></div>
            </div>
            
        
        </div>
            
  
    </body>

</html>
