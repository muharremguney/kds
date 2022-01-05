
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

<table border="0" width='800px' height='50px' align="center"> 
<td align=center colspan="5"> <font size=4 color=blue face='Cursive'> <b>  OTOYIKAMA BİLGİ</b></td>
<br>
	<tr>
		<th bgcolor="#E6EE9C"><i>Otoyıkama İd</th>
		<th bgcolor="#E6EE9C"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İlçe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#E6EE9C"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Otoyıkama Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#E6EE9C"><i>Çalışan Sayısı</th>
		<th bgcolor="#E6EE9C"><i>Araç Kapasitesi</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","kds");
$baglanti->set_charset("utf8");
//echo "<table border='1' width='900px' height='600px' align='center'>";
$sql="SELECT  sube.sube_id,sube.sube_ad,ilce.ilce_ad,COUNT(calisan.calisan_tc) AS calisan, sube_kapasite.sube_kapasitesi
FROM ilce,sube,calisan,sube_kapasite
WHERE ilce.ilce_id = sube.ilce_id AND sube.sube_id = calisan.sube_id AND sube.sube_id = sube_kapasite.sube_id
GROUP BY sube.sube_id";
$sorgu=mysqli_query($baglanti,$sql);
$a="TL";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["sube_id"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["ilce_ad"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["sube_ad"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["calisan"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["sube_kapasitesi"]."</td>";
	
	echo '</tr>';
	
	
	
	

 }

?>


<table border="0" width='800px' height='50px' align="center"> 
<td align=center colspan="5"> <font size=4 color=blue face='Cursive'> <b>  OTOPARK BİLGİ</b></td>
<br>
	<tr>
		<th bgcolor="#E6EE9C"><i>Otopark İd</th>
		<th bgcolor="#E6EE9C"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Otopark Adı &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#E6EE9C"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İlçe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#E6EE9C"><i>Araç Kapasitesi</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","kds");
$baglanti->set_charset("utf8");

$sql="SELECT otopark.otopark_id, otopark.otopark_ad,ilce.ilce_ad,otopark_kapasite.otopark_kapasitesi
FROM otopark,ilce,otopark_kapasite
WHERE otopark.ilce_id=ilce.ilce_id AND otopark.otopark_id = otopark_kapasite.otopark_id";
$sorgu=mysqli_query($baglanti,$sql);
$a="TL";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["otopark_id"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["otopark_ad"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["ilce_ad"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font face='Cursive'>".$sonuc["otopark_kapasitesi"]."</td>";	
	echo '</tr>';
	
	
	
	

 }

?>



	   </div>


</body>
</table>



</html>


