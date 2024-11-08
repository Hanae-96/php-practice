<?php

// Q1 変数と文字列
$name = '下崎';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5*4;
echo($num) . "\n";
$num = $num / 2;
echo($num);

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$today = date("Y年m月d日 H時i分s秒");
    
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

$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$prefectures = ['東京都', '千葉県', '神奈川県', '埼玉県', '茨城県', '栃木県', '群馬県'];
echo $prefectures[2] . "と". $prefectures[3] . "は関東地方の都道府県です";

// Q7 連想配列-1
$kregion = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($kregion as $prefecture => $city) {
    echo $city . "\n";
}
// Q8 連想配列-2
$kregion = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($kregion as $prefecture => $city) {
    if ($prefecture === '埼玉県') {
        echo $prefecture . "の県庁所在地は" . $city . "です。" . "\n\n";
        break;
    }
}

// Q9 連想配列-3
$kregion = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
$kregion['大阪府'] = '大阪市';
$kregion['愛知県'] = '名古屋市';

foreach ($kregion as $prefecture => $city) {
    if ($prefecture === '大阪府' || $prefecture === '愛知県') {
        echo $prefecture . "は関東地方ではありません。" . "\n";
    } else {
        echo $prefecture . "の県庁所在地は、" . $city . "です。" . "\n";
    }
}

// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。" . "\n";
}

echo hello("上田");
echo hello("大橋");

/// Q11 関数-2
function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    {
        return $price . "円の税込み価格は" . $taxInPrice . "円です。" . "\n";
    }
}

echo $taxInPrice = calcTaxInprice(1000);

// Q12 関数とif文
function distinguishNum($number) {
    if ($number % 2 === 0)
    {
        return $number . "は偶数です。\n";
    } else {
        return $number . "は奇数です。\n";
        }
}
  
echo distinguishNum(125);
echo distinguishNum(136);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。' . "\n";

        case 'C':
            return '合格ですが追加課題があります。' . "\n";

        case 'D':
            return '不合格です。' . "\n";

        default:
            return '判定不明です。講師に問い合わせてください。' . "\n";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('B');
echo evaluateGrade('C');
echo evaluateGrade('D');
echo evaluateGrade('E');

?>