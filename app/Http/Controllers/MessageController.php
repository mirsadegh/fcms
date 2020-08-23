<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $messages = Message::paginate(25);
        return view('messages.index',compact('messages'));

    }

    public function destroy(Message $message)
    {
        $message->delete();
        return back()->withMessage('پیام مورد نظر با موفقیت حذف گردید.');
    }
}
