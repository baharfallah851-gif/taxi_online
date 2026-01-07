@extends('layout.dashboard')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Add Trip</h4>
                <form method="post" action="{{route('trip.save')}}">
                    @csrf
                    <div class="row">               {{-- row = 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Customer Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="customer_id">
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Driver Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="driver_id">
                                        @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}">{{$driver->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Car Model</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="car_id">
                                        @foreach($cars as $car)
                                            <option value="{{$car->id}}">{{$car->model->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Origin</label>
                                <div class="col-sm-9">
                                    <input type="text" name="origin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Destination</label>
                                <div class="col-sm-9">
                                    <input type="text" name="destination" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Trip Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                        <option value="1">Successful</option>
                                        <option value="2">Pending</option>
                                        <option value="3">Canceled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 5 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Start Time</label>
                                <div class="col-sm-9">
                                    <input type="time" name="start_at" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">End Time</label>
                                <div class="col-sm-9">
                                    <input type="time" name="end_at" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 6 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Payment Method</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="payment_method">
                                        <option value="1">Cash</option>
                                        <option value="2">Online</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success mb-2" style="margin-top: 30px">Add Trip</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<style>
        .rating {
            direction: rtl; /* خیلی مهم */
            unicode-bidi: bidi-override;
            font-size: 35px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            color: #ccc;
            cursor: pointer;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: gold;
        }
    </style>

@endsection
