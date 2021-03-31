

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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="ProsesAdd.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="nama" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>usai</label>
                            <input type="number" name="usia" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>alamat</label>
                            <input type="text" name="alamat" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add" name="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
