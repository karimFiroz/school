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

.box{
	margin:150px auto;
}
.box{
	width:200px;
	height:200px;
	background:yellow;
	-moz-box-shadow:17px 17px 5px 0 #000;
	-webkit-box-shadow:17px 17px 5px 0 #000;
	-o-box-shadow:17px 17px 5px 0 #000;
	-ex-box-shadow:17px 17px 5px 0 #000;
}
.box{
	margin:150px auto;
}
.box{
	width:1000px;
	height:500px;
	background:red;
background:linear-gradient(to bottom,violet,indigo,brown,green,yellow,orange,red,orange,yellow,green,brown,indigo,violet);}
h1{text-align:center;
	font-size:70;
	background:-webkit-linear-gradient(red 50%,green 50%);
	-webkit-background-clip:text;
    -webkit-text-fill-color:transparent;}
}
.square{
	margin:50px auto;
}
.square{
	width:100px;
	height:100px;
	background-color:red;
	border:10px solid yellow; 
	transition:2s;
}
.square:hover{
	width:200px;
	height:200px;
	background-color:green;
	border:20px lolid yollow;
	
}
h1{color:white;
	background:green;
	font-size:32px;
}
.box{
	margin:50px auto;
}
.box img{	
}
.box:hover img{
	 transform:rotate(45deg);
}
.square{
	margin:50px auto;
}
.square{
	width:100px;
	height:100px;
	background-color:red;
	border:10px solid yellow; 
	transition:2s;
}
.square:hover{
	width:200px;
	height:200px;
	background-color:green;
	border:20px lolid yollow;
	transform:rotate(180deg);
}
.square{
	margin:50px auto;
}
.square{
	width:100px;
	height:100px;
	background-color:red;
	border:10px solid yellow; 
	transition:2s;
}
.square:hover{
	width:200px;
	height:200px;
	background-color:green;
	border:20px lolid yollow;
	transform:skew(45deg);  
}

.square{
	margin:50px auto;
}

.square{
	width:100px;
	height:100px;
	background-color:red;
	border:10px solid yellow; 
	-moz-transition:2s;
	-webkit-transition:2s;
	-o-transition:2s;
	-ex-transition:2s;
}
.square:hover{
	width:200px;
	height:200px;
	background-color:green;
	border:20px lolid yollow;
	transform:translateX(100px);  
}
.square{
	margin:50px auto;
}
.square{
	width:100px;
	height:100px;
	background-color:red;
	border:10px solid yellow; 
	-moz-transition:2s;
	-webkit-transition:2s;
	-o-transition:2s;
	-ex-transition:2s;
}

.square:hover{
	width:200px;
	height:200px;
	background-color:green;
	border:20px lolid yollow;
	transform:translateY(100px);  
}

</style>
</head>
<body>
<div style="padding-left:200px;color:indigo;">

<h1>Java programming</h1>
<div class="tap">
<p>

//Program start here!


<section>
<div class="box"></div>
</section>
<h1>Greadiant color RAIN-BOW</h1>
<section>
<div class="box1"></div>
</section>


<h1>Transform image(hover)</h1>
<section>
<div class="box">
<img src="images/logo.jpg">
<img src="images/logo1.jpg">
<img src="images/logo2.jpg">
<img src="images/logo3.jpg">
<img src="images/logo4.jpg">
</div>
</section>


<section>
<div class="square"></div>
</section>
<!-----
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
------------------------------------------------------
$(document).ready(function(){
	$('.form').submit(function(){
	
	 $('.message').html('Your form hasbeen successfully send!');
	return false;
});
	
})

<form class="form">
<input type="text" class="first_name"  placeholder="First_Name"/><br />
<input type="text" class="last_name"  placeholder="Last_Name"/><br />
<input type="submit" value="submit" />
<h3 class="message"></h3>
</form>
---------------------------------------------------------------
$(document).ready(function(){
	$('.first').keyup(function(){
	var vale=$('.first').val();
	$('.output').text(vale);
});
	
});
<button class="show">Show/hide</button>

    
      <div class="lekha"><span>Karim</span></div>  
	  <input type="text" class="first" />
  
<h1 class="output"></h1>
------------------------------------------------------
$(document).ready(function(){
	$('h1').html("karim");
});
<h1></h1>
-------------------------------------------------
$(document).ready(function(){
	$('h1').html('<img src="images/sc01.jpg" alt="school logo" />');
});
<h1></h1>
-----------------------------------------------------
$(document).ready(function(){
	$(".ekhane").html("This is a division tag!");
	
});

<div class="ekhane">Karim_firoz</div>
-----------------------------------------------------
$(document).ready(function(){
	$('.ekhane').append('This is a division tag!');
	
});
<div class="ekhane">Karim_firoz</div>
---------------------------------------------
$(document).ready(function(){
	$('.ekhane').prepend('This is a division tag!');
	
});
<div class="ekhane">Karim_firoz</div>
-------------------------------------------
$(document).ready(function(){
	$('body').hide;
});
----------------------------------
$(document).ready(function(){
	$('h1').hide;	
});
<h1 class="ekhane">Karim_firoz</h1>
---------------------------------------------
$(document).ready(function(){
		
		$('.ekhane').show();
});
<h1 class="ekhane">Karim_firoz</h1>
------------------------------------------
$(document).ready(function(){
		
		$('.ekhane').remove();
});
<h1 class="ekhane">Karim_firoz</h1>
-----------------------------------------------
$(document).ready(function(){
		$(".hide").click(function(){
	$(".lekha").hide();
	});

	$(".show").click(function(){
	$(".lekha").show();
	});
});
	
<button class="show">Show</button>
<button class="hide">Hide</button>

<div class="lekha">This is a show/hide</div> 
---------------------------------------------------
	$(document).ready(function(){
		function showHide(){
	$('.lekha').hide();
	
	};
});

<button class="hide" onclick="showHide()">Hide</button>

<h1 class="lekha">This is a show/hide</h1>
---------------------------------------------------

$(document).ready(function(){
			$(".hide").click(
	function(){
	$(".lekha").fadeOut(2000);
	}
	);

	$(".show").click(
	function(){
	$(".lekha").fadeIn(2000);
	}
	);
});
<button class="show">Show</button>
<button class="hide">Hide</button>

<div class="lekha">This is a show/hide</div> 
---------------------------------------------
$(document).ready(function(){
		$(".show").click(
	function(){
	$(".lekha").toggle(2000);
	}
	);

});

<button class="show">Show</button>


<div class="lekha">This is a show/hide</div> 
-----------------------------------------------------
$(document).ready(function(){
		$(".show").click(
	function(){
	$(".lekha").fadeToggle(2000);
	});
});

<button class="show">Show</button>


<div class="lekha">This is a show/hide</div> 
--------------------------------------------
$(document).ready(function(){
				$(".show").click(
	function(){
	$(".lekha").slideToggle(2000);
	});
});

<button class="show">Show/Hide</button>


<div class="lekha">This is a show/hide</div>
-----------------------------------------------
$(document).ready(function(){
		$(".slideup").click(function(){
	$(".lekha").slideUp(2000);
	});

	$(".slidedown").click(function(){
	$(".lekha").slideDown(2000);
	});
});
	
<button class="slidedown">slide down</button>
<button class="slideup">Slide up</button>

<div class="lekha">This is a show/hide</div>
----------------------------------------------
$(document).ready(function(){
		$(".before").click(function(){
	$(".lekha").before('<h3>This is a before text.</h3>');
	});

	$(".after").click(function(){
	$(".lekha").after('<h3>This is a prepend text.</h3>');
	});
});
	
<button class="before">Before</button>
<button class="after">After</button>

<div class="lekha">This is a show/hide</div>
----------------------------------------------------
$(document).ready(function(){
				$(".append").click(function(){
	$(".lekha").append('<h3>This is a append text.</h3>');
	});

	$(".prepend").click(function(){
	$(".lekha").prepend('<h3>This is a prepend text.</h3>');
	});
});
	
<button class="append">append</button>
<button class="prepend">Prepend</button>

<div class="lekha">This is a show/hide</div>
----------------------------------------------------

$(document).ready(function(){
				$(".append").dblclick(function(){
	$(".lekha").append('<h3>This is a append text.</h3>');
	});

	$(".prepend").click(function(){
	$(".lekha").prepend('<h3>This is a prepend text.</h3>');
	});
});
	
<button class="append">Double Click</button>
<button class="prepend">Single Click</button>

<div class="lekha">This is a show/hide</div>
------------------------------------------------
$(document).ready(function(){
				$(".append").mouseenter(function(){
	$(".lekha").append('<h3>This is a append text.</h3>');
	});

	$(".prepend").mouseleave(function(){
	$(".lekha").prepend('<h3>This is a prepend text.</h3>');
	});
});
	
<button class="append">Mouse Enter</button>
<button class="prepend">Mouse Leave</button>

<div class="lekha">This is a show/hide</div>
-----------------------------------------
$(document).ready(function(){

				$(".append").mouseenter(function(){
	$(this).hide(2000);
	});

	$(".prepend").mouseleave(function(){
	$(this).hide(2000);
	});
});
	
<button class="append">Mouse Enter</button>
<button class="prepend">Mouse Leave</button>

<div class="lekha">This is a show/hide</div>
---------------------------------------------------
	
$(document).ready(function(){
$(".lekha").mouseenter(function(){
		$(this).css({
			'background':'blue'
		});
	});

$(".lekha").mouseleave(function(){
		$(this).css({
			'background':'green'
		});
	});

});


<div class="lekha">This is a show/hide</div>
-----------------------------------------
	$(document).ready(function(){
		$('.first').keyup(function(){
	
	var vale=$('.first').val();
	$('h1').html(vale);
});

});

<input type="text" class="first" />

<h1 class="output"></h1>
---------------------------------------------
$(document).ready(function(){
		$('.first').keyup(function(){
	
	var vale=$('.first').val();
	$('h1').append(vale);
});

});

<input type="text" class="first" />

<h1 class="output"></h1>
--------------------------------------
$(document).ready(function(){
		$('.form').submit(function(){
	 $('.message').html('Your form hasbeen send successfuly!');
	return false;
});
});

<form class="form">
<input type="text" class="first_name" placeholder="First Name"><br />
<input type="text" class="last_name" placeholder="Last Name"><br />
<input type="submit" value="submit" /><br />
</form>
<h3 class="message"></h3>
----------------------------------
$(document).ready(function(){
				$('.form').submit(function(){
			var first=$('.first_name').val();
			var last=$('.last_name').val();
			
			if(first=='' || last==''){
				$('.message').html('Please fill up therequired field!');
			}else{
				$('.message').html('Your form has been submited successfully!');
			}
	
	return false;
});
});

<form class="form">
<input type="text" class="first_name" placeholder="First Name"><br />
<input type="text" class="last_name" placeholder="Last Name"><br />
<input type="submit" value="submit" /><br />
</form>
<h3 class="message"></h3> 
----------------------------------------------------------
$(document).ready(function(){
						$('.form').submit(function(){
			var first=$('.first_name').val();
			var last=$('.last_name').val();
			
			if(first=='' || last==''){
				$('.message').html('Please fill up therequired field!');
			}else{
				$('.message').html('Your form has been submited successfully!');
			}
	
	return false;
});

$('.first_name').focus(function(){
	
	$(this).after('Please Enter your First Name');
});

$('.last_name').focus(function(){
	
	$(this).after('Please Enter your Last Name');
});
});

<form class="form">
<input type="text" class="first_name" placeholder="First Name"><br />
<input type="text" class="last_name" placeholder="Last Name"><br />
<input type="submit" value="submit" /><br />
</form>
<h3 class="message"></h3>
------------------------------------------------------------
$(document).ready(function(){
								$('.form').submit(function(){
			var first=$('.first_name').val();
			var last=$('.last_name').val();
			
			if(first=='' || last==''){
				$('.message').html('Please fill up therequired field!');
			}else{
				$('.message').html('Your form has been submited successfully!');
			}
	
	return false;
});

$('.first_name').focus(function(){
	
	$(this).after('<p class="required">Please Enter your First Name</p>');
});

$('.first_name').blur(function(){
	
	$('.required').hide();
});
$('.last_name').focus(function(){
	
	$(this).after('<p class="required">Please Enter your Last Name</p>');
});

$('.last_name').blur(function(){
	
	$('.required').hide();
});
});

<form class="form">
<input type="text" class="first_name" placeholder="First Name"><br />
<input type="text" class="last_name" placeholder="Last Name"><br />
<input type="submit" value="submit" /><br />
</form>
<h3 class="message"></h3>
-----------------------------------------
$(document).ready(function(){
$(window).scroll(function(){
	$('p').css({
		'color':'red'
	});
  });
});

<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
<p>
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
That the quick brown fox jumps over the white lazy dog.
</p>
-------------------------------------------------------------
$(document).ready(function(){
	var bodyheight=$('body').height();
	alert(bodyheight);
});
-----------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').width();
	alert(bodyheight);
});
--------------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').innerheight();
	alert(bodyheight);
});
-------------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').outerheight();
	alert(bodyheight);
});
---------------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').outerheight(true);
	alert(bodyheight);
});
-------------------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').innerwidth();
	alert(bodyheight);
});
--------------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').outerwidth();
	alert(bodyheight);
});
----------------------------------------------------
$(document).ready(function(){
			var bodyheight=$('body').outerwidth(true);
	alert(bodyheight);
});
*******---->
</div>
</div>
</body>
</html>
<?php include('include/footer.php');?>