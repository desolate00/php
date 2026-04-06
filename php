<?php
//session_start();
//$param1 = $_GET['param1'];
//$param2 = $_GET['param2'];
//$res = $param1 + $param2;
//$res1 = $param1 - $param2;
//$res2 = $param1 / $param2;
//$res3 = $param1 * $param2;
//$data = array('p1' => $param1, 'p2' => $param2, 'res' => $res, 'res1' => $res1, 'res2' => $res2, 'res3' => $res3);
//$jsonString = json_encode($data);
//echo $jsonString;

//$data = array('p1'=>345,'p2'=>346,'res'=>345);
//
//$s = 0;
//foreach ($data as $key => $value) {
//    echo $key. ":".$value, "<br>";
//}
//
//$arr = array(1,2,3,4,5,6,7,8,9);
//for ($i=0;$i<count($arr);$i++){
//    echo $arr[$i]. "<br>";
//}
//
//$a = 23;
//$b = 34;
//$c = 12;

/**
 * Задача 1
 * Создать функцию вычисления квадрата числа,без использования встроенной функции
 *
 * Задача 2
 * Создать функцию которая определяет наибольшее значение из двух чисел без использования встроенной функции
 *
 * Задача 3
 *
 * Создать функцию которая принимает в аргументе массив определяет максимальный элемент и возвращает его
 *
 * Задача 4
 *
 * Создать функцию которая вычисляет площадь круга или квадрата по заданным параметрам
 *
 * Задача 5
 *
 * Создать функцию которая определяет длину ассоциативного массива
 */
//
//
//
///* Задача 1 */
//print('Первая Задача<br>');
//function myfanc($num)
//{
//    return $num * $num;
//}
//
//echo myfanc(5) . "<br>";
//
//
///* Задача 2 */
//print('Вторая Задача<br>');
//function myfancc($a, $b)
//{
//    if ($a >= $b) {
//        return $a;
//    } else {
//        return $b;
//    }
//}
//
//echo myfancc(5, 10) . "<br>";
//
//
///* Задача 3 */
//
//print('Третья Задача<br>');
//function maxel($arr)
//{
//    $max = $arr[0];
//    foreach ($arr as $num) {
//        if ($num > $max) {
//            $max = $num;
//        }
//    }
//    return $max;
//}
//
//$numbers = [1, 4, 12, 8, 10];
//echo maxel($numbers) . "<br>";
//
//
///* Задача 4 */
//
//print('Четвёртая Задача<br>');
//
//$diameter = 4;
//$pi = 3.14;
//
//function plosh($diameter, $pi)
//{
//    $area = $diameter * $pi;
//    return $area;
//}
//echo plosh ($diameter,$pi) . "<br>";
//
//
///* Задача 5 */
//
//print('Пятая Задача<br>');
//
//function dan($asc_arr)
//{
//    if (is_array($asc_arr)){
//        $col = 0;
//        foreach ($asc_arr as $v){
//            $col+=1;
//        }
//        return $col;
//
//        print dan(array());
//
//    }
//
//
//}
//
//
//
//
//class Person
//{
//    public $name;
//    public $fam;
//    public $otch;
//    public $age;
//    public $rost;
//    public $mass;
//    public $i;
//
//    public function __construct($name, $fam, $otch, $age, $rost, $mass)
//    {
//        $this->name = $name;
//        $this->fam = $fam;
//        $this->otch = $otch;
//        $this->age = $age;
//        $this->rost = $rost;
//        $this->mass = $mass;
//        $this->i= $this->mass/((($this->rost/100)*($this->rost/100)));
//    }
//    public function dan(){
//        print "Меня зовут $this->fam $this->name $this->otch, мне $this->age, мой рост $this->rost см, а вес $this->mass кг ";
//
//    }
//}
//$obj = new Person('Алексей', 'Петров', 'Иванович', 21, 179, 80);
//
//print $obj->dan() . "<br>";
//
//
//
//print $obj->i;
//

//class Krug{
//    public $r;
//    const pi = 3.14;
//
//    public function __construct($r){
//        $this->r = $r;
//    }
//    public function plo(){
//        return self::pi * ($this->r*$this->r);
//    }
//}
//
//$obj = new Krug(12);
//print $obj->plo();
//
//class Person {
//    public $name;
//    public $HP;
//    public $settlement;
//    function property($name,$settlement)
//    {
//       $this->name = $name;
//       $this->settlement = $settlement;
//       $this->HP = 100;
//    }
//
//    public function loss($damage) {
//        $this->HP -= $damage;
//        if ($this->HP < 0) {
//            $this->HP = 0;
//        }
//    }
//    public function treatment() {
//            $this->HP +=5;
//        if ($this->HP > 100) {
//            $this->HP = 100;
//        }
//    }
//}
//
//class Citizen extends Person {
//    public function property($name,$settlement) {
//        parent::property($name,$settlement);
//    }
//    function attack($hit){
//        if ($hit->HP>0){
//            $this->loss(15);
//        }
//    }
//
//}
//class Warrior extends Person{
//    public function property($name,$settlement) {
//        parent::property($name,$settlement);
//    }
//    function attack($hit){
//        if ($hit->HP>0){
//            $this->loss(10);
//        }
//    }
//
//}
//
//class Healer extends Person{
//    public function property($name,$settlement) {
//        parent::property($name,$settlement);
//    }
//
//}
//
//try {
//    $host = '127.0.0.1';
//    $db = 'test';
//    $user = 'root';
//    $pass = '';
//    $charset = 'utf8';
//
//    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//    $opt = [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_EMULATE_PREPARES => false,
//    ];
//
//    $pdo = new PDO($dsn, $user, $pass, $opt);
//    var_dump($pdo);
//    echo "<br/>";
//
//    $stmt = $pdo->query('SELECT * FROM product');
//    var_dump($stmt);
//    echo "<br/>";
//
//    while ($row = $stmt->fetch()) {
//        echo $row['name'] . " " . $row['ves'] . " " . $row['sort_id'];
//        echo "<br/>";
//    }
//
//    $deleteId = 3;
//    $deleteStmt = $pdo->prepare('DELETE FROM product WHERE id = :id');
//    $deleteStmt->execute([':id' => $deleteId]);
//    echo "Запись с id = $deleteId удалена.<br/>";
//
//    $updateId = 4;
//    $newName = 'test';
//    $newVes = 150;
//
//    $updateStmt = $pdo->prepare('UPDATE product SET name = :name, ves = :ves WHERE id = :id');
//    $updateStmt->execute([
//        ':name' => $newName,
//        ':ves' => $newVes,
//        ':id' => $updateId
//    ]);
//    echo "Запись с id = $updateId обновлена.<br/>";
//
//    $sql = "SELECT product.name, product.ves, sort.sort AS sort_name
//            FROM product
//            JOIN sort ON product.sort_id = sort.id";
//
//    $stmt = $pdo->query($sql);
//
//    while ($row = $stmt->fetch()) {
//        echo " " . $row['name'] . "," . $row['ves'] . ",  " . $row['sort_name'] . "<br/>";
//    }
//
//} catch (PDOException $e) {
//    echo 'Ошибка: ' . $e->getMessage();
//}



//if($_GET !== null){
//
//    $host = '127.0.0.1';
//        $db = 'test';
//        $user = 'root';
//        $pass = '';
//        $charset = 'utf8';
//
//        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//        $opt = [
//            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//            PDO::ATTR_EMULATE_PREPARES => false,
//        ];
//
//        $pdo = new PDO($dsn, $user, $pass, $opt);
//
//        $result = json_encode($_GET);
//        $fam = $_GET['fam'];
//        $name = $_GET['name'];
//        $otv=$_GET['otv'];
//        $data=$_GET['data'];
//        $pass=$_GET['pass'];
//
//        $stmt = $pdo->prepare("INSERT INTO baza (fam, name, otv, data, pass) VALUES (?, ?, ?, ?, ?)");
//        $stmt->bindParam(1, $fam);
//        $stmt->bindParam(2, $name);
//        $stmt->bindParam(3, $otv);
//        $stmt->bindParam(4, $data);
//        $stmt->bindParam(5, $pass);
//        $stmt->execute();
//}else{
//    return false;
//}


// Взаимодействие с front

//if($_POST !== null){
//
//
//        $host = '127.0.0.1';
//        $db = 'test';
//        $user = 'root';
//        $pass = '';
//        $charset = 'utf8';
//
//        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//        $opt = [
//            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//            PDO::ATTR_EMULATE_PREPARES => false,
//        ];
//        // Получение объекта PDO
//        $pdo = new PDO($dsn, $user, $pass, $opt);
//
//        $nickname = $_POST['nickname'];
//        $pass = $_POST['pass'];
//
//        $stmt = $pdo->prepare("INSERT INTO regbasa (nickname, pass) VALUES (?, ?)");
//        $stmt->bindParam(1, $nickname);
//        $stmt->bindParam(2, $pass);
//        $stmt->execute();
//}else{
//    return false;
//}


if ($_GET !== null) {

    try {
        $host = '127.0.0.1';
        $db = 'test';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        // Получение объекта PDO
        $pdo = new PDO($dsn, $user, $pass, $opt);

        // Получение данных из таблицы student по полю name
        $id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT name FROM product WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();

    } catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }

    $results = $stmt->fetchAll();
    $result = json_encode($results);
    echo $result;
} else {
    return false;
}



// Взаимодействие с БД
/*
try {
    $host = '127.0.0.1';
    $db = 'test';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    // Получение объекта PDO
    $pdo = new PDO($dsn, $user, $pass, $opt);
    var_dump($pdo);
    echo "<br/>";

    // Получение данных из таблицы student по полю name
    $stmt = $pdo->query('SELECT * FROM student');
    var_dump($stmt);
    echo "<br/>";
    while ($row = $stmt->fetch())
    {
        echo $row['name']." ".$row['ote']." ".$row['stepen']." ".$row['dr_st'];
        echo "<br/>";
        //printf("%d", $row['stepen']);
    }
    // Вставка данных
    $title = "Ложка";
    $month = "Март";
    $year = "2026";
    $cost = 100;
    $col = 5;


    $stmt = $pdo->prepare("INSERT INTO product (title, month,year,cost,col) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $month);
    $stmt->bindParam(3, $year);
    $stmt->bindParam(4, $cost);
    $stmt->bindParam(5, $col);
    $stmt->execute();

    // delete
    $inner_name = "Чайник";
    $stmt = $pdo->prepare ("DELETE FROM product WHERE title=:name");
    $stmt -> bindParam(':name', $inner_name);
    $stmt -> execute();

    // update

    $title_new = "Чайник";
    $id = 11;
    $stmt = $pdo->prepare ("UPDATE product SET title = :name WHERE id = :id");
    $stmt -> bindParam(':name', $title_new);
    $stmt -> bindParam(':id', $id);
    $stmt -> execute();

} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

$pdo = null;

// join
try {
    $host = '127.0.0.1';
    $db = 'librery';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    // Получение объекта PDO
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $idn = 14;
    $stmt = $pdo->prepare ("SELECT product.name FROM product JOIN sub_category ON product.id=sub_category.prod_id JOIN category ON sub_category.cat_id = category.id WHERE product.id=:id");
    $stmt -> bindParam(':id', $idn);
    $stmt -> execute();
    echo "-----------------";
//    var_dump($stmt);
    echo "<br/>";
    while ($row = $stmt->fetch())
    {
        echo $row['name'];
        echo "<br/>";
        //printf("%d", $row['stepen']);
    }


} catch (PDOException $e) {
    die('Подключение не удалось_2: ' . $e->getMessage());
}
*/





let str = "Иванов Иван Иванович";
let regexp = /^[А-Я][а-я]+ [А-Я][а-я]+ [А-Я][а-я]+$/;
alert(regexp.test(str));


let mail = "Email3@mail.ru";
let regexp2 = /^[a-zA-Z0-9.]+@[a-zA-Z]+\.ru$/;
alert(regexp2.test(mail));


let date = "02.04.2026"; 
let regexp3 = /^\d{1,2}[.-]\d{1,2}[.-]\d{4}$/;
alert(regexp3.test(date));


let password = "zxcv?1";
let regexp4= /^[A-Za-z0-9а-яА-Я]+?.{6,}$/;
alert(regexp4.test(password));















































