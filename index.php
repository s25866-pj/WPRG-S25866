<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>zad1</h2>
    <form action="plik.php" method="post" enctype="multipart\form-data">
        <input type="file" name="file" >
        <input type="submit" value="upload" name="zatwierdz">
    </form>

    <h2>zad2</h2>
<?php
  $filename = "licznik.txt";
  if(!file_exists($filename)){
    $newfile = fopen($filename,"w");
    fwrite($newfile,"1");
    fclose($newfile);
  }
  else{
    $openFile = fopen($filename,"r");
    $licz = fread($openFile, filesize($filename));
    fclose($openFile);
    $licz ++;
    $openFile = fopen($filename,"w");
    fwrite($openFile,$licz);
    fclose($openFile);
  }
  echo "odwiedziny: $licz";


  echo "<h2>zad3</h2>";

$file = fopen("ipki.txt","r");
echo "linki: </br>";
while(!feof($file)){
  $wers = fgets($file);
  $part = explode(";",$wers);
  echo '<a href="'.$part[0].'" target="_blank">'.$part[1].'</a><br>';
}


?>
</body>
</html>
