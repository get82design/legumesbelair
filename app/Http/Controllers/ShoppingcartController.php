<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ContactUS;
use App\Models\Shoppingcart;
use App\Models\Addressfacture;
use App\Models\Addresslivraison;
use App\Models\User;
use Cart;

class ShoppingcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth()->user()->id;
        $addressfacture = Addressfacture::where('user_id', $user_id)->first();
        $addresslivraison = Addresslivraison::where('user_id', $user_id)->first();
        return view('checkcommande', compact('addressfacture', 'addresslivraison'))->withTitle('Ma Commande')->withImage('bg-panier.jpg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numrue = "";
        $rue = "";
        $postal = "";
        $ville = "";
        if($request->idfacture == ""){
            $addressfacture = new Addressfacture;
            $addressfacture->user_id = Auth()->user()->id;
            $addressfacture->name = $request->name;
            $addressfacture->numrue = $request->numrue;
            $addressfacture->rue = $request->rue;
            $addressfacture->postal = $request->postal;
            $addressfacture->ville = $request->ville;
            $addressfacture->save();
        }
        if($request->idlivr == "" && $request->numruelivr != "" && $request->ruelivr != "" && $request->postallivr != "" && $request->villelivr != ""){
            $addresslivraison = new Addresslivraison;
            $addresslivraison->user_id = Auth()->user()->id;
            $addresslivraison->numrue = $request->numruelivr;
            $addresslivraison->rue = $request->ruelivr;
            $addresslivraison->postal = $request->postallivr;
            $addresslivraison->ville = $request->villelivr;
            $addresslivraison->save();
            $numrue = $request->numruelivr;
            $rue = $request->ruelivr;
            $postal = $request->postallivr;
            $ville = $request->villelivr;
        }
        $cartfinal = Cart::content();
        $total = Cart::total();
        $content = json_encode($cartfinal);
        $shoppingcart = new Shoppingcart;
        $shoppingcart->livraison = $request->livraison;
        $shoppingcart->user_id = Auth()->user()->id;
        $shoppingcart->content = $content;
        if($request->livraison == "yes"){
            $shoppingcart->daylivr = $request->daylivr;
            $day = $request->daylivr;
            $hour = "";
        }else{
            $shoppingcart->day = $request->day;
            $day = $request->day;
            $shoppingcart->hour = $request->hour;
            $hour = $request->hour;
        }
        $shoppingcart->save();

        Cart::destroy();
        $user_id = Auth()->user()->id;
        $shoppingcarts = Shoppingcart::where('user_id', $user_id)->get();
        $commande = $shoppingcarts->last();

        \Mail::send('mailcommande',
        array(
            'commandeid' => $commande->id,
            'username' => Auth()->user()->name,
            'userfirstname' => Auth()->user()->firstname,
            'email' => Auth()->user()->email,
            'phone' => Auth()->user()->phone,
            'livraison' => $commande->livraison,
            'day' => $day,
            'hour' => $hour,
            'numrue' => $numrue,
            'rue' => $rue,
            'postal' => $postal,
            'ville' => $ville,
            'total' => $total

        ), function($message) use ($request)
        {
            $message->replyTo(Auth()->user()->email);
            $message->to('legumesdebelair@gmail.com', 'Admin')->subject('nouvelle commande');
        });

        $addressfactures = Addressfacture::where('user_id', $user_id)->get();
        $addresslivraisons = Addresslivraison::where('user_id', $user_id)->get();
        return view('acount', compact('addressfactures', 'addresslivraisons', 'shoppingcarts'))->withTitle('Mon compte')->withImage('bg-acount.jpg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth()->user()->id;
        $n = "no";
        $commandes = Shoppingcart::where('user_id', $user_id)->where('checkreception', $n)->get();
        return view('commande', compact('commandes'))->withTitle('Commande')->withImage('bg-acount.jpg');
    }

    public function listcommandes(){
        $n = "no";
        $listcommandes = Shoppingcart::where('checkreception', $n)->paginate(10);
        return view('adminlistcommandes', compact('listcommandes'))->withTitle('Liste des commandes')->withImage('bg-acount.jpg');
    }

    public function listdaycommandes($filtre){
        $n = "no";
        $listcommandes = Shoppingcart::where('checkreception', $n)->where('day', $filtre)->paginate(10);
        return view('adminlistcommandes', compact('listcommandes'))->withTitle('Liste des commandes')->withImage('bg-acount.jpg');
    }

    public function listdaylivrcommandes($filtre){
        $n = "no";
        $listcommandes = Shoppingcart::where('checkreception', $n)->where('daylivr', $filtre)->paginate(10);
        return view('adminlistcommandes', compact('listcommandes'))->withTitle('Liste des commandes')->withImage('bg-acount.jpg');
    }

    public function commande($id){
        $shoppingcart = Shoppingcart::findorfail($id);
        return view('admincommande', compact('shoppingcart'))->withTitle('Commande')->withImage('bg-acount.jpg');
    }

    public function archive($id)
    {
        if(Auth()->user()->role == "admin"){
            $shoppingcart = Shoppingcart::findorfail($id);
        }else{
            $shoppingcarttest = Shoppingcart::findorfail($id);
            $user_id = $shoppingcarttest->user->id;
            if(Auth()->user()->id == $user_id){
                $shoppingcart = $shoppingcarttest;
            }else{
                return view('error.404');
            }
        }
        return view('commandearchive', compact('shoppingcart'))->withTitle('Archive')->withImage('bg-acount.jpg');
    }

    public function listarchives($id)
    {
        $n = "yes";
        if(Auth()->user()->role == "admin"){
            $listarchives = Shoppingcart::where('checkreception', $n)->orderBy('id', 'DESC')->paginate(10);
        }else{
            $listarchives = Shoppingcart::where('user_id', Auth()->user()->id)->where('checkreception', $n)->orderBy('id', 'DESC')->paginate(10);
        }
        return view('listarchives', compact('listarchives'))->withTitle('Liste des Archives')->withImage('bg-acount.jpg');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycommande($id)
    {
        $shoppingcart=Shoppingcart::findOrFail($id);
        $shoppingcart->delete();
        $user_id = Auth()->user()->id;
        $shoppingcarts = Shoppingcart::where('user_id', $user_id)->get();
        $addressfactures = Addressfacture::where('user_id', $user_id)->get();
        $addresslivraisons = Addresslivraison::where('user_id', $user_id)->get();
        return view('acount', compact('addressfactures', 'addresslivraisons', 'shoppingcarts'))->withTitle('Mon compte')->withImage('bg-acount.jpg');
    }

    public function commandeprepa($id)
    {
        $shoppingcart=Shoppingcart::findOrFail($id);
        $shoppingcart->checkcommande = "yes";
        $shoppingcart->save();
        if($shoppingcart->livraison == "yes"){
            $day = $shoppingcart->daylivr;
            $hour = "";
        }else{
            $day = $shoppingcart->day;
            $hour = $shoppingcart->hour;
        }
        $commandeid = sprintf("%06d", $shoppingcart->id);

        \Mail::send('mailreadycommande',
        array(
            'commandeid' => $commandeid,
            'username' => $shoppingcart->user->name,
            'userfirstname' => $shoppingcart->user->firstname,
            'livraison' => $shoppingcart->livraison,
            'day' => $day,
            'hour' => $hour,
            'date' => $shoppingcart->created_at

        ), function($message) use ($shoppingcart)
        {
            $message->replyTo('legumesdebelair@gmail.com');
            $message->to($shoppingcart->user->email)->subject('Votre Commande est prête');
        });

        return view('admincommande', compact('shoppingcart'))->withTitle('Commande')->withImage('bg-acount.jpg');
    }

    public function commandelivraison($id)
    {
        $shoppingcart=Shoppingcart::findOrFail($id);
        $shoppingcart->checkreception = "yes";
        $shoppingcart->save();
        $n = "no";
        $listcommandes = Shoppingcart::where('checkreception', $n)->paginate(10);
        return view('adminlistcommandes', compact('listcommandes'))->withTitle('Liste des commandes')->withImage('bg-acount.jpg');
    }
}
