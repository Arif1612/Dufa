<?php

namespace App\Http\Controllers;

use App\Models\UsersInfo;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Str support
use Illuminate\Support\Facades\File;
use Auth;


class UsersInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function list( )
    {
        $user = UsersInfo::where('email', '=', Auth::user()->email)->first();
         $mission = UsersInfo::all();
         return view('list', compact('mission','user'));
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

    public function search(Request $request)
    {
        // dd($request->all());
        $user = UsersInfo::where('email', '=', Auth::user()->email)->first();
        $query  =   $request->input('search');
        $bloodgroup  =   $request->input('bloodgroup');
        $district  =   $request->input('district');
        $department  =   $request->input('department');
        // $users = UsersInfo::where('name', 'LIKE', "%{$query}%");
        $users = UsersInfo::where('name', '=', $query)
            ->orWhere('email', 'LIKE', "$query")
            ->orWhere('bloodgroup', '=', $bloodgroup)
            ->orWhere('district', '=', $district)
            ->orWhere('department', '=', $department)
            ->get();

    //    dd($users);
        return view('search', [
            'users'    =>  $users,
            'user'    =>  $user,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersInfo  $usersInfo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $singleUserInfo = UsersInfo::where('email', Auth::user()->email)->first();
        if($singleUserInfo) {
            return view('profile', [
                'user' => $singleUserInfo,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersInfo  $usersInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersInfo $usersInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersInfo  $usersInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = UsersInfo::where('email', '=', Auth::user()->email)->first();

        // image name
        $slug = Str::slug($request->name);    // creating slug
        if($request->hasFile('image')) {
            $newImageName = $slug . '-' . time() . '.' . $request->image->extension();
            // auto delete previous image
            if($user->image_path != null) {
                File::delete(public_path('images/users/' . $user->image_path));
            }
            // move to directory
            $request->image->move(public_path('images/users'), $newImageName);  // storing
        }
        if($request->hasFile('image')) {
            DB::table('user_infos')
            ->where('email', '=', Auth::user()->email)
            ->update([
                'name'  =>  ($request->has('name')) ? $request->name : $user->name,
                'nickname'  =>  ($request->has('nickname')) ? $request->nickname : $user->nickname,
                'image_path'  =>  ($request->hasFile('image')) ? $newImageName : $user->image_path,
                'email'  =>  ($request->has('email')) ? $request->email : $user->email,
                'nid'  =>  ($request->has('nid')) ? $request->nid : $user->nid,
                'phone'  =>  ($request->has('phone')) ? $request->phone : $user->phone,
                'gender'  =>  ($request->has('gender')) ? $request->gender : $user->gender,
                'department'  =>  ($request->has('department')) ? $request->department : $user->department,
                'hall'  =>  ($request->has('hall')) ? $request->hall : $user->hall,
                'bloodgroup'  =>  ($request->has('bloodgroup')) ? $request->bloodgroup : $user->bloodgroup,
                'birthdate'  =>  ($request->has('birthdate')) ? $request->birthdate : $user->birthdate,
                'district'  =>  ($request->has('district')) ? $request->district : $user->district,
                'address'  =>  ($request->has('address')) ? $request->address : $user->address,
            ]);

            $update_users = DB::table('users')
            ->where('email', Auth::user()->email)
            ->update([
                'name' => ($request->has('name')) ? $request->name : $user->name,
                'email' => ($request->has('email')) ? $request->email : $user->email,
            ]);

            return json_encode(['status' => 'success']);

        } else {
            DB::table('user_infos')
            ->where('email', '=', Auth::user()->email)
            ->update([
                'name'  =>  ($request->has('name')) ? $request->name : $user->name,
                'nickname'  =>  ($request->has('nickname')) ? $request->nickname : $user->nickname,
                'image_path'  =>  'avatar-1.jpg',
                'email'  =>  ($request->has('email')) ? $request->email : $user->email,
                'nid'  =>  ($request->has('nid')) ? $request->nid : $user->nid,
                'phone'  =>  ($request->has('phone')) ? $request->phone : $user->phone,
                'gender'  =>  ($request->has('gender')) ? $request->gender : $user->gender,
                'department'  =>  ($request->has('department')) ? $request->department : $user->department,
                'hall'  =>  ($request->has('hall')) ? $request->hall : $user->hall,
                'bloodgroup'  =>  ($request->has('bloodgroup')) ? $request->bloodgroup : $user->bloodgroup,
                'birthdate'  =>  ($request->has('birthdate')) ? $request->birthdate : $user->birthdate,
                'district'  =>  ($request->has('district')) ? $request->district : $user->district,
                'address'  =>  ($request->has('address')) ? $request->address : $user->address,
            ]);

            $update_users = DB::table('users')
            ->where('email', Auth::user()->email)
            ->update([
                'name' => ($request->has('name')) ? $request->name : $user->name,
                'email' => ($request->has('email')) ? $request->email : $user->email,
            ]);

            return json_encode(['status' => 'success']);

        }

        // return json_encode(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersInfo  $usersInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersInfo $usersInfo)
    {
        //
    }
    public function paymentHistory ()
    {
        $user = UsersInfo::where('email', '=', Auth::user()->email)->first();
        $orders = DB::table('orders')->where('email', Auth::user()->email)->latest()->paginate(10);
        return view('payment-history', [
            'user' => $user,
            'orders' => $orders,
        ]);
    }

     public function memberlist()
    {
        return view('memberlist');
    }
}
