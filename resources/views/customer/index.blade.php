@extends('layout.dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <div>
            <h4 class="card-title text-center title customer-title">Customer Table</h4>
        </div>
        <div>
            <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                    onclick="window.location='{{ Route('customer.add') }}'">
                ADD
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                @csrf
                <thead class="text-center">
                <tr class="table-dark">
                    <th>first name</th>
                    <th>last name</th>
                    <th>phone number</th>
                    <th>email</th>
                    <th>username</th>
                    <th>gender</th>
                    <th>birth date</th>
                    <th>wallet balance</th>
                    <th>total trips</th>
                    <th>province</th>
                    <th>city</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->first_name}}</td>
                        <td>{{$customer->last_name}}</td>
                        <td>{{$customer->phone_number}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->username}}</td>
                        <td>@if($customer->gender == 1) man @else woman @endif</td>
                        <td>{{$customer->birth_date}}</td>
                        <td>{{$customer->wallet_balance}}</td>
                        <td>{{$customer->total_trips}}</td>
                        <td>{{$customer->province->name}}</td>
                        <td>{{$customer->city->name}}</td>
                        <td>
                            <a href="{{route('customer.show',['customer'=>$customer])}}" class="btn btn-info"><i class="mdi mdi-pencil"></i> UPDATE</a>
                            <a href="{{route('customer.delete',['customer'=>$customer])}}" class="btn btn-danger"><i class="mdi mdi-trash-can"></i> DELETE</a>
                            <a href="{{route('address.index',['customer'=>$customer])}}" class="btn btn-success" onclick="openModal(this);return false"><i class="fa fa-address"></i> ADDRESS</a>
                            <a href="{{route('trip.modal', ['customer' =>$customer])}}" class="btn btn-primary" onclick="openModal(this);return false"><i class="mdi mdi-airplane"></i>TRIPS</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close m-0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADDRESS</h4>
            </div>

            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>



<script>
    function openModal(el) {                       // $ = jquery
        $.ajax({
            url: $(el).attr('href'),               // el -> html , $(el) -> jquery
            method: 'GET',
            success: function (result) {           // if not error    result -> view laravel
                $('.modal-body').html(result);
                $('#myModal').modal('toggle')     // باز و بسته کردن مدال
            },
        })
    }
</script>
@endsection
