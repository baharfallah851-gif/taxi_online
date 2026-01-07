@extends('layout')
@section('content')
    <div class="form-floating mb-3 mt-3">
        <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
        <a class="btn btn-app" href="{{Route('customer.add')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>content</th>
            </tr>
            </thead>
            @csrf
            @foreach($messages as $message)
                <tbody>
                <tr>
                    <td class="text-center">{{$message->message}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
