@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center title customer-title">Update Car</h4><br>
                <form method="post" action="{{route('car.update',['car' => $car])}}" class="form-sample">
                    @csrf
                    <div class="row">             {{-- 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Driver Name</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control" name="driver_id" required>
                                        @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}" @if($driver->id == $car->driver_id)selected @endif>{{$driver->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Make</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control" name="make_id" required>
                                        @foreach($makes as $make)
                                            <option value="{{$make->id}}" @if($make->id == $car->make_id)selected @endif>{{$make->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                {{-- 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">model id</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control" name="model_id" required>
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}" @if($model->id == $car->model_id)selected @endif>{{$model->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">manufacture year</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="manufacture_year" min="0" step="1"
                                           inputmode="decimal" placeholder="enter manufacture year"
                                           value="{{$car -> manufacture_year}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                   {{-- 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">color</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="color"
                                           placeholder="enter color" value="{{$car -> color}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">licence plate</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="licence_plate" min="0" step="1"
                                           inputmode="decimal" placeholder="enter license plate"
                                           value="{{$car -> licence_plate}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                   {{-- 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">car type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="car_type"
                                           placeholder="enter car type" value="{{$car -> car_type}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">technical inspection</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" class="form-control-sm" name="technical_inspection"
                                           inputmode="decimal" value="1"
                                           @if($car->technical_inspection == 1) checked @endif>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" style="margin-top: 30px">Update Car</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
