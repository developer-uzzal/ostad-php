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

array_shift($numbers);//shift means first element will be remove from main array
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


$keys = array_keys($students);// atar mane hocche index 'ab' k '0' te convert kora but actual index [ab] theke jabe but index[0] diya access kora jabe 
//$keys = array_values($students); // atar mane hocce value er index modifiy kore index [0]/[1] kora


print_r($keys);// array print korar jonno 'print_r()' use kora hoy. and array_keys() association function er index ke index 0, 1 ,2 abave formate hobe than normal for loop use kore print korte paarbo


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
 echo "=============== class 8 remove data from array 'unset(student[lname])' =========================================================<br>";

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
 echo "=============== class 10 and 11 extracting some data from array =========================================================<br>";

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

 echo "<br><br>";
 echo "=============== class 12 concatenating several arrays =========================================================<br>";
  
 $num1 =[1,2,3,4];
  $num2 = [8,6,7];
  $newNum = array_merge($num1,$num2);
  print_r($newNum);

  echo "<br><br>";
/*
abave korle hobe na karon doiter e index akhoy
  $newNumPLus = $num1 + $num2;
  print_r($newNumPLus);

  */

 echo "<br><br>";
 echo "=============== class 13 sort arrays =========================================================<br>";

 sort($num2);// choto theke boro and second paramiter hisabe and case sensetive sort korte na chaile 'SORT_FLAG_CASE' use korte hobe peramiter hisabe and 'SORT_ATRING' use korle dictionarry er moto sort korbe ex 1, 11, 111, 2,22
//rsort() boro theke choto
//ksort() use korle keys gulo sort hobe
//krsort() kyes boro theke choto

print_r($num2);
 // asort() use korle keys gulo priserve hobe
 //arsort() boro theke choto

 echo "<br><br>";
 echo "=============== class 14 search element =========================================================<br>";
 
 if(in_array(2,$num1,true)){
    //paramiter true mane deta type check korbe
    echo 'found';
 }

 echo "<br><br>";
 //index number ber korar jonno array_search() use kora hoy
 $ofset = array_search(2,$num1);
 echo $ofset;

  //key exist ache kina check korte 'key_exists( , )' use korte hoi, ai finction true oe falls value return kore.

  echo "<br><br>";
  echo "=============== class 15 difference and intersection of two array =========================================================<br>";
  
  $num1 =[1,2,8,4];
  $num2 = [8,2,6,7];

  // array slice and array splice function nia disscuss

  echo "<br><br>";
  echo "=============== class 16 array utility function walk, map, filter =========================================================<br>";
  
  $num1 =[1,2,8,4];

  function square($n){
    printf("Square of %d is %d <br>",$n, $n*$n);
  }

  array_walk($num1,'square'); // here square is callback function

  function square1($n){
    printf("Square of %d is %d <br>",$n, $n*$n);
    // for map return
    return $n*$n;
  }

  $newNum = array_map('square1',$num1); // here square1 is callback function
  print_r($newNum);

  echo "<br><br>";


 function even($n){
    return $n%2==0;
 }
 $newNum = array_filter($num1,'even'); // here even is callback function
 print_r($newNum);

 echo "<br><br>";

 $person =array('sujon', 'kujon', 'mujon','rakib', 'sakib', 'sojib');

 function filterByS($name){
    return $name[0]=='s';
 }

 $newPerson = array_filter($person,'filterByS');
 print_r($newPerson);

  echo "<br><br>";
  echo "=============== class 17 array utility function reduce =========================================================<br>";
  
  $num1 =[1,2,8,4];

  function sum($oldValue=0, $newValue){
    return $oldValue + $newValue;
  }

  $sum = array_reduce($num1, 'sum',);//array theke akta doita value pathabe sum fuction e. old valo means ager return sum,

  echo $sum;

  echo "<br><br>";
  echo "=============== class 18 array utility list function to get data from array into a variable =========================================================<br>";
   
  $color = [122,223,65];
  /* avabe kajta kora jai but sohoj vabe korbo list() diya
  $red = $color[0];
  $green = $color[1];
  $blue = $color[2];

  echo $green;
  */
  list($red,$green,$blue) = $color; // arrsy te item besi thakle problem nai. 
  echo $green;


  echo "<br><br>";
  echo "=============== class 19 array utility range function and stepping =========================================================<br>";
   
// $numbers =[ 12,13,14,15,16,17,18,19,20]

/*
$numbers = array();
for ($i=12; $i <21; $i++) { 
    array_push($numbers, $i);
}
print_r($numbers);

*/

$numbers = range(12,20); // jodi 12 theke 2 kore varate chaitam hahole 3rd paramiter 2 hobe. range(12,20,2);
print_r($numbers);

  echo "<br><br>";
  echo "=============== class 20 random number and random element in array useing shuffle function =========================================================<br>";

  $random = mt_rand(0,32);

  echo $random;
  echo "<br><br>";

  $numbers = range(12,20);

  shuffle($numbers);
  print_r($numbers);
   

  echo "<br><br>";
  echo "=============== class 21 random element in associative array useing shuffle function =========================================================<br>";

  $person = array('a'=>'jahid','b'=>'sakib','c'=>'nadim');
/*
  shuffle($person);
  print_r($person);

    // key priserve hocche na! ki kora jai????
  */
  $key = array_rand($person);// mt_rand() na kinto! mt_rand mare value genaret kora
  echo $key;

  echo "<br><br>";

  echo $person[$key];
  
  echo "<br><br>";

  echo "=============== end array =========================================================<br>";




echo "<br><br><br><br><br><br>";
