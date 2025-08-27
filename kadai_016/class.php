<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {

       // プロパティを定義する
       public $name;
       public $price;

       // コンストラクタを定義する
       public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

       // プロパティの値を出力するメソッドを定義する
       public function show_price(int $price){
            $this->price= $price;
       }
       }


        class Animal {
           // プロパティを定義する
           public $name;
           public $height;
           public $weight;

           // コンストラクタを定義する
           public function __construct(string $name, int $height, int $weight) {
                $this->name   = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

       // プロパティの値を出力するメソッドを定義する
       public function show_height(int $height){
            $this->height= $height;
       }
       }
       
       // インスタンス化する
       $food   = new Food('侍',500);
       $animal = new Animal('猫',35,32);


       // インスタンス$food,$animalの各プロパティの値を出力する
       print_r($food);
       print_r('<br>');
       print_r($animal);
       ?>
   </p>
</body>

</html>