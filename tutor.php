
<?php
class WebcoachbdProduct{
public $tutorial = "HTML to SEO";
private $resource = "forum images";
protected $profile = "users profile";
public function codeTester(){
echo $this->tutorial."<br/>";
echo $this->resource."<br/>";
echo $this->profile."<br/>";
}
}
$productObject = new WebcoachbdProduct();
$productObject->codeTester();
echo $productObject->tutorial;
?>


