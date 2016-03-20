<?php
	header('Content-type: text/plain');
	if(isset($_GET['apikey']) && ($_GET['apikey']=='EzajQuanob5' || $_GET['apikey']=='manual')){
		$str=file_get_contents('pinged.txt');
        	echo $str;
     		file_put_contents ( 'pinged.txt' , 'false' );
        }else{
		$str=file_get_contents('pinged.txt');
		echo "API Key Missing!\n";
        	echo $str;
	}
?>

