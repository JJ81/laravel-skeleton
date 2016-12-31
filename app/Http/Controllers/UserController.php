<?php
/**
 * Created by PhpStorm.
 * User: yijaejun
 * Date: 2016. 12. 31.
 * Time: AM 9:19
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Http\Models\User;

class UserController extends BaseController
{
    
    public function getIndex($id = 1){
        // 콘솔은 어떻게 찍어야 하는가??

        // 엘로퀀트를 이용할 경우 매개변수를 어떻게 넘기지?
        $users = User::all();

        return view('users', compact('users','id'));
    }
}