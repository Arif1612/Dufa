<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersInfo;
use Validator;

class UserInfosController extends Controller
{
    public function showUserInfos($id=null)
    {
        if ($id=='') {
            $users = UsersInfo::get();
            return response()->json(['users'=>$users],200);
        }else{
            $users = UsersInfo::find($id);
            return response()->json(['users'=>$users],200);
        }
    }

    // put api for update userinfos table 

    public function updateUserInfos(Request $request,$id)
    {
        if ($request->ismethod('put')) {
            $data = $request->all();
            //return $data;

            $rules = [
                'name'=>'required',

            ];

            $customMessage = [
                'name.required'=>'Name is required',

            ];

            $validator = Validator::make($data,$rules,$customMessage);

            if ($validator->fails()) {
                return response()->json($validator->errors(),422);
            }

            $data = UsersInfo::find($id);
            $data->name = $data['name'];

            $data->nickname = $data['nickname'];
            $data->nid = $data['nid'];
            $data->phone = $data['phone'];
            $data->gender = $data['gender'];
            $data->department = $data['department'];
            $data->hall = $data['hall'];
            $data->bloodgroup = $data['bloodgroup'];
            $data->birthdate = $data['birthdate'];
            $data->district = $data['district'];
            $data->address = $data['address'];

            $data->save();
            $message = 'Data Successfully Updated';
            return response()->json(['message'=>$message],202);
        }
    }

    // patch api for update single users

    // public function updateSingleRecord(Request $request,$id)
    // {
    //     if ($request->ismethod('patch')) {
    //         $data = $request->all();
    //         //return $data;

    //         $rules = [
    //             'name'=>'required',
    //         ];

    //         $customMessage = [
    //             'name.required'=>'Name is required',
    //         ];

    //         $validator = Validator::make($data,$rules,$customMessage);

    //         if ($validator->fails()) {
    //             return response()->json($validator->errors(),422);
    //         }

    //         $user = User::findorFail($id);
    //         $user->name = $data['name'];
    //         $user->save();
    //         $message = 'User Successfully Updated';
    //         return response()->json(['message'=>$message],202);
    //     }
    // }

}
