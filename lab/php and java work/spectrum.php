<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Electro Magnetic Spectrum</h1>
<form>
<legend>Electro Magnetic Spectrum</legend> 
      <input name="wave" type="text" value=" " maxlength="5" />
      <input name="submit" type="submit" value="calculate" />
</form>
<?php 

$wave = $_GET[wave];

if ($wave> = 450 ){
         $band='radio';
         } 
         else if ($wave>=5e-4){
         $band = "Microwave";
          }
           else if ($wave>=.5e-6){
         $band = "infra red";
          }
           else if ($wave>=){
         $band = "visible";
          }
           else if ($wave>=10e-9){
         $band = "ultraviolet";
          }
           else if ($wave>=10e-11){
         $band = "x-ray";
          }
           else if ($wave>=10e13){
         $band = "gamma ray";
         }else}
         $band ="please enter an integer";
         
         echo "<h1> "A wave of $wave = $band</h1>;
         
         
         
?>

</body>
</html>
