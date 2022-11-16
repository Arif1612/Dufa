<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    public function showUser($id=null)
    {
        if ($id=='') {
            $users = User::get();
            return response()->json(['users'=>$users],200);
        }else{
            $users = User::find($id);
            return response()->json(['users'=>$users],200);
        }
    }

    public function addUser(Request $request)
    {
        if ($request->ismethod('post')) {
            $data = $request->all();
            //return $data;

            $rules = [
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required',
            ];

            $customMessage = [
                'name.required'=>'Name is required',
                'email.required'=>'Email is required',
                'email.email'=>'Email must be a valid email',
                'password.required'=>'Password is required',
            ];

            $validator = Validator::make($data,$rules,$customMessage);

            if ($validator->fails()) {
                return response()->json($validator->errors(),422);
            }

            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->save();
            $message = 'User Successfully Added';
            return response()->json(['message'=>$message],201);
        }
    }

    public function addMultipleUser(Request $request)
    {
        if ($request->ismethod('post')) {
            $data = $request->all();
            //return $data;

            $rules = [
                'users.*.name'=>'required',
                'users.*.email'=>'required|email|unique:users',
                'users.*.password'=>'required',
            ];

            $customMessage = [
                'users.*.name.required'=>'Name is required',
                'users.*.email.required'=>'Email is required',
                'users.*.email.email'=>'Email must be a valid email',
                'users.*.password.required'=>'Password is required',
            ];

            $validator = Validator::make($data,$rules,$customMessage);

            if ($validator->fails()) {
                return response()->json($validator->errors(),422);
            }

            foreach ($data ['users'] as $adduser) {
                $user = new User();
                $user->name = $adduser['name'];
                $user->email = $adduser['email'];
                $user->password = bcrypt($adduser['password']);
                $user->save();
                $message = 'User Successfully Added';
            }

            return response()->json(['message'=>$message],201);
        }
    }


    // put api for update user details 

    public function updateUserDetails(Request $request,$id)
    {
        if ($request->ismethod('put')) {
            $data = $request->all();
            //return $data;

            $rules = [
                'name'=>'required',
                'password'=>'required',
            ];

            $customMessage = [
                'name.required'=>'Name is required',
                'password.required'=>'Password is required',
            ];

            $validator = Validator::make($data,$rules,$customMessage);

            if ($validator->fails()) {
                return response()->json($validator->errors(),422);
            }

            $user = User::findorFail($id);
            $user->name = $data['name'];
            $user->password = bcrypt($data['password']);
            $user->save();
            $message = 'User Successfully Updated';
            return response()->json(['message'=>$message],202);
        }
    }

    // patch api for update single users

    public function updateSingleRecord(Request $request,$id)
    {
        if ($request->ismethod('patch')) {
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

            $user = User::findorFail($id);
            $user->name = $data['name'];
            $user->save();
            $message = 'User Successfully Updated';
            return response()->json(['message'=>$message],202);
        }
    }

    // delete user with parameter

    public function deleteUser($id=null)
    {
        User::findorFail($id)->delete();
        $message = 'User Deleted Successfully';
        return response()->json(['message'=>$message],200);
    }

    // delete user with json

    public function deleteUserJson(Request $request)
    {
        if ($request->isMethod('delete')) {
            $data = $request->all();
            User::where('id',$data['id'])->delete();
            $message = 'User Deleted Successfully';
            return response()->json(['message'=>$message],200);
        }

    }

    // delete multiple user 

    public function deleteMultipleUser($ids)
    {
        $ids = explode(',',$ids);
        User::whereIn('id',$ids)->delete();
        $message = 'User Successfully Deleted';
        return response()->json(['message'=>$message],200);
    }

    // delete multiple userjson 

    public function deleteMultipleUserJson(Request $request)
    {
        if ($request->isMethod('delete')) {
            $data = $request->all();
            User::whereIn('id',$data['ids'])->delete();
            $message = 'User Deleted Successfully';
            return response()->json(['message'=>$message],200);
        }

    }
}
