@extends('dashboard.layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Input Data User</h4>
                <form class="forms-sample" method="post" action="/users">
                    @csrf
                  <div class="form-group">
                    <label for="name">Name Akun</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="roles">Roles</label>
                      <select class="form-control" id="roles" name="roles" required>
                        <option value="User">Kabupaten/Kota</option>
                        <option value="Admin">Admin</option>
                      </select>
                    </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="/users/" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection