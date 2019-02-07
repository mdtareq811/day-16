<?php

//$data = 10;
//$data = [];
//
//$data[0] = 10;
//$data[1] = 20;
//$data[2] = 30;
//
//$data['name'] = 'Tareq';
//$data['city'] = 'Chittagong';
//$data['country'] = 'Bangladesh';


//$data = [10,20,30, 'Tareq', 'Chittagong', 'Bangladesh'];

//$data = [
//    'name'    => 'Tareq',
//    'city'    => 'Chittagong',
//    'country' => 'Bangladesh',
//    'phone'   => '01843705278',
//    'gender'  => 'Male'
//];

//echo $data['name'];

//foreach ($data as $value){
//    echo $value.'<br/>';
//}

//echo '<pre>';
//print_r($data);

//echo '<pre>';
//var_dump($data);


//$data = [];
//
//$data [0][0] = 10;
//$data [0][1] = 20;
//$data [0][2] = 30;
//
//$data [1][0] = 40;
//$data [1][1] = 50;
//$data [1][2] = 60;
//
//$data [2][0] = 70;
//$data [2][1] = 80;
//$data [2][2] = 90;
//
//$data [3][0] = 100;
//$data [3][1] = 110;
//$data [3][2] = 120;
//
//foreach ($data as $value){
////    echo $value[0].' '.$value[1].' '.$value[2].'<br/>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br/>';
//}


//function demo($firstName=null, $lastName=NULL){
////    $firstName = "Md. Tareq";
////    $lastName = "Chowdhury";
//    $fullName = $firstName.' '.$lastName;
////    echo $fullName;
//    return $fullName;
//}
//
//echo '<br/>..........................<br/>';
//echo demo('Tareq');
//
//echo '<br/>..........................<br/>';
//$res = demo('Sadek' , 'Siddik');
//echo 'Full name is : '.$res;
//
//echo '<br/>..........................<br/>';
//$res = demo('Arman' , 'Eimon');
//echo '<h1>'.$res.'</h1>';


class Demo {
    public $name='Md.Tareq';
    public $city='Chowdhury';

    function add(){
        echo 'In Add';
    }

    function hello(){
        echo 'In Hello';
    }
}

$demo = new Demo();

//$demo->add();
echo $demo->name;

//echo_$name;
//add();