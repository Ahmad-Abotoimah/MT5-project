<?php

namespace App\Http\Controllers;

use App\Models\MtHulul;
use Cassandra\Date;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use Tarikh\PhpMeta\Exceptions\ConnectionException;
use Tarikh\PhpMeta\Exceptions\UserException;
use Tarikh\PhpMeta\Entities\User;
use Tarikhagustia\LaravelMt5\LaravelMt5;
class MtHululController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $date = strtotime(date('F j+1, Y, g:i a'));
        $api = new LaravelMt5();
// Get Closed Order Total and pagination
        try {
            $total = $api->getOrderHistoryTotal(101171, 1641382555, $date);
        } catch (ConnectionException|UserException $e) {
        }
        try {
            $trades = $api->getOrderHistoryPagination(101171, 1641382555, $date, 0, $total);
        } catch (ConnectionException|UserException $e) {
        }
        return view('show_trades',['trades'=>$trades ,'login'=>101171]);
        // return view('filter',['trades'=>$trades ,'login'=>101171, 'date'=> $date]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return  view('createTrader');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $api = new LaravelMt5();
//        $user = new User();
//
//        $user->setName($request->name);
//        $user->setEmail($request->email);
//        $user->setGroup($request->group);
//        $user->setLeverage($request->leverage);
//        $user->setMainPassword($request->password);
//        $user->setInvestorPassword($request->invest_password);
//
//        try {
//            $result = $api->createUser($user);
//        } catch (ConnectionException|UserException $e) {
//        }


$api = new LaravelMt5();
$user = new User();
$user->setName($request->name);
$user->setEmail($request->email);
$user->setGroup($request->group);
$user->setLeverage(($request->leverage));
$user->setPhone($request->phone);
$user->setAddress($request->address);
$user->setCity($request->city);
$user->setState($request->state);
$user->setCountry($request->country);
$user->setZipCode($request->zipcode);
$user->setMainPassword($request->password);
$user->setInvestorPassword($request->invest_password);
$user->setPhonePassword($request->phone_password);
$result = $api->createUser($user);


        $userData = new MtHulul();
        $userData->name =$request->name;
        $userData->login =$result->getLogin();
        $userData->email = $request->email;
        $userData->group = ($request->group);
        $userData->leverage=(($request->leverage));
        $userData->phone=($request->phone);
        $userData->address=($request->address);
        $userData->city=($request->city);
        $userData->state=($request->state);
        $userData->country=($request->country);
        $userData->zipcode=($request->zipcode);
        $userData->password=($request->password);
        $userData->invest_password=($request->invest_password);
        $userData->phone_password=($request->phone_password);
        $userData->user_id=(auth()->user()->id);
        $userData->save();

        return redirect('hulul');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MtHulul  $mtHulul
     * @return \Illuminate\Http\Response
     */
    public function show($login)
    {$api = new LaravelMt5();

        $user = $api->getTradingAccounts($login);


    $balance = $user->Balance;
    $equity = $user->Equity;
    $freeMargin = $user->MarginFree;
    return view('inf',[
        'balance'=>$balance,
        'equity'=>$equity,
        'freeMargin'=>$freeMargin,
    ]);
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MtHulul  $mtHulul
     * @return \Illuminate\Http\Response
     */
    public function edit(MtHulul $mtHulul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MtHulul  $mtHulul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MtHulul $mtHulul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MtHulul  $mtHulul
     * @return \Illuminate\Http\Response
     */
    public function destroy(MtHulul $mtHulul)
    {
        //
    }
}
