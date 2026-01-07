<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('message.index');
    }

    public function add()
    {
        return view('message.add');
    }

    public function save(Request $request){
        Message::create([
            'ticket_id'=>$request->get('ticket_id'),
            'content '=>$request->get('content'),
            'customer_id'=>$request->get('customer_id'),
        ]);
        return redirect(route('message.index'));
    }
}
