<div class="container_width">
<div class="list_username">
<h1 class="list_name">List Registration</h1>
<table class="list_us">
   <tr>
      <td>F_file</td>
   </tr>
<?php 
       $urlfile = '/var/www/html/test_php/ta_ta/';
   if (file_exists($urlfile)) {
      $jsondata = file_get_contents($urlfile);
      $arr_data = json_decode($jsondata, true);
   foreach ($arr_data as $value) {
?>
    <tr>
      <td><img width="100px" src="/var/www/html/test_php/ta_ta/ <?php echo $file_name ?> ?>"></td>
    </tr>
    <?php
   }
  }
  ?>
 </table>
</div>
</div>