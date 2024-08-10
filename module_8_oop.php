<?php 
echo "============================= class 01 introduction of oop and class 02 =================================== <br>";
// class and object shikbo
class Human{  // ata akta class 
    public $name; // privete means sub class e acces kora ajbe na, protectd means sub class e access kora juabe
    function sayHi(){
        echo "Salam </br>";
        $this->sayName();
    }

    function sayName(){
        echo "My name is : {$this->name} </br>";
    }
}

class Cat{   // ata akta class 
    function sayHi(){
        echo "Meow </br>";
    }
}

class Dog{ // ata akta class 
    function sayHi(){
        echo "Woof </br> </br>";
    }
}

$h1 = new Human(); //ata akta object
$c1 = new Cat(); //ata akta object
$d1 = new Dog(); //ata akta object

// method ke access korar ways
$h1->sayHi();
$c1->sayHi();
$d1->sayHi();

// property k access korar way
$h1->name="Sakib"; // property set
echo $h1->name."</br>"; // property get

//$h1->sayName();

$h2 = new Human();
$h2->name="Rakib";

echo "</br> </br>";

$h1->sayHi();
$h2->sayHi();




echo "============================= class 03 construct is automatically run when an object is crteated from the class=================================== <br>";
// udessho hocche object c dicliar korar somoy paramiter pass kora
class Human1{   
    public $name;
    public $age;

    function __construct($personName, $personAge=0)
    {
        $this->name = $personName;
        $this->age = $personAge;
    }


    function sayHi(){
        echo "Salam, ";
        $this->sayName();
    }

    function sayName(){
        if($this->age){
            echo "My name is : {$this->name} and my age is {$this->age}</br>";
        }else{
            echo "My name is : {$this->name} and I don't know what is my age </br>";
        }
    }
}

$h1 = new Human1("sojib",18);
$h2 = new Human1("rojib",20);
$h3 = new Human1("kojib");


$h1->sayHi();
$h2->sayHi();
$h3->sayHi();


echo "============================= class 04 public and private method and property =================================== <br>";

class Fund{
    public $fund; //atak private korbo 
    //private $fund;
    public $name;

    function __construct($personName,$initialFund=0)
    {
        $this->name=$personName;
        $this->fund=$initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Account holder is {$this->name} and Total fund is {$this->fund} </br>";
    }
}

$sakib = new Fund("sakib",500);
$rakib = new Fund("Rakib",300);



$sakib->getTotal();
$sakib->addFund(50);
$sakib->getTotal();
$sakib->deductFund(10);
$sakib->getTotal();

$rakib->getTotal();

$sakib->fund=0;// akhan e kinto internal property  class er bahir theke access kora jacche, ata na chaile property ke privat korte hobe
$sakib->getTotal();

echo "============================= class 05 wtriting a real life useful class =================================== <br>";

//rgb color theke hexadecimal code

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode='')
    {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    function getColor(){
        return $this->color;
    }

    function getRGB(){
        return array($this->red, $this->green, $this->blue);
    }
    function readRGBColor(){
        echo "Red = {$this->red}\nBlue = {$this->green}\nGreen = {$this->blue}\n";
    }

    function setColor($colorCode){
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    private function parseColor(){
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color,'%02x%02x%02x'); // sscanf array return kore

            /* avabeo kora jato 
            $colors = sscanf($this->color,'%02x%02x%02x');
            $this->red = $colors[0];
            $this->green = $colors[1];
            $this->blue = $colors[2];

            */

        }else{
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }

    function getRed(){
        return $this->red;
    }

    function getGreen(){
        return $this->green;
    }

    function getBlue(){
        return $this->blue;
    }
}


$myColor = new RGB("#ffef27");
$myColor->readRGBColor();
echo $myColor->getBlue();

echo "============================= class 06 parent and child class =================================== <br>";

class ParentClass{
    protected $name;
    function __construct($name)
    {   $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "Hi from {$this->name}</br>";
    }

}

class ChildClass extends ParentClass{
    function sayHi()
    {   
        parent::sayHi(); // parent mathod k child mathod call korte hoy avabe
        echo "Hello";
    }
}

$test = new ChildClass("sakib");
// child and parent e jodi same name er method thake tokon child er ta run hobe 

echo "============================= class 07 more example inheretance =================================== <br>";

class Shape{
    protected $name;
    protected $area;
    function __construct($name)
    {
      $this->name = $name;
      $this->calculateArea();  
    }
    
    public function getArea(){
        echo "This {$this->name}'s area is {$this->area} <br>";
    }
    public function calculateArea(){

    }
}

class Triangle extends Shape{
    private $a, $b, $c;
    public function __construct( $a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a + $this->b + $this->c)/2;
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }
}

class Rectangle extends Shape{
    private $a, $b;
    public function __construct( $a, $b,)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct("rectangle");
    }

    public function calculateArea(){
        $this->area = $this->a * $this->b;
    }

}

$r = new Rectangle(3,4);
$r->getArea();

$t = new Triangle(3,4,5);
$t->getArea();

echo "============================= class 08 Abstract class and abstruct method in oop =================================== <br>";

abstract class Shape1{ // ekhan e abstract mane hocche ata amn class jeta shodo extends hobe. atak point kora jabe na

    abstract function getArea(); //er mane hocce shape1 class k je class extends korbe se must ai method er body likhte hobe. ekhan e body{} dewa jabe na. amon ki paramiter same sonkok dite hobe and chaile edit korte parbe je extends korbe. final likhle edit korte parbe na, 
    abstract function getPerimeter(); // atao same
}

class Rectangle1 extends Shape1{
    /* ai doita method likhte e hobe karon paren class e ai doita method abstruct. must likhte e hobe
    function getArea()
    {
        
    }

    function getPerimeter()
    {
        
    }
    */
    
    private $base , $height;
    function __construct($base, $height)
    {
       $this->base = $base;
       $this->height = $height; 
    }

    function getArea()
    {
        return $this->base * $this->height;
    }

    function getPerimeter()
    {
        
    }
}
// $s = new Shape1(); ata kora jabe na karon ata abstruct class.
$r = new Rectangle1(5,6);
echo $r->getArea();


echo "<br>============================= class 09 final keyword in inheritance =================================== <br>";


abstract class OurClass{
    final function doSomething(){ // ekhan final mane hocche je class extends korbe se ai method ke modify korte parbe na
        echo "It's final <br>";
    }
    function doNotSomething(){
        echo "It's do not something";
    }
}

class MyClass extends OurClass{
    /* ata over write korte parbo na
    function doNotSomething()
    {
        echo "It's final <br>";  
    }
        */

    function doNotSomething(){
        echo "It's do not something is edited <br>";
    }
}

$x = new MyClass();
$x->doSomething();
$x->doNotSomething();

echo "<br>============================= class 10 How to write better code with oop by forcing =================================== <br>";

class Book{

}

class Books{
    private $booksContainer;
    private $total;
    function __construct()
    {
        $this->booksContainer = array();
    }

    function addBook( Book $book){ // paramiter onle segula asbe jegula Book class k exdends korbe
        array_push($this->booksContainer, $book);
    }
    function totalBook(){
        $this->total= count($this->booksContainer);
        echo"Total books are {$this->total} <br>";
    }
}

class Quran extends Book{

}
class Hadith extends Book{

}
class Fiqah extends Book{

}
class Student{

}

$bookCollection = new Books();
$bookCollection->addBook(new Quran);
$bookCollection->addBook(new Hadith);
$bookCollection->addBook(new Fiqah);
//$bookCollection->addBook(new Student);

// ata kinto book type er na. tobou book hisabe count korche. ata solbe korar jonno addBook e paramiter er age book dibo. jate book typer gulo paramiter hisabe ney. vinno type er hole jano error dey

$bookCollection->totalBook();



echo "<br>============================= class 11 Discussion of Interaces and consept of polimorfism=================================== <br>";

// interface k onno class empliment korbe ar onno interface extends korbe. interface er joto gulo method body cara thakbe segula ke must niye aste hobe.  

interface BaseAnimal{
    // 
    function isAnimal();
    function canEat($para1, $param);
    function breed();
}
// extends korle base class k likhte hoto na auto apply hoto but implement korke likha shorto
class Animal implements BaseAnimal{
    function isAnimal(){}
    function canEat($para1, $param){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

class Human2 implements BaseHuman{
    function isAnimal(){}
    function canEat($para1, $param){}
    function breed(){}
    function canTalk(){}
}

$h = new Human2();
echo $h instanceof Animal;// means Human 2 e Animal biddoman ache kina. jeheto nai tai 0 return korbe.
echo $h instanceof BaseAnimal; // Human class BaseAnimal interface k daron korche tai return 1 dibe 
echo $h instanceof BaseHuman; // Human class BaseHuman interface k daron korche tai return 1 dibe 

// Human class jeheto akoysathe interface Baseanimal and BaseHuman k daron kore tai atak polimorfijom o bole



echo "<br>============================= class 12 static method and static propertis =================================== <br>";


class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){ //static mane hocche object e class extentiate na kore direct function k call kora jabe. MathCalculator::fibonacci(8); avabe
       // $this->number; abave kora janbe na karon number private property
       // $this->name; static proparty and method self::$name avabe likhte hoy
       self::$name;

    }
    function factorial($n){
        $this->number;// kono problem nai
        $this->name; // kono problem nai
        self::$name; // kono problem nai
        self::fibonacci(10); // kono problem nai
        $this->fibonacci(15); // kono problem nai
    }
}

$math = new MathCalculator();
$math->fibonacci(8);

// static method and property k abave direct call kora jai.
MathCalculator::fibonacci(20);
MathCalculator::$name;


echo "<br>============================= class 13 static method overrides in childn classes =================================== <br>";


class A{
    private $name;
    static function sayHi(){
        echo "Hi from A <br>";
    }
}

class B extends A{
    static function sayHi() // parent class er static method ke modify korte hole static likte hobe
    {
        echo "Hi from B <br>";
        parent::sayHi();
    }
}


B::sayHi();// abave call korte hobe


echo "<br>============================= class 14 static method overrides in childn classes =================================== <br>";

class A1{
    static private $name;
    static function sayHi(){
       self::$name = "hello"; // abave lekha jabe na
       //$this->name = "hello"; // jabe na
        echo "Hi from A <br>";
    }
}

class B1 extends A1{
    static function sayHi() // parent class er static method ke modify korte hole static likte hobe
    {
       // parent::$name; // karon parent class e name private. protected hole sub class e access kora jai
        echo "Hi from B <br>";
        parent::sayHi();
    }
}


B1::sayHi();// abave call korte hobe

echo "<br>============================= class 16 magic method in php classes || getter ans setter magic method =================================== <br>";

class Student1{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age='', $class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    /*

    function getName(){
        return $this->name;
    }
    function setName($name){
         $this->name = $name;
    }

    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age = $age;
    }

    function getClass(){
        return $this->class;
    }
    function setClass($class){
        $this->class = $class;
    }
        */

        // getter ans setter magic method
        public function __get($prop)
        {
            return $this->$prop; // jodi name chai tokon (return $this->name) hisabe kaj korbe
        }
        public function __set($prop, $value)
        {
            $this->$prop = $value;
        }
}

/*
// $R = new Student1("rohim", 16,10);
$R = new Student1();
$R->setName('rakib');

echo $R->getName();
*/

$r = new Student1("sakib",10,20);
echo $r->name;


echo "<br>============================= class 17 A practical example of an interface =================================== <br>";

class DistrictCollection{
    private $districs;
    function __construct() {
        $this->districs = array();
    }

    function add($distric){
        array_push($this->districs,$distric);
    }

    function getDistrics(){
        return $this->districs;
    }
}

$districs = new DistrictCollection();
$districs->add("Dhaka");
$districs->add("Kishoregonj");
$districs->add("Comilla");
$districs->add("Rongpur");
$districs->add("Rajshahi");

// print_r($districs->getDistrics()); avabe hobe na.

$_districs = $districs->getDistrics();
print_r($_districs); //avabe hobe
echo "<br><br>";

foreach($_districs as $_districs){
    echo $_districs."<br>";
}
echo "<br><br>";
echo "<br><br>";

/*
problem ache
class DistrictCollection2 implements IteratorAggregate{
    private $districs;
    function __construct() {
        $this->districs = array();
    }

    function add($distric){
        array_push($this->districs,$distric);
    }

    function getDistrics(){
        return $this->districs;
    }

    function getIterator(){
        return new ArrayIterator($this->districs);
    }

    // function getIterator(){
    //     return new ArrayIterator($this->districs);
    // }
}

$districs = new DistrictCollection2();
$districs->add("Dhaka");
$districs->add("Kishoregonj");
$districs->add("Comilla");
$districs->add("Rongpur");
$districs->add("Rajshahi");




*/


echo "<br>============================= class 18 countable interface pretty cool =================================== <br>";
/*
class DistrictCollection2 implements IteratorAggregate, Countable{
    private $districs;
    function __construct() {
        $this->districs = array();
    }

    function add($distric){
        array_push($this->districs,$distric);
    }

    function getDistrics(){
        return $this->districs;
    }

    function getIterator(){
        return new ArrayIterator($this->districs);
    }

    // function getIterator(){
    //     return new ArrayIterator($this->districs);
    // }
    function count()
    {
       return count($this->districs);
    }
}

$districs = new DistrictCollection2();
$districs->add("Dhaka");
$districs->add("Kishoregonj");
$districs->add("Comilla");
$districs->add("Rongpur");
$districs->add("Rajshahi");

echo count($districs);

*/

echo "<br>============================= class 19 object cloning in php=================================== <br>";

class FavColor{
    public $color;
    function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}

$c1 = new FavColor('some red');
print_r($c1);
//echo $c1; // ata kora jabe na
$c2 = clone $c1; // clone na hole copy hoy na just ager refacence e kaj kore
$c2->setColor('more green');

print_r($c1);
print_r($c2);

echo "<br><br>";
echo "<br><br>";


class Color{
    public $color;
    function __construct($color)
    {
        $this->color = $color;  
    }
    function setColor($color){
        $this->color = $color;
    }
}

class FavColor1{
    public $data;
    public $color;
    function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new Color($color);   // class Color er property color k copy koreni just refer korche. copy korar jonno magic __clone function use kora hoiche.
    }

    function updateColor($color){
        $this->color->setColor($color);
    }
    function __clone() // ai magic function chara kaj hobe na
    {
        $this->color = clone $this->color;
    }
}

$c1 = new FavColor1('some data', 'red');
print_r($c1);

echo "<br><br>";
echo "<br><br>";

$c2 = clone $c1;
print_r($c2);


echo "<br><br>";
echo "<br><br>";

$c2->updateColor("green");
print_r($c2);

echo "<br><br>";

print_r($c1); 


echo "<br>============================= class 20 Conversion from object to string =================================== <br>";

class Color1{
    public $color;
    function __construct($color)
    {
        $this->color = $color;  
    }
    function setColor($color){
        $this->color = $color;
    }

    function __toString() // ata auto call hobe
    {
        return "This color is {$this->color}";
    }
}

$c = new Color1("Red");
echo $c; // object k echo kora jaina tai string e covert kore nite upore __tostring function use kora hoiche

echo "<br><br>";
echo $c->color; // avabe o kora jai



echo "<br>============================= class 21 compare object =================================== <br>";

class Planet{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$m = new Planet("Mars");
$e1 = new Planet("Earth");

if($e==$m){
    // not similar
    echo "simillar <br>";
}else{
    echo "Not similar <br>";
}

if($e==$e1){
    // similar
    echo "simillar <br>";
}else{
    echo "Not similar <br>";
}

// but we are know that object $e and $e1 hold diffarent location or memory addrss
if($e===$e1){
    //not similar 
    echo "simillar <br>";
}else{
    echo "Not similar <br>";
}

$e2 = $e;
if($e===$e2){
    //similar  karon $e2 alada addrss hold korche na. object $e er refarence e ache
    echo "simillar <br>";
}else{
    echo "Not similar <br>";
}



echo "<br>============================= class 22 detailed discussion on early and late binding =================================== <br>";
class Planet1{
    static function echoName(){
        echo self::getName(); //echo static::getName();
    }


    static function getName(){
        return "Planet";
    }

}

class Earth1 extends Planet1{
    static function getName()
    {
        echo "Earth";
    }
}

//Planet1::echoName(); //Planet
Earth1::echoName(); // parent class er echo name function run korbe. okane self diya getName function call kora ache jeheto self deawa tai parent class er getName function ta exicute hobe. jodi chaitam child class er same name er function thakle seta exicute koro r na thakle parent class er ta exicute hobe tokon self er poriborte static word ta likbo. early binding mane self use korar fole je kajta r late binding hocche static er likhar fole kaj ta

echo "<br>============================= class 23 & 24 discusion of property overloading and the isset and unset magic method class 24 overloading with call and callStatic Magic Method =================================== <br>";

class MotorCycle{
    private $displacement, $capacity, $mileage;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->displacement = $displacement;
        $this->capacity= $capacity;
        $this->mileage = $mileage;
    }
    
    function getDisplacement(){
        return $this->displacement;
    }

    function setDisplacement($displacement){
        $this->displacement = $displacement;
    }

}

$pulsar = new MotorCycle('150cc', '16ltr','40kmph');

echo $pulsar->getDisplacement();

echo "<br><br>";


class MotorCycle1{
    private $parameters;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity']= $capacity;
        $this->parameters['mileage'] = $mileage;
    }
    /*
    function getDisplacement(){
        return $this->parameters['displacement'];
    }
        atar kaj magic function korbe
        */

    function __isset($name)
    {
        if (!isset($this->parameters[$name])) {
            echo "<br> {$name} not found <br>";
            return false;
        } 
           return true;
    }
    function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]); // remove hoye jabe
        echo "<br><br>";
        print_r($this->parameters);
    }

    function __get($name)
    {
        echo $this->parameters[$name];
    }

    /*
    function setDisplacement($displacement){
        $this->displacement = $displacement;
    }*/


    function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    // class 24 

    function __call($name, $arguments)
    {
       if ('run'==$name) {
        if ($arguments) {
            echo "<br><br> I am running at {$arguments[0]} <br><br>";
        }
       } 
    }

    static function __callStatic($name, $arguments)
    {
        echo "Static Call";
    }


}

$pulsar = new MotorCycle1('150cc', '16ltr','40kmph');



echo $pulsar->displacement;
echo $pulsar->capacity;

// check korar jonno 
if(isset($pulsar->tiresize)){ // isset call korle abject er __isset method k auto call hobe
    echo $pulsar->tiresize;
}

unset($pulsar->mileage);


// class 24
$pulsar->run('100mph'); // run e magic call method k call dibe

MotorCycle1::wash(); // static function na thakle callStatic exicute hobe





echo "<br>============================= class 25 auto loading file =================================== <br>";

echo "<br>============================= class 26 &27 namespace and namespace auto load =================================== <br>";








echo "<br><br><br><br>";

?>