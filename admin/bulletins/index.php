<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';
?>

<style>
</style>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Add - Bulletin</title>
        <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
</script>

</head>

<body >

        <div class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <img src="../../assets/img/logo.png"</a>
            </div>  
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                     <li><a href="../../index.php">HOME</a></li>
                     <li><a href="../index.php">ADMIN HOME</a></li>
                     <li><a href="../user_create.php">NEW USER</a></li>
                     <li><a href="../logout.php?logout">LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
	    <section class="headline-sec">
        <div class="overlay">
	<h3> SIGN IN <i class="fa fa-angle-double-right "></i> </h3>
        </div>
    </section>

 <section>
              <div class="container">
            <div class="row">
<div class="col-md-12" style="min-height:500px;">
                <section>
                <div class="container">
                    <div class="row">
        <center>
        <form name="form1" method="post" action="post.php">
        <br>
                        <script>
                        $(function() {
                                $('#setTimeExample').timepicker();
                                $('#setTimeButton').on('click', function() {
                                        $('#setTimeExample').timepicker('setTime', new Date());
                                });
                        });
                        </script>
	 <center><a href='../index.php'>Go Back</a></center>
	Bulletin Comment:
	<br>
	<textarea rows="4" cols="100" name="comment" required></textarea>
	</br>
	Priority Bulletin?
        <select name="priority" autocomplete="off" required>
        <option value=no>no</option>
        <option value=yes>yes</option>
        </select>
</center>
<br>
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Go!</button>
</div>
</form>
                <br>


                        </div>
                    </div>
                </div>
            </section>


	</section>

                    
    </section>


</body>
</html>

