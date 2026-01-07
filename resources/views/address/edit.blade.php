<div class="">
    <input type="hidden" name="customer_id" value="{{$address->customer->id}}">
    <form method="post" id="update-address-form"
          action="{{route('address.update',['address' => $address, 'customer' => $address->customer])}}"
          class="was-validated">
        @csrf
        <div class="form-row">
            <div class="row">                       {{--  1  --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" placeholder="enter title"
                                   value="{{$address->title}}" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" placeholder="enter address"
                                   value="{{$address->address}}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">                       {{--  2  --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">postal code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="postal_code" placeholder="enter postal code"
                                   value="{{$address->postal_code}}" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="unit" placeholder="enter unit"
                                   value="{{$address->unit}}" required>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-info" id="update-address-btn" style="margin: 15px"
                        onclick="updateAddress(this);return false"
                        href="{{route('address.index',['customer' => $address->customer->id])}}">
                    UPDATE
                </button>
            </div>

        </div>
    </form>
</div>
