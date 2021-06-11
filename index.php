<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body class="bg-image"
  style="background:url('img/ind.jpg')no-repeat;
        background-size:100%;
        height: 140px;
        display:block;
        padding:0 !important;
        margin:0;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
                <div class="heading text-lg-center my-5">
                  <h1 class="text-lg-center">Welcome to Bank</h1>
                  <h4>“Everyday is a bank account, and time is our currency. No one is rich, no one is poor, we've got 24 hours each.”</h4>
                  <h6>― Christopher Rice</h6>
                </div>
              
            </div>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid" style="border-radius:50%">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid" style="border-radius:50%">
                    <br>
                    <a href="transfermoney.php"><button>Transfer Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid" style="border-radius:50%">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer style="position:relative;
       background-color:
       width:100%;
       height:0px;
       color:black;
       display:flex;text-align:center;justify-content:center" >
        <p>&copy 2021. Made by <b>Mohammad Shoaib</b> <br># GRIPJUNE Web Developer Intern @ TSF </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>