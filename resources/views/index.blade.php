@extends('layout_login')

@section('head_atribut')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Pingfest</title>
@endsection

@section('home_active','active')

@section('isi')
  <div class="container mt-4 mb-4 ">
    <div class="row align-items-center top text-light">
      <div class="col-md-7 col-sm-12 ">
        <h1>Ayo ikuti festival teknologi P!NGFEST 2020! "Char-IT" </h1>
        <h2>“Creative Constraints”</h2>
      </div>
      <div class="col-md-5 col-sm-12  ">
        <img src="{{asset('img/Maskot_Upperright.png')}}" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container mt-4 gap">
    <div class="row align-items-center">
      <div class="col-md-5 col-sm-12 mb-4">
        <img src="{{asset('img/ITV.png')}}" alt="ITV" class="img-fluid ">
      </div>
      <div class="col-md-7 col-sm-12 sponsor-box">
        <h1>IT-Venture</h1>
        <p>IT⁠-⁠Venture adalah suatu perlombaan untuk kalangan umum (pelajar atau non-pelajar) dengan Tema “Visualisai Teknologi” yang diusung mengajak para peserta lomba untuk mengaplikasikan pemanfataan teknologi dalam bentuk visual.</p>
        <a href="/it-venture"><button type="button" class="btn btn-lg btn-outline-light">Selengkapnya</button></a>
      </div>
    </div>
  </div>

  <div class="container mt-4 gap">
    <div class="row align-items-center">
      <div class="col-md-5 col-sm-12 mb-4">
        <img src="{{asset('img/Semnas.png')}}" class="img-fluid" alt="Seminar">
      </div>
      <div class="col-md-7 col-sm-12 sponsor-box">
        <h1>Seminar Nasional</h1>
        <p>Seminar Nasional: LDR atau Learn Develops the Result adalah suatu seminar nasional yang ditujukan untuk kalangan muda terutama pelajar. Tema “Home Production” yang diusung mengajak para peserta seminar untuk dapat menghasilkan suatu karya apapun dengan ide mereka sendiri selama berada di rumah.</p>
        <a href="/seminar"><button type="button" class="btn btn-lg btn-outline-light">Selengkapnya</button></a>
      </div>
    </div>
  </div>

  <div class="container mt-4 ">
    <div class="row align-items-center">
      <div class="col-md-6 col-sm-12 mb-4" >
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xvZKUX_buyE"></iframe>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="row align-items-center">

            <a href="{{asset('img/dok_itv.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 col-md-6 mb-4">
              <img src="{{asset('img/dok_itv.jpg')}}" class="img-fluid" style="border-radius: 4px;">
            </a>

            <a href="{{asset('img/dok_semnas.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 col-md-6 mb-4">
              <img src="{{asset('img/dok_semnas.jpg')}}" class="img-fluid" style="border-radius: 4px;">
            </a>
            <a href="{{asset('img/dok_semnas2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 col-md-6 mb-4">
              <img src="{{asset('img/dok_semnas2.jpg')}}" class="img-fluid" style="border-radius: 4px;">
            </a>
            <a href="{{asset('img/dok_workshop.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 col-md-6 mb-4">
              <img src="{{asset('img/dok_workshop.jpg')}}" class="img-fluid" style="border-radius: 4px;">
            </a>

          </div>
        </div>
      </div>

      <div class="container mt-4 mb-4">
        <div class="col-md-12 col-sm-12 text-center">
         <h1>Our Sponsorship</h1>
        </div>
        <div class="row justify-content-center align-items-center sponsor-box ">
          <div class="col-md-6 ">
          <img src="{{asset('img/Maskot_Upperright.png')}}" class="img-fluid">
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection
