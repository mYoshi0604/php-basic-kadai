<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>16章課題</title>
</head>

<body>
    <p>
          <?php
          // クラスを定義
          class Food {
             // プロパティを定義                        
             public $name;
             public $price;
 
             // コンストラクタを定義
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
          }
 
          // インスタンス化
          $food = new Food('potato', 250);
 
          // インスタンス$userの各プロパティの値を出力
          print_r($food);
          echo '<br>';

          // クラスを定義
          class Animal {
             // プロパティを定義                        
             public $name;
             public $height;
             public $weight;
 
             // コンストラクタを定義
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
          }
 
          // インスタンス化
          $animal = new Animal('dog', 60, 5000);
 
          // インスタンス$userの各プロパティの値を出力
          print_r($animal);
          echo '<br>';

          // プロパティにアクセスし、値を代入する
          $food->price = 250;

          // プロパティにアクセスし、値を出力する
          echo $food->price . '<br>';

          // プロパティにアクセスし、値を代入する
          $animal->height = 60;

          // プロパティにアクセスし、値を出力する
          echo $animal->height . '<br>';
          ?>
     </p>
    
</body>

</html>
