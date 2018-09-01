
<?php
  error_reporting( E_ALL );
 function j2_get_yt_subs($id) {
$api_key = 'AIzaSyDBM035W2m3z-YY-lvn61QRmiXYDuomP0c';
   $channel_id = $id;
if(!$api_key || !$channel_id)
       return false;
   $youtube_url = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel_id.'&key='.$api_key;
	
   $data = @file_get_contents($youtube_url);
   $json_data = json_decode($data);
   if(!$json_data)
       return false;
   $subs = $json_data->items[0]->statistics->subscriberCount;
	

   return($subs);
 }
 if (!$_GET['goal'])
 echo j2_get_yt_subs($_GET['id']);
 if ($_GET['goal'])	
 echo j2_get_yt_subs($_GET['id']) . "/" . $_GET['goal'];
 ?>