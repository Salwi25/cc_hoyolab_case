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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add New Data</h2>
                    </div>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="insertCreatorDo.php" method="post">
                        <div class="form-group">
                            <label>Account ID</label>
                            <input type="text" name="account id" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Creator Field</label>
                            <input type="text" name="creator field" class="form-control" value="">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>