<?php

namespace App\Http\Controllers;

use App\Mail\Contact; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function getLanguage(){
        $lang = 'en';
        if(Session::has('locale')){
            $lang = Session::get('locale');
        }
        return $lang;
    }

    public function index(){
        $lang= $this->getLanguage();
        return view('home.index')->with('lang',$lang);
    }


    public function about(){
        $lang= $this->getLanguage();
        return view('page.about-us')->with('lang',$lang);
    }

    public function contact_us(){
        $lang= $this->getLanguage();
        return view('page.contact')->with('lang',$lang);
    }

    public function digital_transformation(){
        $lang= $this->getLanguage();
        return view('service.digital_transformation')->with('lang',$lang);
    }

    public function cloud_services(){
        $lang= $this->getLanguage();
        return view('service.cloud_services')->with('lang',$lang);
    }

    public function enterprise_network(){
        $lang= $this->getLanguage();
        return view('service.enterprise_network')->with('lang',$lang);
    }

    public function cyber_security(){
        $lang= $this->getLanguage();
        return view('service.cyber_security')->with('lang',$lang);
    }

    public function it_infrastucture_virtualization(){
        $lang= $this->getLanguage();
        return view('service.it_infrastucture_virtualization')->with('lang',$lang);
    }

    public function digital_marketing(){
        $lang= $this->getLanguage();
        return view('service.digital_marketing')->with('lang',$lang);
    }

    public function web_development(){
        $lang= $this->getLanguage();
        return view('service.web_development')->with('lang',$lang);
    }

    public function devops(){
        $lang= $this->getLanguage();
        return view('service.devops')->with('lang',$lang);
    }

    public function managed_consulting(){
        $lang= $this->getLanguage();
        return view('service.managed_consulting')->with('lang',$lang);
    }

    

    public function send_email(Request $request)
    {
        // Replace YOUR_SECRET_KEY with your actual reCAPTCHA secret key
        $recaptcha_secret_key = '6LfJumsnAAAAAJw0Agjg7h_j7vzEC-V1J5g75lKM';
        $response = $_POST['g-recaptcha-response'];
        $verification_url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $recaptcha_secret_key,
            'response' => $response
        );

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context = stream_context_create($options);
        $verify_response = file_get_contents($verification_url, false, $context);
        $verify_response_data = json_decode($verify_response);

        if ($verify_response_data && $verify_response_data->success) {
            $validator = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'service' => 'required',
                'message' => 'required'
            ]);
            
            $data = [
                "subject"=>$request->subject,
                "name"=>$request->name,
                "email"=>$request->email,
                "service"=> $request->service,
                "message"=>$request->message,
            ];

            try
            {
                Mail::send([], [], function ($message) use ($data) {
                $message->to('solarict.it@gmail.com')
                    ->subject('New Message from Contact Form')
                    ->setBody(view('emails.contactEmail')->with($data)->render(), 'text/html');
                });
                session()->flash('success', 'Thank you for contacting us! We will get back to you soon.');
            
            }
            catch(Exception $e){
                session()->flash('error', 'Something went wrong! Please try again later.');
            }
        } 
        else {
            // reCAPTCHA verification failed, handle the error (e.g., display an error message to the user)
            session()->flash('error', 'Verification failed! Please check the reCAPTCHA checkbox to prove you are not a robot and try again.');
        }
        return redirect()->back();
    }

}
