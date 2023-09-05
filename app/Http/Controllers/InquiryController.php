<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    //
    /**
     * create
     */
    public function index(){
        // $validated = $request->validate([
        //     'first_name'=> 'required|string',
        //     'last_name'=> 'required|string',
        //     'phone'=> 'required|string|max:15',
        //     'email'=> 'required|unique:email',
        //     'country'=> 'required',
        //     'message'=> 'required',
        // ]);
        $inquery = Inquiry::all();
        return response()->json([$inquery,'data get successfully..'],200);
    }
    //
    /**
     * create
     */
    public function create(Request $request){
        $validated = $request->validate([
            'first_name'=> 'required|string',
            'last_name'=> 'required|string',
            'phone'=> 'required|string|max:15',
            'email'=> 'required|unique:email',
            'country'=> 'required',
            'message'=> 'required',
        ]);
        $inquery = Inquiry::create(
            [
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'country'=>$request->country,
                'message'=>$request->message
            ]);
        return response()->json(['message'=>'Data Created Successfully..!'],200);
    }
    //
    /**
     * create
     */
    public function update(Request $request){
        $validated = $request->validate([
            'id'=> 'required|string',
            'status'=>'required'
        ]);
        $inquery = Inquiry::where('id',$request->id)->first();
        if($inquery){
            $inquery->update(['status'=>$request->status]);
        }
        return response()->json(['data'=>$inquery,'message'=>'Data Updated Successfully..!'],200);
    }
}