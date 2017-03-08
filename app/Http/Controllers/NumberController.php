<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    //
    public function numb(Request $request)
    {
        //
        $this->validate($request, [
        'number' => 'required|regex:/^[0-9]+$/',
    ]);

    
 
        echo ($this->rec($request->number-1));
   


    }
    public function rec($num)
    {

    	if($num==0) {
    		return 0;
    	}
    	else {
    		return $num+$this->rec($num-1);
    	}

    }
}
