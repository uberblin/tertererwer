@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('content')
    <div class="deviz container" style="text-align: center; font-size:25px; font-weight:bold;">
        <p>COMICS BROS - МЫ ЖИВЕМ КОМИКСАМИ</p>
    </div>
    <div class="row">
      <div class="col">
       <p style="font-size:30px;">О нас</p>
       <a style="font-size:30px;">Комкания "Comics Bros" основана более 20 лет назад, </br> тут мы продаем эксклюзивные комиксы,</br>
        которые найти самому, все комиксы в отличном состоянии!</br>
        Компания "Comics Bros" предлагает вам окунуться в фентезийный мир!
    </a>
      </div>
      <div class="col" style="font-size:20px; padding-left:-2px;">
        <p>
            Последнее поступление комиксов
        </p>
        <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="true"
        style="width: 50%; float:left;">

        
            
        
        <div class="carousel-indicators" style="margin:0px 0px 45px 0px;">

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="/larapraktika/public/img/kar6.jfif/" class="d-block w-100" alt="комикс">
                <p>Железный человек</p>
            </div>
            <div class="carousel-item">
                <img src="/larapraktika/public/img/kar2.jfif/" class="d-block w-100" alt="комикс">
                <p>Thor</p>
            </div>
            <div class="carousel-item">
                <img src="/larapraktika/public/img/kar3.jfif/" class="d-block w-100" alt="комикс">
                <p>S.H.I.E.L.D.</p>
            </div>
            <div class="carousel-item">
                <img src="/larapraktika/public/img/kar4.jfif/" class="d-block w-100" alt="комикс">
                <p>THE MONSTER</p>
            </div>
            <div class="carousel-item">
                <img src="/larapraktika/public/img/kar5.jfif/" class="d-block w-100" alt="комикс">
                <p>VOLVERIN</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
      </div>
      
    </div>

@endsection
@endsection
