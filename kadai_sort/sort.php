<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php

      $nums = [15, 4, 18, 23, 10 ];

      function sort_2away($order,$array){
        if($order === true){
          echo'昇順にソートします。<br>';
          sort ($array);
          }else{
          echo'降順にソートします。<br>';
          rsort($array); 

        }

        foreach($array as $num){
          echo $num.'<br>';
      }
    }
      
    sort_2away(true, $nums);
    echo '<br>';
    sort_2away(false,$nums);

    ?>
  </p>
</body>
</html>