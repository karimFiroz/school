
	<?php include('include/header.php');?>
<?php 
$fonts="vardana";
$bgcolor="#0BB7C0";
$fontcolor="#ffffff";
?>


<!DOCTYPE html>
<html>
<head>
<title>javascript tutorial</title>

</head>
<body>
<div style="padding-left:200px;color:indigo;">

<h1>Javascript Learning</h1>
<div class="tap">
<p>
<!-----------------------------------------------------------------
//Program start here!

 -------------------------------------------------
  <script>
  alert(420);//To show integers in popup dialogue box! .
  </script>
  ---------------------------------------------------------------
 
  <script>
  alert("Md.Abdul.Karim");
  </script>
  --------------------------------------------------------
  
   //To show string in popup dialogue box!    
  <script>
  
  alert('Md.Abdul.Karim'); 
  </script>
---------------------------------------------------------
  //To show string in popup dialogue box!    
    <script>
	alert('20+20'); 
  </script>
  ----------------------------------------------------------------
  
   //Arithmatic Calculation
  
   <script>
	alert(20+20); 
  </script>

  <script>
	alert(25-20); 
  </script>

   <script>
	alert(25*20); 
  </script>
 
     <script>
	alert(21/3); 
  </script>

    <script>
	alert(10%3); 
  </script>
 
--------------------------------------------------------------
     <script>
	document.write("Hello Java Script"); 
  </script>
    
	--------------------------------------------------------------------
	

	   <script>
	document.write("Hello Java Script"); 
  </script>
	
	<h1>Md. Abdul. Karim</h1>
	
	
	--------------------------------------------------------------
	
		<h1>Md. Abdul. Karim</h1>
	<script>
	document.write("Hello Java Script"); 
  </script>
	

	-------------------------------------------------------------------
			<h1 id="lekha"></h1>
	<script>
	document.getElementById('lekha').innerHTML=40; 
  </script>
---------------------------------------------------------------------
				<h1 id="lekha"></h1>
	<script>
	document.getElementById('lekha').innerHTML=40+50; 
  </script>
------------------------------------------------------------------------
  				<h1 id="lekha"></h1>
	<script>
	document.getElementById('lekha').innerHTML=40+50; 
  </script>
 
  				<h1 id="lekha"></h1>
	<script>
	document.getElementById('lekha').innerHTML="My name is Md.Abdul Karim"; 
  </script>
	---------------------------------------------------------------------
		
				<h3 id="lekha"></h3>
				<p id="Dhaka"</p>
	<script>
	document.getElementById('lekha').innerHTML='My name is Md.Abdul Karim'; //স্ক্রিপ্ট এর বাইরের  এইচ টি এম এল এর আইডি কে কল করে স্ক্রিপ্ট মধ্য থেকে বাইরে লিখা যায়।
	document.getElementById('Dhaka').innerHTML='Phone: 01818830761'; 
  </script>
  --------------------------------------------------------------------
		<h3 id="lekha"></h3>
				<p id="Dheka"</p>
					
		
	<script>
	var alu = 'potol';
	document.getElementById('lekha').innerHTML=alu; //ভেরিএবল অবশ্যই স্ক্রিপ্ট এর মধ্যে রাখতে হবে স্ক্রিপ্ট এর বাইরে এইচ টি এম এল এ তা দেখাবে।
  </script>
  -----------------------------------------------------------------
  			<h3 id="lekha"></h3>
				<p id="dhekha"</p>
			
	<script>
	var alu = 'potol';
	var bazarbag='Alu,potol,jhinga,jhol';
	
	
	document.getElementById('lekha').innerHTML=alu; //ভেরিএবল অবশ্যই স্ক্রিপ্ট এর মধ্যে রাখতে হবে স্ক্রিপ্ট এর বাইরে এইচ টি এম এল এ তা দেখাবে।
	document.getElementById('dhekha').innerHTML=bazarbag; //ভেরিএবল অবশ্যই স্ক্রিপ্ট এর মধ্যে রাখতে হবে স্ক্রিপ্ট এর বাইরে এইচ টি এম এল এ তা দেখাবে।
  </script>
  --------------------------------------------------------
				<h3 id="lekha"></h3>
				<p id="dhekha"</p>
			
	<script>
	var alu = ' potol';
	var bazarbag=' Alu,potol,jhinga,jhol';
	
	
	document.getElementById('lekha').innerHTML=bazarbag+alu; //দুই স্ট্রিং যোগ করা সম্ভব নয় তাই পাশাপাশি  দেখাবে।
	----------------------------------------------------------------
				<h3 id="lekha"></h3>
				<p id="dhekha"</p>
			
	<script>
	var potol=20;
	var alu = 30;
	var bazarbag=' Alu,potol,jhinga,jhol';
	
	
	document.getElementById('dhekha').innerHTML=alu+potol+bazarbag; //সামনের দুই ইন্টিজার যোগ করবে এবং স্ট্রিং যোগ করা সম্ভব নয় তাই পাশাপাশি  দেখাবে।

  </script>
  ---------------------------------------------------------------------------
  				<h3 id="lekha"></h3>
				<p id="dhekha"</p>
			
	<script>
	var potol=20;
	var alu = 30;
	var bazarbag=' Alu,potol,jhinga,jhol ';
	
	
	document.getElementById('lekha').innerHTML=potol+bazarbag+alu; // স্ট্রিং যোগ করা সম্ভব নয় তাই পাশাপাশি  দেখাবে।

  </script>
  --------------------------------------------------------------------------------------
  			<h3 id="lekha"></h3>
				<p id="dhekha"</p>
			
	<script>
	var potol=20;
	var alu = 30;
	var bazarbag=' Alu,potol,jhinga,jhol ';
	
	
	document.getElementById('dhekha').innerHTML=bazarbag+alu+potol; // স্ট্রিং যোগ করা সম্ভব নয় তাই পাশাপাশি  দেখাবে।

  </script>
  --------------------------------------------------------------------
  //array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag=['boi','khata','kolom','pencil',20];

	
	
	document.getElementById('lekha').innerHTML=bag; // শুখু ব্যাগ কল করলে ব্যাগের মধ্যে যা আছে দেখাবে

  </script>
  ---------------------------------------------------------------------------
  //array

				<h3 id="lekha"></h3>
				<p id="dhekha"</p>
			
	<script>
	var bag=['boi','khata','kolom','pencil',20];

	
	
	document.getElementById('dhekha').innerHTML=bag[0]; //index call [0] result: boi

  </script>
  -----------------------------------------------------------------
  //array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag=[100,200,300,400,500];

	
	
	document.getElementById('lekha').innerHTML=bag[0]+bag[4]; // result:600

  </script>
  ------------------------------------------------------------------
  //array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag=[100,200,300,400,500];

	
	
	document.getElementById('lekha').innerHTML=bag[4]-bag[1]; // result:300

  </script>
  -----------------------------------------------------------------
  
//array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag=[100,200,300,400,500];

	
	
	document.getElementById('lekha').innerHTML=bag[4]*bag[1]; // result;100000

  </script>
  -------------------------------------------------------------------
  //array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag=[100,200,300,400,500];

	
	
	document.getElementById('lekha').innerHTML=bag[4]/bag[1]; // result:2.5

  </script>
  -------------------------------------------------------------
  //array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag=[100,200,300,400,500];

	
	
	document.getElementById('lekha').innerHTML=bag[4]%bag[1]; // result:500 

  </script>
  --------------------------------------------------------------------------------------
  //associative array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag={
		'am':100,
		'jam':200,
		'lichu':300,
		'kola':400,
		'kathal':500
		};
		//কীঃভ্যালু

	
	
	document.getElementById('lekha').innerHTML=bag['am']; // result:100

  </script>
  --------------------------------------------------------------------------------
  //associative array

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>
			
	<script>
	var bag={
		'am':100,
		'jam':200,
		'lichu':300,
		'kola':400,
		'kathal':500
		};

	
	
	document.getElementById('lekha').innerHTML=bag['am']+bag['jam']+bag['lichu']; // result:600

  </script>
  -----------------------------------------------------------
  //Default function:
<script>
  alert(420);
  </script>
  ----------------------------------------------------------
  //Default function:
<script>
  alert("Md.Abdul.Karim");
  </script>
  -------------------------------------------------------------------------
  //Custom function:

<script>
	function amaderFunction(){
		
	
  alert(420);
 
	}
	amaderFunction();
  </script>
  ------------------------------------------------------------------
 //Custom function:

<script>
	function amaderFunction(){
		
	 alert("Md.Abdul.Karim");
 
 
	}
	amaderFunction();
  </script>
  ------------------------------------------------------------------
  //Custom function:
						<h1 id="lekha"></h1>
							<p id="dhekha"</p>

<script>
	function amaderFunction(){
		
	  //array

	var bag=[100,200,300,400,500];

	
	
	document.getElementById('lekha').innerHTML=bag[4]-bag[1]; // result:300

	}
	amaderFunction();
  </script>
  ---------------------------------------------------------------------
  
//Custom function:

				<h2 id="lekha"></h2>
				<p id="dhekha"</p>

<script>
	function amaderFunction(){
		
			var bag={
		'am':100,
		'jam':200,
		'lichu':300,
		'kola':400,
		'kathal':500
		};

	document.getElementById('lekha').innerHTML=bag['am']+bag['jam']+bag['lichu']+bag['kola']+bag['kathal'];//result:1500
	}
	amaderFunction();
  </script>
  --------------------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(kolarDam,id){//আর্গুমেন্ট  ভেলু ফাংশনের ভিতর থেকে অথবা কল থেকে পাবে এবং ইনার এইচ টি এম এল এ তা সর্বরাহ করবে।
		//kolarDam is a variable সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে
	var id='pora';
	var kolarDam='Amar sonar bangla ami tomay valobasi';
	
	document.getElementById(id).innerHTML=kolarDam; // আর্গুমেন্ট থেকে ভেরিএবল ও আইডি অর্ডার পাবে এবং ইনার এইচ টি এম এল তা প্রিন্ট করবে বাহিরের এইচ টি এম এল এ

	}
	amaderFunction();//ফাংশন কল করায় value ফাংশনের ভিতর থেকে আইডি  আইডি কে নিবে এবং কলার দাম স্ট্রিং কে নিবে।দেখাবে ফাংশনের বাহিরে এইচ টি এম এল এ

	
  </script>
  ----------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(id,kolarDam){//আর্গুমেন্ট
		//kolarDam is a variable সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	var id='pora';
	var kolarDam='Amar sonar bangla ami tomay valobasi';
	
	document.getElementById(id).innerHTML=kolarDam; // 

	}
	amaderFunction();//ফাংশন কল করায় value ফাংশনের ভিতর থেকে আইডি  আইডি কে নিবে এবং কলার দাম স্ট্রিং কে নিবে।দেখাবে ফাংশনের বাহিরে এইচ টি এম এল এ

	
  </script>
  ----------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(id,kolarDam){//আর্গুমেন্ট এর ক্রম এবং কলের ক্রম একই হতে হবে।
		//kolarDam is a variable সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction('lekha','Amar sonar bangla ami tomay valo basi');//ফাংশন কল করায় value ফাংশনের ভিতর থেকে আইডি  আইডি কে নিবে এবং কলার দাম স্ট্রিং কে নিবে।দেখাবে ফাংশনের বাহিরে এইচ টি এম এল এ

	
  </script>
  --------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			

<script>
	function amaderFunction(kolarDam){
		//kolarDam is a variable
	
	document.getElementById('lekha').innerHTML=kolarDam; // result:300

	}
	amaderFunction(500);//value
  </script>
  -------------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			

<script>
	function amaderFunction(kolarDam){//ফাংশনের মধ্য লেখা ভারিয়েবল কে আর্গুমেন্ট বলে।
		//kolarDam is a variable
	
	document.getElementById('lekha').innerHTML=kolarDam; // result:300

	}
	amaderFunction(500);//value
	amaderFunction('Firozshah School');//value
	amaderFunction('kolarDam=Moontasir Mahmood');//সর্বনিম্ব value রান হবে বাহিরের এইচ টি এম এল এ
  </script>
  -----------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>			

<script>
	function amaderFunction(kolarDam,id){//আর্গুমেন্ট ইউনিক আইডি ও ইউনিক ভেরিয়েবল ইনার এইচ টি এম এল কে প্রিন্ট করার জন্য অর্ডার / সরবরাহ করবে ---
		//kolarDam is a variable
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction(01818830761,'lekha');//valueপ্রথম প্যারামিটারে ভালু ও দ্বিতীয় প্যারামিটারে আইডি  দিতে হবে।
	
  </script>
  ------------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>			

<script>
	function amaderFunction(kolarDam,id){//আর্গুমেন্ট
		//kolarDam is a variable
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction(01818830761,'lekha');//valueপ্রথম প্যারামিটারে ভালু ও দ্বিতীয় প্যারামিটারে আইডি  দিতে হবে।
	amaderFunction(01818830761,'dekha');//value//উভয় আইডি কাজ করবে
	
  </script>
  ---------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(kolarDam,id){//আর্গুমেন্ট
		//kolarDam is a variable সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction(01818830761,'lekha');//valueপ্রথম প্যারামিটারে ভালু ও দ্বিতীয় প্যারামিটারে আইডি  দিতে হবে।
	amaderFunction(01818830761,'dekha');//value
	amaderFunction(01818830761,'pora');//value//সবগুলো আইডি কাজ করবে 
	
  </script>
  -------------------------------------------------------------
  //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(kolarDam,id){//আর্গুমেন্ট
		//kolarDam is a variable যা সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবেএমন নয়। 	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction(01818830761,'lekha');//value প্রথম প্যারামিটারে ভালু ও দ্বিতীয় প্যারামিটারে আইডি  দিতে হবে।
	amaderFunction("আমার সোনার বাংলা",'dekha');//value আর্গুমেন্ট এর ক্রমে থাকেবে।
	amaderFunction("আমি তোমায় ভালবাসি",'pora');//value//সবগুলো আইডি কাজ করবে
	
  </script>
  -------------------------------------------------------------------
  //Custom function:
		<button onclick="amaderFunction('dekha','kemon acho?')">Click Here</button>//script এর বাহির থেকে কল।		
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(id,kolarDam){//আর্গুমেন্ট
		//kolarDam is a variable যা সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction();//ফাংশন কল করায় value ফাংশনের ভিতর থেকে আইডি  আইডি কে নিবে এবং কলার দাম স্ট্রিং কে নিবে।দেখাবে ফাংশনের বাহিরে এইচ টি এম এল এ
 
	
  </script>
  -----------------------------------------------------------------
    //Custom function:
				
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(id,kolarDam){//আর্গুমেন্ট
		//kolarDam is a variable যা সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	amaderFunction();//ফাংশন কল করায় value ফাংশনের ভিতর থেকে আইডি  আইডি কে নিবে এবং কলার দাম স্ট্রিং কে নিবে।দেখাবে ফাংশনের বাহিরে এইচ টি এম এল এ
 
	
  </script>
 <button onclick="amaderFunction('dekha','kemon acho?')">Click Here</button>//script এর বাহির থেকে কল।
  ------------------------------------------------------------
    //Custom function:
						
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(){//আর্গুমেন্ট
		//kolarDam is a variable সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	var id='pora';
	var kolarDam='Amar sonar bangla ami tomay valobasi';
	
	document.getElementById(id).innerHTML=kolarDam; // 

	}
	amaderFunction();//ফাংশন কল করায় value ফাংশনের ভিতর থেকে আইডি  আইডি কে নিবে এবং কলার দাম স্ট্রিং কে নিবে  এবং প্রিন্ট করবে ফাংশনের বাহিরে এইচ টি এম এল এ

	
  </script>
  --------------------------------------------------------------------
    //Custom function:
				
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(id,kolarDam){//আর্গুমেন্ট
		//kolarDam is a variable যা সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	
 amaderFunction('lekha','kemon acho?');//script এর ভিতর থেকে কল।
	
  </script>
 <button onclick="amaderFunction('pora','kemon acho?')">Click Here</button>//script এর বাহির থেকে কল।
 -------------------------------------------------------------------
   //Custom function:
				
			<h1 id="lekha"></h1>			
			<h3 id="dekha"></h3>
			<p id="pora"></p>

<script>
	function amaderFunction(id,kolarDam){//আর্গুমেন্ট
		//kolarDam is a variable যা সর্বদা বামে থাকবে আইডি সর্বদা ডানে থাকবে এমন নয়।
	
	
	document.getElementById(id).innerHTML=kolarDam; // result:300

	}
	
 amaderFunction('lekha','kemon acho?');//script এর ভিতর থেকে কল।
	
  </script>
 <button onclick="amaderFunction('pora','kemon acho?')">Click Here</button>//script এর বাহির থেকে কল।
 <button onclick="amaderFunction('dekha','kemon acho?')">Click Here</button>//script এর বাহির থেকে কল।
 ---------------------------------------------------------
   //Custom function:
 
		<h1 id="output"></h1>		
			 
<script>
	function milesToKilo(){//আর্গুমেন্ট

	var mile=1;
	 
	
	document.getElementById('output').innerHTML= mile * 1.60934+' kilo Meter';

	}
	
 milesToKilo();
	
  </script>
  -------------------------------------------------------
    //Custom function:
		<h1 id="outputmile"></h1>
		<h1 id="output"></h1>		
			 
<script>
	function milesToKilo(){//আর্গুমেন্ট

	var mile=1;
	 
	
	document.getElementById('outputmile').innerHTML= mile+'Mile'+' =';
	document.getElementById('output').innerHTML= mile * 1.60934+' Kilo Meter'

	}
	
 milesToKilo();
	
  </script>
  -----------------------------------------------------------
    //Custom function:
	
		<h1>
		<span id="mile"></span>
		<span id="output"></span>
		</h1>		
			 

<script>
	function milesToKilo(){//আর্গুমেন্ট

	var mile=1;
	 
	
	document.getElementById('mile').innerHTML= mile+'Mile'+' =';
	document.getElementById('output').innerHTML= mile * 1.60934+' Kilo Meter'

	}
	
 milesToKilo();//কল  করলে এক লাইনে দেখাবে।
	
  </script>
  --------------------------------------------------------------
  		<h1>
		<span id="mile"></span>
		<span id="output"></span>
		</h1>		
			 
<script>
	function milesToKilo(mile){//আর্গুমেন্ট

	document.getElementById('mile').innerHTML= mile+' Mile'+' =';
	document.getElementById('output').innerHTML= mile * 1.60934+' Kilo Meter'

	}
	
 milesToKilo(3);//কল  করলে এক লাইনে দেখাবে।
	
  </script>
  ------------------------------------------------------
    //Custom function:
	
		<h1>
		<span id="dozon"></span>
		<span id="output"></span>
		</h1>		
			 
<script>
	function kolerDam(dozon){//আর্গুমেন্ট

	document.getElementById('dozon').innerHTML= dozon+' Dozon'+' Kola'+' =';
	document.getElementById('output').innerHTML= dozon * 60 +' Taka'

	}
	
 kolerDam(5);//কল  করলে এক লাইনে দেখাবে।
	
  </script>
  ----------------------------------------------------------
    //Custom function:
	<input type="text" id="first" />
	<button onclick="kolerDam()">Click Here</button>
		<h1>
		<span id="dozon"></span>
		<span id="output"></span>
		</h1>		
			 
<script>
	function kolerDam(dozon){//আর্গুমেন্ট

	var dozon=document.getElementById('first').value;
	 
	
	document.getElementById('dozon').innerHTML= dozon+' Dozon'+' Kola'+' =';
	document.getElementById('output').innerHTML= dozon * 60 +' Taka'

	}
	
  </script>
  ----------------------------------------------------
    //Custom function:
	<input type="text" id="first" />
	<button onclick="mileToKilo()">Click Here</button>
		<h1>
		<span id="mile"></span>
		<span id="output"></span>
		</h1>		
			 

<script>
	function mileToKilo(mile){//আর্গুমেন্ট

	var mile=document.getElementById('first').value;
	 
	
	document.getElementById('mile').innerHTML= mile+' Mile'+' =';
	document.getElementById('output').innerHTML= mile * 1.60934 +' Kelo Meter'

	}
	
  </script>
  --------------------------------------------------------
    //Custom function:
	<input type="text" id="first" />
	<button onclick="mileToKilo()">Click Here</button>
		<h1>
		<span id="mile"></span>
		<span id="output"></span>
		</h1>		
			 

<script>
	function mileToKilo(){//আর্গুমেন্ট

	var mile=document.getElementById('first').value;
	 
	
	document.getElementById('mile').innerHTML= mile+' Mile'+' =';
	document.getElementById('output').innerHTML= mile * 1.60934 +' Kelo Meter'

	}
	
  </script>
  -------------------------------------------------------
    //Custom function:
	<input type="text" id="first" />
	<input type="text" id="second" />
	<button onclick="function calcArith()">Click Here</button>
	
		<h1><span id="Addition">Addition=</span></h1>
		<h1><span id="Substruction">Substruction=</span></h1>		
		<h1><span id="Multiplication">Multiplication=</span></h1>		
		<h1><span id="Division">Division=</span></h1>		
		<h1><span id="Modulus">Modulus=</span></h1>		
			 

<script>
	function calcArith(){//আর্গুমেন্ট

	var first=document.getElementById('first').value;
	var num1=parseInt(first);
	var second=document.getElementById('second').value;
	 var num2=parseInt(second);
	
	document.getElementById('Addition').innerHTML=num1 + num2;
	document.getElementById('Substruction').innerHTML= num1 - num2;
	document.getElementById('Multiplication').innerHTML= num1 * num2
	document.getElementById('Division').innerHTML= num1 / num2;
	document.getElementById('Modulus').innerHTML= num1 % num2;

	}
	
  </script>
  ------------------------------------------------------
  //Custom function:
	<input type="text" id="first" />
	<input type="text" id="second" />
	<button onclick="calcArith()">Click Here</button>
	
		<p>Addition=<h1><span id="Addition"></span></h1></p>
		<p>Substruction=<h1><span id="Substruction"></span></h1></p>		
		<p>Multiplication=<h1><span id="Multiplication"></span></h1></p>		
		<p>Division=<h1><span id="Division"></span></h1></p>		
		<p>Modulus=<h1><span id="Modulus"></span></h1></p>		
			 

<script>
	function calcArith(){//আর্গুমেন্ট

	
	var num1=parseInt(document.getElementById('first').value);
	
	 var num2=parseInt(document.getElementById('second').value);
	
	document.getElementById('Addition').innerHTML=num1 + num2;
	document.getElementById('Substruction').innerHTML= num1 - num2;
	document.getElementById('Multiplication').innerHTML= num1 * num2
	document.getElementById('Division').innerHTML= num1 / num2;
	document.getElementById('Modulus').innerHTML= num1 % num2;

	}
	
  </script>
  --------------------------------------------------------------------------------
   //result:
			<input type="text" id="first" />
	
	<button onclick="amaderFunction()">Click Here</button>
	
			<h1 id="lekha"></h1>			

<script>
	function amaderFunction(){
	
	var num=parseInt(document.getElementById('first').value);
	if(num<0){
		document.getElementById('lekha').innerHTML='Invalid number.';
	}
else if(num<33 && num>=0)
	{
		document.getElementById('lekha').innerHTML='You have obtained F Grade.';
}
else if(num>=33 && num<40)
{
		document.getElementById('lekha').innerHTML='You have obtained D Grade.';
}
else if(num>=40 && num<50)
{
	document.getElementById('lekha').innerHTML='You have obtained C Grade.';
}
else if(num>=50 &&num<60)
{
	document.getElementById('lekha').innerHTML='You have obtained B Grade.';
}
else if(num>=60 &&num<70)
{
	document.getElementById('lekha').innerHTML='You have obtained A- Grade.';
}
else if(num>=70 &&num<80){
		document.getElementById('lekha').innerHTML='You have obtained A Grade.';
	}else
	{
		document.getElementById('lekha').innerHTML='You have obtained A+ Grade.';
	}
	}
  </script>
  <script>
$(document).ready(function(){ 
	 $("p").click(function(){ 
	                 $(this).hide();
	 });
 });
</script>

<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>
---------------------------------------

 <script>
$(document).ready(function(){
	 $("button1").click(function(){
		  $("p").hide();
	 });
	 
	 $("button2").click(function(){
		 $("h2").hide(); 
	 });
 
});

	
</script>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button1>Click me to Hide p</button><br />
<button2>click me to Hide h2</button>
-------------------------------------------------------------

<script>
	$(document).ready(function(){
		$("p").click(function(){ 
		                $(this).hide();
		});
	});
</script>

<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>
---------------------------------------------------------------------
<script>
$(document).ready(function(){
    $("#hide").click(function(){
                        $("p").hide();
		
	});
	
	$("#show").click(function(){
                        $("p").show();
    });
	
	});
</script>

<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
------------------------------------------------------------
 
<script>
$(document).ready(function(){
	$("#hide").click(function(){
						$("p").hide();
    });
	
    $("#show").click(function(){
                        $("p").show();
    });
	
});
</script>

<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
-------------------------------------------------------

<script>
$(document).ready(function(){
	$("button").click(function(){
				 $("#div1").fadeIn();
				$("#div2").fadeIn("slow");
				$("#div3").fadeIn(3000);
	});
});
</script>
<p>Demonstrate fadeIn() with different parameters.</p>

<button>Click to fade in boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>

<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>

<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
------------------------------------------------------------------------------
<script> 
$(document).ready(function(){
	$("button").click(function(){
          $("div").animate({left: '250px'});
    });
});
</script>
<button>Start Animation</button>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>

<p align="center">By default, all HTML elements have a static position, and cannot be moved.<br />
To manipulate the position,<br /> 
remember to first set the CSS position property of the element<br />
 to relative, fixed, or absolute!</p>
---------------------------------------------------------------
<script> 
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({
            height: 'toggle'
        });
    });
});
</script> 
<p>Click the button multiple times to toggle the animation.</p>

<button>Start Animation</button>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
<p align="center">
By default, all HTML elements have a static position, and cannot be moved.<br />
 To manipulate the position, remember to first set the CSS<br />
 position property of the element<br /> 
 to relative, fixed, or absolute!
 </p>
 --------------------------------------------------------------------
 <script> 
$(document).ready(function(){
    $("button").click(function(){
        var div = $("div");
        div.animate({height: '300px', opacity: '0.4'}, "slow");
        div.animate({width: '300px', opacity: '0.8'}, "slow");
        div.animate({height: '100px', opacity: '0.4'}, "slow");
        div.animate({width: '100px', opacity: '0.8'}, "slow");
    });
});
</script> 


<button>Start Animation</button>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
<p align="center">By default, all HTML elements have a static position,<br />
 and cannot be moved. To manipulate the position, remember to first set the CSS position<br /> property of the element to relative, fixed, or absolute!</p>
 ------------------------------------------------------------------------------
 <script> 
$(document).ready(function(){
    $("button").click(function(){
        var div = $("div");  
        div.animate({left: '100px'}, "slow");
        div.animate({fontSize: '3em'}, "slow");
    });
});
</script> 


<button>Start Animation</button>
<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>
<p align="center">
By default, all HTML elements have a static position,<br /> 
and cannot be moved. To manipulate the position,<br />
 remember to first set the CSS position property of the element<br /> 
 to relative, fixed, or absolute!
 </p>
 -----------------------------------------------------------------------------------------
 <script>
	$(document).ready(function(){
		$("#btn1").click(function(){
			alert("Text: " + $("#test").text());
		});
		
		$("#btn2").click(function(){
			alert("HTML: " + $("#test").html());
		});
	});
</script>


<p id="test">This is some <b>bold</b> text in a paragraph.</p>

<button id="btn1">Show Text</button>
<button id="btn2">Show HTML</button>
------------------------------------------------->
 //Custom function:
			<input type="text" id="first" />
	
	<button onclick="amaderFunction()">Click Here</button>
	
			<h1 id="lekha"></h1>			

<script>
	function amaderFunction(){
	
	var num=parseInt(document.getElementById('first').value);
	if(num<0){
		document.getElementById('lekha').innerHTML='Invalid number.';
	}
else if(num<33 && num>=0)
	{
		document.getElementById('lekha').innerHTML='You have obtained F Grade.';
}
else if(num>=33 && num<40)
{
		document.getElementById('lekha').innerHTML='You have obtained D Grade.';
}
else if(num>=40 && num<50)
{
	document.getElementById('lekha').innerHTML='You have obtained C Grade.';
}
else if(num>=50 &&num<60)
{
	document.getElementById('lekha').innerHTML='You have obtained B Grade.';
}
else if(num>=60 &&num<70)
{
	document.getElementById('lekha').innerHTML='You have obtained A- Grade.';
}
else if(num>=70 &&num<80){
		document.getElementById('lekha').innerHTML='You have obtained A Grade.';
	}else
	{
		document.getElementById('lekha').innerHTML='You have obtained A+ Grade.';
	}
	}
  </script>
  
	<!------------------------------------------------------->
	<!------------------------------------------------------->
		</div>
	</div>
</div>
</body>
</html>
<?php include('include/footer.php');?>