<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
    <title>Test</title>
  </head>
  <body>
  	<div id="contUp" class="container-fluid hat">
	  		<div class="row">
	  			<div class="col"><img src="src/worldBank.png" alt="" class="logo"></div>
	  			<div class="col"><span class="rightPhone phone">8-800-100-5005<br>+7(3452)522-000</span></div>
	  		</div>
  	</div>

  	<nav class="navbar navbar-expand-lg navbar-dark bar ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item col">
        <a class="nav-link leftli" href="#">Кредитные карты</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link " href="#">Вклады</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link" href="#">Дебетовая карта</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link" href="#">Страхование</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link" href="#">Друзья</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link rightli" href="#">Интернет-банк</a>
      </li>
    </ul>
  </div>
</nav>

<!--Хлебные крошки-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Главная</li>
  <li class="breadcrumb-item">Вклады</li>
  <li class="breadcrumb-item active">Калькулятор</li>
</ol> 
<!--Калькулятор-->
 <div class="container calc">
 	<h1 class="calcH1">Калькулятор</h1>
 	<form action="calc.php" method="post" name="mainForm">
 		<div class="containerCalc">
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Дата оформления вклада</span></div>
	 			<div class="right"><input name="datepicker" onchange="checkDatepicker(this)" class="rightInput" type="text" readonly id="datepicker"></div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Сумма вклада</span></div>
	 			<div class="right"><input name="sumDeposit" id="r1out" class="rightInput" onchange="checkSumDeposit(this)" type="text" onkeyup="this.value = this.value.replace(/[^\d]/g,'');"></div>
	 			<div class="rangeSum right"><input id="r1" class="rangecss" onchange="checkSumDeposit1(this)" type="range" min="1000" max="3000000" ><br>
	 				<span class="rangeTextCss">1 тыс.руб</span><span class="rangeText rangeTextCss">3 000 000</span>
	 			</div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Срок вклада</span></div>
	 			<div class="right">
	 				<select name="termDeposit" class="years rightInput">
			    <option value="1">1 год</option>
			    <option selected value="2">2 года</option>
			    <option value="3">3 года</option>
			    <option value="4">4 года</option>
			    <option value="5">5 лет</option>
   			</select>
	 			</div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Пополнение вклада</span></div>
	 			<div class="right"><span class="radio"><input class="radio1" name="fill" oninput="checkRadio(this)" value="Нет"  type="radio">Нет</span><span><input name="fill" checked oninput="checkRadio(this)" value="Да" class="radio1" type="radio">Да</span></div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Сумма пополнения вклада</span></div> 
	 			<div class="right"><input id="r2out" name="sumReplenishDeposit" onchange="checkSumReplenishDeposit(this)" class="rightInput" type="text" onkeyup="this.value = this.value.replace(/[^\d]/g,'');"></div>
	 			<div class="rangeFill rangeSum right"><input id="r2" type="range" name="sumReplenishDeposit1" onchange="checkSumReplenishDeposit1(this)" class="rangecss" min="1000" max="3000000"><br>
	 				<span class="rangeTextCss">1 тыс.руб</span><span class="rangeText rangeTextCss">3 000 000</span>
	 			</div>

	 			
	 		</div>
	 		<div class="divResult">
				<input type="submit" disabled value="Рассчитать" id="calculate" name="calc" class="btn btn-success btnResult fontResult">
	 			<a class="fontResult">Результат: <span class="fontResult" id="resultat"></span></a>
	 		</div>
 		</div>
	</form>
</div>
<!--Footer-->
<footer id="footercss" class="footer fixed-bottom">
	<div id="containerfooter" class="container">
    <a href="#">Кредитные карты</a>
    <a href="#">Вклады</a>
    <a href="#">Дебетовая карта</a>
    <a href="#" >Страхование</a>
    <a href="#">Друзья</a>
    <a href="#">Интернет-банк</a>
  </div>
</footer>

    
<script src="src/script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

