<?php
$str="hfhhehefe jfgkgfjfg  ggyyiufthrhd";
$lines=$words=1;
$c=0;
if(isset($_POST['area']))
$str=$_POST['area'];
$len=strlen($str);
echo "length of given text".$len."<br>";
for($i=0;$i<$len;$i++)
{
if(strstr($str[$i],"\n"))
{
$lines++;
$words++;
$c--;
}
else if(strstr($str[$i]," "))
$words++;
else
$c++;
}
echo "lines $lines <scripts> alert($lines);</script>";
echo "words $words <script> alert($words);</script>";
?>
