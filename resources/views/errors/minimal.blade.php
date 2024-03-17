<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.head')

    <!-- Styles -->
    <style>
    .full-height {
        height: 70vh;
        background: white;
        border-top: 1px solid #eeeeee
    }


    .code {
        border-right: 2px solid;
        font-size: 26px;
        padding: 0 15px 0 15px;
        font-size: 5rem;
        font-weight: bold
    }

    .message {
        font-size: 18px;
    }
    </style>
</head>

<body>
    <div class="bg-white">
        @include('partials.nav')
        <div class="container">
            <div class="row">
                <div-md-10 class="mx-auto">
                    <div class="row py-4">
                        <div class="col-md-5  mb-md-4">
                            <img src="{{asset('storage/assets/img/error-page.png')}}" alt="Error image"
                                class="img-fluid" />
                        </div>
                        <div class="col-md-6 py-md-8 py-4 text-md-start text-center mb-4">

                            <h1 class="display-2 mt-md-4 fw-bold"> @yield('code') !</h1>

                            <div class="text-lead lead">
                                @yield('message')
                            </div>
                        </div>
                    </div>
                </div-md-10>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>