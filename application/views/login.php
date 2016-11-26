<?php
  echo $this->input->ip_address();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style2.css'?>" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
  </head>
  <body>
    <div class="container-fluid col-sm-offset-4 col-sm-4">
      <div class="header">
        <h3>login</h3>
      </div>
      <form class="" action="index.html" method="post">
        <div class="form">
          <div class="form-group">
            <label for="">username</label>
            <input type="text"  name="username" class="form-control" value="">
          </div>
          <div class="form-group">
            <label for="">password</label>
            <input type="text" name="password" class="form-control" value="">
          </div>
        </div>
        <div class="">
          <button type="button" name="button" class="btn btn-primary">
            login <span class="glyphicon glyphicon-log-in"></span>
          </button>
        </div>
      </form>
    </div>

  </body>
</html>
