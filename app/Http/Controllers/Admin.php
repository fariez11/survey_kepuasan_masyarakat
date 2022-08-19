<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\surveior;
use App\soal;
use App\nilai;

class Admin extends Controller
{

    public function login()
    {	
        return view('/content/login');
    }

    public function act_login(Request $request){
        $username = $request->user;
        $password = $request->pass;
        
        Session::flush();
        $data = DB::table('login')->where([['USERNAME',$username],['PASSWORD',$password]])->get();
        foreach ($data as $key) {
            $nama = $key->NAMA;
            $level = $key->LEVEL;
        };
        if (count($data) == 0){

            return redirect('/login')->with('error','username dan password tidak cocok !!!');
        }
        else if($level == 1) {

            Session::put('USERNAME',$username);
            Session::put('PASSWORD',$password);
            Session::put('NAMA',$nama);


            return view('/owner/dt_thi',[]);

        }else if($level == 2) {

            Session::put('USERNAME',$username);
            Session::put('PASSWORD',$password);
            Session::put('NAMA',$nama);


            return view('/admin/home',[]);
        }
    }

    public function adhome()
    {   
        return view('/admin/home');
    }

    public function dt_sur()
    {   
        $data = \App\surveior::
        select('*')
        ->orderby('JAM','ASC')
        ->get();
          
        return view('/admin/dt_surveior',['data'=>$data]);
    }

    public function editsur(Request $request,$id)
    {
        $id = $request->nik;
        $gen = $request->gen;
        $age = $request->age;
        $pen = $request->pen;
        $pek = $request->pek;
        $jen = $request->jen;

        $data = DB::table('surveiors')->where('NIK',$id)->update(['GENDER'=>$gen,'UMUR'=>$age,'PENDIDIKAN'=>$pen,'PEKERJAAN'=>$pek,'JENIS'=>$jen]);
        return redirect('/data_surveior');
    }

    public function delsur($id)
    {
        DB::table('surveiors')->where('NIK',$id)->delete();
        return redirect('/data_surveior');
    }


    public function dt_soal()
    {   
        $data = \App\soal::select('*')->get();
          
        return view('/admin/dt_soal',['data'=>$data]);
    }

      public function tmbsoal(Request $request)
    {
      $no = $request->no;
      $so = $request->soal;
      $a = $request->pa;
      $b = $request->pb;
      $c = $request->pc;
      $d = $request->pd;

      $data = new soal();
        $data->NO_SOAL = $no;
        $data->SOAL = $so;
        $data->A = $a;
        $data->B = $b;
        $data->C = $c;
        $data->D = $d;
        $data->save();

        return redirect('/data_soal');
    }

    public function editsoal(Request $request,$id)
    {
        $so = $request->soal;
        $a = $request->pa;
        $b = $request->pb;
        $c = $request->pc;
        $d = $request->pd;

        $data = DB::table('soals')->where('SOAL_ID',$id)->update(['SOal'=>$so,'A'=>$a,'B'=>$b,'C'=>$c,'D'=>$d]);
        return redirect('/data_soal');
    }


    public function dt_nilai()
    {   
        $data = \App\nilai::
        select('*')
        ->get();
          
        return view('/admin/dt_nilai',['data'=>$data]);
    }

    public function hasil()
    {            
        return view('/content/hasil');
    } 


    public function dt_thi()
    {            
        return view('/owner/dt_thi');
    }


    public function tmbsur(Request $request)
    {
      $ni = $request->nik;
      $tg = $request->tgl;
      $ta = $request->tahun;
      $ja = $request->jam;
      $ge = $request->gender;
      $ag = $request->age;
      $pe = $request->pen;
      $pk = $request->pek;
      $je = $request->jen;

      $data = new surveior();
        $data->NIK = $ni;
        $data->TGL = $tg;
        $data->TAHUN = $ta;
        $data->JAM = $ja;
        $data->GENDER = $ge;
        $data->UMUR = $ag;
        $data->PENDIDIKAN = $pe;
        $data->PEKERJAAN = $pk;
        $data->JENIS = $je;
        $data->save();

        $dato = \App\soal::
        select('*')
        ->get();

        Session::put('NIK',$ni);
        return view('/content/soal',['data'=>$dato]);
    }

    public function kersoal(Request $request)
    {   
      $ni = $request->nik;
      $a = $request->u1;
      $b = $request->u2;
      $c = $request->u3;
      $d = $request->u4;
      $e = $request->u5;
      $f = $request->u6;
      $g = $request->u7;
      $h = $request->u8;
      $i = $request->u9;
      $ta = $request->tahun;

      $data = new nilai();
        $data->JNIK = $ni;
        $data->U1 = $a;
        $data->U2 = $b;
        $data->U3 = $c;
        $data->U4 = $d;
        $data->U5 = $e;
        $data->U6 = $f;
        $data->U7 = $g;
        $data->U8 = $h;
        $data->U9 = $i;
        $data->TAHUN = $ta;
        $data->save();

        return view('/content/hasil');
    }

    public function logout()
    {
         return redirect('/');
    }
}
