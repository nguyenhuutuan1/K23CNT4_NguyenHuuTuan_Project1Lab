<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhtAccountController extends Controller
{
    //action
    public function nhtIndex(){
        return "<h1> nhtAccount controller; nhtIndex- Action; return string </h1>";
    }

    //action: return view -> form them moi
    public function nhtCreate(){

    // // Tra ve view co ten create trong thu muc \\ressources\view\nht-account-create.blade.php
        return view('nht-account-create');
    }

    //action:return data to view
    public function nhtShowData(){
        //tao nick data
        $data = array('2310900112','Nguyen Huu Tuan');
        return view('nht-account-showData',['nhtData'=>$data]);
    }

    //action: return list data to view
    public function nhtList(){

        //Mock data
        $data = array(
            ["id"=>"2310900112","UserName"=>"HuuTuan","Password"=>"123456a@","FullName"=>"Nguyen Huu Tuan"],          
            ["id"=>"2310900001","UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"],
            ["id"=>"2310900002","UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"],
            ["id"=>"2310900003","UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"],
        );
        return view('nht-account-list',['list'=>$data]);
    }

    //action: connet db, get data to view
    public function nhtGetAll(){
        // doc du lieu tu bang trong mysql
        $model = DB::table('nhtacount')->get();

        return view('nht-account-all',['model'=>$model]);
    }
}
