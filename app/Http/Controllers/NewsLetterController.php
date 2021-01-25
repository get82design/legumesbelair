<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', 'Merci pour votre inscription à la newsletter');
        }
        return redirect('/')->with('failure', 'Désolé! Vous êtes déjà inscrit.');
            
    }
}
