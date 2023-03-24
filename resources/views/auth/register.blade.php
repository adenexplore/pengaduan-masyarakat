@extends('layouts.auth')
@section('content')
    
    <h1 class="fs-5 text-secondary">Register</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group position-relative has-icon-left mb-2">
            <input name="nik" type="number" class="form-control form-control-lg" placeholder="NIK">
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/person-vcard.svg') }}" alt="">
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
            <input name="nama" type="text" class="form-control form-control-lg" placeholder="Nama">
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/person.svg') }}" alt="">
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
            <select name="jk" id="" class="form-control" selected >
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/person.svg') }}" alt="">
            </div>
                
            
            <!-- <input name="nama" type="text" class="form-control form-control-lg" placeholder="Jenis Kelamin">
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/person.svg') }}" alt="">
            </div> -->
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
            <input name="username" type="text" class="form-control form-control-lg" placeholder="Username">
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/person.svg') }}" alt="">
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
            <input name="password" type="password" class="form-control form-control-lg" placeholder="Password">
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/key.svg') }}" alt="">
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
            <input name="telp" type="number" class="form-control form-control-lg"  placeholder="No. Telepon" >
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/telephone.svg') }}" alt="">
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
            <textarea name="alamat" id="" cols="30" rows="10"  class="form-control"placeholder="isi alamat anda"></textarea>
            <div class="form-control-icon">
                <img width="25px" src="{{ asset('assets/bootstrap-icons/telephone.svg') }}" alt="">
            </div>
        </div>
        
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Register</button>
    </form>
    <div class="text-center mt-2 text-lg fs-5">
        <p class='text-gray-600'>Sudah memiliki akun? <a href="{{ route('login') }}" class="font-bold text-primary">Login</a>.</p>
    </div>
    
@endsection