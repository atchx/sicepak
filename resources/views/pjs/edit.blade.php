@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Data Ranperda Tentang Pertanggungjawaban Pelaksanaan APBD dan Ranperkada Tentang Penjabaran Pertanggungjawaban APBD</h4>
                <form class="forms-sample" method="post" action="/pjs/{{ $surat->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                  <div class="form-group">
                    <label for="name">Nama Kabupaten/Kota</label>
                    <select class="form-control" name="name" id="name" required>
                      <option value="{{ $surat->users->name }}" selected hidden>{{ $surat->users->name }}</option>
                      @foreach ($daerahs as $daerah)
                          <option>{{ $daerah->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="posisi">Posisi</label>
                      <select class="form-control" id="posisi" name="posisi" aria-placeholder="{{ $surat->posisi }}" required>
                        <option value="{{ $surat->posisi }}" selected hidden>{{ $surat->posisi }}</option>
                        <option>Evaluator</option>
                        <option>Biro Hukum Setdaprovsu</option>
                        <option>Asisten Pemerintahan Sekdaprovsu</option>
                        <option>Asisten Administrasi Umum dan Aset Sekdaprovsu</option>
                        <option>Sekretaris BPKAD Provsu</option>
                        <option>Pemerintah Kabupaten/Kota</option>
                        <option>Sekretaris Daerah Provinsi Sumatera Utara</option>
                        <option>Wakil Gubernur Sumatera Utara</option>
                        <option>Gubernur Sumatera Utara</option>
                      </select>
                    </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $surat->tanggal }}" placeholder="dd/mm/yyyy" required>
                  </div>
                  <div class="form-group">
                    <label for="files">File bukti</label>
                    <div class="input-group col-xs-12">
                        <input type="file" id="files" name="files" required>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="/pjs/" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection