@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <h4 class="card-title text-center title admin-title">Trip Table</h4>
            </div>
            <div>
                <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                        onclick="window.location='{{Route('trip.add') }}'">
                    ADD
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <th>customer</th>
                        <th>driver</th>
                        <th>car</th>
                        <th>origin</th>
                        <th>destination</th>
                        <th>price</th>
                        <th>date</th>
                        <th>status</th>
                        <th>start time</th>
                        <th>end time</th>
                        <th>payment method</th>

                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($trips as $trip)
                        @csrf
                        <tr>
                            <td>{{$trip->customer?->first_name}}</td>
                            <td>{{$trip->driver?->first_name}}</td>
                            <td>{{$trip->car?->model->title}}</td>
                            <td>{{$trip->origin}}</td>
                            <td>{{$trip->destination}}</td>
                            <td>{{$trip->price}}</td>
                            <td>{{$trip->date}}</td>
                            <td>@if($trip->status == 1)
                                    successful
                                @elseif($trip->status == 2)
                                    pending
                                @elseif($trip->status == 3)
                                    canceled
                                @endif</td>
                            <td>{{$trip->start_at}}</td>
                            <td>{{$trip->end_at}}</td>
                            <td>@if($trip->payment_method == 1)
                                    cash
                                @elseif($trip->payment_method == 2)
                                    online
                                @endif</td>
                            <td>
                                <a href="{{route('trip.show',['trip'=>$trip])}}" class="btn btn-info"><i
                                        class="fa fa-pencil"></i> UPDATE </a>
                                <a href="{{route('trip.delete',['trip'=>$trip])}}" class="btn btn-danger"><i
                                        class="fa fa-trash"></i> DELETE </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
