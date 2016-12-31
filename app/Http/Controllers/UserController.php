<?php
/**
 * Created by PhpStorm.
 * User: yijaejun
 * Date: 2016. 12. 31.
 * Time: AM 9:19
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Http\Models\UserModel;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;


class UserController extends BaseController
{
    
    public function getIndex($id = 1){
        Log::info('UserController ');
        //$users = UserModel::all();


        Log::info('Showing user profile for user: ' . $id);
        // $users = UserModel::all();
        //$users = UserModel::query(1)->get();

        $users = UserModel::where('id', $id)->get();
        Log::info('Result: ' . $users);

        return view('users', compact('users','id'));
    }
}