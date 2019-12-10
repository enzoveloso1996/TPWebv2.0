<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected function validator(Request $request)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:11',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function create(Request $request)
    {
    $data = new User();
        $data->first_name = $request['first_name'];
        $data->last_name = $request['last_name'];
        $data->address = $request['address'];
        $data->mobile = $request['mobile'];
        $data->email = $request['email'];
        $data->password = Hash::make($request['password']);
        If($data->save()){
            return redirect('registration-success');
        };
    }
}
