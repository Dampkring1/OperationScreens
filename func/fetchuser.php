<?php
 $connect = mysqli_connect("localhost", "passbook", "Jhjkbr3kv7e7(aD04BsKh8DsqFgfja", "passbook");
 $output = '';
 $sql = "SELECT * FROM historical WHERE user LIKE '%".$_POST["search"]."%'";
 $result = mysqli_query($connect, $sql);
 if(mysqli_num_rows($result) > 0)
 {
      $output .= '<div class="table-responsive">
                          <table class="table table bordered">
                               <tr>
                                    <th>SD Reference:</th>
				    <th>Company:</th>
                                    <th>Engineer Name:</th>
                                    <th>Pass Allocated:</th>
                                    <th>Time In:</th>
                                    <th>Date</th>
                               </tr>';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td>'.$row["sdref"].'</td>
                     <td>'.$row["company"].'</td>
                     <td>'.$row["name"].'</td>
                     <td>'.$row["passnum"].'</td>
                     <td>'.$row["time"].'</td>
                     <td>'.$row["date"].'</td>
                </tr>
           ';
      }
      echo $output;
 }
 else
 {
      echo 'Data Not Found';
 }
 ?>
<center><div class="alert alert-info">User has signed in the following engineers:</div></center>
<?php
 $connect = mysqli_connect("localhost", "passbook", "Jhjkbr3kv7e7(aD04BsKh8DsqFgfja", "passbook");
 $output = '';
 $sql = "SELECT * FROM historical WHERE returnby LIKE '%".$_POST["search"]."%'";
 $result = mysqli_query($connect, $sql);
 if(mysqli_num_rows($result) > 0)
 {
      $output .= '<div class="table-responsive">
                          <table class="table table bordered">
                               <tr>
                                    <th>SD Reference:</th>
                                    <th>Company:</th>
                                    <th>Engineer Name:</th>
                                    <th>Pass Allocated:</th>
                                    <th>Time Out:</th>
                                    <th>Date</th>
                               </tr>';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td>'.$row["sdref"].'</td>
                     <td>'.$row["company"].'</td>
                     <td>'.$row["name"].'</td>
                     <td>'.$row["passnum"].'</td>
                     <td>'.$row["timeret"].'</td>
                     <td>'.$row["date"].'</td>
                </tr>
           ';
      }
      echo $output;
 }
 else
 {
      echo 'Data Not Found';
 }
 ?>
<center><div class="alert alert-info">User has signed out the following engineers:</div></center>
