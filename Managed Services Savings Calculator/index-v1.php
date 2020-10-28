<!DOCTYPE HTML>
<html lang="en">

<head><meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Savings Calculator </title>
	
	<link type="text/css" rel="stylesheet" href="assets/css/roical-v1.css" media="all">
  <link type="text/css" rel="stylesheet" href="assets/css/range-res.css" media="all">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://codepen.io/nosurprisethere/pen/rJzKOe"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>

  <!-- font-family-links -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- font-family-links -->
    
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
	
	<style>

 .page-wrapper *{box-sizing:border-box;}
 .page-wrapper .content-wrap{padding:120px 0;max-width:1280px;}
 /*h1, h2, h3, h4, h5{font-family:'gilroybold';-webkit-font-feature-settings:"liga" 0, "clig" 0;-moz-font-feature-settings:"liga" 0, "clig" 0;font-feature-settings:"liga" 0, "clig" 0;}*/
 p{font-size:18px;font-weight: 500;}
.inline-block {display: inline-block;}
 .flex-wrap{display:flex;align-items:center;}
 .flex-wrap>div{width:50%;}
 .flex-item2{padding:0 0 0 50px;}
 .flex-item1{padding:0 50px 0 0;}
 #block-system-main, #block-panels-mini-product-menu{background:#eef0fc; width:102%;}
 .banner-sec{padding:50px 0;text-align:center;}
 .banner-sec p{max-width:720px;margin:0 auto;}
 .zc-calc-part{border-radius:50px;background:#fff;display:table;box-shadow:0 0 50px rgba(0, 0, 0, 0.3);margin-bottom:;}
 .zc-calc-area h4{text-align:center;}
 /*.zc-calc-part>div{padding:50px;display:table-cell;box-sizing:border-box;vertical-align:middle }
 .zc-calc-part>div.zc-calc-area{width:68%;}*/
 .input-val-sec{padding:10px 0 20px;}
 .team-entry-sec{display:table;}
 .team-entry-sec h3{margin-bottom:0;}
 .team-entry-sec div{width:50%;display:table-cell;padding-right:10px;vertical-align:middle;}
 .team-entry-sec div:nth-child(2){width:30%;}
 input[type="text"]{width:100%;height:40px;line-height:32px;font-size:30px;border:none;border-bottom:2px solid #6549d8;margin-bottom:0px;box-sizing:border-box;max-width:100%;padding:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;}
 .calc-val-hint{font-size:16px;padding-top:10px;display:block;color:#666;}
 .slider-calc-sec{margin:50px 0;position:relative;}
 .slider-calc-sec h3{margin-bottom:40px;font-size:24px;}
 .slider-calc-sec h3 span{font-size:18px;color:#666;}
 .slider-calc-sec li{display:inline-block;width:19%;box-sizing:border-box;padding:0 30px 0 0;vertical-align:top;}
 .slider-calc-sec li:first-child{width:24%;}
 .slider-calc-sec li:last-child{padding:0 0 0 0;}
 .slider-calc-sec li h5{max-width:150px;margin-bottom:30px;}
 span.zslider-hl{position:absolute;width:0%;height:1px;top:50%;background:#47A6F1;z-index:2;left:0;}
 .show-signup-btn{position:absolute;width:85%;text-align:center;box-sizing:border-box;bottom:20px;opacity:0;visibility:hidden;transition:0.5s ease;}
 .show-signup-btn.show-btn{opacity:1;visibility:visible;}
 p.pay-info{padding:0;margin:0;}
 .zslider-input{height:20px;position:relative;width:100%;}
 #zslider-line{display:block;background:#d5d5d5;height:1px;position:absolute;left:0;top:50%;width:100%;margin-top:-0.5px;}
 #zslider-ball{position:absolute;width:20px;height:20px;background:#47A6F1;border-radius:100%;left:0;top:0;box-sizing:border-box;border:1.5px solid #fff;cursor:pointer;}
 .zbreakup-container{overflow:hidden;margin-top:25px;}
 .zbreakup{width:14%;margin:0 3%;float:left;text-align:center;border:1px solid #B9B9B9;border-radius:8px;padding:8px;line-height:1;box-sizing:border-box;position:relative;opacity:0.3;transition:all 0.5s ease;}
 .zbreakup.zshow{border:1px solid #47A6F1;opacity:1;}
 .user-limit{font-size:12px;display:block;}
 .zbreakup::after{content:"+";position:absolute;left:-28%;font-family:proxima_novasemibold;font-size:22px;top:50%;margin-top:-11px;}
 .zbreakup.zbreakup1::after{display:none;}
 .xslide{position:relative;box-sizing:border-box;width:45px;height:100%;margin-top:-28px;}
 .xslide .xslide-bg{position:absolute;top:0;left:0;right:0;bottom:0;background-color:#ccc;border-radius:5px;}
 .zcal-button em:before{transform:rotate(-55deg);top:3px;right:-1px;}
 .xslide .xslide-handle-wrapper{position:absolute;top:1px;left:1px;right:1px;bottom:1px;}
 .xslide .xslide-handle-wrapper .xslide-handle{position:absolute;top:0;left:0;width:40px !important;height:40px !important;line-height:1.1 !important;background:#ff7b00;border:1px solid #fff;box-sizing:border-box;border-radius:100%;cursor:pointer;}
 .xslide .xslide-handle-wrapper .xslide-handle[data-isdrag="false"]{}
 .xslide[data-disabled="true"] .xslide-handle{cursor:not-allowed;}
 .xslide[data-direction="horizontal"] .xslide-bg{top:50%;height:1px;transform:translate(0, -50%);}
 .xslide[data-direction="horizontal"] .xslide-handle{top:50%;transform:translate(0, -50%);}
 .xslide[data-direction="vertical"] .xslide-bg{left:50%;width:5px;transform:translate(-50%, 0);}
 .xslide[data-direction="vertical"] .xslide-handle{left:0;width:10px;}
 .xslide-tooltip{display:none;}
 .xslide.mobile .xslide-bg{border-radius:15px;box-shadow:0 1px 1px rgba(0, 0, 0, 0.3) inset;}
 .xslide.mobile .xslide-handle-wrapper .xslide-handle{width:36px;height:36px;border-radius:36px;box-shadow:0 2px 5px rgba(0, 0, 0, 0.8);border:1px solid #5F5F5F;}
 .xslide.mobile[data-direction="horizontal"] .xslide-bg{height:16px;}
 .xslide.mobile[data-direction="vertical"] .xslide-bg{width:16px;}
 .zslider{height:150px;position:relative;width:auto;}
 .cal-users-val,.cal-users-val-m{width:40px;font-size:16px;border-radius:0;-moz-appearance:none;border:none;padding:0;float:left;height:40px;background:#00b36b;line-height:1;color:#fff;text-align:center;cursor:grab;margin:-1px 0 0 -1px;border:1px solid #fff;border-radius:100%;}
 .zc-calc-part>div.zc-result-area{/*width:32%;*/background:#6549d8;border-radius:0 50px 50px 0;color:#fff;padding:50px 30px;position:relative;}
 .zc-result-area::after{position: absolute;width: 100%;left: 0;top: 0;content: "";background-image: url('../sites/default/files/creator/header-bg.png');width: 100%;height: 100%;opacity: 0;transition: 1s;transform: scale(.1);background-size: 260%;background-position: 120px 40px;}
 .zc-result-area.animate::after{opacity:1;//height:100%;transform:scale(1) }
 .zc-result-area>div{background:#fff;padding:3em 3em;display:inline-block;border-radius:10px;color:#002e5b;font-family:'Montserrat', sans-serif;text-align:center;transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-box:fill-box;transform:scale(0);position:relative;opacity:0;z-index:9;}
 .zc-result-area>div.show-result{animation:bounceIn .95s 1;animation-timing-function:ease-in;animation-fill-mode:forwards;animation-delay:0.1s;}
 @-webkit-keyframes bounceIn{0%, 20%, 40%, 60%, 80%, to{-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);animation-timing-function:cubic-bezier(.215, .61, .355, 1) }
 0%{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3) }
 20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1) }
 40%{-webkit-transform:scale3d(.9, .9, .9);transform:scale3d(.9, .9, .9) }
 60%{opacity:1;-webkit-transform:scale3d(1.03, 1.03, 1.03);transform:scale3d(1.03, 1.03, 1.03) }
 80%{-webkit-transform:scale3d(.97, .97, .97);transform:scale3d(.97, .97, .97) }
 to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1) }
 }
 @keyframes bounceIn{0%, 20%, 40%, 60%, 80%, to{-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);animation-timing-function:cubic-bezier(.215, .61, .355, 1) }
 0%{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3) }
 20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1) }
 40%{-webkit-transform:scale3d(.9, .9, .9);transform:scale3d(.9, .9, .9) }
 60%{opacity:1;-webkit-transform:scale3d(1.03, 1.03, 1.03);transform:scale3d(1.03, 1.03, 1.03) }
 80%{-webkit-transform:scale3d(.97, .97, .97);transform:scale3d(.97, .97, .97) }
 to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1) }
 }
 .bounceIn{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-name:bounceIn;animation-name:bounceIn }
 .zc-result-area>div h4{margin:0;}
 .calculated-result-area, .calculated-result-area-m{margin-top:20px;text-align:center;}
 .calculated-result, .calculated-result-m{font-family:'Montserrat', sans-serif;font-size:30px;color:#fde428;display:inline-block;line-height:1;}
 .currecy-symbol, .currecy-symbol-m{display:inline-block;padding:5px;font-size:30px;}
 .calc-val-hint .currecy-symbol{display:inline-block;padding:0;font-style:normal;font-size:inherit;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'Montserrat', sans-serif;font-size:33px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:50px;display:block;}
 .calc-btn-sec{text-align:center;}
 /*.calc-btn{background:#00b36b;border:1px solid #00b36b;color:#fff;cursor:pointer;font-size:18px;padding:15px 40px;font-family:'proxima_nova_rgbold';width:100%;box-sizing:border-box;text-transform:uppercase;-webkit-appearance:none;-moz-appearance:none;appearance:none;max-width:300px;margin:0 auto;display:inline-block;}*/
 .addons-info-sec{padding:0 0 60px;display:table;}
 .note{display:table-cell;width:70%;padding:0 5% 0 0;font-size:14px;}
 .note p{font-size:14px;margin-bottom:10px;}
 .zcal-container-d, .calculated-result-area{display:block;}
 .zcal-container-m, .calculated-result-area-m{display:none;}
 @media all and (max-width:1140px){}
 @media all and (min-width:1200px) and (max-width:1360px){.slider-calc-sec li h5{font-size:14px;min-height:55px;}
 .team-entry-sec h3{margin-bottom:0;font-size:24px;}
 }
 @media all and (min-width:992px) and (max-width:1199px){.content-wrap{width:90%;}
.zc-result-area > div h4{font-size: 20px;}
 .page-wrapper .content-wrap{padding:90px 0;}
 .zc-calc-part>div.zc-result-area, .zc-calc-part>div.zc-calc-area{width:100%;border-radius:50px;display:block;}
 .show-signup-btn{position:relative;width:100%;bottom:auto;margin:50px auto 0;}
 .zc-result-area>div{display:block;max-width:450px;margin:0 auto;}
 .slider-calc-sec{text-align:center;}
 .xslide{margin:-28px auto 0;}
 .slider-calc-sec li h5{max-width:100%;}
 .slider-calc-sec li{display:inline-block;width:18%;}
 .input-val-sec{padding:30px 0 20px;max-width:630px;margin:0 auto;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-size:80px;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-size:60px;}
 .calculated-result, .calculated-result-m{font-size:90px;}

 .slider-calc-sec li h5{min-height:55px;}
 }
 @media all and (max-width:991px){.zcal-container-m, .calculated-result-area-m{display:block;}
 .zcal-container-d, .calculated-result-area{display:none;}
 .content-wrap{width:90%;}
 .page-wrapper .content-wrap{padding:90px 0;}
 .zc-calc-part>div.zc-result-area, .zc-calc-part>div.zc-calc-area{width:100%;border-radius:50px;display:block;}
 .show-signup-btn{position:relative;width:100%;bottom:auto;margin:50px auto 0;}
 .zc-result-area>div{display:block;max-width:450px;margin:0 auto;}
 .slider-calc-sec{text-align:center;}
 .xslide{margin:-28px auto 0;}
 .slider-calc-sec li h5{max-width:100%;}
 .slider-calc-sec li{display:inline-block;width:18%;}
 .input-val-sec{padding:30px 0 20px;max-width:630px;margin:0 auto;}
.slider-calc-sec{text-align:left;}
.slider-calc-sec li, .slider-calc-sec li:first-child, .slider-calc-sec li:last-child{display:inline-block;width:50%;text-align:left;padding:0 50px 50px 0;}
.xslide{margin:0;width:100%;height:10px;}
.xslide[data-direction="horizontal"] .xslide-bg{top:50%;height:5px;transform:translate(0, -50%);}
.slider-calc-sec li h5{max-width:100%;margin-bottom:10px;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:80px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:60px;display:block;}
.zc-calc-part {
    margin-bottom: 50px;
display: block;
}
 }
 @media all and (max-width:767px){
.slider-calc-sec{margin-bottom: 0;}
.zc-calc-part{display: block; max-width: 600px; margin: 0 auto 50px;}
.zc-calc-part > div.zc-result-area, .zc-calc-part > div.zc-calc-area{padding:30px;}
.team-entry-sec div, .team-entry-sec div:nth-child(2){width:100%;display:block;}
.slider-calc-sec li, .slider-calc-sec li:first-child, .slider-calc-sec li:last-child{display:block;width:100%;text-align:left;padding:0 0 60px 0;}
.calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:70px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:50px;display:block;}
.note {
    display: block;
    width: 100%;
    padding: 0 5% 30px 0;
    font-size: 14px;
}
.zc-calc-part > div.zc-result-area, .zc-calc-part > div.zc-calc-area {
    border-radius: 30px;
}
zc-result-area > div {
padding: 20px;
}
}
@media all and (max-width:480px){
.calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:60px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:40px;display:block;}
.zc-result-area > div h4 {
    font-size: 16px;
}
}

$shade-10: #2c3e50 !default;
$shade-1: #d7dcdf !default;
$shade-0: #fff !default;
$teal: #1abc9c !default;

// Reset
* {
  &,
  &:before,
  &:after {
    box-sizing: border-box;
  }
}

body {
  
  
  @media (min-width: 600px) {
    padding: 60px;
  }
}

.range-slider {
  margin: 55px 0 0 0;
}


// Range Slider
$range-width: 100% !default;

$range-handle-color: $shade-10 !default;
$range-handle-color-hover: $teal !default;
$range-handle-size: 20px !default;

$range-track-color: $shade-1 !default;
$range-track-height: 10px !default;

$range-label-color: $shade-10 !default;
$range-label-width: 60px !default;

.range-slider {
  width: $range-width;
}

.range-slider__range {
  -webkit-appearance: none;
  width: calc(100% - (#{$range-label-width + 13px}));
  height: $range-track-height;
  border-radius: 5px;
  background: $range-track-color;
  outline: none;
  padding: 0;
  margin: 0;

  // Range Handle
  &::-webkit-slider-thumb {
    appearance: none;
    width: $range-handle-size;
    height: $range-handle-size;
    border-radius: 50%;
    background: $range-handle-color;
    cursor: pointer;
    transition: background .15s ease-in-out;

    &:hover {
      background: $range-handle-color-hover;
    }
  }

  &:active::-webkit-slider-thumb {
    background: $range-handle-color-hover;
  }

  &::-moz-range-thumb {
    width: $range-handle-size;
    height: $range-handle-size;
    border: 0;
    border-radius: 50%;
    background: $range-handle-color;
    cursor: pointer;
    transition: background .15s ease-in-out;

    &:hover {
      background: $range-handle-color-hover;
    }
  }

  &:active::-moz-range-thumb {
    background: $range-handle-color-hover;
  }
  
  // Focus state
  &:focus {
    
    &::-webkit-slider-thumb {
      box-shadow: 0 0 0 3px $shade-0,
                  0 0 0 6px $teal;
    }
  }
}


// Range Label
.range-slider__value {
  display: inline-block;
  position: relative;
  width: $range-label-width;
  color: $shade-0;
  line-height: 20px;
  text-align: center;
  border-radius: 3px;
  background: $range-label-color;
  padding: 5px 10px;
  margin-left: 8px;

  &:after {
    position: absolute;
    top: 8px;
    left: -7px;
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-right: 7px solid $range-label-color;
    border-bottom: 7px solid transparent;
    content: '';
  }
}


// Firefox Overrides
::-moz-range-track {
    background: $range-track-color;
    border: 0;
}

input::-moz-focus-inner,
input::-moz-focus-outer { 
  border: 0; 
}

.calculated-result1, .calculated-result1-m {
     font-family:'Montserrat', sans-serif;
    font-size: 30px;
    color: #fde428;
    display: inline-block;
    line-height: 1;
}
.calculated-result2, .calculated-result2-m {
     font-family:'Montserrat', sans-serif;
    font-size: 30px;
    color: #fde428;
    display: inline-block;
    line-height: 1;
}
.calculated-result3, .calculated-result3-m {
     font-family:'Montserrat', sans-serif;
    font-size: 30px;
    color: #fde428;
    display: inline-block;
    line-height: 1;
}
.ns{
margin-top:48px;
margin-bottom:-41px;
}

.range {
  position: relative;
  width: 550px;
  height: 5px;
}

.range input {
  width: 84%;
  position: absolute;
  top: 2px;
  height: 0;
  -webkit-appearance: none;
}
.range input::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 18px;
  height: 18px;
  margin: -8px 0  0;
  border-radius: 50%;
  background: #6549d8;
  cursor: pointer;
  border: 0 !important;
}
.range input::-moz-range-thumb {
  width: 18px;
  height: 18px;
  margin: -8px 0  0;
  border-radius: 50%;
  background: #37adbf;
  cursor: pointer;
  border: 0 !important;
}
.range input::-ms-thumb {
  width: 18px;
  height: 18px;
  margin: -8px 0  0;
  border-radius: 50%;
  background: #37adbf;
  cursor: pointer;
  border: 0 !important;
}
.range input::-webkit-slider-runnable-track {
  width: 100%;
  height: 2px;
  cursor: pointer;
  background: #b2b2b2;
}
.range input::-moz-range-track {
  width: 100%;
  height: 2px;
  cursor: pointer;
  background: #b2b2b2;
}
.range input::-ms-track {
  width: 100%;
  height: 2px;
  cursor: pointer;
  background: #b2b2b2;
}
.range input:focus {
  background: none;
  outline: none;
}
.range input::-ms-track {
  width: 100%;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}

.range-labels {
  margin: 18px -41px 0;
  padding: 0;
  list-style: none;
}
.range-labels li {
  position: relative;
  float: left;
  width: 90.25px;
  text-align: center;
  font-family: 'Montserrat', sans-serif;
  /*color: #b2b2b2;*/
  /*font-size: 14px;*/
  cursor: pointer;
}
.range-labels li::before {
  position: absolute;
  top: -25px;
  right: 0;
  left: 0;
  content: "";
  margin: 0 auto;
  width: 9px;
  height: 9px;
  background: #fde428;
  border-radius: 50%;
}
.range-labels .active {
  color: #002e5b;
}
.range-labels .selected::before {
  background: #fde428;
}
.range-labels .active.selected::before {
  display: none;
}

.irs--flat .irs-bar {
    top: 25px;
    height: 12px;
    background-color: #6549d8;
}
.irs--flat .irs-from, .irs--flat .irs-to, .irs--flat .irs-single {
    color: white;
    font-size: 10px;
    line-height: 1.333;
    text-shadow: none;
    padding: 1px 5px;
    background-color: #6549d8;
    border-radius: 4px;
  }
  
  .irs--round .irs-from, .irs--round .irs-to, .irs--round .irs-single {
    font-size: 15px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
    line-height: 1;
    text-shadow: none;
    padding: 3px 5px;
    background:none;
    color: #002e5b;
    border-radius: 4px;
    box-shadow: 0 1px 3px rgb(253 228 40 / 0.5);
  }
  .irs--round .irs-handle {
    top: 26px;
    width: 20px;
    height: 20px;
    background-color: #fde428;
    border-radius: 24px;
    }

    .div2 {
  width: 548;
  /*height: 100px;  */
 /* padding: 50px;*/
  border: 3px solid #002e5b;
}
 .div3 {
 
    /* height: 100px; */
    /* padding: 50px; */
    margin-top: 24px;
    /* margin-bottom: 16px; */
    padding-bottom: 36px;
    border: 3px solid #002e5b;
}

 .Circle {
    border-radius: 50%;
   /* width: 36px;
    height: 36px;*/
    padding: 8px;

    background: #fff;
    border: 2px solid #002e5b;
    color: #002e5b;
    text-align: center;
margin-right: 2px;
margin-left: -33px;
    font: 13px Arial, sans-serif;
}

.zc-result-area1>div {
    background: #fff;
    padding: 3em 3em;
    display: inline-block;
    border-radius: 10px;
    color: #002e5b;
    font-family: 'Montserrat', sans-serif;
    /* text-align: center; */
    transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    transform-box: fill-box;
    transform: scale(0);
    position: relative;
    opacity: 0;
    z-index: 9;
}
</style>
</head>
<body class="html not-front not-logged-in no-sidebars page-node-65687 node-type-just-html og-context-node-100 i18n-en bg-gray">
	

<section class="main">
  <div class="container-fluid pad-zero-cf">
    <div  class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 pad-zero">
          <div class="left-out">
            <div class="zc-calc-area">
                          <h3 class="blue-text mb-30px center left fw-600"> Managed Services Savings Calculator</h3>
                          <div class="input-val-sec">


                           
                            <div class="mt-30">
                            <div class="range-slider">
                            <!-- <div class="row"> -->
                              <div class="col-sm-12">
                          <h5 class="blue-text fw-500 mb-25px"><b class="Circle">1</b> Total Number of Members in a Typical Project<b style="color: red;">*</b></h5>
                          <p class="" style="font-size: 13px;"><b style="color: #002e5b;">*</b>For more then 6 members, please contact us via the <b>form</b> below</p><br>
  <div class="range range-991">
  <input type="range" min="1" max="6" id="teamvalue" steps="1" value="1" >
</div>

<ul class="range-labels">
  <li class="active selected">1</li>
  <li>2 </li>
  <li>3 </li>
  <li>4 </li>
  <li>5 </li>
  <li>6</li>
  
</ul><br>


                          
                          </div>
                        
                          
                            <!-- </div> -->
                          </div>
                        </div>
                            
                          <div class="range-slider">
                            <!-- <div class="row"> -->
                              <div class="mt-6em">
                              <div class="col-sm-12">
                          <h5 class="blue-text fw-500 mb-25px">
                            <b class="Circle">2</b> AS IS  : Average Hourly Rate per Member (USD/Hr) <b style="color: red;">*</b>
                          </h5>
                          <input type="text" class="demo_10"  id="teamvalue3" name="my_range" value="" />
                          </div>
                        </div><br>
                        
                         <div class="div2">
                          <p class="blue-text mt-40px" style="margin: auto;">TO BE : Managed Services Blended Rate  at<b> $ 20</b> USD/Hr</p>
                          <p class="" style="font-size: 13px;"><b style="color: red;">*</b>20 USD per hour is typical hourly rate for remore NectarSpot Developers, but it might very depending upon complexity of project/engagement. </p>
                          
                        </div>
                            <!-- </div> -->
                          </div>
                          <div class="mt-4em">
                            
                             <h5 class="blue-text center left fw-600" style="font-size: 20px;"><b class="Circle">3</b> Approximate number of hours spent by each of your developers on following tasks:</h5>
                          </div>

                          
                            <div class="div3">
                              
                              <div class="col-sm-12">
                              <div class="range-slider">

                          <h5 class="blue-text fw-500 mb-25px">Application Development and Enhancements</h5>
                            <input type="text" class="demo_09"  id="hour1" name="my_range" value="0" />

                            </div>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="row"> -->
                            <div class="col-sm-12">
                            <div class="range-slider">
                          <h5 class="blue-text fw-500 mb-25px">Application Support and Maintenance</h5>
                            <input type="text" class="demo_09"  id="hour2" name="my_range" value="0" />
                            </div>
                            </div>
                          <!-- </div> -->


                         <!--  <div class="row"> -->
                              <div class="col-sm-12">
                              <div class="range-slider">
                          <h5 class="blue-text fw-500 mb-25px">Data Base Backup, Security Monitoring etc.</h5>
                             <input type="text" class="demo_09"  id="hour3" name="my_range" value="0" />
                            </div>
                            </div>
                          <!-- </div> -->
                          <!-- <div class="row"> -->
                            <div class="col-sm-12">
                            <div class="range-slider">
                          <h5 class="blue-text fw-500 mb-25px">Project Management Tasks</h5>
                            <input type="text" class="demo_09"  id="hour4" name="my_range" value="0" />
                            </div>
                            </div>
                          <!-- </div> -->


                          <!-- <div class="row"> -->
                              <div class="col-sm-12">
                              <div class="range-slider">
                          <h5 class="blue-text fw-500 mb-25px">Analytics and Reporting</h5>
                            <input type="text" class="demo_09"  id="hour5" name="my_range" value="0" />
                            </div>
                            </div>
                          <!-- </div> -->
                          <!-- <div class="row"> -->
                            <div class="col-sm-12">
                            <div class="range-slider">
                          <h5 class="blue-text fw-500 mb-25px">Others</h5>
                           <input type="text" class="demo_09"  id="hour6" name="my_range" value="0" />
                            </div>
                            </div>
                            </div>
                            <!-- <div class="row"> -->
                              
                         <!--  </div> -->
                            
                        </div>
                          
                            <div class="mt-40px">
                              <p class="calc-btn-sec">
                                <input name="submit-btn" class="calc-btn btn-yellow" type="submit" value="Calculate Now">
                              </p>
                            </div>
                              </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 right-bg br-20px-r">
          <div class="right-out mar-auto">
            <div class="zc-result-area animate">
                                <div class="show-result">
                                  <h3 class="blue-text fw-600"> Your Savings</h3>
                                  <div class="mt-55px">
                                    <p class="blue-text">Typical Savings Accured in Managed Services Model</p>
                                  </div>

                                  <div class="calculated-result-area">
                                    <span class="currecy-symbol">$</span>
                                    <span class="calculated-result2">0</span>
                                  </div>
                                  
                                  <div class="calculated-result-area-m">
                                    <span class="currecy-symbol-m">$</span>
                                    <span class="calculated-result2-m">0</span>
                                  </div>
                                  <p class="pay-info">Per Day</p>

                                  <div class="calculated-result-area">
                                    <span class="currecy-symbol">$</span>
                                    <span class="calculated-result1">0</span>
                                  </div>
                                  
                                  <div class="calculated-result-area-m">
                                    <span class="currecy-symbol-m">$</span>
                                    <span class="calculated-result1-m">0</span>
                                  </div>
                                  <p class="pay-info">Per month(20 days)</p>

                                  <div class="calculated-result-area">
                                    <span class="currecy-symbol">$</span>
                                    <span class="calculated-result">0</span>
                                  </div>

                                  <div class="calculated-result-area-m">
                                    <span class="currecy-symbol-m">$</span>
                                    <span class="calculated-result-m">0</span>
                                  </div>
                                  <p class="pay-info">Per year(200 days)</p>


                                  <div class="calculated-result-area">
                                    <span class="currecy-symbol">$</span>
                                    <span class="calculated-result3">0</span>
                                  </div>

                                  <div class="calculated-result-area-m">
                                    <span class="currecy-symbol-m">$</span>
                                    <span class="calculated-result3-m">0</span>
                                  </div>
                                  <p class="pay-info">Per year (12months)</p>
                                </div>
                                <br><br>
                                
                            </div>


                             <div class="zc-result-area" >
                                <div class="show-result">
                                  <h3 class="blue-text fw-600"> Contact Us:</h3>
                                  <div class="mt-55px">
                                    <!-- <p class="blue-text">Typical Savings Accured in Managed Services Model</p> -->
                            <p class="blue-text">Contact us at: <a href="tel: +1 630 999 (7768)"> +1 630 999 (7768) </a> </p>
                            <p class="blue-text">Email us at:<a href="mailto:hello@nectarspot.com">hello@nectarspot.com</a></p>
                                  </div>

                                  
                                
                            </div>
                            
                            
                           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




											<!-- <script src="assets/js/roical.js"></script>
											<script src="assets/js/roi.js"> -->
											
										

<script src="assets/js/roiscript.js"></script>
<script type="text/javascript">
	// I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful


// First let's set the colors of our sliders
const settings={
  fill: '#002e5b',
  background: '#002e5b'
}

// First find all our sliders
const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders,(slider)=>{
  // Look inside our slider for our input add an event listener
//   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider.querySelector('input').addEventListener('input', (event)=>{
    // 1. apply our value to the span
    slider.querySelector('span').innerHTML = event.target.value;
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill(slider.querySelector('input'));
});

// This function applies the fill to our sliders by using a linear gradient background
function applyFill(slider) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
  slider.style.background = bg;
}

</script>
<script type="text/javascript">
   $(".demo_10").ionRangeSlider({
        skin: "round",
        grid: true,
        min: 20,
        max: 200,
        from: 0,
        step:1,
        grid_num:6,
        //max_postfix: "+",
        prefix: "$ ",
        // values: [
        //     "20", "40", "60", "80", "100", "120",
        //     "140", "160", "180", "200"
        // ]
       // postfix: " years"
    });


   $(".demo_09").ionRangeSlider({
    skin: "round",
        grid: true,
        min: 0,
        max: 8,
        from: 0,
        step: 1,
        grid_num:8,
       // max_postfix: "+",
        //prefix: "hour",
         postfix: " hour",
    });
    $(".demo_0").ionRangeSlider({
        min: 1,
        max: 6,
        from: 1,
        step: 1,  
        max_postfix: "persons",           // default 1 (set step)
        grid: true,         // default false (enable grid)
        grid_num: 1,        // default 4 (set number of grid cells)
        grid_snap: false 
         // default false (snap grid to step)
    });
</script>
<script type="text/javascript">
  
  var sheet = document.createElement('style'),  
  $rangeInput = $('.range input'),
  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet);

var getTrackStyle = function (el) {  
  var curVal = el.value,
      val = (curVal - 1) * 16.666666667,
      style = '';
  
  // Set active label
  $('.range-labels li').removeClass('active selected');
  
  var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');
  
  curLabel.addClass('active selected');
  curLabel.prevAll().addClass('selected');
  
  // Change background gradient
  for (var i = 0; i < prefs.length; i++) {
    style += '.range {background: linear-gradient(to right, #002e5b 0%, #002e5b ' + val + '%, #fff ' + val + '%, #fff 100%)}';
    style += '.range input::-' + prefs[i] + '{background: linear-gradient(to right, #002e5b 0%, #002e5b ' + val + '%, #002e5b ' + val + '%, #002e5b 100%)}';
  }

  return style;
}

$rangeInput.on('input', function () {
  sheet.textContent = getTrackStyle(this);
});

// Change input value on label click
$('.range-labels li').on('click', function () {
  var index = $(this).index();
  
  $rangeInput.val(index + 1).trigger('input');
  
});
</script>
											
										</body>

</html>
