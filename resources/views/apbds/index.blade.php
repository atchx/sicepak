@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ranperda Tentang APBD dan Ranperkada Tentang Penjabaran APBD</h4>
                @if (session()->has('success'))
                <div class="alert alert-success fade show" role="alert">{{ session('success') }}</div>
                @endif
                @if (auth()->user()->roles == 'Admin')
                <a href="/apbds/create" class="btn btn-success btn-rounded btn-sm">Input Data +</a>
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
                      @include('apbds.data.asahan')
                      @include('apbds.data.bb')
                      @include('apbds.data.binjai')
                      @include('apbds.data.dairi')
                      @include('apbds.data.ds')
                      @include('apbds.data.gs')
                      @include('apbds.data.hh')
                      @include('apbds.data.karo')
                      @include('apbds.data.lb')
                      @include('apbds.data.lbs')
                      @include('apbds.data.lbu')
                      @include('apbds.data.langkat')
                      @include('apbds.data.mn')
                      @include('apbds.data.medan')
                      @include('apbds.data.nias')
                      @include('apbds.data.nb')
                      @include('apbds.data.ns')
                      @include('apbds.data.nu')
                      @include('apbds.data.pl')
                      @include('apbds.data.plu')
                      @include('apbds.data.ps')
                      @include('apbds.data.pb')
                      @include('apbds.data.psiantar')
                      @include('apbds.data.samosir')
                      @include('apbds.data.sb')
                      @include('apbds.data.sibolga')
                      @include('apbds.data.simalungun')
                      @include('apbds.data.tb')
                      @include('apbds.data.ts')
                      @include('apbds.data.tt')
                      @include('apbds.data.tu')
                      @include('apbds.data.ttinggi')
                      @include('apbds.data.toba')
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