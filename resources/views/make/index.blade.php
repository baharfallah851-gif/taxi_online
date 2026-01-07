@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <h4 class="card-title text-center title admin-title">Make Table</h4>
            </div>
            <div>
                <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                        onclick="window.location='{{ Route('make.add') }}'">
                    ADD
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <th>title</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($makes as $make)
                    @csrf
                        <tr>
                            <td>{{$make->title}}</td>
                            <td>
                                <a href="{{route('make.show',['make'=>$make])}}" class="btn btn-info"><i class="mdi mdi-pencil"></i> UPDATE </a>
                                <a href="{{route('make.delete',['make'=>$make])}}" class="btn btn-danger"><i class="mdi mdi-trash-can-outline"></i> DELETE </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
