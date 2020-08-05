<?php

namespace App\Http\Controllers;
//use App\Helpers\Sms;
use Mediumart\Orange\SMS\SMS;
use Illuminate\Http\Request;

class MessageController extends Controller
{


    public function create()
    {
        $title = 'Nouveau message';

        return view('messages', compact(['title']));
    }

    public function send(Request $request,SMS $SMS)
    {
//        $this->validate($request, [
//            'phone' => 'required|numeric',
//            'message' => 'required|max:255',
//        ]);

           $SMS->message("votre message")
               ->from("numero d'envoi")
               ->to("numero de reception")
               ->send();
//        $this->sendSMS($request['phone'], $request['message']);

        return redirect(route('message.create'));
    }

//    public function sendSMS($phone, $message)
//    {
//        $config = array(
//            'clientId' => config('app.clientId'),
//            'clientSecret' =>  config('app.clientSecret'),
//        );
//
//        $osms = new Sms($config);
//
//        $data = $osms->getTokenFromConsumerKey();
//        $token = array(
//            'token' => $data['access_token']
//        );
//
//
//        $response = $osms->sendSms(
//        // sender
//            'tel:+22587870343',
//            // receiver
//            'tel:+225' . $phone,
//            // message
//            $message,
//            'Bankhi'
//        );
//    }
}

