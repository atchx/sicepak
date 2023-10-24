@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Halaman Kelola User</h4>
                @if (session()->has('success'))
                <div class="alert alert-success fade show" role="alert">{{ session('success') }}</div>
                @endif
                @if (auth()->user()->roles == 'Admin')
                <a href="/users/create" class="btn btn-success btn-rounded btn-sm">Input Data +</a>
                @endif
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>
                          Nama Akun
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Roles
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>
                          {{ $user->name }}
                        </td>
                        <td>
                          {{ $user->username }}
                        </td>
                        <td>
                          @if ($user->roles == 'Admin')
                          <label class="badge badge-success">Admin</label>
                          @else
                          <label class="badge badge-info">Kabupaten/Kota</label
                          @endif
                        </td>
                        <td>
                          <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-icon-text btn-sm">
                            Edit
                            <i class="ti-file btn-icon-append"></i>
                          </a>
                            <form action="/users/{{ $user->id }}" method="post" class="d-inline">
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