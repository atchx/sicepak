@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ranperda Tentang Pertanggungjawaban Pelaksanaan APBD dan Ranperkada Tentang Penjabaran Pertanggungjawaban APBD</h4>
                @if (session()->has('success'))
                <div class="alert alert-success fade show" role="alert">{{ session('success') }}</div>
                @endif
                @if (auth()->user()->roles == 'Admin')
                <a href="/pjs/create" class="btn btn-success btn-rounded btn-sm">Input Data +</a>
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
                      @include('pjs.data.asahan')
                      @include('pjs.data.bb')
                      @include('pjs.data.binjai')
                      @include('pjs.data.dairi')
                      @include('pjs.data.ds')
                      @include('pjs.data.gs')
                      @include('pjs.data.hh')
                      @include('pjs.data.karo')
                      @include('pjs.data.lb')
                      @include('pjs.data.lbs')
                      @include('pjs.data.lbu')
                      @include('pjs.data.langkat')
                      @include('pjs.data.mn')
                      @include('pjs.data.medan')
                      @include('pjs.data.nias')
                      @include('pjs.data.nb')
                      @include('pjs.data.ns')
                      @include('pjs.data.nu')
                      @include('pjs.data.pl')
                      @include('pjs.data.plu')
                      @include('pjs.data.ps')
                      @include('pjs.data.pb')
                      @include('pjs.data.psiantar')
                      @include('pjs.data.samosir')
                      @include('pjs.data.sb')
                      @include('pjs.data.sibolga')
                      @include('pjs.data.simalungun')
                      @include('pjs.data.tb')
                      @include('pjs.data.ts')
                      @include('pjs.data.tt')
                      @include('pjs.data.tu')
                      @include('pjs.data.ttinggi')
                      @include('pjs.data.toba')
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