<?php

namespace App\Http\Controllers;

use App\Models\Quc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QucController extends Controller
{
    public function Step1()
    {
        $user = Quc::where("user_id" , Auth::user()->id)->get();
        if ($user->isEmpty()) {
            return view('profail.Income');
        }else{
            // return $user;
            return view('profail.answered',compact('user')) ;
        }
        
    }

    public function createStep1(Request $request)
    {
        $validatedData = $request->validate([
            'Income' => 'required',
           
        ]);

        if(empty($request->session()->get('Quc'))){
            $Quc = new Quc();
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
        }else{
            $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
        }
        // return session()->get('Quc');
        return redirect('/quc/step2');

    }

    public function Step2(Request $request)
    {
        
        return view('profail.Investments');
    }

    public function CreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'Investments' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
            // return session()->get('Quc');
        return redirect('/quc/step3');

    }

    public function Step3(Request $request)
    {
        
        return view('profail.Available_Amount');
    }

    public function CreateStep3(Request $request)
    {
        $validatedData = $request->validate([
            'Available_Amount' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
            // return $validatedData;
            // return session()->get('Quc');
        return redirect('/quc/step4');

    }
    public function Step4(Request $request)
    {
        
        return view('profail.Status');
    }

    public function CreateStep4(Request $request)
    {
        $validatedData = $request->validate([
            'Status' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
            // return $validatedData['Status'];
            if ($validatedData['Status'] == 'Student') {
                
                return redirect('/quc/Student');
            }else{
                return redirect('/quc/EmploymentStatus');
            }
            // return session()->get('Quc');
        return redirect('/quc/step4');

    }
    public function Step5(Request $request)
    {
        
        return view('profail.Declarations');
    }

    public function CreateStep5(Request $request)
    {
        $validatedData = $request->validate([
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'checkbox' => 'required',
        ]);
        $Declarations = ['agree'=>1];
        // return $Declarations;
        $Quc = $request->session()->get('Quc');
            $Quc->fill($Declarations);

            $request->session()->put('Quc', $Quc);
            // return session()->get('Quc')->Student;
            if (session()->get('Quc')->Status == 'Student') {
                // return "asds";
                Quc::create([
                    'user_id'=> Auth::user()->id,
                    'Income'=>session()->get('Quc')->Income,
                    'Investments'=>session()->get('Quc')->Investments,
                    'Available_Amount'=>session()->get('Quc')->Available_Amount,
                    'Status'=>session()->get('Quc')->Status,
                    'Student'=>session()->get('Quc')->Student,
                    'agree'=>session()->get('Quc')->agree,
                ]);
                Session::forget([
                    'Income',
                    'Investments',
                    'Available_Amount',
                    'Status',
                    'Student',
                    'agree',
            ]);
                // return session()->get('Quc');
                return redirect('/quc/step6');
            }else{
                Quc::create([
                    'user_id'=> Auth::user()->id,
                    'Income'=>session()->get('Quc')->Income,
                    'Investments'=>session()->get('Quc')->Investments,
                    'Available_Amount'=>session()->get('Quc')->Available_Amount,
                    'Status'=>session()->get('Quc')->Status,
                    'Industry'=>session()->get('Quc')->Industry,
                    'Funds'=>session()->get('Quc')->Funds,
                    'agree'=>session()->get('Quc')->agree,
                ]);

                $user = User::find(auth()->user()->id);
                $user ->qyc = 1;
                $user ->save();
                
                Session::forget([
                    'Income',
                    'Investments',
                    'Available_Amount',
                    'Status',
                    'Industry',
                    'Funds',
                    'agree',
            ]);
                return redirect('/quc/step6');
            }
          
            // return $validatedData['Status'];
            // return session()->get('Quc');
       

    }
    public function Step6(Request $request)
    {
        // return session()->get('Quc');
        
        return view('profail.last');
    }
    public function Student(Request $request)
    {
        
        return view('profail.Student');
    }

    public function CreateStudent(Request $request)
    {
        $validatedData = $request->validate([
            'Student' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
          
            // return session()->get('Quc');
        return redirect('/quc/step5');

    }
    public function EmploymentStatus(Request $request)
    {
        
        return view('profail.Industry');
    }

    public function CreateEmploymentStatus(Request $request)
    {
        $validatedData = $request->validate([
            'Industry' => 'required',
            'Funds' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
          
            // return session()->get('Quc');
        return redirect('/quc/step5');

    }
}
