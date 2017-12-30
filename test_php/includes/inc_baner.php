<?php
$data = array(
    array("ten" => "tran van quy", 'que quan' => 'phu tho', 'tuoi' => 23, "nghe nghiep" => 'it', "cmt" =>  1232132),
    array("ten" => "pham van hoang", 'que quan' => 'phu tho', 'tuoi' => 23, "nghe nghiep" => 'it', "cmt" =>  1232132),
    array("ten" => "nguyen thanh long", 'que quan' => 'phu tho', 'tuoi' => 23, "nghe nghiep" => 'it', "cmt" =>  1232132)
    );
?>
<table>
    <tbody>
        <tr>
            <td>ten</td>
            <td>que quan</td>
            <td>tuoi</td>
            <td>nghe nghiep</td>
            <td>chung minh thu</td>
        </tr>
        <?php foreach($data as $item): ?>
        <tr>
            <td><?php echo $item['ten'] ?></td>    
            <td><?php echo $item['que quan'] ?></td>
            <td><?php echo $item['tuoi'] ?></td>
            <td><?php echo $item['nghe nghiep'] ?></td>
            <td><?php echo $item['cmt'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php 
    // tao mang ngau nhien n phan tu
    // viet ham tinh tong 
    // viet ham tim min max
    
    function tao_mang($n)
    {
        $mang = array();
        for ($i=0; $i < $n; $i++) { 
            $mang[$i] = rand(0,100);
        }
        return $mang;
    }

    function tinh_tong($mang)
    {
        $tong = 0;
        $n = count($mang); // dem so phan tu co trong mang
        for ($i=0; $i < $n; $i++) { 
            $tong += $mang[$i];
        }
        return $tong;   
    }

    function tim_max($mang){
        $max = $mang[0];
        $n = count($mang);
        for ($i=1; $i < $n; $i++) { 
            if($mang[$i] > $max)
            {
                $max = $mang[$i];
            }
        }
        return $max;
    }

    function tim_min($mang)
    {
        $min = $mang[0];
        $n = count($mang);
        for ($i=1; $i < $n; $i++) { 
            if ($mang[$i] < $min) {
                $min = $mang[$i]; 
            }
        }
        return $min;
    }

// test
    $mang = tao_mang(10);
    $tong = tinh_tong($mang);
    $max = tim_max($mang);
    $min = tim_min($mang);

    // xuat ra man hinh
    echo "<pre>";
    print_r($mang);
    echo "Tong bang : $tong\n";
    echo "Max : $max\n";
    echo "Min : $min\n";
    echo "</pre>";


    // tim mang so chan ngau nhien khong trung (tu 2 den 100)  co n phan tu (n<10)
    function tao_mang_1($n)
    {
        $mang = array();
        for ($i=0; $i < $n; $i++) { 
            $mang[$i] = rand(0,100); 
        }
        return $mang;
    }

    function gia_tri_trung_binh($mang)
    {
        $tong = 0;
        $n = count($mang);
        for ($i=0; $i < $n; $i++) { 
            $tong = $tong + $mang[$i];
        }
        return $tong;
    }  

    function tim_max_1($mang)
    {
        $max = $mang[0];
        $n = count($mang);
        for ($i=0; $i < $n; $i++) { 
            if($mang[$i] > $max){
                $max = $mang[$i];
            }
        }
        return $max;
    }

    function tim_min_1($mang)
    {
        $min = $mang[0];
        $n = count($mang);
        for ($i=0; $i < $n; $i++) { 
            if($mang[$i] < $min)
            {
                $min = $mang[$i];
            }
        }
        return $min;
    }


    $mang = tao_mang_1(10);
    $tong = gia_tri_trung_binh($mang);
    $maxx = tim_max_1($mang);
    $minn = tim_min_1($mang);
    echo "<pre>";
    print_r ($mang);
    echo "tong : $tong <br>";
    echo "max : $maxx <br>";
    echo "min : $minn";


    function tao_mang_2($n)
    {
        $mang = array();
        for ($i=0; $i < $n; $i++) { 
            $mang[] = rand(0,100);
        }
        return $mang;
    }

    function gia_tri_trung_binh_1($mang)
    {
        $n = count($mang);
        $tb = $mang[0];
        for ($i=0; $i < $n; $i++) { 
            if($mang[$i] = $tb){
                $kq = $mang[$i]/$n;
            }
        }
        return $kq;
    }

    function tim_max_2($mang)
    {
        $n = count($mang);
        $max_2 = $mang[0];
        for ($i=0; $i < $n; $i++) { 
            if($mang[$i] > $max_2)
            {
                $max_2 = $mang[$i];
            }
        }
        return $max_2;
    } 
    function tang_dan($mang)
    {
        $n = count($mang);
        for ($i=0; $i < $n; $i++) { 
            for ($j=($i + 1); $j < $n; $j++) { 
                if($mang[$i] < $mang[$j]){
                    $t = $mang[$i];
                    $mang[$i] = $mang[$j];
                    $mang[$j] = $t;
                }
            }
        }
        return $mang;
    }
    $mang_2 = tao_mang_2(10); 
    $t_b = gia_tri_trung_binh($mang);
    $max = tim_max_2($mang);
    echo "<br>";
    print_r($mang_2);
    echo "trung binh : $t_b <br>";
    echo "max : $max <br>";
    print_r($mang);
?>
