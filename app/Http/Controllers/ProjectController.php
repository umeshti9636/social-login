<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Dotenv\Validator;

class ProjectController extends Controller
{
    public function project(){
       
        return view('admin.project');

    }

    public function create_project(Request $request){
        $request ->validate([
    
            'pname' =>  'required',
            'pdis'   => 'required'
            
    
    
        ]);
        $data =$request->all();
        // p($request->all());
        // die();
       
        
            Post::create($data);
          
            if($request==''){
                return redirect('project')->with('error','Somthing went wrong!!.');
            }else{
        
            return redirect('/admin')->with('success','Register Submited Successfully.');
            
            }
        


    }

}
