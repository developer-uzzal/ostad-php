<?php 
echo "============ class 02 =============================================================== <br>";
// array 2 vabe dicliar kora jay 1) $s=[1,2,3,4,5]; and 2) $s= array(1,2,3,4);

// $numbers=[1,2,3,4,5];
$numbers= array(1,2,3,4,5,6);

$n = count($numbers);

for ($i = 0; $i < $n; $i++){
    echo $numbers[$i] . "\n";
}

echo "<br>============ array_pop start =========== <br>";

array_pop($numbers); //pop means last element will be remove from main array

echo "<br>";
echo "<br>";
$n = count($numbers);
for($i = 0; $i < $n; $i++){
    echo $numbers[$i] . "\n";
}

echo "<br>============ array_shift start =========== <br>";

array_shift($numbers);//pop means first element will be remove from main array
echo "<br>";
echo "<br>";
$n = count($numbers);
for($i = 0; $i < $n; $i++){
    echo $numbers[$i] . "\n";
}

echo "<br>============ array_push start =========== <br>";

array_push($numbers,7);//push means add an element to last position from main array or $numbers[] = 8; likhleo hoto
//$numbers[]= 8;
echo "<br>";
echo "<br>";
$n = count($numbers);
for($i = 0; $i < $n; $i++){
    echo $numbers[$i] . "\n";
}

echo "<br>============ array_unshift start =========== <br>";

array_unshift($numbers,8);//push means add an element to first position from main array 
echo "<br>";
echo "<br>";
$n = count($numbers);
for($i = 0; $i < $n; $i++){
    echo $numbers[$i] . "\n";
}


echo "<br>";
echo "<br>";

echo "================ Associative Array class 03 ==================================================";
echo "<br>";
echo "<br>";


$students = [
    'ab' => 'sakib',
    'bc' => 'rakib',
    'cd' => 'jakib',
];

echo $students['ab'];


echo "<br>";
echo "<br>";
/*
abave hobe na
$n1 = count($students);
for($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}
    */

    foreach($students as $key => $value){
        echo $key."=".$value."<br>";
    }
 

    echo "<br>";
    echo "<br>";

    
    foreach($students as $value){
        echo $value."<br>";
    }


    // without foreach Now try start

echo "<br>";
echo "<br>";


$keys = array_keys($students);// atar mane jocche index 'ab' k '0' te convert kora but actual index [ab] theke jabe but index[0] diya access kora jabe 
//$keys = array_values($students); // atar mane hocce value er index modifiy kore index [0]/[1] kora


print_r($keys);// array print korar jonno 'print_()' use kora hoy. and array_keys() association function er index ke index 0, 1 ,2 abave formate hobe than normal for loop use kore print korte psarbo


echo "<br>";
echo "<br>";

for($i=0; $i<count($keys); $i++){
    $key = $keys[$i];
   // echo $key." ";
    echo $students[$key]."<br>";
}



echo "<br>";
echo "<br>";

$values = array_values($students);

print_r($values);

echo "<br>";
echo "<br>";

for($i=0; $i<count($values); $i++){
    $value = $values[$i];
    echo $value."<br>";
}

    // without foreach Now try end

echo "<br>";
echo "<br>";


echo "=============== class 4 =========================================================<br>";


$vegetables = 'banana, mango, lemon, lichi, pinapple';

// vagetables string k array te convert korbo ajonno explode() function use korbo. ar arrayter strucure dekhar jonno var_dump() use korbo

$newvegetables = explode(', ', $vegetables);
//', ' ata k bole delemiter

var_dump($newvegetables); // array er structure dekha jai
echo "<br>".$newvegetables[1]."<br>";

// array theke string e convert korar waye hocche join()

$vegetablesString = join(', ',$newvegetables);

echo $vegetablesString."<br><br>";


//======================================
$vegetables = 'banana, mango, lemon, lichi, pinapple,papaya,potato';
// akadik shorto dite preg_split() use korte hoy
$newvegetables = preg_split('/(, |,)/', $vegetables);

var_dump($newvegetables);


echo "<br>";
echo "<br>";


echo "=============== class 5 multi dimantional array or nested array =========================================================<br>";

$foods = [
    'vagetable' => explode(', ', 'banana, mango, lemon, lichi, pinapple, papaya, potato'),
    'fruits' =>  explode(', ', 'orange, mango, apple'),
    'drink' =>  explode(', ', 'water, milk'),
];

print_r($foods);


echo "<br><br>";


array_push($foods['drink'],'orange juice');

print_r($foods);

echo "<br><br>";

echo $foods['fruits'][1];

echo "<br><br>";

//==============================================
$sample =[
    [1,2,3,4,5,6,7],
    [11,22,33,44,55],
    [111,222,333,444,555],
    [1111,2222,3333,[5,6,7,8]]
];

print_r($sample);

echo "<br><br>";

echo $sample[3][3][2];



echo "<br><br><br><br><br><br>";

echo "=============== class 6 Associative array to string conversion and json convert =========================================================<br>";

$students= array(
    'fname' => 'jakir',
    'lname' => 'hosen',
    'age' => '22',
    'class' => '13',
    'section' => 'A',
);
print_r($students);

echo "<br><br>";

// two way to print associative array
//echo $students['fname']." ".$students['lname'];
//printf("%s %s \n",$students['fname'],$students['lname']);

// associative array ke string e convert korar jonno 'join()' use korle kaj korbe na 

// string e convert korar jonno 'serialize()' use korte hobe but json e convert kora best practice

$serialize = serialize($students);
echo $serialize."<br>";
// back korar jonno unserialize() use korte hoy

$unserialize = unserialize($serialize);
print_r($unserialize);

echo "<br><br>";

//==================================

// array k json e konvet
$jsondata = json_encode($students);
echo $jsondata;

echo "<br><br>";

// json theke json_decode() er maddhome object er covert hoy  r array te convert korte hole second paramiter hisabe true likte hoy
 $students2 = json_decode($jsondata, true);
 print_r($students2);


 echo "<br><br>";
 echo "=============== class 7 copy by value and copy by reference as like pointer =========================================================<br>";

$person = [2,4,6,7];
// & means copy na address shoho access dewa
$newPerson = &$person;
$newPerson[1] = 'ami';

 print_r($person);
 echo "<br><br>";
 print_r($newPerson);

 echo "<br><br>";
 echo "=============== class 8 remove data from array 'unset($student[lname])' =========================================================<br>";

 echo "<br><br>";
 echo "=============== class 9 empty values =========================================================<br>";

 // set means value assign hoiche kina, Null assign kinto set na, $nmae= null; is not assaign;
 // r empty check korbe assign korar por o faka kina
 $name ='';
 if(isset($name)){
    echo " Name is set";
 }else{
    echo " name is not set";
 }

 if(empty($name)){
    echo " Name is empty";
 }else{
    echo " name is not empty";
 }

 //empty kina right way to check
 if (isset($name) && (is_numeric($name)|| $name !='')) {
    echo " Name is set and not empty";
 }else{ 
    echo " Name is not set or empty";
 }

 echo "<br><br>";
 echo "=============== class 10 extracting some data from array =========================================================<br>";

 $num =[5,6,7,8,9,10,11];
 $someNum = array_slice($num,2,4);// index 2 theke 4 porjonto. jodi last limit na dei tahole fist limit theke bakisobgulo slice kore niye asbe
  //$someNum = array_slice($num,2);
  //-1 means last er element r -2 means last er agerta

  //$someNum = array_slice($num,2,4, true); //true dile key gulo change hobena regerve hobe;

  // associative array hole r index sting and number mixed hole key prigerve korte hole
  //$num =['a'=>5,'b'=>6,'c'=>7,4=>8,'d'=>9,'e'=>10,'f'=>11];
  //ekhan e valule 8 er index 4
  //$someNum = array_slice($num,2,4, null, true);

 print_r($someNum);

 // upoer system e kinto orginal array thik theke kinto 'array_splice()' use korle orginal array modify hoye jabe

 // array er moddhe new item add korte chaile 
 /* newNum =[20,30,40,50];
 numResult = array_splice($num, 4,6,$newNum);
 */

 

echo "<br><br><br><br><br><br>";
