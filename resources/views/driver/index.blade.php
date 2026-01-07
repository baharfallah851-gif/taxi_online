@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <h4 class="card-title text-center title customer-title">Driver Table</h4>
            </div>
            <div>
                <button class="btn btn-inverse-primary btn-rounded btn-icon" style="margin-bottom: 30px"
                        onclick="window.location='{{Route('driver.add') }}'">
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
                        <th>national code</th>
                        <th>total trips</th>
                        <th>total income</th>
                        <th>province</th>
                        <th>city</th>
                        <th>license number</th>
                        <th>license expired at</th>
                        <th>rating</th>
                        <th>is active</th>
                        <th>image</th>

                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($drivers as $driver)
                        <tr>
                            <td>{{$driver->first_name}}</td>
                            <td>{{$driver->last_name}}</td>
                            <td>{{$driver->phone_number}}</td>
                            <td>{{$driver->email}}</td>
                            <td>{{$driver->username}}</td>
                            <td>@if($driver->gender == 1)
                                    man
                                @else
                                    woman
                                @endif</td>
                            <td>{{$driver->birth_date}}</td>
                            <td>{{$driver->national_code}}</td>
                            <td>{{$driver->total_trips}}</td>
                            <td>{{$driver->total_income}}</td>
                            <td>{{$driver->province->name}}</td> {{--از مدل پروونس توی مدل درایور--}}
                            <td>{{$driver->city->name}}</td> {{--از مدل سیتی توی مدل درایور--}}
                            <td>{{$driver->license_number}}</td>
                            <td>{{$driver->license_expired_at}}</td>
                            <td>@if($driver->rating == 1)
                                    ⭐
                                @elseif($driver->rating == 2)
                                    ⭐⭐
                                @elseif($driver->rating == 3)
                                    ⭐⭐⭐
                                @elseif($driver->rating == 4)
                                    ⭐⭐⭐⭐
                                @elseif($driver->rating == 5)
                                    ⭐⭐⭐⭐⭐
                                @endif </td>
                            <td>@if($driver->is_active == 1)
                                    ✔️
                                @else
                                    ❌
                                @endif</td>
                            <td>

                                @if($driver->image)
                                    {{--php artisan storage:link     in     git bush--}}
                                    <img src="{{ asset('storage/' . $driver->image) }}"
                                         style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                                @endif
                            </td>


                            <td>
                                <a href="{{route('driver.show',['driver'=>$driver])}}" class="btn btn-info"><i
                                        class="fa fa-pencil"></i> UPDATE</a>
                                <a href="{{route('driver.delete',['driver'=>$driver])}}" class="btn btn-danger"><i
                                        class="fa fa-trash"></i> DELETE</a>
                                <a href="{{route('car.modal',['driver'=>$driver])}}" class="btn btn-warning"
                                   onclick="openModal(this);return false"><i class="fa fa-car"></i>Cars</a>
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
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        function openModal(el) {
            $.ajax({
                url: $(el).attr('href'),
                method: 'GET',
                success: function (result) {
                    $('.modal-body').html(result);
                    $('#myModal').modal('toggle');
                }
            })
        }
    </script>
@endsection
