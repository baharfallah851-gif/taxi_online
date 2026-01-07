@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <h4 class="card-title text-center title admin-title">Model Table</h4>
            </div>
            <div>
                <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                        onclick="window.location='{{ Route('model.add') }}'">
                    ADD
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <th>make</th>
                        <th>title</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($models as $model)
                        @csrf
                        <tr>
                            <td>{{$model->make?->title}}</td>
                            <td>{{$model->title}}</td>
                            <td>
                                <a href="{{route('model.show',['model'=>$model])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE </a>
                                <a href="{{route('model.delete',['model'=>$model])}}" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
