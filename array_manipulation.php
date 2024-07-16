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


