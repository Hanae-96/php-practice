<?php
// Q1 tic-tac問題

echo "1から100までのカウントを開始します" . "\n\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac" . "\n";
    } else if ($i % 4 === 0) {
        echo "tic" . "\n";
    } else if ($i % 5 === 0) {
        echo "tac" . "\n";
    } else {
        echo $i . "\n";
    }
}


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
echo $personalInfos [1]["name"] . "の電話番号は" . $personalInfos [1]["tel"] . "です。";

//問題2
foreach ($personalInfos as $index => $personalInfo) {
    echo ++$index . '番目の' . $personalInfo['name'] . 'さんのメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' .  $personalInfo['tel'] . 'です。' . "\n";
    }
    
//問題3
$ageList = [25, 30, 18];
    foreach ($ageList as $key => $age) {
        $personalInfos[$key]['age'] = $age;
    }
    var_dump($personalInfos);

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

    public function ()
    {
        echo '授業に出席しました。';
    }
}
    $ueda = new Student(811, '上田瞳');
        echo '学籍番号' . $ueda->studentId . '番の生徒は' . $ueda->studentName . 'です。';

// Q4 オブジェクト-2
class Studentattend
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
        
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。' . '学籍番号：' . $this->studentId;
    }
}

    $ueda = new Student(811, '上田瞳');
    $ueda->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new DateTime();
$date_30days_ago = $date->modify("-1 month")->format("Y-m-d");
    echo "$date_30days_ago";

//問題2
$old_date = new DateTime("1992-04-25");
$current_date = new DateTime();

$passed_days = $old_date->diff($current_date);

	echo $passed_days->format("あの日から%a日経過しました。");
?>