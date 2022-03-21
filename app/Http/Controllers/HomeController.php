<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

use App\Http\Requests;
use Carbon\Carbon;
use App\Models\CustomerModel;
use App\Models\SochudaoModel;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function getindex(){
        return view('welcome');
    }
    public function search(Request $request){
        
        $data['customer_date']=$request->date;
        
        if($data['customer_date']){
            $date= $data['customer_date'];

            $str= explode('-', $date);
            $a = implode('',$str);
            $b = str_split($a);

            
            $tong = 0;
            for($i =0 ; $i< count($b);$i++){
                $tong += $b[$i];
                if($tong > 11){
                    $c = str_split($tong);
                    $tong1 = 0;
                    for($j =0 ; $j< count($c);$j++){
                        $tong1 += $c[$j];
                    }
                }
            }
            if($tong > 11){
                $data['customer_sochudao'] = $tong1;
                
            }else{
                $data['customer_sochudao'] = $tong;
            }
        }else{
            echo "Ban chua nhap ngay thang nam sinh.";
        }
        $ten = $request->name;
        $date = $request->date;
        $date=strtotime($date);
        $date=date('d/m/Y',$date); 
        $so = $data['customer_sochudao'];
        $customer = CustomerModel::select('customer_id')->where('customer_name',$ten)->get();
        
        
        // var_dump($ten);
        // var_dump($date);
        $desc=SochudaoModel::select('sochudao_desc')->where('sochudao_id',$so)->get();
        
        return view('pages.result')->with(compact('ten','date','so','desc','customer'));
    }
    public function peak_year(){
        return view('peakYear.input_py');
    }

    public function result_py(){
        return view('peakYear.result_py');
    }

    public function insert(Request $request){
        $data=array();

        $data['customer_name'] = $request->namepy;
        $data['customer_email'] =  $request->emailpy;
        $data['customer_phone']= $request->phonepy;
        $data['customer_date']=$request->datepy;
        $data['create_at']= Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        if($data['customer_date']){
            $date= $data['customer_date'];

            $str= explode('-', $date);
            $a = implode('',$str);
            $b = str_split($a);

            
            $tong = 0;
            for($i =0 ; $i< count($b);$i++){
                $tong += $b[$i];
                if($tong > 11){
                    $c = str_split($tong);
                    $tong1 = 0;
                    for($j =0 ; $j< count($c);$j++){
                        $tong1 += $c[$j];
                    }
                }
            }
            if($tong > 11){
                $data['customer_sochudao'] = $tong1;
                
            }else{
                $data['customer_sochudao'] = $tong;
            }
        }else{
            echo "Ban chua nhap ngay thang nam sinh.";
        }
        $customer=CustomerModel::insert($data);
        if($customer){
            echo "thanh cong";
            return Redirect::to('/result-py');
        }else{
            echo"that bai";
            return Redirect::to('/peak-year');
        }
    }
}
