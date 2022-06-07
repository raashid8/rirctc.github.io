<?php 


    // admin login page
    session_start();
    include('DBConnection.php');

    if(isset($_POST['logbtn'])) {
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        // query for checked admin username and password available or not in admin table
        $sql="select *from admin where username = '$uname' AND password = '$pass'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $_SESSION["adminuname"] = $uname;
           header("location: admin_home.php");

        }
        else{
            $er_invalid = "invalid username & password";
        }
    }

 ?>


<!doctype html>
<html lang="en">
<head>
	<title>IRCTC</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="icon/png" href="asset/img/logo/rail_icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- :start of optional css-->

    <!-- font-awesome for icon -->
    <link rel="stylesheet" href="asset/font-awesome/css/all.min.css">

    <!-- animation css -->
    <link rel="stylesheet" href="asset/css/animate.css">

    <!-- hover css animations -->
    <link rel="stylesheet" href="asset/css/hover-min.css">

    <!-- :end of optional css -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.4.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/validation.js"></script>


    

    <!-- custom style -->
    <style>
           @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");

    * {
      box-sizing: border-box;
      font-family: Raleway, sans-serif;
    }

    	#bg-custom{
            background-color:rgba(2,2,2,0.8);
        }
        .bg-custom{
            background-color:rgba(2,2,2,0.8);
        }
        .bg-img{
        	background-image:url('asset/img/5.jpg'); 
        	background-size: 100%;
        }
        .bg-img2{
            background-image:url('asset/img/5.jpg'); 
            background-size: 100%;
        }
        .m-cust{
        	margin-right: 250px;
        	margin-top: 60px; 
        }
        
 
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .screen {
      background: linear-gradient(340deg, #fbd586, #f1cb75);
      position: relative;
      height: 600px;
      width: 360px;
      box-shadow: 0px 0px 24px #ad8602;
    }

    .screen__content {
      z-index: 1;
      position: relative;
      height: 100%;
    }

    .screen__background {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      -webkit-clip-path: inset(0 0 0 0);
      clip-path: inset(0 0 0 0);
    }

    .screen__background__shape {
      transform: rotate(45deg);
      position: absolute;
    }

    .screen__background__shape1 {
      height: 520px;
      width: 520px;
      background: #fff;
      top: -50px;
      right: 120px;
      border-radius: 0 72px 0 0;
    }

    .screen__background__shape2 {
      height: 220px;
      width: 220px;
      background: #c9a230;
      top: -172px;
      right: 0;
      border-radius: 32px;
    }

    .screen__background__shape3 {
      height: 540px;
      width: 190px;
      background: linear-gradient(100deg, #edc735, #c9a230);
      top: -24px;
      right: 0;
      border-radius: 32px;
    }

    .screen__background__shape4 {
      height: 400px;
      width: 200px;
      background: #cba438;
      top: 420px;
      right: 50px;
      border-radius: 60px;
    }

    .login {
      width: 320px;
      padding: 30px;
      padding-top: 156px;
    }

    .login__field {
      padding: 20px 0px;
      position: relative;
    }

    .login__icon {
      position: absolute;
      top: 30px;
      color: #ad8602;
    }

    .login__input {
      border: none;
      border-bottom: 2px solid #d1d1d4;
      background: none;
      padding: 10px;
      padding-left: 24px;
      font-weight: 700;
      width: 75%;
      transition: 0.2s;
    }

    .login__input:active,
    .login__input:focus,
    .login__input:hover {
      outline: none;
      border-bottom-color: #ad8602;
    }

    .login__submit {
      background: #fff;
      font-size: 14px;
      margin-top: 30px;
      padding: 16px 20px;
      border-radius: 26px;
      border: 1px solid #d4d3e8;
      text-transform: uppercase;
      font-weight: 700;
      display: flex;
      align-items: center;
      width: 100%;
      color: black;
      box-shadow: 0px 2px 2px orangered;
      cursor: pointer;
      transition: 0.2s;
    }

    .login__submit:active,
    .login__submit:focus,
    .login__submit:hover {
      border-color: #ad8602;
      outline: none;
    }

    .button__icon {
      font-size: 24px;
      margin-left: auto;
      color: #ad8602;
    }

    .social-login {
      position: absolute;
      height: 140px;
      width: 160px;
      text-align: center;
      bottom: 0px;
      right: 0px;
      color: #fff;
    }

    .social-icons {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .social-login__icon {
      padding: 20px 10px;
      color: #fff;
      text-decoration: none;
      text-shadow: 0px 0px 8px #7875b5;
    }

    .social-login__icon:hover {
      transform: scale(1.5);
      /* background-color: yellow; */

    }
 
    #s1:hover{
    color: #e95950;
    }
    #s2:hover{
    color: #4267B2;
    }
    #s3:hover{
    color: #1DA1F2;
    }
  
    </style>

</head>
<body    style="
      background-image: url('asset/img/bg.jpg');
      background-position: 100%;
      
    ">

	<!-- include header -->
   	<?php include('adminheader1.html') ?>
	
	<!--  Admin Login Page -->
	<div class="container " id="id1">
        
        <div class="modal-dialog" id="m-cust">
            <div class="modal-content bg-custom" id="bg-custom">
             <!--    <div class="modal-header">
                    <img src="asset/img/8.jpg">
                </div> -->  
                <div class="modal-body">
                <span class=" text-danger fs-18 badge badge-light offset-5" id="er_username"></span>
                <span class="fs-18 text-danger badge badge-light offset-5" id="er_password"></span>
                    <!-- form -->
                    <div  class="text-red">
                                <span ><?php if (isset($er_invalid)){ echo "$er_invalid"; }?></span>
                            </div>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="logForm" onsubmit="return(logvalidation());">
                        <div class="input-group">   
                            <!-- username label -->
                            <div class="input-group-prepend">
                                <span class="input-group-text alert-danger text-dark">Username</span>
                            </div>
                            <input type="text" name="username" id="uname" class="form-control" placeholder="Enter Username"> 
                        </div><!-- group1 ends -->
                        <br>
                        <div class="input-group">
                            <!-- password label -->
                            <div class="input-group-prepend">
                                 <span class="input-group-text alert-danger text-dark">
                                Password    
                                </span>
                            </div>
                            <input type="password" name="password" id="pass" class="form-control" placeholder="Enter Password">
                        </div> <!-- group2 ends -->  
                        <br>
                        <div class="input-group">
                            <input class="btn btn-success btn-block" type="submit" value="login" name="logbtn">
                        </div>  
                            
                    </form>
                </div><!-- modal-body ends -->


            <!-- modal-content -->
            </div>
        <!-- modal-dialog ends -->
        </div>

    <!-- modal ends -->
    </div>
<!-- admin login ends -->

</body>
</html>