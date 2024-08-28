<?php
     class Student {
          private $name;
          private $rollnum;

          public function __construct($name, $rollnum) {
               $this->name = $name;
               $this->rollnum = $rollnum;
          }

          function get_name() {
               return $this->name;
          }
          
          function get_roll(){
               return $this->rollnum;
          }

          function set_roll($newrollnum){
               if($newrollnum == $this->$rollnum){
                    echo "Same roll numbers <br>";
               }
               else{
                    $this->rollnum = $newrollnum;
                    echo "The updated roll number is : $newrollnum <br>";
               }
          }
          public  function display(){
               echo "Student Name is : $this->name and Rollno is : $this->rollnum <br> ";
          }
     }

     $obj = new Student("Muskan",20);
     $obj->get_name();
     $obj->get_roll();
     $obj->display();
     $obj->set_roll(21);
     $obj->display();
?>