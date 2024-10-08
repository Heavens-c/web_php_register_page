<?php
include 'connect.php';

$firstName = $_POST["firstName"];
$middleName = $_POST["middleName"];
$lastName = $_POST["lastName"];

$sql = "INSERT INTO user(firstName, middleName, lastName)
VALUES('$firstName', '$middleName', '$lastName', now())";

if(mysqli_query($conn, $sql)){
    echo"New record created succesfully";
} else {
    echo"Error: ". $sql ."<br>" . mysqli_error($conn); 
}
mysqli_query($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="style.css" rel="stylesheet" media="all">
<meta name="robots" content="noindex, follow">
<script nonce="20108b68-d47c-4fbf-93d2-44bb041e3c6c">try{(function(w,d){!function(bk,bl,bm,bn){if(bk.zaraz)console.error("zaraz is loaded twice");else{bk[bm]=bk[bm]||{};bk[bm].executed=[];bk.zaraz={deferred:[],listeners:[]};bk.zaraz._v="5807";bk.zaraz._n="20108b68-d47c-4fbf-93d2-44bb041e3c6c";bk.zaraz.q=[];bk.zaraz._f=function(bo){return async function(){var bp=Array.prototype.slice.call(arguments);bk.zaraz.q.push({m:bo,a:bp})}};for(const bq of["track","set","debug"])bk.zaraz[bq]=bk.zaraz._f(bq);bk.zaraz.init=()=>{var br=bl.getElementsByTagName(bn)[0],bs=bl.createElement(bn),bt=bl.getElementsByTagName("title")[0];bt&&(bk[bm].t=bl.getElementsByTagName("title")[0].text);bk[bm].x=Math.random();bk[bm].w=bk.screen.width;bk[bm].h=bk.screen.height;bk[bm].j=bk.innerHeight;bk[bm].e=bk.innerWidth;bk[bm].l=bk.location.href;bk[bm].r=bl.referrer;bk[bm].k=bk.screen.colorDepth;bk[bm].n=bl.characterSet;bk[bm].o=(new Date).getTimezoneOffset();if(bk.dataLayer)for(const bx of Object.entries(Object.entries(dataLayer).reduce(((by,bz)=>({...by[1],...bz[1]})),{})))zaraz.set(bx[0],bx[1],{scope:"page"});bk[bm].q=[];for(;bk.zaraz.q.length;){const bA=bk.zaraz.q.shift();bk[bm].q.push(bA)}bs.defer=!0;for(const bB of[localStorage,sessionStorage])Object.keys(bB||{}).filter((bD=>bD.startsWith("_zaraz_"))).forEach((bC=>{try{bk[bm]["z_"+bC.slice(7)]=JSON.parse(bB.getItem(bC))}catch{bk[bm]["z_"+bC.slice(7)]=bB.getItem(bC)}}));bs.referrerPolicy="origin";bs.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bk[bm])));br.parentNode.insertBefore(bs,br)};["complete","interactive"].includes(bl.readyState)?zaraz.init():bk.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async j=>new Promise((k=>{if(j){j.e&&j.e.forEach((l=>{try{const m=d.querySelector("script[nonce]"),n=m?.nonce||m?.getAttribute("nonce"),o=d.createElement("script");n&&(o.nonce=n);o.innerHTML=l;o.onload=()=>{d.head.removeChild(o)};d.head.appendChild(o)}catch(p){console.error(`Error executing script: ${l}\n`,p)}}));Promise.allSettled((j.f||[]).map((q=>fetch(q[0],q[1]))))}k()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">middle name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Courses</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>BSIT</option>
                                    <option>BSCS</option>
                                    <option>BSN</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="reset">Clear</button>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8cd42356eb9a6e58","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"version":"2024.8.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
