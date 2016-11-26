<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style2.css'?>" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">Gnome Studio</a>
          </div>
        </div>
      </nav>
      <?php
        for ($i=0; $i < 5; $i++) {
       ?>
      <div class="well col-sm-offset-3 col-sm-6">
        <div class="">
          <h4>Tesla tawarkan perjalanan eksklusif ke markas SpaceX</h4><hr />
        </div>

        <div class="">           <img
src="https://db6wg66ahfje1.cloudfront.net/16/02/22/feedf421.jpg" alt=""
height="270px" width="530px"/>         </div>

        <div class="">
          <p>
            <?php $this->load->view('api.php') ?>
          </p>
          <p>
            <a href="#">read more...</a>
          </p>

        </div>

        <div class="col-sm-12 col-">
          <hr />
          <div class="col-sm-4 col-md-2 col-xs-6 text-center">
            <h4 class="text-primary text-center">40</h4>
            <button type="button" name="button" class="btn btn-info">
              <span class="glyphicon glyphicon-thumbs-up"></span> like
            </button>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6 text-center">
            <h4 class="text-danger">1</h4>
            <button type="button" name="button" class="btn btn-danger">
              <span class="glyphicon glyphicon-thumbs-up"></span> dislike
            </button>
          </div>
        </div>
        <div class="clearfix"></div>

      </div>
      <?php
        }
       ?>

      <div class="modal">
        <div class="modal">
          <div class="modal-contant">
            <div class="modal-header">
              <h3>title</h3>
            </div>
            <div class="modal-body">
              <img src="" alt="" height="140px" width="140px"/>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>


    </div>
  </body>
</html>
