@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <h4 class="card-title text-center title admin-title">Car Table</h4>
            </div>
            <div>
                <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                        onclick="window.location='{{ Route('car.add') }}'">
                    ADD
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <th>driver</th>
                        <th>make</th>
                        <th>model</th>
                        <th>manufacture year</th>
                        <th>color</th>
                        <th>licence plate</th>
                        <th>car type</th>
                        <th>technical inspection</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->driver?->first_name}}</td>
                            <td>{{$car->make?->title}}</td>
                            <td>{{$car->model?->title}}</td>
                            <td>{{$car->manufacture_year}}</td>
                            <td>{{$car->color}}</td>
                            <td>{{$car->licence_plate}}</td>
                            <td>@if($car->car_type == 1) economy @elseif($car->car_type == 2) vip @elseif($car->car_type == 3) van @endif</td>
                            <td>@if($car->technical_inspection == 1) ✔️ @else ❌ @endif</td>
                            <td>
                                <a href="{{route('car.show',['car'=>$car])}}" class="btn btn-info"><i
                                            class="mdi mdi-pencil"></i> UPDATE </a>
                                <a href="{{route('car.delete',['car'=>$car])}}" class="btn btn-danger"><i
                                            class="mdi mdi-trash-can-outline"></i> DELETE </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
