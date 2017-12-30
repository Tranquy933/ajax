<div class="container_width">
<div class="list_username">
<h1 class="list_name">List Registration</h1>
<table class="list_us">
   <tr>
      <th>Username</th>
      <th>Fullname</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Birthday</th>
      <th>F_file</th>
      <th>Radiobutton</th>
      <th>Message</th>
   </tr>
<?php 
       $urlfile = '../file/user.txt';
   if (file_exists($urlfile)) {
      $jsondata = file_get_contents($urlfile);
      $arr_data = json_decode($jsondata, true);
   foreach ($arr_data as $value) {
?>
    <tr>
     <td><?php echo $value['username']; ?></td>
     <td><?php echo $value['fullname']; ?></td>
     <td><?php echo $value['email']; ?></td>
     <td><?php echo $value['phone']; ?></td>
     <td><?php echo $value['address']; ?></td>
     <td><?php echo $value['birthday']; ?>
      <td><img width="100px" src="../file/avatar/<?php echo $value['f_file']; ?>"></td>
     <td><?php echo $value['radiobutton']; ?></td>
     <td><?php echo $value['message']; ?></td>
    </tr>
    <?php
   }
  }
  ?>
 </table>
</div>
</div>