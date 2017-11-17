<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\About;
use App\Service;
use App\Newspost;
use App\Mail\SendEmail;
use Mail;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('post', Homepage::first());
    }

    public function about()
    {
        return view('about')
            ->with('post', Homepage::first())
            ->with('about', About::first());
    }
    
    public function service()
    {
        return view('service')->with('service', Service::first());
    }

    public function news()
    {
        return view('news-list')->with('news', Newspost::orderBy('created_at', 'desc')->paginate(3));
    }

    public function newsPost($slug)
    {
        $post = Newspost::where('slug', $slug)->first();

        return view('news-post')->with('post', $post);
    }

    public function contact()
    {
        return view('contact');
    }

    //For sending email
    public function contactSend(Request $request)
    {
        $this->validate($request, [
            'sender_name' => 'required|min:3',
            'sender_email' => 'required|email',
            'sender_message' => 'required|min:10'
        ]);

        $data = array(
                'sender_name' => $request->sender_name,
                'sender_email' => $request->sender_email,
                'sender_message' => $request->sender_message
            );

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('');
            $message->from($data['sender_email']);
            $message->subject('Enquiry about project');
        });
    }
}
