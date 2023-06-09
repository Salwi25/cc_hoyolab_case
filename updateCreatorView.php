<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php
 $id_cc = $_GET['id_cc'];
 $curl= curl_init();
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 //Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
 curl_setopt($curl, CURLOPT_URL, 'http://localhost/cc_hoyolab_api/creator_api.php?id_cc='.$id_cc.'');
 $res = curl_exec($curl);
 $json = json_decode($res, true);
//var_dump($json);
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Data</h2>
                    </div>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="updateCreatorDo.php" method="post">
                        <input type = "hidden" name="id_cc" value="<?php echo"$id_cc";?>">
                        <div class="form-group">
                            <label>Account ID</label>
                            <input type="text" name="account id" class="form-control" value="<?php echo($json["data"][0]["account_id"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo($json["data"][0]["username"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Creator Field</label>
                            <input type="text" name="creator field" class="form-control" value="<?php echo($json["data"][0]["creator_field"]); ?>">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>