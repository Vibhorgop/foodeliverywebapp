<!DOCTYPE html>
<html>
<head>
    <?php include("bootstrap.php"); ?>
<style type="text/css">


    <style type="text/css">
    body{
        font-family: 'roboto', sans-serif;
        background:url('image/bodyback.jpg') no-repeat;       

    }
    .main-section{
        margin: 100px 0px 0px 70px;
    }
    .modal-content{
        box-shadow: 0px 0px 19px #848484;
    }
    .btn{
        background-color: #27c2a5;
        color: #fff;
        font-size: 19px;
        padding: 7px 14px;
        border-radius: 5px;

    }
    button{
        width: 40%;
    }

</style>
</head>
<body style="background:url(image/bodyback.jpeg)">
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-sm-12 user-image">
                <h2>Delivery-Boy Login</h2>
                <img src="image/userimage.png" class='mt-2 mb-4'>
            </div>
            <form class="col-12" method="post">
                <div class="form-group">
                    <input type="text" name="uname" placeholder="Enter Username" class="form-control">
                </div>
<div class="form-group">
                    <input type="text" name="password" placeholder="Enter Password" class="form-control">
                </div>
                <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Log-In</button>
            </form>
            <div class="col-12 mb-4">
            </div>
        </div>
    </div>
</div>
</body>
</html>

 <?php 
 include"conne.php";
 if(isset($_POST['uname']))
 {
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $sql="select password from service_boy where username='$uname'";
    $x=$conn->query($sql);
    if($r=$x->fetch_array())
    {
    	$pswd=$r['password'];
    	if($pswd==$password)
    	{
    		session_start();
        	$_SESSION['uname']=$uname;
                $_SESSION['password']=$pswd;
        	header("location:profileserboy.php?msg=Welcome custmore");
    	}
    }

    }
  ?>