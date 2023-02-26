<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('layouts.meta')
        @include('layouts.css')
    </head>
    <body>
        @php
            echo "PHP_test";
        @endphp
        <!--上方導航頁-->
        @include('layouts.nav')
       
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>

         <!--下方導航頁-->
         @include('layouts.footer')

         @include('layouts.js')
         <script>
            @section('inline_js')
                function alertHook(message){
                    alert('alertHook:  ' + message);
                }
            @show
         </script>
    </body>
</html>