<div class="">
    <input type="hidden" name="customer_id" value="{{$customer -> id}}">
    <form method="post" id="save-address-form" action="{{route('address.save',['customer'=>$customer])}}"
          class="was-validated">
        @csrf
        <div class="form-row">

            <div class="row">                       {{--  1  --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" placeholder="enter title"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" placeholder="enter address"
                                   required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">                         {{--  1  --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">postal code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="postal_code" placeholder="enter postal code"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="unit" placeholder="enter unit"
                                   required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-success" id="save-address-btn"
                        href="{{route('address.index', ['customer' => $customer])}}"
                        onclick="saveAddress();return false" style="margin: 20px">ADD
                </button>
            </div>

        </div>
    </form>
</div>
