<?php

namespace App\Http\Controllers;

use App\Models\Trader;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Tarikh\PhpMeta\Exceptions\ConnectionException;
use Tarikh\PhpMeta\Exceptions\UserException;
use Tarikhagustia\LaravelMt5\Entities\User;
use Tarikhagustia\LaravelMt5\LaravelMt5;

class TraderController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

    }

//        $api = new LaravelMt5();
// Get Closed Order Total and pagination
//        $total = $api->getOrderHistoryTotal(101133, 1641203216, 1643881616);
//        $trades = $api->getOrderHistoryPagination(101133, 1641203216, 1643881616, 0, $total);
//        return view('show',[
//            'trades'=>$trades,
//
//  ]);
//        $api = new LaravelMt5();
//        try {
//            $user = $api->getTradingAccounts(101133);
//        } catch (ConnectionException|UserException $e) {
//        }
//
//        $balance = $user->Balance;
//        $equity = $user->Equity;
//        $freeMargin = $user->MarginFree;
//        $name = $user->CurrencyDigits;
//        return view('show',[
//            'balance'=>$balance,
//            'equity'=>$equity,
//            'freeMargin'=>$freeMargin,
//            'name'=>$name,
//        ]);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

//        $api = new LaravelMt5();
//        $api->dealerSend([
//            'Login' => 101147,
//            'Symbol' => 'XAUUSD',
//            'Volume' => 100,
//            'Type' => 0
//]);
        //$api = new LaravelMt5();
//$user = new User();
//$user->setName($request->name);
//$user->setEmail($request->email);
//$user->setGroup($request->group);
//$user->setLeverage(($request->leverage));
//$user->setPhone($request->phone);
//$user->setAddress($request->address);
//$user->setCity($request->city);
//$user->setState($request->state);
//$user->setCountry($request->country);
//$user->setZipCode($request->zipcode);
//$user->setMainPassword($request->password);
//$user->setInvestorPassword($request->invest_password);
//$user->setPhonePassword($request->phone_password);

//        try {
//            $result = $api->createUser($user);
//        } catch (ConnectionException|UserException $e) {
//        }
//        return view('welcome');
//    }

        $api = new LaravelMt5();
        $user = new User();
        $user->setName($request->name);
        $user->setEmail($request->email);
        $user->setGroup($request->group);
        $user->setLeverage($request->leverage);
        $user->setMainPassword($request->password);
        $user->setInvestorPassword($request->invest_password);
        $result = $api->createUser($user);
        dd($result);

        return view('welcome');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function show(Trader $trader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function edit(Trader $trader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trader $trader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trader $trader)
    {
        //
    }
}
