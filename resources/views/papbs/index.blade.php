@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ranperda Tentang Perubahan APBD dan Ranperkada Tentang Penjabaran Perubahan APBD</h4>
                @if (session()->has('success'))
                <div class="alert alert-success fade show" role="alert">{{ session('success') }}</div>
                @endif
                @if (auth()->user()->roles == 'Admin')
                <a href="/papbs/create" class="btn btn-success btn-rounded btn-sm">Input Data +</a>
                @endif
                @if (auth()->user()->roles == 'Admin')
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Kabupaten/Kota</th>
                        <th>Posisi Terakhir</th>
                        <th>Tanggal</th>
                        <th>Files</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @include('papbs.data.asahan')
                      @include('papbs.data.bb')
                      @include('papbs.data.binjai')
                      @include('papbs.data.dairi')
                      @include('papbs.data.ds')
                      @include('papbs.data.gs')
                      @include('papbs.data.hh')
                      @include('papbs.data.karo')
                      @include('papbs.data.lb')
                      @include('papbs.data.lbs')
                      @include('papbs.data.lbu')
                      @include('papbs.data.langkat')
                      @include('papbs.data.mn')
                      @include('papbs.data.medan')
                      @include('papbs.data.nias')
                      @include('papbs.data.nb')
                      @include('papbs.data.ns')
                      @include('papbs.data.nu')
                      @include('papbs.data.pl')
                      @include('papbs.data.plu')
                      @include('papbs.data.ps')
                      @include('papbs.data.pb')
                      @include('papbs.data.psiantar')
                      @include('papbs.data.samosir')
                      @include('papbs.data.sb')
                      @include('papbs.data.sibolga')
                      @include('papbs.data.simalungun')
                      @include('papbs.data.tb')
                      @include('papbs.data.ts')
                      @include('papbs.data.tt')
                      @include('papbs.data.tu')
                      @include('papbs.data.ttinggi')
                      @include('papbs.data.toba')
                    </tbody>
                  </table>
                </div>
                @else
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Posisi</th>
                        <th>Tanggal</th>
                        <th>Files</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($surats as $surat)
                      <tr>
                        <td>{{ $surat->posisi }}</td>
                        <td>{{ $surat->tanggal }}</td>
                        <td>
                          <a href="{{ asset('storage/' . $surat->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
                            <i class="ti-file btn-icon-prepend"></i>
                            View
                          </a>
                        </td>
                      @endforeach
                      </tr>
                    </tbody>
                  </table>
                </div>
                @endif
              </div>
            </div>
          </div>
    </div>
@endsection