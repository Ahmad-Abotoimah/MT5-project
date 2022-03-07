<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Mail\AgreeddEmail;
use App\Models\UserAccounts;
use Illuminate\Http\Request;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;

class UserAccountsController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // return $request;
        UserAccounts::create([
            'user_id' => Auth::user()->id,
            'Amount' => $request['Amount'],
            'user_login' => $request['Login'],
            'type' => $request['type'],
            'date' => $request['date'],
        ]);
        return redirect()->back()->with('success', 'Post created successfully'.$request['Login']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAccounts  $userAccounts
     * @return \Illuminate\Http\Response
     */
    public function show(UserAccounts $userAccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAccounts  $userAccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAccounts $userAccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAccounts  $userAccounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // return $id;
        $userAccount = UserAccounts::find($id);
        $userAccount->agreed = $request['agreed'];
        $userAccount->save();
        Mail::to($userAccount->user->email)->send(new AgreeddEmail($userAccount->user));
              return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAccounts  $userAccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAccounts $userAccounts)
    {
        //
    }
}
