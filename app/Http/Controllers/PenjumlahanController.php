<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Validator;

class PenjumlahanController extends Controller
{
    public function index(Request $request){    
         $t = 0; //mendeklarasikan kelipatan 3 dan 5
         $u = 0; //kelipatan 3 untuk mengubah Belanja pangan
         $v = 0; //kelipatan 5 untuk mengubah Pasar 20
         $perulangan = $request->perulangan;
         $jumlah = $request->jumlah;
         $respon = array();
         for ($i = 0; $i < $jumlah; $i++) {
             if($perulangan % 3 ==0){
                 if($u < 2){
                     $re = array(
                         'message'=>"Pasar 20 (kelipatan 3)"
                     );
                     array_push($respon, $re);
                     $u++;
                 }else{
                     $re = array(
                         'message'=>"Belanja Pangan (kelipatan 3)"
                     );
                     array_push($respon, $re);
                 }
             };
             if($perulangan % 5 ==0){
                 if($v < 2){
                     $re = array(
                         'message'=>"Belanja Pangan (kelipatan 5)"
                     );
                     array_push($respon, $re);
                     $v++;
                 }else{
                     $re = array(
                         'message'=>"Pasar 20 (kelipatan 5)"
                     );
                     array_push($respon, $re);
                 }
             };
             if($perulangan % 5 ==0&&$perulangan % 3 ==0){
                 $re = array(
                         'message'=>"Pasar 20 Belanja Pangan (kelipatan 3 dan 5)"
                     );
                  array_push($respon, $re);
                     $t++;
                     
                   if($t==5){
                       break;
                   }  
             };
             
         }
         if(count($respon)>0){
             $response = array(
                 'status'=>1,
                 'message'=>$respon
             );
         }else{
              $response = array(
                'status'=>0,
                 'message'=>"Bilangan tidak kelipatan 3 dan 5"
             );
                
         }
        return response()->json($response);
//         if(){
//             
//         }else{
//             
//         }
    }
    public function provinci(Request $request) {
        $search = $request->search;
        $ket = '07c270254dad1463eae6ac1f55adff2e';
        $curl = Curl::to('https://api.rajaongkir.com/starter/province')
        ->withHeader('key: '.$ket)
        ->get();
        $curl = json_decode($curl);
        $response = array();
        if(isset($curl)&&$curl!=false){
            if($curl->rajaongkir->status->code == 200){
                if($search==''){
                foreach ($curl->rajaongkir->results as $value) {
                             $response[] = array(
                                "id"=>$value->province_id,
                                "text"=>$value->province
                            );
                    }
                }else{
                    foreach ($curl->rajaongkir->results as $value) {
                        if(strpos($value->province,$search) !== false){
                             $response[] = array(
                                "id"=>$value->province_id,
                                "text"=>$value->province
                            );
                        }
                    }
                }
           }
        }
         return response()->json($response);
    }
    public function kota(Request $request) {
        $search = $request->search;
        $id = $request->id;
        if($id == ''){
            $url = 'https://api.rajaongkir.com/starter/city';
        }else{
            $url = 'https://api.rajaongkir.com/starter/city?province='.$id;
        }
        $ket = '07c270254dad1463eae6ac1f55adff2e';
        $curl = Curl::to($url)
        ->withHeader('key: '.$ket)
        ->get();
        $curl = json_decode($curl);
        $response = array();
        if(isset($curl)&&$curl!=false){
            if($curl->rajaongkir->status->code == 200){
                if($search==''){
                foreach ($curl->rajaongkir->results as $value) {
                             $response[] = array(
                                "id"=>$value->city_id,
                                "text"=>$value->city_name.' ('.$value->postal_code.')'
                            );
                    }
                }else{
                    foreach ($curl->rajaongkir->results as $value) {
                        if(strpos($value->city_name,$search) !== false){
                             $response[] = array(
                                 "id"=>$value->city_id,
                                "text"=>$value->city_name.' ('.$value->postal_code.')'
                            );
                        }
                    }
                }
           }
        }
         return response()->json($response);
    }
    public function rules($request){
        $rulesku=array(
            'origin' => 'required',
            'destination' => 'required',
            'weight' => 'required',
            'courier' => 'required',
           );
        $pesan = [
            'required'    => ':attribute tidak boleh kosong.',
        ];
        foreach ($rulesku as $key => $value) {
            $atribut[$key]=ucwords(str_replace('_',' ',$key));
        };
        $validator = Validator::make($request->all(),$rulesku ,$pesan);
        $validator->setAttributeNames($atribut); 
        if ($validator->passes()) {
            $data['status']=1;
            $data['pesan']='Data berhasil disimpan.';
        }else{
            $data['status']=0;
            $data['pesan']=$validator->errors()->all();
        }
        return $data;
    }
    public function ongkir(Request $request) {
          $validator=$this->rules($request);
        if ($validator['status']){
              $ket = '07c270254dad1463eae6ac1f55adff2e';
              $head = array(
                 'origin'=>$request->origin, 
                 'destination'=>$request->destination, 
                 'weight'=>$request->weight, 
                 'courier'=>$request->courier, 
              );
             $curl = Curl::to('https://api.rajaongkir.com/starter/cost')
                ->withHeader('key: '.$ket)
                ->withData($head) 
                ->post();
            $curl = json_decode($curl);
            $validator = array(
                'status'=>0,
                'pesan'=>'Eror '
            );
            if(isset($curl)&&$curl!=false){
                if($curl->rajaongkir->status->code == 200){
                     $validator = array(
                        'status'=>1,
                        'destination_details'=>$curl->rajaongkir->destination_details,
                        'origin_details'=>$curl->rajaongkir->origin_details,
                        'results'=>$curl->rajaongkir->results,
                    );
                  }
                }
           }
        return response()->json($validator);
      
    }
}
