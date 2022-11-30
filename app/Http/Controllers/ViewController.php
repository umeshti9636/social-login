<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;

use function PHPUnit\Framework\isNull;

class ViewController extends Controller
{
    public function view(Request $request)
    {

        $search = $request['search'] ?? "";
        if($search!=""){

            $view = View::where('name','LIKE',"$search%")->orWhere('email','LIKE',"$search%")->get();

        }else{
            $view = View::all();
        }
      
        $data = compact('view','search');

        return view('view')->with($data);
    }

    public function edit($id)
    {
        $view = View::find($id);
        if(is_null($view)){
            return redirect('view');

        }else{
            $url = url('update') ."/". $id;
            $data = compact('view','url');
           return view('edit')->with($data);
        }
    }
    public function update($id,Request $request){
        // p($request->all());
        // die();
        $view = View::find($id);
        // echo '<pre>';
        // print_r($view);
        // die();
        $view->name = $request['name'];
        $view->email = $request['email'];
        $view->save();
        return redirect('view');

    }
    public function delete($id)
    {
        $view = View::find($id);
        if(is_null($view)){
            return redirect('view');

        }else{
            $view->delete();
            return redirect('view')->with('success','Your item delete succesfuly');
        }
    }
}
