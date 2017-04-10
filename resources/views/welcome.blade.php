<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/application.css') }}" />
        <!-- Styles -->
    </head>
    <body>
    <!--tp navigation bar-->
    @include('includes.header')
        <div id="wrapper" class="active">
      
          <!-- Sidebar -->
                <!-- Sidebar -->
          <div id="sidebar-wrapper">
              <ul id="sidebar_menu" class="sidebar-nav">
                   <li class="sidebar-brand">menu</li>
              </ul>
                @include('includes.sidebar')
          </div>
              
          <!-- Page content -->
          <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
              <div class="row">
                <div class="col-md-4">
                  <p class="well lead">An Experiment using the sidebar template from startbootstrap.com which I integrated in my website (<a href="http://animeshmanglik.name">animeshmanglik.name</a>)</p>
                  <p class="well lead">Click on the Menu to Toggle Sidebar . Hope you enjoy it!</p> 
                </div>
                <div class="col-md-4">
                  <p class="well lead">An Experiment using the sidebar template from startbootstrap.com which I integrated in my website (<a href="http://animeshmanglik.name">animeshmanglik.name</a>)</p>
                  <p class="well lead">Click on the Menu to Toggle Sidebar . Hope you enjoy it!</p> 
                </div>
                <div class="col-md-4">
                  <p class="well lead">An Experiment using the sidebar template from startbootstrap.com which I integrated in my website (<a href="http://animeshmanglik.name">animeshmanglik.name</a>)</p>
                  <p class="well lead">Click on the Menu to Toggle Sidebar . Hope you enjoy it!</p> 
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/jQuery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
