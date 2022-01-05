
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
    height: 1100px;
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
	height:1100px;
	background:#CFD8DC;


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
<br>
<br>

<table border="0" width='800px' height='50px' align="center"> 
<td align=center colspan="4"> <font size=4 color=red face='Cursive'> <b> ARAÇ SAYISI ARTIŞ ORANI</td>
	<tr>
		<th bgcolor="pink"><i><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İlçe Ad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></th>
		<th bgcolor="pink"><i><font color="white">&nbsp;&nbsp;&nbsp;2020 Araç Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="pink"><i><font color="white">2021 Araç Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="pink"><i><font color="white">Artış Oranı</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","kds");
$baglanti->set_charset("utf8");
$sql="SELECT ilce.ilce_ad, arac_sayi.2020_arac_sayisi, arac_sayi.mevcut_arac_sayisi, ROUND(((arac_sayi.mevcut_arac_sayisi-arac_sayi.2020_arac_sayisi)/arac_sayi.2020_arac_sayisi*100),1) AS oran FROM ilce,arac_sayi WHERE ilce.ilce_id=arac_sayi.ilce_id ORDER BY oran DESC LIMIT 10";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["ilce_ad"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["2020_arac_sayisi"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["mevcut_arac_sayisi"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>"."%"."<font color=red>".$sonuc["oran"]."</td>";
	
	echo '</tr>';
	
	
	
	

 }

?>
<table border="0" width='1160px' height='50px' align="right"> 
<tr>
<td> <br> <br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['İlçe', '2020', '2021'],
          ['Çiğli', 27964, 39256],
          ['Urla', 9926, 12687],
          ['Karabağlar', 49852, 62965],
          ['Karşıyaka', 40123, 50632],
		  ['Konak', 48124, 59326],
          ['Bornova', 53856, 64963],
          ['Menderes', 24962, 29632],
          ['Buca', 61365, 72536],
		  ['Menemen', 41265, 48678],
          ['Torbalı', 27965, 32654]
		  
        ]);

        var options = {
          chart: {

          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 900px; height: 300px;"></div>
</td>


		
		
		
		
		
		
	
	
	   </div>


</body>
</table>



</html>


