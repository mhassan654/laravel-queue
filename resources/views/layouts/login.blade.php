<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ \Session::get('app.title') }} :: {{ trans('app.signin') }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ \Session::get('app.favicon') }}" type="image/x-icon" />
    <!-- font-awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel='stylesheet'>
    <!-- template bootstrap -->
    {{-- <link href="{{ asset('assets/css/template.min.css') }}" rel='stylesheet prefetch'> --}}
    <!-- select2 -->
    {{-- <link href="{{ asset('assets/css/select2.min.css') }}" rel='stylesheet'> --}}
    <!-- Jquery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body >
     <div class="loader">
        <div>
            <span>s</span>
            <span>A</span>
            <span>A</span>
            <span>V</span>
            <span></span>
            <span>T</span>
            <span>E</span>
            <span>C</span>
            <span>H</span>
            {{-- <span>E</span>
            <span>L</span> --}}
        </div>
    </div>
    <!-- component -->

<div class=" dark:bg-gray-900">
    <div class="flex justify-center h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                <div>
                    <h2 class="text-4xl font-bold text-white">Token</h2>

                    <p class="max-w-xl mt-3 text-gray-300">Queue Management System</p>
                </div>
            </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6 dark:bg-gray-900">
            <div class="flex-1">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">{{ \Session::get('app.title') }}</h2>
                        {{-- <img src="{{ asset('assets/img/icons/logo.jpg') }}" width="300" > --}}

                    <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                </div>
                @include('backend.common.info')
                <div class="mt-8">

                    <form method="post" action="{{ route('login.post')}}">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400
                            bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400
                            dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" value="{{ old('email') }}" />
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>
                            </div>

                            <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400
                            bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400
                            dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" value="{{ old('password') }}"/>
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="col-xs-6">
                            {{-- @yield('info.language') --}}
                        </div>
                        <div class="mt-6">
                            <button type="submit"
                                class="w-full px-4 py-2 tracking-wide text-white transition-colors
                                duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none
                                focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Sign in
                            </button>
                        </div>

                    </form>

                    <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                </div>
            </div>

        </div>
        @yield('info.login-credentials')
    </div>
    <footer class="cm-footer">
        <span class="col-sm-8 col-xs-12 text-left">@yield('info.powered-by') @yield('info.version')</span>
        <span class="col-sm-4 col-xs-12 text-right hidden-xs"> {{ \Session::get('app.copyright_text') }}</span>
    </footer>
</div>

    {{-- <div class="text-center" style="padding:35px 0 30px 0;background:#fff;border-bottom:1px solid #ddd;">
        <h2 class="text-primary text-center text-uppercase">{{ \Session::get('app.title') }}</h2>
        <img src="{{ asset('assets/img/icons/logo.jpg') }}" width="300" >
    </div> --}}






</div>


    <!-- Jquery  -->
    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    <!-- bootstrp -->
    {{-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
    <!-- select2 -->
    {{-- <script src="{{ asset('assests/js/select2.min.js') }}"></script> --}}

    <script type="text/javascript">

    $(function() {
        $('table tbody tr').on('click', function() {
            $("input[name=email]").val($(this).children().first().text());
            $("input[name=password]").val($(this).children().first().next().text());
        });

        // select2
        // $("select").select2();

        // //language switch
        // $("#lang-select").on('change', function() {
        //     var x = $(this).val();
        //     $.ajax({
        //        type:'GET',
        //        url:'{{ URL::to("common/language/") }}',
        //        data: {
        //           'locale' : x,
        //           '_token' : '<?php echo csrf_token() ?>'
        //        },
        //        success:function(data){
        //           history.go(0);
        //        }, error: function() {
        //         alert('failed');
        //        }
        //     });
        // });
    }(jQuery));

    //preloader
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
    </script>
</body>
</html>
