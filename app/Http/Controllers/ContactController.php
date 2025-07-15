<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

   public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('khodabakhsh.hosseine.20@gmail.com')->send(new ContactUs($data));
        return redirect()->route('thankyou');
        // بعد از ارسال ایمیل، کاربر را به صفحه دک هدایت کن
        //return redirect()->route('thankyou')->with('success', 'ایمیل با موفقیت ارسال شد.');
    }
}
