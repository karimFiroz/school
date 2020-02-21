<?php include('include/header.php');?>
<?php 
$fonts="vardana";
$bgcolor="#0BB7C0";
$fontcolor="#ffffff";
?>


<!DOCTYPE html>
<html>
<head>
<title>MYSQL Queries</title>
<style>
body{background:#dddddd;}
.tap{background:#E8E3E7;}
p{font-size:1.25em;}
</style>
</head>
<body>
<section>

 <div class="section-top">	
 <div>
 <h1>Top students.</h1>
 <p>
 <h3>These are first girls of class ten 2019.</h3>
 </p>
 </div>
 <div class="container"><!---container start--->
 <div class="third-content"><!---3rd content start--->
		  <div Class="content-content"><!---content-content start--->
					  
					<img src="images/sc01.jpg"/>
					 <h3>Safia Islam Tusi</h3>
					 <p align="center">(Group Science)
					 </p>
			</div><!---content-content end--->
					 
			<div Class="content-content"><!---content-content start--->
					  
					 <img src="images/ar01.jpg"/>
					 <h3>Israt Jahan</h3>
					 <p align="center">(Group Humanities)
					 </p>
			</div><!---content-content end--->
					 
			<div Class="content-content"><!---content-content start--->
					  
					 <img src="images/com01.jpg"/>
					 <h3>Nusrat Jahan Moumita</h3>
					 <p align="center">(Group Business)
					 </p>
			</div><!---content-content end--->
 </div><!---end of 3rd content--->
 </div><!---End of container--->
 

 

 </section>
<div style="padding-left:75px;padding-right:75px;color:indigo;">

<div  align="center">
 <div id="our_clints">

<ul id="clints">

		<li><a href="#"><img src="images/sc01.jpg" alt="" />Safia Islam Tusi(sc01)</a></li>
		<li><a href="#"><img src="images/sc02.jpg" alt="" />Rowshon Ara(sc02)</a></li>
		<li><a href="#"><img src="images/sc03.jpg" alt="" />Farida Yesmin Mithe(sc03)</a></li>
		<li><a href="#"><img src="images/sc04.jpg" alt="" />Tanjina Akter(sc04)</a></li>
		<li><a href="#"><img src="images/sc05.jpg" alt="" />Shamima Sultana(sc05)</a></li>
		<li><a href="#"><img src="images/sc06.jpg" alt="" />Sanjana Hossain(sc06)</a></li>
		<li><a href="#"><img src="images/sc07.jpg" alt="" />Chaity Nath(sc07)</a></li>
		<li><a href="#"><img src="images/sc08.jpg" alt="" />Anjoli Dash Gupta(sc08)</a></li>
		<li><a href="#"><img src="images/sc09.jpg" alt="" />Jannatul Ferdous(sc09)</a></li>
		<li><a href="#"><img src="images/sc10.jpg" alt="" />Meher Afroz(sc10)</a></li>

		<li><a href="#"><img src="images/sc11.jpg" alt="" />Mahdia Manar Islam Masura(sc11)</a></li>
		<li><a href="#"><img src="images/sc12.jpg" alt="" />Sumaiya Akter Shifa(sc12)</a></li>
		<li><a href="#"><img src="images/sc13.jpg" alt="" />Nowrin Jahan(sc13)</a></li>
		<li><a href="#"><img src="images/sc14.jpg" alt="" />Muntahir Tahsin(sc14)</a></li>
		<li><a href="#"><img src="images/sc15.jpg" alt="" />BiBi Mariam(sc15)</a></li>
		<li><a href="#"><img src="images/sc16.jpg" alt="" />Tahniat Tarannum Ikfah(sc16)</a></li>
		<li><a href="#"><img src="images/sc17.jpg" alt="" />Fatema(sc17)</a></li>
		<li><a href="#"><img src="images/sc18.jpg" alt="" />Rima Akter(sc18)</a></li>
		<li><a href="#"><img src="images/sc19.jpg" alt="" />Sharmin Sultana Urmi(sc19)</a></li>
		<li><a href="#"><img src="images/sc20.jpg" alt="" />Rabeya(sc20)</a></li>

		<li><a href="#"><img src="images/sc21.jpg" alt="" />Most. Jannatul Nahima(sc21)</a></li>
		<li><a href="#"><img src="images/sc22.jpg" alt="" />Shekh Nadia Sultana Sorna(sc22)</a></li>
		<li><a href="#"><img src="images/sc23.jpg" alt="" />Jannatul Naima Nabila(sc23)</a></li>


		<li><a href="#"><img src="images/ar01.jpg" alt="" />Israt Jahan(ar01)</a></li>
		<li><a href="#"><img src="images/ar02.jpg" alt=""/>(ar02)</a></li>
		<li><a href="#"><img src="images/ar03.jpg" alt="" />Jannatul Ferdous(ar03)</a></li>
		<li><a href="#"><img src="images/ar04.jpg" alt="" />Nannatul Nayem(ar04)</a></li>
		<li><a href="#"><img src="images/ar05.jpg" alt="" />Jarin Tasnim(ar05)</a></li>
		<li><a href="#"><img src="images/ar06.jpg" alt="" />Sultana Nusrat Jahan(ar06)</a></li>
		<li><a href="#"><img src="images/ar07.jpg" alt="" />Mahmuda Akter(ar07)</a></li>
		<li><a href="#"><img src="images/ar08.jpg" alt="" />Sharmin Akter(ar08)</a></li>
		<li><a href="#"><img src="images/ar09.jpg" alt="" />Sujona Khanom Sayma(ar09)</a></li>
		<li><a href="#"><img src="images/ar10.jpg" alt="" />Nusrat Jahan Jinnat(ar10)</a></li>

		<li><a href="#"><img src="images/ar11.jpg" alt="" />Fahmida Akter(ar11)</a></li>
		<li><a href="#"><img src="images/ar12.jpg" alt="" />Miftaul Jannat Maya(ar12)</a></li>
		<li><a href="#"><img src="images/ar13.jpg" alt="" />Sadia Jahan Sima(ar13)</a></li>
		<li><a href="#"><img src="images/ar14.jpg" alt="" />Rebeka Sultana Anika(ar14)</a></li>
		<li><a href="#"><img src="images/ar15.jpg" alt="" />Afroza Sultana Ema(ar15)</a></li>
		<li><a href="#"><img src="images/ar16.jpg" alt="" />Tanmin Akter Mitu(ar16)</a></li>
		<li><a href="#"><img src="images/ar17.jpg" alt="" />Ganga Rani Dash(ar17)</a></li>
		<li><a href="#"><img src="images/ar18.jpg" alt="" />Sharmin Akter(ar18)</a></li>
		<li><a href="#"><img src="images/ar19.jpg" alt="" />Israt Jahan Juine(ar19)</a></li>
		<li><a href="#"><img src="images/ar20.jpg" alt="" />Jesmin Akter(ar20)</a></li>
		<li><a href="#"><img src="images/ar21.jpg" alt="" />Marjahan Akter(ar21)</a></li>
		<li><a href="#"><img src="images/ar22.jpg" alt="" />Farjana Akter(ar22)</a></li>
		<li><a href="#"><img src="images/ar23.jpg" alt="" />Shanta Akter(ar23)</a></li>
		<li><a href="#"><img src="images/ar24.jpg" alt="" />Mukta Akter(ar24)</a></li>
		<li><a href="#"><img src="images/ar25.jpg" alt="" />Fahima Akter(ar25)</a></li>
		<li><a href="#"><img src="images/ar26.jpg" alt="" />Fatems Akter(ar26)</a></li>
		<li><a href="#"><img src="images/ar27.jpg" alt="" />Mou Rani Dash(ar27)</a></li>
		<li><a href="#"><img src="images/ar28.jpg" alt="" />Sumaiya Akter Khadiza(ar28)</a></li>
		<li><a href="#"><img src="images/ar29.jpg" alt="" />Sayma Jahan(ar29)</a></li>
		<li><a href="#"><img src="images/ar30.jpg" alt="" />Noorjahan Akter Rumi(ar30)</a></li>
		<li><a href="#"><img src="images/ar31.jpg" alt="" />Meherun Nesa Rupa(ar31)</a></li>
		<li><a href="#"><img src="images/ar32.jpg" alt="" />Sayma Akter(ar32)</a></li>
		<li><a href="#"><img src="images/ar33.jpg" alt="" />Fatematul Opi(ar33)</a></li>
		<li><a href="#"><img src="images/ar34.jpg" alt="" />Sumaiya Islam(ar34)</a></li>
		<li><a href="#"><img src="images/ar35.jpg" alt="" />Mosammat Saba(ar35)</a></li>
		<li><a href="#"><img src="images/ar36.jpg" alt="" />Mohima Akter(ar36)</a></li>
		<li><a href="#"><img src="images/ar37.jpg" alt="" />t(ar37)</a></li>
		<li><a href="#"><img src="images/ar38.jpg" alt="" />Jannatul Mauwa Tajrin(ar38)</a></li>
		<li><a href="#"><img src="images/ar39.jpg" alt="" />Ayesha Akter(ar39)</a></li>
		<li><a href="#"><img src="images/ar40.jpg" alt="" />Anika Akter(ar40)</a></li>
		<li><a href="#"><img src="images/ar41.jpg" alt="" />Sawda Binte Jafor(ar41)</a></li>
		<li><a href="#"><img src="images/ar42.jpg" alt="" />Mobashsera Akter(ar42)</a></li>
		<li><a href="#"><img src="images/ar43.jpg" alt="" />Sanju Akter(ar43)</a></li>


		<li><a href="#"><img src="images/com01.jpg" alt="" />Nusrat Jahan Moumita(comA01)</a></li>
		<li><a href="#"><img src="images/com02.jpg" alt="" />Rabeya Bhuiyan Reem(comA02)</a></li>
		<li><a href="#"><img src="images/com03.jpg" alt="" />Sayma Akter(comA03)</a></li>
		<li><a href="#"><img src="images/com04.jpg" alt="" />Mimita Akter(comA04)</a></li>
		<li><a href="#"><img src="images/com05.jpg" alt="" />Krisna Sen(comA05)</a></li>
		<li><a href="#"><img src="images/com06.jpg" alt="" />Samia Tabassum Saba(comA06)</a></li>
		<li><a href="#"><img src="images/com07.jpg" alt="" />Umme Hafsa Tanim(comB07)</a></li>
		<li><a href="#"><img src="images/com08.jpg" alt="" />Sadia Islam(comA08)</a></li>
		<li><a href="#"><img src="images/com09.jpg" alt="" />Sumaiya Akter(comA09)</a></li>
		<li><a href="#"><img src="images/com10.jpg" alt="" />Nadia Akter Putul(comA10)</a></li>

		<li><a href="#"><img src="images/com11.jpg" alt="" />Nazia Monim(comA11)</a></li>
		<li><a href="#"><img src="images/com12.jpg" alt="" />Jannatul Ferdous Shimla(comA12)</a></li>
		<li><a href="#"><img src="images/com13.jpg" alt="" />Ayesha Khatun(comA13)</a></li>
		<li><a href="#"><img src="images/com14.jpg" alt="" />Fahima Akter(comA14)</a></li>
		<li><a href="#"><img src="images/com15.jpg" alt="" />Farhana Akter(comA15)</a></li>
		<li><a href="#"><img src="images/com16.jpg" alt="" />Marjana Akter(comA16)</a></li>
		<li><a href="#"><img src="images/com17.jpg" alt="" />Meherun Nesa Mumu(comA17)</a></li>
		<li><a href="#"><img src="images/com18.jpg" alt="" />Fahmida Akter(comA18)</a></li>
		<li><a href="#"><img src="images/com19.jpg" alt="" />Rehnuma Akter(comA19)</a></li>
		<li><a href="#"><img src="images/com20.jpg" alt="" />Farjana Akter(comB20)</a></li>
		<li><a href="#"><img src="images/com21.jpg" alt="" />Siratun Noor Rozi(comA21)</a></li>
		<li><a href="#"><img src="images/com22.jpg" alt="" />Sayma Afroz(comA22)</a></li>
		<li><a href="#"><img src="images/com23.jpg" alt="" />Mehezabin Meherin Nijhum(comA23)</a></li>
		<li><a href="#"><img src="images/com24.jpg" alt="" />Umme Habiba Sokhi(comA24)</a></li>
		<li><a href="#"><img src="images/com25.jpg" alt="" />Umme Salma(comA25)</a></li>
		<li><a href="#"><img src="images/com26.jpg" alt="" />Noorjahan Akter(comA26)</a></li>
		<li><a href="#"><img src="images/com27.jpg" alt="" />Nusrat Jahan Imu(comA27)</a></li>
		<li><a href="#"><img src="images/com28.jpg" alt="" />Munni Akter(comA28)</a></li>
		<li><a href="#"><img src="images/com29.jpg" alt="" />Israt Jahan(comA29)</a></li>
		<li><a href="#"><img src="images/com30.jpg" alt="" />Israt Jahan Dola(comA30)</a></li>
		<li><a href="#"><img src="images/com31.jpg" alt="" />Afrin Akter Santa(comA31)</a></li>
		<li><a href="#"><img src="images/com32.jpg" alt="" />Rina Akter(comA32)</a></li>
		<li><a href="#"><img src="images/com33.jpg" alt="" />Khadiza Akter(comA33)</a></li>
		<li><a href="#"><img src="images/com34.jpg" alt="" />Jahanara Akter(comA34)</a></li>
		<li><a href="#"><img src="images/com35.jpg" alt="" />Farjana Akter(comA35)</a></li>
		<li><a href="#"><img src="images/com36.jpg" alt="" />Fatema Akter(comA36)</a></li>
		<li><a href="#"><img src="images/com37.jpg" alt="" />Safina Akter(comA37)</a></li>
		<li><a href="#"><img src="images/com38.jpg" alt="" />Meherunnesa ima(comA38)</a></li>
		<li><a href="#"><img src="images/com39.jpg" alt="" />Jannatul Ferdous Jannat(comA39)</a></li>
		<li><a href="#"><img src="images/com40.jpg" alt="" />Israt Jahan Ima(comA40)</a></li>
		<li><a href="#"><img src="images/com41.jpg" alt="" />Reshmi Akter(comA41)</a></li>
		<li><a href="#"><img src="images/com42.jpg" alt="" />Asma Ahmed(comA42)</a></li>
		<li><a href="#"><img src="images/com43.jpg" alt="" />Sakila Jerin(comA43)</a></li>
		<li><a href="#"><img src="images/com44.jpg" alt="" />Saheda Sultana(comA44)</a></li>
		<li><a href="#"><img src="images/com45.jpg" alt="" />Umme Salma(comA45)</a></li>
		<li><a href="#"><img src="images/com46.jpg" alt="" />Nasrin Sultana(comA46)</a></li>
		<li><a href="#"><img src="images/com47.jpg" alt="" />Sumaiya Akter(comA47)</a></li>
		<li><a href="#"><img src="images/com48.jpg" alt="" />Nasrin Sultana Irin(comA48)</a></li>
		<li><a href="#"><img src="images/com49.jpg" alt="" />Priya Moni Dash(comA49)</a></li>
		<li><a href="#"><img src="images/com50.jpg" alt="" />Priti Rani Dash(comA50)</a></li>
		<li><a href="#"><img src="images/com51.jpg" alt="" />Nushrat Jahan Nipa(comA51)</a></li>
		<li><a href="#"><img src="images/com52.jpg" alt="" />Jafrin Akter(comA52)</a></li>
		<li><a href="#"><img src="images/com53.jpg" alt="" />Jannatul Ferdous Suborna(comA53)</a></li>
		<li><a href="#"><img src="images/com54.jpg" alt="" />Sadia Sultana(comA54)</a></li>
		<li><a href="#"><img src="images/com55.jpg" alt="" />Afsana Akter(comA55)</a></li>
		<li><a href="#"><img src="images/com56.jpg" alt="" />Masuma Kobir Maria(comA56)</a></li>
		<li><a href="#"><img src="images/com57.jpg" alt="" />Rabeya Sultana(comA57)</a></li>
		<li><a href="#"><img src="images/com58.jpg" alt="" />Maksuda Akter(comA58)</a></li>
		<li><a href="#"><img src="images/com59.jpg" alt="" />Pakhi Akter(comA59)</a></li>
		<li><a href="#"><img src="images/com60.jpg" alt="" />Pushpita Dash(comA60)</a></li>
		<li><a href="#"><img src="images/com61.jpg" alt="" />Sima Akter(comA61)</a></li>
		<li><a href="#"><img src="images/com62.jpg" alt="" />Jannatul Abida(comA62)</a></li>
		<li><a href="#"><img src="images/com63.jpg" alt="" />Fatema Akter(comA63)</a></li>
		<li><a href="#"><img src="images/com64.jpg" alt="" />Afrin Sultana(comA64)</a></li>
		<li><a href="#"><img src="images/com65.jpg" alt="" />Jakia Akter Jarin(comA65)</a></li>
		<li><a href="#"><img src="images/com66.jpg" alt="" />Nusrat Jahan(comA66)</a></li>
		<li><a href="#"><img src="images/com67.jpg" alt="" />Shanta Akter(comA67)</a></li>
		<li><a href="#"><img src="images/com68.jpg" alt="" />Farana Akter Sumaiya(comB68)</a></li>
		<li><a href="#"><img src="images/com69.jpg" alt="" />Julekha Akter(comA69)</a></li>
		<li><a href="#"><img src="images/com70.jpg" alt="" /></a>Sharmin Akter(comA70)</li>
		<li><a href="#"><img src="images/com71.jpg" alt="" /></a>Sharifa Akter(comA70)</li>
		<li><a href="#"><img src="images/com72.jpg" alt="" /></a>Mariam Siraj Suity(comA70)</li>
		<li><a href="#"><img src="images/com73.jpg" alt="" /></a>Soma Akter(comA70)</li>
		<li><a href="#"><img src="images/com74.jpg" alt="" /></a>Soma Akter(comA70)</li>


</ul>

</div>

</div>
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
});
</script>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript" src="js/coin-slider.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
		<script src="js/coin-slider.js"></script>
	  	<script src="js/coin-slider.min.js"></script>
	  	<script src="js/jquery.js"></script>
	  	<script src="js/zen_codemirror.min.js"></script>
	  	<script src="js/owl.carousel.js"></script>
		<script src="js/owl.autoplay.js"></script>
	<script src="js/owl.carousel.min.js"></script>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.li-scroller.1.0.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
  <script src="js/main.js"></script>
<script src="js/custom.js"></script>


   <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/main.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
});
</script>
</body>
</html>