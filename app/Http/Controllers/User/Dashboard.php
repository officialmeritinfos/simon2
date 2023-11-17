<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'User Dashboard',
            'user'     =>  $user,
            'pendingDeposit'=>Investment::where('user',$user->id)->where('status',2)->get(),
            'withdrawals'=>Withdrawal::where('user',$user->id)->where('status',1)->get(),
            'pendingWithdrawal'=>Withdrawal::where('user',$user->id)->where('status','!=',1)->get(),
            'investments' => Investment::where('user',$user->id)->get(),
            'ongoingInvestments'=>Investment::where('user',$user->id)->where('status',4)->get(),
            'completedInvestments'=>Investment::where('user',$user->id)->where('status',1)->get(),
            'cancelledInvestments'=>Investment::where('user',$user->id)->where('status',3)->get(),
            'web'=>$web,
            'latests'=>Investment::where([
                'user'=>$user->id,'status'=>4
            ])->limit(5)->get()
        ];

        return view('user.dashboard',$dataView);
    }
}
