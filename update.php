<?php

    require_once('update.config.inc.php');
    
    header('Content-type: text/plain');
    if( isset($_GET['apikey']) && in_array($_GET['apikey'], $apiKeys, true) ) {
        if(isset($_GET['open']) && $_GET['open']=='true')
            {
                file_put_contents ( 'status.txt' , 'true,'.time() );
            echo "true";
            }else   if(isset($_GET['open']) && $_GET['open'] =='false')
            {
                    file_put_contents ( 'status.txt' , 'false,'.time() );
            echo "false";
            }
        } else {
        $str=file_get_contents('status.txt');
        $arr=explode(',',$str);
        $open=$arr[0];
        $date=$arr[1]; //lastchange: upadate via file see explode/implode
        echo "API Key Missing!\n";
        echo $open;
    }
?>