<?php
$flag = '{flag}';
$number = $_GET['number'];
if (!(strlen($number) <= 3)) {
	echo 'too long';
} else
if (!(1000 <= $number)) {
	echo 'too small';
} else {
	echo $flag;
}
