<?php

// Q1 tic-tac問題
echo "1から100までのカウントを開始します" . "\n\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac" . "\n";
    } elseif ($i % 4 === 0) {
        echo "tic" . "\n";
    } elseif ($i % 5 === 0) {
        echo "tac" . "\n";
    } else {
        echo $i . "\n";
    }
}

echo "\n";

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題1
echo $personalInfos[1]["name"] . "の電話番号は" . $personalInfos[1]["tel"] . "です。" . "\n\n";

//問題2
foreach ($personalInfos as $index => $personalInfo) {
    echo ++$index . '番目の' . $personalInfo['name'] . 'さんのメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' .  $personalInfo['tel'] . 'です。' . "\n";
}

echo "\n";
    
//問題3
$ageList = [25, 30, 18];
    foreach ($ageList as $key => $age) {
        $personalInfos[$key]['age'] = $age;
}
var_dump($personalInfos);

echo "\n";

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;
    
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
         echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。' . '学籍番号：' . $this->studentId . "\n";
    }
}
$ueda = new Student(811, '上田瞳');
echo '学籍番号' . $ueda->studentId . '番の生徒は' . $ueda->studentName . 'です。' . "\n";

echo "\n";

// Q4 オブジェクト-2
$ueda->attend('PHP') . "\n";

echo "\n";

// Q5 定義済みクラス
//問題1
$date = new DateTime();
$date_30days_ago = $date->modify("-1 month")->format("Y-m-d");
echo "$date_30days_ago";

//問題2
$old_date = new DateTime("1992-04-25");
$current_date = new DateTime();

$passed_days = $old_date->diff($current_date);
echo $passed_days->format("あの日から%a日経過しました。")  . "\n";

## Q1
//商品クラスを使用して、条件を満たした上で下記の文字列を出力してください。
### 条件
// -コンストラクタメソッドを作成してください
// -引数から `$param1` 受け取った商品名を `name` プロパティに格納してください
// -引数から `$param2` 受け取った商品の価格を `price` プロパティに格納してください
### 出力文字列
//りんごの税抜価格は100円です。
//クラス
class Item
{
    public $name;
    public $price;
   
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public $includingTax;
    
    public function fetchCalTaxInPrice($includingTax)
    {
        return $includingTax = $this->price * 1.1;
    }
}
$apple = new Item("りんご", 100);
echo $apple->name . "の税抜価格は" . $apple->price . "円です。" . "\n";
## Q2
// Q1で使用した商品クラスを同じく使用して、条件を満たした上で下記の文字列を出力してください。
### 条件
// - priceを税込価格に変換して返すメソッド名は `fetchCalcTaxInPrice` と命名してください。
// - fetchCalTaxInPriceメソッドの返り値を文字列結合して、最終的な文字列を完成させてください。
### 出力文字列
// みかんの税込価格は220円です。
$orange = new Item("みかん", 200);
echo $orange->name . "の税込み価格は" . $orange->fetchCalTaxInPrice($orange->price) ."円です。" . "\n";

?>