<?php

namespace App\Http\Controllers;
//use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Dotenv\Validator;
//use Auth;

class SampleController extends Controller
{
     function index()
    {
        return view('login');
    }
     function register()
    {
        return view('register');
    }
     function validation_register(Request  $request){

    $request ->validate([
    
        'name' =>  'required',
        'email'   => 'required|email'
    ]);

    $data =$request->all();
// print_r($data);
// die();

    User::create([
        'name'=> $data['name'],
        'email'=> $data['email'],
        'password'=>hash::make($request->password)
    ]);
    if($request==''){
        return redirect('validation_register')->with('error','Somthing went wrong!!.');
    }else{

    return redirect('login')->with('success','Register Submited Successfully.');
    }
    }


    function validate_login(Request $request)
    {

       
        $request->validate([
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
           ]);

           if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $request->session()->regenerate();

            return redirect()->route('view');
           }
        //    session()->flash('msg_class','danger');
        //    session()->flash('msg_class', 'not match');
            return back()->with('error', 'OOps! Wrong Login Details!!');
            return redirect()->route('/login');



      
        //    $user_data = array(
        //     'email'  => $request->get('email'),
        //     'password' => $request->get('password')
        //    );
      
        //    if(Auth::attempt($user_data))
        //    {
        //     return redirect('dashboard');
        //    }
        //    else
        //    {
        //     return back()->with('error', 'OOps! Wrong Login Details!!');
        //    }
     }

    function dashboard()
    {
  
      return view('dashboard')->with('success','login succsessfuly');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    

}
?>