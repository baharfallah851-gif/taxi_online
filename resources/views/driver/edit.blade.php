@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center title driver-title">Update Driver</h4><br>
                <form method="post" action="{{route('driver.update',['driver'=>$driver])}}" class="form-sample"
                      enctype="multipart/form-data">   {{--enctype = فایل ها هم همراه متن ها بفرست--}}
                    @csrf
                    <div class="row">             {{-- 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">first name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="enter first name" value="{{$driver->first_name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">last name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="enter last name" value="{{$driver->last_name}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                {{-- 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">phone number</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="phone_number"
                                           placeholder="enter phone number" value="{{$driver->phone_number}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="enter email"
                                           value="{{$driver->email}}"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                   {{-- 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">username</label>
                                <div class="form-group col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" name="username" class="form-control"
                                               placeholder="enter Username" aria-label="Username"
                                               aria-describedby="basic-addon1" value="{{$driver->username}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password"
                                           placeholder="enter password" value="{{$driver->password}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">            {{-- 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9 gender-group">
                                    <label class="gender-option">
                                        <input type="radio" name="gender" value="1"
                                               @if($driver->gender == 1) checked @endif required>
                                        <i class="fa-solid fa-mars"></i>
                                        <span>Man</span>
                                    </label>

                                    <label class="gender-option">
                                        <input type="radio" name="gender" value="2"
                                               @if($driver->gender == 2) checked @endif>
                                        <i class="fa-solid fa-venus"></i>
                                        <span>Woman</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                   {{-- 5 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input type="date" name="birth_date" class="form-control" placeholder="dd/mm/yyyy"
                                           value="{{$driver->birth_date}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">national code</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="national_code"
                                           placeholder="enter national code" value="{{$driver->national_code}}"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                {{-- 6 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">total trips</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="total_trips" min="0" step="1"
                                           inputmode="decimal" placeholder="enter total trips"
                                           value="{{$driver->total_trips}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">total income</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="total_income" min="0" step="1"
                                           inputmode="decimal" placeholder="enter total income"
                                           value="{{$driver->total_income}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">              {{-- 7 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">province</label>
                                <div class="col-sm-9">
                                    <select name="province_id" class="form-control" required>
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}"
                                                    @if($province->id == $driver->province_id) selected @endif>{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">city</label>
                                <div class="col-sm-9">
                                    <select name="city_id" class="form-control" required>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}"
                                                    @if($city->id == $driver->city_id) selected @endif>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                        {{-- 8 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">license number</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="license_number"
                                           placeholder="enter license number" value="{{$driver->license_number}}"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">license expired at</label>
                                <div class="col-sm-9">
                                    <input type="date" name="license_expired_at" class="form-control"
                                           placeholder="dd/mm/yyyy" value="{{$driver->license_expired_at}}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">              {{-- 9 --}}
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label">rating</label>

                                <div class="rating">
                                    <input type="radio" name="rating" id="star5" value="5"
                                           @if($driver->rating == 5) checked @endif>
                                    <label for="star5">★</label>

                                    <input type="radio" name="rating" id="star4" value="4"
                                           @if($driver->rating == 4) checked @endif>
                                    <label for="star4">★</label>

                                    <input type="radio" name="rating" id="star3" value="3"
                                           @if($driver->rating == 3) checked @endif>
                                    <label for="star3">★</label>

                                    <input type="radio" name="rating" id="star2" value="2"
                                           @if($driver->rating == 2) checked @endif>
                                    <label for="star2">★</label>

                                    <input type="radio" name="rating" id="star1" value="1"
                                           @if($driver->rating == 1) checked @endif>
                                    <label for="star1">★</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">is active</label>
                                <div class="col-sm-9">
                                    <input class="form-check-input" style="margin: 15px" type="checkbox" id="is_active"
                                           name="is_active" value="1" @if($driver->is_active == 1) checked @endif>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">                            {{-- 10 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Upload Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image"
                                           accept="image/*"> {{-- accept-> فقط فایل های تصویری--}}

                                    {{-- مسیر عکس قبلی --}}
                                    <input type="hidden" name="old_image"
                                           value="{{$driver->image}}"> {{--چون تابپ فابل value نمیگیره--}}
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info" style="margin-top: 30px">Add Driver</button>
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
