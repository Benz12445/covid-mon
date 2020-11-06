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
                    <li class="item"><a data-toggle="collapse" href="#countries">Countries</a></li>
                    <div class="collapse" id="countries">
                        <li class="sub-item"><a data-toggle="collapse" href="#affrica">Africa</a></li>
                            <div class="collapse" id="affrica">
                                <li class="mini-sub-item">asdasd</li>
                                
                            </div>
                        <li class="sub-item">Asia</li>
                            <div class="collapse" id="asia">
                                <li class="mini-sub-item">aaaa</li>
                                
                            </div>
                        <li class="sub-item">Europe</li>
                            <div class="collapse" id="europe">
                                <li class="mini-sub-item">asdasd</li>
                                
                            </div>
                        <li class="sub-item">North America</li>
                            <div class="collapse" id="north-america">
                                <li class="mini-sub-item">asdasd</li>
                                
                            </div>
                        <li class="sub-item">South America</li>
                            <div class="collapse" id="south-america">
                                <li class="mini-sub-item">asdasd</li>
                                
                            </div>
                    </div>
                    
                    <li class="item"><a href="">Statistic</a></li>
               </ul>
            </aside>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
            
                <form class="form-inline my-2 my-lg-0 search-form">
                    <input class="input-search mr-sm-2" type="search" >
                    <span><a href="">Search</a></span>

                    <!-- <button class="input-btn my-2 my-sm-0" type="submit">Search</button> -->
                </form>
            </nav>
        </div>
       
       
        <div class="container-fluid content">
            <div class="row mt-5">
                <div class="col-md"><h1>Overview <span class="text-muted">/ {{$country}}</span></h1> </div>
          
            </div>
            <div class="row mt-1">
                <div class="col-md ">
                    <div class="card-custom">
                        <p class="card-title">Total Cases</p>
                        <p class="card-content">
                          {{$total_case}}
                        
                        </p>
                    </div>
                </div>

                <div class="col-md ">
                    <div class="card-custom">
                        <p class="card-title">New Cases</p>
                        <p class="card-content">
                            {{$new_case}}
                        </p>
                    </div></div>

                <div class="col-md">
                    <div class="card-custom bg-success txt-light">
                        <p class="card-title">Recovery</p>
                        <p class="card-content">
                            {{$recovery}}
                        </p>
                    </div></div>

                <div class="col-md">
                    <div class="card-custom bg-dark txt-light">
                        <p class="card-title">Death</p>
                        <p class="card-content">
                            {{$death}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md">
                    <div class="card-container">


                    </div>
                </div>

            </div>
            
        
        </div>
            
  
    </body>

</html>
