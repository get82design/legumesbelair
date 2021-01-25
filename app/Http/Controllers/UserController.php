<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Addresslivraison;
use App\Models\Addressfacture;
use App\Models\Shoppingcart;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user=User::findorfail($id);
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        // if($request->password != ""){
        //     $user->password = Hash::make($request->password);
        // }
        $user->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewuser($id)
    {
        $no = "no";
        $yes = "yes";
        $user = User::findorfail($id);
        $addresslivraison = Addresslivraison::where('user_id', $id)->first();
        $addressfacture = Addressfacture::where('user_id', $id)->first();
        $shoppingcarts = Shoppingcart::where('user_id', $id)->where('checkcommande', $no)->get();
        $archiveshoppingcarts = Shoppingcart::where('user_id', $id)->where('checkreception', $yes)->get();
        return view('viewuser', compact('user', 'addresslivraison', 'addressfacture', 'shoppingcarts', 'archiveshoppingcarts'))->withTitle('Client')->withImage('bg-panier.jpg');
    }

    public function destroyuser($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return back();
    }
}
