<div class="card">
    <div class="card-body">
        <input type="hidden" name="customer_id" value="{{$customer->id}}">
        <h4 class="card-title text-center">Trip List</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="text-center">
                <tr class="table-dark">
                    <td>Driver</td>
                    <td>Car</td>
                    <td>Date</td>
                    <td>Origin</td>
                    <td>Destination</td>
                    <td>Price</td>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($customer->trips as $trip)
                    <tr>
                        <td>{{$trip->driver->first_name}}</td>
                        <td>{{$trip->car->model->title}}</td>
                        <td>{{$trip->date}}</td>
                        <td>{{$trip->origin}}</td>
                        <td>{{$trip->destination}}</td>
                        <td>{{$trip->price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
