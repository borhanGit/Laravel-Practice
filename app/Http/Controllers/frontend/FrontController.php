<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function showRegisterForm()
    {
        return view ('register');
    }
    public function process(Request $request)
    {
        // $this->validate($request,[
        //     'email'=> 'required',
        //     'password' => 'required'
        // ]);
        $validation = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        $photo = $request->file('photo');
        $filename = Str::random(10).'.'.$photo->getClientOriginalExtension();

        if($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }
            if($photo->isValid()){
                $photo->storeAs('image',$filename);

            }
            session()->flash('message','registration succesfully!');
            return redirect()->back();
        
    }
}
