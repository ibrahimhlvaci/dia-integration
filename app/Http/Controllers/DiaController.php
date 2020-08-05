<?php

namespace App\Http\Controllers;
use App\Kullanicilar;
use App\Session;
use App\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function index()
    {
        return view('diagiris');

    }
    public function giris_yap()
    {
       

        $url1 ="https://";
        $url2 = request('sunucuadi').".ws.dia.com.tr";
        $url3 = "/api/v3/sis/json";
        $url = $url1.$url2.$url3;


        $data= json_encode(
            array(
                'login' => array(

                    'username' => request('kullanici_adi'),
                    'password' => request('sifre'),
                    "disconnect_same_user"=> true,
                    "lang"=>'tr',

                )
            )


        );
        $response = Http::mesajGonder($data,$url);
     if($response == null){
        $errors = ['email' => 'Hatalı Giriş'];
        return back()->withErrors($errors);

    }
      else if ($response['code']=="200")
        {
            Session::updateOrCreate([
                'kullanici_id' => auth()->id(),
                'session' => $response['msg'],
                'sunucuadi' => request('sunucuadi')

            ]);

            return redirect()->route('cariler');

        }

        else
        {
            $errors = ['email' => 'Hatalı Giriş'];
            return back()->withErrors($errors);


        }





    }
    public function cariler()
    {
        $DB = Session::where('kullanici_id',auth()->id())->latest('updated_at')->first();
        $session = $DB->session;
        $sunucuadi = $DB -> sunucuadi;
        $url1 ="https://";
        $url2 =$sunucuadi.".ws.dia.com.tr";
        $url3 = "/api/v3/sis/json";
        $url = $url1.$url2.$url3;
        $data= json_encode(
            array(
                'sis_yetkili_firma_donem_sube_depo' => array(

                    'session_id' =>$session,


                )
            )


        );
        $response = Http::mesajGonder($data,$url);
        if($response == null)
        {
            return redirect()->route('diagiris');
        }
        else if($response['code'] == "401")
        {
            return redirect()->route('diagiris');

        }



        return view('cariler',compact('response'));

    }
    public function caricek()
    {


        $DB = Session::where('kullanici_id',auth()->id())->latest('updated_at')->first();
        $session = $DB->session;
        $sunucuadi = $DB->sunucuadi;
        $url1 = "https://";
        $url2 = $sunucuadi.".ws.dia.com.tr";
        $url3 = "/api/v3/scf/json";
        $url4 = "/api/v3/sis/json";
        $url = $url1.$url2.$url3;
        $url2 = $url1.$url2.$url4;
        $firmakodu1 = (integer)request('firmakodu');
        $donemkodu = (integer)request('donem');
       $data= json_encode(
            array(
                'scf_carikart_listele' => array(

                    'session_id' =>$session,
                    "firma_kodu"=> $firmakodu1,
                     "donem_kodu"=> $donemkodu,
                     "filters"=>"",
                     "sorts"=> '',
                     "params"=> '',
                     "limit"=> 500,
                     "offset"=> 0

                )
            )


        );


        $response = Http::mesajGonder($data,$url);



        $data1= json_encode(
            array(
                'sis_yetkili_firma_donem_sube_depo' => array(

                    'session_id' =>$session,


                )
            )


        );
        $response1 = Http::mesajGonder($data1,$url2);
        if($response ['code'] == "419")
        {
            return redirect()->route('diaindex');

        }

        return view('cariler2',compact("response",'response1','firmakodu1','donemkodu'));







    }
    public function cariekle($firmakodu1=null,$donemkodu=null,$key)
    {
        $DB = Session::where('kullanici_id',auth()->id())->latest('updated_at')->first();
        $session = $DB->session;
        $sunucuadi = $DB->sunucuadi;
        $url1 = "https://";
        $url2 = $sunucuadi.".ws.dia.com.tr";
        $url3 = "/api/v3/scf/json";
        $url = $url1.$url2.$url3;
        $data1= json_encode(
            array(
                'scf_carikart_getir' => array(

                    'session_id' =>$session,
                    "firma_kodu"=> $firmakodu1,
                    "donem_kodu"=> $donemkodu,
                    "key"=> $key,





                )
            )


        );
        $response1 = Http::mesajGonder($data1,$url);


        $data= json_encode(
            array(
                'scf_carikart_ekle' => array(

                    'session_id' =>$session,
                    "firma_kodu"=> (integer)\request('firmakodu'),
                    "donem_kodu"=> (integer)\request('donem'),
                    'kart' => array(
                        'unvan' => $response1['result']['unvan'],
                        'carikartkodu' => $response1['result']['carikartkodu'],

                        'm_adresler' => array(
                           [ "_key_dag_bolge"=> 0,

                        "_key_sis_ulkeler"=> 0,
                        "_key_sis_vergidairesi"=> 0,
                        "adres1"=> $response1['result']['m_adresler'][0]['adres1'],
                        "adres2"=> "",
                        "adresadi"=> $response1['result']['m_adresler'][0]['adresadi'],
                        "adrestipi"=> "F",
                        "anaadres"=> "1",
                        "ceptel"=> $response1['result']['m_adresler'][0]['ceptel'],
                        "fax"=> $response1['result']['m_adresler'][0]['fax'],
                        "ilce"=> $response1['result']['m_adresler'][0]['ilce'],
                        "kayitturu"=> "SHS",
                        "koordinat_latitude"=> "0.000000",
                        "koordinat_longitude"=> "0.000000",
                        "postakodu"=> "",
                        "tckimlikno"=> "",
                        "telefon1"=>$response1['result']['m_adresler'][0]['telefon1'] ,
                        "telefon2"=> "",
                        "ulkeno"=> "90",
                        "unvan"=> "",
                        "verginumarasi"=> "",
                        "yabanciuyruklu"=> "H"]


                        ),
                        'deneme' => 'dsa'



                    )

                )
            )


        );



       $response = Http::mesajGonder($data,$url);

       if($response == null)
       {
           $errors = ['Sistemde Bir Hata Oluştu'];
           return back()->withErrors($errors);

       }
       else if($response['code'] == "200")
       {
           $success = ['Cari Başarıyla Eklendi'];
           return back()->withErrors($success);

       }
       else if($response ['code'] == "419")
       {
           return redirect()->route('diaindex');

       }
       else if($response['code'] == "501")
       {
           $errors = ['Eklemek İstediğiniz Cari Mevcuttur'];
           return back()->withErrors($errors);

       }
       else
       {
           $errors = ['Beklenmedik Bir Hata Oluştu.'];
           return back()->withErrors($errors);

       }



        return view('home',compact("response"));



    }
}
