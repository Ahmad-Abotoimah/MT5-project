<?php

namespace App\Http\Controllers;

use App\Models\MtHulul;
use App\Models\Todo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Tarikh\PhpMeta\Exceptions\ConnectionException;
use Tarikh\PhpMeta\Exceptions\UserException;
use Tarikhagustia\LaravelMt5\LaravelMt5;
use Tarikhagustia\LaravelMt5\Lib\MTUserProtocol;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $accountInformations = ['balance'=>null,'equity'=>null,'freeMargin'=>null];
        $accountsInformations = [];

        $demos = MtHulul::all()->Where('user_id', auth()->user()->id);
        $api = new LaravelMt5();
  foreach ($demos as $demo) {
    $user = $api->getTradingAccounts($demo->login);
    // $balance = $user->Balance;
    // $equity = $user->Equity;
    // $freeMargin = $user->MarginFree;

    $accountInformations['balance'] = $user->Balance;
    $accountInformations['equity'] = $user->Equity;
    $accountInformations['freeMargin'] = $user->MarginFree;
    $accountInformations['login'] = $user->Login;
    $accountInformations['name'] = $demo->name;
    $accountInformations['id'] = $demo->id;
    $accountInformations['leverage'] = $demo->leverage;
    $accountInformations['group'] = $demo->group;
    $accountInformations['created_at'] = date('d/m/Y',strtotime($demo->created_at));

    array_push( $accountsInformations,$accountInformations);

  }
   $mtHulul = MtHulul::all();


          return view('clientDashboard.index',['mtHulul' =>$mtHulul , 'demos'=>$demos,'accountsInformations'=>$accountsInformations]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function show($login)
    {
        // dd($login);
            // return $login;
            $mtHulul = MtHulul::all();
        $account =MtHulul:: find($login);
        if ($login == "") {
            $login= "";
        }
// return $id;
        $date = strtotime(date('F j+1, Y, g:i a'));

        $api = new LaravelMt5();
        // return $date ;
//        $all = $api->getUserLogins('demo\demoTest');
//        $all= $api->checkPassword(101178,'Aa123456');
//        if($all){
//            dd('yes');
//        }else{
//            dd('no');
//        }


// Get Closed Order Total and pagination
        try {
            $total = $api->getOrderHistoryTotal($login, 1641382555, $date);
        } catch (ConnectionException|UserException $e) {
        }
        try {
            $trades = $api->getOrderHistoryPagination($login, 1641382555, $date, 0, $total);
        } catch (ConnectionException|UserException $e) {
        }
        return view('filter',['trades'=>$trades ,'login'=>$login,'date'=> $date,'mtHulul'=>$mtHulul]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }
    public function filter(Request $request)
    {
        if ($request['date'] == 'Today') {
            $from= Carbon::yesterday()->timestamp;
            $to =Carbon::tomorrow()->timestamp;
            // return $request;
        }elseif ($request['date'] == 'Yesterday') {
            $from= Carbon::yesterday()->timestamp;
            $to =Carbon::now()->timestamp;
        }elseif ($request['date'] == 'This Week') {
            $now = Carbon::now();
            $from = $now->startOfWeek()->timestamp;
            $to =$now->endOfWeek()->timestamp;
        }
        elseif ($request['date'] == 'Last Week') {
            $from = Carbon::now()->subWeek()->startOfWeek()->timestamp;
            $to =Carbon::now()->subWeek()->endOfWeek()->timestamp;
        }
        elseif ($request['date'] == 'This Month') {
            $from = Carbon::now()->startOfMonth()->timestamp;
            $to =Carbon::now()->timestamp;
        }
        elseif ($request['date'] == 'Last Month') {
            $from = Carbon::now()->subMonth()->startOfMonth()->timestamp;
            $to =Carbon::now()->subMonth()->endOfMonth()->timestamp;
        }

        else{
            $date = json_decode($request['daterange']);
        // return $date->start ;
        $from = strtotime($date->start);
        $to =strtotime($date->end);
        }

        $mtHulul = MtHulul::all();

        $api = new LaravelMt5();
        try {
            $total = $api->getOrderHistoryTotal($request['login'], $from, $to);
        } catch (ConnectionException|UserException $e) {
        }
        try {
            $trades = $api->getOrderHistoryPagination($request['login'], $from, $to, 0, $total);
        } catch (ConnectionException|UserException $e) {
        }
        return view('filter',['trades'=>$trades ,'login'=>$request['login'],'mtHulul'=>$mtHulul]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $mt = MtHulul::find($id);
        // return $mt->login;
        // $api = new LaravelMt5();
        // $api->deleteUser($mt->login);
        $mt->delete();
        return back();
    }
}
