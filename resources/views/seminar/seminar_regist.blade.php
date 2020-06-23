@extends('layout_login')

@section('head_atribut')
    <link rel="stylesheet" href="{{asset('css/itv_home.css')}}">

    <title>Pingpes</title>
@endsection

@section('isi')
    <!-- Form Area -->
    <div class="container mt-4">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 col-md-12 form-box form-regist">

            <form method="POST" action="/seminar/simpan_data">
                {{ csrf_field() }}
                <h2 class="form-title">Pendaftaran Seminar</h2>
                <input type="text" name="nama" id="namaPeserta" class="form-control form-slot transparent-input" placeholder="Nama Peserta" value="{{ old('nama') }}" required>
                    {{-- @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif --}}

                <input type="email" name="email" id="emailPeserta" class="form-control form-slot transparent-input" placeholder="Email Peserta" value="{{ old('email') }}" required>
                    {{-- @if($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email')}}
                        </div>
                    @endif --}}

                <input type="text" name="no_hp" id="noHpPeserta" class="form-control form-slot transparent-input" placeholder="No Hp Peserta" value="{{ old('no_hp') }}" required>
                    {{-- @if($errors->has('no_hp'))
                        <div class="text-danger">
                            {{ $errors->first('no_hp')}}
                        </div>
                    @endif --}}

                <div class="button-area">
                    <input type="submit" class="form-button submit-button" value="SUBMIT">
                </div>
            </form>

         </div>
        </div>
      </div>
@endsection
