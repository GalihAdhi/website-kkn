@extends('layout/admin')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
      <div class="row mb-3">
        <div class="col-lg-6">
          <h3 class="text-uppercase">tambah profesi warga</h3>
        </div>
        <div class="col-lg-6 text-end">
          <a href="{{url()->previous()}}" class="text-decoration-none text-danger">
            <i class="bi bi-arrow-left me-1"></i>kembali
          </a>
        </div>
      </div>
      <div class="row mb-3 justify-content-center">
        <div class="col-lg-8">
          <form action="/admin/data_profesi" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="profesi" class="form-label">Nama Produk</label>
            <input type="text" value="{{old('produk')}}" class="form-control @error('produk') is-invalid @enderror" id="produk" name="produk">
            @error('produk')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="profesi" class="form-label">Nama Pemilik</label>
            <input type="text" value="{{old('pemilik')}}" class="form-control @error('pemilik') is-invalid @enderror" id="pemilik" name="pemilik">
            @error('pemilik')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="profesi" class="form-label">Nomor HP</label>
            <input type="text" value="{{old('nomor')}}" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor">
            @error('nomor')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="profesi" class="form-label">Alamat</label>
            <input type="text" value="{{old('alamat')}}" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
            @error('alamat')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="profesi" class="form-label">Link Google Maps</label>
            <input type="text" value="{{old('gmaps')}}" class="form-control @error('gmaps') is-invalid @enderror" id="gmaps" name="gmaps">
            @error('gmaps')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar">
            @error('gambar')
              <div class="invalid-feedback">
                {{$message}}
              </div>                
            @enderror
          </div>
          <div class="mb-3">
            <button class="btn w-100 text-light" style="background-color: #F88154" type="submit"><i class="bi bi-cloud me-2"></i>Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
@endsection