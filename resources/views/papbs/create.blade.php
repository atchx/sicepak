@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Input Data Ranperda Tentang Perubahan APBD Dan Ranperkada Tentang Penjabaran Perubahan APBD</h4>
                <form class="forms-sample" method="post" action="/papbs" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="name">Nama Kabupaten/Kota</label>
                    <select class="form-control" name="name" id="name" required>
                      @foreach ($daerahs as $daerah)
                          <option>{{ $daerah->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="posisi">Posisi</label>
                      <select class="form-control" id="posisi" name="posisi" required>
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
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="dd/mm/yyyy" required>
                  </div>
                  <div class="form-group">
                    <label for="files">File bukti</label>
                    <div class="input-group col-xs-12">
                        <input type="file" id="files" name="files" required>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="/papbs/" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection