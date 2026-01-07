@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center title admin-title">Add make</h4><br>
                <form method="post" action="{{route('make.save')}}" class="form-sample">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" placeholder="enter title"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Add Make</button>
                </form>
            </div>
        </div>
    </div>
@endsection
