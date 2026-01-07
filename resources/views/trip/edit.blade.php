@extends('layout.dashboard')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Update Trip</h4>
                <form method="post" action="{{route('trip.update', ['trip' => $trip])}}">
                    @csrf
                    <div class="row">               {{-- row = 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Customer Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="customer_id">
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}"
                                                    @if($customer->id == $trip->customer_id) selected @endif>{{$customer->first_name}}</option>
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
                                            <option value="{{$driver->id}}"
                                                    @if($driver->id == $trip->driver_id) selected @endif>{{$driver->first_name}}</option>
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
                                            <option value="{{$car->id}}"
                                                    @if($car->id == $trip->car_id) selected @endif>{{$car->model->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Origin</label>
                                <div class="col-sm-9">
                                    <input type="text" name="origin" class="form-control" value="{{$trip->origin}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Destination</label>
                                <div class="col-sm-9">
                                    <input type="text" name="destination" class="form-control"
                                           value="{{$trip->destination}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control" value="{{$trip->price}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" name="date" class="form-control" value="{{$trip->date}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Trip Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                        <option value="1" @if($trip->status == 1) selected @endif>Successful</option>
                                        <option value="2" @if($trip->status == 2) selected @endif>Pending</option>
                                        <option value="3" @if($trip->status == 3) selected @endif>Canceled</option>
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
                                    <input type="time" name="start_at" class="form-control"
                                           value="{{$trip->start_at}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Eed Time</label>
                                <div class="col-sm-9">
                                    <input type="time" name="end_at" class="form-control" value="{{$trip->end_at}}">
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
                                        <option value="1" @if($trip->payment_method == 1) selected @endif>Cash</option>
                                        <option value="2" @if($trip->payment_method == 2) selected @endif>Online
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info mb-2" style="margin-top: 30px">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
