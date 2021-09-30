<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\fcm;

class ncontroller extends Controller
{
    public function notification(Request $req){
        return view('notify');
    }
    public function snotification(Request $req){
        $fcm=new fcm();
     $token = "cKVje2icejM:APA91bEI0OA3t95B4vAbRZy1Fi6RnOpaUfpYCqLtWrll5jIAaSxG-XvZFxhFFGr987GK6MTqbzrDqMy0bdXDwaMCtOxKpqsIICLhiKV8FS6z8yeCYwmhI7VHds2hh1q50GZTDMLXs19A";  
        $from = "AAAADFVyLqY:APA91bFERxySCAmDxXx_uTPzqdih1Iyfz4K-oC9f9gTnyyVM6nIs83u0f0H-7SgsGJ9HSnfYPsuRmfsRITFuU1-n2rd2ksNwy-zEoEm0wuqqnPC4OcitbMKSI8eSy0fuPk8n38irQloK";
        
        $msg = array
              (
            
                'body'  =>"testing",
                'title' => "demo",
                'receiver' => 'erw',
                'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
                'sound' => 'mySound'/*Default sound*/

              );

        $fields = array
                (
                    'to'        => $token,
                    'notification'  => $msg
                );

        $headers = array
                (
                    'Authorization: key=' . $from,
                    'Content-Type: application/json'
                );
        //#Send Reponse To FireBase Server 
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        if($result){
            echo "notification Send Sucessfully";
        }
        curl_close( $ch );

    }
  
}
