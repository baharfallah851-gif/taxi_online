@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center title customer-title">Add Car</h4><br>
                <form method="post" action="{{route('car.save')}}" class="form-sample">
                    @csrf
                    <div class="row">             {{-- 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">driver</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control" name="driver_id" required>
                                        @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}">{{$driver->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">make</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control" name="make_id" required>
                                        @foreach($makes as $make)
                                            <option value="{{$make->id}}">{{$make->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                {{-- 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">model</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control" name="model_id" required>
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->title}}</option>
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
                                           inputmode="decimal" placeholder="enter manufacture year">
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
                                           placeholder="enter color" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">licence plate</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="licence_plate" min="0" step="1"
                                           inputmode="decimal" placeholder="enter license plate">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                   {{-- 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">car type</label>
                                <div class="col-sm-9 gender-group">

                                    <label class="gender-option">
                                        <input type="radio" name="car_type" value="1" required>
                                        <i class="fa-solid fa-car"></i>
                                        <span>economy</span>
                                    </label>

                                    <label class="gender-option">
                                        <input type="radio" name="car_type" value="2">
                                        <i class="fa-solid fa-car-side"></i>
                                        <span>vip</span>
                                    </label>

                                    <label class="gender-option">
                                        <input type="radio" name="car_type" value="3">
                                        <i class="fa-solid fa-van-shuttle"></i>
                                        <span>van</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">technical inspection</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" class="form-control-sm" name="technical_inspection"
                                           inputmode="decimal" value="1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" style="margin-top: 30px">Add Car</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <style>
        {{-- car type css --}}
        /* گروه‌بندی گزینه‌ها */
        .gender-group {
            display: flex;
            gap: 10px;
        }

        /* استایل پایه گزینه‌ها */
        .gender-option {
            padding: 8px 18px;
            border-radius: 999px; /* شکل کپسولی */
            background: #111;
            color: #888;
            border: 1px solid #2a2a2a;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.25s ease;
        }

        /* مخفی کردن رادیو */
        .gender-option input {
            display: none;
        }

        /* آیکن‌ها */
        .gender-option i {
            font-size: 16px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        /* خم کردن آیکن‌ها برای حالت پویا */
        .gender-option .fa-car {
            transform: rotate(-10deg);
        }

        .gender-option .fa-car-side {
            transform: rotate(10deg);
        }

        .gender-option .fa-van-shuttle {
            transform: rotate(-5deg);
        }

        /* حالت انتخاب‌شده */
        .gender-option:has(input:checked) {
            color: #fff;
            border-color: #00e5ff;
            background: #0d0d0d;
            box-shadow:
                0 0 6px rgba(0,229,255,0.5),
                0 0 14px rgba(0,229,255,0.25);
            transform: translateY(-1px);
        }

        /* هاور */
        .gender-option:hover {
            color: #ccc;
        }

        /* هاور روی آیکن، کمی بزرگ و صاف می‌شود */
        .gender-option:hover i {
            transform: rotate(0deg) scale(1.1);
        }

        {{--! car type css --}}
    </style>
@endsection
