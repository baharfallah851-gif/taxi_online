@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-floating mb-3 mt-3">
                <div>
                    <h4 class="card-title text-center title admin-title">Admin Table</h4>
                </div>
                <div>
                    <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                            onclick="window.location='{{Route('admin.add') }}'">
                        ADD
                    </button>
                </div>
                <table class="table table-bordered">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <th>username</th>
                        <th>option</th>
                    </tr>
                    </thead>
                    @csrf
                    @foreach($admins as $admin)
                        <tbody class="text-center">
                        <tr>
                            <td>{{$admin->username}}</td>
                            <td>
                                <a href="{{Route('admin.show',['admin' => $admin])}}"
                                   class="btn btn-info"><i class="mdi mdi-pencil"></i> UPDATE</a>
                                <a href="{{route('admin.delete',['admin' => $admin])}}" class="btn btn-danger"><i
                                        class="mdi mdi-trash-can-outline"></i>DELETE</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
