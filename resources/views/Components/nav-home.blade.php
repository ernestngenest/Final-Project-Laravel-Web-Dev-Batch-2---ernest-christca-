@if($status === 'Home')
    <nav class="navbar navbar-expand-lg bg-light p-0 m-0">
        <div class="container-fluid" style="background-color: rgba(28, 57, 101, 1);">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="">
            <div class="logo"><img src="{{ asset('assets/build-logo.png'); }}" alt="build"></div>
            </div>
            <div class="collapse navbar-collapse justify-content-center"  id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active my-3 mx-5 text-light fs-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active my-3 mx-5 text-light fs-2" aria-current="page" href="#">AboutUs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active my-3 mx-5 text-light fs-2" aria-current="page" href="#">ContactUs</a>
                    </li>
                </ul>
            </div>
            @auth

            @else
                <div class="d-flex">
                    <div class="sign-in">
                        <a href="/auth/login" class="  btn btn-outline-light my-3 mx-3 fs-4">Sign in</a>
                    </div>
                    <div class="get-started">
                        <a href="/auth/register" class="   btn btn-outline-light my-3 mx-3 fs-4">Get Started</a>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
@elseif($status == 'Login')
    <nav class="navbar navbar-expand-md " style="background-color: rgba(28, 57, 101, 1)">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/build-logo.png'); }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 me-3 mb-lg-0">
                    <div class="cus-title" style="color:white;">
                        <h1>Login</h1>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
@elseif($status == 'Register')
    <nav class="navbar navbar-expand-md " style="background-color: rgba(28, 57, 101, 1)">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/build-logo.png'); }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 me-3 mb-lg-0">
                    <div class="cus-title" style="color:white;">
                        <h1>Register</h1>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
@endif
