<!DOCTYPE html>
<html>
<head>
	<title>cardinal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="HOME">
	<div class="header">
	<h1>
		<!-- <button class="hamkari">دعوت به همکاری</button> -->
		<img src="aa.png" class="kardinal">
		<img src="icons8-menu-144.png" class="menu">
		<img src="dsd.jpg" class="logo">
		<div class="topnav">
		  <div id="myLinks">
		    <a href="#news">News</a>
		    <a href="#contact">Contact</a>
		    <a href="#about">About</a>
		  </div>
	</h1> 
	</div>

	<div class="download">
	  <img src="d.jpg" class="bkimage">
	  <p class="chist">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	  <div class="pngs">
	  <img src="ssssss.png" class="logos sw">
	  <img src="bbbaz.png" class="logos s">	  	
	  </div>

	</div>
	

	<div class="about">

	<img src="11p.png" class="phone">

	<div class="car">
		<h3>کاردینال چیست ؟ </h3>
		<p>در کاردینال می‌توانید با توجه به موضوعات دلخواهتان، به صورت بی‌وقفه ویدیو تماشا کنید. آن‌ها را با سایرین به اشتراک بگذارید؛ و با مشترک شدن، لایک کردن و کامنت گذاشتن، با موضوع دلخواه تان در ارتباط باشید. همچنین اگر تولید کننده محتوای ویدیویی هستید، امکان آپلود و تماشای ویدیو در این اپلیکیشن‌ فراهم شده است. علاوه بر همه ی اینها کاردینال یک چالش استعداد یابی را فراهم کرده که در سراسر کشور هر فرد با استعدادی بتواند در این مسابقه ی بزرگ شرکت کرده و ضمن دیده شدن برنده جایزه ی بزرگ شود.</p>	
	</div>	
	</div>

	<div class="footer">

		<h4>راه های ارتباظی</h4>
		<div class="icons">
		<img src="icons8-whatsapp-48.png" class="wat">
		<img src="icons8-telegram-app-48.png" class="tele">
		<img src="icons8-instagram-48.png" class="inst">
		</div>

	</div>

	
	</section>




<script>

	var logo = document.querySelector(".menu");
	var download = document.querySelector(".header");

	logo.onclick = function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
    
    download.style.marginBottom = "0";

  } else {
    x.style.display = "block";
    
    download.style.marginBottom = "250px;"
      download.style.marginBottom = "250px;"
  }
}
</script>

</body>
</html>