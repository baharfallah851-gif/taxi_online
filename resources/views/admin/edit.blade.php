@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center title admin-title">Update Admin</h4><br>
                <form method="post" action="{{route('admin.update', ['admin' => $admin])}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" value="{{$admin->username}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" value="{{$admin->password}}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">UPDATE Admin</button>
                </form>
            </div>
        </div>
    </div>
@endsection
