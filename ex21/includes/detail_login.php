<?php 
  $url = "../file/user.txt";
  if(file_exists($url)){
    $getdata = file_get_contents($url);//lay du lieu file txt
    $arr_data = json_decode($getdata, true);//chuyen chuoi sang mang
    for ($i=0; $i < count($arr_data) ; $i++) {
     if($arr_data[$i]['username'] == $_SESSION['username']){
      ?>
      <div class="container_width">
      <div id="profile">
        <table>
          <tr>
            <th>Username</th>
            <th>Image</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Birthday</th>
            <th>Sex</th>
            <th>Message</th>
          </tr>
          <tr>
             <td><?php echo $arr_data[$i]['username']; ?></td>
             <td><img src="../file/imagesmall/quy.jpg"></td>
             <td><?php echo $arr_data[$i]['fullname'];?></td>
             <td><?php echo $arr_data[$i]['email'];?></td>
             <td><?php echo $arr_data[$i]['phone'];?></td>
             <td><?php echo $arr_data[$i]['address'];?></td>
             <td><?php echo $arr_data[$i]['radiobutton'];?></td>
             <td><?php echo $arr_data[$i]['birthday'];?></td>
             <td><?php echo $arr_data[$i]['message'];?></td>
          </tr>
        </table>
      </div>
      </div>
      <?php
     }
    }
  }

 ?>