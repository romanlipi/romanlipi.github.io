<?php
    function getIp() {

        $ip = $_SERVER['REMOTE_ADDR'];


        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

            $ip = $_SERVER['HTTP_CLIENT_IP'];

        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

        }

     
        
        return $ip;

    }
      $userip = array(
        'id'=>'3439',
        'ip'=>getIp()
        );
	echo json_encode($userip);
?>