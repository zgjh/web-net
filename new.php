<?php
	for ($i=1;$i<=10;$i=$i+1){
	$a[$i ]=rand(1,5);
	}
?>
<table bgcolor=849faf width="0" border="0" align="center">
<?php
function b(&$a){
echo"<tr>";
for ($i=1;$i<=10;$i=$i+1){
	if($a[$i ]==1)
		echo"<td><img src=10.png width=50 height=50></td>";
	if($a[$i ]==2)
		echo"<td><img src=1.png width=50 height=50></td>";
	if($a[$i ]==3)
		echo"<td><img src=2.png width=50 height=50></td>";
	if($a[$i ]==4)
		echo"<td><img src=3.png width=50 height=50></td>";
	if($a[$i ]==5)
		echo"<td><img src=4.png width=50 height=50></td>";
}
echo "</tr>";
}
?>
<?php
for($i=1;$i<=3;$i=$i+1){
	b($a);
	echo"After";
	echo"<br>";
}
?>
</table>