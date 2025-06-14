<?php

namespace App\Http\Controllers;

use App\Mail\QuoteMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:25',
            'company_name' => 'required|string|min:3|max:60',
            'email' => 'required|string|email',
            'phone' => 'required|numeric|digits:10',
            'message' => 'required|string|min:10|max:80',
        ]);
        if ($validator->fails()) {
            return redirect(url()->previous() .'#contact')
                    ->withErrors($validator)
                    ->withInput();
        }
        $data =  (object) array();
        $data->name = $request->get('name');
        $data->company_name = $request->get('company_name');
        $data->email = $request->get('email');
        $data->phone = $request->get('phone');
        $data->message = $request->get('message');

        Mail::to(config('app.mail_to'))->send(new ContactMail($data));
        if (Mail::failures()) {
            return redirect('contact')->with([
                "alert-type"=>"error","message" => "Something went wrong. Please contact us via email or phone."
            ]);
        } else {
            return redirect('contact')->with([
                "alert-type"=>"success","message" =>"Form Submitted Successfully"
            ]);
        }
    }
    public function quote(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:60',
            // 'company_name' => 'required|string|alpha|min:3|max:60',
            'email' => 'required|string|email',
            'phone' => 'required|numeric|digits:10',
            'message' => 'required|string|min:10|max:80',
        ]);
        if ($validator->fails()) {
            return redirect(url()->previous() .'#quote')
                    ->withErrors($validator)
                    ->withInput();
        }
        $data =  (object) array();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone = $request->get('phone');
        $data->message = $request->get('message');
        Mail::to(config('app.mail_to'))->send(new QuoteMail($data));
        if (Mail::failures()) {
            return redirect(route('index'))->with([
                "alert-type"=>"error","message" => "Something went wrong. Please contact us via email or phone."
            ]);
        } else {
            return redirect(route('index'))->with([
                "alert-type"=>"success","message" =>"Your Request has been Submitted Successfully"
            ]);
        }
    }
}
