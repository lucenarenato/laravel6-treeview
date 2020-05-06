<head>
    <base href="{{URL::asset('/')}}" target="_top">
    
    <link rel="stylesheet" href="{{{ URL::asset('assets/css/bootstrap.min.css')}}}" />
      <link rel="stylesheet" href="{{{ URL::asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}}" />
      <link rel="stylesheet" href="{{{ URL::asset('css/theme.min.css') }}}" class="theme-stylesheet" id="theme-style" />
      
      <script type="text/javascript" src="{{{ URL::asset('js/jquery.2.1.1.min.js')}}}"></script>
      <script src="{{{ URL::asset('assets/js/bootstrap.min.js')}}}"></script>
      <script src="{{{ URL::asset('assets/js/theme.min.js')}}}"></script>
    </head>
    <body class="no-skin">
    @include('partials.header')
    <div class="main-container" id="main-container">
      @include('partials.sidebar')
      <div class="main-content"> 
        <div class="main-content-inner">
          <div class="breadcrumbs" id="breadcrumbs">
            
          </div>
          @yield('content') 
        </div>
      </div>
     @include('partials.footer')
    </div>
    </body>