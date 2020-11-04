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
                <h1>Sidebar header</h1>
               <ul class="sidebar-ul">
                    <li class="item">Countries</li>
                    <li class="item">Statistic</li>
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
                <div class="col-md"><h1>Overview</h1></div>
             
            </div>
            <div class="row ">
                <div class="col-md">
                    <div class="card-custom">
                        test
                    </div>
                </div>
                <div class="col-md"><div class="card-custom">
                        test
                    </div></div>
                <div class="col-md"><div class="card-custom">
                        test
                    </div></div>
            </div>
            
        
        </div>
            
  
    </body>

</html>
