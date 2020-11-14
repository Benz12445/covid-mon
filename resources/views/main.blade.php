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
        
                        @foreach($continents as $a_country)
                            <li class="sub-item"><a data-toggle="collapse" href="#{{str_replace(' ','-',strtolower($a_country->continent))}}">{{$a_country->continent}}</a></li>
                            @foreach($a_country->country as $c_item)
                              
                                <div class="collapse" id="{{str_replace(' ','-',strtolower($a_country->continent))}}">
                                    <li class="mini-sub-item"><a href="/country/{{$c_item->country}}">{{$c_item->country}}</a></li>
                                    
                                </div>
                            @endforeach
                        @endforeach
                        
                       
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
         
            <div class="row mt-5">
                <div class="col-md">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Date</th>
                            <th>Total Case</th>
                            <th>New Case</th>
                            <th>Recovery</th>
                            <th>Death</th>
                        </thead>
                        <tbody>
                            @php $i = 1;@endphp
                            @foreach($table_data->dates as $index => $data)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{Date('d-M-Y',strtotime($index))}}</td>
                                    <td>{{$data->countries->$country->today_confirmed}}</td>
                                    <td>{{$data->countries->$country->today_new_confirmed}}</td>
                                    <td>{{$data->countries->$country->today_new_recovered}}</td>
                                    <td>{{$data->countries->$country->today_deaths}}</td>
                                    <td></td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                            <tr></tr>
                        </tbody>
                       
                    </table>
                </div>
                
            </div>
        
        </div>
        <div class="container">
        
        
        </div>

       
            
  
    </body>

</html>
