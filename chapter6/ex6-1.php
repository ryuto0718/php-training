<?php
    class Person{
        private $name;
        private $age;
        private $sex;

        function __construct($name,$age,$sex){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        function show(){
            echo "{$this->name} ({$this->age}) 性別:{$this->sex}<br>";
        }
    }

    $person1 = new Person("山田太郎",18,"男");
    $person2 = new Person("斎藤花子",17,"女");
    $person3 = new Person("鈴木次郎",16,"男");

    $person1 -> show();
    $person2 -> show();
    $person3 -> show();
?>