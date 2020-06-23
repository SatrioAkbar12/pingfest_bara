@extends('layout_login')

@section('head_atribut')
    <link rel="stylesheet" href="{{asset('css/itv_home.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Pingfest</title>
@endsection

@section('itv_active','active')

@section('isi')
  <div class="container gap">
    <div class="row align-items-center top">
      <div class="col-md-7 col-sm-12 text-light mb-4">
        <h1>IT-Venture</h1>
        <h5>IT⁠-⁠Venture adalah suatu perlombaan untuk kalangan umum (pelajar atau non-pelajar) yang diusung mengajak para peserta lomba untuk mengaplikasikan pemanfataan teknologi dalam bentuk visual.</h5>
        <div class="row">
          <div class="col-sm-6">
            <a href="/it-venture/login"><button type="button" class="btn btn-block btn-outline-light">Login</button></a>
          </div>
          <div class="col-sm-6">
            <a href="/it-venture/register"><button type="button" class="btn btn-block btn-outline-light">Daftar</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-12 mb-4">
        <img src="{{asset('img/ITV.png')}}" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 col-md-12">
        <h1 class="text-center text-light">Tema</h1>
        <h2 class="sponsor-box">Visualisai Teknologi</h2>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 col-md-12 col-sm-12 text-center mt-4">
        <h1 class="text-white">Division</h1>
        <ul class="list-group list-group-flush sponsor-box">
            <li class="list-group-item bg-transparent">
                <div class="dropdown">
                    <button class="btn btn-transparent btn-block dropdown-toggle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <strong>Competitive Programming</strong>
                    </button>
                    <div class="dropdown-menu p-4 text-muted container-fluid bg-dark" >
                        <p>Salah satu dari empat lomba yang diadakan oleh IT-V PINGFEST 2020, yang mengajak para siswa/i aktif dengan jenjang pendidikan SMA/SMK/MA/sederajat untuk berkompetisi di bidang programming.</p>
                  </div>
              </div>
          </li>

         <li class="list-group-item bg-transparent">
                <div class="dropdown">
                    <button class="btn btn-transparent btn-block dropdown-toggle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Poster</strong>
                    </button>
                    <div class="dropdown-menu p-4 text-muted container-fluid bg-dark" >
                        <p>Salah satu dari empat lomba yang diadakan oleh IT-V PINGFEST 2020, yang mengajak masyarakat umum untuk menceritakan peran teknologi saat pandemic covid-19 terjadi melalui sebuah poster dengan design sekreatif mungkin.</p>
                  </div>
              </div>
          </li>

         <li class="list-group-item bg-transparent">
                <div class="dropdown">
                    <button class="btn btn-transparent btn-block dropdown-toggle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <strong>(Tik-Tok)</strong>
                    </button>
                    <div class="dropdown-menu p-4 text-muted container-fluid bg-dark" >
                        <p>Salah satu dari empat lomba yang diadakan oleh IT-V PINGFEST 2020, yang mengajak masyarakat umum untuk menceritakan peran teknologi saat pandemi covid-19 terjadi dengan cara yang kreatif dan menarik melalui platform Tiktok.</p>
                  </div>
              </div>
          </li>

         <li class="list-group-item bg-transparent">
                <div class="dropdown">
                    <button class="btn btn-transparent btn-block dropdown-toggle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <strong>Cover Lagu</strong>
                    </button>
                    <div class="dropdown-menu p-4 text-muted container-fluid bg-dark" >
                        <p>Salah satu dari empat lomba yang diadakan oleh IT-V PINGFEST 2020, yang mengajak masyarakat umum untuk ramai-ramai berkarya menciptakan cover lagu daerah dengan sekreatif mungkin.</p>
                  </div>
              </div>
          </li>

        </ul>
      </div>
    </div>
  </div>

  <div class="container mt-4">
     <div class="row align-items-center justify-content-center">
      <div class="col-lg-9 col-md-12 text-center">
        <h1 class="text-white">Time Line</h1>
        <div class="sponsor-box"><h4>Pendaftaran  : 1-21 Juli</h4></div>
        <div class="sponsor-box"><h4>Pengumpulan Karya  : 1-31 Juli</h4></div>
        <div class="sponsor-box"><h4>Penyeleksian Karya : 1-10 Agustus</h4></div>
        <div class="sponsor-box"><h4>Pengumuman Pemenang  : 15-16 Agustus</h4></div>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 col-md-12 text-center">
        <h1 class="text-white">Prize Pool</h1>
        <div class="sponsor-box"><h3>Rp 5.000.000,-</h3></div>
        <div class="sponsor-box"><h3>Rp 3.000.000,-</h3></div>
        <div class="sponsor-box"><h3>Rp 1.000.000,-</h3></div>
      </div>
    </div>
  </div>

  <div class="container mt-4 mb-4">
    <div class="col-md-12 col-sm-12 text-center">
      <h1 class="text-light">Our Sponsorship</h1>
    </div>
    <div class="row justify-content-center align-items-center sponsor-box ">
      <div class="col-md-6 ">
        <img src="{{asset('img/Maskot_Upperright.png')}}" class="img-fluid">
      </div>
    </div>
  </div>
@endsection
