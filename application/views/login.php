
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V12</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/img/faviconn.ico" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/login.css">

<meta name="robots" content="noindex, follow">
<script nonce="b637176e-4f22-457e-897e-e8c6f78ab4e2">try{(function(w,d){!function(bS,bT,bU,bV){bS[bU]=bS[bU]||{};bS[bU].executed=[];bS.zaraz={deferred:[],listeners:[]};bS.zaraz._v="5629";bS.zaraz.q=[];bS.zaraz._f=function(bW){return async function(){var bX=Array.prototype.slice.call(arguments);bS.zaraz.q.push({m:bW,a:bX})}};for(const bY of["track","set","debug"])bS.zaraz[bY]=bS.zaraz._f(bY);bS.zaraz.init=()=>{var bZ=bT.getElementsByTagName(bV)[0],b$=bT.createElement(bV),ca=bT.getElementsByTagName("title")[0];ca&&(bS[bU].t=bT.getElementsByTagName("title")[0].text);bS[bU].x=Math.random();bS[bU].w=bS.screen.width;bS[bU].h=bS.screen.height;bS[bU].j=bS.innerHeight;bS[bU].e=bS.innerWidth;bS[bU].l=bS.location.href;bS[bU].r=bT.referrer;bS[bU].k=bS.screen.colorDepth;bS[bU].n=bT.characterSet;bS[bU].o=(new Date).getTimezoneOffset();if(bS.dataLayer)for(const ce of Object.entries(Object.entries(dataLayer).reduce(((cf,cg)=>({...cf[1],...cg[1]})),{})))zaraz.set(ce[0],ce[1],{scope:"page"});bS[bU].q=[];for(;bS.zaraz.q.length;){const ch=bS.zaraz.q.shift();bS[bU].q.push(ch)}b$.defer=!0;for(const ci of[localStorage,sessionStorage])Object.keys(ci||{}).filter((ck=>ck.startsWith("_zaraz_"))).forEach((cj=>{try{bS[bU]["z_"+cj.slice(7)]=JSON.parse(ci.getItem(cj))}catch{bS[bU]["z_"+cj.slice(7)]=ci.getItem(cj)}}));b$.referrerPolicy="origin";b$.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bS[bU])));bZ.parentNode.insertBefore(b$,bZ)};["complete","interactive"].includes(bT.readyState)?zaraz.init():bS.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('public/img/loginnn.jpg');">
<div class="wrap-login100 p-t-190 p-b-30">
<form class="login100-form validate-form">
<div class="login100-form-avatar">
<img src="<?php echo base_url(); ?>public/img/login.jpg" alt="AVATAR">
</div>
<span class="login100-form-title p-t-20 p-b-45">
Inter Clubes Perú
</span>
<div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
<input class="input100" type="text" name="username" placeholder="USUARIO">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user"></i>
</span>
</div>
<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
<input class="input100" type="password" name="pass" placeholder="CONTRASEÑA">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock"></i>
</span>
</div>
<div class="container-login100-form-btn p-t-10">
<button class="login100-form-btn">
INGRESAR
</button>
</div>
<div class="text-center w-full p-t-25 p-b-230">
<a href="#" class="txt1">
¿Olvidó su nombre de usuario/contraseña?
</a>
</div>
<div class="text-center w-full">
<a class="txt1" href="#">
<i class="fa fa-long-arrow-right"></i>
</a>
</div>
</form>
</div>
</div>
</div>

<script src="<?php echo base_url(); ?>public/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>public/vendor/select2/select2.min.js"></script>

<script src="<?php echo base_url(); ?>public/js/login.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"8802d9adbb54010f","version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
