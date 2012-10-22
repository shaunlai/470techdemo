<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
$this->pageTitle="KMD HOME";
?>

<h1>WELCOME TO KMD</h1>



<p>protip: Click on the image below for a list of ways to kill Kenny.</p>
<a href="?r=deathMethods">

<img src="images/
<?php 
if (rand(1,3)==1) {
	echo "kenny1.gif";
	} else {
	echo "kenny2.jpg";
	}
?>
">
</a>
