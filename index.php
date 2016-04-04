<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<title>Example Three
</title>
<body>
<form action="code_generate.php" method="GET">
<div ng-app="" style="position:{{position}};border:{{border}} {{style}} {{color}};float:{{float}};padding:{{padding}};margin:{{margin}};border-radius:{{radius}}{{units}};">
Border-Thickness&nbsp: <!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="border" name="thick" value="Choose padding below:">
<option value="1px">1PX</option>
<option value="2px">2PX</option>
<option value="3px">3PX</option>
<option value="4px">4PX</option>
<option value="5px">5PX</option>
</select>
<br><br>
Border-style &nbsp:<!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="style" name="style" value="Choose padding below:">
<option value="solid">Solid</option>
<option value="dashed">Dashed</option>
<option value="dotted">Dotted</option>
</select>
<br><br>
color &nbsp  &nbsp &nbsp: <!--<input type="text" ng-model="color" name="color" placeholder="Choose Color"/>-->
<select ng-model="color" name="color" value="Choose any color below:">
<option value="orange">Orange</option>
<option value="green">Green</option>
<option value="yellow">Yellow</option>
<option value="blue">Blue</option>
</select>
<br><br>
Border-Radius &nbsp:<!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="radius" name="padding" value="Choose padding below:">
<option value="3">3</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="50">50</option>
<option value="75">75</option>
<option value="100">100</option>
</select>
&nbsp Units &nbsp:<select ng-model="units" name="padding" value="Choose padding below:">
<option value="px">PX</option>
<option value="%">%</option>
</select>
<br><br>

Padding &nbsp:<!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="padding" name="padding" value="Choose padding below:">
<option value="20px">20PX</option>
<option value="30px">30PX</option>
<option value="40px">40PX</option>
<option value="50px">50PX</option>
</select>
<br><br>
Margin &nbsp:<!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="margin" name="color" value="Choose any color below:">
<option value="20px">20PX</option>
<option value="30px">30PX</option>
<option value="40px">40PX</option>
<option value="50px">50PX</option>
</select>
<br><br>

Float &nbsp &nbsp &nbsp:<!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="float" name="color" value="Choose any color below:">
<option value="left">Left</option>
<option value="right">Right</option>
</select>
<br><br>

Position &nbsp &nbsp &nbsp:<!--<input type="text" ng-model="position" name="position" placeholder="Choose Position"/>-->
<select ng-model="position" name="color" value="Choose any color below:">
<option value="relative">Relative</option>
<option value="absolute">Absolute</option>
<option value="fixed">Fixed</option>
<option value="static">Static</option>
</select>
<br><br>
choosen color is {{color}}
<br><br>Float {{float}}
<br><br>Position {{position}}
<br><br>Padding {{padding}}
<br><br>Margin {{margin}}
<br><br>Border-Thickness {{border}}
<br><br>Border-style {{style}}
<br><br>Border-Radius {{radius}}
</div>
<center><input type="submit" value="Generate code">
</center>
<br><br>
</form>
</body>
</head>
</html>
<?php 
error_reporting(0);
session_start();
$_SESSION['color'] =$_GET['color'];
if(isset($_SESSION['color'])){
	header('Location:code_generate.php');
}
?>