<?php

namespace App\Http\Controllers;

use App\Models\MtHulul;
use App\Models\Todo;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Tarikh\PhpMeta\Exceptions\ConnectionException;
use Tarikh\PhpMeta\Exceptions\UserException;
use Tarikhagustia\LaravelMt5\LaravelMt5;
use Tarikhagustia\LaravelMt5\Lib\MTUserProtocol;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


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
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param $login
     * @return Application|Factory|View
     */
    public function show($login)
    {
$api =new LaravelMt5();

//        try {
//           $x= $api->getUserBatch(101200);
//        } catch (ConnectionException|UserException $e) {
//        }
//        dd($x);

//        try {
//            $api->conductUserBalance(101200, 'Balance', 5000, 'aaaaaa');
//        } catch (ConnectionException|UserException $e) {
//        }
        // dd($login);

            // return $login;
            $mtHulul = MtHulul::all();
        $account =MtHulul:: find($login);
        if ($login == "") {
            $login= "";
        }
// return $id;
        $date = strtotime(date('F j+1, Y, g:i a'));


        // return $date ;
//        $all = $api->getUserLogins('demo\demoTest');
//        $all = $api->deleteUser();
//        $all= $api->checkPassword(101178,'Aa123456');
//        if($all){
//            dd('yes');
//        }else{
//            dd('no');
//        }
        $api = new LaravelMt5();

        // Iterate over the period

        $now = Carbon::now();
        $from = $now->startOfWeek()->format('Y-m-d H:i:s');
        $to =$now->endOfWeek()->format('Y-m-d H:i:s');
        // return $to;


        $period = CarbonPeriod::create($from,  $to);
        // Convert the period to an array of dates
        $dates = $period->toArray();
        // $days =[];
        // foreach ($dates as $value) {
        //     $days[]= substr($value->format('l'),0,3);
        // }
        // return $days  ;

// Get Closed Order Total and pagination
        try {
            $total = $api->getOrderHistoryTotal($login, 1641382555, $date);
            $chart = $api->getOrderHistoryTotal($login, $now->startOfWeek()->timestamp, $now->endOfWeek()->timestamp);
        } catch (ConnectionException|UserException $e) {
            abort('connection Failed');
        }


        try {
            $trade = $api->getOrderHistoryPagination($login, 1641382555, $date, 0, $total);
            $charts = $api->getOrderHistoryPagination($login, $now->startOfWeek()->timestamp,$now->endOfWeek()->timestamp, 0, $chart);
        //    $ali= collect($charts)->groupBy(function($charts){
        //         return Carbon::parse(date("d M Y", strtotime($charts->TimeSetup)))->format('l');
        //     });
            $balances= $api->getUserBatch($login);
            // dd($balances) ;
            $trades = $this->paginate($trade);
            $trades->withPath("/demos/{$login}");
            $Balance=[$balances[0]->BalancePrevMonth,$balances[0]->BalancePrevDay,$balances[0]->Balance];
            $days = ['last month', 'yesterday', 'today'];
            // foreach ($ali as $key => $value) {
            //     $days[]= $key;
            //         // echo $value. "<br>";
            //         $Balance[]=count($value);
            //     // $Balance[]= $value->ExpertPositionID;
            // }
            // return $days;
            // return date("d M Y", strtotime($charts[0]->TimeSetup)) ;

        } catch (ConnectionException|UserException $e) {
            abort('connection Failed');
        }
        return view('filter',['trades'=>$trades ,'login'=>$login,'date'=> $date,'mtHulul'=>$mtHulul,'days'=>$days,'charts'=>$charts,'Balance'=>$Balance]);
    }
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Todo $todo
     * @return Response
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
            $to =Carbon::today()->timestamp;
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
            $trade = $api->getOrderHistoryPagination($request['login'], $from, $to, 0, $total);
//                 $x = $api->getPosition(101200,'EURUSD');
                // dd($x);
            $trades = $this->paginate($trade);
            $trades->withPath("/demos/{$request['login']}");
            $balances= $api->getUserBatch($request['login']);
            $Balance=[$balances[0]->BalancePrevMonth,$balances[0]->BalancePrevDay,$balances[0]->Balance];
            $days = ['last month', 'yesterday', 'today'];
            // return $days;
        } catch (ConnectionException|UserException $e) {
        }
        return view('filter',['trades'=>$trades ,'login'=>$request['login'],'mtHulul'=>$mtHulul,'days'=>$days,'Balance'=>$Balance]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Todo $todo
     * @return Response
     */
    public function update(Request $request,$id)
    {
        // return $request;
        // $inpit =$request ->validate($request, [

        //     'password' => 'required|confirmed|min:6',
        // ]);

        $login = MtHulul::find($id);
        $login-> update(['password' =>  $request['password']]);
        // $login->password = $request['password'];
        // return  $login->password;
        // $login->save;
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $login
     * @return Application|RedirectResponse|Redirector
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
