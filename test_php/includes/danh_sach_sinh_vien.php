<?php
$data = array(
                array (
                        "msv" => "03", 
                        "ten" => "tran van quy", 
                        'que quan' => 'phu tho', 
                        'tuoi' => 23, 
                        "lop" => 'cnttk11a',
                         "sdt" =>  1232132
                     ),

                array (
                        "msv" => "02", 
                        "ten" => "tran van quy", 
                        'que quan' => 'phu tho', 
                        'tuoi' => 23, 
                        "lop" => 'cnttk11b', 
                        "sdt" =>  1232132
                    ),
                array (
                    "msv" => "01", 
                    "ten" => "nguyen thanh long", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                array (
                    "msv" => "07", 
                    "ten" => "pham hai nam", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                array (
                    "msv" => "06", 
                    "ten" => "nguyen thanh luong", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                array (
                    "msv" => "04", 
                    "ten" => "ta quang thang", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                array (
                    "msv" => "05", 
                    "ten" => "dong thi nhung", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                array (
                    "msv" => "09", 
                    "ten" => "la van thanh", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                array (
                    "msv" => "10", 
                    "ten" => "hong nhung", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                ),
                 array (
                    "msv" => "08", 
                    "ten" => "hong nhung", 
                    'que quan' => 'phu tho', 
                    'tuoi' => 23,
                    "lop" => 'cnttk11c', 
                    "sdt" =>  1232132
                )
            );
        $newArray = [];
        $list = [];
        foreach ($data as $value) 
        { 
            $newArray[$value['ten'] . $value['msv']] = $value; 
        }
        ksort($newArray);
        foreach ($newArray as $v) {
                $list[] = $v;     
        }

?>
<table>
    <tbody>
        <tr>
            <td><span>Msv</span></td>
            <td><span>Ten</span></td>
            <td><span>Que quan</span></td>
            <td><span>Tuoi</span></td>
            <td><span>Lop</span></td>
            <td><span>Phone</span></td>
        </tr>
        <?php foreach($list as $item): ?>
        <tr>
            <td><?php echo $item['msv'] ?></td>  
            <td><?php echo $item['ten'] ?></td>    
            <td><?php echo $item['que quan'] ?></td>
            <td><?php echo $item['tuoi'] ?></td>
            <td><?php echo $item['lop'] ?></td>
            <td><?php echo $item['sdt'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>