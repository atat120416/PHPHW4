<?php


$month=$_GET["month"];

	if ($month=="JAN.") {
		echo "一月";
		echo "<body background=http://www.florist.org.tw/D/d1062801.jpg>";
	}elseif ($month=="FEB.") {
		echo "二月";
		echo "<body background=http://farm8.static.flickr.com/7330/12608011473_10ec5376ef_b.jpg>";
	}elseif ($month=="MAR.") {
		echo "三月";
		echo "<body background=http://a3.att.hudong.com/42/73/01300000009843120824736114081.jpg>";
	}elseif ($month=="APR.") {
		echo "四月";
		echo "<body background=https://www.pairs.tw/wp-content/uploads/2015/06/bafacad3118851e8fc25e641027ce77a.png>";
	}elseif ($month=="MAY.") {
		echo "五月";
		echo "<body background=https://i.gbc.tw/gb_img/7/001/066/1066507.jpg>";
	}elseif ($month=="JUN.") {
		echo "六月";
		echo "<body background=http://icrvb3jy.xinmedia.com/solomo/article/3318/B95B0E8B-F332-4624-BA25-DE1076BB2DD5.jpg>";
	}elseif ($month=="JUL.") {
		echo "七月";
		echo "<body background=http://mmmfile.emmm.tw/L3/88490/image/%E5%AD%B8%E7%94%B2/8.JPG>";
	}elseif ($month=="AUG.") {
		echo "八月";
		echo "<body background=http://a3.att.hudong.com/42/73/01300000009843120824736114081.jpg>";
	}elseif ($month=="SEP.") {
		echo "九月";
		echo "<body background=http://flowerqhk.com/image/data/00.product/flower/20160303005312%20(1)1.jpg>";
	}elseif ($month=="OCT.") {
		echo "十月";
		echo "<body background=http://static.ettoday.net/images/432/d432960.jpg>";
	}elseif ($month=="NOV.") {
		echo "十一月";
		echo "<body background=http://shanchahua.yangzhiriji.com/wp-content/uploads/sites/14/2014/05/1.jpg>";
	}elseif ($month=="DEC.") {
		echo "十二月";
		echo "<body background=http://pic.pimg.tw/mulasaki777/1361945475-1406380232_n.jpg>";
	}


	echo "<br>";
	echo "<br>";
	echo "<br>";

date_default_timezone_set("Asia/Taipei");
$datetime=date("Y/m/d-H:i:s",mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y')));
echo $datetime;

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

echo "世界末日:2017/12/31";

	echo "<br>";
	echo "<br>";
	echo "<br>";

$final=mktime(0,0,0,12,31,2017);
$now=date('U');
$least=$final-$now;
$day=floor(floor(floor($least/60)/60)/24);
$hour=floor(floor($least/60)/60)%24;
$min=floor($least/60)%60;
$sec=$least%60;

echo "倒數:".$day."天".$hour."時".$min."分".$sec."秒";
?>