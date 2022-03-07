<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = BasicInformation:: where('user_id', Auth::user()->id)->get();
        if (!$info->isEmpty()) {
           $fullName= explode( " ",$info[0]->full_name);
        //    return $fullName[0];
           $fName= $fullName[0];
           $LName= $fullName[1];
            
        }else{
            $fName= '';
           $LName= '';
        }
         
        return view('admin.basic-profile-information',compact('info','fName','LName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->validate([
            "f-name"=> "required",
            "l-name"=> "required",
            'email'=> "required| email|unique:basic_information",
            'phone'=> "required",
            'phone_type'=> "required",
            'Birth'=> "required|date_format:Y-m-d|before_or_equal:2005-01-01",
            'Citizenship'=> "required",
            'Gender'=> "required",
            'Location'=> "required",
            'city'=> "required",
            'State'=> "required",
            'Adders'=> "required",
            'Zip_Code'=> "required"
            
        ]);

        // return $input['email'];
        BasicInformation::create([
            'user_id'=> Auth::user()->id,
            'full_name'=> $input['f-name'] . " " . $input['l-name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'phone2' => $request['phone2'],
            'phone_type' => $input['phone_type'],
            'Birth' => $input['Birth'],
            'citizenship' => $input['Citizenship'],
            'gender' => $input['Gender'],
            'location' => $input['Location'],
            'city' => $input['city'],
            'state' => $input['State'],
            'adders' => $input['Adders'],
            'zip_code' => $input['Zip_Code'],
        ]);
        $user = User::find(auth()->user()->id);
        $user->basicinfo =1;
        $user->save();
        return redirect(route('demos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
            $info = BasicInformation::find($id);
            // return $info; 
            $info->full_name = $request['f-name'] . " " . $request['l-name'] ;
            $info->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicInformation $basicInformation)
    {
        //
    }
}
