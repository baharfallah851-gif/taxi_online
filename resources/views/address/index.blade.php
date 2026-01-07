<div class="form-floating mb-3 mt-3">
    <input type="hidden" name="customer_id" value="{{$customer->id}}">
    <h4 class="text-center">Address Table</h4>
    <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
            onclick="addAddress(this);return false" href="{{Route('address.add',['customer'=>$customer])}}">
        <i class="fa fa-edit"></i>ADD
    </button>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="text-center">title</th>
            <th class="text-center">address</th>
            <th class="text-center">postal code</th>
            <th class="text-center">unit</th>

            <th class="text-center">option</th>
        </tr>
        </thead>
        @csrf
        @foreach($addresses as $address)
            <tbody>
            <tr>
                <td class="text-center">{{$address->title}}</td>
                <td class="text-center">{{$address->address}}</td>
                <td class="text-center">{{$address->postal_code}}</td>
                <td class="text-center">{{$address->unit}}</td>
                <td class="text-center">
                    <a href="{{Route('address.show',['address' => $address])}}"
                       onclick="showAddress(this);return false" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{route('address.delete',['address' => $address])}}"
                       onclick="deleteAddress(this);return false" class="btn btn-danger remove">
                        <i class="fa fa-trash"></i>DELETE</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

<div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close m-0" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <p></p>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>


<script>
    function addAddress(el) {
        $.ajax({
            url: $(el).attr('href'),
            method: 'GET',
            success: function (result) {
                $('.modal-body').html(result);
                $('#Modal').modal('toggle')   //مدل رو باز و بسته میکنه
            }
        })
    }

    function showAddress(el) {
        $.ajax({
            url: $(el).attr('href'),
            method: 'GET',
            success: function (result) {
                $('.modal-body').html(result);
                $('#Modal').modal('toggle');   //مدل رو باز و بسته میکنه
            }
        })
    }

    function saveAddress() {
        $.ajax({                                              //ذخیره ادرس
            url: $('#save-address-form').attr('action'),
            method: 'post',
            data: $('#save-address-form').serializeArray(),  //اطلاعات فرم رو به صورت سریالایز برمیگردونه
            success(data, textStatus, jqXHR) {
                $.ajax({                                       //if save = success -> run
                    url: $('#save-address-btn').attr('href'),
                    method: 'GET',
                    success: function (result) {
                        $('.modal-body').html(result);
                    },
                })
            }
        })
    }

    function updateAddress(el) {
        $.ajax({
            url: $('#update-address-form').attr('action'),
            method: 'post',
            data: $('#update-address-form').serializeArray(),
            success(data, textStatus, jqXHR) {
                $.ajax({
                    url: $('#update-address-btn').attr('href'),
                    method: 'GET',
                    success: function (result) {
                        $('.modal-body').html(result);
                    }
                })
            }
        })
    }

    function deleteAddress(el) {
        $.ajax({
            url: $(el).attr('href'),
            method: 'DELETE',
            data: {
                _token: '{{csrf_token()}}'          // = csrf
            },
            success: function (result) {
                $.ajax({
                    url: '{{route('address.index', ['customer'=> 'id'])}}'.replace('id', $('[name = "customer_id"]').val()),
                    method: 'GET',
                    success: function (result) {
                        $('.modal-body').html(result);
                    }
                })
            }
        })
    }

</script>

