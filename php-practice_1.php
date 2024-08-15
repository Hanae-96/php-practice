<?php
// Q1 変数と文字列
$name = '下崎';
    echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 20;

    echo($num) . "\n";
        $num = $num / 2;
    echo($num);

// Q3 日付操作
$today = date("Y年m月d日 H時i分s秒")
    
    echo '現在の時刻は' . $today . 'です。';
    

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
    }

// Q5 条件分岐-2 三項演算子
$age = 27;

$message = ($age <= 18) ? '成人です。' : '未成年です。';
    echo $message;

// Q6 配列
$prefectures = ['東京都', '千葉県', '神奈川県', '埼玉県', '茨城県', '栃木県', '群馬県'];

if ('神奈川県' && '埼玉県');
    echo '神奈川県と埼玉県は関東地方の都道府県です';

// Q7 連想配列-1
$kregion = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($kregion as $key => $value) {
    echo $kregion[$key] . "\n";
}

// Q8 連想配列-2
$kregion = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($kregion as $key => $value) {
    if ($key === '埼玉県') {
        echo "{$key}の県庁所在地は{$value}です。";
        break;
    }
}

// Q9 連想配列-3
$kregion = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
$kregion['大阪府'] = '大阪市';
$kregion['愛知県'] = '名古屋市';

    foreach ($kregion as $key => $value) {
        if ($key === '東京都' || $key === '神奈川県' || $key === '千葉県' || $key === '埼玉県' || $key === '栃木県' || $key === '群馬県' || $key === '茨城県') {
            echo "{$key}の県庁所在地は、{$value}です。" . "\n";
        } else {
            echo "{$key}は関東地方ではありません。" . "\n";
                break;
        }
    }

// Q10 関数-1
function hello($name) {

  echo $name . 'さん、こんにちは。' . "\n";
}

hello('上田');
hello('大橋');

// Q11 関数-2
function calcTaxInPrice($price) {

  $price = $price * 1.1;
  return $price;
}
  echo "1000円の税込み価格は" . calcTaxInPrice(1000) . "円です。";

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 === 0) {
      echo $number . "は偶数です。\n";
  } else {
      echo $number . "は奇数です。\n";
  }
}

distinguishNum(125);
distinguishNum(136);

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
      case 'A':
      case 'B':
      echo '合格です。' . "\n";
      break;

      case 'C':
      echo '合格ですが追加課題があります。' . "\n";
      break;

      case 'D':
      echo '不合格です。' . "\n";
      break;

      default:
      echo '判定不明です。講師に問い合わせてください。' . "\n";
      break;
  }
}

evaluateGrade('A');
evaluateGrade('B');
evaluateGrade('C');
evaluateGrade('D');
evaluateGrade('E');

?>