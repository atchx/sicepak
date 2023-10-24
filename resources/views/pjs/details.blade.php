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
                <a href="/pjs/create" class="btn btn-success btn-rounded btn-sm">Input Data +</a>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>
                          Kabupaten/Kota
                        </th>
                        <th>
                          Posisi
                        </th>
                        <th>
                          Tanggal
                        </th>
                        <th>
                          Files
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($surats as $surat)
                      <tr>
                        <td>
                          {{ $surat->users->name }}
                        </td>
                        <td>
                          {{ $surat->posisi }}
                        </td>
                        <td>
                          {{ $surat->tanggal }}
                        </td>
                        <td>
                          <a href="{{ asset('storage/' . $surat->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
                            <i class="ti-file btn-icon-prepend"></i>
                            View
                          </a>
                        </td>
                        <td>
                          <a href="/pjs/{{ $surat->id }}/edit" class="btn btn-warning btn-icon-text btn-sm">
                            Edit
                            <i class="ti-file btn-icon-append"></i>
                          </a>
                            <form action="/pjs/{{ $surat->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-icon-text btn-sm" onclick="return confirm('Hapus data?')">
                                  <i class="ti-alert btn-icon-prepend"></i>                                                    
                                  Hapus
                              </button>
                            </form>
                        </td>
                      @endforeach
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection