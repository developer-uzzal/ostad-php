<?php 

echo "======================class 22 string diclaration ==============================================<br>";
// sting single or double cotation diye likhte hoy

/*
// heredoc e likhle new line , jevabe dibe oivabe libe
$heredoc = <<<EOD
Hi kmn 
 acho
ki koro

EOD;
echo $heredoc;
*/
echo "<br><br>";
// nulldoc e likhle new line , jevabe dibe oivabe libe and ater modde variable kaj korbe na. single cotation er moto kaj korbe
$heredoc = <<<'EOD'
Hi kmn 
 acho
ki koro

EOD;
echo $heredoc;



echo "<br><br>";
echo "======================class 23 ASCII code ==============================================<br>";

echo ord('A');
echo PHP_EOL;
echo ord("B");
echo "<br>";
echo chr(66);

echo "<br><br>";
echo "======================class 24 accessing characters within a string ==============================================<br>";

$name = "jakir hosen";
echo $name[0];
echo PHP_EOL;
echo $name[-1];

// onek gula character aksathe print korar jonno substr() use kora hoy
echo "<br>";

$length = strlen($name);
echo substr($name, $length-4);// length er 4 kom theke bari sob print koro and substr($name, -4) evabeo lekha jai and 3rd paramiter hocche last limit


echo "<br><br>";
echo "======================class 25 strings reversing ==============================================<br>";

// string reverse 3 method

$name = "jakir hosen";
$length = strlen($name)-1;
for ($i=$length; $i >=0; $i--) { 
    echo $name[$i];
}

echo "<br>";

$length = strlen($name);
for ($i=1; $i<=$length; $i++) { 
    echo $name[$i*-1];
}
echo "<br>";

echo strrev($name);

echo "<br><br>";
echo "======================class 26 Nreaking String into Fragments - Tokenization ==============================================<br>";

$name = "hi,jakir hosen uzzal kmn acho";
$parts = explode(" ",$name); // ekhan e shodo space diye alada korar kotha bola hoiche. space and coma doita shorto diye ai functin diya kora jabe na

print_r($parts);

echo "<br><br>";

$orginal = join(" ",$parts);
echo $orginal;

echo "<br><br>";

$parts2 = str_split($name); // every character indivisial array element
print_r($parts2);

echo "<br><br>";

// doita shorto diye vangte chai ==================================


$parts3 = strtok($name, " ,");
echo $parts3."<br>"; //  ekhan e first word ta dekhabe. karon ai function shoto match kore akta word return kore and position na mone rakhe , next e call kora hole ager word er poer ta return kore

$parts3 = strtok(" ,");
echo $parts3."<br>";

$parts3 = strtok(" ,");
echo $parts3."<br>";

echo "<br><br>";
// shomporno ta print korte chaile while loop use korbo
$parts3 = strtok($name, " ,");

while($parts3 !== false){
    echo $parts3."<br>";
    $parts3 = strtok(" ,");
}

echo "<br><br>";
// amra 2ta shorto diye vanbo and koita word ta count korbo jate array te convert hoy

$parts4 = preg_split("/ |,/",$name);
print_r($parts4);
$length = count($parts4);

echo "<br><br>";
echo "total word in '$name' is: ".$length;

echo "<br><br>";
echo "======================class 27 searching for strings within strings ==============================================<br>";

$info = " Hi I am Jakir, jakir from tongi";
echo strpos($info,"jakir");
//echo strrpos($info,"jakir");//ulta dik theke khujbe
echo "<br><br>";
echo stripos($info,"jakir");// case insensetive
echo "<br><br>";
echo stripos($info,"jakir",5);//position 5 er porer theke khujbe

echo "<br><br>";
echo "======================class 28 searching and replace within strings ==============================================<br>";


$info = " Hi I am Jakir, jakir hosen uzzal from tongi";
//$replaceString = str_replace('I am',"I'm",$info); // orginal string intake thakbe 
$replaceString = str_ireplace('I Am',"I'm",$info,$count); // case not sensetive and $count hocche kotota replace hoiche tar number assign hobe

$replaceString = str_ireplace(array('jakir','uzzal'),array('rakib', 'niloy'),$info,$count);
//$replaceString = str_ireplace(array('jakir','uzzal'),'rakib',$info,$count);

echo $replaceString." replace number ".$count;

echo "<br><br>";
echo "======================class 29 string trim ==============================================<br>";

echo "problem ache ========== solve coltrol u ==================<br>";

$name = " hello,\n";
echo $name;
echo "<br><br>";
$name = trim($name);//jodi \n er work rakte chai tokon $name = trim($name,"\n"); and left trim and right trim kora jai

echo $name;

echo "<br><br>";
echo "======================class 30 word wrap in string ==============================================<br>";

$info = "Hi IamJakir, jakir hosen uzzal from tongi";
echo nl2br(wordwrap($info, 5));
echo wordwrap($info, 5,"\n",true);


echo "<br><br>";
echo "======================class 31 convert newline character to html line break ==============================================<br>";
$info = "Hi I am Jakir, jakir hosen uzzal\n from tongi";
echo nl2br($info);



echo "<br><br>";
echo "======================class 32 Using the sscanf function ==============================================<br>";

$name = "abul kalam azad 01957567853";
$parts = sscanf($name, "%s %s %s %11s");

sscanf($name, "%s %s %s %11s",$fname,$mname,$lname,$phone);
echo $fname;

echo "<br><br>";

print_r($parts);

echo "<br><br>";

$hexColor ="#FF2F44";
sscanf($hexColor,"#%2x%2x%2x",$red,$green,$blue);// hex to decimal convert

echo $green;
echo "<br><br>";
echo $blue;
echo "<br> <br> <br>";











