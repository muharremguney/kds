
<!DOCTYPE html>
<html>
<head>
<title>GÜNEY OTOYIKAMA</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body{
	margin:0px;
	padding:0px;
	position:absolute;
	
	
}
.üst{
	background:#424242;
	width:1515px;
	height:80px;
	

	
	
}
.sidebar{
    background:#757575;
    width: 250px;
    height: 1000px;
    float: left;
	z-index: 2;
	position:absolute;
	
	
	
}
.anasayf{
	border-radius: 25px;
	padding-top:10px;
	margin-left:5px;
	



}
.mahalleler{
	padding-top:20px;
	margin-left:5px;
	
}
.harita{
	padding-top:20px;
	margin-left:5px;
}
.bune{
	padding-top:20px;
}
.bas{
	background:#000;
	width:1500px;
	height:40px;
    float:left;
    position:absolute;
}
.bas #genc{
	margin-left:1300px;
	position:absolute;

}
.bas span{
	color:white;
    padding-top:10px;
	padding-left:600px;
	font-family:georgia;
	font-size:20px;
}
.content{
	width:1515px;
	height:1000px;


}
.content .bune{
	margin-left:500px;
	padding-top:100px;
}
.mah{
	margin-left:900px;
	padding-top:80px;	

}
.mah label{
	border-style:inset;
	border-color:grey;
}
.parksay{
	margin-left:900px;
	padding-top:200px;
	position:absolute;
	height:0px;

}
.parksay label{
		border-style:inset;
		border-color:purple;
}
#result{
	margin-top:500px;
	margin-left:150px;
	background:#fff;
	width:400px;
	height:250px;
    text-align: center;
    border-style:ridge;
	position:absolute;


}
.eksik {
	margin-left:150px;
	display:flex;
	margin-top:800px;
	position:absolute;
}
#d4a{
	margin-left:600px;
	margin-top:750px;
	position:absolute;
}
.yıl{
	margin-top:500px;
	margin-left:900px;
	background:#912cee;
	color:white;
	width:400px;
	height:250px;
    text-align: center;
	border-style: ridge;
	position:absolute;
}
.deneme{
	margin-left:900px;
	margin-top:80px;
}
#buton{
	margin-top:300px;
	margin-left:50px;
	solid:black;
	background:white;
}

.deneme span{
	margin-top:300px;
	border-style:inset;
	border-color:white;
	
}
#get{
	solid:#4CAF50;
	background:white;

}


</style>
<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ana()
{
    pencereAc("anasayfa.php");
}
</script>
<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function cık()
{
    pencereAc("yönetici.php");
}
</script>
<script type="text/javascript">

function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ekle()
{
    pencereAc("yeni.php");
}
</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function pencereAcTest()
{
    pencereAc("ürün.php");
}
</script>
<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function sp()
{
    pencereAc("siparisekle.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function st()
{
    pencereAc("stok.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function siparis()
{
    pencereAc("siparis.php");
}

</script>
<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function tarih()
{
    pencereAc("tarih.php");
}

</script>

<script>
$("#d4a").click(function(){
   $("#db4b").animate({
      height:'toggle'
   });
 });
</script>








</head>

<body>
    <div id="piechart" style="position:absolute; width:700px; height:400px; margin-left:800px; margin-top:200px; chartArea.backgroundColor:red;"> </div>
<div class="üst"> <br><center> <font size=6 color=white face='Cursive'> GÜNEY OTO YIKAMA </font></center>



</div>
<div class="sidebar"> 
        <div class="anasayf">
	    <button id="an" onClick="ekle()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "> VERİ EKLEME</button>
	    </div>
		<div class="mahalleler"> 
		
		<input type="button"  value="OTOYIKAMA / OTOPARK" onClick="pencereAcTest()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "/>
		</div>
		<div class="harita">
		<input type="submit" value="ÇALIŞANLAR" onClick="siparis()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;  "/></div>
		<div class="harita">
		<input type="submit" value="ARAÇ SAYISI" onClick="st()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;"/></div>
		<div class="harita">
		<input type="submit" value="YIKANAN ARAÇLAR" onClick="sp()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "/></div>
		<div class="harita">
		<input type="submit" value="ANASAYFA" onClick="ana()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;"/></div>
		<div class="harita">
		<input type="submit" value="ÇIKIŞ" onClick="cık()" style="width:240px; height:50px; color:black; border-style:none; background-color:#B71C1C;border-radius: 15px;"/></div>
		
		<div class=""></div>
		
		
		
</div>
<div class="content">
<div class="getir">	
<table border="0" width='1250px' height='50px' align="right"> 
<tr>
<td> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Bayraklı',     3],
          ['Konak',      2],
          ['Karşıyaka',  8],
          ['Bornova', 2],
          ['Karabağlar',    2],
		  ['Buca',    3]
        ]);

        var options = {
          title: 'Şubelere Göre Yıkanan Araç Sayısı',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div id="piechart_3d" style="width: 625px; height: 300px;"></div>
</td>
<td>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(b);

      function b() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Bayraklı',     2],
          ['Konak',      4],
          ['Karşıyaka',  3],
          ['Bornova', 2],
          ['Karabağlar',    5],
		  ['Buca',    3]
        ]);

        var ac = {
          title: 'Şubelere Göre Çalışan Sayısı'
        };

        var ab = new google.visualization.PieChart(document.getElementById('piechartt'));

        ab.draw(data, ac);
      }
    </script>
  </head>
  <body>
    <div id="piechartt" style="width: 625px; height: 300px;"></div>

</td>
</tr>
<tr>
<td colspan="2" align="center"> <br> <br>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', '2020', '2021'],
          ['Bayraklı',  55125,      58264],
          ['Konak',  48124,      59326],
          ['Karşıyaka',  40123,       50632],
          ['Bornova',  53856,      64963],
		  ['Karabağlar',  49852,      62965],
		  ['Buca',  61365,      72536]
        ]);

        var options = {
          title: 'Şubelerin Olduğu İlçelerdeki Araç Sayısı',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <div id="curve_chart" style="width: 1000px; height: 300px"></div>
</td>
</tr>
</table>
<table border="0" width='1300px' height='70px' align="right"> 

<td align=center colspan="4"> <font size=4 color=red face='Cursive'> <b>  İlçelere Göre Otoyıkama ve Otopark Sayısı </b></td> 
</table>


<table border="0" width='500px' height='70px' align="right">

<td align=center colspan="2"> <font size=4 color=blue face='Cursive'> <b> <i> Otopark &nbsp;&nbsp; </i></td>


<?php 
$baglanti=mysqli_connect("localhost","root","","kds");
$baglanti->set_charset("utf8");
$sql="SELECT ilce.ilce_ad, COUNT(otopark.ilce_id) AS sayi
FROM ilce,otopark
WHERE ilce.ilce_id=otopark.ilce_id
GROUP BY ilce.ilce_id";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["ilce_ad"]."</td>";
	echo "<td align='left' bgcolor=#C5CAE9>"."<font face='Cursive'>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$sonuc["sayi"]."</td>";
	echo '</tr>';
	
	
	
	

 }

?>
</table>







<table border="0" width='500px' height='70px' align="center">
<td align=center colspan="2"> <font size=4 color=blue face='Cursive'> <b>  <i> Otoyıkama  &nbsp;&nbsp;</i> </td>


<?php 
$baglanti=mysqli_connect("localhost","root","","kds");
$baglanti->set_charset("utf8");
$sql="SELECT ilce.ilce_ad, COUNT(sube.ilce_id) AS sayi
FROM ilce,sube
WHERE ilce.ilce_id=sube.ilce_id
GROUP BY ilce.ilce_id";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["ilce_ad"]."</td>";
	echo "<td align='left' bgcolor=#C5CAE9>"."<font face='Cursive'>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$sonuc["sayi"]."</td>";
	echo '</tr>';
	
	
	
	

 }

?>
</table>










	   
	   
	   
	   </div>


</body>
</table>



</html>


