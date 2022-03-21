<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\CustomerModel;
use App\Models\SochudaoModel;
use App\Models\PeakYearModel;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller                
{
    public function getadmin(){
        return view('admin.login');
    }
    
    public function logout(){
        return view('admin.login'); 
    }

    public function show_dashboard(){
        $customer = CustomerModel::all();
        $sochudao = SochudaoModel::all();
        return view('admin.dashboard')->with(compact('customer','sochudao'));
    }

    public function dashboard(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);

        $result = AdminModel::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Mật khẩu hoặc tài khoản sai!');
            return Redirect::to('/admin');
        }
        
    }

    public function add_thanso(){
        return view('admin.add_sochudao');
    }

    public function save_thanso(Request $request){
        $data=array();
        $data['sochudao_name']=$request->name_so;
        $data['sochudao_desc']=$request->desc_so;
        $result=SochudaoModel::insert($data);
        if($result){
            return Redirect::to('/dashboard');
        }else{
            echo "Insert that bai.";
        }
    }
    
    public function edit_sochudao($sochudao_id){
        $so = SochudaoModel::all()->where('sochudao_id',$sochudao_id);
   
        return view('admin.edit_sochudao')->with(compact('so'));
    }

    public function edit_so($idSo, Request $request){
        $data=array();

        $data['sochudao_name']=$request->so;
        $data['sochudao_desc']=$request->desc_so;

        SochudaoModel::where('sochudao_id', $idSo)->update($data);

        return redirect()->back();
    }
    public function delete($so_id){
        SochudaoModel::where('sochudao_id', $so_id)->delete();
        return redirect()->back();
    }
    public function add_py(){
        $py = PeakYearModel::all();
        return view('admin.add_py')->with(compact('py'));
    }
    public function save_py(Request $request){
        $data=array();
        $data['peakYear_name']=$request->namepy;
        $data['peakYear_desc']=$request->descpy;
        $result=PeakYearModel::insert($data);
        if($result){
            return Redirect::to('/dashboard');
        }else{
            echo "Insert that bai.";
        }
    }

    public function edit_py($py_id){
        $so = PeakYearModel::all()->where('peakYear_id',$py_id);
   
        return view('admin.edit_py')->with(compact('so'));
    }

    public function edit_peakyear($id_py, Request $request){
        $data=array();

        $data['peakYear_name']=$request->py;
        $data['peakYear_desc']=$request->desc_py;

        PeakYearModel::where('peakYear_id', $id_py)->update($data);

        return redirect()->back();
    }

    public function delete_py($peak_id){
        PeakYearModel::where('peakYear_id', $peak_id)->delete();
        return redirect()->back();
    }
}
