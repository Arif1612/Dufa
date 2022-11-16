<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB support
use App\Models\UsersInfo;
use Auth;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = UsersInfo::latest()->paginate(15);
        $singleUserInfo = UsersInfo::where('email', '=', Auth::user()->email)->first();

        // last order
        $lastOrder = DB::table('orders')->where('email', '=', Auth::user()->email)->latest()->first();
        if($lastOrder){

            // subscription
            $parsed = Carbon::parse($lastOrder->created_at);
            $currentYearLastDay = Carbon::createFromFormat('Y-m-d H:i:s', ''.$parsed->year.'-12-31 23:59:59');
            $daysLeft = $currentYearLastDay->diffInDays($lastOrder->created_at);

            if($daysLeft <= 0){
                $updateSubscription = DB::table('user_infos')
                ->where('email', $singleUserInfo->email)
                ->update([
                    'subscription' => 'none'
                ]);
            }
        }
        $years = Carbon::now()->diffInYears($lastOrder->created_at); // Calculate current year also
        $dues = $years * 1000;

        if($singleUserInfo) {
            return view('home', [
                'user' => $singleUserInfo,
                'users' => $users,
                'subscriptionTime' => ($singleUserInfo->subscription == "none"  || $singleUserInfo->subscription == null) ? 0 : $daysLeft,
                'dues' => $dues,
            ]);
        }
    }

    // public function list(Request $request)
    // {
    //      $mission = UsersInfo::all();
    //      return view('list', compact('mission'));
    // }
}
