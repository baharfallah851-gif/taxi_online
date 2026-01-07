@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center title customer-title">Add Customer</h4><br>
                <form method="post" action="{{route('customer.save')}}" class="form-sample">
                    @csrf
                    <div class="row">             {{-- 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">first name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="enter first name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">last name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="enter last name" required>
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
                                           placeholder="enter phone number" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="enter email"
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
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password"
                                           placeholder="enter password" required>
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
                                        <input type="radio" name="gender" value="1" required>
                                        <i class="fa-solid fa-mars"></i>
                                        <span>Man</span>
                                    </label>

                                    <label class="gender-option">
                                        <input type="radio" name="gender" value="2">
                                        <i class="fa-solid fa-venus"></i>
                                        <span>Woman</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input type="date" name="birth_date" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                {{-- 5 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">wallet balance</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="wallet_balance" min="0" step="1"
                                           inputmode="decimal" placeholder="enter wallet balance">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">total trips</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="total_trips" min="0" step="1"
                                           inputmode="decimal" placeholder="enter total trips">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">              {{-- 6 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">province</label>
                                <div class="col-sm-9">
                                    <select name="province_id" class="form-control" required>
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->name}}</option>
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
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title title text-center address-title"
                        style="margin-top: 30px; margin-bottom: 30px">Add Address</h4>
                    <div class="address-wrap">        {{-- row = address --}}
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-form-label">Address title</label>
                                <div class="col-sm-1">
                                    <input name="title[]" class="form-control" placeholder="title" required>
                                </div>

                                <label class="col-form-label">Full address</label>
                                <div class="col-sm-4">
                                    <input name="address[]" class="form-control" placeholder="address" required>
                                </div>

                                <label class="col-form-label">Postal code</label>
                                <div class="col-sm-2">
                                    <input name="postal_code[]" class="form-control" placeholder="postal code" required>
                                </div>

                                <label class="col-form-label">Unit</label>
                                <div class="col-sm-1">
                                    <input name="unit[]" class="form-control" placeholder="unit" required>
                                </div>

                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-success btn-sm" onclick="addAddress();return false">+
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="address-wrap new-address d-none">    {{-- row = address hidden --}}
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-form-label">Address title</label>
                                <div class="col-sm-1">
                                    <input name="title[]" class="form-control" placeholder="title">
                                </div>

                                <label class="col-form-label">Full address</label>
                                <div class="col-sm-4">
                                    <input name="address[]" class="form-control" placeholder="address">
                                </div>

                                <label class="col-form-label">Postal code</label>
                                <div class="col-sm-2">
                                    <input name="postal_code[]" class="form-control" placeholder="postal code">
                                </div>

                                <label class="col-form-label">Unit</label>
                                <div class="col-sm-1">
                                    <input name="unit[]" class="form-control" placeholder="unit">
                                </div>

                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-success btn-sm" onclick="addAddress();return false">+
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="removeAddress(this);return false">-
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="addresses"></div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" style="margin-top: 30px">Add Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function addAddress() {
            let address = $('.new-address').clone()                          //clone = کپی
            $(address).removeClass('new-address').removeClass('d-none')     //removeClass('hidden')--> حذف ویژگی پنهان بودن
            $('.addresses').append(address)                                 //removeClass('new_address')--> حذف اسم نیو ادرس از دیو برای جلوگیری از تکرار اضافه شدن فیلد
        }

        function removeAddress(el) {
            $(el).parents('.address-wrap').first().remove()
        }
    </script>
@endsection
