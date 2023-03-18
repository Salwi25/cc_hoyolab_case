<?php

if(isset($_POST['submit']))
{    

$account_id = $_POST['account_id'];
$username = $_POST['username'];
$creator_field = $_POST['creator_field'];
$id_cc = $_POST['id_cc'];


//Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
$url='http://10.33.35.44/cc_hoyolab_api/creator_api.php?id_cc='.$id_cc.'';
$ch = curl_init($url);
//kirimkan data yang akan di update
$jsonData = array(
    'account_id' =>  $account_id,
    'username' => $username,
    'creator_field' =>  $creator_field,
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, true);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

$result = curl_exec($ch);
$result = json_decode($result, true);
curl_close($ch);

//var_dump($result);
print("<center><br>status :  {$result["status"]} "); 
print("<br>");
print("message :  {$result["message"]} "); 
 echo "<br>Sukses mengupdate data di ubuntu server !";
 echo "<br><a href=selectCreatorView.php> OK </a>";
}
?>

 