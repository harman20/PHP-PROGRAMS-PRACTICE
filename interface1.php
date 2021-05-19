<?php 
  
interface practice{
  
    public function method1();
    public function method2();
  
}
  
class A implements practice{
  
    public function method1(){
        echo "Method1 Called" . "\n";
    }
  
    public function method2(){
        echo "Method2 Called". "\n";
    }
} 
  
$obj = new A();
$obj->method1();
$obj->method2();
  
?>