@extends('layouts.main')

@section('content')
<div class="py-2" style="background-color: yellow;"></div>
    <div class="container-fluid d-grid" style="background-color: rgba(28, 57, 101, 1);">
    <div class="row">
        <div class="col-md-5  p-5 justify-content-center text-light" style="margin-left: 10vw">
        <div class="title-1" style="font-size: 10em;">BUILD</div>
        <div class="title-2 " style="font-size: 5em;">With Just</div>
        <div class="title-3" style="font-size: 4em;">one <span class="title-4  pl-0 pr-2 px-2 text-dark" style="background-color:yellow; font-size:2em">Click</span></div>
        </div>

        <div class="col-md-5  ms-5 p-5 justify-content-center">
            <img src="assets/jumbo2.png" alt="ernest">
        </div>
    </div>
    <div class="cus-container mx-2" style="background-color: rgba(28, 57, 101, 1);">
    <div class="card ">
        <a href="/material"><img class="img-3" src="./assets/card/1.png" alt="1"></a>
        <div class="intro">
        <h1>Material</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
        </div>
    </div>
    <div class="card">
        <a href="/"><img class="img-3" src="./assets/card/1.png" alt="1"></a>
        <div class="intro">
        <h1>Material</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
        </div>
    </div>
    <div class="card">
        <a href="/"><img class="img-3" src="./assets/card/1.png" alt="1"></a>
        <div class="intro">
        <h1>Material</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
        </div>
    </div>
    <div class="card">
        <a href="/"><img class="img-3" src="./assets/card/1.png" alt="1"></a>
        <div class="intro">
        <h1>Material</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
        </div>
    </div>
</div>
@endsection
