<?php
session_start();
if(!isset($_SESSION["password"]))
{
header('Location: ./404.html');
            }

require_once "config.php";

// initializing variables
$username= $_SESSION["username"];
$password= $_SESSION["password"];
$semester = $question = "" ;
$batch = "";
$video = "";
$s5="";
$s6="";

$errors = array(); 
$il=$_SERVER['REMOTE_ADDR'];
// connect to the database

// REGISTER USER


       
            $sql_query1="select semester as s from login where phone ='".$username."' and password='".$password."'";
            $result1 = mysqli_query($link,$sql_query1);
            $s1 = mysqli_fetch_array($result1);
           

            $sql_query4="select batch as b from login where phone ='".$username."' and password='".$password."'";
          	$result4 = mysqli_query($link,$sql_query4);
			$s4 = mysqli_fetch_array($result4);

   $sql_query3="select video as v from teacher where semester ='".$s1[0]."' and batch='".$s4[0]."'";
          	$result3 = mysqli_query($link,$sql_query3);
			$s3 = mysqli_fetch_array($result3);
	      
	$sql_query5="select topic as t from teacher where semester ='".$s1[0]."' and batch='".$s4[0]."'";
          	$result5 = mysqli_query($link,$sql_query5);
			$s5 = mysqli_fetch_array($result5);
	       
	      

	$sql_query6="select date1 as d from teacher where semester ='".$s1[0]."' and batch='".$s4[0]."'";
          	$result6 = mysqli_query($link,$sql_query6);
			$s6 = mysqli_fetch_array($result6);
	       
	 $sql_query7="SELECT count(*) as cntUser FROM teacher WHERE semester ='".$s1[0]."' and batch='".$s4[0]."'";
          $result7 = mysqli_query($link,$sql_query7);
        $row = mysqli_fetch_array($result7);

        $count = $row['cntUser']; 


           
               

?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, viewport-fit=cover">
<meta http-equiv="content-language" content="en"><title>DSCE-CLASS</title>
<noscript>Your browser does not support JavaScript, You should enable JavaScript to use this website.</noscript>
<meta property="og:title" content="Maths - Chhaya Coaching Centre"><meta property="og:type" content="website"><link prefetch="" prerender="/doubts"><link prefetch="" prerender="/science-"><link prefetch="" prerender="/"><link href="./Maths - Chhaya Coaching Centre_files/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?display=swap&amp;family=Josefin+sans:400|Montserrat:400" rel="stylesheet">
<style>
.kv-main .container,.kv-main.container-fluid{margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px;width:100%}.background-id_1 .kv-content,.background-id_1 .text1{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .has-cover .navigation-position.kv-check-scroll.kv-scrolled .navigation nav ul li a::after,
.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .kv-fixed-header.kv-scrolled ul.menu li a::before,
.background-id_1.lahuni83 .no-cover .navigation-position.kv-check-scroll.kv-scrolled .navigation nav ul li a:after{background:rgba(235,33,136,1)}.bajigu79 nav ul a:hover,
.kv-main a{text-decoration:underline!important}.kv-item a,
.kv-item button,
.kv-item p,
.kv-item span,
.kv-site .section-subtitle,
.kv-site a,
.kv-site blockquote,.kv-site button,.kv-site input,.kv-site label,.kv-site p,.kv-site select,.kv-site span,.kv-site textarea{font-family:Montserrat!important;font-weight:400}.kv-item h1 a,.kv-item h1:not(.section-subtitle),.kv-item h2 a,.kv-item h2:not(.section-subtitle),.kv-item h3 a,.kv-item h3:not(.section-subtitle),.kv-item h4 a,.kv-item h4:not(.section-subtitle),.kv-item h5 a,.kv-item h5:not(.section-subtitle),.kv-item h6 a,.kv-item h6:not(.section-subtitle),.kv-site h1 a,.kv-site h1:not(.section-subtitle),.kv-site h2 a,.kv-site h2:not(.section-subtitle),.kv-site h3 a,.kv-site h3:not(.section-subtitle),.kv-site h4 a,.kv-site h4:not(.section-subtitle),.kv-site h5 a,.kv-site h5:not(.section-subtitle),.kv-site h6 a,.kv-site h6:not(.section-subtitle){font-family:'Josefin sans'!important;font-weight:400}html{font-size:112.5%!important;box-sizing:border-box;-ms-overflow-style:scrollbar}@-ms-viewport{width:device-width}*,::after,::before{box-sizing:inherit}@media (min-width:576px){.kv-main .container{max-width:540px}}@media (min-width:768px){.kv-main .container{max-width:80vw}}@media (min-width:992px){.kv-main .container{max-width:75vw}}@media (min-width:1200px){.kv-main .container{max-width:70vw}}@media (min-width:1440px){.kv-main .container{max-width:65vw}}@media (min-width:1758px){.kv-main .container{max-width:1200px}}.kv-main .row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.button-lg div div,.button-lg div span,.button-lg div.button-has-no-title,.button-lg div.button-link-broken,.button-lg div.ck-editable-element,.button-lg i div,.button-lg i span,.button-lg i.ck-editable-element,.button-lg span div,.button-lg span span,.button-lg span.ck-editable-element,.button-md div div,.button-md div span,.button-md div.button-has-no-title,.button-md div.button-link-broken,.button-md div.ck-editable-element,.button-md i div,.button-md i span,.button-md i.ck-editable-element,.button-md span div,.button-md span span,.button-md span.ck-editable-element,.button-sm div div,.button-sm div span,.button-sm div.button-has-no-title,.button-sm div.button-link-broken,.button-sm div.ck-editable-element,.button-sm i div,.button-sm i span,.button-sm i.ck-editable-element,.button-sm span div,.button-sm span span,.button-sm span.ck-editable-element,.button-xs div div,.button-xs div span,.button-xs div.button-has-no-title,.button-xs div.button-link-broken,.button-xs div.ck-editable-element,.button-xs i div,.button-xs i span,.button-xs i.ck-editable-element,.button-xs span div,.button-xs span span,.button-xs span.ck-editable-element,.kv-main .d-none{display:none!important}.kv-main .no-gutters{margin-right:0;margin-left:0}.kv-main .no-gutters>.col,.kv-main .no-gutters>[class*=col-]{padding-right:0;padding-left:0}.kv-main .col,.kv-main .col-1,.kv-main .col-10,.kv-main .col-11,.kv-main .col-12,.kv-main .col-2,.kv-main .col-3,.kv-main .col-4,.kv-main .col-5,.kv-main .col-6,.kv-main .col-7,.kv-main .col-8,.kv-main .col-9,.kv-main .col-auto,.kv-main .col-lg,.kv-main .col-lg-1,.kv-main .col-lg-10,.kv-main .col-lg-11,.kv-main .col-lg-12,.kv-main .col-lg-2,.kv-main .col-lg-3,.kv-main .col-lg-4,.kv-main .col-lg-5,.kv-main .col-lg-6,.kv-main .col-lg-7,.kv-main .col-lg-8,.kv-main .col-lg-9,.kv-main .col-lg-auto,.kv-main .col-md,.kv-main .col-md-1,.kv-main .col-md-10,.kv-main .col-md-11,.kv-main .col-md-12,.kv-main .col-md-2,.kv-main .col-md-3,.kv-main .col-md-4,.kv-main .col-md-5,.kv-main .col-md-6,.kv-main .col-md-7,.kv-main .col-md-8,.kv-main .col-md-9,.kv-main .col-md-auto,.kv-main .col-sm,.kv-main .col-sm-1,.kv-main .col-sm-10,.kv-main .col-sm-11,.kv-main .col-sm-12,.kv-main .col-sm-2,.kv-main .col-sm-3,.kv-main .col-sm-4,.kv-main .col-sm-5,.kv-main .col-sm-6,.kv-main .col-sm-7,.kv-main .col-sm-8,.kv-main .col-sm-9,.kv-main .col-sm-auto,.kv-main .col-xl,.kv-main .col-xl-1,.kv-main .col-xl-10,.kv-main .col-xl-11,.kv-main .col-xl-12,.kv-main .col-xl-2,.kv-main .col-xl-3,.kv-main .col-xl-4,.kv-main .col-xl-5,.kv-main .col-xl-6,.kv-main .col-xl-7,.kv-main .col-xl-8,.kv-main .col-xl-9,.kv-main .col-xl-auto,.kv-main .col-xxl,.kv-main .col-xxl-1,.kv-main .col-xxl-10,.kv-main .col-xxl-11,.kv-main .col-xxl-12,.kv-main .col-xxl-2,.kv-main .col-xxl-3,.kv-main .col-xxl-4,.kv-main .col-xxl-5,.kv-main .col-xxl-6,.kv-main .col-xxl-7,.kv-main .col-xxl-8,.kv-main .col-xxl-9,.kv-main .col-xxl-auto,.kv-main .col-xxxl,.kv-main .col-xxxl-1,.kv-main .col-xxxl-10,.kv-main .col-xxxl-11,.kv-main .col-xxxl-12,.kv-main .col-xxxl-2,.kv-main .col-xxxl-3,.kv-main .col-xxxl-4,.kv-main .col-xxxl-5,.kv-main .col-xxxl-6,.kv-main .col-xxxl-7,.kv-main .col-xxxl-8,.kv-main .col-xxxl-9,.kv-main .col-xxxl-auto{flex:none;max-width:none;position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.kv-main .col{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-3{flex:0 0 25%;max-width:25%}.kv-main .col-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-6{flex:0 0 50%;max-width:50%}.kv-main .col-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-9{flex:0 0 75%;max-width:75%}.kv-main .col-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-12{flex:0 0 100%;max-width:100%}.kv-main .order-first{order:-1}.kv-main .order-last{order:13}.kv-main .order-0{order:0}.kv-main .order-1{order:1}.kv-main .order-2{order:2}.kv-main .order-3{order:3}.kv-main .order-4{order:4}.kv-main .order-5{order:5}.kv-main .order-6{order:6}.kv-main .order-7{order:7}.kv-main .order-8{order:8}.kv-main .order-9{order:9}.kv-main .order-10{order:10}.kv-main .order-11{order:11}.kv-main .order-12{order:12}.kv-main .offset-1{margin-left:8.33333%}.kv-main .offset-2{margin-left:16.66667%}.kv-main .offset-3{margin-left:25%}.kv-main .offset-4{margin-left:33.33333%}.kv-main .offset-5{margin-left:41.66667%}.kv-main .offset-6{margin-left:50%}.kv-main .offset-7{margin-left:58.33333%}.kv-main .offset-8{margin-left:66.66667%}.kv-main .offset-9{margin-left:75%}.kv-main .offset-10{margin-left:83.33333%}.kv-main .offset-11{margin-left:91.66667%}@media (min-width:576px){.kv-main .col-sm{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-sm-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-sm-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-sm-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-sm-3{flex:0 0 25%;max-width:25%}.kv-main .col-sm-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-sm-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-sm-6{flex:0 0 50%;max-width:50%}.kv-main .col-sm-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-sm-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-sm-9{flex:0 0 75%;max-width:75%}.kv-main .col-sm-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-sm-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-sm-12{flex:0 0 100%;max-width:100%}.kv-main .order-sm-first{order:-1}.kv-main .order-sm-last{order:13}.kv-main .order-sm-0{order:0}.kv-main .order-sm-1{order:1}.kv-main .order-sm-2{order:2}.kv-main .order-sm-3{order:3}.kv-main .order-sm-4{order:4}.kv-main .order-sm-5{order:5}.kv-main .order-sm-6{order:6}.kv-main .order-sm-7{order:7}.kv-main .order-sm-8{order:8}.kv-main .order-sm-9{order:9}.kv-main .order-sm-10{order:10}.kv-main .order-sm-11{order:11}.kv-main .order-sm-12{order:12}.kv-main .offset-sm-0{margin-left:0}.kv-main .offset-sm-1{margin-left:8.33333%}.kv-main .offset-sm-2{margin-left:16.66667%}.kv-main .offset-sm-3{margin-left:25%}.kv-main .offset-sm-4{margin-left:33.33333%}.kv-main .offset-sm-5{margin-left:41.66667%}.kv-main .offset-sm-6{margin-left:50%}.kv-main .offset-sm-7{margin-left:58.33333%}.kv-main .offset-sm-8{margin-left:66.66667%}.kv-main .offset-sm-9{margin-left:75%}.kv-main .offset-sm-10{margin-left:83.33333%}.kv-main .offset-sm-11{margin-left:91.66667%}}@media (min-width:768px){.kv-main .col-md{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-md-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-md-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-md-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-md-3{flex:0 0 25%;max-width:25%}.kv-main .col-md-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-md-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-md-6{flex:0 0 50%;max-width:50%}.kv-main .col-md-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-md-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-md-9{flex:0 0 75%;max-width:75%}.kv-main .col-md-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-md-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-md-12{flex:0 0 100%;max-width:100%}.kv-main .order-md-first{order:-1}.kv-main .order-md-last{order:13}.kv-main .order-md-0{order:0}.kv-main .order-md-1{order:1}.kv-main .order-md-2{order:2}.kv-main .order-md-3{order:3}.kv-main .order-md-4{order:4}.kv-main .order-md-5{order:5}.kv-main .order-md-6{order:6}.kv-main .order-md-7{order:7}.kv-main .order-md-8{order:8}.kv-main .order-md-9{order:9}.kv-main .order-md-10{order:10}.kv-main .order-md-11{order:11}.kv-main .order-md-12{order:12}.kv-main .offset-md-0{margin-left:0}.kv-main .offset-md-1{margin-left:8.33333%}.kv-main .offset-md-2{margin-left:16.66667%}.kv-main .offset-md-3{margin-left:25%}.kv-main .offset-md-4{margin-left:33.33333%}.kv-main .offset-md-5{margin-left:41.66667%}.kv-main .offset-md-6{margin-left:50%}.kv-main .offset-md-7{margin-left:58.33333%}.kv-main .offset-md-8{margin-left:66.66667%}.kv-main .offset-md-9{margin-left:75%}.kv-main .offset-md-10{margin-left:83.33333%}.kv-main .offset-md-11{margin-left:91.66667%}}@media (min-width:992px){.kv-main .col-lg{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-lg-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-lg-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-lg-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-lg-3{flex:0 0 25%;max-width:25%}.kv-main .col-lg-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-lg-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-lg-6{flex:0 0 50%;max-width:50%}.kv-main .col-lg-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-lg-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-lg-9{flex:0 0 75%;max-width:75%}.kv-main .col-lg-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-lg-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-lg-12{flex:0 0 100%;max-width:100%}.kv-main .order-lg-first{order:-1}.kv-main .order-lg-last{order:13}.kv-main .order-lg-0{order:0}.kv-main .order-lg-1{order:1}.kv-main .order-lg-2{order:2}.kv-main .order-lg-3{order:3}.kv-main .order-lg-4{order:4}.kv-main .order-lg-5{order:5}.kv-main .order-lg-6{order:6}.kv-main .order-lg-7{order:7}.kv-main .order-lg-8{order:8}.kv-main .order-lg-9{order:9}.kv-main .order-lg-10{order:10}.kv-main .order-lg-11{order:11}.kv-main .order-lg-12{order:12}.kv-main .offset-lg-0{margin-left:0}.kv-main .offset-lg-1{margin-left:8.33333%}.kv-main .offset-lg-2{margin-left:16.66667%}.kv-main .offset-lg-3{margin-left:25%}.kv-main .offset-lg-4{margin-left:33.33333%}.kv-main .offset-lg-5{margin-left:41.66667%}.kv-main .offset-lg-6{margin-left:50%}.kv-main .offset-lg-7{margin-left:58.33333%}.kv-main .offset-lg-8{margin-left:66.66667%}.kv-main .offset-lg-9{margin-left:75%}.kv-main .offset-lg-10{margin-left:83.33333%}.kv-main .offset-lg-11{margin-left:91.66667%}}.kv-main .d-inline{display:inline!important}.kv-main .d-inline-block{display:inline-block!important}.kv-main .d-block,[data-type=manage-blog]:hover .kv-edit-selector{display:block!important}.kv-main .d-table{display:table!important}.kv-main .d-table-row{display:table-row!important}.kv-main .d-table-cell{display:table-cell!important}.kv-main .d-flex{display:flex!important}.kv-main .d-inline-flex{display:inline-flex!important}@media (min-width:576px){.kv-main .d-sm-none{display:none!important}.kv-main .d-sm-inline{display:inline!important}.kv-main .d-sm-inline-block{display:inline-block!important}.kv-main .d-sm-block{display:block!important}.kv-main .d-sm-table{display:table!important}.kv-main .d-sm-table-row{display:table-row!important}.kv-main .d-sm-table-cell{display:table-cell!important}.kv-main .d-sm-flex{display:flex!important}.kv-main .d-sm-inline-flex{display:inline-flex!important}}@media (min-width:768px){.kv-main .d-md-none{display:none!important}.kv-main .d-md-inline{display:inline!important}.kv-main .d-md-inline-block{display:inline-block!important}.kv-main .d-md-block{display:block!important}.kv-main .d-md-table{display:table!important}.kv-main .d-md-table-row{display:table-row!important}.kv-main .d-md-table-cell{display:table-cell!important}.kv-main .d-md-flex{display:flex!important}.kv-main .d-md-inline-flex{display:inline-flex!important}}@media (min-width:992px){.kv-main .d-lg-none{display:none!important}.kv-main .d-lg-inline{display:inline!important}.kv-main .d-lg-inline-block{display:inline-block!important}.kv-main .d-lg-block{display:block!important}.kv-main .d-lg-table{display:table!important}.kv-main .d-lg-table-row{display:table-row!important}.kv-main .d-lg-table-cell{display:table-cell!important}.kv-main .d-lg-flex{display:flex!important}.kv-main .d-lg-inline-flex{display:inline-flex!important}}@media (min-width:1200px){.kv-main .col-xl{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-xl-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-xl-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-xl-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-xl-3{flex:0 0 25%;max-width:25%}.kv-main .col-xl-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-xl-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-xl-6{flex:0 0 50%;max-width:50%}.kv-main .col-xl-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-xl-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-xl-9{flex:0 0 75%;max-width:75%}.kv-main .col-xl-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-xl-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-xl-12{flex:0 0 100%;max-width:100%}.kv-main .order-xl-first{order:-1}.kv-main .order-xl-last{order:13}.kv-main .order-xl-0{order:0}.kv-main .order-xl-1{order:1}.kv-main .order-xl-2{order:2}.kv-main .order-xl-3{order:3}.kv-main .order-xl-4{order:4}.kv-main .order-xl-5{order:5}.kv-main .order-xl-6{order:6}.kv-main .order-xl-7{order:7}.kv-main .order-xl-8{order:8}.kv-main .order-xl-9{order:9}.kv-main .order-xl-10{order:10}.kv-main .order-xl-11{order:11}.kv-main .order-xl-12{order:12}.kv-main .offset-xl-0{margin-left:0}.kv-main .offset-xl-1{margin-left:8.33333%}.kv-main .offset-xl-2{margin-left:16.66667%}.kv-main .offset-xl-3{margin-left:25%}.kv-main .offset-xl-4{margin-left:33.33333%}.kv-main .offset-xl-5{margin-left:41.66667%}.kv-main .offset-xl-6{margin-left:50%}.kv-main .offset-xl-7{margin-left:58.33333%}.kv-main .offset-xl-8{margin-left:66.66667%}.kv-main .offset-xl-9{margin-left:75%}.kv-main .offset-xl-10{margin-left:83.33333%}.kv-main .offset-xl-11{margin-left:91.66667%}.kv-main .d-xl-none{display:none!important}.kv-main .d-xl-inline{display:inline!important}.kv-main .d-xl-inline-block{display:inline-block!important}.kv-main .d-xl-block{display:block!important}.kv-main .d-xl-table{display:table!important}.kv-main .d-xl-table-row{display:table-row!important}.kv-main .d-xl-table-cell{display:table-cell!important}.kv-main .d-xl-flex{display:flex!important}.kv-main .d-xl-inline-flex{display:inline-flex!important}}@media (min-width:1440px){.kv-main .col-xxl{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-xxl-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-xxl-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-xxl-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-xxl-3{flex:0 0 25%;max-width:25%}.kv-main .col-xxl-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-xxl-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-xxl-6{flex:0 0 50%;max-width:50%}.kv-main .col-xxl-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-xxl-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-xxl-9{flex:0 0 75%;max-width:75%}.kv-main .col-xxl-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-xxl-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-xxl-12{flex:0 0 100%;max-width:100%}.kv-main .order-xxl-first{order:-1}.kv-main .order-xxl-last{order:13}.kv-main .order-xxl-0{order:0}.kv-main .order-xxl-1{order:1}.kv-main .order-xxl-2{order:2}.kv-main .order-xxl-3{order:3}.kv-main .order-xxl-4{order:4}.kv-main .order-xxl-5{order:5}.kv-main .order-xxl-6{order:6}.kv-main .order-xxl-7{order:7}.kv-main .order-xxl-8{order:8}.kv-main .order-xxl-9{order:9}.kv-main .order-xxl-10{order:10}.kv-main .order-xxl-11{order:11}.kv-main .order-xxl-12{order:12}.kv-main .offset-xxl-0{margin-left:0}.kv-main .offset-xxl-1{margin-left:8.33333%}.kv-main .offset-xxl-2{margin-left:16.66667%}.kv-main .offset-xxl-3{margin-left:25%}.kv-main .offset-xxl-4{margin-left:33.33333%}.kv-main .offset-xxl-5{margin-left:41.66667%}.kv-main .offset-xxl-6{margin-left:50%}.kv-main .offset-xxl-7{margin-left:58.33333%}.kv-main .offset-xxl-8{margin-left:66.66667%}.kv-main .offset-xxl-9{margin-left:75%}.kv-main .offset-xxl-10{margin-left:83.33333%}.kv-main .offset-xxl-11{margin-left:91.66667%}.kv-main .d-xxl-none{display:none!important}.kv-main .d-xxl-inline{display:inline!important}.kv-main .d-xxl-inline-block{display:inline-block!important}.kv-main .d-xxl-block{display:block!important}.kv-main .d-xxl-table{display:table!important}.kv-main .d-xxl-table-row{display:table-row!important}.kv-main .d-xxl-table-cell{display:table-cell!important}.kv-main .d-xxl-flex{display:flex!important}.kv-main .d-xxl-inline-flex{display:inline-flex!important}}@media (min-width:1758px){.kv-main .col-xxxl{flex-basis:0;flex-grow:1;max-width:100%}.kv-main .col-xxxl-auto{flex:0 0 auto;width:auto;max-width:none}.kv-main .col-xxxl-1{flex:0 0 8.33333%;max-width:8.33333%}.kv-main .col-xxxl-2{flex:0 0 16.66667%;max-width:16.66667%}.kv-main .col-xxxl-3{flex:0 0 25%;max-width:25%}.kv-main .col-xxxl-4{flex:0 0 33.33333%;max-width:33.33333%}.kv-main .col-xxxl-5{flex:0 0 41.66667%;max-width:41.66667%}.kv-main .col-xxxl-6{flex:0 0 50%;max-width:50%}.kv-main .col-xxxl-7{flex:0 0 58.33333%;max-width:58.33333%}.kv-main .col-xxxl-8{flex:0 0 66.66667%;max-width:66.66667%}.kv-main .col-xxxl-9{flex:0 0 75%;max-width:75%}.kv-main .col-xxxl-10{flex:0 0 83.33333%;max-width:83.33333%}.kv-main .col-xxxl-11{flex:0 0 91.66667%;max-width:91.66667%}.kv-main .col-xxxl-12{flex:0 0 100%;max-width:100%}.kv-main .order-xxxl-first{order:-1}.kv-main .order-xxxl-last{order:13}.kv-main .order-xxxl-0{order:0}.kv-main .order-xxxl-1{order:1}.kv-main .order-xxxl-2{order:2}.kv-main .order-xxxl-3{order:3}.kv-main .order-xxxl-4{order:4}.kv-main .order-xxxl-5{order:5}.kv-main .order-xxxl-6{order:6}.kv-main .order-xxxl-7{order:7}.kv-main .order-xxxl-8{order:8}.kv-main .order-xxxl-9{order:9}.kv-main .order-xxxl-10{order:10}.kv-main .order-xxxl-11{order:11}.kv-main .order-xxxl-12{order:12}.kv-main .offset-xxxl-0{margin-left:0}.kv-main .offset-xxxl-1{margin-left:8.33333%}.kv-main .offset-xxxl-2{margin-left:16.66667%}.kv-main .offset-xxxl-3{margin-left:25%}.kv-main .offset-xxxl-4{margin-left:33.33333%}.kv-main .offset-xxxl-5{margin-left:41.66667%}.kv-main .offset-xxxl-6{margin-left:50%}.kv-main .offset-xxxl-7{margin-left:58.33333%}.kv-main .offset-xxxl-8{margin-left:66.66667%}.kv-main .offset-xxxl-9{margin-left:75%}.kv-main .offset-xxxl-10{margin-left:83.33333%}.kv-main .offset-xxxl-11{margin-left:91.66667%}.kv-main .d-xxxl-none{display:none!important}.kv-main .d-xxxl-inline{display:inline!important}.kv-main .d-xxxl-inline-block{display:inline-block!important}.kv-main .d-xxxl-block{display:block!important}.kv-main .d-xxxl-table{display:table!important}.kv-main .d-xxxl-table-row{display:table-row!important}.kv-main .d-xxxl-table-cell{display:table-cell!important}.kv-main .d-xxxl-flex{display:flex!important}.kv-main .d-xxxl-inline-flex{display:inline-flex!important}}@media print{.kv-main .d-print-none{display:none!important}.kv-main .d-print-inline{display:inline!important}.kv-main .d-print-inline-block{display:inline-block!important}.kv-main .d-print-block{display:block!important}.kv-main .d-print-table{display:table!important}.kv-main .d-print-table-row{display:table-row!important}.kv-main .d-print-table-cell{display:table-cell!important}.kv-main .d-print-flex{display:flex!important}.kv-main .d-print-inline-flex{display:inline-flex!important}}.kv-main .flex-row{flex-direction:row!important}.kv-main .flex-column{flex-direction:column!important}.kv-main .flex-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-wrap{flex-wrap:wrap!important}.kv-main .flex-nowrap{flex-wrap:nowrap!important}.kv-main .flex-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-fill{flex:1 1 auto!important}.kv-main .flex-grow-0{flex-grow:0!important}.kv-main .flex-grow-1{flex-grow:1!important}.kv-main .flex-shrink-0{flex-shrink:0!important}.kv-main .flex-shrink-1{flex-shrink:1!important}.kv-main .justify-content-start{justify-content:flex-start!important}.kv-main .justify-content-end{justify-content:flex-end!important}.kv-main .justify-content-center{justify-content:center!important}.kv-main .justify-content-between{justify-content:space-between!important}.kv-main .justify-content-around{justify-content:space-around!important}.kv-main .align-items-start{align-items:flex-start!important}.kv-main .align-items-end{align-items:flex-end!important}.kv-main .align-items-center{align-items:center!important}.kv-main .align-items-baseline{align-items:baseline!important}.kv-main .align-items-stretch{align-items:stretch!important}.kv-main .align-content-start{align-content:flex-start!important}.kv-main .align-content-end{align-content:flex-end!important}.kv-main .align-content-center{align-content:center!important}.kv-main .align-content-between{align-content:space-between!important}.kv-main .align-content-around{align-content:space-around!important}.kv-main .align-content-stretch{align-content:stretch!important}.kv-main .align-self-auto{align-self:auto!important}.kv-main .align-self-start{align-self:flex-start!important}.kv-main .align-self-end{align-self:flex-end!important}.kv-main .align-self-center{align-self:center!important}.kv-main .align-self-baseline{align-self:baseline!important}.kv-main .align-self-stretch{align-self:stretch!important}@media (min-width:576px){.kv-main .flex-sm-row{flex-direction:row!important}.kv-main .flex-sm-column{flex-direction:column!important}.kv-main .flex-sm-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-sm-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-sm-wrap{flex-wrap:wrap!important}.kv-main .flex-sm-nowrap{flex-wrap:nowrap!important}.kv-main .flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-sm-fill{flex:1 1 auto!important}.kv-main .flex-sm-grow-0{flex-grow:0!important}.kv-main .flex-sm-grow-1{flex-grow:1!important}.kv-main .flex-sm-shrink-0{flex-shrink:0!important}.kv-main .flex-sm-shrink-1{flex-shrink:1!important}.kv-main .justify-content-sm-start{justify-content:flex-start!important}.kv-main .justify-content-sm-end{justify-content:flex-end!important}.kv-main .justify-content-sm-center{justify-content:center!important}.kv-main .justify-content-sm-between{justify-content:space-between!important}.kv-main .justify-content-sm-around{justify-content:space-around!important}.kv-main .align-items-sm-start{align-items:flex-start!important}.kv-main .align-items-sm-end{align-items:flex-end!important}.kv-main .align-items-sm-center{align-items:center!important}.kv-main .align-items-sm-baseline{align-items:baseline!important}.kv-main .align-items-sm-stretch{align-items:stretch!important}.kv-main .align-content-sm-start{align-content:flex-start!important}.kv-main .align-content-sm-end{align-content:flex-end!important}.kv-main .align-content-sm-center{align-content:center!important}.kv-main .align-content-sm-between{align-content:space-between!important}.kv-main .align-content-sm-around{align-content:space-around!important}.kv-main .align-content-sm-stretch{align-content:stretch!important}.kv-main .align-self-sm-auto{align-self:auto!important}.kv-main .align-self-sm-start{align-self:flex-start!important}.kv-main .align-self-sm-end{align-self:flex-end!important}.kv-main .align-self-sm-center{align-self:center!important}.kv-main .align-self-sm-baseline{align-self:baseline!important}.kv-main .align-self-sm-stretch{align-self:stretch!important}.lahuni83 .logo-small .logo-image{max-height:2.5rem}}@media (min-width:768px){.kv-main .flex-md-row{flex-direction:row!important}.kv-main .flex-md-column{flex-direction:column!important}.kv-main .flex-md-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-md-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-md-wrap{flex-wrap:wrap!important}.kv-main .flex-md-nowrap{flex-wrap:nowrap!important}.kv-main .flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-md-fill{flex:1 1 auto!important}.kv-main .flex-md-grow-0{flex-grow:0!important}.kv-main .flex-md-grow-1{flex-grow:1!important}.kv-main .flex-md-shrink-0{flex-shrink:0!important}.kv-main .flex-md-shrink-1{flex-shrink:1!important}.kv-main .justify-content-md-start{justify-content:flex-start!important}.kv-main .justify-content-md-end{justify-content:flex-end!important}.kv-main .justify-content-md-center{justify-content:center!important}.kv-main .justify-content-md-between{justify-content:space-between!important}.kv-main .justify-content-md-around{justify-content:space-around!important}.kv-main .align-items-md-start{align-items:flex-start!important}.kv-main .align-items-md-end{align-items:flex-end!important}.kv-main .align-items-md-center{align-items:center!important}.kv-main .align-items-md-baseline{align-items:baseline!important}.kv-main .align-items-md-stretch{align-items:stretch!important}.kv-main .align-content-md-start{align-content:flex-start!important}.kv-main .align-content-md-end{align-content:flex-end!important}.kv-main .align-content-md-center{align-content:center!important}.kv-main .align-content-md-between{align-content:space-between!important}.kv-main .align-content-md-around{align-content:space-around!important}.kv-main .align-content-md-stretch{align-content:stretch!important}.kv-main .align-self-md-auto{align-self:auto!important}.kv-main .align-self-md-start{align-self:flex-start!important}.kv-main .align-self-md-end{align-self:flex-end!important}.kv-main .align-self-md-center{align-self:center!important}.kv-main .align-self-md-baseline{align-self:baseline!important}.kv-main .align-self-md-stretch{align-self:stretch!important}}@media (min-width:992px){.kv-main .flex-lg-row{flex-direction:row!important}.kv-main .flex-lg-column{flex-direction:column!important}.kv-main .flex-lg-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-lg-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-lg-wrap{flex-wrap:wrap!important}.kv-main .flex-lg-nowrap{flex-wrap:nowrap!important}.kv-main .flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-lg-fill{flex:1 1 auto!important}.kv-main .flex-lg-grow-0{flex-grow:0!important}.kv-main .flex-lg-grow-1{flex-grow:1!important}.kv-main .flex-lg-shrink-0{flex-shrink:0!important}.kv-main .flex-lg-shrink-1{flex-shrink:1!important}.kv-main .justify-content-lg-start{justify-content:flex-start!important}.kv-main .justify-content-lg-end{justify-content:flex-end!important}.kv-main .justify-content-lg-center{justify-content:center!important}.kv-main .justify-content-lg-between{justify-content:space-between!important}.kv-main .justify-content-lg-around{justify-content:space-around!important}.kv-main .align-items-lg-start{align-items:flex-start!important}.kv-main .align-items-lg-end{align-items:flex-end!important}.kv-main .align-items-lg-center{align-items:center!important}.kv-main .align-items-lg-baseline{align-items:baseline!important}.kv-main .align-items-lg-stretch{align-items:stretch!important}.kv-main .align-content-lg-start{align-content:flex-start!important}.kv-main .align-content-lg-end{align-content:flex-end!important}.kv-main .align-content-lg-center{align-content:center!important}.kv-main .align-content-lg-between{align-content:space-between!important}.kv-main .align-content-lg-around{align-content:space-around!important}.kv-main .align-content-lg-stretch{align-content:stretch!important}.kv-main .align-self-lg-auto{align-self:auto!important}.kv-main .align-self-lg-start{align-self:flex-start!important}.kv-main .align-self-lg-end{align-self:flex-end!important}.kv-main .align-self-lg-center{align-self:center!important}.kv-main .align-self-lg-baseline{align-self:baseline!important}.kv-main .align-self-lg-stretch{align-self:stretch!important}}@media (min-width:1200px){.kv-main .flex-xl-row{flex-direction:row!important}.kv-main .flex-xl-column{flex-direction:column!important}.kv-main .flex-xl-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-xl-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-xl-wrap{flex-wrap:wrap!important}.kv-main .flex-xl-nowrap{flex-wrap:nowrap!important}.kv-main .flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-xl-fill{flex:1 1 auto!important}.kv-main .flex-xl-grow-0{flex-grow:0!important}.kv-main .flex-xl-grow-1{flex-grow:1!important}.kv-main .flex-xl-shrink-0{flex-shrink:0!important}.kv-main .flex-xl-shrink-1{flex-shrink:1!important}.kv-main .justify-content-xl-start{justify-content:flex-start!important}.kv-main .justify-content-xl-end{justify-content:flex-end!important}.kv-main .justify-content-xl-center{justify-content:center!important}.kv-main .justify-content-xl-between{justify-content:space-between!important}.kv-main .justify-content-xl-around{justify-content:space-around!important}.kv-main .align-items-xl-start{align-items:flex-start!important}.kv-main .align-items-xl-end{align-items:flex-end!important}.kv-main .align-items-xl-center{align-items:center!important}.kv-main .align-items-xl-baseline{align-items:baseline!important}.kv-main .align-items-xl-stretch{align-items:stretch!important}.kv-main .align-content-xl-start{align-content:flex-start!important}.kv-main .align-content-xl-end{align-content:flex-end!important}.kv-main .align-content-xl-center{align-content:center!important}.kv-main .align-content-xl-between{align-content:space-between!important}.kv-main .align-content-xl-around{align-content:space-around!important}.kv-main .align-content-xl-stretch{align-content:stretch!important}.kv-main .align-self-xl-auto{align-self:auto!important}.kv-main .align-self-xl-start{align-self:flex-start!important}.kv-main .align-self-xl-end{align-self:flex-end!important}.kv-main .align-self-xl-center{align-self:center!important}.kv-main .align-self-xl-baseline{align-self:baseline!important}.kv-main .align-self-xl-stretch{align-self:stretch!important}}@media (min-width:1440px){.kv-main .flex-xxl-row{flex-direction:row!important}.kv-main .flex-xxl-column{flex-direction:column!important}.kv-main .flex-xxl-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-xxl-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-xxl-wrap{flex-wrap:wrap!important}.kv-main .flex-xxl-nowrap{flex-wrap:nowrap!important}.kv-main .flex-xxl-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-xxl-fill{flex:1 1 auto!important}.kv-main .flex-xxl-grow-0{flex-grow:0!important}.kv-main .flex-xxl-grow-1{flex-grow:1!important}.kv-main .flex-xxl-shrink-0{flex-shrink:0!important}.kv-main .flex-xxl-shrink-1{flex-shrink:1!important}.kv-main .justify-content-xxl-start{justify-content:flex-start!important}.kv-main .justify-content-xxl-end{justify-content:flex-end!important}.kv-main .justify-content-xxl-center{justify-content:center!important}.kv-main .justify-content-xxl-between{justify-content:space-between!important}.kv-main .justify-content-xxl-around{justify-content:space-around!important}.kv-main .align-items-xxl-start{align-items:flex-start!important}.kv-main .align-items-xxl-end{align-items:flex-end!important}.kv-main .align-items-xxl-center{align-items:center!important}.kv-main .align-items-xxl-baseline{align-items:baseline!important}.kv-main .align-items-xxl-stretch{align-items:stretch!important}.kv-main .align-content-xxl-start{align-content:flex-start!important}.kv-main .align-content-xxl-end{align-content:flex-end!important}.kv-main .align-content-xxl-center{align-content:center!important}.kv-main .align-content-xxl-between{align-content:space-between!important}.kv-main .align-content-xxl-around{align-content:space-around!important}.kv-main .align-content-xxl-stretch{align-content:stretch!important}.kv-main .align-self-xxl-auto{align-self:auto!important}.kv-main .align-self-xxl-start{align-self:flex-start!important}.kv-main .align-self-xxl-end{align-self:flex-end!important}.kv-main .align-self-xxl-center{align-self:center!important}.kv-main .align-self-xxl-baseline{align-self:baseline!important}.kv-main .align-self-xxl-stretch{align-self:stretch!important}}@media (min-width:1758px){.kv-main .flex-xxxl-row{flex-direction:row!important}.kv-main .flex-xxxl-column{flex-direction:column!important}.kv-main .flex-xxxl-row-reverse{flex-direction:row-reverse!important}.kv-main .flex-xxxl-column-reverse{flex-direction:column-reverse!important}.kv-main .flex-xxxl-wrap{flex-wrap:wrap!important}.kv-main .flex-xxxl-nowrap{flex-wrap:nowrap!important}.kv-main .flex-xxxl-wrap-reverse{flex-wrap:wrap-reverse!important}.kv-main .flex-xxxl-fill{flex:1 1 auto!important}.kv-main .flex-xxxl-grow-0{flex-grow:0!important}.kv-main .flex-xxxl-grow-1{flex-grow:1!important}.kv-main .flex-xxxl-shrink-0{flex-shrink:0!important}.kv-main .flex-xxxl-shrink-1{flex-shrink:1!important}.kv-main .justify-content-xxxl-start{justify-content:flex-start!important}.kv-main .justify-content-xxxl-end{justify-content:flex-end!important}.kv-main .justify-content-xxxl-center{justify-content:center!important}.kv-main .justify-content-xxxl-between{justify-content:space-between!important}.kv-main .justify-content-xxxl-around{justify-content:space-around!important}.kv-main .align-items-xxxl-start{align-items:flex-start!important}.kv-main .align-items-xxxl-end{align-items:flex-end!important}.kv-main .align-items-xxxl-center{align-items:center!important}.kv-main .align-items-xxxl-baseline{align-items:baseline!important}.kv-main .align-items-xxxl-stretch{align-items:stretch!important}.kv-main .align-content-xxxl-start{align-content:flex-start!important}.kv-main .align-content-xxxl-end{align-content:flex-end!important}.kv-main .align-content-xxxl-center{align-content:center!important}.kv-main .align-content-xxxl-between{align-content:space-between!important}.kv-main .align-content-xxxl-around{align-content:space-around!important}.kv-main .align-content-xxxl-stretch{align-content:stretch!important}.kv-main .align-self-xxxl-auto{align-self:auto!important}.kv-main .align-self-xxxl-start{align-self:flex-start!important}.kv-main .align-self-xxxl-end{align-self:flex-end!important}.kv-main .align-self-xxxl-center{align-self:center!important}.kv-main .align-self-xxxl-baseline{align-self:baseline!important}.kv-main .align-self-xxxl-stretch{align-self:stretch!important}}.page-title--sm{font-size:calc(2.5rem + 20 * ((100vw - 414px)/ 1266));line-height:calc(3rem + 16 * ((100vw - 414px)/ 1266));margin-bottom:calc(1rem + 8 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.page-title--sm{font-size:2.5rem;line-height:3rem;margin-bottom:1rem}}@media screen and (min-width:1680px){.page-title--sm{font-size:3.75rem;line-height:4rem;margin-bottom:1.5rem}}.page-title--md{font-size:calc(3rem + 28 * ((100vw - 414px)/ 1266));line-height:calc(3.5rem + 24 * ((100vw - 414px)/ 1266));margin-bottom:calc(1rem + 8 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.page-title--md{font-size:3rem;line-height:3.5rem;margin-bottom:1rem}}@media screen and (min-width:1680px){.page-title--md{font-size:4.75rem;line-height:5rem;margin-bottom:1.5rem}}.page-title--lg{font-size:calc(3.75rem + 36 * ((100vw - 414px)/ 1266));line-height:calc(4rem + 32 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.25rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.page-title--lg{font-size:3.75rem;line-height:4rem;margin-bottom:1.25rem}}@media screen and (min-width:1680px){.page-title--lg{font-size:6rem;line-height:6rem;margin-bottom:1.5rem}}.section-title--sm{font-size:calc(2rem + 8 * ((100vw - 414px)/ 1266));line-height:calc(2.5rem + 8 * ((100vw - 414px)/ 1266));margin-bottom:calc(.75rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.section-title--sm{font-size:2rem;line-height:2.5rem;margin-bottom:.75rem}}@media screen and (min-width:1680px){.section-title--sm{font-size:2.5rem;line-height:3rem;margin-bottom:1rem}}.section-title--md{font-size:calc(2.5rem + 8 * ((100vw - 414px)/ 1266));line-height:calc(3rem + 8 * ((100vw - 414px)/ 1266));margin-bottom:calc(1rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.section-title--md{font-size:2.5rem;line-height:3rem;margin-bottom:1rem}}@media screen and (min-width:1680px){.section-title--md{font-size:3rem;line-height:3.5rem;margin-bottom:1.25rem}}.section-title--lg{font-size:calc(3rem + 12 * ((100vw - 414px)/ 1266));line-height:calc(3.5rem + 8 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.25rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.section-title--lg{font-size:3rem;line-height:3.5rem;margin-bottom:1.25rem}}@media screen and (min-width:1680px){.section-title--lg{font-size:3.75rem;line-height:4rem;margin-bottom:1.5rem}}.section-subtitle--sm{font-size:calc(1rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(1.5rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.25rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.section-subtitle--sm{font-size:1rem;line-height:1.5rem;margin-bottom:1.25rem}}@media screen and (min-width:1680px){.section-subtitle--sm{font-size:1.125rem;line-height:1.75rem;margin-bottom:1.5rem}}.section-subtitle--md{font-size:calc(1.25rem + 4 * ((100vw - 414px)/ 1266));line-height:calc(1.75rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.5rem + 0 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.section-subtitle--md{font-size:1.25rem;line-height:1.75rem;margin-bottom:1.5rem}}@media screen and (min-width:1680px){.section-subtitle--md{font-size:1.5rem;line-height:2rem;margin-bottom:1.5rem}}.title--xs{font-size:calc(1rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(1.5rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(.75rem + 0 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.title--xs{font-size:1rem;line-height:1.5rem;margin-bottom:.75rem}}@media screen and (min-width:1680px){.title--xs{font-size:1.125rem;line-height:1.75rem;margin-bottom:.75rem}}.title--sm{font-size:calc(1.25rem + 4 * ((100vw - 414px)/ 1266));line-height:calc(1.75rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(.75rem + 0 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.title--sm{font-size:1.25rem;line-height:1.75rem;margin-bottom:.75rem}}@media screen and (min-width:1680px){.title--sm{font-size:1.5rem;line-height:2rem;margin-bottom:.75rem}}.title--md{font-size:calc(1.5rem + 8 * ((100vw - 414px)/ 1266));line-height:calc(2rem + 8 * ((100vw - 414px)/ 1266));margin-bottom:calc(.75rem + 0 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.title--md{font-size:1.5rem;line-height:2rem;margin-bottom:.75rem}}@media screen and (min-width:1680px){.title--md{font-size:2rem;line-height:2.5rem;margin-bottom:.75rem}}.title--lg{font-size:calc(2rem + 8 * ((100vw - 414px)/ 1266));line-height:calc(2.5rem + 8 * ((100vw - 414px)/ 1266));margin-bottom:calc(1rem + 0 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.title--lg{font-size:2rem;line-height:2.5rem;margin-bottom:1rem}}@media screen and (min-width:1680px){.title--lg{font-size:2.5rem;line-height:3rem;margin-bottom:1rem}}.article--md,.article--md p{font-size:calc(1.25rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(2rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(2rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.article--md,.article--md p{font-size:1.25rem;line-height:2rem;margin-bottom:2rem}}@media screen and (min-width:1680px){.article--md{font-size:1.375rem;line-height:2.25rem;margin-bottom:2.25rem}.article--md p{font-size:1.375rem;line-height:2.25rem}}.kv-main a,a{font-family:inherit;line-height:inherit;cursor:pointer;transition:background-color .15s cubic-bezier(.08,.91,.36,.98)}.body--xs{font-size:calc(.75rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(1rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(1rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.body--xs{font-size:.75rem;line-height:1rem;margin-bottom:1rem}}@media screen and (min-width:1680px){.article--md p{margin-bottom:2.25rem}.body--xs{font-size:.875rem;line-height:1.25rem;margin-bottom:1.25rem}}.body--sm{font-size:calc(.875rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(1.25rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.25rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.body--sm{font-size:.875rem;line-height:1.25rem;margin-bottom:1.25rem}}@media screen and (min-width:1680px){.body--sm{font-size:1rem;line-height:1.5rem;margin-bottom:1.5rem}}.body--md{font-size:calc(1rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(1.5rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.5rem + 4 * ((100vw - 414px)/ 1266))}@media screen and (max-width:414px){.body--md{font-size:1rem;line-height:1.5rem;margin-bottom:1.5rem}}@media screen and (min-width:1680px){.body--md{font-size:1.125rem;line-height:1.75rem;margin-bottom:1.75rem}}.body--lg{font-size:calc(1.125rem + 2 * ((100vw - 414px)/ 1266));line-height:calc(1.75rem + 4 * ((100vw - 414px)/ 1266));margin-bottom:calc(1.75rem + 4 * ((100vw - 414px)/ 1266))}.section--sm{padding:calc(1rem + 8 * ((100vw - 414px)/ 1266)) 0}@media screen and (max-width:414px){.body--lg{font-size:1.125rem;line-height:1.75rem;margin-bottom:1.75rem}.section--sm{padding:1rem 0}}@media screen and (min-width:1680px){.body--lg{font-size:1.25rem;line-height:2rem;margin-bottom:2rem}.section--sm{padding:1.5rem 0}}.section--md{padding:calc(2rem + 8 * ((100vw - 414px)/ 1266)) 0}@media screen and (max-width:414px){.section--md{padding:2rem 0}}@media screen and (min-width:1680px){.section--md{padding:2.5rem 0}}.section--lg{padding:calc(3rem + 16 * ((100vw - 414px)/ 1266)) 0}@media screen and (max-width:414px){.section--lg{padding:3rem 0}}@media screen and (min-width:1680px){.section--lg{padding:4rem 0}}.section--xl{padding:calc(3.5rem + 32 * ((100vw - 414px)/ 1266)) 0}@media screen and (max-width:414px){.section--xl{padding:3.5rem 0}}@media screen and (min-width:1680px){.section--xl{padding:5.5rem 0}}h1{font-size:2.25rem}h1.font-scale-xs{font-size:1.6875rem}h1.font-scale-sm{font-size:1.96875rem}@media (min-width:992px){h1.font-scale-md{font-size:2.53125rem}h1.font-scale-lg{font-size:2.8125rem}h1.font-scale-xl{font-size:3.375rem}}h2{font-size:2rem}h2.font-scale-xs{font-size:1.5rem}h2.font-scale-sm,h3{font-size:1.75rem}@media (min-width:992px){h2.font-scale-md{font-size:2.25rem}h2.font-scale-lg{font-size:2.5rem}h2.font-scale-xl{font-size:3rem}}.lahuni83 .mobile nav ul li [data-uri-path],h4{font-size:1.5rem}h3.font-scale-xs{font-size:1.3125rem}h3.font-scale-sm{font-size:1.53125rem}@media (min-width:992px){h3.font-scale-md{font-size:1.96875rem}h3.font-scale-lg{font-size:2.1875rem}h3.font-scale-xl{font-size:2.625rem}}h4.font-scale-xs{font-size:1.125rem}h4.font-scale-sm{font-size:1.3125rem}@media (min-width:992px){h4.font-scale-md{font-size:1.6875rem}h4.font-scale-lg{font-size:1.875rem}h4.font-scale-xl{font-size:2.25rem}}h5{font-size:1.25rem}.body-text,h6,p{font-size:1rem}h5.font-scale-xs{font-size:.9375rem}h5.font-scale-sm{font-size:1.09375rem}@media (min-width:992px){h5.font-scale-md{font-size:1.40625rem}h5.font-scale-lg{font-size:1.5625rem}h5.font-scale-xl{font-size:1.875rem}}h6.font-scale-xs{font-size:.75rem}h6.font-scale-sm{font-size:.875rem}@media (min-width:992px){h6.font-scale-md{font-size:1.125rem}h6.font-scale-lg{font-size:1.25rem}h6.font-scale-xl{font-size:1.5rem}}.body-text.font-scale-xs,p.font-scale-xs{font-size:.75rem}p.font-scale-sm{font-size:.875rem}.body-text.font-scale-sm,.button-xs{font-size:.875rem}@media (min-width:992px){p.font-scale-md{font-size:1.125rem}p.font-scale-lg{font-size:1.25rem}p.font-scale-xl{font-size:1.5rem}.body-text.font-scale-md{font-size:1.125rem}.body-text.font-scale-lg{font-size:1.25rem}.body-text.font-scale-xl{font-size:1.5rem}}.kv-menu{cursor:pointer}.kv-main h1,.kv-main h2,.kv-main h3,.kv-main h4,.kv-main h5,.kv-main h6,.kv-main p{overflow-wrap:break-word;word-break:break-word}.kv-main b,.kv-main strong{font-weight:700}.section-subtitle{margin-top:-.5rem}.button-ghost-primary,.button-ghost-quaternary,.button-ghost-secondary,.button-ghost-tertiary,.button-has-title,.button-lg,.button-md,.button-primary,.button-quaternary,.button-secondary,.button-sm,.button-tertiary,.button-xs,.kv-main .button-ghost-primary,.kv-main .button-ghost-quaternary,.kv-main .button-ghost-secondary,.kv-main .button-ghost-tertiary,.kv-main .button-primary,.kv-main .button-quaternary,.kv-main .button-secondary,.kv-main .button-tertiary{display:inline-flex;align-items:center;justify-content:center;transition:450ms cubic-bezier(.23,1,.32,1);text-align:center;font-weight:500;text-decoration:none!important}.button-ghost-primary:focus,.button-ghost-quaternary:focus,.button-ghost-secondary:focus,.button-ghost-tertiary:focus,.button-has-title:focus,.button-lg:focus,.button-md:focus,.button-primary:focus,.button-quaternary:focus,.button-secondary:focus,.button-sm:focus,.button-tertiary:focus,.button-xs:focus{outline:0}.button-ghost-primary:focus,.button-ghost-primary:hover,.button-ghost-quaternary:focus,.button-ghost-quaternary:hover,.button-ghost-secondary:focus,.button-ghost-secondary:hover,.button-ghost-tertiary:focus,.button-ghost-tertiary:hover,.button-has-title:focus,.button-has-title:hover,.button-lg:focus,.button-lg:hover,.button-md:focus,.button-md:hover,.button-primary:focus,.button-primary:hover,.button-quaternary:focus,.button-quaternary:hover,.button-secondary:focus,.button-secondary:hover,.button-sm:focus,.button-sm:hover,.button-tertiary:focus,.button-tertiary:hover,.button-xs:focus,.button-xs:hover{text-decoration:none!important;cursor:pointer}.button-ghost-primary:active,.button-ghost-quaternary:active,.button-ghost-secondary:active,.button-ghost-tertiary:active,.button-has-title:active,.button-lg:active,.button-md:active,.button-primary:active,.button-quaternary:active,.button-secondary:active,.button-sm:active,.button-tertiary:active,.button-xs:active{transform:translateY(1px);transition:none}.button-ghost-primary,.button-ghost-quaternary,.button-ghost-secondary,.button-ghost-tertiary,.button-primary,.button-quaternary,.button-secondary,.button-tertiary,.kv-main .button-ghost-primary,.kv-main .button-ghost-quaternary,.kv-main .button-ghost-secondary,.kv-main .button-ghost-tertiary,.kv-main .button-primary,.kv-main .button-quaternary,.kv-main .button-secondary,.kv-main .button-tertiary{border-radius:.25rem}button.button-ghost-primary,button.button-ghost-quaternary,button.button-ghost-secondary,button.button-ghost-tertiary{background:0 0!important}@media (max-width:575px){.button-full{width:100%}}.button-lg div,.button-lg span,.button-md div,.button-md span,.button-sm div,.button-sm span,.button-xs div,.button-xs span{padding:0!important}.button-lg div,.button-lg i,.button-lg span,.button-md div,.button-md i,.button-md span,.button-sm div,.button-sm i,.button-sm span,.button-xs div,.button-xs i,.button-xs span{display:inline-block;vertical-align:middle!important}.button-xs{line-height:1.42857;padding:.375rem .5rem;min-height:2rem;min-width:2rem}.button-md,.button-sm{line-height:1.5;font-size:1rem}.button-xs div,.button-xs span{margin:0 .25rem}.button-lg div,.button-lg span,.button-md div,.button-md span,.button-sm div,.button-sm span{margin:0 .5rem}.button-sm{padding:.5rem;min-height:2.5rem;min-width:2.5rem}.button-md{padding:.5rem .75rem;min-width:3rem;min-height:3rem}.button-lg{font-size:1.125rem;line-height:1.5556;padding:.5rem 1rem;min-width:3.5rem;min-height:3.5rem}.button-ghost-primary,.button-ghost-quaternary,.button-ghost-secondary,.button-ghost-tertiary{background-color:none}button.button-style-reset{border:none!important}.googlemaps-wrapper{height:100%;width:100%}a:focus{outline:dotted 1px;outline-offset:2px}.kv-main a:focus{outline:dotted 1px;outline-offset:2px}.kv-main a:not([href]):focus,.kv-main a:not([href]):hover{cursor:default}.kv-main .blog-go-back a,.kv-main .blog-post,.kv-main .blog-post a,.kv-main .blog-post-first,.kv-main .blog-post-first a,.kv-main .content-image a,.kv-main .logo a,.kv-main .logo-group a,.kv-main .logo-large a,.kv-main .logo-medium a,.kv-main .logo-small a,.kv-main a.blog-post,.kv-main a.blog-post-first,.kv-main a.social-link,.kv-main nav a{text-decoration:none!important}.kv-main .blog-go-back a:hover,.kv-main .blog-post a:hover,.kv-main .blog-post-first a:hover,.kv-main .blog-post-first:hover,.kv-main .blog-post:hover,.kv-main .content-image a:hover,.kv-main .logo a:hover,.kv-main .logo-group a:hover,.kv-main .logo-large a:hover,.kv-main .logo-medium a:hover,.kv-main .logo-small a:hover,.kv-main a.blog-post-first:hover,.kv-main a.blog-post:hover,.kv-main a.social-link:hover,.kv-main nav a:hover{background-color:transparent}.kv-main h1 a,.kv-main h2 a,.kv-main h3 a,.kv-main h4 a,.kv-main h5 a,.kv-main h6 a,.kv-main p a{font-size:inherit}.drop-shadow-sm{box-shadow:0 4px 3px -2px rgba(0,0,0,.17),0 2px 2px 0 rgba(0,0,0,.13)!important}.drop-shadow-sm.default-card{box-shadow:0 0 0 1px rgba(0,0,0,.04),0 4px 3px -2px rgba(0,0,0,.07),0 2px 2px 0 rgba(0,0,0,.05)!important}.drop-shadow-md{box-shadow:0 7px 5px -5px rgba(0,0,0,.19),0 6px 8px -2px rgba(0,0,0,.18),0 6px 6px 0 rgba(0,0,0,.1)!important}.drop-shadow-md.default-card{box-shadow:0 0 0 1px rgba(0,0,0,.04),0 7px 5px -5px rgba(0,0,0,.11),0 6px 8px -2px rgba(0,0,0,.09),0 6px 6px 0 rgba(0,0,0,.03)!important}.drop-shadow-lg{box-shadow:0 14px 18px -8px rgba(0,0,0,.19),0 12px 12px -5px rgba(0,0,0,.17),0 11px 8px 0 rgba(0,0,0,.08)!important}.drop-shadow-lg.default-card{box-shadow:0 0 0 1px rgba(0,0,0,.04),0 14px 18px -8px rgba(0,0,0,.11),0 12px 12px -5px rgba(0,0,0,.09),0 11px 8px 0 rgba(0,0,0,.03)!important}.contact-form-success{position:absolute;top:50%;left:50%;opacity:0;visibility:hidden;transform:translateX(-50%) translateY(100%);transform-origin:bottom center;transition-property:visibility,opacity,transform;transition-duration:.4s;transition-timing-function:cubic-bezier(.175,.885,.32,1)}.contact-form-success.show{opacity:1;visibility:visible;transform:translateX(-50%) translateY(-50%)}.contact-form-success .success-close{position:absolute;top:6px;right:11px;width:40px;height:40px;border-radius:20px;background-color:#26a69a;display:flex;justify-content:center;align-items:center;cursor:pointer}.captcha-field-wrapper input,.captcha-field-wrapper textarea,.ck-editable-element,.form-success-hide.hide,.live-onboarding .editor .button-lg .div.button-link-broken,.subscribe .button-link-broken,nav ul li a.button:after{display:none!important}#contact-form.hide{opacity:.3}html.small-font-size{font-size:15px}html.medium-font-size{font-size:17px}html.large-font-size{font-size:19px}#custom-header-button-template{display:none}.kv-gallery{cursor:pointer}.error-captcha-container{padding:10px 0;font-size:.9em;opacity:.8;color:red}select{border:0!important;-webkit-appearance:none;-moz-appearance:none}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){select::-ms-expand{display:none}}@keyframes slideDown{0%{transform:translateY(-100px) translateZ(0)}100%{transform:translateY(0) translateZ(0)}}@keyframes slideDownReverse{0%{transform:translateY(0) translateZ(0)}100%{transform:translateY(-100px) translateZ(0)}}.reservation-errors-container{position:absolute;width:100%;z-index:1;top:0;overflow:hidden}.ee-select-box,[data-type=manage-blog]{position:relative}.reservation-errors-container .reservation-errors{width:100%;padding:1em;color:#fff;text-align:center;background-color:red;will-change:transform;animation:.2s forwards slideDown}.reservation-errors-container .reservation-errors.hide{animation:.2s forwards slideDownReverse}.ee-select-box{min-width:200px;max-width:300px}.ee-select-box .ee-select-box-innerwrapper{font-size:1rem;line-height:1.5rem;padding:.72rem;margin-bottom:1rem;text-align:left;cursor:pointer}.ee-select-box .ee-select-box-innerwrapper span{width:calc(100% - 26px);display:block;text-overflow:ellipsis;overflow:hidden;white-space:nowrap}.ee-select-box .ee-select-box-innerwrapper .ee-dropdown-arrow{position:absolute;top:1rem;right:1rem}.ee-select-box .ee-select-box-innerwrapper li,.ee-select-box .ee-select-box-innerwrapper ul{list-style:none;margin:0;padding:0}.ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container{height:0;width:100%;position:absolute;overflow:hidden;z-index:999999;top:3.2rem;left:0;transition:height .5s}.ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li{padding:.5rem 1rem;font-size:1rem;cursor:pointer}.lahuni83 .custom-header-buttons a i,.lahuni83 .mobile .logo h1{font-size:1.25rem}.ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container.open{height:auto;max-height:300px;overflow-y:scroll}[data-type=manage-blog] .kv-edit-selector{display:none;cursor:pointer;position:absolute;top:0;left:0;width:100%;height:100%;border:3px solid #0082ed;user-select:none}[data-type=manage-blog] .kv-edit-selector i{height:40px!important;width:40px!important;border-radius:2px;color:#f1f1f1!important;background-color:#0082ed;box-shadow:0 0 4px 0 rgba(0,0,0,.12),0 4px 4px 0 rgba(0,0,0,.24);top:calc(50% - 20px);left:calc(50% - 20px);position:absolute;line-height:40px;text-align:center!important;cursor:pointer;font-size:24px!important;opacity:1;transition:opacity .2s ease-in-out}.fieldSubscribe-container{margin-top:1rem}.fieldSubscribe-container input[type=checkbox]{width:auto!important;height:auto!important;top:-1px;position:relative;margin-right:5px}.fe-dropdown-container{display:flex;justify-content:flex-end;position:relative}.fe-dropdown-container .fe-dropdown-current-value{display:block;padding:.4rem .8rem;border:1px solid rgba(0,0,0,.1);background-color:#fff;font-size:.875rem;cursor:pointer}.fe-dropdown-container .fe-dropdown{position:absolute;top:0;right:0;display:block;z-index:1;background-color:#fff;border:1px solid rgba(0,0,0,.1);visibility:hidden;transform:scale(.4);transform-origin:top right;transition:transform 250ms cubic-bezier(.075,.82,.165,1),visibility linear 250ms}.fe-dropdown-container .fe-dropdown .fe-dropdown-item{margin:0;font-size:.875rem;padding:.6rem .8rem;cursor:pointer}.lahuni83 .align-right .section-description,.lahuni83 .align-right .section-subtitle,.lahuni83 nav{margin-left:auto}.lahuni83 .mobile .call-to-action,.lahuni83 .mobile .kv-menu{margin-top:1rem;margin-bottom:1rem}.fe-dropdown-container .fe-dropdown .fe-dropdown-item:hover{background-color:rgba(76,142,213,.12)}.fe-dropdown-container.fe-dropdown-active .fe-dropdown{visibility:visible;transform:scale(1);transition:transform 250ms cubic-bezier(.075,.82,.165,1),visibility linear}.feature-modal-mobile{width:100vw;height:100vh;margin:0}.feature-modal-mobile .feature-modal-content{height:100vh;max-height:100vh!important}.feature-modal-close-button{color:#424242!important}.feature-modal-content iframe#iframe--booking{width:700px;min-height:684px;height:100%;position:relative;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:4px;overflow:hidden;outline:0;box-shadow:0 5px 15px rgba(0,0,0,.5)}.background-id_1 .section-title,.background-id_1 .section-title.on_background,.background-id_1 .section-title.on_card{color:rgba(255,255,255,1);text-shadow:none}.background-id_1 pre{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .section-title.on_accent1{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .section-title.on_accent2{text-shadow:none;color:rgba(8,10,82,1)}.background-id_1 .section-subtitle,.background-id_1 .section-subtitle.on_accent1,.background-id_1 .section-subtitle.on_background,.background-id_1 .section-subtitle.on_card{color:rgba(255,255,255,1);text-shadow:none}.background-id_1 .section-subtitle.on_accent2{text-shadow:none;color:rgba(0,0,0,1)}.background-id_1 .section-description,.background-id_1 .section-description.on_card{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .section-description.on_accent1,.background-id_1 .section-description.on_background{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .section-description.on_accent2{text-shadow:none;color:rgba(0,0,0,1)}.background-id_1 .custom-text-cl1{color:rgba(255,255,255,1)}.background-id_1 .custom-text-cl2{color:rgba(0,0,0,1)}.background-id_1 .custom-text-cl3{color:rgba(8,10,82,1)}.background-id_1 .custom-text-cl4{color:rgba(235,33,136,1)}.background-id_1 .button-primary{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-primary:focus,.background-id_1 .button-primary:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-primary.button-background,.background-id_1 .button-primary.button-card{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-primary.button-card:focus,.background-id_1 .button-primary.button-card:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-primary.button-background:focus,.background-id_1 .button-primary.button-background:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-secondary,.background-id_1 .button-secondary.button-background,.background-id_1 .button-secondary.button-background:focus,.background-id_1 .button-secondary.button-background:hover,.background-id_1 .button-secondary.button-card,.background-id_1 .button-secondary.button-card:focus,.background-id_1 .button-secondary.button-card:hover,.background-id_1 .button-secondary:focus,.background-id_1 .button-secondary:hover{background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);text-shadow:none}.background-id_1 .button-tertiary{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-tertiary:focus,.background-id_1 .button-tertiary:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-quaternary,.background-id_1 .button-tertiary.button-background,.background-id_1 .button-tertiary.button-card{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-tertiary.button-card:focus,.background-id_1 .button-tertiary.button-card:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-tertiary.button-background:focus,.background-id_1 .button-tertiary.button-background:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-quaternary:focus,.background-id_1 .button-quaternary:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-quaternary.button-background,.background-id_1 .button-quaternary.button-card{background-color:rgba(235,33,136,1);color:rgba(255,255,255,1);text-shadow:none}.background-id_1 .button-quaternary.button-card:focus,.background-id_1 .button-quaternary.button-card:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-quaternary.button-background:focus,.background-id_1 .button-quaternary.button-background:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-primary{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-primary:focus,.background-id_1 .button-ghost-primary:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-primary.button-background,.background-id_1 .button-ghost-primary.button-card{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-primary.button-card:focus,.background-id_1 .button-ghost-primary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-primary.button-background:focus,.background-id_1 .button-ghost-primary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-secondary{box-shadow:inset 0 0 0 2px rgba(255,255,255,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-secondary:focus,.background-id_1 .button-ghost-secondary:hover{box-shadow:inset 0 0 0 4px rgba(255,255,255,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-secondary.button-background,.background-id_1 .button-ghost-secondary.button-card{box-shadow:inset 0 0 0 2px rgba(255,255,255,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-secondary.button-card:focus,.background-id_1 .button-ghost-secondary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(255,255,255,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-secondary.button-background:focus,.background-id_1 .button-ghost-secondary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(255,255,255,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-tertiary{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-tertiary:focus,.background-id_1 .button-ghost-tertiary:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-quaternary,.background-id_1 .button-ghost-tertiary.button-background,.background-id_1 .button-ghost-tertiary.button-card{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-tertiary.button-card:focus,.background-id_1 .button-ghost-tertiary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-tertiary.button-background:focus,.background-id_1 .button-ghost-tertiary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-quaternary:focus,.background-id_1 .button-ghost-quaternary:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-quaternary.button-background,.background-id_1 .button-ghost-quaternary.button-card{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);color:rgba(255,255,255,1);text-shadow:none}.background-id_1 .button-ghost-quaternary.button-card:focus,.background-id_1 .button-ghost-quaternary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .button-ghost-quaternary.button-background:focus,.background-id_1 .button-ghost-quaternary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .color-stroke.text2{text-shadow:none;stroke:rgba(255,255,255,1)}.background-id_1 a{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 a:hover{color:rgba(255,255,255,1);text-shadow:none;background-color:rgba(241,107,176,.1)}.background-id_1 a:focus{text-shadow:none;outline-color:rgba(255,255,255,1)}.background-id_1 .kv-main a{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .kv-main a:hover{color:rgba(255,255,255,1);text-shadow:none;background-color:rgba(241,107,176,.1)}.background-id_1 .kv-main a:focus{text-shadow:none;outline-color:rgba(255,255,255,1)}.background-id_1 .kv-main .card a,.background-id_1 .kv-main .content-card a,.background-id_1 .kv-main .default-card a,.background-id_1 .kv-main .item-card a{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .kv-main .card a:hover,.background-id_1 .kv-main .content-card a:hover,.background-id_1 .kv-main .default-card a:hover,.background-id_1 .kv-main .item-card a:hover{text-shadow:none;color:rgba(236,60,151,1)}.background-id_1 .default-card{background-color:rgba(17,17,17,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .ee-select-box .ee-select-box-innerwrapper{background-color:rgba(12,12,12,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container{background:rgba(12,12,12,1)}.background-id_1 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li.ee-active-element,.background-id_1 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li:hover{text-shadow:none;background-color:rgba(255,255,255,.08)}.background-id_0 .kv-content,.background-id_0 .text1{text-shadow:none;color:rgba(0,0,0,1)}.background-id_0 .section-title,.background-id_0 .section-title.on_background,.background-id_0 .section-title.on_card{color:rgba(8,10,82,1);text-shadow:none}.background-id_0 pre{text-shadow:none;color:rgba(0,0,0,1)}.background-id_0 .section-title.on_accent1{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .section-title.on_accent2{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .section-subtitle,.background-id_0 .section-subtitle.on_background,.background-id_0 .section-subtitle.on_card{text-shadow:none;color:rgba(0,0,0,1)}.background-id_0 .section-subtitle.on_accent1,.background-id_0 .section-subtitle.on_accent2{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .section-description,.background-id_0 .section-description.on_background,.background-id_0 .section-description.on_card{color:rgba(0,0,0,1);text-shadow:none}.background-id_0 .section-description.on_accent1,.background-id_0 .section-description.on_accent2{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .custom-text-cl1{color:rgba(255,255,255,1)}.background-id_0 .custom-text-cl2{color:rgba(0,0,0,1)}.background-id_0 .custom-text-cl3{color:rgba(8,10,82,1)}.background-id_0 .custom-text-cl4{color:rgba(235,33,136,1)}.background-id_0 .button-primary{background-color:rgba(8,10,82,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-primary:focus,.background-id_0 .button-primary:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-primary.button-background,.background-id_0 .button-primary.button-card{background-color:rgba(8,10,82,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-primary.button-card:focus,.background-id_0 .button-primary.button-card:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-primary.button-background:focus,.background-id_0 .button-primary.button-background:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-secondary{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-secondary:focus,.background-id_0 .button-secondary:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-secondary.button-background,.background-id_0 .button-secondary.button-card{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-secondary.button-card:focus,.background-id_0 .button-secondary.button-card:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-secondary.button-background:focus,.background-id_0 .button-secondary.button-background:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-tertiary{background-color:rgba(0,0,0,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-tertiary:focus,.background-id_0 .button-tertiary:hover{background-color:rgba(25,25,25,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-tertiary.button-background,.background-id_0 .button-tertiary.button-card{background-color:rgba(0,0,0,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-tertiary.button-card:focus,.background-id_0 .button-tertiary.button-card:hover{background-color:rgba(25,25,25,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-tertiary.button-background:focus,.background-id_0 .button-tertiary.button-background:hover{background-color:rgba(25,25,25,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-quaternary{background-color:rgba(8,10,82,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-quaternary:focus,.background-id_0 .button-quaternary:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-quaternary.button-background,.background-id_0 .button-quaternary.button-card{background-color:rgba(8,10,82,1);color:rgba(255,255,255,1);text-shadow:none}.background-id_0 .button-quaternary.button-card:focus,.background-id_0 .button-quaternary.button-card:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-quaternary.button-background:focus,.background-id_0 .button-quaternary.button-background:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0 .button-ghost-primary{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-primary:focus,.background-id_0 .button-ghost-primary:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-primary.button-background,.background-id_0 .button-ghost-primary.button-card{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-primary.button-card:focus,.background-id_0 .button-ghost-primary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-primary.button-background:focus,.background-id_0 .button-ghost-primary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-secondary{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-secondary:focus,.background-id_0 .button-ghost-secondary:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-secondary.button-background,.background-id_0 .button-ghost-secondary.button-card{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-secondary.button-card:focus,.background-id_0 .button-ghost-secondary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-secondary.button-background:focus,.background-id_0 .button-ghost-secondary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-tertiary{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-tertiary:focus,.background-id_0 .button-ghost-tertiary:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-tertiary.button-background,.background-id_0 .button-ghost-tertiary.button-card{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-tertiary.button-card:focus,.background-id_0 .button-ghost-tertiary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-tertiary.button-background:focus,.background-id_0 .button-ghost-tertiary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-quaternary{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-quaternary:focus,.background-id_0 .button-ghost-quaternary:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-quaternary.button-background,.background-id_0 .button-ghost-quaternary.button-card{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);color:rgba(8,10,82,1);text-shadow:none}.background-id_0 .button-ghost-quaternary.button-card:focus,.background-id_0 .button-ghost-quaternary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .button-ghost-quaternary.button-background:focus,.background-id_0 .button-ghost-quaternary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .color-stroke.text2{text-shadow:none;stroke:rgba(8,10,82,1)}.background-id_0 a{text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 a:hover{color:rgba(0,0,0,1);text-shadow:none;background-color:rgba(8,10,82,.1)}.background-id_0 a:focus{text-shadow:none;outline-color:rgba(0,0,0,1)}.background-id_0 .kv-main a{text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .kv-main a:hover{color:rgba(0,0,0,1);text-shadow:none;background-color:rgba(8,10,82,.1)}.background-id_0 .kv-main a:focus{text-shadow:none;outline-color:rgba(0,0,0,1)}.background-id_0 .kv-main .card a,.background-id_0 .kv-main .content-card a,.background-id_0 .kv-main .default-card a,.background-id_0 .kv-main .item-card a{text-shadow:none;color:rgba(8,10,82,1)}.background-id_0 .kv-main .card a:hover,.background-id_0 .kv-main .content-card a:hover,.background-id_0 .kv-main .default-card a:hover,.background-id_0 .kv-main .item-card a:hover{text-shadow:none;color:rgba(3,4,35,1)}.background-id_0 .default-card{background-color:rgba(255,255,255,1);box-shadow:inset 0 0 0 1px rgba(0,0,0,.1);text-shadow:none;color:rgba(0,0,0,1)}.background-id_0 .ee-select-box .ee-select-box-innerwrapper{background-color:rgba(249,249,249,1);text-shadow:none;color:rgba(0,0,0,1)}.background-id_0 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container{background:rgba(249,249,249,1)}.background-id_0 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li.ee-active-element,.background-id_0 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li:hover{text-shadow:none;background-color:rgba(0,0,0,.08)}.background-id_0adjacent .kv-content,.background-id_0adjacent .text1{text-shadow:none;color:rgba(0,0,0,1)}.background-id_0adjacent .section-title,.background-id_0adjacent .section-title.on_background,.background-id_0adjacent .section-title.on_card{color:rgba(8,10,82,1);text-shadow:none}.background-id_0adjacent pre{text-shadow:none;color:rgba(0,0,0,1)}.background-id_0adjacent .section-title.on_accent1{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .section-title.on_accent2{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .section-subtitle,.background-id_0adjacent .section-subtitle.on_background,.background-id_0adjacent .section-subtitle.on_card{text-shadow:none;color:rgba(0,0,0,1)}.background-id_0adjacent .section-subtitle.on_accent1,.background-id_0adjacent .section-subtitle.on_accent2{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .section-description,.background-id_0adjacent .section-description.on_background,.background-id_0adjacent .section-description.on_card{color:rgba(0,0,0,1);text-shadow:none}.background-id_0adjacent .section-description.on_accent1,.background-id_0adjacent .section-description.on_accent2{text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .custom-text-cl1{color:rgba(255,255,255,1)}.background-id_0adjacent .custom-text-cl2{color:rgba(0,0,0,1)}.background-id_0adjacent .custom-text-cl3{color:rgba(8,10,82,1)}.background-id_0adjacent .custom-text-cl4{color:rgba(235,33,136,1)}.background-id_0adjacent .button-primary{background-color:rgba(8,10,82,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-primary:focus,.background-id_0adjacent .button-primary:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-primary.button-background,.background-id_0adjacent .button-primary.button-card{background-color:rgba(8,10,82,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-primary.button-card:focus,.background-id_0adjacent .button-primary.button-card:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-primary.button-background:focus,.background-id_0adjacent .button-primary.button-background:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-secondary{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-secondary:focus,.background-id_0adjacent .button-secondary:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-secondary.button-background,.background-id_0adjacent .button-secondary.button-card{background-color:rgba(235,33,136,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-secondary.button-card:focus,.background-id_0adjacent .button-secondary.button-card:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-secondary.button-background:focus,.background-id_0adjacent .button-secondary.button-background:hover{background-color:rgba(239,79,161,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-tertiary{background-color:rgba(0,0,0,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-tertiary:focus,.background-id_0adjacent .button-tertiary:hover{background-color:rgba(25,25,25,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-tertiary.button-background,.background-id_0adjacent .button-tertiary.button-card{background-color:rgba(0,0,0,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-tertiary.button-card:focus,.background-id_0adjacent .button-tertiary.button-card:hover{background-color:rgba(25,25,25,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-tertiary.button-background:focus,.background-id_0adjacent .button-tertiary.button-background:hover{background-color:rgba(25,25,25,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-quaternary{background-color:rgba(8,10,82,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-quaternary:focus,.background-id_0adjacent .button-quaternary:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-quaternary.button-background,.background-id_0adjacent .button-quaternary.button-card{background-color:rgba(8,10,82,1);color:rgba(255,255,255,1);text-shadow:none}.background-id_0adjacent .button-quaternary.button-card:focus,.background-id_0adjacent .button-quaternary.button-card:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-quaternary.button-background:focus,.background-id_0adjacent .button-quaternary.button-background:hover{background-color:rgba(12,15,128,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_0adjacent .button-ghost-primary{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-primary:focus,.background-id_0adjacent .button-ghost-primary:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-primary.button-background,.background-id_0adjacent .button-ghost-primary.button-card{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-primary.button-card:focus,.background-id_0adjacent .button-ghost-primary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-primary.button-background:focus,.background-id_0adjacent .button-ghost-primary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-secondary{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-secondary:focus,.background-id_0adjacent .button-ghost-secondary:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-secondary.button-background,.background-id_0adjacent .button-ghost-secondary.button-card{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-secondary.button-card:focus,.background-id_0adjacent .button-ghost-secondary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-secondary.button-background:focus,.background-id_0adjacent .button-ghost-secondary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-tertiary{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-tertiary:focus,.background-id_0adjacent .button-ghost-tertiary:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-tertiary.button-background,.background-id_0adjacent .button-ghost-tertiary.button-card{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-tertiary.button-card:focus,.background-id_0adjacent .button-ghost-tertiary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-tertiary.button-background:focus,.background-id_0adjacent .button-ghost-tertiary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-quaternary.button-card:focus,.background-id_0adjacent .button-ghost-quaternary.button-card:hover,.background-id_0adjacent .button-ghost-quaternary:focus,.background-id_0adjacent .button-ghost-quaternary:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);color:rgba(8,10,82,1);text-shadow:none}.background-id_0adjacent .button-ghost-quaternary{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-quaternary.button-card{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-quaternary.button-background{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .button-ghost-quaternary.button-background:focus,.background-id_0adjacent .button-ghost-quaternary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .color-stroke.text2{text-shadow:none;stroke:rgba(8,10,82,1)}.background-id_0adjacent a{text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent a:hover{color:rgba(0,0,0,1);text-shadow:none;background-color:rgba(8,10,82,.1)}.background-id_0adjacent a:focus{text-shadow:none;outline-color:rgba(0,0,0,1)}.background-id_0adjacent .kv-main a{text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .kv-main a:hover{color:rgba(0,0,0,1);text-shadow:none;background-color:rgba(8,10,82,.1)}.background-id_808080m16 .kv-main a:hover,.background-id_808080m16 a:hover{background-color:rgba(255,255,255,.1)}.background-id_0adjacent .kv-main a:focus{text-shadow:none;outline-color:rgba(0,0,0,1)}.background-id_0adjacent .kv-main .card a,.background-id_0adjacent .kv-main .content-card a,.background-id_0adjacent .kv-main .default-card a,.background-id_0adjacent .kv-main .item-card a{text-shadow:none;color:rgba(8,10,82,1)}.background-id_0adjacent .kv-main .card a:hover,.background-id_0adjacent .kv-main .content-card a:hover,.background-id_0adjacent .kv-main .default-card a:hover,.background-id_0adjacent .kv-main .item-card a:hover{text-shadow:none;color:rgba(3,4,35,1)}.background-id_0adjacent .default-card{background-color:rgba(255,255,255,1);text-shadow:none;color:rgba(0,0,0,1)}.background-id_0adjacent .ee-select-box .ee-select-box-innerwrapper{background-color:rgba(243,243,243,1);text-shadow:none;color:rgba(0,0,0,1)}.background-id_808080m16 .section-title.on_background,.background-id_808080m16 .section-title.on_card{color:rgba(8,10,82,1)}.background-id_0adjacent .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container{background:rgba(243,243,243,1)}.background-id_0adjacent .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li.ee-active-element,.background-id_0adjacent .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li:hover{text-shadow:none;background-color:rgba(0,0,0,.08)}.background-id_808080m16 .kv-content,.background-id_808080m16 .text1{text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .section-title,.background-id_808080m16 pre{text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .section-title.on_accent1{color:rgba(255,255,255,1)}.background-id_808080m16 .section-title.on_accent2{color:rgba(255,255,255,1)}.background-id_808080m16 .section-subtitle.on_background,.background-id_808080m16 .section-subtitle.on_card{color:rgba(0,0,0,1)}.background-id_808080m16 .section-subtitle{text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .section-subtitle.on_accent1,.background-id_808080m16 .section-subtitle.on_accent2{color:rgba(255,255,255,1)}.background-id_808080m16 .section-description.on_background,.background-id_808080m16 .section-description.on_card{color:rgba(0,0,0,1)}.background-id_808080m16 .section-description{text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .custom-text-cl1,.background-id_808080m16 .section-description.on_accent1,.background-id_808080m16 .section-description.on_accent2{color:rgba(255,255,255,1)}.background-id_808080m16 .custom-text-cl2{color:rgba(0,0,0,1)}.background-id_808080m16 .custom-text-cl3{color:rgba(8,10,82,1)}.background-id_808080m16 .custom-text-cl4{color:rgba(235,33,136,1)}.background-id_808080m16 .button-primary{background-color:rgba(8,10,82,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-primary:focus,.background-id_808080m16 .button-primary:hover{background-color:rgba(12,15,128,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-primary.button-background,.background-id_808080m16 .button-primary.button-card{background-color:rgba(8,10,82,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-primary.button-card:focus,.background-id_808080m16 .button-primary.button-card:hover{background-color:rgba(12,15,128,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-primary.button-background:focus,.background-id_808080m16 .button-primary.button-background:hover{background-color:rgba(12,15,128,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-secondary{background-color:rgba(235,33,136,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-secondary:focus,.background-id_808080m16 .button-secondary:hover{background-color:rgba(239,79,161,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-secondary.button-background,.background-id_808080m16 .button-secondary.button-card{background-color:rgba(235,33,136,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-secondary.button-card:focus,.background-id_808080m16 .button-secondary.button-card:hover{background-color:rgba(239,79,161,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-secondary.button-background:focus,.background-id_808080m16 .button-secondary.button-background:hover{background-color:rgba(239,79,161,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-tertiary{background-color:rgba(0,0,0,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-tertiary:focus,.background-id_808080m16 .button-tertiary:hover{background-color:rgba(25,25,25,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-tertiary.button-background,.background-id_808080m16 .button-tertiary.button-card{background-color:rgba(0,0,0,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-tertiary.button-card:focus,.background-id_808080m16 .button-tertiary.button-card:hover{background-color:rgba(25,25,25,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-quaternary,.background-id_808080m16 .button-quaternary:focus,.background-id_808080m16 .button-quaternary:hover{background-color:rgba(255,255,255,1);color:rgba(0,0,0,1)}.background-id_808080m16 .button-tertiary.button-background:focus,.background-id_808080m16 .button-tertiary.button-background:hover{background-color:rgba(25,25,25,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-quaternary.button-card{background-color:rgba(8,10,82,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-quaternary.button-card:focus,.background-id_808080m16 .button-quaternary.button-card:hover{background-color:rgba(12,15,128,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-quaternary.button-background{background-color:rgba(8,10,82,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-quaternary.button-background:focus,.background-id_808080m16 .button-quaternary.button-background:hover{background-color:rgba(12,15,128,1);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-primary{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-primary:focus,.background-id_808080m16 .button-ghost-primary:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-primary.button-card{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-primary.button-card:focus,.background-id_808080m16 .button-ghost-primary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-primary.button-background{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-primary.button-background:focus,.background-id_808080m16 .button-ghost-primary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-secondary{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-secondary:focus,.background-id_808080m16 .button-ghost-secondary:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-secondary.button-card{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-secondary.button-card:focus,.background-id_808080m16 .button-ghost-secondary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-secondary.button-background{box-shadow:inset 0 0 0 2px rgba(235,33,136,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-secondary.button-background:focus,.background-id_808080m16 .button-ghost-secondary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(235,33,136,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-tertiary{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-tertiary:focus,.background-id_808080m16 .button-ghost-tertiary:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-tertiary.button-card{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-tertiary.button-card:focus,.background-id_808080m16 .button-ghost-tertiary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-tertiary.button-background{box-shadow:inset 0 0 0 2px rgba(0,0,0,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-tertiary.button-background:focus,.background-id_808080m16 .button-ghost-tertiary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(0,0,0,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-quaternary{box-shadow:inset 0 0 0 2px rgba(255,255,255,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-quaternary:focus,.background-id_808080m16 .button-ghost-quaternary:hover{box-shadow:inset 0 0 0 4px rgba(255,255,255,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .button-ghost-quaternary.button-card{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-quaternary.button-card:focus,.background-id_808080m16 .button-ghost-quaternary.button-card:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .button-ghost-quaternary.button-background{box-shadow:inset 0 0 0 2px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .kv-main a,.background-id_808080m16 .kv-main a:hover,.background-id_808080m16 a,.background-id_808080m16 a:hover{color:rgba(255,255,255,1);text-shadow:0 1px 3px rgba(0,0,0,.364)}.background-id_808080m16 .button-ghost-quaternary.button-background:focus,.background-id_808080m16 .button-ghost-quaternary.button-background:hover{box-shadow:inset 0 0 0 4px rgba(8,10,82,1);color:rgba(8,10,82,1)}.background-id_808080m16 .color-stroke.text2{text-shadow:0 1px 3px rgba(0,0,0,.364);stroke:rgba(255,255,255,1)}.background-id_808080m16 a:focus{text-shadow:0 1px 3px rgba(0,0,0,.364);outline-color:rgba(255,255,255,1)}.background-id_808080m16 .kv-main a:focus{text-shadow:0 1px 3px rgba(0,0,0,.364);outline-color:rgba(255,255,255,1)}.background-id_808080m16 .kv-main .card a,.background-id_808080m16 .kv-main .content-card a,.background-id_808080m16 .kv-main .default-card a,.background-id_808080m16 .kv-main .item-card a{color:rgba(8,10,82,1)}.background-id_808080m16 .kv-main .card a:hover,.background-id_808080m16 .kv-main .content-card a:hover,.background-id_808080m16 .kv-main .default-card a:hover,.background-id_808080m16 .kv-main .item-card a:hover{color:rgba(3,4,35,1)}.background-id_808080m16 .default-card{background-color:rgba(255,255,255,1);color:rgba(0,0,0,1)}.background-id_808080m16 .ee-select-box .ee-select-box-innerwrapper{background-color:rgba(255,255,255,1);text-shadow:0 1px 3px rgba(0,0,0,.364);color:rgba(255,255,255,1)}.background-id_808080m16 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container{background:rgba(255,255,255,1)}.bajigu79 .social-icons .social-link:hover,.bajigu79 nav ul a:hover,.lahuni83 .has-cover .navigation-position.kv-check-scroll.kv-scrolled .kv-menu{background-color:transparent}.background-id_808080m16 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li.ee-active-element,.background-id_808080m16 .ee-select-box .ee-select-box-innerwrapper .select-box-dropdown-container li:hover{text-shadow:0 1px 3px rgba(0,0,0,.364);background-color:rgba(255,255,255,.08)}.background-id_808080m16 .button-ghost-primary.button-background,.background-id_808080m16 .button-ghost-primary.button-background:focus,.background-id_808080m16 .button-ghost-primary.button-background:hover,.background-id_808080m16 .button-ghost-primary.button-card,.background-id_808080m16 .button-ghost-primary.button-card:focus,.background-id_808080m16 .button-ghost-primary.button-card:hover,.background-id_808080m16 .button-ghost-quaternary.button-background,.background-id_808080m16 .button-ghost-quaternary.button-background:focus,.background-id_808080m16 .button-ghost-quaternary.button-background:hover,.background-id_808080m16 .button-ghost-quaternary.button-card,.background-id_808080m16 .button-ghost-quaternary.button-card:focus,.background-id_808080m16 .button-ghost-quaternary.button-card:hover,.background-id_808080m16 .button-ghost-secondary.button-background,.background-id_808080m16 .button-ghost-secondary.button-background:focus,.background-id_808080m16 .button-ghost-secondary.button-background:hover,.background-id_808080m16 .button-ghost-secondary.button-card,.background-id_808080m16 .button-ghost-secondary.button-card:focus,.background-id_808080m16 .button-ghost-secondary.button-card:hover,.background-id_808080m16 .button-ghost-tertiary.button-background,.background-id_808080m16 .button-ghost-tertiary.button-background:focus,.background-id_808080m16 .button-ghost-tertiary.button-background:hover,.background-id_808080m16 .button-ghost-tertiary.button-card,.background-id_808080m16 .button-ghost-tertiary.button-card:focus,.background-id_808080m16 .button-ghost-tertiary.button-card:hover,.background-id_808080m16 .button-primary,.background-id_808080m16 .button-primary.button-background,.background-id_808080m16 .button-primary.button-background:focus,.background-id_808080m16 .button-primary.button-background:hover,.background-id_808080m16 .button-primary.button-card,.background-id_808080m16 .button-primary.button-card:focus,.background-id_808080m16 .button-primary.button-card:hover,.background-id_808080m16 .button-primary:focus,.background-id_808080m16 .button-primary:hover,.background-id_808080m16 .button-quaternary,.background-id_808080m16 .button-quaternary.button-background,.background-id_808080m16 .button-quaternary.button-background:focus,.background-id_808080m16 .button-quaternary.button-background:hover,.background-id_808080m16 .button-quaternary.button-card,.background-id_808080m16 .button-quaternary.button-card:focus,.background-id_808080m16 .button-quaternary.button-card:hover,.background-id_808080m16 .button-quaternary:focus,.background-id_808080m16 .button-quaternary:hover,.background-id_808080m16 .button-secondary,.background-id_808080m16 .button-secondary.button-background,.background-id_808080m16 .button-secondary.button-background:focus,.background-id_808080m16 .button-secondary.button-background:hover,.background-id_808080m16 .button-secondary.button-card,.background-id_808080m16 .button-secondary.button-card:focus,.background-id_808080m16 .button-secondary.button-card:hover,.background-id_808080m16 .button-secondary:focus,.background-id_808080m16 .button-secondary:hover,.background-id_808080m16 .button-tertiary,.background-id_808080m16 .button-tertiary.button-background,.background-id_808080m16 .button-tertiary.button-background:focus,.background-id_808080m16 .button-tertiary.button-background:hover,.background-id_808080m16 .button-tertiary.button-card,.background-id_808080m16 .button-tertiary.button-card:focus,.background-id_808080m16 .button-tertiary.button-card:hover,.background-id_808080m16 .button-tertiary:focus,.background-id_808080m16 .button-tertiary:hover,.background-id_808080m16 .default-card,.background-id_808080m16 .kv-main .card a,.background-id_808080m16 .kv-main .card a:hover,.background-id_808080m16 .kv-main .content-card a,.background-id_808080m16 .kv-main .content-card a:hover,.background-id_808080m16 .kv-main .default-card a,.background-id_808080m16 .kv-main .default-card a:hover,.background-id_808080m16 .kv-main .item-card a,.background-id_808080m16 .kv-main .item-card a:hover,.background-id_808080m16 .section-description.on_accent1,.background-id_808080m16 .section-description.on_accent2,.background-id_808080m16 .section-description.on_background,.background-id_808080m16 .section-description.on_card,.background-id_808080m16 .section-subtitle.on_accent1,.background-id_808080m16 .section-subtitle.on_accent2,.background-id_808080m16 .section-subtitle.on_background,.background-id_808080m16 .section-subtitle.on_card,.background-id_808080m16 .section-title.on_accent1,.background-id_808080m16 .section-title.on_accent2,.background-id_808080m16 .section-title.on_background,.background-id_808080m16 .section-title.on_card{text-shadow:none}@keyframes bounce{0%,100%,20%,50%,80%{top:calc(25% - 8px)}40%{top:calc(25% - 24px);opacity:.6}60%{top:calc(25% - 16px);opacity:.75}}.lahuni83 .button-callToAction{padding:.5rem .75rem}.lahuni83 .custom-header-buttons{display:flex}.lahuni83 .custom-header-buttons>*{z-index:15}.lahuni83 .button-cart{padding:.75rem;border-radius:3rem;margin-left:1rem}@media (max-width:375px){.lahuni83 .button-cart{margin-top:.5rem;margin-bottom:.5rem;margin-left:.5rem}}@media (min-width:376px) and (max-width:991px){.lahuni83 .button-cart{margin-top:1rem;margin-bottom:1rem}}.lahuni83 .fa.fa-shopping-cart{padding:.25rem}.lahuni83 .container.content{padding-top:8rem;padding-bottom:calc(8rem - 1rem);min-height:50vh;display:flex;flex-direction:column;justify-content:center}.lahuni83 .container.content.align-left .row{justify-content:flex-start;text-align:left}.lahuni83 .container.content.align-center .row{justify-content:center;text-align:center}.lahuni83 .container.content.align-right .row{justify-content:flex-end;text-align:right}.lahuni83 .section-description{max-width:570px}.lahuni83 .align-center .section-description,.lahuni83 .align-center .section-subtitle{margin-left:auto;margin-right:auto}.lahuni83 .header-container{position:relative;display:flex;align-items:center}.lahuni83 .compact-header{min-height:5rem}.lahuni83 .next-section-container{cursor:pointer;width:3rem;height:3rem;position:absolute;bottom:1.5rem;left:calc(50% - 1.5rem)}.lahuni83 .next-section-container svg{width:2rem;position:absolute;left:calc(50% - 1rem);top:calc(25% - .5rem);animation:2s infinite bounce}.lahuni83 .navigation-position{position:absolute;z-index:10;user-select:none;width:100%;min-height:5rem;display:flex;align-items:center}.lahuni83 .logo,.lahuni83 .no-cover .navigation-position,.lahuni83 .sub .navigation-position{position:relative}.lahuni83 .container-fluid.navigation{width:100%;max-width:100%!important}.lahuni83 .navigation-position.menu-top{top:0}.lahuni83 .navigation-position.menu-bottom{bottom:0}.lahuni83 .row.buttons>div>.buttons{margin:1rem -8px -16px}.lahuni83 .logo{flex-shrink:0;flex:1;padding:.5rem 1rem .5rem 0}.lahuni83 .logo h1{font-weight:400;margin:0;font-size:2rem;word-break:normal}.lahuni83 .logo>div{display:inline-block;position:relative}.lahuni83 .site-title-link{text-shadow:none;text-decoration:none!important;font-size:2rem}.lahuni83 .has-cover .navigation-position.kv-check-scroll{transition-duration:.2s;transition-timing-function:cubic-bezier(.455,.03,.515,.955);transition-property:background-color}.lahuni83 .navigation-position.kv-check-scroll{position:fixed}.lahuni83 .kv-fixed-header.kv-scrolled,.lahuni83 .kv-fixed-header.kv-scrolled ul.menu{box-shadow:none}.lahuni83 .kv-fixed-header.kv-scrolled ul.menu li a:hover{cursor:pointer}.lahuni83 .container-fluid.navigation header{min-height:inherit;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;margin-top:1rem}.lahuni83 .call-to-action{display:flex;align-items:center;padding:0 1.5rem;min-height:3rem!important;font-size:1rem!important;border-radius:3rem;text-decoration:none;transition:450ms cubic-bezier(.23,1,.32,1);margin-bottom:1rem}@media (min-width:992px){.lahuni83 .call-to-action{margin-left:1rem;margin-bottom:0;padding:0 1rem}.lahuni83 .container-fluid.navigation{padding-left:2rem;padding-right:2rem}}.lahuni83 .no-cover .logo,.noduwa21 .full-page.section{padding:0}.lahuni83 nav{display:flex}.lahuni83 .no-cover{min-height:90px}.lahuni83 .no-cover .logo>div{margin:0}.lahuni83 .no-cover .logo .logo-image{max-height:90px}.lahuni83 .logo-image{background-color:transparent!important;max-width:100%}@media (min-width:992px){.lahuni83 .navigation-position.kv-scrolled ul.menu,.lahuni83 .no-cover ul.menu{box-shadow:none}.lahuni83 .logo-image{max-width:50vw}.lahuni83 .navigation-position{height:auto}.lahuni83 .navigation-position .container-fluid.navigation{min-height:4rem;transition-duration:.2s;transition-timing-function:cubic-bezier(.455,.03,.515,.955);transition-property:min-height;height:100%}.lahuni83 .navigation-position .container-fluid.navigation header{margin-top:0;height:100%;flex-wrap:nowrap}.lahuni83 .navigation-position .container-fluid.navigation .logo{transform-origin:center left;transition-duration:.2s;transition-timing-function:cubic-bezier(.455,.03,.515,.955);transition-property:transform}.lahuni83 nav{margin-left:2rem;display:flex;align-items:center;justify-content:flex-end;padding:.5rem 0;flex:4 0 0}.lahuni83 nav ul{list-style:none;padding:0 1rem;margin-bottom:0;display:flex;align-items:center;flex-wrap:nowrap;white-space:nowrap;overflow:hidden;border-radius:3rem}.lahuni83 nav ul li{display:inline-block}.lahuni83 nav ul li a{margin:.75rem;padding:0;position:relative;cursor:pointer;text-decoration:none;display:block;max-width:200px;overflow:hidden;text-overflow:ellipsis}.lahuni83 nav ul li a:before{height:.125rem;width:100%;position:absolute;content:"";bottom:0;opacity:0;border-radius:.125rem;transition-property:transform,opacity;transition-duration:.33s;transition-timing-function:cubic-bezier(.175,.885,.32,1.275)}.lahuni83 nav ul li a:hover{cursor:pointer}.lahuni83 nav ul li a.active:before,.lahuni83 nav ul li a:hover:before{opacity:1}}.lahuni83 .mobile nav ul li a{max-width:100%;text-decoration:none}.lahuni83 .mobile .cstm-fnt{font-size:100%!important}.lahuni83 .mobile .compact-header{min-height:3.5rem}.lahuni83 .mobile .container.content{padding-top:6rem;padding-bottom:calc(6rem - 1rem)}.lahuni83 .mobile .container-fluid.navigation{height:100%;min-height:3.5rem}.lahuni83 .mobile .container-fluid.navigation header{margin-bottom:0;margin-top:0;height:100%}.lahuni83 .mobile .next-section-container{transform:scale(.75)}.lahuni83 .mobile .kv-menu{position:relative;z-index:11;border-radius:50%;margin-left:.5rem;height:3rem;width:3rem;display:flex;justify-content:center;align-items:center}.lahuni83 .mobile .kv-menu .menu-icon{width:3rem;height:3rem;position:relative;cursor:pointer}@media (max-width:992px){.lahuni83 .mobile .kv-menu,.lahuni83 .mobile .kv-menu .menu-icon{width:2.75rem;height:2.75rem}}.lahuni83 .mobile .kv-menu .menu-icon div{height:2px;width:20px;position:absolute;left:calc(50% - 10px);top:calc(50% - 1px);transition:transform 350ms cubic-bezier(.16,.84,.44,1)}.lahuni83 .mobile .kv-menu .menu-icon div:nth-of-type(1){transform:translateY(-6px)}.lahuni83 .mobile .kv-menu .menu-icon div:nth-of-type(3){transform:translateY(6px)}.lahuni83 .mobile .sub .kv-menu{box-shadow:none!important}.lahuni83 .mobile .navigation-position.kv-scrolled .kv-menu{box-shadow:none!important;background-color:transparent}.lahuni83 .mobile.menu-open .menu-icon div:nth-of-type(1){transform:rotate(45deg)!important}.lahuni83 .mobile.menu-open .menu-icon div:nth-of-type(2){transform:scale(0)}.lahuni83 .mobile.menu-open .menu-icon div:nth-of-type(3){transform:rotate(135deg)!important}.lahuni83 .mobile.menu-open nav ul{transform:translateX(0);visibility:initial}.lahuni83 .mobile.menu-close nav ul,.lahuni83 .mobile.menu-open nav ul{transition-property:transform,visibility;transition-duration:.5s;transition-timing-function:cubic-bezier(.25,.46,.45,.94)}.lahuni83 .mobile nav{flex-wrap:wrap-reverse;justify-content:flex-end}.lahuni83 .mobile nav ul{z-index:1;transform:translateX(100%);visibility:hidden;position:fixed;overflow-y:auto;left:0;right:0;bottom:0;top:0;-webkit-backdrop-filter:blur(10px) saturate(125%);backdrop-filter:blur(10px) saturate(125%);list-style:none;margin:0;will-change:transform;padding:44px 1rem;display:flex;flex-direction:column;border-radius:0}.lahuni83 .mobile nav ul li{display:block;text-align:center;margin:.5rem 0}.lahuni83 .mobile nav ul li .button-callToAction{padding-left:1rem;padding-right:1rem}@media (max-width:413px){.lahuni83 .kv-menu{margin-left:.5rem}}@media (max-width:375px){.lahuni83 .call-to-action,.lahuni83 .kv-menu,.lahuni83 .logo h1{margin-top:.5rem;margin-bottom:.5rem}.lahuni83 .call-to-action{padding:0 .75rem}.lahuni83 .kv-menu{margin-left:.5rem}}.lahuni83 .kv-next-section{transition-property:opacity,transform,opacity,visibility;transition-duration:260ms;transition-timing-function:cubic-bezier(.455,.03,.515,.955);visibility:initial}.lahuni83 .kv-next-section.kv-scrolled{animation:none;visibility:hidden;opacity:0;transform:translateY(-10px)}.lahuni83 .next-section-container.menu-bottom{display:none}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.lahuni83 .content{padding-top:calc(2rem + 20vh)!important;width:100%}}@media all and (-ms-high-contrast:none) and (min-width:992px),(-ms-high-contrast:active) and (min-width:992px){.lahuni83 .content{padding-top:calc(4rem + 20vh)!important}}.lahuni83 .kv-full-page{min-height:100vh!important}.lahuni83 .logo-image{transition:240ms}.lahuni83 .logo-small .logo-image{max-height:2.5rem}@media (min-width:768px){.lahuni83 .logo-small .logo-image{max-height:2.75rem}}@media (min-width:992px){.lahuni83 .logo-small .logo-image{max-height:3rem}}.lahuni83 .logo-medium .logo-image{max-height:3rem}@media (min-width:576px){.lahuni83 .logo-medium .logo-image{max-height:3rem}}@media (min-width:768px){.lahuni83 .logo-medium .logo-image{max-height:3.5rem}}@media (min-width:992px){.lahuni83 .logo-medium .logo-image{max-height:4rem}}.lahuni83 .logo-large .logo-image{max-height:3.5rem}@media (min-width:576px){.lahuni83 .logo-large .logo-image{max-height:3.5rem}.lahuni83 .kv-scrolled .logo-small .logo-image{max-height:2.25rem}}@media (min-width:768px){.lahuni83 .logo-large .logo-image{max-height:4.25rem}}.lahuni83 .kv-scrolled .logo-small .logo-image{max-height:2.25rem}@media (min-width:768px){.lahuni83 .kv-scrolled .logo-small .logo-image{max-height:2.5rem}}@media (min-width:992px){.lahuni83 .logo-large .logo-image{max-height:5rem}.lahuni83 .kv-scrolled .logo-small .logo-image{max-height:2.75rem}}.lahuni83 .kv-scrolled .logo-medium .logo-image{max-height:2.25rem}@media (min-width:576px){.lahuni83 .kv-scrolled .logo-medium .logo-image{max-height:2.5rem}}@media (min-width:768px){.lahuni83 .kv-scrolled .logo-medium .logo-image{max-height:3rem}}@media (min-width:992px){.lahuni83 .kv-scrolled .logo-medium .logo-image{max-height:3.5rem}}.lahuni83 .kv-scrolled .logo-large .logo-image{max-height:3rem}@media (min-width:576px){.lahuni83 .kv-scrolled .logo-large .logo-image{max-height:3rem}}@media (min-width:768px){.lahuni83 .kv-scrolled .logo-large .logo-image{max-height:3.5rem}}.background-id_1.lahuni83 .menu-icon div{text-shadow:none;background:rgba(255,255,255,1);color:rgba(12,12,12,1)}.background-id_1.lahuni83 .sub .menu-icon div{text-shadow:none;background:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .no-cover .navigation-position{background:rgba(19,19,19,1);text-shadow:none;color:rgba(255,255,255,1);box-shadow:0 .125rem 1rem rgba(0,0,0,.12)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .has-cover .navigation-position.kv-check-scroll.kv-scrolled,.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .has-cover .navigation-position.kv-check-scroll.kv-scrolled .navigation nav ul li a,.background-id_1.lahuni83 .no-cover .navigation-position.kv-check-scroll.kv-scrolled,.background-id_1.lahuni83 .no-cover .navigation-position.kv-check-scroll.kv-scrolled .navigation nav ul li a{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .logo,.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .sub .logo .logo-text{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .site-title-link{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .has-cover .navigation-position.kv-check-scroll{background-color:rgba(12,12,12,0)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .has-cover .navigation-position.kv-check-scroll.kv-scrolled{background-color:rgba(19,19,19,1);box-shadow:0 .125rem 1rem rgba(0,0,0,.12)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .has-cover .navigation-position.kv-check-scroll.kv-scrolled .logo h1{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .kv-fixed-header.kv-scrolled{background:rgba(12,12,12,1);text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .kv-fixed-header.kv-scrolled ul.menu{background-color:rgba(255,255,255,0)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile .navigation-position.kv-scrolled ul.menu,.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .sub.mobile ul.menu{background-color:rgba(12,12,12,.95)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .kv-fixed-header.kv-scrolled ul.menu li a{text-shadow:none;color:rgba(255,255,255,1)}@media .lahuni83 .custom-header-buttons > (min-width:992px){.background-id_1.lahuni83 .navigation-position.kv-scrolled ul.menu{background-color:rgba(255,255,255,0)}.background-id_1.lahuni83 nav ul{background-color:rgba(255,255,255,.95);text-shadow:none;color:rgba(0,0,0,1);box-shadow:0 .25rem 1rem rgba(0,0,0,.12)}.background-id_1.lahuni83 nav ul li a{text-shadow:none;color:rgba(0,0,0,1)}.background-id_1.lahuni83 nav ul li a::before{background:rgba(235,33,136,1)}.background-id_1.lahuni83 nav ul li a:hover{text-shadow:none;color:rgba(25,25,25,1)}.background-id_1.lahuni83 .has-cover nav ul li a{text-shadow:none;color:rgba(0,0,0,1)}.background-id_1.lahuni83 .has-cover nav ul li a::before{background:rgba(235,33,136,1)}.background-id_1.lahuni83 .no-cover nav ul li a{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .no-cover nav ul li a::before{background:rgba(235,33,136,1)}.background-id_1.lahuni83 .no-cover ul.menu{background-color:rgba(255,255,255,0)}}.background-id_0adjacent.hiluse82 .content-card,.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile.menu-open .menu-icon div{background:rgba(255,255,255,1);text-shadow:none}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile .kv-menu{background-color:rgba(17,17,17,1);box-shadow:0 .25rem 1rem rgba(0,0,0,.12)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile .navigation-position.kv-scrolled .kv-menu .menu-icon div{text-shadow:none;background-color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile nav ul{background:rgba(12,12,12,.95)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile nav ul li a.active{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile nav ul li [data-uri-path]{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.lahuni83 .custom-header-buttons>.lahuni83 .mobile nav ul li [data-uri-path].active{text-shadow:none;color:rgba(255,255,255,1)}.noduwa21 .kv-notify-inview{opacity:0;transform:scaleY(0);transform-origin:center;transition:transform .5s,opacity .5s}.noduwa21 .kv-inview{opacity:1;transform:scaleY(1)}.noduwa21 .embed-container{position:relative;height:0;padding-bottom:55%}.noduwa21 .embed-container iframe{position:absolute;width:100%;height:100%;top:0;left:0}.noduwa21 .text-content{margin-top:4rem}.noduwa21 .rounded-corners .embed-container{overflow:hidden;border-radius:.5rem}.noduwa21 .drop-shadow .embed-container{box-shadow:0 16px 32px rgba(0,0,0,.3)}.noduwa21 .full-page .embed-container{margin-left:-15px;margin-right:-15px}.noduwa21 .full-page .text-content{padding-bottom:4rem}.noduwa21 .align-left{text-align:left}.noduwa21 .align-center{text-align:center}.noduwa21 .align-center .section-text{margin:0 auto}.noduwa21 .align-right .section-text,.zoduye36 .align-right .titles .col-12>*{margin-left:auto}.noduwa21 .align-right{text-align:right}.noduwa21 .button-group{margin-top:1rem}.noduwa21 .button{margin-top:2rem}.noduwa21 .align-left .button{margin-right:1rem}.noduwa21 .align-center .button{margin-left:.5rem;margin-right:.5rem}.noduwa21 .align-right .button{margin-left:1rem}.zoduye36 .section{padding:4rem 0}.zoduye36 p{max-width:800px}.zoduye36 .container-wide{max-width:1680px;margin:0 auto;padding-right:15px;padding-left:15px}.zoduye36 .section-text{margin-bottom:1rem}.zoduye36 .align-left .titles{text-align:left}.zoduye36 .align-left .titles .col-12>*{margin-right:auto}.zoduye36 .align-left .position .row{justify-content:flex-start}.zoduye36 .align-center .titles{text-align:center}.zoduye36 .align-center .titles .col-12>*{margin-left:auto;margin-right:auto}.zoduye36 .align-center .position .row{justify-content:flex-start}.zoduye36 .align-right .titles{text-align:right}.zoduye36 .align-right .position .row{justify-content:flex-end}.hiluse82 .content-card{margin:30px 0 15px;height:calc(100% - 45px);border-radius:3px;transition:box-shadow .3s cubic-bezier(.19,1,.22,1)}.hiluse82 .drop-shadow-md:hover{box-shadow:0 0 0 1px rgba(0,0,0,.04),0 14px 18px -8px rgba(0,0,0,.11),0 12px 12px -5px rgba(0,0,0,.09),0 11px 8px 0 rgba(0,0,0,.03)}.hiluse82 .drop-shadow-md .photo{box-shadow:0 14px 18px -8px rgba(0,0,0,.19),0 12px 12px -5px rgba(0,0,0,.17),0 11px 8px 0 rgba(0,0,0,.08)}.hiluse82 .bio{padding:0 1.5rem 1.5rem}.hiluse82 .bio.no-image{padding:1.5rem}.hiluse82 .bio h5,.hiluse82 .bio h6,.hiluse82 .bio p{box-sizing:content-box}.hiluse82 .bio .subtitle{opacity:.54;margin-top:-.5rem;font-weight:400}.hiluse82 .bio .button{margin-top:1rem}.hiluse82 .photo{width:50%;padding-bottom:50%;border-radius:50%;background-size:cover;background-position:center center;margin:0 auto;position:relative;top:-1.5rem;display:flex}.hiluse82 .photo i{font-size:3rem;width:100%;text-align:center;align-self:center}@media (min-width:768px){.hiluse82 .col-lg-12 .content-card{flex-direction:row;align-items:center}.hiluse82 .col-lg-12 .content-card .social{justify-content:flex-start}.hiluse82 .col-lg-12 .content-card .bio{justify-content:center}.hiluse82 .col-lg-12 .content-card .photo{margin:2rem;transform:none;-webkit-transform:none;-ms-transform:none}.hiluse82 .col-lg-12 .content-card.flipped{justify-content:space-between}.hiluse82 .col-lg-12 .content-card.flipped .photo{order:2}.hiluse82 .col-lg-12 .content-card.flipped .bio{order:1}}.hiluse82 .rounded-corners .content-card{border-radius:.5rem}.hiluse82 .square .photo{width:50%;padding-bottom:50%;border-radius:0}.hiluse82 .portrait .photo{width:50%;padding-bottom:66.6667%;border-radius:0}.hiluse82 .landscape .photo{width:80%;padding-bottom:60%;border-radius:0}.hiluse82 .rounded-corners .photo{border-radius:.5rem}.hiluse82 .circle .photo{width:50%;padding-bottom:50%;border-radius:50%}.hiluse82 .align-left .bio{text-align:left}.hiluse82 .align-center .bio{text-align:center}.hiluse82 .social{justify-content:flex-end;transform:translateX(10px)}.background-id_0adjacent.hiluse82 .content-card{color:rgba(0,0,0,1)}.background-id_0adjacent.hiluse82 .photo{background-color:rgba(8,10,82,1)}.background-id_0adjacent.hiluse82 .photo i{text-shadow:none;color:rgba(255,255,255,1)}.parize09 .countdown-days,.parize09 .countdown-hours,.parize09 .countdown-minutes,.parize09 .countdown-seconds{margin-bottom:1rem}.parize09 .countdown-unit{text-align:center;background:0 0;font-size:2rem;border:3px solid;border-radius:100%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;width:6rem;height:6rem}@media (min-width:375px){.parize09 .countdown-unit{height:8rem;width:8rem;font-size:3rem}}@media (min-width:576px){.parize09 .countdown-unit{width:10rem;height:10rem}}.parize09 .countdown-label{text-align:center;display:block;font-size:1.125em;font-weight:500;width:80%;margin:0 auto}.parize09 .align-left{text-align:left}.parize09 .align-center{text-align:center}.parize09 .align-right{text-align:right}.background-id_808080m16.parize09 .countdown-unit{text-shadow:0 1px 3px rgba(0,0,0,.364);border-color:rgba(255,255,255,1)}.bajigu79 footer .row{padding:0 15px}.bajigu79 .title{margin-bottom:.625rem;line-height:1.4;overflow-wrap:break-word;font-size:1.25rem!important;word-break:break-word}.bajigu79 .col-medium,.bajigu79 .col-small{flex:1 1 100%;margin-bottom:1rem;padding-right:1rem}.bajigu79 .container.spacing{padding:1.5rem 15px 0}.bajigu79 .buttons a[data-type=email],.bajigu79 .buttons a[data-type=phone]{padding:0;margin:.5rem 0 0;display:inline-block}.bajigu79 .buttons a{display:inline-block;padding:.5rem 0;word-break:break-word}.bajigu79 .logo-group{margin-bottom:.5rem;position:relative}.bajigu79 .logo-group .logo-image{width:100%}.bajigu79 .logo-small{max-width:6rem}.bajigu79 .logo-medium{max-width:8rem}.bajigu79 .logo-large{max-width:10rem}.bajigu79 .legal p{display:inline-block;margin-top:0;margin-bottom:0}.bajigu79 .legal .legal-placeholder{margin:0 1rem;display:inline-block}.bajigu79 .legal .legal-placeholder a{color:inherit;display:inline-block;font-size:calc(.875rem + 2 * ((100vw - 320px)/ 1360));line-height:calc(1.25rem + 4 * ((100vw - 320px)/ 1360))}.bajigu79 .legal .legal-placeholder a:hover{text-decoration:none}@media (min-width:768px){.bajigu79 .logo-group .logo-image{margin-right:1.5rem}.bajigu79 .logo-group h3{margin-bottom:0;margin-right:1.5rem}.bajigu79 .col-medium,.bajigu79 .col-small{flex:1 1 50%}}@media (min-width:992px){.lahuni83 .kv-scrolled .logo-large .logo-image{max-height:4rem}.bajigu79 .col-small{flex:1 2 25%}.bajigu79 .col-medium{flex:2 1 25%}}.bajigu79 nav ul{padding-left:0;margin-bottom:0}.bajigu79 nav ul li{display:block;list-style:none;margin-right:1.5rem;font-weight:500}.bajigu79 nav ul a{display:block;margin-bottom:.5rem;text-decoration:none}.bajigu79 hr.line{height:1px;width:100%;margin-bottom:0}.bajigu79 .description{max-width:440px}.bajigu79 .subfooter{padding:1rem 0}.bajigu79 .subfooter .row{display:block}.bajigu79 .title-social{display:none}.bajigu79 .social-icons{display:flex;flex-direction:column}.bajigu79 .social-icons .social-link{transition:color .3s;margin-bottom:.5rem;display:flex;align-items:center;position:relative;text-decoration:none;padding-left:1.5rem}.bajigu79 .social-icons .social-link i{position:absolute;left:0}.bajigu79 .social-icons .social-link svg{left:0;top:calc(50% - ((15 / 16) * .5rem));position:absolute;max-width:100%;max-height:100%;height:.9375rem;transform:translateY(-2px);transition:fill .3s}.bajigu79 .social-icons .social-link:hover span{text-decoration:underline}@media (min-width:414px){.bajigu79 .social-icons{width:auto;margin:0 0 1rem}}@media (min-width:768px){.bajigu79 .subfooter .row{display:flex;justify-content:flex-start;align-items:baseline}.bajigu79 .subfooter .social-icons{display:flex;padding:0 .5rem;margin:-1rem .75rem}.bajigu79 .subfooter .content-right{display:flex;justify-content:flex-end}.bajigu79 .subfooter .content-right p{margin-bottom:0}}.bajigu79 .copyright{margin-right:1rem}.bajigu79 .sitemap{margin:0 1rem}.background-id_1.bajigu79 .opaque{text-shadow:none;color:rgba(255,255,255,.75)}.background-id_1.bajigu79 .buttons a:hover,.background-id_1.bajigu79 .legal .legal-placeholder a:hover{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.bajigu79 nav ul a:hover{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.bajigu79 hr.line{text-shadow:none;color:rgba(255,255,255,.1)}.background-id_1.bajigu79 .social-icons .social-link i{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.bajigu79 .social-icons .social-link svg{text-shadow:none;fill:rgba(255,255,255,1)}.background-id_1.bajigu79 .social-icons .social-link:hover{text-shadow:none;color:rgba(255,255,255,1)}.background-id_1.bajigu79 .social-icons .social-link:hover svg{text-shadow:none;fill:rgba(255,255,255,1)}</style><script type="application/javascript" src="./Maths - Chhaya Coaching Centre_files/maths.b3603f4e.js.download"></script><style>.blur-in-image {
  overflow: hidden;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-color: #F6F6F6 !important;
  position: relative; }
  .blur-in-image.loader {
    background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/56c3bb61371908721ac6509800958953.svg) !important;
    background-size: 60px !important;
    background-position: center !important; }
    .blur-in-image.loader .blur-in-preloader {
      display: none; }

.blur-in-preloader {
  height: 100%;
  width: 100%;
  overflow: hidden;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  opacity: 1;
  -webkit-filter: blur(1vw);
          filter: blur(1vw);
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
  -webkit-transition: opacity 1s linear;
  transition: opacity 1s linear;
  position: absolute;
  top: 0; }
  .blur-in-preloader.loaded {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1); }
</style><style>.user-select--none {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none; }

.user-select--initial {
  -webkit-user-select: initial;
     -moz-user-select: initial;
      -ms-user-select: initial;
          user-select: initial; }

.kv-background {
  position: relative; }
  .kv-background video {
    height: 100%;
    width: 100%;
    -o-object-fit: cover;
       object-fit: cover; }

.kv-background .simpleParallax {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0; }

.kv-edit-mode .kv-background {
  -webkit-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out; }

.kv-edit-mode .kv-video::after {
  content: ' ';
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  background-color: rgba(42, 44, 46, 0.35); }

.swiper-section *[data-type="swipe-list"] {
  display: block !important; }

@media (min-width: 768px) {
  .swiper-section *[data-type="swipe-list"] {
    display: none !important; } }

.kv-edit-mode .swiper-section *[data-type="swipe-list"] {
  display: block !important; }
</style><style>.user-select--none {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none; }

.user-select--initial {
  -webkit-user-select: initial;
     -moz-user-select: initial;
      -ms-user-select: initial;
          user-select: initial; }

.kv-section-controls .kv-editor-button {
  border-radius: 0;
  -webkit-transition: background-color .2s ease-out, border-radius .1s ease-out 100ms;
  transition: background-color .2s ease-out, border-radius .1s ease-out 100ms; }
  .kv-section-controls .kv-editor-button:hover, .kv-section-controls .kv-editor-button:active, .kv-section-controls .kv-editor-button:focus {
    border-radius: 20px;
    -webkit-transition: background-color .2s ease-out, border-radius .1s ease-out;
    transition: background-color .2s ease-out, border-radius .1s ease-out; }

/* Global Editor UI Control Styling */
.kv-edit-selector-light,
.kv-edit-selector-buttons,
.kv-section-add-controls,
.kv-section-controls,
.add-post-button-container,
.kv-control {
  border-radius: 20px; }
  .kv-edit-selector-light .kv-editor-button,
  .kv-edit-selector-buttons .kv-editor-button,
  .kv-section-add-controls .kv-editor-button,
  .kv-section-controls .kv-editor-button,
  .add-post-button-container .kv-editor-button,
  .kv-control .kv-editor-button {
    float: left;
    width: 32px !important;
    height: 32px !important;
    color: white !important;
    cursor: pointer;
    font-size: 24px !important;
    text-align: center !important;
    background-color: #0076DF;
    -webkit-transition: background-color .2s ease-outs;
    transition: background-color .2s ease-outs; }
    .kv-edit-selector-light .kv-editor-button:first-of-type,
    .kv-edit-selector-buttons .kv-editor-button:first-of-type,
    .kv-section-add-controls .kv-editor-button:first-of-type,
    .kv-section-controls .kv-editor-button:first-of-type,
    .add-post-button-container .kv-editor-button:first-of-type,
    .kv-control .kv-editor-button:first-of-type {
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px; }
    .kv-edit-selector-light .kv-editor-button:last-of-type,
    .kv-edit-selector-buttons .kv-editor-button:last-of-type,
    .kv-section-add-controls .kv-editor-button:last-of-type,
    .kv-section-controls .kv-editor-button:last-of-type,
    .add-post-button-container .kv-editor-button:last-of-type,
    .kv-control .kv-editor-button:last-of-type {
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px; }
    .kv-edit-selector-light .kv-editor-button:hover, .kv-edit-selector-light .kv-editor-button:active, .kv-edit-selector-light .kv-editor-button:focus,
    .kv-edit-selector-buttons .kv-editor-button:hover,
    .kv-edit-selector-buttons .kv-editor-button:active,
    .kv-edit-selector-buttons .kv-editor-button:focus,
    .kv-section-add-controls .kv-editor-button:hover,
    .kv-section-add-controls .kv-editor-button:active,
    .kv-section-add-controls .kv-editor-button:focus,
    .kv-section-controls .kv-editor-button:hover,
    .kv-section-controls .kv-editor-button:active,
    .kv-section-controls .kv-editor-button:focus,
    .add-post-button-container .kv-editor-button:hover,
    .add-post-button-container .kv-editor-button:active,
    .add-post-button-container .kv-editor-button:focus,
    .kv-control .kv-editor-button:hover,
    .kv-control .kv-editor-button:active,
    .kv-control .kv-editor-button:focus {
      background-color: #0050C7;
      -webkit-transition: background-color .2s ease-out;
      transition: background-color .2s ease-out; }
    .kv-edit-selector-light .kv-editor-button.hidden,
    .kv-edit-selector-buttons .kv-editor-button.hidden,
    .kv-section-add-controls .kv-editor-button.hidden,
    .kv-section-controls .kv-editor-button.hidden,
    .add-post-button-container .kv-editor-button.hidden,
    .kv-control .kv-editor-button.hidden {
      display: none; }
    .kv-edit-selector-light .kv-editor-button.large,
    .kv-edit-selector-buttons .kv-editor-button.large,
    .kv-section-add-controls .kv-editor-button.large,
    .kv-section-controls .kv-editor-button.large,
    .add-post-button-container .kv-editor-button.large,
    .kv-control .kv-editor-button.large {
      border: 0;
      margin: 0 auto;
      float: none;
      height: 32px !important;
      padding: 3px 12px;
      font-family: "Nunito Sans" !important;
      width: auto !important;
      display: -webkit-inline-box;
      display: inline-flex;
      -webkit-box-align: center;
              align-items: center;
      -webkit-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none;
      vertical-align: middle;
      -webkit-box-pack: center;
              justify-content: center; }
      .kv-edit-selector-light .kv-editor-button.large span,
      .kv-edit-selector-buttons .kv-editor-button.large span,
      .kv-section-add-controls .kv-editor-button.large span,
      .kv-section-controls .kv-editor-button.large span,
      .add-post-button-container .kv-editor-button.large span,
      .kv-control .kv-editor-button.large span {
        font-weight: 700;
        font-size: 14px !important;
        font-family: "Nunito Sans" !important; }
    .kv-edit-selector-light .kv-editor-button > i,
    .kv-edit-selector-buttons .kv-editor-button > i,
    .kv-section-add-controls .kv-editor-button > i,
    .kv-section-controls .kv-editor-button > i,
    .add-post-button-container .kv-editor-button > i,
    .kv-control .kv-editor-button > i {
      cursor: pointer;
      font-size: inherit;
      line-height: 32px; }

.kv-section-add-controls,
.kv-section-controls,
.kv-add-item-btn {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); }

.kv-edit-selector-light .kv-editor-button:first-of-type,
.kv-edit-selector-buttons .kv-editor-button:first-of-type,
.kv-add-item-btn:first-of-type {
  border-top-left-radius: 4px !important;
  border-bottom-left-radius: 4px !important; }

.kv-edit-selector-light .kv-editor-button:last-of-type,
.kv-edit-selector-buttons .kv-editor-button:last-of-type,
.kv-add-item-btn:last-of-type {
  border-top-right-radius: 4px !important;
  border-bottom-right-radius: 4px !important; }

.kv-edit-selector-light,
.kv-edit-selector-buttons {
  padding: 4px;
  border-radius: 4px;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08); }
  .kv-edit-selector-light.single,
  .kv-edit-selector-buttons.single {
    padding: 0; }
  .kv-edit-selector-light .kv-editor-button,
  .kv-edit-selector-buttons .kv-editor-button {
    border-radius: 4px;
    background-color: #FFF;
    color: rgba(0, 0, 0, 0.6) !important; }
    .kv-edit-selector-light .kv-editor-button i,
    .kv-edit-selector-buttons .kv-editor-button i {
      width: 28px !important;
      height: 28px;
      line-height: 30px; }
    .kv-edit-selector-light .kv-editor-button:hover, .kv-edit-selector-light .kv-editor-button:active, .kv-edit-selector-light .kv-editor-button:focus,
    .kv-edit-selector-buttons .kv-editor-button:hover,
    .kv-edit-selector-buttons .kv-editor-button:active,
    .kv-edit-selector-buttons .kv-editor-button:focus {
      background-color: rgba(0, 0, 0, 0.1);
      color: rgba(0, 0, 0, 0.6);
      fill: rgba(0, 0, 0, 0.6); }

.kv-selected {
  box-shadow: 0 0 0 1px #FFF;
  z-index: 10; }
  .kv-selected:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-color: #0076DF;
    display: block;
    box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.24);
    z-index: -1;
    /* additional props are set dependant on zoomfactor in editor-wrapper-component */ }
  @media screen and (max-width: 768px) {
    .kv-selected {
      box-shadow: none !important;
      z-index: 0 !important; }
      .kv-selected:after {
        display: none; } }

@media screen and (max-width: 768px) {
  .kv-section-add-controls {
    top: -12px !important; }
  /* TODO: @dvandervlag When the Store/Blog is mobile ready, remove the selector. */
  .add-post-button,
  .storeProductList .add-container,
  .storeProductRow .add-container {
    display: none !important; }
  div[data-type="manage-blog"],
  div[data-type="manage-store"] {
    pointer-events: none; }
    div[data-type="manage-blog"]:hover,
    div[data-type="manage-store"]:hover {
      display: none !important; } }

/* End Global Editor UI Control Styling */
.site-editor .domain-bar {
  left: 28px;
  top: 28px;
  height: 37px;
  width: calc(100% - 56px);
  position: relative;
  background-color: white; }

.kv-site.kv-no-textselect {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none; }

.kv-site.kv-edit-mode {
  left: 28px;
  top: 28px;
  width: calc(100% - 56px);
  position: relative;
  padding-left: 0;
  padding-right: 0;
  -webkit-transform-origin: top left;
          transform-origin: top left; }
  .kv-site.kv-edit-mode .kv-page {
    display: block;
    position: relative;
    -webkit-transform: scale(1);
            transform: scale(1); }
  .kv-site.kv-edit-mode.kv-add-section {
    overflow: visible;
    -webkit-transition: unset;
    transition: unset;
    pointer-events: none; }
    .kv-site.kv-edit-mode.kv-add-section .kv-page section::after {
      display: none !important; }
  .domainBarVisible .kv-site.kv-edit-mode {
    top: 54px; }
</style><style>html, body {
  word-wrap: break-word;
  -webkit-line-break: after-white-space; }

html.kv-zooming, body.kv-zooming {
  height: 100%;
  overflow: hidden;
  width: 100%;
  position: fixed; }

.kv-control-placeholder {
  display: none; }

.position-relative {
  position: relative; }

.kv-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden; }

.kv-background .kv-background-inner, .kv-background .kv-parallax-container {
  /*z-index: -10;*/
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover; }

.kv-background .pattern-white-0, .kv-background .pattern-white-1, .kv-background .pattern-white-2, .kv-background .pattern-white-3, .kv-background .pattern-white-4, .kv-background .pattern-white-5, .kv-background .pattern-white-6, .kv-background .pattern-white-7,
.kv-background .pattern-black-0, .kv-background .pattern-black-1, .kv-background .pattern-black-2, .kv-background .pattern-black-3, .kv-background .pattern-black-4, .kv-background .pattern-black-5, .kv-background .pattern-black-6, .kv-background .pattern-black-7 {
  background-size: unset;
  background-repeat: repeat;
  opacity: 0.2; }

.kv-background .pattern-black-0 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/aa7de0183be8d7c2786d9da062cc80dd.svg);
  background-size: 44px 68px; }

.kv-background .pattern-black-1 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/2b8b3a2fd508f8b216846d04666b109c.svg);
  background-size: 96px 96px; }

.kv-background .pattern-black-2 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/5a58e090b5d7e35ffc25700abc76828d.svg);
  background-size: 300px 300px; }

.kv-background .pattern-black-3 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/7b7ef3cc45b25a329650ddca3e26b41c.svg);
  background-size: 215px 215px; }

.kv-background .pattern-black-4 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/0b3fe3fc75a18b9e855be4c515c4bf65.svg);
  background-size: 47px 47px; }

.kv-background .pattern-black-5 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/4bea6e28a6282c405bc867343de19b87.svg);
  background-size: 16px 16px; }

.kv-background .pattern-black-6 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/fb9d7a7ef29a81fb66d2d62a1b6980b5.svg);
  background-size: 72px 116px; }

.kv-background .pattern-black-7 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/bcdc808513341e041e205f578a0887dd.svg);
  background-size: 200px 200px; }

.kv-background .pattern-white-0 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/b98a52f94b3d8696569bc1b554f91fc2.svg);
  background-size: 44px 68px; }

.kv-background .pattern-white-1 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/c9315c47236667af242b25fbb9e91dd4.svg);
  background-size: 96px 96px; }

.kv-background .pattern-white-2 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/597129d67e512125bcfbb3ffd8dbd995.svg);
  background-size: 300px 300px; }

.kv-background .pattern-white-3 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/b68a6c0982266d6dcca4f9f1046a5943.svg);
  background-size: 215px 215px; }

.kv-background .pattern-white-4 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/c49b88a58463151eb5714b2d9d274440.svg);
  background-size: 47px 47px; }

.kv-background .pattern-white-5 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/d3efd324ed3bdd95708b658bb5ce86e5.svg);
  background-size: 16px 16px; }

.kv-background .pattern-white-6 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/c5be3d81f0d9e4e66073ac7e28338a46.svg);
  background-size: 72px 116px; }

.kv-background .pattern-white-7 {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/c115dfb3fb5f539e6558a114905734b4.svg);
  background-size: 200px 200px; }

.kv-full-page {
  min-height: 100vh; }

/* Smooth transition for background animation */
@-webkit-keyframes animateImage {
  0%, 100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  35% {
    -webkit-transform: matrix3d(1.15, 0, 0, 0, 0, 1.15, 0, 0, 0, 0, 1, 0, -40, -40, 0, 1); } }
@keyframes animateImage {
  0%, 100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  35% {
    -webkit-transform: matrix3d(1.15, 0, 0, 0, 0, 1.15, 0, 0, 0, 0, 1, 0, -40, -40, 0, 1); } }
</style><style>/*! PhotoSwipe main CSS by Dmitry Semenov | photoswipe.com | MIT license */
/*
	Styles for basic PhotoSwipe functionality (sliding area, open/close transitions)
*/
/* pswp = photoswipe */
.pswp {
  display: none;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  overflow: hidden;
  touch-action: none;
  z-index: 1500;
  -webkit-text-size-adjust: 100%;
  /* create separate layer, to avoid paint on window.onscroll in webkit/blink */
  -webkit-backface-visibility: hidden;
  outline: none; }

.pswp * {
  box-sizing: border-box; }

.pswp img {
  max-width: none; }

/* style is added when JS option showHideOpacity is set to true */
.pswp--animate_opacity {
  /* 0.001, because opacity:0 doesn't trigger Paint action, which causes lag at start of transition */
  opacity: 0.001;
  will-change: opacity;
  /* for open/close transition */
  -webkit-transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
  transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1); }

.pswp--open {
  display: block; }

.pswp--zoom-allowed .pswp__img {
  /* autoprefixer: off */
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.pswp--zoomed-in .pswp__img {
  /* autoprefixer: off */
  cursor: -webkit-grab;
  cursor: -moz-grab;
  cursor: grab; }

.pswp--dragging .pswp__img {
  /* autoprefixer: off */
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: grabbing; }

/*
	Background is added as a separate element.
	As animating opacity is much faster than animating rgba() background-color.
*/
.pswp__bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: 0;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  will-change: opacity; }

.pswp__scroll-wrap {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden; }

.pswp__container,
.pswp__zoom-wrap {
  touch-action: none;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0; }

/* Prevent selection and tap highlights */
.pswp__container,
.pswp__img {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none; }

.pswp__zoom-wrap {
  position: absolute;
  width: 100%;
  -webkit-transform-origin: left top;
  transform-origin: left top;
  /* for open/close transition */
  -webkit-transition: -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
  transition: -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
  transition: transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
  transition: transform 333ms cubic-bezier(0.4, 0, 0.22, 1), -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1); }

.pswp__bg {
  will-change: opacity;
  /* for open/close transition */
  -webkit-transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
  transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1); }

.pswp--animated-in .pswp__bg,
.pswp--animated-in .pswp__zoom-wrap {
  -webkit-transition: none;
  transition: none; }

.pswp__container,
.pswp__zoom-wrap {
  -webkit-backface-visibility: hidden; }

.pswp__item {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  overflow: hidden; }

.pswp__img {
  position: absolute;
  width: auto;
  height: auto;
  top: 0;
  left: 0; }

/*
	stretched thumbnail or div placeholder element (see below)
	style is added to avoid flickering in webkit/blink when layers overlap
*/
.pswp__img--placeholder {
  -webkit-backface-visibility: hidden; }

/*
	div element that matches size of large image
	large image loads on top of it
*/
.pswp__img--placeholder--blank {
  background: #222; }

.pswp--ie .pswp__img {
  width: 100% !important;
  height: auto !important;
  left: 0;
  top: 0; }

/*
	Error message appears when image is not loaded
	(JS option errorMsg controls markup)
*/
.pswp__error-msg {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  font-size: 14px;
  line-height: 16px;
  margin-top: -8px;
  color: #CCC; }

.pswp__error-msg a {
  color: #CCC;
  text-decoration: underline; }
</style><style>/*! PhotoSwipe Default UI CSS by Dmitry Semenov | photoswipe.com | MIT license */
/*

	Contents:

	1. Buttons
	2. Share modal and links
	3. Index indicator ("1 of X" counter)
	4. Caption
	5. Loading indicator
	6. Additional styles (root element, top bar, idle state, hidden state, etc.)

*/
/*
	
	1. Buttons

 */
/* <button> css reset */
.pswp__button {
  width: 44px;
  height: 44px;
  position: relative;
  background: none;
  cursor: pointer;
  overflow: visible;
  -webkit-appearance: none;
  display: block;
  border: 0;
  padding: 0;
  margin: 0;
  float: right;
  opacity: 0.75;
  -webkit-transition: opacity 0.2s;
  transition: opacity 0.2s;
  box-shadow: none; }

.pswp__button:focus, .pswp__button:hover {
  opacity: 1; }

.pswp__button:active {
  outline: none;
  opacity: 0.9; }

.pswp__button::-moz-focus-inner {
  padding: 0;
  border: 0; }

/* pswp__ui--over-close class it added when mouse is over element that should close gallery */
.pswp__ui--over-close .pswp__button--close {
  opacity: 1; }

.pswp__button,
.pswp__button--arrow--left:before,
.pswp__button--arrow--right:before {
  background: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/e3f799c6dec9af194c86decdf7392405.png) 0 0 no-repeat;
  background-size: 264px 88px;
  width: 44px;
  height: 44px; }

@media (-webkit-min-device-pixel-ratio: 1.1), (-webkit-min-device-pixel-ratio: 1.09375), (min-resolution: 105dpi), (min-resolution: 1.1dppx) {
  /* Serve SVG sprite if browser supports SVG and resolution is more than 105dpi */
  .pswp--svg .pswp__button,
  .pswp--svg .pswp__button--arrow--left:before,
  .pswp--svg .pswp__button--arrow--right:before {
    background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/b257fa9c5ac8c515ac4d77a667ce2943.svg); }
  .pswp--svg .pswp__button--arrow--left,
  .pswp--svg .pswp__button--arrow--right {
    background: none; } }

.pswp__button--close {
  background-position: 0 -44px; }

.pswp__button--share {
  background-position: -44px -44px; }

.pswp__button--fs {
  display: none; }

.pswp--supports-fs .pswp__button--fs {
  display: block; }

.pswp--fs .pswp__button--fs {
  background-position: -44px 0; }

.pswp__button--zoom {
  display: none;
  background-position: -88px 0; }

.pswp--zoom-allowed .pswp__button--zoom {
  display: block; }

.pswp--zoomed-in .pswp__button--zoom {
  background-position: -132px 0; }

/* no arrows on touch screens */
.pswp--touch .pswp__button--arrow--left,
.pswp--touch .pswp__button--arrow--right {
  visibility: hidden; }

/*
	Arrow buttons hit area
	(icon is added to :before pseudo-element)
*/
.pswp__button--arrow--left,
.pswp__button--arrow--right {
  background: none;
  top: 50%;
  margin-top: -50px;
  width: 70px;
  height: 100px;
  position: absolute; }

.pswp__button--arrow--left {
  left: 0; }

.pswp__button--arrow--right {
  right: 0; }

.pswp__button--arrow--left:before,
.pswp__button--arrow--right:before {
  content: '';
  top: 35px;
  background-color: rgba(0, 0, 0, 0.3);
  height: 30px;
  width: 32px;
  position: absolute; }

.pswp__button--arrow--left:before {
  left: 6px;
  background-position: -138px -44px; }

.pswp__button--arrow--right:before {
  right: 6px;
  background-position: -94px -44px; }

/*

	2. Share modal/popup and links

 */
.pswp__counter,
.pswp__share-modal {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.pswp__share-modal {
  display: block;
  background: rgba(0, 0, 0, 0.5);
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  padding: 10px;
  position: absolute;
  z-index: 1600;
  opacity: 0;
  -webkit-transition: opacity 0.25s ease-out;
  transition: opacity 0.25s ease-out;
  -webkit-backface-visibility: hidden;
  will-change: opacity; }

.pswp__share-modal--hidden {
  display: none; }

.pswp__share-tooltip {
  z-index: 1620;
  position: absolute;
  background: #FFF;
  top: 56px;
  border-radius: 2px;
  display: block;
  width: auto;
  right: 44px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
  -webkit-transform: translateY(6px);
  transform: translateY(6px);
  -webkit-transition: -webkit-transform 0.25s;
  transition: -webkit-transform 0.25s;
  transition: transform 0.25s;
  transition: transform 0.25s, -webkit-transform 0.25s;
  -webkit-backface-visibility: hidden;
  will-change: transform; }

.pswp__share-tooltip a {
  display: block;
  padding: 8px 12px;
  color: #000;
  text-decoration: none;
  font-size: 14px;
  line-height: 18px; }

.pswp__share-tooltip a:hover {
  text-decoration: none;
  color: #000; }

.pswp__share-tooltip a:first-child {
  /* round corners on the first/last list item */
  border-radius: 2px 2px 0 0; }

.pswp__share-tooltip a:last-child {
  border-radius: 0 0 2px 2px; }

.pswp__share-modal--fade-in {
  opacity: 1; }

.pswp__share-modal--fade-in .pswp__share-tooltip {
  -webkit-transform: translateY(0);
  transform: translateY(0); }

/* increase size of share links on touch devices */
.pswp--touch .pswp__share-tooltip a {
  padding: 16px 12px; }

a.pswp__share--facebook:before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  top: -12px;
  right: 15px;
  border: 6px solid transparent;
  border-bottom-color: #FFF;
  -webkit-pointer-events: none;
  -moz-pointer-events: none;
  pointer-events: none; }

a.pswp__share--facebook:hover {
  background: #3E5C9A;
  color: #FFF; }

a.pswp__share--facebook:hover:before {
  border-bottom-color: #3E5C9A; }

a.pswp__share--twitter:hover {
  background: #55ACEE;
  color: #FFF; }

a.pswp__share--pinterest:hover {
  background: #CCC;
  color: #CE272D; }

a.pswp__share--download:hover {
  background: #DDD; }

/*

	3. Index indicator ("1 of X" counter)

 */
.pswp__counter {
  position: absolute;
  left: 0;
  top: 0;
  height: 44px;
  font-size: 13px;
  line-height: 44px;
  color: #FFF;
  opacity: 0.75;
  padding: 0 10px; }

/*
	
	4. Caption

 */
.pswp__caption {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  min-height: 44px; }

.pswp__caption small {
  font-size: 11px;
  color: #BBB; }

.pswp__caption__center {
  text-align: left;
  max-width: 420px;
  margin: 0 auto;
  font-size: 13px;
  padding: 10px;
  line-height: 20px;
  color: #CCC; }

.pswp__caption--empty {
  display: none; }

/* Fake caption element, used to calculate height of next/prev image */
.pswp__caption--fake {
  visibility: hidden; }

/*

	5. Loading indicator (preloader)

	You can play with it here - http://codepen.io/dimsemenov/pen/yyBWoR

 */
.pswp__preloader {
  width: 44px;
  height: 44px;
  position: absolute;
  top: 0;
  left: 50%;
  margin-left: -22px;
  opacity: 0;
  -webkit-transition: opacity 0.25s ease-out;
  transition: opacity 0.25s ease-out;
  will-change: opacity;
  direction: ltr; }

.pswp__preloader__icn {
  width: 20px;
  height: 20px;
  margin: 12px; }

.pswp__preloader--active {
  opacity: 1; }

.pswp__preloader--active .pswp__preloader__icn {
  /* We use .gif in browsers that don't support CSS animation */
  background: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/e34aafbb485a96eaf2a789b2bf3af6fe.gif) 0 0 no-repeat; }

.pswp--css_animation .pswp__preloader--active {
  opacity: 1; }

.pswp--css_animation .pswp__preloader--active .pswp__preloader__icn {
  -webkit-animation: clockwise 500ms linear infinite;
  animation: clockwise 500ms linear infinite; }

.pswp--css_animation .pswp__preloader--active .pswp__preloader__donut {
  -webkit-animation: donut-rotate 1000ms cubic-bezier(0.4, 0, 0.22, 1) infinite;
  animation: donut-rotate 1000ms cubic-bezier(0.4, 0, 0.22, 1) infinite; }

.pswp--css_animation .pswp__preloader__icn {
  background: none;
  opacity: 0.75;
  width: 14px;
  height: 14px;
  position: absolute;
  left: 15px;
  top: 15px;
  margin: 0; }

.pswp--css_animation .pswp__preloader__cut {
  /* 
			The idea of animating inner circle is based on Polymer ("material") loading indicator 
			 by Keanu Lee https://blog.keanulee.com/2014/10/20/the-tale-of-three-spinners.html
		*/
  position: relative;
  width: 7px;
  height: 14px;
  overflow: hidden; }

.pswp--css_animation .pswp__preloader__donut {
  box-sizing: border-box;
  width: 14px;
  height: 14px;
  border: 2px solid #FFF;
  border-radius: 50%;
  border-left-color: transparent;
  border-bottom-color: transparent;
  position: absolute;
  top: 0;
  left: 0;
  background: none;
  margin: 0; }

@media screen and (max-width: 1024px) {
  .pswp__preloader {
    position: relative;
    left: auto;
    top: auto;
    margin: 0;
    float: right; } }

@-webkit-keyframes clockwise {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes clockwise {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes donut-rotate {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0); }
  50% {
    -webkit-transform: rotate(-140deg);
    transform: rotate(-140deg); }
  100% {
    -webkit-transform: rotate(0);
    transform: rotate(0); } }

@keyframes donut-rotate {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0); }
  50% {
    -webkit-transform: rotate(-140deg);
    transform: rotate(-140deg); }
  100% {
    -webkit-transform: rotate(0);
    transform: rotate(0); } }

/*
	
	6. Additional styles

 */
/* root element of UI */
.pswp__ui {
  -webkit-font-smoothing: auto;
  visibility: visible;
  opacity: 1;
  z-index: 1550; }

/* top black bar with buttons and "1 of X" indicator */
.pswp__top-bar {
  position: absolute;
  left: 0;
  top: 0;
  height: 44px;
  width: 100%; }

.pswp__caption,
.pswp__top-bar,
.pswp--has_mouse .pswp__button--arrow--left,
.pswp--has_mouse .pswp__button--arrow--right {
  -webkit-backface-visibility: hidden;
  will-change: opacity;
  -webkit-transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
  transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1); }

/* pswp--has_mouse class is added only when two subsequent mousemove events occur */
.pswp--has_mouse .pswp__button--arrow--left,
.pswp--has_mouse .pswp__button--arrow--right {
  visibility: visible; }

.pswp__top-bar,
.pswp__caption {
  background-color: rgba(0, 0, 0, 0.5); }

/* pswp__ui--fit class is added when main image "fits" between top bar and bottom bar (caption) */
.pswp__ui--fit .pswp__top-bar,
.pswp__ui--fit .pswp__caption {
  background-color: rgba(0, 0, 0, 0.3); }

/* pswp__ui--idle class is added when mouse isn't moving for several seconds (JS option timeToIdle) */
.pswp__ui--idle .pswp__top-bar {
  opacity: 0; }

.pswp__ui--idle .pswp__button--arrow--left,
.pswp__ui--idle .pswp__button--arrow--right {
  opacity: 0; }

/*
	pswp__ui--hidden class is added when controls are hidden
	e.g. when user taps to toggle visibility of controls
*/
.pswp__ui--hidden .pswp__top-bar,
.pswp__ui--hidden .pswp__caption,
.pswp__ui--hidden .pswp__button--arrow--left,
.pswp__ui--hidden .pswp__button--arrow--right {
  /* Force paint & create composition layer for controls. */
  opacity: 0.001; }

/* pswp__ui--one-slide class is added when there is just one item in gallery */
.pswp__ui--one-slide .pswp__button--arrow--left,
.pswp__ui--one-slide .pswp__button--arrow--right,
.pswp__ui--one-slide .pswp__counter {
  display: none; }

.pswp__element--disabled {
  display: none !important; }

.pswp--minimal--dark .pswp__top-bar {
  background: none; }
</style><style>/**
 * Swiper 4.3.5
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://www.idangero.us/swiper/
 *
 * Copyright 2014-2018 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: July 31, 2018
 */
.swiper-container {
  margin: 0 auto;
  position: relative;
  overflow: hidden;
  list-style: none;
  padding: 0;
  z-index: 1; }

.swiper-container-no-flexbox .swiper-slide {
  float: left; }

.swiper-container-vertical > .swiper-wrapper {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column; }

.swiper-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  -o-transition-property: transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  transition-property: transform,-webkit-transform;
  -webkit-box-sizing: content-box;
  box-sizing: content-box; }

.swiper-container-android .swiper-slide, .swiper-wrapper {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }

.swiper-container-multirow > .swiper-wrapper {
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap; }

.swiper-container-free-mode > .swiper-wrapper {
  -webkit-transition-timing-function: ease-out;
  -o-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
  margin: 0 auto; }

.swiper-slide {
  -webkit-flex-shrink: 0;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: 100%;
  height: 100%;
  position: relative;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  -o-transition-property: transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  transition-property: transform,-webkit-transform; }

.swiper-invisible-blank-slide {
  visibility: hidden; }

.swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
  height: auto; }

.swiper-container-autoheight .swiper-wrapper {
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-transition-property: height,-webkit-transform;
  transition-property: height,-webkit-transform;
  -o-transition-property: transform,height;
  transition-property: transform,height;
  transition-property: transform,height,-webkit-transform; }

.swiper-container-3d {
  -webkit-perspective: 1200px;
  perspective: 1200px; }

.swiper-container-3d .swiper-cube-shadow, .swiper-container-3d .swiper-slide, .swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-wrapper {
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d; }

.swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 10; }

.swiper-container-3d .swiper-slide-shadow-left {
  background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
  background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)); }

.swiper-container-3d .swiper-slide-shadow-right {
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)); }

.swiper-container-3d .swiper-slide-shadow-top {
  background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
  background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)); }

.swiper-container-3d .swiper-slide-shadow-bottom {
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)); }

.swiper-container-wp8-horizontal, .swiper-container-wp8-horizontal > .swiper-wrapper {
  -ms-touch-action: pan-y;
  touch-action: pan-y; }

.swiper-container-wp8-vertical, .swiper-container-wp8-vertical > .swiper-wrapper {
  -ms-touch-action: pan-x;
  touch-action: pan-x; }

.swiper-button-next, .swiper-button-prev {
  position: absolute;
  top: 50%;
  width: 27px;
  height: 44px;
  margin-top: -22px;
  z-index: 10;
  cursor: pointer;
  background-size: 27px 44px;
  background-position: center;
  background-repeat: no-repeat; }

.swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled {
  opacity: .35;
  cursor: auto;
  pointer-events: none; }

.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
  left: 10px;
  right: auto; }

.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
  right: 10px;
  left: auto; }

.swiper-button-prev.swiper-button-white, .swiper-container-rtl .swiper-button-next.swiper-button-white {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E"); }

.swiper-button-next.swiper-button-white, .swiper-container-rtl .swiper-button-prev.swiper-button-white {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E"); }

.swiper-button-prev.swiper-button-black, .swiper-container-rtl .swiper-button-next.swiper-button-black {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E"); }

.swiper-button-next.swiper-button-black, .swiper-container-rtl .swiper-button-prev.swiper-button-black {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E"); }

.swiper-button-lock {
  display: none; }

.swiper-pagination {
  position: absolute;
  text-align: center;
  -webkit-transition: .3s opacity;
  -o-transition: .3s opacity;
  transition: .3s opacity;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  z-index: 10; }

.swiper-pagination.swiper-pagination-hidden {
  opacity: 0; }

.swiper-container-horizontal > .swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
  bottom: 10px;
  left: 0;
  width: 100%; }

.swiper-pagination-bullets-dynamic {
  overflow: hidden;
  font-size: 0; }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  -webkit-transform: scale(0.33);
  -ms-transform: scale(0.33);
  transform: scale(0.33);
  position: relative; }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1); }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1); }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
  -webkit-transform: scale(0.66);
  -ms-transform: scale(0.66);
  transform: scale(0.66); }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
  -webkit-transform: scale(0.33);
  -ms-transform: scale(0.33);
  transform: scale(0.33); }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
  -webkit-transform: scale(0.66);
  -ms-transform: scale(0.66);
  transform: scale(0.66); }

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
  -webkit-transform: scale(0.33);
  -ms-transform: scale(0.33);
  transform: scale(0.33); }

.swiper-pagination-bullet {
  width: 8px;
  height: 8px;
  display: inline-block;
  border-radius: 100%;
  background: #000;
  opacity: .2; }

button.swiper-pagination-bullet {
  border: none;
  margin: 0;
  padding: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }

.swiper-pagination-clickable .swiper-pagination-bullet {
  cursor: pointer; }

.swiper-pagination-bullet-active {
  opacity: 1;
  background: #007aff; }

.swiper-container-vertical > .swiper-pagination-bullets {
  right: 10px;
  top: 50%;
  -webkit-transform: translate3d(0, -50%, 0);
  transform: translate3d(0, -50%, 0); }

.swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 6px 0;
  display: block; }

.swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 8px; }

.swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  display: inline-block;
  -webkit-transition: .2s top,.2s -webkit-transform;
  -o-transition: .2s top,.2s -webkit-transform;
  transition: .2s top,.2s -webkit-transform;
  -o-transition: .2s transform,.2s top;
  -webkit-transition: .2s transform,.2s top;
  transition: .2s transform,.2s top;
  -webkit-transition: .2s transform,.2s top,.2s -webkit-transform;
  -o-transition: .2s transform,.2s top,.2s -webkit-transform;
  transition: .2s transform,.2s top,.2s -webkit-transform; }

.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 0 4px; }

.swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  white-space: nowrap; }

.swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  -webkit-transition: .2s left,.2s -webkit-transform;
  -o-transition: .2s left,.2s -webkit-transform;
  transition: .2s left,.2s -webkit-transform;
  -o-transition: .2s transform,.2s left;
  -webkit-transition: .2s transform,.2s left;
  transition: .2s transform,.2s left;
  -webkit-transition: .2s transform,.2s left,.2s -webkit-transform;
  -o-transition: .2s transform,.2s left,.2s -webkit-transform;
  transition: .2s transform,.2s left,.2s -webkit-transform; }

.swiper-container-horizontal.swiper-container-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  -webkit-transition: .2s right,.2s -webkit-transform;
  -o-transition: .2s right,.2s -webkit-transform;
  transition: .2s right,.2s -webkit-transform;
  -o-transition: .2s transform,.2s right;
  -webkit-transition: .2s transform,.2s right;
  transition: .2s transform,.2s right;
  -webkit-transition: .2s transform,.2s right,.2s -webkit-transform;
  -o-transition: .2s transform,.2s right,.2s -webkit-transform;
  transition: .2s transform,.2s right,.2s -webkit-transform; }

.swiper-pagination-progressbar {
  background: rgba(0, 0, 0, 0.25);
  position: absolute; }

.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  background: #007aff;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transform-origin: left top;
  -ms-transform-origin: left top;
  transform-origin: left top; }

.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  -webkit-transform-origin: right top;
  -ms-transform-origin: right top;
  transform-origin: right top; }

.swiper-container-horizontal > .swiper-pagination-progressbar, .swiper-container-vertical > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
  width: 100%;
  height: 4px;
  left: 0;
  top: 0; }

.swiper-container-horizontal > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite, .swiper-container-vertical > .swiper-pagination-progressbar {
  width: 4px;
  height: 100%;
  left: 0;
  top: 0; }

.swiper-pagination-white .swiper-pagination-bullet-active {
  background: #fff; }

.swiper-pagination-progressbar.swiper-pagination-white {
  background: rgba(255, 255, 255, 0.25); }

.swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
  background: #fff; }

.swiper-pagination-black .swiper-pagination-bullet-active {
  background: #000; }

.swiper-pagination-progressbar.swiper-pagination-black {
  background: rgba(0, 0, 0, 0.25); }

.swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
  background: #000; }

.swiper-pagination-lock {
  display: none; }

.swiper-scrollbar {
  border-radius: 10px;
  position: relative;
  -ms-touch-action: none;
  background: rgba(0, 0, 0, 0.1); }

.swiper-container-horizontal > .swiper-scrollbar {
  position: absolute;
  left: 1%;
  bottom: 3px;
  z-index: 50;
  height: 5px;
  width: 98%; }

.swiper-container-vertical > .swiper-scrollbar {
  position: absolute;
  right: 3px;
  top: 1%;
  z-index: 50;
  width: 5px;
  height: 98%; }

.swiper-scrollbar-drag {
  height: 100%;
  width: 100%;
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  left: 0;
  top: 0; }

.swiper-scrollbar-cursor-drag {
  cursor: move; }

.swiper-scrollbar-lock {
  display: none; }

.swiper-zoom-container {
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center; }

.swiper-zoom-container > canvas, .swiper-zoom-container > img, .swiper-zoom-container > svg {
  max-width: 100%;
  max-height: 100%;
  -o-object-fit: contain;
  object-fit: contain; }

.swiper-slide-zoomed {
  cursor: move; }

.swiper-lazy-preloader {
  width: 42px;
  height: 42px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -21px;
  margin-top: -21px;
  z-index: 10;
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
  animation: swiper-preloader-spin 1s steps(12, end) infinite; }

.swiper-lazy-preloader:after {
  display: block;
  content: '';
  width: 100%;
  height: 100%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
  background-position: 50%;
  background-size: 100%;
  background-repeat: no-repeat; }

.swiper-lazy-preloader-white:after {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E"); }

@-webkit-keyframes swiper-preloader-spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes swiper-preloader-spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

.swiper-container .swiper-notification {
  position: absolute;
  left: 0;
  top: 0;
  pointer-events: none;
  opacity: 0;
  z-index: -1000; }

.swiper-container-fade.swiper-container-free-mode .swiper-slide {
  -webkit-transition-timing-function: ease-out;
  -o-transition-timing-function: ease-out;
  transition-timing-function: ease-out; }

.swiper-container-fade .swiper-slide {
  pointer-events: none;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity; }

.swiper-container-fade .swiper-slide .swiper-slide {
  pointer-events: none; }

.swiper-container-fade .swiper-slide-active, .swiper-container-fade .swiper-slide-active .swiper-slide-active {
  pointer-events: auto; }

.swiper-container-cube {
  overflow: visible; }

.swiper-container-cube .swiper-slide {
  pointer-events: none;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1;
  visibility: hidden;
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  width: 100%;
  height: 100%; }

.swiper-container-cube .swiper-slide .swiper-slide {
  pointer-events: none; }

.swiper-container-cube.swiper-container-rtl .swiper-slide {
  -webkit-transform-origin: 100% 0;
  -ms-transform-origin: 100% 0;
  transform-origin: 100% 0; }

.swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-active .swiper-slide-active {
  pointer-events: auto; }

.swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-next, .swiper-container-cube .swiper-slide-next + .swiper-slide, .swiper-container-cube .swiper-slide-prev {
  pointer-events: auto;
  visibility: visible; }

.swiper-container-cube .swiper-slide-shadow-bottom, .swiper-container-cube .swiper-slide-shadow-left, .swiper-container-cube .swiper-slide-shadow-right, .swiper-container-cube .swiper-slide-shadow-top {
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden; }

.swiper-container-cube .swiper-cube-shadow {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: .6;
  -webkit-filter: blur(50px);
  filter: blur(50px);
  z-index: 0; }

.swiper-container-flip {
  overflow: visible; }

.swiper-container-flip .swiper-slide {
  pointer-events: none;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1; }

.swiper-container-flip .swiper-slide .swiper-slide {
  pointer-events: none; }

.swiper-container-flip .swiper-slide-active, .swiper-container-flip .swiper-slide-active .swiper-slide-active {
  pointer-events: auto; }

.swiper-container-flip .swiper-slide-shadow-bottom, .swiper-container-flip .swiper-slide-shadow-left, .swiper-container-flip .swiper-slide-shadow-right, .swiper-container-flip .swiper-slide-shadow-top {
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden; }

.swiper-container-coverflow .swiper-wrapper {
  -ms-perspective: 1200px; }
</style><style>/*!
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */
/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
  display: none; }

.ui-helper-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

.ui-helper-reset {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  line-height: 1.3;
  text-decoration: none;
  font-size: 100%;
  list-style: none; }

.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
  content: "";
  display: table;
  border-collapse: collapse; }

.ui-helper-clearfix:after {
  clear: both; }

.ui-helper-zfix {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
  opacity: 0;
  filter: Alpha(Opacity=0);
  /* support: IE8 */ }

.ui-front {
  z-index: 100; }

/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
  cursor: default !important;
  pointer-events: none; }

/* Icons
----------------------------------*/
.ui-icon {
  display: inline-block;
  vertical-align: middle;
  margin-top: -.25em;
  position: relative;
  text-indent: -99999px;
  overflow: hidden;
  background-repeat: no-repeat; }

.ui-widget-icon-block {
  left: 50%;
  margin-left: -8px;
  display: block; }

/* Misc visuals
----------------------------------*/
/* Overlays */
.ui-widget-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%; }
</style><style>/*!
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */

/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
	display: none;
}
.ui-helper-hidden-accessible {
	border: 0;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}
.ui-helper-reset {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	line-height: 1.3;
	text-decoration: none;
	font-size: 100%;
	list-style: none;
}
.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
	content: "";
	display: table;
	border-collapse: collapse;
}
.ui-helper-clearfix:after {
	clear: both;
}
.ui-helper-zfix {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: absolute;
	opacity: 0;
	filter:Alpha(Opacity=0); /* support: IE8 */
}

.ui-front {
	z-index: 100;
}


/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
	cursor: default !important;
	pointer-events: none;
}


/* Icons
----------------------------------*/
.ui-icon {
	display: inline-block;
	vertical-align: middle;
	margin-top: -.25em;
	position: relative;
	text-indent: -99999px;
	overflow: hidden;
	background-repeat: no-repeat;
}

.ui-widget-icon-block {
	left: 50%;
	margin-left: -8px;
	display: block;
}

/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style><style>/*!
 * jQuery UI Accordion 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/accordion/#theming
 */
.ui-accordion .ui-accordion-header {
	display: block;
	cursor: pointer;
	position: relative;
	margin: 2px 0 0 0;
	padding: .5em .5em .5em .7em;
	font-size: 100%;
}
.ui-accordion .ui-accordion-content {
	padding: 1em 2.2em;
	border-top: 0;
	overflow: auto;
}
</style><style>/*!
 * jQuery UI Autocomplete 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/autocomplete/#theming
 */
.ui-autocomplete {
	position: absolute;
	top: 0;
	left: 0;
	cursor: default;
}
</style><style>/*!
 * jQuery UI Button 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/button/#theming
 */
.ui-button {
	padding: .4em 1em;
	display: inline-block;
	position: relative;
	line-height: normal;
	margin-right: .1em;
	cursor: pointer;
	vertical-align: middle;
	text-align: center;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;

	/* Support: IE <= 11 */
	overflow: visible;
}

.ui-button,
.ui-button:link,
.ui-button:visited,
.ui-button:hover,
.ui-button:active {
	text-decoration: none;
}

/* to make room for the icon, a width needs to be set here */
.ui-button-icon-only {
	width: 2em;
	box-sizing: border-box;
	text-indent: -9999px;
	white-space: nowrap;
}

/* no icon support for input elements */
input.ui-button.ui-button-icon-only {
	text-indent: 0;
}

/* button icon element(s) */
.ui-button-icon-only .ui-icon {
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -8px;
	margin-left: -8px;
}

.ui-button.ui-icon-notext .ui-icon {
	padding: 0;
	width: 2.1em;
	height: 2.1em;
	text-indent: -9999px;
	white-space: nowrap;

}

input.ui-button.ui-icon-notext .ui-icon {
	width: auto;
	height: auto;
	text-indent: 0;
	white-space: normal;
	padding: .4em 1em;
}

/* workarounds */
/* Support: Firefox 5 - 40 */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
	border: 0;
	padding: 0;
}
</style><style>/*!
 * jQuery UI Checkboxradio 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/checkboxradio/#theming
 */

.ui-checkboxradio-label .ui-icon-background {
	box-shadow: inset 1px 1px 1px #ccc;
	border-radius: .12em;
	border: none;
}
.ui-checkboxradio-radio-label .ui-icon-background {
	width: 16px;
	height: 16px;
	border-radius: 1em;
	overflow: visible;
	border: none;
}
.ui-checkboxradio-radio-label.ui-checkboxradio-checked .ui-icon,
.ui-checkboxradio-radio-label.ui-checkboxradio-checked:hover .ui-icon {
	background-image: none;
	width: 8px;
	height: 8px;
	border-width: 4px;
	border-style: solid;
}
.ui-checkboxradio-disabled {
	pointer-events: none;
}
</style><style>/*!
 * jQuery UI Controlgroup 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/controlgroup/#theming
 */

.ui-controlgroup {
	vertical-align: middle;
	display: inline-block;
}
.ui-controlgroup > .ui-controlgroup-item {
	float: left;
	margin-left: 0;
	margin-right: 0;
}
.ui-controlgroup > .ui-controlgroup-item:focus,
.ui-controlgroup > .ui-controlgroup-item.ui-visual-focus {
	z-index: 9999;
}
.ui-controlgroup-vertical > .ui-controlgroup-item {
	display: block;
	float: none;
	width: 100%;
	margin-top: 0;
	margin-bottom: 0;
	text-align: left;
}
.ui-controlgroup-vertical .ui-controlgroup-item {
	box-sizing: border-box;
}
.ui-controlgroup .ui-controlgroup-label {
	padding: .4em 1em;
}
.ui-controlgroup .ui-controlgroup-label span {
	font-size: 80%;
}
.ui-controlgroup-horizontal .ui-controlgroup-label + .ui-controlgroup-item {
	border-left: none;
}
.ui-controlgroup-vertical .ui-controlgroup-label + .ui-controlgroup-item {
	border-top: none;
}
.ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content {
	border-right: none;
}
.ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content {
	border-bottom: none;
}

/* Spinner specific style fixes */
.ui-controlgroup-vertical .ui-spinner-input {

	/* Support: IE8 only, Android < 4.4 only */
	width: 75%;
	width: calc( 100% - 2.4em );
}
.ui-controlgroup-vertical .ui-spinner .ui-spinner-up {
	border-top-style: solid;
}

</style><style>/*!
 * jQuery UI Datepicker 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/datepicker/#theming
 */
.ui-datepicker {
	width: 17em;
	padding: .2em .2em 0;
	display: none;
}
.ui-datepicker .ui-datepicker-header {
	position: relative;
	padding: .2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
	position: absolute;
	top: 2px;
	width: 1.8em;
	height: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
	top: 1px;
}
.ui-datepicker .ui-datepicker-prev {
	left: 2px;
}
.ui-datepicker .ui-datepicker-next {
	right: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
	left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
	right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
	display: block;
	position: absolute;
	left: 50%;
	margin-left: -8px;
	top: 50%;
	margin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
	margin: 0 2.3em;
	line-height: 1.8em;
	text-align: center;
}
.ui-datepicker .ui-datepicker-title select {
	font-size: 1em;
	margin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
	width: 45%;
}
.ui-datepicker table {
	width: 100%;
	font-size: .9em;
	border-collapse: collapse;
	margin: 0 0 .4em;
}
.ui-datepicker th {
	padding: .7em .3em;
	text-align: center;
	font-weight: bold;
	border: 0;
}
.ui-datepicker td {
	border: 0;
	padding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
	display: block;
	padding: .2em;
	text-align: right;
	text-decoration: none;
}
.ui-datepicker .ui-datepicker-buttonpane {
	background-image: none;
	margin: .7em 0 0 0;
	padding: 0 .2em;
	border-left: 0;
	border-right: 0;
	border-bottom: 0;
}
.ui-datepicker .ui-datepicker-buttonpane button {
	float: right;
	margin: .5em .2em .4em;
	cursor: pointer;
	padding: .2em .6em .3em .6em;
	width: auto;
	overflow: visible;
}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
	float: left;
}

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi {
	width: auto;
}
.ui-datepicker-multi .ui-datepicker-group {
	float: left;
}
.ui-datepicker-multi .ui-datepicker-group table {
	width: 95%;
	margin: 0 auto .4em;
}
.ui-datepicker-multi-2 .ui-datepicker-group {
	width: 50%;
}
.ui-datepicker-multi-3 .ui-datepicker-group {
	width: 33.3%;
}
.ui-datepicker-multi-4 .ui-datepicker-group {
	width: 25%;
}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
	border-left-width: 0;
}
.ui-datepicker-multi .ui-datepicker-buttonpane {
	clear: left;
}
.ui-datepicker-row-break {
	clear: both;
	width: 100%;
	font-size: 0;
}

/* RTL support */
.ui-datepicker-rtl {
	direction: rtl;
}
.ui-datepicker-rtl .ui-datepicker-prev {
	right: 2px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next {
	left: 2px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-prev:hover {
	right: 1px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next:hover {
	left: 1px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane {
	clear: right;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button {
	float: left;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
	float: right;
}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
	border-right-width: 0;
	border-left-width: 1px;
}

/* Icons */
.ui-datepicker .ui-icon {
	display: block;
	text-indent: -99999px;
	overflow: hidden;
	background-repeat: no-repeat;
	left: .5em;
	top: .3em;
}
</style><style>/*!
 * jQuery UI Dialog 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/dialog/#theming
 */
.ui-dialog {
	position: absolute;
	top: 0;
	left: 0;
	padding: .2em;
	outline: 0;
}
.ui-dialog .ui-dialog-titlebar {
	padding: .4em 1em;
	position: relative;
}
.ui-dialog .ui-dialog-title {
	float: left;
	margin: .1em 0;
	white-space: nowrap;
	width: 90%;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
	position: absolute;
	right: .3em;
	top: 50%;
	width: 20px;
	margin: -10px 0 0 0;
	padding: 1px;
	height: 20px;
}
.ui-dialog .ui-dialog-content {
	position: relative;
	border: 0;
	padding: .5em 1em;
	background: none;
	overflow: auto;
}
.ui-dialog .ui-dialog-buttonpane {
	text-align: left;
	border-width: 1px 0 0 0;
	background-image: none;
	margin-top: .5em;
	padding: .3em 1em .5em .4em;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
	float: right;
}
.ui-dialog .ui-dialog-buttonpane button {
	margin: .5em .4em .5em 0;
	cursor: pointer;
}
.ui-dialog .ui-resizable-n {
	height: 2px;
	top: 0;
}
.ui-dialog .ui-resizable-e {
	width: 2px;
	right: 0;
}
.ui-dialog .ui-resizable-s {
	height: 2px;
	bottom: 0;
}
.ui-dialog .ui-resizable-w {
	width: 2px;
	left: 0;
}
.ui-dialog .ui-resizable-se,
.ui-dialog .ui-resizable-sw,
.ui-dialog .ui-resizable-ne,
.ui-dialog .ui-resizable-nw {
	width: 7px;
	height: 7px;
}
.ui-dialog .ui-resizable-se {
	right: 0;
	bottom: 0;
}
.ui-dialog .ui-resizable-sw {
	left: 0;
	bottom: 0;
}
.ui-dialog .ui-resizable-ne {
	right: 0;
	top: 0;
}
.ui-dialog .ui-resizable-nw {
	left: 0;
	top: 0;
}
.ui-draggable .ui-dialog-titlebar {
	cursor: move;
}
</style><style>/*!
 * jQuery UI Draggable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
.ui-draggable-handle {
	-ms-touch-action: none;
	touch-action: none;
}
</style><style>/*!
 * jQuery UI Menu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/menu/#theming
 */
.ui-menu {
	list-style: none;
	padding: 0;
	margin: 0;
	display: block;
	outline: 0;
}
.ui-menu .ui-menu {
	position: absolute;
}
.ui-menu .ui-menu-item {
	margin: 0;
	cursor: pointer;
	/* support: IE10, see #8844 */
	list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
}
.ui-menu .ui-menu-item-wrapper {
	position: relative;
	padding: 3px 1em 3px .4em;
}
.ui-menu .ui-menu-divider {
	margin: 5px 0;
	height: 0;
	font-size: 0;
	line-height: 0;
	border-width: 1px 0 0 0;
}
.ui-menu .ui-state-focus,
.ui-menu .ui-state-active {
	margin: -1px;
}

/* icon support */
.ui-menu-icons {
	position: relative;
}
.ui-menu-icons .ui-menu-item-wrapper {
	padding-left: 2em;
}

/* left-aligned */
.ui-menu .ui-icon {
	position: absolute;
	top: 0;
	bottom: 0;
	left: .2em;
	margin: auto 0;
}

/* right-aligned */
.ui-menu .ui-menu-icon {
	left: auto;
	right: 0;
}
</style><style>/*!
 * jQuery UI Progressbar 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/progressbar/#theming
 */
.ui-progressbar {
	height: 2em;
	text-align: left;
	overflow: hidden;
}
.ui-progressbar .ui-progressbar-value {
	margin: -1px;
	height: 100%;
}
.ui-progressbar .ui-progressbar-overlay {
	background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
	height: 100%;
	filter: alpha(opacity=25); /* support: IE8 */
	opacity: 0.25;
}
.ui-progressbar-indeterminate .ui-progressbar-value {
	background-image: none;
}
</style><style>/*!
 * jQuery UI Resizable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
.ui-resizable {
	position: relative;
}
.ui-resizable-handle {
	position: absolute;
	font-size: 0.1px;
	display: block;
	-ms-touch-action: none;
	touch-action: none;
}
.ui-resizable-disabled .ui-resizable-handle,
.ui-resizable-autohide .ui-resizable-handle {
	display: none;
}
.ui-resizable-n {
	cursor: n-resize;
	height: 7px;
	width: 100%;
	top: -5px;
	left: 0;
}
.ui-resizable-s {
	cursor: s-resize;
	height: 7px;
	width: 100%;
	bottom: -5px;
	left: 0;
}
.ui-resizable-e {
	cursor: e-resize;
	width: 7px;
	right: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-w {
	cursor: w-resize;
	width: 7px;
	left: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-se {
	cursor: se-resize;
	width: 12px;
	height: 12px;
	right: 1px;
	bottom: 1px;
}
.ui-resizable-sw {
	cursor: sw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	bottom: -5px;
}
.ui-resizable-nw {
	cursor: nw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	top: -5px;
}
.ui-resizable-ne {
	cursor: ne-resize;
	width: 9px;
	height: 9px;
	right: -5px;
	top: -5px;
}
</style><style>/*!
 * jQuery UI Selectable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
.ui-selectable {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-selectable-helper {
	position: absolute;
	z-index: 100;
	border: 1px dotted black;
}
</style><style>/*!
 * jQuery UI Selectmenu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/selectmenu/#theming
 */
.ui-selectmenu-menu {
	padding: 0;
	margin: 0;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
}
.ui-selectmenu-menu .ui-menu {
	overflow: auto;
	overflow-x: hidden;
	padding-bottom: 1px;
}
.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
	font-size: 1em;
	font-weight: bold;
	line-height: 1.5;
	padding: 2px 0.4em;
	margin: 0.5em 0 0 0;
	height: auto;
	border: 0;
}
.ui-selectmenu-open {
	display: block;
}
.ui-selectmenu-text {
	display: block;
	margin-right: 20px;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ui-selectmenu-button.ui-button {
	text-align: left;
	white-space: nowrap;
	width: 14em;
}
.ui-selectmenu-icon.ui-icon {
	float: right;
	margin-top: 0;
}
</style><style>/*!
 * jQuery UI Sortable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
.ui-sortable-handle {
	-ms-touch-action: none;
	touch-action: none;
}
</style><style>/*!
 * jQuery UI Slider 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/slider/#theming
 */
.ui-slider {
	position: relative;
	text-align: left;
}
.ui-slider .ui-slider-handle {
	position: absolute;
	z-index: 2;
	width: 1.2em;
	height: 1.2em;
	cursor: default;
	-ms-touch-action: none;
	touch-action: none;
}
.ui-slider .ui-slider-range {
	position: absolute;
	z-index: 1;
	font-size: .7em;
	display: block;
	border: 0;
	background-position: 0 0;
}

/* support: IE8 - See #6727 */
.ui-slider.ui-state-disabled .ui-slider-handle,
.ui-slider.ui-state-disabled .ui-slider-range {
	filter: inherit;
}

.ui-slider-horizontal {
	height: .8em;
}
.ui-slider-horizontal .ui-slider-handle {
	top: -.3em;
	margin-left: -.6em;
}
.ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}
.ui-slider-horizontal .ui-slider-range-min {
	left: 0;
}
.ui-slider-horizontal .ui-slider-range-max {
	right: 0;
}

.ui-slider-vertical {
	width: .8em;
	height: 100px;
}
.ui-slider-vertical .ui-slider-handle {
	left: -.3em;
	margin-left: 0;
	margin-bottom: -.6em;
}
.ui-slider-vertical .ui-slider-range {
	left: 0;
	width: 100%;
}
.ui-slider-vertical .ui-slider-range-min {
	bottom: 0;
}
.ui-slider-vertical .ui-slider-range-max {
	top: 0;
}
</style><style>/*!
 * jQuery UI Spinner 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/spinner/#theming
 */
.ui-spinner {
	position: relative;
	display: inline-block;
	overflow: hidden;
	padding: 0;
	vertical-align: middle;
}
.ui-spinner-input {
	border: none;
	background: none;
	color: inherit;
	padding: .222em 0;
	margin: .2em 0;
	vertical-align: middle;
	margin-left: .4em;
	margin-right: 2em;
}
.ui-spinner-button {
	width: 1.6em;
	height: 50%;
	font-size: .5em;
	padding: 0;
	margin: 0;
	text-align: center;
	position: absolute;
	cursor: default;
	display: block;
	overflow: hidden;
	right: 0;
}
/* more specificity required here to override default borders */
.ui-spinner a.ui-spinner-button {
	border-top-style: none;
	border-bottom-style: none;
	border-right-style: none;
}
.ui-spinner-up {
	top: 0;
}
.ui-spinner-down {
	bottom: 0;
}
</style><style>/*!
 * jQuery UI Tabs 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/tabs/#theming
 */
.ui-tabs {
	position: relative;/* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
	padding: .2em;
}
.ui-tabs .ui-tabs-nav {
	margin: 0;
	padding: .2em .2em 0;
}
.ui-tabs .ui-tabs-nav li {
	list-style: none;
	float: left;
	position: relative;
	top: 0;
	margin: 1px .2em 0 0;
	border-bottom-width: 0;
	padding: 0;
	white-space: nowrap;
}
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
	float: left;
	padding: .5em 1em;
	text-decoration: none;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
	margin-bottom: -1px;
	padding-bottom: 1px;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
	cursor: text;
}
.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
	cursor: pointer;
}
.ui-tabs .ui-tabs-panel {
	display: block;
	border-width: 0;
	padding: 1em 1.4em;
	background: none;
}
</style><style>/*!
 * jQuery UI Tooltip 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/tooltip/#theming
 */
.ui-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
}
body .ui-tooltip {
	border-width: 2px;
}
</style><style>/*!
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */
</style><style>/*!
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */
/*!
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */
/*!
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 *
 * To view and modify this theme, visit http://jqueryui.com/themeroller/
 */
/* Component containers
----------------------------------*/
.ui-widget {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em; }

.ui-widget .ui-widget {
  font-size: 1em; }

.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em; }

.ui-widget.ui-widget-content {
  border: 1px solid #c5c5c5; }

.ui-widget-content {
  border: 1px solid #dddddd;
  background: #ffffff;
  color: #333333; }

.ui-widget-content a {
  color: #333333; }

.ui-widget-header {
  border: 1px solid #dddddd;
  background: #e9e9e9;
  color: #333333;
  font-weight: bold; }

.ui-widget-header a {
  color: #333333; }

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-button,
html .ui-button.ui-state-disabled:hover,
html .ui-button.ui-state-disabled:active {
  border: 1px solid #c5c5c5;
  background: #f6f6f6;
  font-weight: normal;
  color: #454545; }

.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited,
a.ui-button,
a:link.ui-button,
a:visited.ui-button,
.ui-button {
  color: #454545;
  text-decoration: none; }

.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus,
.ui-button:hover,
.ui-button:focus {
  border: 1px solid #cccccc;
  background: #ededed;
  font-weight: normal;
  color: #2b2b2b; }

.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited,
a.ui-button:hover,
a.ui-button:focus {
  color: #2b2b2b;
  text-decoration: none; }

.ui-visual-focus {
  box-shadow: 0 0 3px 1px #5e9ed6; }

.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active,
.ui-button:active,
.ui-button.ui-state-active:hover {
  border: 1px solid #003eff;
  background: #007fff;
  font-weight: normal;
  color: #ffffff; }

.ui-icon-background,
.ui-state-active .ui-icon-background {
  border: #003eff;
  background-color: #ffffff; }

.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
  color: #ffffff;
  text-decoration: none; }

/* Interaction Cues
----------------------------------*/
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
  border: 1px solid #dad55e;
  background: #fffa90;
  color: #777620; }

.ui-state-checked {
  border: 1px solid #dad55e;
  background: #fffa90; }

.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
  color: #777620; }

.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
  border: 1px solid #f1a899;
  background: #fddfdf;
  color: #5f3f3f; }

.ui-state-error a,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error a {
  color: #5f3f3f; }

.ui-state-error-text,
.ui-widget-content .ui-state-error-text,
.ui-widget-header .ui-state-error-text {
  color: #5f3f3f; }

.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
  font-weight: bold; }

.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
  opacity: .7;
  filter: Alpha(Opacity=70);
  /* support: IE8 */
  font-weight: normal; }

.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
  opacity: .35;
  filter: Alpha(Opacity=35);
  /* support: IE8 */
  background-image: none; }

.ui-state-disabled .ui-icon {
  filter: Alpha(Opacity=35);
  /* support: IE8 - See #6059 */ }

/* Icons
----------------------------------*/
/* states and images */
.ui-icon {
  width: 16px;
  height: 16px; }

.ui-icon,
.ui-widget-content .ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/a4c733ec4baef9ad3896d4e34a8a5448.png); }

.ui-widget-header .ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/a4c733ec4baef9ad3896d4e34a8a5448.png); }

.ui-state-hover .ui-icon,
.ui-state-focus .ui-icon,
.ui-button:hover .ui-icon,
.ui-button:focus .ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/971364734f3b603e5d363a2634898b42.png); }

.ui-state-active .ui-icon,
.ui-button:active .ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/bf27228a7d3957983584fa7698121ea1.png); }

.ui-state-highlight .ui-icon,
.ui-button .ui-state-highlight.ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/208a290102a4ada58a04de354a1354d7.png); }

.ui-state-error .ui-icon,
.ui-state-error-text .ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/0de3b51742ed3ac61435875bccd8973b.png); }

.ui-button .ui-icon {
  background-image: url(https://re-storage-sitebuilder.azureedge.net/runtime-sitebuilder-12542/73a1fd052c9d84c0ee0bea3ee85892ed.png); }

/* positioning */
.ui-icon-blank {
  background-position: 16px 16px; }

.ui-icon-caret-1-n {
  background-position: 0 0; }

.ui-icon-caret-1-ne {
  background-position: -16px 0; }

.ui-icon-caret-1-e {
  background-position: -32px 0; }

.ui-icon-caret-1-se {
  background-position: -48px 0; }

.ui-icon-caret-1-s {
  background-position: -65px 0; }

.ui-icon-caret-1-sw {
  background-position: -80px 0; }

.ui-icon-caret-1-w {
  background-position: -96px 0; }

.ui-icon-caret-1-nw {
  background-position: -112px 0; }

.ui-icon-caret-2-n-s {
  background-position: -128px 0; }

.ui-icon-caret-2-e-w {
  background-position: -144px 0; }

.ui-icon-triangle-1-n {
  background-position: 0 -16px; }

.ui-icon-triangle-1-ne {
  background-position: -16px -16px; }

.ui-icon-triangle-1-e {
  background-position: -32px -16px; }

.ui-icon-triangle-1-se {
  background-position: -48px -16px; }

.ui-icon-triangle-1-s {
  background-position: -65px -16px; }

.ui-icon-triangle-1-sw {
  background-position: -80px -16px; }

.ui-icon-triangle-1-w {
  background-position: -96px -16px; }

.ui-icon-triangle-1-nw {
  background-position: -112px -16px; }

.ui-icon-triangle-2-n-s {
  background-position: -128px -16px; }

.ui-icon-triangle-2-e-w {
  background-position: -144px -16px; }

.ui-icon-arrow-1-n {
  background-position: 0 -32px; }

.ui-icon-arrow-1-ne {
  background-position: -16px -32px; }

.ui-icon-arrow-1-e {
  background-position: -32px -32px; }

.ui-icon-arrow-1-se {
  background-position: -48px -32px; }

.ui-icon-arrow-1-s {
  background-position: -65px -32px; }

.ui-icon-arrow-1-sw {
  background-position: -80px -32px; }

.ui-icon-arrow-1-w {
  background-position: -96px -32px; }

.ui-icon-arrow-1-nw {
  background-position: -112px -32px; }

.ui-icon-arrow-2-n-s {
  background-position: -128px -32px; }

.ui-icon-arrow-2-ne-sw {
  background-position: -144px -32px; }

.ui-icon-arrow-2-e-w {
  background-position: -160px -32px; }

.ui-icon-arrow-2-se-nw {
  background-position: -176px -32px; }

.ui-icon-arrowstop-1-n {
  background-position: -192px -32px; }

.ui-icon-arrowstop-1-e {
  background-position: -208px -32px; }

.ui-icon-arrowstop-1-s {
  background-position: -224px -32px; }

.ui-icon-arrowstop-1-w {
  background-position: -240px -32px; }

.ui-icon-arrowthick-1-n {
  background-position: 1px -48px; }

.ui-icon-arrowthick-1-ne {
  background-position: -16px -48px; }

.ui-icon-arrowthick-1-e {
  background-position: -32px -48px; }

.ui-icon-arrowthick-1-se {
  background-position: -48px -48px; }

.ui-icon-arrowthick-1-s {
  background-position: -64px -48px; }

.ui-icon-arrowthick-1-sw {
  background-position: -80px -48px; }

.ui-icon-arrowthick-1-w {
  background-position: -96px -48px; }

.ui-icon-arrowthick-1-nw {
  background-position: -112px -48px; }

.ui-icon-arrowthick-2-n-s {
  background-position: -128px -48px; }

.ui-icon-arrowthick-2-ne-sw {
  background-position: -144px -48px; }

.ui-icon-arrowthick-2-e-w {
  background-position: -160px -48px; }

.ui-icon-arrowthick-2-se-nw {
  background-position: -176px -48px; }

.ui-icon-arrowthickstop-1-n {
  background-position: -192px -48px; }

.ui-icon-arrowthickstop-1-e {
  background-position: -208px -48px; }

.ui-icon-arrowthickstop-1-s {
  background-position: -224px -48px; }

.ui-icon-arrowthickstop-1-w {
  background-position: -240px -48px; }

.ui-icon-arrowreturnthick-1-w {
  background-position: 0 -64px; }

.ui-icon-arrowreturnthick-1-n {
  background-position: -16px -64px; }

.ui-icon-arrowreturnthick-1-e {
  background-position: -32px -64px; }

.ui-icon-arrowreturnthick-1-s {
  background-position: -48px -64px; }

.ui-icon-arrowreturn-1-w {
  background-position: -64px -64px; }

.ui-icon-arrowreturn-1-n {
  background-position: -80px -64px; }

.ui-icon-arrowreturn-1-e {
  background-position: -96px -64px; }

.ui-icon-arrowreturn-1-s {
  background-position: -112px -64px; }

.ui-icon-arrowrefresh-1-w {
  background-position: -128px -64px; }

.ui-icon-arrowrefresh-1-n {
  background-position: -144px -64px; }

.ui-icon-arrowrefresh-1-e {
  background-position: -160px -64px; }

.ui-icon-arrowrefresh-1-s {
  background-position: -176px -64px; }

.ui-icon-arrow-4 {
  background-position: 0 -80px; }

.ui-icon-arrow-4-diag {
  background-position: -16px -80px; }

.ui-icon-extlink {
  background-position: -32px -80px; }

.ui-icon-newwin {
  background-position: -48px -80px; }

.ui-icon-refresh {
  background-position: -64px -80px; }

.ui-icon-shuffle {
  background-position: -80px -80px; }

.ui-icon-transfer-e-w {
  background-position: -96px -80px; }

.ui-icon-transferthick-e-w {
  background-position: -112px -80px; }

.ui-icon-folder-collapsed {
  background-position: 0 -96px; }

.ui-icon-folder-open {
  background-position: -16px -96px; }

.ui-icon-document {
  background-position: -32px -96px; }

.ui-icon-document-b {
  background-position: -48px -96px; }

.ui-icon-note {
  background-position: -64px -96px; }

.ui-icon-mail-closed {
  background-position: -80px -96px; }

.ui-icon-mail-open {
  background-position: -96px -96px; }

.ui-icon-suitcase {
  background-position: -112px -96px; }

.ui-icon-comment {
  background-position: -128px -96px; }

.ui-icon-person {
  background-position: -144px -96px; }

.ui-icon-print {
  background-position: -160px -96px; }

.ui-icon-trash {
  background-position: -176px -96px; }

.ui-icon-locked {
  background-position: -192px -96px; }

.ui-icon-unlocked {
  background-position: -208px -96px; }

.ui-icon-bookmark {
  background-position: -224px -96px; }

.ui-icon-tag {
  background-position: -240px -96px; }

.ui-icon-home {
  background-position: 0 -112px; }

.ui-icon-flag {
  background-position: -16px -112px; }

.ui-icon-calendar {
  background-position: -32px -112px; }

.ui-icon-cart {
  background-position: -48px -112px; }

.ui-icon-pencil {
  background-position: -64px -112px; }

.ui-icon-clock {
  background-position: -80px -112px; }

.ui-icon-disk {
  background-position: -96px -112px; }

.ui-icon-calculator {
  background-position: -112px -112px; }

.ui-icon-zoomin {
  background-position: -128px -112px; }

.ui-icon-zoomout {
  background-position: -144px -112px; }

.ui-icon-search {
  background-position: -160px -112px; }

.ui-icon-wrench {
  background-position: -176px -112px; }

.ui-icon-gear {
  background-position: -192px -112px; }

.ui-icon-heart {
  background-position: -208px -112px; }

.ui-icon-star {
  background-position: -224px -112px; }

.ui-icon-link {
  background-position: -240px -112px; }

.ui-icon-cancel {
  background-position: 0 -128px; }

.ui-icon-plus {
  background-position: -16px -128px; }

.ui-icon-plusthick {
  background-position: -32px -128px; }

.ui-icon-minus {
  background-position: -48px -128px; }

.ui-icon-minusthick {
  background-position: -64px -128px; }

.ui-icon-close {
  background-position: -80px -128px; }

.ui-icon-closethick {
  background-position: -96px -128px; }

.ui-icon-key {
  background-position: -112px -128px; }

.ui-icon-lightbulb {
  background-position: -128px -128px; }

.ui-icon-scissors {
  background-position: -144px -128px; }

.ui-icon-clipboard {
  background-position: -160px -128px; }

.ui-icon-copy {
  background-position: -176px -128px; }

.ui-icon-contact {
  background-position: -192px -128px; }

.ui-icon-image {
  background-position: -208px -128px; }

.ui-icon-video {
  background-position: -224px -128px; }

.ui-icon-script {
  background-position: -240px -128px; }

.ui-icon-alert {
  background-position: 0 -144px; }

.ui-icon-info {
  background-position: -16px -144px; }

.ui-icon-notice {
  background-position: -32px -144px; }

.ui-icon-help {
  background-position: -48px -144px; }

.ui-icon-check {
  background-position: -64px -144px; }

.ui-icon-bullet {
  background-position: -80px -144px; }

.ui-icon-radio-on {
  background-position: -96px -144px; }

.ui-icon-radio-off {
  background-position: -112px -144px; }

.ui-icon-pin-w {
  background-position: -128px -144px; }

.ui-icon-pin-s {
  background-position: -144px -144px; }

.ui-icon-play {
  background-position: 0 -160px; }

.ui-icon-pause {
  background-position: -16px -160px; }

.ui-icon-seek-next {
  background-position: -32px -160px; }

.ui-icon-seek-prev {
  background-position: -48px -160px; }

.ui-icon-seek-end {
  background-position: -64px -160px; }

.ui-icon-seek-start {
  background-position: -80px -160px; }

/* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
.ui-icon-seek-first {
  background-position: -80px -160px; }

.ui-icon-stop {
  background-position: -96px -160px; }

.ui-icon-eject {
  background-position: -112px -160px; }

.ui-icon-volume-off {
  background-position: -128px -160px; }

.ui-icon-volume-on {
  background-position: -144px -160px; }

.ui-icon-power {
  background-position: 0 -176px; }

.ui-icon-signal-diag {
  background-position: -16px -176px; }

.ui-icon-signal {
  background-position: -32px -176px; }

.ui-icon-battery-0 {
  background-position: -48px -176px; }

.ui-icon-battery-1 {
  background-position: -64px -176px; }

.ui-icon-battery-2 {
  background-position: -80px -176px; }

.ui-icon-battery-3 {
  background-position: -96px -176px; }

.ui-icon-circle-plus {
  background-position: 0 -192px; }

.ui-icon-circle-minus {
  background-position: -16px -192px; }

.ui-icon-circle-close {
  background-position: -32px -192px; }

.ui-icon-circle-triangle-e {
  background-position: -48px -192px; }

.ui-icon-circle-triangle-s {
  background-position: -64px -192px; }

.ui-icon-circle-triangle-w {
  background-position: -80px -192px; }

.ui-icon-circle-triangle-n {
  background-position: -96px -192px; }

.ui-icon-circle-arrow-e {
  background-position: -112px -192px; }

.ui-icon-circle-arrow-s {
  background-position: -128px -192px; }

.ui-icon-circle-arrow-w {
  background-position: -144px -192px; }

.ui-icon-circle-arrow-n {
  background-position: -160px -192px; }

.ui-icon-circle-zoomin {
  background-position: -176px -192px; }

.ui-icon-circle-zoomout {
  background-position: -192px -192px; }

.ui-icon-circle-check {
  background-position: -208px -192px; }

.ui-icon-circlesmall-plus {
  background-position: 0 -208px; }

.ui-icon-circlesmall-minus {
  background-position: -16px -208px; }

.ui-icon-circlesmall-close {
  background-position: -32px -208px; }

.ui-icon-squaresmall-plus {
  background-position: -48px -208px; }

.ui-icon-squaresmall-minus {
  background-position: -64px -208px; }

.ui-icon-squaresmall-close {
  background-position: -80px -208px; }

.ui-icon-grip-dotted-vertical {
  background-position: 0 -224px; }

.ui-icon-grip-dotted-horizontal {
  background-position: -16px -224px; }

.ui-icon-grip-solid-vertical {
  background-position: -32px -224px; }

.ui-icon-grip-solid-horizontal {
  background-position: -48px -224px; }

.ui-icon-gripsmall-diagonal-se {
  background-position: -64px -224px; }

.ui-icon-grip-diagonal-se {
  background-position: -80px -224px; }

/* Misc visuals
----------------------------------*/
/* Corner radius */
.ui-corner-all,
.ui-corner-top,
.ui-corner-left,
.ui-corner-tl {
  border-top-left-radius: 3px; }

.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr {
  border-top-right-radius: 3px; }

.ui-corner-all,
.ui-corner-bottom,
.ui-corner-left,
.ui-corner-bl {
  border-bottom-left-radius: 3px; }

.ui-corner-all,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
  border-bottom-right-radius: 3px; }

/* Overlays */
.ui-widget-overlay {
  background: #aaaaaa;
  opacity: 0.3;
  filter: Alpha(Opacity=30);
  /* support: IE8 */ }

.ui-widget-shadow {
  box-shadow: 0 0 5px #666666; }
</style><style>.feature-notification-wrapper {
  width: 100%;
  height: 56px;
  left: 0;
  pointer-events: none;
  overflow: hidden;
  -webkit-transition: top 300ms ease;
  transition: top 300ms ease; }
  .feature-notification-wrapper .feature-notification {
    width: 100%;
    height: 100%;
    padding: 1em;
    text-align: center;
    font-size: 16px;
    color: #FFF;
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    opacity: 0;
    -webkit-transform: translateY(-56px);
            transform: translateY(-56px);
    -webkit-transition: opacity 300ms ease, visibility 0ms linear 300ms, -webkit-transform 300ms ease;
    transition: opacity 300ms ease, visibility 0ms linear 300ms, -webkit-transform 300ms ease;
    transition: opacity 300ms ease, transform 300ms ease, visibility 0ms linear 300ms;
    transition: opacity 300ms ease, transform 300ms ease, visibility 0ms linear 300ms, -webkit-transform 300ms ease; }
    .feature-notification-wrapper .feature-notification .feature-notification-close-button {
      top: 22px;
      right: 18px;
      width: 13px;
      height: 13px;
      cursor: pointer;
      position: absolute;
      pointer-events: all;
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      opacity: 0.5;
      -webkit-transition: opacity 300ms ease;
      transition: opacity 300ms ease; }
      .feature-notification-wrapper .feature-notification .feature-notification-close-button:hover {
        opacity: 0.75;
        -webkit-transition: opacity 300ms ease;
        transition: opacity 300ms ease; }
  .feature-notification-wrapper.feature-notification-visible .feature-notification {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
    -webkit-transition: opacity 300ms ease, visibility 0ms linear, -webkit-transform 300ms ease;
    transition: opacity 300ms ease, visibility 0ms linear, -webkit-transform 300ms ease;
    transition: opacity 300ms ease, transform 300ms ease, visibility 0ms linear;
    transition: opacity 300ms ease, transform 300ms ease, visibility 0ms linear, -webkit-transform 300ms ease; }
</style><style>.feature-modal-wrapper {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1501;
  background-color: rgba(19, 22, 27, 0.7);
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  -webkit-transition: opacity 200ms ease, visibility 0ms linear 200ms;
  transition: opacity 200ms ease, visibility 0ms linear 200ms; }
  .feature-modal-wrapper .kv-background {
    display: none; }
  .feature-modal-wrapper .feature-modal {
    min-height: 300px;
    border-radius: 2px;
    position: relative;
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    -webkit-transition: -webkit-transform 200ms ease;
    transition: -webkit-transform 200ms ease;
    transition: transform 200ms ease;
    transition: transform 200ms ease, -webkit-transform 200ms ease; }
    .feature-modal-wrapper .feature-modal .feature-modal-close-button {
      position: absolute;
      right: 10px;
      top: 10px;
      width: 24px;
      height: 24px;
      cursor: pointer;
      color: white;
      font-size: 24px;
      opacity: 0.8;
      -webkit-transition: opacity 200ms ease;
      transition: opacity 200ms ease;
      z-index: 1; }
      .feature-modal-wrapper .feature-modal .feature-modal-close-button:hover {
        opacity: 1;
        -webkit-transition: opacity 200ms ease;
        transition: opacity 200ms ease; }
    .feature-modal-wrapper .feature-modal .feature-modal-content {
      width: 100%;
      min-height: calc(100% - 47px);
      max-height: calc(100% - 47px); }
    .feature-modal-wrapper .feature-modal .feature-modal-actions {
      padding: 5px;
      width: 100%;
      display: -webkit-box;
      display: flex;
      -webkit-box-pack: end;
              justify-content: flex-end;
      border-top: 1px solid #E0E0E0; }
      .feature-modal-wrapper .feature-modal .feature-modal-actions button {
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 500;
        padding: 8px 24px;
        border: 0;
        outline: 0;
        cursor: pointer;
        color: white;
        border-radius: 2px;
        margin-left: 5px;
        -webkit-transition: background-color 200ms ease;
        transition: background-color 200ms ease; }
        .feature-modal-wrapper .feature-modal .feature-modal-actions button:hover {
          -webkit-transition: background-color 200ms ease;
          transition: background-color 200ms ease; }
        .feature-modal-wrapper .feature-modal .feature-modal-actions button.feature-modal-ok-button {
          background-color: #26A59A; }
          .feature-modal-wrapper .feature-modal .feature-modal-actions button.feature-modal-ok-button:hover {
            background-color: #97C8C2; }
        .feature-modal-wrapper .feature-modal .feature-modal-actions button.feature-modal-cancel-button {
          color: rgba(0, 0, 0, 0.54);
          background-color: rgba(211, 218, 230, 0.24); }
          .feature-modal-wrapper .feature-modal .feature-modal-actions button.feature-modal-cancel-button:hover {
            background-color: rgba(153, 153, 154, 0.2); }
  .feature-modal-wrapper.feature-modal-active {
    opacity: 1;
    visibility: visible;
    pointer-events: all;
    -webkit-transition: opacity 200ms ease, visiblity 0ms linear;
    transition: opacity 200ms ease, visiblity 0ms linear; }
    .feature-modal-wrapper.feature-modal-active .feature-modal {
      -webkit-transform: scale(1);
              transform: scale(1);
      -webkit-transition: -webkit-transform 200ms ease;
      transition: -webkit-transform 200ms ease;
      transition: transform 200ms ease;
      transition: transform 200ms ease, -webkit-transform 200ms ease; }
</style><style>* {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased; }

html, body {
  margin: 0;
  padding: 0; }

body {
  margin: 0 auto; }

input::-ms-clear {
  display: none; }

.kv-site {
  overflow: hidden;
  padding-left: env(safe-area-inset-left);
  padding-right: env(safe-area-inset-right);
  padding-top: env(safe-area-inset-top);
  padding-bottom: env(safe-area-inset-bottom); }

@supports (padding: 0) {
  .kv-site {
    padding-left: max(0px, env(safe-area-inset-left));
    padding-right: max(0px, env(safe-area-inset-right)); } }
</style><style>.align-middle {
  vertical-align: middle; }

.circular {
  -webkit-animation: rotate 2s linear infinite;
  animation: rotate 2s linear infinite;
  height: 100%;
  -webkit-transform-origin: center center;
  transform-origin: center center;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto; }

.path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: dash 1.5s ease-in-out infinite, smallloadercolors 6s ease-in-out infinite;
  animation: dash 1.5s ease-in-out infinite, smallloadercolors 6s ease-in-out infinite;
  stroke-linecap: round; }

@-webkit-keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@-webkit-keyframes dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -124px; } }

@keyframes dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -124px; } }
</style><style>/*!
 * Bootstrap v4.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007BFF;
  --indigo: #6610F2;
  --purple: #6F42C1;
  --pink: #E83E8C;
  --red: #DC3545;
  --orange: #FD7E14;
  --yellow: #FFC107;
  --green: #28A745;
  --teal: #20C997;
  --cyan: #17A2B8;
  --white: #FFF;
  --gray: #6C757D;
  --gray-dark: #343A40;
  --primary: #007BFF;
  --secondary: #6C757D;
  --success: #28A745;
  --info: #17A2B8;
  --warning: #FFC107;
  --danger: #DC3545;
  --light: #F8F9FA;
  --dark: #343A40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --breakpoint-xxl: 1440px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

@-ms-viewport {
  width: device-width; }

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #FFF; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

dfn {
  font-style: italic; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #007BFF;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }
  a:hover {
    color: #0056b3;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg {
  overflow: hidden;
  vertical-align: middle; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6C757D;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: inherit; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #FCF8E3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6C757D; }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #FFF;
  border: 1px solid #DEE2E6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6C757D; }

code {
  font-size: 87.5%;
  color: #E83E8C;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #FFF;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #DEE2E6; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #DEE2E6; }
  .table tbody + tbody {
    border-top: 2px solid #DEE2E6; }
  .table .table {
    background-color: #FFF; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #DEE2E6; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #DEE2E6; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff; }

.table-hover .table-primary:hover {
  background-color: #9fcdff; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #9fcdff; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db; }

.table-hover .table-secondary:hover {
  background-color: #c8cbcf; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb; }

.table-hover .table-success:hover {
  background-color: #b1dfbb; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #b1dfbb; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb; }

.table-hover .table-info:hover {
  background-color: #abdde5; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #abdde5; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba; }

.table-hover .table-warning:hover {
  background-color: #ffe8a1; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffe8a1; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb; }

.table-hover .table-danger:hover {
  background-color: #f1b0b7; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #f1b0b7; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca; }

.table-hover .table-dark:hover {
  background-color: #b9bbbe; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9bbbe; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th {
  color: #FFF;
  background-color: #212529;
  border-color: #32383e; }

.table .thead-light th {
  color: #495057;
  background-color: #E9ECEF;
  border-color: #DEE2E6; }

.table-dark {
  color: #FFF;
  background-color: #212529; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #32383e; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

@media (max-width: 1439.98px) {
  .table-responsive-xxl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xxl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  .table-responsive > .table-bordered {
    border: 0; }

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      transition: none; } }
  .btn:hover, .btn:focus {
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #FFF;
  background-color: #007BFF;
  border-color: #007BFF; }
  .btn-primary:hover {
    color: #FFF;
    background-color: #0069d9;
    border-color: #0062cc; }
  .btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #FFF;
    background-color: #007BFF;
    border-color: #007BFF; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #FFF;
    background-color: #0062cc;
    border-color: #005cbf; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }

.btn-secondary {
  color: #FFF;
  background-color: #6C757D;
  border-color: #6C757D; }
  .btn-secondary:hover {
    color: #FFF;
    background-color: #5a6268;
    border-color: #545b62; }
  .btn-secondary:focus, .btn-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #FFF;
    background-color: #6C757D;
    border-color: #6C757D; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #FFF;
    background-color: #545b62;
    border-color: #4e555b; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-success {
  color: #FFF;
  background-color: #28A745;
  border-color: #28A745; }
  .btn-success:hover {
    color: #FFF;
    background-color: #218838;
    border-color: #1e7e34; }
  .btn-success:focus, .btn-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #FFF;
    background-color: #28A745;
    border-color: #28A745; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #FFF;
    background-color: #1e7e34;
    border-color: #1c7430; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

.btn-info {
  color: #FFF;
  background-color: #17A2B8;
  border-color: #17A2B8; }
  .btn-info:hover {
    color: #FFF;
    background-color: #138496;
    border-color: #117a8b; }
  .btn-info:focus, .btn-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #FFF;
    background-color: #17A2B8;
    border-color: #17A2B8; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #FFF;
    background-color: #117a8b;
    border-color: #10707f; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #FFC107;
  border-color: #FFC107; }
  .btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00; }
  .btn-warning:focus, .btn-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #FFC107;
    border-color: #FFC107; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

.btn-danger {
  color: #FFF;
  background-color: #DC3545;
  border-color: #DC3545; }
  .btn-danger:hover {
    color: #FFF;
    background-color: #c82333;
    border-color: #bd2130; }
  .btn-danger:focus, .btn-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #FFF;
    background-color: #DC3545;
    border-color: #DC3545; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #FFF;
    background-color: #bd2130;
    border-color: #b21f2d; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

.btn-light {
  color: #212529;
  background-color: #F8F9FA;
  border-color: #F8F9FA; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #F8F9FA;
    border-color: #F8F9FA; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-dark {
  color: #FFF;
  background-color: #343A40;
  border-color: #343A40; }
  .btn-dark:hover {
    color: #FFF;
    background-color: #23272b;
    border-color: #1d2124; }
  .btn-dark:focus, .btn-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #FFF;
    background-color: #343A40;
    border-color: #343A40; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #FFF;
    background-color: #1d2124;
    border-color: #171a1d; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-outline-primary {
  color: #007BFF;
  background-color: transparent;
  background-image: none;
  border-color: #007BFF; }
  .btn-outline-primary:hover {
    color: #FFF;
    background-color: #007BFF;
    border-color: #007BFF; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #007BFF;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #FFF;
    background-color: #007BFF;
    border-color: #007BFF; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }

.btn-outline-secondary {
  color: #6C757D;
  background-color: transparent;
  background-image: none;
  border-color: #6C757D; }
  .btn-outline-secondary:hover {
    color: #FFF;
    background-color: #6C757D;
    border-color: #6C757D; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6C757D;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #FFF;
    background-color: #6C757D;
    border-color: #6C757D; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-outline-success {
  color: #28A745;
  background-color: transparent;
  background-image: none;
  border-color: #28A745; }
  .btn-outline-success:hover {
    color: #FFF;
    background-color: #28A745;
    border-color: #28A745; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #28A745;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #FFF;
    background-color: #28A745;
    border-color: #28A745; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

.btn-outline-info {
  color: #17A2B8;
  background-color: transparent;
  background-image: none;
  border-color: #17A2B8; }
  .btn-outline-info:hover {
    color: #FFF;
    background-color: #17A2B8;
    border-color: #17A2B8; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #17A2B8;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #FFF;
    background-color: #17A2B8;
    border-color: #17A2B8; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

.btn-outline-warning {
  color: #FFC107;
  background-color: transparent;
  background-image: none;
  border-color: #FFC107; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #FFC107;
    border-color: #FFC107; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #FFC107;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #FFC107;
    border-color: #FFC107; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

.btn-outline-danger {
  color: #DC3545;
  background-color: transparent;
  background-image: none;
  border-color: #DC3545; }
  .btn-outline-danger:hover {
    color: #FFF;
    background-color: #DC3545;
    border-color: #DC3545; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #DC3545;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #FFF;
    background-color: #DC3545;
    border-color: #DC3545; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

.btn-outline-light {
  color: #F8F9FA;
  background-color: transparent;
  background-image: none;
  border-color: #F8F9FA; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #F8F9FA;
    border-color: #F8F9FA; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #F8F9FA;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #F8F9FA;
    border-color: #F8F9FA; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #343A40;
  background-color: transparent;
  background-image: none;
  border-color: #343A40; }
  .btn-outline-dark:hover {
    color: #FFF;
    background-color: #343A40;
    border-color: #343A40; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343A40;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #FFF;
    background-color: #343A40;
    border-color: #343A40; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-link {
  font-weight: 400;
  color: #007BFF;
  background-color: transparent; }
  .btn-link:hover {
    color: #0056b3;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    border-color: transparent;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6C757D;
    pointer-events: none; }

.btn-lg {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media screen and (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      transition: none; } }

.card {
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #FFF;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }

.card-body {
  -webkit-box-flex: 1;
          flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
              flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: -webkit-box;
        display: flex;
        -webkit-box-flex: 1;
                flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
                flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
              flex-flow: row wrap; }
      .card-group > .card {
        -webkit-box-flex: 1;
                flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:first-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:first-child .card-img-top,
          .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:first-child .card-img-bottom,
          .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:last-child .card-img-top,
          .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:last-child .card-img-bottom,
          .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
          border-radius: 0.25rem; }
          .card-group > .card:only-child .card-img-top,
          .card-group > .card:only-child .card-header {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem; }
          .card-group > .card:only-child .card-img-bottom,
          .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
          border-radius: 0; }
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
       -moz-column-count: 3;
            column-count: 3;
    -webkit-column-gap: 1.25rem;
       -moz-column-gap: 1.25rem;
            column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0; }

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0; }

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.pagination {
  display: -webkit-box;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007BFF;
  background-color: #FFF;
  border: 1px solid #DEE2E6; }
  .page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #E9ECEF;
    border-color: #DEE2E6; }
  .page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .page-link:not(:disabled):not(.disabled) {
    cursor: pointer; }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link {
  z-index: 1;
  color: #FFF;
  background-color: #007BFF;
  border-color: #007BFF; }

.page-item.disabled .page-link {
  color: #6C757D;
  pointer-events: none;
  cursor: auto;
  background-color: #FFF;
  border-color: #DEE2E6; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #FFF;
  background-color: #007BFF; }
  .badge-primary[href]:hover, .badge-primary[href]:focus {
    color: #FFF;
    text-decoration: none;
    background-color: #0062cc; }

.badge-secondary {
  color: #FFF;
  background-color: #6C757D; }
  .badge-secondary[href]:hover, .badge-secondary[href]:focus {
    color: #FFF;
    text-decoration: none;
    background-color: #545b62; }

.badge-success {
  color: #FFF;
  background-color: #28A745; }
  .badge-success[href]:hover, .badge-success[href]:focus {
    color: #FFF;
    text-decoration: none;
    background-color: #1e7e34; }

.badge-info {
  color: #FFF;
  background-color: #17A2B8; }
  .badge-info[href]:hover, .badge-info[href]:focus {
    color: #FFF;
    text-decoration: none;
    background-color: #117a8b; }

.badge-warning {
  color: #212529;
  background-color: #FFC107; }
  .badge-warning[href]:hover, .badge-warning[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #d39e00; }

.badge-danger {
  color: #FFF;
  background-color: #DC3545; }
  .badge-danger[href]:hover, .badge-danger[href]:focus {
    color: #FFF;
    text-decoration: none;
    background-color: #bd2130; }

.badge-light {
  color: #212529;
  background-color: #F8F9FA; }
  .badge-light[href]:hover, .badge-light[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #dae0e5; }

.badge-dark {
  color: #FFF;
  background-color: #343A40; }
  .badge-dark[href]:hover, .badge-dark[href]:focus {
    color: #FFF;
    text-decoration: none;
    background-color: #1d2124; }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #E9ECEF;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff; }
  .alert-primary hr {
    border-top-color: #9fcdff; }
  .alert-primary .alert-link {
    color: #002752; }

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db; }
  .alert-secondary hr {
    border-top-color: #c8cbcf; }
  .alert-secondary .alert-link {
    color: #202326; }

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb; }
  .alert-success hr {
    border-top-color: #b1dfbb; }
  .alert-success .alert-link {
    color: #0b2e13; }

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb; }
  .alert-info hr {
    border-top-color: #abdde5; }
  .alert-info .alert-link {
    color: #062c33; }

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba; }
  .alert-warning hr {
    border-top-color: #ffe8a1; }
  .alert-warning .alert-link {
    color: #533f03; }

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb; }
  .alert-danger hr {
    border-top-color: #f1b0b7; }
  .alert-danger .alert-link {
    color: #491217; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca; }
  .alert-dark hr {
    border-top-color: #b9bbbe; }
  .alert-dark .alert-link {
    color: #040505; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: -webkit-box;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #E9ECEF;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: center;
          justify-content: center;
  color: #FFF;
  text-align: center;
  white-space: nowrap;
  background-color: #007BFF;
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
          animation: progress-bar-stripes 1s linear infinite; }

.media {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: start;
          align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
          flex: 1; }

.list-group {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    color: #495057;
    text-decoration: none;
    background-color: #F8F9FA; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #E9ECEF; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #FFF;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item:hover, .list-group-item:focus {
    z-index: 1;
    text-decoration: none; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6C757D;
    background-color: #FFF; }
  .list-group-item.active {
    z-index: 2;
    color: #FFF;
    background-color: #007BFF;
    border-color: #007BFF; }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0; }

.list-group-item-primary {
  color: #004085;
  background-color: #b8daff; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #004085;
    background-color: #9fcdff; }
  .list-group-item-primary.list-group-item-action.active {
    color: #FFF;
    background-color: #004085;
    border-color: #004085; }

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #FFF;
    background-color: #383d41;
    border-color: #383d41; }

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #155724;
    background-color: #b1dfbb; }
  .list-group-item-success.list-group-item-action.active {
    color: #FFF;
    background-color: #155724;
    border-color: #155724; }

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #0c5460;
    background-color: #abdde5; }
  .list-group-item-info.list-group-item-action.active {
    color: #FFF;
    background-color: #0c5460;
    border-color: #0c5460; }

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #856404;
    background-color: #ffe8a1; }
  .list-group-item-warning.list-group-item-action.active {
    color: #FFF;
    background-color: #856404;
    border-color: #856404; }

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #721c24;
    background-color: #f1b0b7; }
  .list-group-item-danger.list-group-item-action.active {
    color: #FFF;
    background-color: #721c24;
    border-color: #721c24; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #FFF;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe; }
  .list-group-item-dark.list-group-item-action.active {
    color: #FFF;
    background-color: #1b1e21;
    border-color: #1b1e21; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #FFF;
  opacity: .5; }
  .close:not(:disabled):not(.disabled) {
    cursor: pointer; }
    .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
      color: #000;
      text-decoration: none;
      opacity: .75; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -25%);
            transform: translate(0, -25%); }
    @media screen and (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0); }

.modal-dialog-centered {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  min-height: calc(100% - (0.5rem * 2)); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - (0.5rem * 2));
    content: ""; }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #FFF;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: start;
          align-items: flex-start;
  -webkit-box-pack: justify;
          justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #E9ECEF;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
          flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: end;
          justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #E9ECEF; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2)); }
    .modal-dialog-centered::before {
      height: calc(100vh - (1.75rem * 2)); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #FFF;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-item {
  position: relative;
  display: none;
  -webkit-box-align: center;
          align-items: center;
  width: 100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-perspective: 1000px;
          perspective: 1000px; }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
  -webkit-transition: -webkit-transform 0.6s ease;
  transition: -webkit-transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      -webkit-transition: none;
      transition: none; } }

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0; }

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
          transform: translateX(0); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0); } }

.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
          transform: translateX(100%); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-next,
    .active.carousel-item-right {
      -webkit-transform: translate3d(100%, 0, 0);
              transform: translate3d(100%, 0, 0); } }

.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-prev,
    .active.carousel-item-left {
      -webkit-transform: translate3d(-100%, 0, 0);
              transform: translate3d(-100%, 0, 0); } }

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-duration: .6s;
          transition-duration: .6s;
  -webkit-transition-property: opacity;
  transition-property: opacity; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0; }

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  -webkit-transform: translateX(0);
          transform: translateX(0); }
  @supports (transform-style: preserve-3d) {
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0); } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  width: 15%;
  color: #FFF;
  text-align: center;
  opacity: 0.5; }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #FFF;
    text-decoration: none;
    outline: 0;
    opacity: .9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    position: relative;
    -webkit-box-flex: 0;
            flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
  .carousel-indicators .active {
    background-color: #FFF; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #FFF;
  text-align: center; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #007BFF !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important; }

.bg-secondary {
  background-color: #6C757D !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important; }

.bg-success {
  background-color: #28A745 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important; }

.bg-info {
  background-color: #17A2B8 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important; }

.bg-warning {
  background-color: #FFC107 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important; }

.bg-danger {
  background-color: #DC3545 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important; }

.bg-light {
  background-color: #F8F9FA !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #343A40 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important; }

.bg-white {
  background-color: #FFF !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #DEE2E6 !important; }

.border-top {
  border-top: 1px solid #DEE2E6 !important; }

.border-right {
  border-right: 1px solid #DEE2E6 !important; }

.border-bottom {
  border-bottom: 1px solid #DEE2E6 !important; }

.border-left {
  border-left: 1px solid #DEE2E6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #007BFF !important; }

.border-secondary {
  border-color: #6C757D !important; }

.border-success {
  border-color: #28A745 !important; }

.border-info {
  border-color: #17A2B8 !important; }

.border-warning {
  border-color: #FFC107 !important; }

.border-danger {
  border-color: #DC3545 !important; }

.border-light {
  border-color: #F8F9FA !important; }

.border-dark {
  border-color: #343A40 !important; }

.border-white {
  border-color: #FFF !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: inline-flex !important; } }

@media (min-width: 1440px) {
  .d-xxl-none {
    display: none !important; }
  .d-xxl-inline {
    display: inline !important; }
  .d-xxl-inline-block {
    display: inline-block !important; }
  .d-xxl-block {
    display: block !important; }
  .d-xxl-table {
    display: table !important; }
  .d-xxl-table-row {
    display: table-row !important; }
  .d-xxl-table-cell {
    display: table-cell !important; }
  .d-xxl-flex {
    display: -webkit-box !important;
    display: flex !important; }
  .d-xxl-inline-flex {
    display: -webkit-inline-box !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
          flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
          flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
          flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
          flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
          flex: 1 1 auto !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
          flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
          flex-grow: 1 !important; }

.flex-shrink-0 {
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  flex-shrink: 1 !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
          justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
          justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
          justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
          justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  -webkit-box-align: start !important;
          align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
          align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
          align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
          align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
          align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
            flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
            flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
            flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
            flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
            justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
            align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
            align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
            align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
            align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
            align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
            flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
            flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
            flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
            flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
            justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
            align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
            align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
            align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
            align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
            align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
            flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
            flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
            flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
            flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
            justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
            align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
            align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
            align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
            align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
            align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
            flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
            flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
            flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
            flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
            justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
            align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
            align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
            align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
            align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
            align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

@media (min-width: 1440px) {
  .flex-xxl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
            flex-direction: row !important; }
  .flex-xxl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
            flex-direction: column !important; }
  .flex-xxl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
  .flex-xxl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
  .flex-xxl-wrap {
    flex-wrap: wrap !important; }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-xxl-fill {
    -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important; }
  .flex-xxl-grow-0 {
    -webkit-box-flex: 0 !important;
            flex-grow: 0 !important; }
  .flex-xxl-grow-1 {
    -webkit-box-flex: 1 !important;
            flex-grow: 1 !important; }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-xxl-start {
    -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-xxl-end {
    -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-xxl-center {
    -webkit-box-pack: center !important;
            justify-content: center !important; }
  .justify-content-xxl-between {
    -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-xxl-around {
    justify-content: space-around !important; }
  .align-items-xxl-start {
    -webkit-box-align: start !important;
            align-items: flex-start !important; }
  .align-items-xxl-end {
    -webkit-box-align: end !important;
            align-items: flex-end !important; }
  .align-items-xxl-center {
    -webkit-box-align: center !important;
            align-items: center !important; }
  .align-items-xxl-baseline {
    -webkit-box-align: baseline !important;
            align-items: baseline !important; }
  .align-items-xxl-stretch {
    -webkit-box-align: stretch !important;
            align-items: stretch !important; }
  .align-content-xxl-start {
    align-content: flex-start !important; }
  .align-content-xxl-end {
    align-content: flex-end !important; }
  .align-content-xxl-center {
    align-content: center !important; }
  .align-content-xxl-between {
    align-content: space-between !important; }
  .align-content-xxl-around {
    align-content: space-around !important; }
  .align-content-xxl-stretch {
    align-content: stretch !important; }
  .align-self-xxl-auto {
    align-self: auto !important; }
  .align-self-xxl-start {
    align-self: flex-start !important; }
  .align-self-xxl-end {
    align-self: flex-end !important; }
  .align-self-xxl-center {
    align-self: center !important; }
  .align-self-xxl-baseline {
    align-self: baseline !important; }
  .align-self-xxl-stretch {
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

@media (min-width: 1440px) {
  .float-xxl-left {
    float: left !important; }
  .float-xxl-right {
    float: right !important; }
  .float-xxl-none {
    float: none !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

@media (min-width: 1440px) {
  .m-xxl-0 {
    margin: 0 !important; }
  .mt-xxl-0,
  .my-xxl-0 {
    margin-top: 0 !important; }
  .mr-xxl-0,
  .mx-xxl-0 {
    margin-right: 0 !important; }
  .mb-xxl-0,
  .my-xxl-0 {
    margin-bottom: 0 !important; }
  .ml-xxl-0,
  .mx-xxl-0 {
    margin-left: 0 !important; }
  .m-xxl-1 {
    margin: 0.25rem !important; }
  .mt-xxl-1,
  .my-xxl-1 {
    margin-top: 0.25rem !important; }
  .mr-xxl-1,
  .mx-xxl-1 {
    margin-right: 0.25rem !important; }
  .mb-xxl-1,
  .my-xxl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xxl-1,
  .mx-xxl-1 {
    margin-left: 0.25rem !important; }
  .m-xxl-2 {
    margin: 0.5rem !important; }
  .mt-xxl-2,
  .my-xxl-2 {
    margin-top: 0.5rem !important; }
  .mr-xxl-2,
  .mx-xxl-2 {
    margin-right: 0.5rem !important; }
  .mb-xxl-2,
  .my-xxl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xxl-2,
  .mx-xxl-2 {
    margin-left: 0.5rem !important; }
  .m-xxl-3 {
    margin: 1rem !important; }
  .mt-xxl-3,
  .my-xxl-3 {
    margin-top: 1rem !important; }
  .mr-xxl-3,
  .mx-xxl-3 {
    margin-right: 1rem !important; }
  .mb-xxl-3,
  .my-xxl-3 {
    margin-bottom: 1rem !important; }
  .ml-xxl-3,
  .mx-xxl-3 {
    margin-left: 1rem !important; }
  .m-xxl-4 {
    margin: 1.5rem !important; }
  .mt-xxl-4,
  .my-xxl-4 {
    margin-top: 1.5rem !important; }
  .mr-xxl-4,
  .mx-xxl-4 {
    margin-right: 1.5rem !important; }
  .mb-xxl-4,
  .my-xxl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xxl-4,
  .mx-xxl-4 {
    margin-left: 1.5rem !important; }
  .m-xxl-5 {
    margin: 3rem !important; }
  .mt-xxl-5,
  .my-xxl-5 {
    margin-top: 3rem !important; }
  .mr-xxl-5,
  .mx-xxl-5 {
    margin-right: 3rem !important; }
  .mb-xxl-5,
  .my-xxl-5 {
    margin-bottom: 3rem !important; }
  .ml-xxl-5,
  .mx-xxl-5 {
    margin-left: 3rem !important; }
  .p-xxl-0 {
    padding: 0 !important; }
  .pt-xxl-0,
  .py-xxl-0 {
    padding-top: 0 !important; }
  .pr-xxl-0,
  .px-xxl-0 {
    padding-right: 0 !important; }
  .pb-xxl-0,
  .py-xxl-0 {
    padding-bottom: 0 !important; }
  .pl-xxl-0,
  .px-xxl-0 {
    padding-left: 0 !important; }
  .p-xxl-1 {
    padding: 0.25rem !important; }
  .pt-xxl-1,
  .py-xxl-1 {
    padding-top: 0.25rem !important; }
  .pr-xxl-1,
  .px-xxl-1 {
    padding-right: 0.25rem !important; }
  .pb-xxl-1,
  .py-xxl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xxl-1,
  .px-xxl-1 {
    padding-left: 0.25rem !important; }
  .p-xxl-2 {
    padding: 0.5rem !important; }
  .pt-xxl-2,
  .py-xxl-2 {
    padding-top: 0.5rem !important; }
  .pr-xxl-2,
  .px-xxl-2 {
    padding-right: 0.5rem !important; }
  .pb-xxl-2,
  .py-xxl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xxl-2,
  .px-xxl-2 {
    padding-left: 0.5rem !important; }
  .p-xxl-3 {
    padding: 1rem !important; }
  .pt-xxl-3,
  .py-xxl-3 {
    padding-top: 1rem !important; }
  .pr-xxl-3,
  .px-xxl-3 {
    padding-right: 1rem !important; }
  .pb-xxl-3,
  .py-xxl-3 {
    padding-bottom: 1rem !important; }
  .pl-xxl-3,
  .px-xxl-3 {
    padding-left: 1rem !important; }
  .p-xxl-4 {
    padding: 1.5rem !important; }
  .pt-xxl-4,
  .py-xxl-4 {
    padding-top: 1.5rem !important; }
  .pr-xxl-4,
  .px-xxl-4 {
    padding-right: 1.5rem !important; }
  .pb-xxl-4,
  .py-xxl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xxl-4,
  .px-xxl-4 {
    padding-left: 1.5rem !important; }
  .p-xxl-5 {
    padding: 3rem !important; }
  .pt-xxl-5,
  .py-xxl-5 {
    padding-top: 3rem !important; }
  .pr-xxl-5,
  .px-xxl-5 {
    padding-right: 3rem !important; }
  .pb-xxl-5,
  .py-xxl-5 {
    padding-bottom: 3rem !important; }
  .pl-xxl-5,
  .px-xxl-5 {
    padding-left: 3rem !important; }
  .m-xxl-auto {
    margin: auto !important; }
  .mt-xxl-auto,
  .my-xxl-auto {
    margin-top: auto !important; }
  .mr-xxl-auto,
  .mx-xxl-auto {
    margin-right: auto !important; }
  .mb-xxl-auto,
  .my-xxl-auto {
    margin-bottom: auto !important; }
  .ml-xxl-auto,
  .mx-xxl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

@media (min-width: 1440px) {
  .text-xxl-left {
    text-align: left !important; }
  .text-xxl-right {
    text-align: right !important; }
  .text-xxl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #FFF !important; }

.text-primary {
  color: #007BFF !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #0062cc !important; }

.text-secondary {
  color: #6C757D !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #545b62 !important; }

.text-success {
  color: #28A745 !important; }

a.text-success:hover, a.text-success:focus {
  color: #1e7e34 !important; }

.text-info {
  color: #17A2B8 !important; }

a.text-info:hover, a.text-info:focus {
  color: #117a8b !important; }

.text-warning {
  color: #FFC107 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #d39e00 !important; }

.text-danger {
  color: #DC3545 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #bd2130 !important; }

.text-light {
  color: #F8F9FA !important; }

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important; }

.text-dark {
  color: #343A40 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important; }

.text-body {
  color: #212529 !important; }

.text-muted {
  color: #6C757D !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #ADB5BD;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #FFF !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #DEE2E6 !important; }
  .table-dark {
    color: inherit; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #DEE2E6; }
  .table .thead-dark th {
    color: inherit;
    border-color: #DEE2E6; } }
</style><style>/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
@font-face {
  font-family: FontAwesome;
  font-display: swap;
  src: url(https://components.mywebsitebuilder.com/fonts/fontawesome-webfont.eot);
  src: url(https://components.mywebsitebuilder.com/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format("embedded-opentype"), url(https://components.mywebsitebuilder.com/fonts/fontawesome-webfont.woff2) format("woff2"), url(https://components.mywebsitebuilder.com/fonts/fontawesome-webfont.woff) format("woff"), url(https://components.mywebsitebuilder.com/fonts/fontawesome-webfont.ttf) format("truetype"), url(https://components.mywebsitebuilder.com/fonts/fontawesome-webfont.svg#fontawesomeregular) format("svg");
  font-weight: 400;
  font-style: normal; }

.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

.fa-lg {
  font-size: 1.33333333em;
  line-height: .75em;
  vertical-align: -15%; }

.fa-2x {
  font-size: 2em; }

.fa-3x {
  font-size: 3em; }

.fa-4x {
  font-size: 4em; }

.fa-5x {
  font-size: 5em; }

.fa-fw {
  width: 1.28571429em;
  text-align: center; }

.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none; }

.fa-ul > li {
  position: relative; }

.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: .14285714em;
  text-align: center; }

.fa-li.fa-lg {
  left: -1.85714286em; }

.fa-border {
  padding: .2em .25em .15em;
  border: .08em solid #EEE;
  border-radius: .1em; }

.fa-pull-left {
  float: left; }

.fa-pull-right {
  float: right; }

.fa.fa-pull-left {
  margin-right: .3em; }

.fa.fa-pull-right {
  margin-left: .3em; }

.pull-right {
  float: right; }

.pull-left {
  float: left; }

.fa.pull-left {
  margin-right: .3em; }

.fa.pull-right {
  margin-left: .3em; }

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear; }

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8); }

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }

.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg); }

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg); }

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg); }

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1); }

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1); }

:root .fa-flip-horizontal, :root .fa-flip-vertical, :root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270 {
  -webkit-filter: none;
  filter: none; }

.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle; }

.fa-stack-1x, .fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center; }

.fa-stack-1x {
  line-height: inherit; }

.fa-stack-2x {
  font-size: 2em; }

.fa-inverse {
  color: #FFF; }

.fa-glass:before {
  content: "\F000"; }

.fa-music:before {
  content: "\F001"; }

.fa-search:before {
  content: "\F002"; }

.fa-envelope-o:before {
  content: "\F003"; }

.fa-heart:before {
  content: "\F004"; }

.fa-star:before {
  content: "\F005"; }

.fa-star-o:before {
  content: "\F006"; }

.fa-user:before {
  content: "\F007"; }

.fa-film:before {
  content: "\F008"; }

.fa-th-large:before {
  content: "\F009"; }

.fa-th:before {
  content: "\F00A"; }

.fa-th-list:before {
  content: "\F00B"; }

.fa-check:before {
  content: "\F00C"; }

.fa-close:before, .fa-remove:before, .fa-times:before {
  content: "\F00D"; }

.fa-search-plus:before {
  content: "\F00E"; }

.fa-search-minus:before {
  content: "\F010"; }

.fa-power-off:before {
  content: "\F011"; }

.fa-signal:before {
  content: "\F012"; }

.fa-cog:before, .fa-gear:before {
  content: "\F013"; }

.fa-trash-o:before {
  content: "\F014"; }

.fa-home:before {
  content: "\F015"; }

.fa-file-o:before {
  content: "\F016"; }

.fa-clock-o:before {
  content: "\F017"; }

.fa-road:before {
  content: "\F018"; }

.fa-download:before {
  content: "\F019"; }

.fa-arrow-circle-o-down:before {
  content: "\F01A"; }

.fa-arrow-circle-o-up:before {
  content: "\F01B"; }

.fa-inbox:before {
  content: "\F01C"; }

.fa-play-circle-o:before {
  content: "\F01D"; }

.fa-repeat:before, .fa-rotate-right:before {
  content: "\F01E"; }

.fa-refresh:before {
  content: "\F021"; }

.fa-list-alt:before {
  content: "\F022"; }

.fa-lock:before {
  content: "\F023"; }

.fa-flag:before {
  content: "\F024"; }

.fa-headphones:before {
  content: "\F025"; }

.fa-volume-off:before {
  content: "\F026"; }

.fa-volume-down:before {
  content: "\F027"; }

.fa-volume-up:before {
  content: "\F028"; }

.fa-qrcode:before {
  content: "\F029"; }

.fa-barcode:before {
  content: "\F02A"; }

.fa-tag:before {
  content: "\F02B"; }

.fa-tags:before {
  content: "\F02C"; }

.fa-book:before {
  content: "\F02D"; }

.fa-bookmark:before {
  content: "\F02E"; }

.fa-print:before {
  content: "\F02F"; }

.fa-camera:before {
  content: "\F030"; }

.fa-font:before {
  content: "\F031"; }

.fa-bold:before {
  content: "\F032"; }

.fa-italic:before {
  content: "\F033"; }

.fa-text-height:before {
  content: "\F034"; }

.fa-text-width:before {
  content: "\F035"; }

.fa-align-left:before {
  content: "\F036"; }

.fa-align-center:before {
  content: "\F037"; }

.fa-align-right:before {
  content: "\F038"; }

.fa-align-justify:before {
  content: "\F039"; }

.fa-list:before {
  content: "\F03A"; }

.fa-dedent:before, .fa-outdent:before {
  content: "\F03B"; }

.fa-indent:before {
  content: "\F03C"; }

.fa-video-camera:before {
  content: "\F03D"; }

.fa-image:before, .fa-photo:before, .fa-picture-o:before {
  content: "\F03E"; }

.fa-pencil:before {
  content: "\F040"; }

.fa-map-marker:before {
  content: "\F041"; }

.fa-adjust:before {
  content: "\F042"; }

.fa-tint:before {
  content: "\F043"; }

.fa-edit:before, .fa-pencil-square-o:before {
  content: "\F044"; }

.fa-share-square-o:before {
  content: "\F045"; }

.fa-check-square-o:before {
  content: "\F046"; }

.fa-arrows:before {
  content: "\F047"; }

.fa-step-backward:before {
  content: "\F048"; }

.fa-fast-backward:before {
  content: "\F049"; }

.fa-backward:before {
  content: "\F04A"; }

.fa-play:before {
  content: "\F04B"; }

.fa-pause:before {
  content: "\F04C"; }

.fa-stop:before {
  content: "\F04D"; }

.fa-forward:before {
  content: "\F04E"; }

.fa-fast-forward:before {
  content: "\F050"; }

.fa-step-forward:before {
  content: "\F051"; }

.fa-eject:before {
  content: "\F052"; }

.fa-chevron-left:before {
  content: "\F053"; }

.fa-chevron-right:before {
  content: "\F054"; }

.fa-plus-circle:before {
  content: "\F055"; }

.fa-minus-circle:before {
  content: "\F056"; }

.fa-times-circle:before {
  content: "\F057"; }

.fa-check-circle:before {
  content: "\F058"; }

.fa-question-circle:before {
  content: "\F059"; }

.fa-info-circle:before {
  content: "\F05A"; }

.fa-crosshairs:before {
  content: "\F05B"; }

.fa-times-circle-o:before {
  content: "\F05C"; }

.fa-check-circle-o:before {
  content: "\F05D"; }

.fa-ban:before {
  content: "\F05E"; }

.fa-arrow-left:before {
  content: "\F060"; }

.fa-arrow-right:before {
  content: "\F061"; }

.fa-arrow-up:before {
  content: "\F062"; }

.fa-arrow-down:before {
  content: "\F063"; }

.fa-mail-forward:before, .fa-share:before {
  content: "\F064"; }

.fa-expand:before {
  content: "\F065"; }

.fa-compress:before {
  content: "\F066"; }

.fa-plus:before {
  content: "\F067"; }

.fa-minus:before {
  content: "\F068"; }

.fa-asterisk:before {
  content: "\F069"; }

.fa-exclamation-circle:before {
  content: "\F06A"; }

.fa-gift:before {
  content: "\F06B"; }

.fa-leaf:before {
  content: "\F06C"; }

.fa-fire:before {
  content: "\F06D"; }

.fa-eye:before {
  content: "\F06E"; }

.fa-eye-slash:before {
  content: "\F070"; }

.fa-exclamation-triangle:before, .fa-warning:before {
  content: "\F071"; }

.fa-plane:before {
  content: "\F072"; }

.fa-calendar:before {
  content: "\F073"; }

.fa-random:before {
  content: "\F074"; }

.fa-comment:before {
  content: "\F075"; }

.fa-magnet:before {
  content: "\F076"; }

.fa-chevron-up:before {
  content: "\F077"; }

.fa-chevron-down:before {
  content: "\F078"; }

.fa-retweet:before {
  content: "\F079"; }

.fa-shopping-cart:before {
  content: "\F07A"; }

.fa-folder:before {
  content: "\F07B"; }

.fa-folder-open:before {
  content: "\F07C"; }

.fa-arrows-v:before {
  content: "\F07D"; }

.fa-arrows-h:before {
  content: "\F07E"; }

.fa-bar-chart-o:before, .fa-bar-chart:before {
  content: "\F080"; }

.fa-twitter-square:before {
  content: "\F081"; }

.fa-facebook-square:before {
  content: "\F082"; }

.fa-camera-retro:before {
  content: "\F083"; }

.fa-key:before {
  content: "\F084"; }

.fa-cogs:before, .fa-gears:before {
  content: "\F085"; }

.fa-comments:before {
  content: "\F086"; }

.fa-thumbs-o-up:before {
  content: "\F087"; }

.fa-thumbs-o-down:before {
  content: "\F088"; }

.fa-star-half:before {
  content: "\F089"; }

.fa-heart-o:before {
  content: "\F08A"; }

.fa-sign-out:before {
  content: "\F08B"; }

.fa-linkedin-square:before {
  content: "\F08C"; }

.fa-thumb-tack:before {
  content: "\F08D"; }

.fa-external-link:before {
  content: "\F08E"; }

.fa-sign-in:before {
  content: "\F090"; }

.fa-trophy:before {
  content: "\F091"; }

.fa-github-square:before {
  content: "\F092"; }

.fa-upload:before {
  content: "\F093"; }

.fa-lemon-o:before {
  content: "\F094"; }

.fa-phone:before {
  content: "\F095"; }

.fa-square-o:before {
  content: "\F096"; }

.fa-bookmark-o:before {
  content: "\F097"; }

.fa-phone-square:before {
  content: "\F098"; }

.fa-twitter:before {
  content: "\F099"; }

.fa-facebook-f:before, .fa-facebook:before {
  content: "\F09A"; }

.fa-github:before {
  content: "\F09B"; }

.fa-unlock:before {
  content: "\F09C"; }

.fa-credit-card:before {
  content: "\F09D"; }

.fa-feed:before, .fa-rss:before {
  content: "\F09E"; }

.fa-hdd-o:before {
  content: "\F0A0"; }

.fa-bullhorn:before {
  content: "\F0A1"; }

.fa-bell:before {
  content: "\F0F3"; }

.fa-certificate:before {
  content: "\F0A3"; }

.fa-hand-o-right:before {
  content: "\F0A4"; }

.fa-hand-o-left:before {
  content: "\F0A5"; }

.fa-hand-o-up:before {
  content: "\F0A6"; }

.fa-hand-o-down:before {
  content: "\F0A7"; }

.fa-arrow-circle-left:before {
  content: "\F0A8"; }

.fa-arrow-circle-right:before {
  content: "\F0A9"; }

.fa-arrow-circle-up:before {
  content: "\F0AA"; }

.fa-arrow-circle-down:before {
  content: "\F0AB"; }

.fa-globe:before {
  content: "\F0AC"; }

.fa-wrench:before {
  content: "\F0AD"; }

.fa-tasks:before {
  content: "\F0AE"; }

.fa-filter:before {
  content: "\F0B0"; }

.fa-briefcase:before {
  content: "\F0B1"; }

.fa-arrows-alt:before {
  content: "\F0B2"; }

.fa-group:before, .fa-users:before {
  content: "\F0C0"; }

.fa-chain:before, .fa-link:before {
  content: "\F0C1"; }

.fa-cloud:before {
  content: "\F0C2"; }

.fa-flask:before {
  content: "\F0C3"; }

.fa-cut:before, .fa-scissors:before {
  content: "\F0C4"; }

.fa-copy:before, .fa-files-o:before {
  content: "\F0C5"; }

.fa-paperclip:before {
  content: "\F0C6"; }

.fa-floppy-o:before, .fa-save:before {
  content: "\F0C7"; }

.fa-square:before {
  content: "\F0C8"; }

.fa-bars:before, .fa-navicon:before, .fa-reorder:before {
  content: "\F0C9"; }

.fa-list-ul:before {
  content: "\F0CA"; }

.fa-list-ol:before {
  content: "\F0CB"; }

.fa-strikethrough:before {
  content: "\F0CC"; }

.fa-underline:before {
  content: "\F0CD"; }

.fa-table:before {
  content: "\F0CE"; }

.fa-magic:before {
  content: "\F0D0"; }

.fa-truck:before {
  content: "\F0D1"; }

.fa-pinterest:before {
  content: "\F0D2"; }

.fa-pinterest-square:before {
  content: "\F0D3"; }

.fa-google-plus-square:before {
  content: "\F0D4"; }

.fa-google-plus:before {
  content: "\F0D5"; }

.fa-money:before {
  content: "\F0D6"; }

.fa-caret-down:before {
  content: "\F0D7"; }

.fa-caret-up:before {
  content: "\F0D8"; }

.fa-caret-left:before {
  content: "\F0D9"; }

.fa-caret-right:before {
  content: "\F0DA"; }

.fa-columns:before {
  content: "\F0DB"; }

.fa-sort:before, .fa-unsorted:before {
  content: "\F0DC"; }

.fa-sort-desc:before, .fa-sort-down:before {
  content: "\F0DD"; }

.fa-sort-asc:before, .fa-sort-up:before {
  content: "\F0DE"; }

.fa-envelope:before {
  content: "\F0E0"; }

.fa-linkedin:before {
  content: "\F0E1"; }

.fa-rotate-left:before, .fa-undo:before {
  content: "\F0E2"; }

.fa-gavel:before, .fa-legal:before {
  content: "\F0E3"; }

.fa-dashboard:before, .fa-tachometer:before {
  content: "\F0E4"; }

.fa-comment-o:before {
  content: "\F0E5"; }

.fa-comments-o:before {
  content: "\F0E6"; }

.fa-bolt:before, .fa-flash:before {
  content: "\F0E7"; }

.fa-sitemap:before {
  content: "\F0E8"; }

.fa-umbrella:before {
  content: "\F0E9"; }

.fa-clipboard:before, .fa-paste:before {
  content: "\F0EA"; }

.fa-lightbulb-o:before {
  content: "\F0EB"; }

.fa-exchange:before {
  content: "\F0EC"; }

.fa-cloud-download:before {
  content: "\F0ED"; }

.fa-cloud-upload:before {
  content: "\F0EE"; }

.fa-user-md:before {
  content: "\F0F0"; }

.fa-stethoscope:before {
  content: "\F0F1"; }

.fa-suitcase:before {
  content: "\F0F2"; }

.fa-bell-o:before {
  content: "\F0A2"; }

.fa-coffee:before {
  content: "\F0F4"; }

.fa-cutlery:before {
  content: "\F0F5"; }

.fa-file-text-o:before {
  content: "\F0F6"; }

.fa-building-o:before {
  content: "\F0F7"; }

.fa-hospital-o:before {
  content: "\F0F8"; }

.fa-ambulance:before {
  content: "\F0F9"; }

.fa-medkit:before {
  content: "\F0FA"; }

.fa-fighter-jet:before {
  content: "\F0FB"; }

.fa-beer:before {
  content: "\F0FC"; }

.fa-h-square:before {
  content: "\F0FD"; }

.fa-plus-square:before {
  content: "\F0FE"; }

.fa-angle-double-left:before {
  content: "\F100"; }

.fa-angle-double-right:before {
  content: "\F101"; }

.fa-angle-double-up:before {
  content: "\F102"; }

.fa-angle-double-down:before {
  content: "\F103"; }

.fa-angle-left:before {
  content: "\F104"; }

.fa-angle-right:before {
  content: "\F105"; }

.fa-angle-up:before {
  content: "\F106"; }

.fa-angle-down:before {
  content: "\F107"; }

.fa-desktop:before {
  content: "\F108"; }

.fa-laptop:before {
  content: "\F109"; }

.fa-tablet:before {
  content: "\F10A"; }

.fa-mobile-phone:before, .fa-mobile:before {
  content: "\F10B"; }

.fa-circle-o:before {
  content: "\F10C"; }

.fa-quote-left:before {
  content: "\F10D"; }

.fa-quote-right:before {
  content: "\F10E"; }

.fa-spinner:before {
  content: "\F110"; }

.fa-circle:before {
  content: "\F111"; }

.fa-mail-reply:before, .fa-reply:before {
  content: "\F112"; }

.fa-github-alt:before {
  content: "\F113"; }

.fa-folder-o:before {
  content: "\F114"; }

.fa-folder-open-o:before {
  content: "\F115"; }

.fa-smile-o:before {
  content: "\F118"; }

.fa-frown-o:before {
  content: "\F119"; }

.fa-meh-o:before {
  content: "\F11A"; }

.fa-gamepad:before {
  content: "\F11B"; }

.fa-keyboard-o:before {
  content: "\F11C"; }

.fa-flag-o:before {
  content: "\F11D"; }

.fa-flag-checkered:before {
  content: "\F11E"; }

.fa-terminal:before {
  content: "\F120"; }

.fa-code:before {
  content: "\F121"; }

.fa-mail-reply-all:before, .fa-reply-all:before {
  content: "\F122"; }

.fa-star-half-empty:before, .fa-star-half-full:before, .fa-star-half-o:before {
  content: "\F123"; }

.fa-location-arrow:before {
  content: "\F124"; }

.fa-crop:before {
  content: "\F125"; }

.fa-code-fork:before {
  content: "\F126"; }

.fa-chain-broken:before, .fa-unlink:before {
  content: "\F127"; }

.fa-question:before {
  content: "\F128"; }

.fa-info:before {
  content: "\F129"; }

.fa-exclamation:before {
  content: "\F12A"; }

.fa-superscript:before {
  content: "\F12B"; }

.fa-subscript:before {
  content: "\F12C"; }

.fa-eraser:before {
  content: "\F12D"; }

.fa-puzzle-piece:before {
  content: "\F12E"; }

.fa-microphone:before {
  content: "\F130"; }

.fa-microphone-slash:before {
  content: "\F131"; }

.fa-shield:before {
  content: "\F132"; }

.fa-calendar-o:before {
  content: "\F133"; }

.fa-fire-extinguisher:before {
  content: "\F134"; }

.fa-rocket:before {
  content: "\F135"; }

.fa-maxcdn:before {
  content: "\F136"; }

.fa-chevron-circle-left:before {
  content: "\F137"; }

.fa-chevron-circle-right:before {
  content: "\F138"; }

.fa-chevron-circle-up:before {
  content: "\F139"; }

.fa-chevron-circle-down:before {
  content: "\F13A"; }

.fa-html5:before {
  content: "\F13B"; }

.fa-css3:before {
  content: "\F13C"; }

.fa-anchor:before {
  content: "\F13D"; }

.fa-unlock-alt:before {
  content: "\F13E"; }

.fa-bullseye:before {
  content: "\F140"; }

.fa-ellipsis-h:before {
  content: "\F141"; }

.fa-ellipsis-v:before {
  content: "\F142"; }

.fa-rss-square:before {
  content: "\F143"; }

.fa-play-circle:before {
  content: "\F144"; }

.fa-ticket:before {
  content: "\F145"; }

.fa-minus-square:before {
  content: "\F146"; }

.fa-minus-square-o:before {
  content: "\F147"; }

.fa-level-up:before {
  content: "\F148"; }

.fa-level-down:before {
  content: "\F149"; }

.fa-check-square:before {
  content: "\F14A"; }

.fa-pencil-square:before {
  content: "\F14B"; }

.fa-external-link-square:before {
  content: "\F14C"; }

.fa-share-square:before {
  content: "\F14D"; }

.fa-compass:before {
  content: "\F14E"; }

.fa-caret-square-o-down:before, .fa-toggle-down:before {
  content: "\F150"; }

.fa-caret-square-o-up:before, .fa-toggle-up:before {
  content: "\F151"; }

.fa-caret-square-o-right:before, .fa-toggle-right:before {
  content: "\F152"; }

.fa-eur:before, .fa-euro:before {
  content: "\F153"; }

.fa-gbp:before {
  content: "\F154"; }

.fa-dollar:before, .fa-usd:before {
  content: "\F155"; }

.fa-inr:before, .fa-rupee:before {
  content: "\F156"; }

.fa-cny:before, .fa-jpy:before, .fa-rmb:before, .fa-yen:before {
  content: "\F157"; }

.fa-rouble:before, .fa-rub:before, .fa-ruble:before {
  content: "\F158"; }

.fa-krw:before, .fa-won:before {
  content: "\F159"; }

.fa-bitcoin:before, .fa-btc:before {
  content: "\F15A"; }

.fa-file:before {
  content: "\F15B"; }

.fa-file-text:before {
  content: "\F15C"; }

.fa-sort-alpha-asc:before {
  content: "\F15D"; }

.fa-sort-alpha-desc:before {
  content: "\F15E"; }

.fa-sort-amount-asc:before {
  content: "\F160"; }

.fa-sort-amount-desc:before {
  content: "\F161"; }

.fa-sort-numeric-asc:before {
  content: "\F162"; }

.fa-sort-numeric-desc:before {
  content: "\F163"; }

.fa-thumbs-up:before {
  content: "\F164"; }

.fa-thumbs-down:before {
  content: "\F165"; }

.fa-youtube-square:before {
  content: "\F166"; }

.fa-youtube:before {
  content: "\F167"; }

.fa-xing:before {
  content: "\F168"; }

.fa-xing-square:before {
  content: "\F169"; }

.fa-youtube-play:before {
  content: "\F16A"; }

.fa-dropbox:before {
  content: "\F16B"; }

.fa-stack-overflow:before {
  content: "\F16C"; }

.fa-instagram:before {
  content: "\F16D"; }

.fa-flickr:before {
  content: "\F16E"; }

.fa-adn:before {
  content: "\F170"; }

.fa-bitbucket:before {
  content: "\F171"; }

.fa-bitbucket-square:before {
  content: "\F172"; }

.fa-tumblr:before {
  content: "\F173"; }

.fa-tumblr-square:before {
  content: "\F174"; }

.fa-long-arrow-down:before {
  content: "\F175"; }

.fa-long-arrow-up:before {
  content: "\F176"; }

.fa-long-arrow-left:before {
  content: "\F177"; }

.fa-long-arrow-right:before {
  content: "\F178"; }

.fa-apple:before {
  content: "\F179"; }

.fa-windows:before {
  content: "\F17A"; }

.fa-android:before {
  content: "\F17B"; }

.fa-linux:before {
  content: "\F17C"; }

.fa-dribbble:before {
  content: "\F17D"; }

.fa-skype:before {
  content: "\F17E"; }

.fa-foursquare:before {
  content: "\F180"; }

.fa-trello:before {
  content: "\F181"; }

.fa-female:before {
  content: "\F182"; }

.fa-male:before {
  content: "\F183"; }

.fa-gittip:before, .fa-gratipay:before {
  content: "\F184"; }

.fa-sun-o:before {
  content: "\F185"; }

.fa-moon-o:before {
  content: "\F186"; }

.fa-archive:before {
  content: "\F187"; }

.fa-bug:before {
  content: "\F188"; }

.fa-vk:before {
  content: "\F189"; }

.fa-weibo:before {
  content: "\F18A"; }

.fa-renren:before {
  content: "\F18B"; }

.fa-pagelines:before {
  content: "\F18C"; }

.fa-stack-exchange:before {
  content: "\F18D"; }

.fa-arrow-circle-o-right:before {
  content: "\F18E"; }

.fa-arrow-circle-o-left:before {
  content: "\F190"; }

.fa-caret-square-o-left:before, .fa-toggle-left:before {
  content: "\F191"; }

.fa-dot-circle-o:before {
  content: "\F192"; }

.fa-wheelchair:before {
  content: "\F193"; }

.fa-vimeo-square:before {
  content: "\F194"; }

.fa-try:before, .fa-turkish-lira:before {
  content: "\F195"; }

.fa-plus-square-o:before {
  content: "\F196"; }

.fa-space-shuttle:before {
  content: "\F197"; }

.fa-slack:before {
  content: "\F198"; }

.fa-envelope-square:before {
  content: "\F199"; }

.fa-wordpress:before {
  content: "\F19A"; }

.fa-openid:before {
  content: "\F19B"; }

.fa-bank:before, .fa-institution:before, .fa-university:before {
  content: "\F19C"; }

.fa-graduation-cap:before, .fa-mortar-board:before {
  content: "\F19D"; }

.fa-yahoo:before {
  content: "\F19E"; }

.fa-google:before {
  content: "\F1A0"; }

.fa-reddit:before {
  content: "\F1A1"; }

.fa-reddit-square:before {
  content: "\F1A2"; }

.fa-stumbleupon-circle:before {
  content: "\F1A3"; }

.fa-stumbleupon:before {
  content: "\F1A4"; }

.fa-delicious:before {
  content: "\F1A5"; }

.fa-digg:before {
  content: "\F1A6"; }

.fa-pied-piper-pp:before {
  content: "\F1A7"; }

.fa-pied-piper-alt:before {
  content: "\F1A8"; }

.fa-drupal:before {
  content: "\F1A9"; }

.fa-joomla:before {
  content: "\F1AA"; }

.fa-language:before {
  content: "\F1AB"; }

.fa-fax:before {
  content: "\F1AC"; }

.fa-building:before {
  content: "\F1AD"; }

.fa-child:before {
  content: "\F1AE"; }

.fa-paw:before {
  content: "\F1B0"; }

.fa-spoon:before {
  content: "\F1B1"; }

.fa-cube:before {
  content: "\F1B2"; }

.fa-cubes:before {
  content: "\F1B3"; }

.fa-behance:before {
  content: "\F1B4"; }

.fa-behance-square:before {
  content: "\F1B5"; }

.fa-steam:before {
  content: "\F1B6"; }

.fa-steam-square:before {
  content: "\F1B7"; }

.fa-recycle:before {
  content: "\F1B8"; }

.fa-automobile:before, .fa-car:before {
  content: "\F1B9"; }

.fa-cab:before, .fa-taxi:before {
  content: "\F1BA"; }

.fa-tree:before {
  content: "\F1BB"; }

.fa-spotify:before {
  content: "\F1BC"; }

.fa-deviantart:before {
  content: "\F1BD"; }

.fa-soundcloud:before {
  content: "\F1BE"; }

.fa-database:before {
  content: "\F1C0"; }

.fa-file-pdf-o:before {
  content: "\F1C1"; }

.fa-file-word-o:before {
  content: "\F1C2"; }

.fa-file-excel-o:before {
  content: "\F1C3"; }

.fa-file-powerpoint-o:before {
  content: "\F1C4"; }

.fa-file-image-o:before, .fa-file-photo-o:before, .fa-file-picture-o:before {
  content: "\F1C5"; }

.fa-file-archive-o:before, .fa-file-zip-o:before {
  content: "\F1C6"; }

.fa-file-audio-o:before, .fa-file-sound-o:before {
  content: "\F1C7"; }

.fa-file-movie-o:before, .fa-file-video-o:before {
  content: "\F1C8"; }

.fa-file-code-o:before {
  content: "\F1C9"; }

.fa-vine:before {
  content: "\F1CA"; }

.fa-codepen:before {
  content: "\F1CB"; }

.fa-jsfiddle:before {
  content: "\F1CC"; }

.fa-life-bouy:before, .fa-life-buoy:before, .fa-life-ring:before, .fa-life-saver:before, .fa-support:before {
  content: "\F1CD"; }

.fa-circle-o-notch:before {
  content: "\F1CE"; }

.fa-ra:before, .fa-rebel:before, .fa-resistance:before {
  content: "\F1D0"; }

.fa-empire:before, .fa-ge:before {
  content: "\F1D1"; }

.fa-git-square:before {
  content: "\F1D2"; }

.fa-git:before {
  content: "\F1D3"; }

.fa-hacker-news:before, .fa-y-combinator-square:before, .fa-yc-square:before {
  content: "\F1D4"; }

.fa-tencent-weibo:before {
  content: "\F1D5"; }

.fa-qq:before {
  content: "\F1D6"; }

.fa-wechat:before, .fa-weixin:before {
  content: "\F1D7"; }

.fa-paper-plane:before, .fa-send:before {
  content: "\F1D8"; }

.fa-paper-plane-o:before, .fa-send-o:before {
  content: "\F1D9"; }

.fa-history:before {
  content: "\F1DA"; }

.fa-circle-thin:before {
  content: "\F1DB"; }

.fa-header:before {
  content: "\F1DC"; }

.fa-paragraph:before {
  content: "\F1DD"; }

.fa-sliders:before {
  content: "\F1DE"; }

.fa-share-alt:before {
  content: "\F1E0"; }

.fa-share-alt-square:before {
  content: "\F1E1"; }

.fa-bomb:before {
  content: "\F1E2"; }

.fa-futbol-o:before, .fa-soccer-ball-o:before {
  content: "\F1E3"; }

.fa-tty:before {
  content: "\F1E4"; }

.fa-binoculars:before {
  content: "\F1E5"; }

.fa-plug:before {
  content: "\F1E6"; }

.fa-slideshare:before {
  content: "\F1E7"; }

.fa-twitch:before {
  content: "\F1E8"; }

.fa-yelp:before {
  content: "\F1E9"; }

.fa-newspaper-o:before {
  content: "\F1EA"; }

.fa-wifi:before {
  content: "\F1EB"; }

.fa-calculator:before {
  content: "\F1EC"; }

.fa-paypal:before {
  content: "\F1ED"; }

.fa-google-wallet:before {
  content: "\F1EE"; }

.fa-cc-visa:before {
  content: "\F1F0"; }

.fa-cc-mastercard:before {
  content: "\F1F1"; }

.fa-cc-discover:before {
  content: "\F1F2"; }

.fa-cc-amex:before {
  content: "\F1F3"; }

.fa-cc-paypal:before {
  content: "\F1F4"; }

.fa-cc-stripe:before {
  content: "\F1F5"; }

.fa-bell-slash:before {
  content: "\F1F6"; }

.fa-bell-slash-o:before {
  content: "\F1F7"; }

.fa-trash:before {
  content: "\F1F8"; }

.fa-copyright:before {
  content: "\F1F9"; }

.fa-at:before {
  content: "\F1FA"; }

.fa-eyedropper:before {
  content: "\F1FB"; }

.fa-paint-brush:before {
  content: "\F1FC"; }

.fa-birthday-cake:before {
  content: "\F1FD"; }

.fa-area-chart:before {
  content: "\F1FE"; }

.fa-pie-chart:before {
  content: "\F200"; }

.fa-line-chart:before {
  content: "\F201"; }

.fa-lastfm:before {
  content: "\F202"; }

.fa-lastfm-square:before {
  content: "\F203"; }

.fa-toggle-off:before {
  content: "\F204"; }

.fa-toggle-on:before {
  content: "\F205"; }

.fa-bicycle:before {
  content: "\F206"; }

.fa-bus:before {
  content: "\F207"; }

.fa-ioxhost:before {
  content: "\F208"; }

.fa-angellist:before {
  content: "\F209"; }

.fa-cc:before {
  content: "\F20A"; }

.fa-ils:before, .fa-shekel:before, .fa-sheqel:before {
  content: "\F20B"; }

.fa-meanpath:before {
  content: "\F20C"; }

.fa-buysellads:before {
  content: "\F20D"; }

.fa-connectdevelop:before {
  content: "\F20E"; }

.fa-dashcube:before {
  content: "\F210"; }

.fa-forumbee:before {
  content: "\F211"; }

.fa-leanpub:before {
  content: "\F212"; }

.fa-sellsy:before {
  content: "\F213"; }

.fa-shirtsinbulk:before {
  content: "\F214"; }

.fa-simplybuilt:before {
  content: "\F215"; }

.fa-skyatlas:before {
  content: "\F216"; }

.fa-cart-plus:before {
  content: "\F217"; }

.fa-cart-arrow-down:before {
  content: "\F218"; }

.fa-diamond:before {
  content: "\F219"; }

.fa-ship:before {
  content: "\F21A"; }

.fa-user-secret:before {
  content: "\F21B"; }

.fa-motorcycle:before {
  content: "\F21C"; }

.fa-street-view:before {
  content: "\F21D"; }

.fa-heartbeat:before {
  content: "\F21E"; }

.fa-venus:before {
  content: "\F221"; }

.fa-mars:before {
  content: "\F222"; }

.fa-mercury:before {
  content: "\F223"; }

.fa-intersex:before, .fa-transgender:before {
  content: "\F224"; }

.fa-transgender-alt:before {
  content: "\F225"; }

.fa-venus-double:before {
  content: "\F226"; }

.fa-mars-double:before {
  content: "\F227"; }

.fa-venus-mars:before {
  content: "\F228"; }

.fa-mars-stroke:before {
  content: "\F229"; }

.fa-mars-stroke-v:before {
  content: "\F22A"; }

.fa-mars-stroke-h:before {
  content: "\F22B"; }

.fa-neuter:before {
  content: "\F22C"; }

.fa-genderless:before {
  content: "\F22D"; }

.fa-facebook-official:before {
  content: "\F230"; }

.fa-pinterest-p:before {
  content: "\F231"; }

.fa-whatsapp:before {
  content: "\F232"; }

.fa-server:before {
  content: "\F233"; }

.fa-user-plus:before {
  content: "\F234"; }

.fa-user-times:before {
  content: "\F235"; }

.fa-bed:before, .fa-hotel:before {
  content: "\F236"; }

.fa-viacoin:before {
  content: "\F237"; }

.fa-train:before {
  content: "\F238"; }

.fa-subway:before {
  content: "\F239"; }

.fa-medium:before {
  content: "\F23A"; }

.fa-y-combinator:before, .fa-yc:before {
  content: "\F23B"; }

.fa-optin-monster:before {
  content: "\F23C"; }

.fa-opencart:before {
  content: "\F23D"; }

.fa-expeditedssl:before {
  content: "\F23E"; }

.fa-battery-4:before, .fa-battery-full:before, .fa-battery:before {
  content: "\F240"; }

.fa-battery-3:before, .fa-battery-three-quarters:before {
  content: "\F241"; }

.fa-battery-2:before, .fa-battery-half:before {
  content: "\F242"; }

.fa-battery-1:before, .fa-battery-quarter:before {
  content: "\F243"; }

.fa-battery-0:before, .fa-battery-empty:before {
  content: "\F244"; }

.fa-mouse-pointer:before {
  content: "\F245"; }

.fa-i-cursor:before {
  content: "\F246"; }

.fa-object-group:before {
  content: "\F247"; }

.fa-object-ungroup:before {
  content: "\F248"; }

.fa-sticky-note:before {
  content: "\F249"; }

.fa-sticky-note-o:before {
  content: "\F24A"; }

.fa-cc-jcb:before {
  content: "\F24B"; }

.fa-cc-diners-club:before {
  content: "\F24C"; }

.fa-clone:before {
  content: "\F24D"; }

.fa-balance-scale:before {
  content: "\F24E"; }

.fa-hourglass-o:before {
  content: "\F250"; }

.fa-hourglass-1:before, .fa-hourglass-start:before {
  content: "\F251"; }

.fa-hourglass-2:before, .fa-hourglass-half:before {
  content: "\F252"; }

.fa-hourglass-3:before, .fa-hourglass-end:before {
  content: "\F253"; }

.fa-hourglass:before {
  content: "\F254"; }

.fa-hand-grab-o:before, .fa-hand-rock-o:before {
  content: "\F255"; }

.fa-hand-paper-o:before, .fa-hand-stop-o:before {
  content: "\F256"; }

.fa-hand-scissors-o:before {
  content: "\F257"; }

.fa-hand-lizard-o:before {
  content: "\F258"; }

.fa-hand-spock-o:before {
  content: "\F259"; }

.fa-hand-pointer-o:before {
  content: "\F25A"; }

.fa-hand-peace-o:before {
  content: "\F25B"; }

.fa-trademark:before {
  content: "\F25C"; }

.fa-registered:before {
  content: "\F25D"; }

.fa-creative-commons:before {
  content: "\F25E"; }

.fa-gg:before {
  content: "\F260"; }

.fa-gg-circle:before {
  content: "\F261"; }

.fa-tripadvisor:before {
  content: "\F262"; }

.fa-odnoklassniki:before {
  content: "\F263"; }

.fa-odnoklassniki-square:before {
  content: "\F264"; }

.fa-get-pocket:before {
  content: "\F265"; }

.fa-wikipedia-w:before {
  content: "\F266"; }

.fa-safari:before {
  content: "\F267"; }

.fa-chrome:before {
  content: "\F268"; }

.fa-firefox:before {
  content: "\F269"; }

.fa-opera:before {
  content: "\F26A"; }

.fa-internet-explorer:before {
  content: "\F26B"; }

.fa-television:before, .fa-tv:before {
  content: "\F26C"; }

.fa-contao:before {
  content: "\F26D"; }

.fa-500px:before {
  content: "\F26E"; }

.fa-amazon:before {
  content: "\F270"; }

.fa-calendar-plus-o:before {
  content: "\F271"; }

.fa-calendar-minus-o:before {
  content: "\F272"; }

.fa-calendar-times-o:before {
  content: "\F273"; }

.fa-calendar-check-o:before {
  content: "\F274"; }

.fa-industry:before {
  content: "\F275"; }

.fa-map-pin:before {
  content: "\F276"; }

.fa-map-signs:before {
  content: "\F277"; }

.fa-map-o:before {
  content: "\F278"; }

.fa-map:before {
  content: "\F279"; }

.fa-commenting:before {
  content: "\F27A"; }

.fa-commenting-o:before {
  content: "\F27B"; }

.fa-houzz:before {
  content: "\F27C"; }

.fa-vimeo:before {
  content: "\F27D"; }

.fa-black-tie:before {
  content: "\F27E"; }

.fa-fonticons:before {
  content: "\F280"; }

.fa-reddit-alien:before {
  content: "\F281"; }

.fa-edge:before {
  content: "\F282"; }

.fa-credit-card-alt:before {
  content: "\F283"; }

.fa-codiepie:before {
  content: "\F284"; }

.fa-modx:before {
  content: "\F285"; }

.fa-fort-awesome:before {
  content: "\F286"; }

.fa-usb:before {
  content: "\F287"; }

.fa-product-hunt:before {
  content: "\F288"; }

.fa-mixcloud:before {
  content: "\F289"; }

.fa-scribd:before {
  content: "\F28A"; }

.fa-pause-circle:before {
  content: "\F28B"; }

.fa-pause-circle-o:before {
  content: "\F28C"; }

.fa-stop-circle:before {
  content: "\F28D"; }

.fa-stop-circle-o:before {
  content: "\F28E"; }

.fa-shopping-bag:before {
  content: "\F290"; }

.fa-shopping-basket:before {
  content: "\F291"; }

.fa-hashtag:before {
  content: "\F292"; }

.fa-bluetooth:before {
  content: "\F293"; }

.fa-bluetooth-b:before {
  content: "\F294"; }

.fa-percent:before {
  content: "\F295"; }

.fa-gitlab:before {
  content: "\F296"; }

.fa-wpbeginner:before {
  content: "\F297"; }

.fa-wpforms:before {
  content: "\F298"; }

.fa-envira:before {
  content: "\F299"; }

.fa-universal-access:before {
  content: "\F29A"; }

.fa-wheelchair-alt:before {
  content: "\F29B"; }

.fa-question-circle-o:before {
  content: "\F29C"; }

.fa-blind:before {
  content: "\F29D"; }

.fa-audio-description:before {
  content: "\F29E"; }

.fa-volume-control-phone:before {
  content: "\F2A0"; }

.fa-braille:before {
  content: "\F2A1"; }

.fa-assistive-listening-systems:before {
  content: "\F2A2"; }

.fa-american-sign-language-interpreting:before, .fa-asl-interpreting:before {
  content: "\F2A3"; }

.fa-deaf:before, .fa-deafness:before, .fa-hard-of-hearing:before {
  content: "\F2A4"; }

.fa-glide:before {
  content: "\F2A5"; }

.fa-glide-g:before {
  content: "\F2A6"; }

.fa-sign-language:before, .fa-signing:before {
  content: "\F2A7"; }

.fa-low-vision:before {
  content: "\F2A8"; }

.fa-viadeo:before {
  content: "\F2A9"; }

.fa-viadeo-square:before {
  content: "\F2AA"; }

.fa-snapchat:before {
  content: "\F2AB"; }

.fa-snapchat-ghost:before {
  content: "\F2AC"; }

.fa-snapchat-square:before {
  content: "\F2AD"; }

.fa-pied-piper:before {
  content: "\F2AE"; }

.fa-first-order:before {
  content: "\F2B0"; }

.fa-yoast:before {
  content: "\F2B1"; }

.fa-themeisle:before {
  content: "\F2B2"; }

.fa-google-plus-circle:before, .fa-google-plus-official:before {
  content: "\F2B3"; }

.fa-fa:before, .fa-font-awesome:before {
  content: "\F2B4"; }

.fa-handshake-o:before {
  content: "\F2B5"; }

.fa-envelope-open:before {
  content: "\F2B6"; }

.fa-envelope-open-o:before {
  content: "\F2B7"; }

.fa-linode:before {
  content: "\F2B8"; }

.fa-address-book:before {
  content: "\F2B9"; }

.fa-address-book-o:before {
  content: "\F2BA"; }

.fa-address-card:before, .fa-vcard:before {
  content: "\F2BB"; }

.fa-address-card-o:before, .fa-vcard-o:before {
  content: "\F2BC"; }

.fa-user-circle:before {
  content: "\F2BD"; }

.fa-user-circle-o:before {
  content: "\F2BE"; }

.fa-user-o:before {
  content: "\F2C0"; }

.fa-id-badge:before {
  content: "\F2C1"; }

.fa-drivers-license:before, .fa-id-card:before {
  content: "\F2C2"; }

.fa-drivers-license-o:before, .fa-id-card-o:before {
  content: "\F2C3"; }

.fa-quora:before {
  content: "\F2C4"; }

.fa-free-code-camp:before {
  content: "\F2C5"; }

.fa-telegram:before {
  content: "\F2C6"; }

.fa-thermometer-4:before, .fa-thermometer-full:before, .fa-thermometer:before {
  content: "\F2C7"; }

.fa-thermometer-3:before, .fa-thermometer-three-quarters:before {
  content: "\F2C8"; }

.fa-thermometer-2:before, .fa-thermometer-half:before {
  content: "\F2C9"; }

.fa-thermometer-1:before, .fa-thermometer-quarter:before {
  content: "\F2CA"; }

.fa-thermometer-0:before, .fa-thermometer-empty:before {
  content: "\F2CB"; }

.fa-shower:before {
  content: "\F2CC"; }

.fa-bath:before, .fa-bathtub:before, .fa-s15:before {
  content: "\F2CD"; }

.fa-podcast:before {
  content: "\F2CE"; }

.fa-window-maximize:before {
  content: "\F2D0"; }

.fa-window-minimize:before {
  content: "\F2D1"; }

.fa-window-restore:before {
  content: "\F2D2"; }

.fa-times-rectangle:before, .fa-window-close:before {
  content: "\F2D3"; }

.fa-times-rectangle-o:before, .fa-window-close-o:before {
  content: "\F2D4"; }

.fa-bandcamp:before {
  content: "\F2D5"; }

.fa-grav:before {
  content: "\F2D6"; }

.fa-etsy:before {
  content: "\F2D7"; }

.fa-imdb:before {
  content: "\F2D8"; }

.fa-ravelry:before {
  content: "\F2D9"; }

.fa-eercast:before {
  content: "\F2DA"; }

.fa-microchip:before {
  content: "\F2DB"; }

.fa-snowflake-o:before {
  content: "\F2DC"; }

.fa-superpowers:before {
  content: "\F2DD"; }

.fa-wpexplorer:before {
  content: "\F2DE"; }

.fa-meetup:before {
  content: "\F2E0"; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto; }
</style><script src="./Maths - Chhaya Coaching Centre_files/sdk-insights-tracker" async="" defer=""></script></head>
<body><div><div class="kv-site kv-main">

<content class="kv-page">

<section class="background-id_1 lahuni83" style=" position:relative;">
<a name="section14"></a>
<div class="position-relative kv-content">

<div class="header-container sub no-cover" style="min-height: 90px;">
<div class="kv-fixed-header navigation-position kv-check-scroll menu-top" data-kv-scroll-offset="32">
<div class="container-fluid navigation">
 <header data-dynamic-container-element="true">
 <div class="kv-background " style=" background-color: rgb(0,0,0);">
<div class="kv-background-inner " style="
    
    
    width:100%;
    height:auto;
    background-color: rgb(0,0,0);
    "></div>
</div>
<div class="logo" data-dynamic-navigation-element="logo">
<a href="./Home.html" data-href="/" class="fit-text site-title-link" style="width: 100%; font-size: 20px;" data-fitted="true">
<span class="logo-text" data-type="text">DSCE-CSE<span data-prop="global.title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></span>
</a>
</div>
<nav>
<ul class="menu" data-dynamic-navigation-element="nav">
<li><a href="./Home1.php" data-uri-path="/" target="_self">Home</a></li>
<li><a href="./Maths.php" data-uri-path="/maths" target="_self" class="active">Class</a></li>
<li><a href="./Science.php" data-uri-path="/science-" target="_self">Announcement</a></li>
<li><a href="./" data-uri-path="/" target="_self">LogOut</a></li>
</ul>
<div class="custom-header-buttons" data-dynamic-navigation-element="calltoactionbutton">
<a id="custom-header-button-template" class="button-cart button-primary"></a>
</div>
<div class="kv-menu">
<div class="menu-icon">
<div></div><div></div><div></div>
</div>
</div>
</nav>
</header>
</div>
</div>
</div>
</div>
</section>

<section class="background-id_0 noduwa21" style=" position:relative;">
<a name="section2078"></a>

<div class="kv-background " style=" background-color: rgb(255,255,255);">
<div class="kv-background-inner " style="
    
    
    
    background-color: rgb(255,255,255);
    "></div>
</div>
<div class="position-relative kv-content">

<div class="align-left section section--lg">
<div class="container">
<div class="row">
<div class="col-12 drop-shadow ">
<div data-type="video" data-property="video" class="embed-container">
 <iframe width="420" height="315"
 src="<?php 
if($count>0)
{
 echo $s3[0];
 }
else
{
	echo "";
}
  ?>">
}
}
</iframe> Your browser does not support the video tag. 
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="section-text col-md-8">
<div class="text-content">
<h2 class="section-title title section-title--md" data-type="text"><?php if($count>0){echo $s5[0];}
else
{
	echo"Lecture not found";
}?><span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
<p class="section-subtitle subtitle section-subtitle--sm" data-type="text"> <?php if ($count>0)
{echo "Lecture Date".$s6[0];}
else {
	echo "No lecture Found";
}?><span data-prop="subtitle" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="background-id_0adjacent zoduye36 hiluse82 undefined" style=" position:relative;">
<a name="section264"></a>

<div class="kv-background " style=" background-color: rgb(249,249,249);">
<div class="kv-background-inner " style="
    
    
    
    background-color: rgb(249,249,249);
    "></div>
</div>

<section class="background-id_1 bajigu79" style=" position:relative;">
<a name="section1"></a>

<div class="kv-background " style=" background-color: rgb(0,0,0);">
<div class="kv-background-inner " style="
    
    
     width:100%;
    height:auto;
    background-color: rgb(0,0,0);
    "></div>
</div>
<div class="position-relative kv-content">

<footer>
<div class="container spacing">
<div class="row fit-items">
<div class="col-small">
<div class="item-25">
<h4 class="title" data-type="text">Address<span data-prop="titleAddress" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h4>
<p class="opaque" data-type="address">DSI,KUMARSWAMY LAYOUT<br>
Bengaluru, Karnataka 560078, INDIA</p>
<div class="buttons">
<a class="opaque body--sm" href="tel:6396066753" data-type="phone">6396066753</a>
<br>
<a class="opaque body--sm" href="mailto:dsce@gmail.com" data-type="email">dsce@gmail.com</a>
</div>
</div>
</div>
<div class="col-small">
<h4 class="title" data-type="text">Pages<span data-prop="titleNavigation" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h4>
<nav>
<ul>
<li>
<a href="./Home1.php" data-uri-path="/" class="opaque body-text body--sm active">Home</a>
</li>
<li>
<a href="./Maths.php" data-uri-path="/maths" class="opaque body-text body--sm ">Class</a>
</li>
<li>
<a href="./Science.php" data-uri-path="/science-" class="opaque body-text body--sm ">Announcement</a>
</li>
<li>
<a href="./" data-uri-path="/" class="opaque body-text body--sm ">LogOut</a>
</li>
</ul>
</nav>
</div>
<div class="col-medium">
<h4 class="title" data-type="text">About us<span data-prop="titleDescription" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h4>
<p class="opaque description" data-type="text">A department giving an excellance result from the past 37 years.<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
</div>
</div>
</div>
</div>
<div class="subfooter">
<div class="container">
<div class="row">
<div class="logo-group">
<h3 class="logo-title" data-type="text">DSCE-CSE<span data-prop="global.title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
</div>
</div>
<div class="row legal">
<p class="copyright body--sm"><span data-type="copyright">� 2020 DSCE-CSE</span></p>
<div class="legal-placeholder body--sm"></div>
</div>
</div>
</div>
</footer>
</div>
</section>
</content></div>
<script>window._page={"mainPage":false,"title":"Maths","uriPath":"maths"};</script>
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
<div class="pswp__bg"></div>
<div class="pswp__scroll-wrap">
<div class="pswp__container">
<div class="pswp__item"></div>
<div class="pswp__item"></div>
<div class="pswp__item"></div>
</div>
<div class="pswp__ui pswp__ui--hidden">
<div class="pswp__top-bar">
<div class="pswp__counter"></div>
<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
<button class="pswp__button pswp__button--share" title="Share"></button>
<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
<div class="pswp__preloader">
<div class="pswp__preloader__icn">
<div class="pswp__preloader__cut">
<div class="pswp__preloader__donut"></div>
</div>
</div>
</div>
</div>
<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
<div class="pswp__share-tooltip"></div>
</div>
<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
<div class="pswp__caption" style="display: none;">
<div class="pswp__caption__center"></div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="./Maths - Chhaya Coaching Centre_files/2635a49c1e8a4f6dcb82.bundle.js.download"></script><script type="text/javascript" src="./Maths - Chhaya Coaching Centre_files/bundle.js.download"></script>
<div style="z-index:100;position:fixed;bottom:0;height:68px;width:100%"><div>
<style>
  .freemium-footer {
    background: #000;
    line-height: 68px;
    color: #fff;
    font-size: 20px;
    box-sizing:border-box;
    font-family:"Open Sans","Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;
    font-style:normal;
    font-weight:400;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    cursor: pointer;
    height: 68px;
}

.freemium-footer *,.freemium-footer:after,.freemium-footer:before {
    -webkit-box-sizing:inherit;
    -moz-box-sizing:inherit;
    box-sizing:inherit;
}
.freemium-footer cursor:pointer img {
  max-width: 100%;
  height: auto;
}
.freemium-footer .right {
  float: right !important;
}
.freemium-footer img {
  display: inline-block;
  vertical-align: middle;
}
.freemium-footer .row {
  margin: 0 auto;
  max-width: 1000px;
  width: 100%;
  height: 100%;
  flex-wrap: nowrap;
}
.freemium-footer .row:after, .freemium-footer .row:before {
  content: " ";
  display: table;
}
.freemium-footer .row:after {
  clear: both;
}
.freemium-footer .row .row:after, .freemium-footer .row .row:before {
  content: " ";
  display: table;
}
.freemium-footer .row .row:after {
  clear: both;
}
.freemium-footer .columns {
  padding-left: 15px;
  padding-right: 15px;
  width: 100%;
  float: left;
  max-height: 100%;
}
.freemium-footer .columns + .columns:last-child {
  float: right;
}
@media only screen {
  .freemium-footer .columns {
    position: relative;
    float: left;
  }
  .freemium-footer .small-4 {
    width: 33.3333333333%;
  }
  .freemium-footer .small-8 {
    width: 66.6666666667%;
  }
  .freemium-footer .small-12 {
    width: 100%;
  }
}
@media only screen and (min-width: 45.7857142857em) {
  .freemium-footer .columns {
    position: relative;
    float: left;
  }
}
@media only screen and (min-width: 73.2142857143em) {
  .freemium-footer .columns {
    position: relative;
    float: left;
  }
  .freemium-footer .large-3 {
    width: 25%;
  }
  .freemium-footer .large-6 {
    width: 50%;
  }
}
.freemium-footer .button, .freemium-footer button {
  -webkit-appearance: none;
  -moz-appearance: none;
  border-radius: 0;
  border-style: solid;
  border-width: 0;
  cursor: pointer;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
  font-weight: 200;
  line-height: normal;
  margin: 14px 0;
  position: relative;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px 9px 16px;
  font-size: 14px;
  background-color: #ffffff;
  border-color: #ffffff;
  color: #0078C1;
  transition: background-color 0.3s ease-out;
}
.freemium-footer .button:focus, .freemium-footer .button:hover, .freemium-footer button:focus, .freemium-footer button:hover {
  background-color: #f3f2f2;
}
.freemium-footer .button:focus, .freemium-footer .button:hover, .freemium-footer button:focus, .freemium-footer button:hover {
  color: #000000;
}
.freemium-footer .button.large, .freemium-footer button.large {
  padding: 1.2857142857rem 2.5714285714rem 1.3571428571rem 2.5714285714rem;
  font-size: 1.4285714286rem;
}
.freemium-footer .button.small, .freemium-footer button.small {
  padding: 0.5714285714rem 1.1428571429rem 0.6428571429rem 1.1428571429rem;
  font-size: 1.2857142857rem;
}
.freemium-footer .button.radius, .freemium-footer button.radius {
  border-radius: 5px;
}
.freemium-footer .button[disabled], .freemium-footer button[disabled] {
  background-color: #ffffff;
  border-color: #ffffff;
  color: #0078C1;
  box-shadow: none;
  cursor: default;
  opacity: 0.7;
}
.freemium-footer .button[disabled]:focus, .freemium-footer .button[disabled]:hover, .freemium-footer button[disabled]:focus, .freemium-footer button[disabled]:hover {
  background-color: #ffffff;
}
.freemium-footer .button[disabled]:focus, .freemium-footer .button[disabled]:hover, .freemium-footer button[disabled]:focus, .freemium-footer button[disabled]:hover {
  color: #fff;
}
.freemium-footer .button[disabled]:focus, .freemium-footer .button[disabled]:hover, .freemium-footer button[disabled]:focus, .freemium-footer button[disabled]:hover {
  background-color: #ffffff;
}
.freemium-footer button::-moz-focus-inner {
  border: 0;
  padding: 0;
}
@media only screen and (min-width: 45.7857142857em) {
  .freemium-footer .button, .freemium-footer button {
    display: inline-block;
  }
}
.freemium-footer .text-right {
  text-align: right !important;
}
.freemium-footer .text-center {
  text-align: center !important;
}
.freemium-footer div {
  margin: 0;
  padding: 0;
}
.freemium-footer a {
  color: #ff8c1b;
  line-height: inherit;
  text-decoration: none;
}
.freemium-footer a:focus, .freemium-footer a:hover {
  color: #f37800;
}
.freemium-footer a img {
  border: none;
}
.freemium-footer small {
  font-size: 60%;
  line-height: inherit;
}
@media only screen {
  .freemium-footer .show-for-large, .freemium-footer .show-for-large-up, .freemium-footer .show-for-medium, .freemium-footer .show-for-medium-up {
    display: none !important;
  }
}
@media only screen and (min-width: 45.7857142857em) {
  .freemium-footer .show-for-medium, .freemium-footer .show-for-medium-up, .freemium-footer .show-for-small-up {
    display: block !important;
  }
  .freemium-footer .show-for-large, .freemium-footer .show-for-large-up, .freemium-footer .show-for-small {
    display: none !important;
  }
}
@media only screen and (min-width: 73.2142857143em) {
  .freemium-footer .show-for-large, .freemium-footer .show-for-large-up, .freemium-footer .show-for-medium-up, .freemium-footer .show-for-small-up {
    display: block !important;
  }
  .freemium-footer .show-for-medium, .freemium-footer .show-for-small {
    display: none !important;
  }
}
@media only screen and (min-width: 102.928571429em) {
  .freemium-footer .show-for-large-up, .freemium-footer .show-for-medium-up, .freemium-footer .show-for-small-up {
    display: block !important;
  }
  .freemium-footer .show-for-large, .freemium-footer .show-for-medium, .freemium-footer .show-for-small {
    display: none !important;
  }
}
@media only screen and (min-width: 137.214285714em) {
  .freemium-footer .show-for-large-up, .freemium-footer .show-for-medium-up, .freemium-footer .show-for-small-up {
    display: block !important;
  }
  .freemium-footer .show-for-large, .freemium-footer .show-for-medium, .freemium-footer .show-for-small {
    display: none !important;
  }
}
@media print {
  .freemium-footer * {
    background: 0 0 !important;
    box-shadow: none !important;
    color: #000 !important;
    text-shadow: none !important;
  }
  .freemium-footer a, .freemium-footer a:visited {
    text-decoration: underline;
  }
  .freemium-footer a[href]:after {
    content: " (" attr(href) ")";
  }
  .freemium-footer a[href^="#"]:after, .freemium-footer a[href^="javascript:"]:after {
    content: "";
  }
  .freemium-footer img {
    page-break-inside: avoid;
  }
  .freemium-footer img {
    max-width: 100% !important;
  }
  @page {
    .freemium-footer {
      margin: 0.5cm;
    }
  }
}

.freemium-footer > .row {
  max-width: none;
}

.freemium-footer .button {
  padding: 12px 20px;
  font-size: 14px;
  font-weight: 700;
}

.freemium-footer .logo {
  height: 66px;
  display: inline-block;
}

.freemium-footer {
  background: #0082ED;
}

.freemium-footer .center {
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.freemium-footer .logo img {
  width: 100%;
  max-width: 200px;
  margin: 0;
}
</style>
<header class="main-header">
<div class="row text-center">
<div class="columns small-12">
<a class="site-logo" href="https://www.constantcontact.com/uk/web/website/?utm_source=customersites&amp;utm_medium=banner&amp;utm_campaign=websitebuilder"></a>
</div>
</div>
</header>

</div></div><script type="text/javascript">window._isPublished=true;window._site={"globalSections":{"footer":{"id":1,"layout":{"section":{"id":"bajigu79"}},"category":"footers","binding":{"title-navigation":"Pages","title-social":"Follow us","description":"A coaching class from 25 years. Giving an excellent result over the year's.","title":"Click here to edit your title","titleNavigation":"Pages","titleSocial":"Follow us","titleAddress":"Address","titleDescription":"About us","copyright":true,"pagesMenu":true,"_placeholders":{"description":"Add a description here."},"_toggle":{"description":true,"copyrightHelper":true,"dividerToggle":false,"sitemapToggle":false,"global.accounts":false},"addressToggle":true,"background":{"colorIndex":1},"copyrightHelper":"Click here to edit your copyright message","features":["legal"]}}},"theme":{"colors":{"text":[0,0,0],"background":[255,255,255],"accent":[[8,10,82],[235,33,136]],"style":"bright"},"fonts":{"body":{"name":"Montserrat","weight":"400"},"heading":{"name":"Josefin sans","weight":"400"},"fontSize":1},"animations":{"enabled":false},"roundedCorners":false},"globalBinding":{"accounts":{},"menuData":[],"openingHours":{"mon":[{"description":"Closed"}],"tue":[{"description":"Closed"}],"wed":[{"description":"Closed"}],"thu":[{"description":"Closed"}],"fri":[{"description":"Closed"}],"sat":[{"description":"Closed"}],"sun":[{"description":"Closed"}]},"address":{"street":"Gali no. 8 ramnagar","zip":"247667","city":"Ramnagar","state":"Uttarkhand ","country":"INDIA"},"translations":{},"logo":{"value":""},"phone":"9897247979","email":"chhayacoachingcentre@gmail.com","companyName":"Chhaya Coaching Centre","title":"Chhaya Coaching Centre","callToAction":{"source":"global.phone","title":"Call"},"legal":{"privacyPolicy":{"showCookieBanner":true,"bannerPosition":"bottom","bannerText":"This site uses cookies","agreeButtonText":"I'm okay with that","privacyPolicyText":""},"termsOfService":{"termsOfServiceText":""}},"description":"","coverPhoto":"","products":"","about":""},"pages":[{"id":"home","title":"Home","uriPath":"home","showInNavigation":true,"matchUriToTitle":true,"mainPage":true},{"id":1584981040054,"title":"Science ","uriPath":"science-","showInNavigation":true,"matchUriToTitle":true,"mainPage":false},{"id":1584981613765,"title":"Maths","sections":[{"id":2078,"layout":{"section":{"id":"noduwa21"}},"category":"videos","binding":{"button":{"href":"page:1584981040054","linkType":"page","styles":{"background":"","border":""},"background":"","border":"","title":"Read more"},"video":{"type":"youtube","videoId":"xoO84y6CWDg","videoUrl":"https://www.youtube.com/watch?v=xoO84y6CWDg","autoPlay":0,"loop":0},"description":"Add a description here.","subtitle":"Learn more about what we do","title":"Welcome to our website","_placeholders":{"subtitle":"Learn more about what we do","description":"Add a description here."},"_toggle":{"title":true,"subtitle":true,"description":true,"buttons":false},"dropShadow":true,"sectionSize":"section--lg","contentAlignment":"align-left","fullPage":false,"background":{"colorIndex":0}}},{"id":264,"layout":{"section":{"id":"zoduye36"},"listItem":{"name":"products-1","html":"<div class=\"{{_parent._rowClassNames}} dlist\">\n  <div class=\"content-card default-card {{#if parent.dropShadow}}drop-shadow-md{{/if}}\">\n      {{image \"image\" \"div\" \"photo kv-gallery\"}}\n      <div class=\"bio {{#isOff \"image\"}}no-image{{/isOff}}\">\n        {{text \"title\" \"h3\" \"title title--xs\"}}\n        {{text \"description\" \"p\" \"description body--md\"}}\n        {{#isOn \"buttons\"}}\n          {{button \"link\" \"button-md button-primary button-card\"}}\n        {{/isOn}}\n      </div>\n  </div>\n</div>","html_templates":{},"fields":["parent.dropShadow","image","title","description","link"],"metadata":{"parents":["products/products"],"categories":["products"],"columns":{"minValue":2,"maxValue":3,"default":3},"properties":{"custom":{"aspectRatio":{"options":[{"value":"circle","label":"designer.propertyManager.options.circle"},{"value":"square","label":"designer.propertyManager.options.square"},{"value":"landscape","label":"designer.propertyManager.options.landscape"},{"value":"portrait","label":"designer.propertyManager.options.portrait"}]}},"generic":["image","title","description","buttons"]},"id":"hiluse82"},"css":"\n.hiluse82 .content-card {\n  \n  \n  margin: 30px 0 15px;\n  height: calc(100% - 45px);\n  border-radius: 3px;\n  transition: box-shadow 300ms cubic-bezier(0.19, 1, 0.22, 1); }\n\n\n.hiluse82 .drop-shadow-md:hover {\n  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.04), 0 14px 18px -8px rgba(0, 0, 0, 0.11), 0 12px 12px -5px rgba(0, 0, 0, 0.09), 0 11px 8px 0 rgba(0, 0, 0, 0.03); }\n\n\n.hiluse82 .drop-shadow-md .photo {\n  box-shadow: 0 14px 18px -8px rgba(0, 0, 0, 0.19), 0 12px 12px -5px rgba(0, 0, 0, 0.17), 0 11px 8px 0 rgba(0, 0, 0, 0.08); }\n\n\n.hiluse82 .bio {\n  padding: 0 1.5rem 1.5rem; }\n  \n  .hiluse82 .bio.no-image {\n    padding: 1.5rem; }\n  \n  .hiluse82 .bio h5,\n  .hiluse82 .bio h6,\n  .hiluse82 .bio p {\n    box-sizing: content-box; }\n  \n  .hiluse82 .bio .subtitle {\n    opacity: .54;\n    margin-top: -0.5rem;\n    font-weight: 400; }\n  \n  .hiluse82 .bio .button {\n    margin-top: 1rem; }\n\n\n.hiluse82 .photo {\n  width: 50%;\n  padding-bottom: 50%;\n  border-radius: 50%;\n  background-size: cover;\n  background-position: center center;\n  margin: 0 auto;\n  position: relative;\n  top: -1.5rem;\n  \n  display: flex; }\n  \n  .hiluse82 .photo i {\n    \n    font-size: 3rem;\n    width: 100%;\n    text-align: center;\n    align-self: center; }\n\n@media (min-width: 768px) {\n  \n  .hiluse82 .col-lg-12 .content-card {\n    flex-direction: row;\n    align-items: center; }\n    \n    .hiluse82 .col-lg-12 .content-card .social {\n      justify-content: flex-start; }\n    \n    .hiluse82 .col-lg-12 .content-card .bio {\n      justify-content: center; }\n    \n    .hiluse82 .col-lg-12 .content-card .photo {\n      margin: 2rem;\n      transform: none;\n      -webkit-transform: none;\n      -ms-transform: none; }\n    \n    .hiluse82 .col-lg-12 .content-card.flipped {\n      justify-content: space-between; }\n      \n      .hiluse82 .col-lg-12 .content-card.flipped .photo {\n        order: 2; }\n      \n      .hiluse82 .col-lg-12 .content-card.flipped .bio {\n        order: 1; } }\n\n\n.hiluse82 .rounded-corners .content-card {\n  border-radius: .5rem; }\n\n\n.hiluse82 .square .photo {\n  width: 50%;\n  padding-bottom: 50%;\n  border-radius: 0; }\n\n\n.hiluse82 .portrait .photo {\n  width: 50%;\n  padding-bottom: 66.6667%;\n  border-radius: 0; }\n\n\n.hiluse82 .landscape .photo {\n  width: 80%;\n  padding-bottom: 60%;\n  border-radius: 0; }\n\n\n.hiluse82 .rounded-corners .photo {\n  border-radius: .5rem; }\n\n\n.hiluse82 .circle .photo {\n  width: 50%;\n  padding-bottom: 50%;\n  border-radius: 50%; }\n\n\n.hiluse82 .align-left .bio {\n  text-align: left; }\n\n\n.hiluse82 .align-center .bio {\n  text-align: center; }\n\n\n.hiluse82 .social {\n  justify-content: flex-end;\n  transform: translateX(10px); }\n\n","imports":[],"style_variables":[{"style_declaration":"background","style_value":"$card","selector_text":".hiluse82 .content-card","condition_text":null,"variable_name":"$card","parsedVariableName":[{"alpha":1,"name":"card","itteration":0,"isText":false}]},{"style_declaration":"color","style_value":"$text1_card","selector_text":".hiluse82 .content-card","condition_text":null,"variable_name":"$text1_card","parsedVariableName":[{"alpha":1,"name":"card","itteration":0,"isText":false},{"alpha":1,"name":"text","itteration":0,"isText":true}]},{"style_declaration":"background-color","style_value":"$accent1","selector_text":".hiluse82 .photo","condition_text":null,"variable_name":"$accent1","parsedVariableName":[{"alpha":1,"name":"accent","itteration":0,"isText":false}]},{"style_declaration":"color","style_value":"$text1_accent1","selector_text":".hiluse82 .photo i","condition_text":null,"variable_name":"$text1_accent1","parsedVariableName":[{"alpha":1,"name":"accent","itteration":0,"isText":false},{"alpha":1,"name":"text","itteration":0,"isText":true}]}],"path":"products/products-1","id":"hiluse82","properties":{"elements":[{"label":"designer.propertyManager.fields.image","type":"boolean","default":true,"isToggle":true,"isGlobal":false,"whenEmptyInsertLabel":"designer.propertyManager.clickHere","name":"image"},{"label":"designer.propertyManager.fields.title","type":"boolean","default":true,"isToggle":true,"isGlobal":false,"whenEmptyInsertLabel":"designer.propertyManager.clickHere","name":"title"},{"label":"designer.propertyManager.fields.description","type":"boolean","default":true,"isToggle":true,"isGlobal":false,"whenEmptyInsertLabel":"designer.propertyManager.clickHere","name":"description"},{"label":"designer.propertyManager.fields.buttons","type":"boolean","default":true,"isToggle":true,"isGlobal":false,"whenEmptyInsertValue":[],"name":"buttons"}],"layout":[{"type":"select","label":"designer.propertyManager.properties.aspectRatio","category":"layout","options":[{"value":"circle","label":"designer.propertyManager.options.circle"},{"value":"square","label":"designer.propertyManager.options.square"},{"value":"landscape","label":"designer.propertyManager.options.landscape"},{"value":"portrait","label":"designer.propertyManager.options.portrait"}],"default":"landscape","name":"aspectRatio"}]}},"columns":3},"category":"products","binding":{"list":[{"link":{"href":"page:contact","linkType":"page","styles":{"background":"","border":""},"background":"","border":"","title":"Watch Now"},"icon":{"value":"fa-user-o"},"image":{"value":"https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjU1MTN9"},"title":"Lect-Date","description":"For class , by Mannu Sir","__index":0},{"link":{"href":"page:contact","linkType":"page","styles":{"background":"","border":""},"background":"","border":"","title":"Watch Now"},"icon":{"value":"fa-user-o"},"image":{"value":"https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjU1MTN9"},"title":"Lect-Date","description":"For Class , By Mannu Sir","__index":1},{"link":{"href":"page:contact","linkType":"page","styles":{"background":"","border":""},"background":"","border":"","title":"Watch Now"},"icon":{"value":"fa-user-o"},"image":{"value":"https://images.unsplash.com/photo-1531312267124-cd1f431feb1e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjU1MTN9"},"title":"Lect-Date","description":"For Class, By Mannu Sir","__index":2}],"title":"Previous Videos","description":"Previous videos of Maths","_placeholders":{"description":"Add a description here."},"_toggle":{"title":true,"subtitle":false,"description":true,"_list-item":{"image":true,"title":true,"description":true,"buttons":true}},"dropShadow":true,"contentAlignment":"align-center","sectionSize":"section--lg","aspectRatio":"landscape","background":{"colorIndex":0}}},{"id":1522,"layout":{"section":{"id":"parize09"}},"category":"countdown","binding":{"datetime":"Tue Mar 31 2020 08:22:20 GMT+0530 (India Standard Time)","description":"","subtitle":"Our next lecture of Maths will be there soon!","title":"Countdown For Next Lecture","_placeholders":{"subtitle":"Our next release will be there soon!","description":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident velit, eius voluptatem quasi quas maxime."},"_toggle":{"title":true,"subtitle":true,"description":false},"contentAlignment":"align-center","sectionSize":"section--lg","background":{"colorIndex":0,"img":{"value":"https://images.mywebsitebuilder.com/s/?https://images.unsplash.com/photo-1489533119213-66a5cd877091?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjU1MTN9","altText":"white ceramic mug on table","originalSize":{"width":2678,"height":1785}},"imgIsFromSectionPrefer":true,"opacity":50,"color":[80,80,80]},"features":["countdown"]}}],"uriPath":"maths","showInNavigation":true,"matchUriToTitle":true,"mainPage":false,"headerSection":{"id":14,"layout":{"section":{"id":"lahuni83"}},"category":"headers","binding":{"title":"Chhaya Coaching Centre","subtitle":"You can view your lecture from here","description":"","buttons":[{"href":"page:1584981613765","id":"01","linkType":"page","styles":{"background":"","border":""},"background":"","border":"","title":"Lecture-Maths","buttonClass":"button-","colorClass":"primary","activeTab":-1},{"href":"page:1584981040054","id":2,"linkType":"page","styles":{"background":"","border":""},"background":"","border":"","title":"Lecture-Science","buttonClass":"button-","colorClass":"primary","icon":false,"activeTab":-1}],"fullPage":false,"_placeholders":{"subtitle":"It's nice to meet you","description":"Write something here to introduce yourself to your audience."},"_toggle":{"title":true,"subtitle":true,"description":false,"buttons":true,"global.callToAction":false,"global.title":true,"global.logo":false},"fixedNavigation":true,"fitText":true,"contentAlignment":"align-center","background":{"colorIndex":1},"cover":false,"companyName":"Chhaya Coaching Centre","arrow":true,"features":["navigation"]}}},{"id":1584981992366,"title":"Doubts","uriPath":"doubts","showInNavigation":true,"matchUriToTitle":true,"mainPage":false}],"metadata":{"siteDescription":"","siteKeywords":"","socialShareImage":"","googleAnalyticsKey":"","faviconUrl":"","siteName":"","siteDomain":"","siteHeaderHtml":"","siteFooterHtml":"","language":"en","companyName":"Chhaya Coaching Centre","templateName":"other","topicId":1567,"verticalId":"5d7125ff-c71d-47a3-b428-df94e8f50849","addedPageTypes":["store/landing-page","store/product-detail"]},"datasources":{},"apiKeys":{},"urls":{"re_api":"https://app-gateway.websitebuilder.com/express-editor","hosting_api":"undefined","dataproxy":"https://data.mywebsitebuilder.com"},"language":"en-US","featureStorage":{},"globalFeatureModel":{},"navigation":[{"id":1584980776329,"pageId":"home","order":0},{"id":1584980780452,"pageId":"gallery","order":4},{"id":1584981610289,"pageId":1584981315237,"order":7},{"id":1584981613932,"pageId":1584981613765,"order":9},{"id":1584981628397,"pageId":"contact","order":10},{"id":1584981721772,"pageId":1584981040054,"order":11},{"id":1584981939275,"pageId":1584981939101,"order":12},{"id":1584981992512,"pageId":1584981992366,"order":13}],"calculatedColors":{"background":"rgb(255, 255, 255)","text":"rgb(0, 0, 0)","title":"rgb(8, 10, 82)","buttonBackground":"rgb(8, 10, 82)","buttonText":"rgb(255, 255, 255)"},"siteId":49880409,"partnerId":3,"environment":"prod"};</script><span id="font-measurement-dummy" style="visibility: hidden; position: absolute; top: 0px; left: 0px; white-space: nowrap; font-size: 16px; font-family: Montserrat;"><br>Chhaya Coaching Centre<br></span></body></html>
