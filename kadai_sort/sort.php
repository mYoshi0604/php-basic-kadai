<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            $nums = [15, 4, 18, 23, 10]; 

            // 関数の定義
            function sort_2way($array, $order) {             
                
                if($order >= 0) {
                    echo "昇順でソートします。<br>";

                    sort($array);
                    foreach ($array as $val) {
                        echo  $val . '<br>';
                    }
                } else {
                    echo "降順でソートします。<br>";
                    
                    rsort($array);
                    foreach ($array as $val) {
                        echo  $val . '<br>';
                    }
                }
                
            }

            sort_2way($nums, 1);
            sort_2way($nums, -1);

        ?>
    </p>
</body>

</html>
