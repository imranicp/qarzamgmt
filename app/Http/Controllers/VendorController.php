<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VendorController extends Controller
{
    //

    public function addagent(Request $request){
        $agent=new Agent();
        $agent->agent_name=$request->input('agentname');
        $agent->buisness_name=$request->input('buisnessname');
        $agent->buisness_address=$request->input('address');
        $agent->contact=$request->input('contact');
        $agent->save();

        return response('saved',200);
    }

    public function showagents(){
        $agents=Agent::all();
        return view('showagents')->with('agents',$agents);
    }

    public function sendmoney(Request $request){
        if ($request->isMethod('get'))
        {
            $agents=Agent::all();
            return view('sendmoney')->with('agents',$agents);

        }elseif($request->isMethod('post')){
            $trxn=new Transaction();
            $trxn->agent_id=$request->input('agent_id');
            $trxn->amount=$request->input('amount');
            $trxn->trxn_type=$request->input('trxn_type');
//        $trxn->date=date('YYYY-MM-DD HH:mm:SS');

            $trxn->save();

            return response()->json(['status'=>'ok','code'=>200]);

        }

    }

    public function receiveMoney(Request $request){
        if($request->isMethod('get')){
            $agents=Agent::all();
            return view('receivemoney')->with('agents',$agents);
        }elseif($request->isMethod('post')){
            $trxn=new Transaction();
            $trxn->agent_id=$request->input('agent_id');
            $trxn->amount=$request->input('amount');
            $trxn->trxn_type=$request->input('trxn_type');
            $trxn->save();
            return response()->json(['status'=>'ok','code'=>200]);
        }


    }


}
