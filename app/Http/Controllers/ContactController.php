<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3|max:30',
                'email' => 'required|string|email:rfc,dns|min:5|max:40',
                'company' => 'required|string|min:3|max:100',
                'message' => 'required|string|min:5|max:250',
                // 'recaptcha_response' => 'required',
            ],
            [],
            [
                // 'recaptcha_response' => 'google recaptcha'
            ]
        );

        if ($validator->fails()) {
            dd($request, '1');
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // $response = Http::get('https://www.google.com/recaptcha/api/siteverify' . '?secret=' . config('app.google_captcha_secret_key') . '&response=' . $request->recaptcha_response)->json();
        // if ($response && $response['success'] == true && $response['score'] >= 0.5 && $response['action'] == 'submit') {
        $data =  (object) array();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->company = $request->get('company');
        $data->message = $request->get('message');

        $contact =  new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->company = $request->company;
        $contact->message = $request->message;
        $contact->ip_address = $_SERVER['REMOTE_ADDR'];
        if ($contact->save()) {
            // dd($request, '2');
            Mail::to(config('app.mail_to_address'))->send(new ContactMail($data));
            // dd($request, '3');
            return redirect()->back()->with([
                "message" => "Message Sent Successfully",
                "alert-type" => "success"
            ]);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong'])->withInput();
        // } else {
        //     return redirect(url()->previous() . "#contact")->with(['alert-type' => 'error', 'message' => 'Google Captcha is Invalid'])->withInput();
        // }
    }
}
