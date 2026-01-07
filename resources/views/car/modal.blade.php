<div class="card">
    <div class="card-body">
        <input type="hidden" name="driver_id" value="{{$driver->id}}">
        <h4 class="card-title text-center">car List</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="text-center">
                <tr class="table-dark">
                    <td>Make</td>
                    <td>Model</td>
                    <td>Manufacture Year</td>
                    <td>Color</td>
                    <td>Technical Inspection</td>
                    <td>Licence Plate</td>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($driver->cars as $car)
                    <tr>
                        <td>{{$car->make->title}}</td>
                        <td>{{$car->model->title}}</td>
                        <td>{{$car->manufacture_year}}</td>
                        <td>{{$car->color}}</td>
                        <td>@if($car->technical_inspection == 1) yes @else no @endif</td>
                        <td>{{$car->licence_plate}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
