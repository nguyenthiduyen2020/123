
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>GokiSoft - Hướng dẫn làm việc trên branch git - git github</title>
<meta name="description" content="hướng dẫn github, hướng dãn sử dụng github, hướng dẫn cài đặt github, hướng dẫn commit github, hướng dẫn đăng ký github, github, git, hướng dẫn sử dung git, hướng dẫn cài đặt git, hướng dẫn commit git">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">

<meta property="og:url" content="http://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" />
<meta property="article:author" content="http://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Hướng dẫn làm việc trên branch git - git github" />
<meta property="og:description" content="hướng dẫn github, hướng dãn sử dụng github, hướng dẫn cài đặt github, hướng dẫn commit github, hướng dẫn đăng ký github, github, git, hướng dẫn sử dung git, hướng dẫn cài đặt git, hướng dẫn commit git" />
<meta property="og:image" content="https://res.cloudinary.com/ziczacgroup/image/upload/v1566363123/jl4q9qek8xzhyffkx3gp.png" />
<meta property="og:locale" content="vi_VN" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Hướng dẫn làm việc trên branch git - git github" />
<meta name="twitter:image:src" content="https://res.cloudinary.com/ziczacgroup/image/upload/v1566363123/jl4q9qek8xzhyffkx3gp.png" />
<meta name="twitter:description" content="hướng dẫn github, hướng dãn sử dụng github, hướng dẫn cài đặt github, hướng dẫn commit github, hướng dẫn đăng ký github, github, git, hướng dẫn sử dung git, hướng dẫn cài đặt git, hướng dẫn commit git" />
<meta name="google-site-verification" content="owoQMlqWmrnzN1_p5GvjIDrNvxyWE72ujK-WaN4wCUY" />


<link rel="icon" type="image/png" href="https://res.cloudinary.com/gokisoft-com/image/upload/v1553571154/ico_copy_uhtlfa.png" />

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/css/util.min.css">

<link rel="stylesheet" type="text/css" href="https://gokisoft.com/themes/gokisoft/css/main.css">

<link href="https://gokisoft.com/themes/gokisoft-old/lib/rainbow/themes/css/monokai.css" rel="stylesheet" type="text/css" media="screen">

<style type="text/css">
    #description img {
        width: 100% !important;
        cursor: pointer;
    }

    .float{
      position:fixed;
      width:50px;
      height:50px;
      bottom:20px;
      right:20px;
      background-color:#0C9;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px #999;
    }

    .my-float{
      margin-top:17px;
    }
</style>
<style type="text/css">
.user-image {
    float: left;
    width: 35px !important;
    height: 35px !important;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: -2px
}
  /* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    /*min-width: 250px;*/ /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #979899; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar.
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes  fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes  fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

pre {
    margin-top: 5px !important;
}
</style>
<link rel="stylesheet" href="https://gokisoft.com/css/vendor/summernote.css">
<style type="text/css">
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 99999999999;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media  screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>


<header>

<div class="container-menu-desktop">
<div class="topbar">
<div class="content-topbar container h-100">
<div class="left-topbar">
<a href="https://gokisoft.com/editor" class="left-topbar-item" target="_blank">
Ghi Chú
</a>
<a href="https://web.gokisoft.com" class="left-topbar-item" target="_blank">
 Thiết Kế Web
</a>
<a href="https://gokisoft.com/login" class="left-topbar-item" style="color: yellow; font-weight: bold;" target="_blank">
My CV
</a>
<a href="https://gokisoft.com/lien-he" class="left-topbar-item">
Liên Hệ
</a>
<a href="https://gokisoft.com/members" class="left-topbar-item">
Học Viên Tích Cực
</a>
<a href="https://gokisoft.com/ung-ho--tai-tro-de-gokisoft-co-the-ra-that-nhieu-khoa-hoc--chia-se-nhieu-kien-thuc-hon-nua-vi-cong-dong.html" class="left-topbar-item" style="color: #36f506; display: none;">
Ủng Hộ
</a>
<a href="https://gokisoft.com/login" class="left-topbar-item">
Đăng Nhập
</a>
</div>
<div class="right-topbar">
<a href="https://www.facebook.com/groups/devAZ/" target="_blank">
<span class="fab fa-facebook-f"></span>
</a>
<a href="#">
<span class="fab fa-twitter"></span>
</a>
<a href="#">
<span class="fab fa-pinterest-p"></span>
</a>
<a href="#">
<span class="fab fa-vimeo-v"></span>
</a>
<a href="https://www.youtube.com/channel/UCd8aIzwdaoQ_Abp3frmeZSA?sub_confirmation=1" target="_blank">
<img src="https://image.flaticon.com/icons/svg/1384/1384060.svg" style="max-height: 35px">
</a>
</div>
</div>
</div>

<div class="wrap-header-mobile">

<div class="logo-mobile">
<a href="https://gokisoft.com"><img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1587623413/qhwncq3wtjkrsyke6ayw.png" alt="IMG-LOGO"></a>
</div>

<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</div>
</div>

<div class="menu-mobile">
<ul class="topbar-mobile">
<li class="left-topbar">
<a href="https://gokisoft.com" class="left-topbar-item">
Học Lập Trình Từ A - Z (HTML/CSS/JS - Bootstrap/JQuery - AngularJS - PHP/Laravel - Java v.v)
</a>
</li>
<li class="right-topbar">
<a href="https://learning.gokisoft.com/admin" class="left-topbar-item">
Đăng Nhập
</a>
<a href="#">
<span class="fab fa-facebook-f"></span>
</a>
<a href="#">
<span class="fab fa-twitter"></span>
</a>
<a href="#">
<span class="fab fa-pinterest-p"></span>
</a>
<a href="#">
<span class="fab fa-vimeo-v"></span>
</a>
<a href="#">
<span class="fab fa-youtube"></span>
</a>
</li>
</ul>
<ul class="main-menu-m">
<li>
<a href="https://gokisoft.com">Trang Chủ</a>
</li>
<li>
<a href="https://gokisoft.com/lap-trinh-c.htm">Lập Trình C</a>
</li>
<li>
<a href="#frontend">Frontend</a>
<ul class="sub-menu-m">
<li><a href="https://gokisoft.com/hoc-html5-css3.htm">Học HTML5 - CSS3</a></li>
<li><a href="https://gokisoft.com/hoc-bootstrap.htm">Học Bootstrap</a></li>
<li><a href="https://gokisoft.com/hoc-js.htm">Học JS</a></li>
<li><a href="https://gokisoft.com/hoc-jquery.htm">Học JQuery</a></li>
</ul>
<span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</li>
<li>
<a href="#backend">Backend</a>
<ul class="sub-menu-m">
<li><a href="https://gokisoft.com/hoc-php.htm">Học PHP</a></li>
<li><a href="https://gokisoft.com/hoc-laravel.htm">Học Laravel</a></li>
</ul>
<span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</li>
<li>
<a href="#java">Java</a>
<ul class="sub-menu-m">
<li><a href="https://gokisoft.com/java-basic.htm">Java Basic</a></li>
<li><a href="https://gokisoft.com/java-advanced.htm">Java Advanced</a></li>
<li><a href="https://gokisoft.com/java-web-ejb-ead.htm">Java Web + EJB (EAD)</a></li>
<li><a href="https://gokisoft.com/java-web-webservice.htm">Java Web + WebService</a></li>
<li><a href="https://gokisoft.com/java-web-ea.htm">Java Web + EA</a></li>
<li><a href="https://gokisoft.com/web-component-development-servjsp.htm">Web Component Development (SERVJSP)</a></li>
<li><a href="https://gokisoft.com/spring-mvc.htm">Spring MVC</a></li>
</ul>
<span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</li>
<li>
<a href="https://gokisoft.com/android.htm">Android</a>
</li>
<li>
<a href="#tools">Tools</a>
<ul class="sub-menu-m">
<li><a href="https://gokisoft.com/git-github.htm">Git/Github</a></li>
</ul>
<span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</li>
<li>
<a href="#khac">Khác</a>
<ul class="sub-menu-m">
<li><a href="https://gokisoft.com/projects.htm">Projects</a></li>
<li><a href="https://gokisoft.com/chia-se-cntt.htm">Chia Sẻ CNTT</a></li>
<li><a href="https://gokisoft.com/c-sharp.htm">C Sharp</a></li>
<li><a href="https://gokisoft.com/sql.htm">SQL</a></li>
<li><a href="https://gokisoft.com/tai-lieu-hoc.htm">Tài Liệu Học</a></li>
</ul>
<span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</li>
</ul>
</div>

<div class="wrap-logo container">

<div class="logo">
<a href="https://gokisoft.com"><img style="height: 65px !important;" src="https://res.cloudinary.com/ziczacgroup/image/upload/v1587623413/qhwncq3wtjkrsyke6ayw.png" alt="LOGO"></a>
</div>

<div class="banner-header">
<a href="https://www.facebook.com/groups/devAZ/" target="_blank"><img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1600320406/tufegz0akqdcgj7e765r.png" alt="Học Lập Trình Từ A - Z (HTML/CSS/JS - Bootstrap/JQuery - AngularJS - PHP/Laravel - Java v.v)"></a>
</div>
</div>

<div class="wrap-main-nav">
<div class="main-nav">

<nav class="menu-desktop">
<a class="logo-stick" href="https://gokisoft.com">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1587623413/qhwncq3wtjkrsyke6ayw.png" alt="LOGO">
</a>
<ul class="main-menu">
<li>
<a href="https://gokisoft.com">Trang Chủ</a>
</li>
<li class="main-menu">
<a href="https://gokisoft.com/lap-trinh-c.htm">Lập Trình C</a>
</li>
<li>
<a href="#frontend">Frontend</a>
<ul class="sub-menu">
<li><a href="https://gokisoft.com/hoc-html5-css3.htm">Học HTML5 - CSS3</a></li>
<li><a href="https://gokisoft.com/hoc-bootstrap.htm">Học Bootstrap</a></li>
<li><a href="https://gokisoft.com/hoc-js.htm">Học JS</a></li>
<li><a href="https://gokisoft.com/hoc-jquery.htm">Học JQuery</a></li>
</ul>
</li>
<li>
<a href="#backend">Backend</a>
<ul class="sub-menu">
<li><a href="https://gokisoft.com/hoc-php.htm">Học PHP</a></li>
<li><a href="https://gokisoft.com/hoc-laravel.htm">Học Laravel</a></li>
</ul>
</li>
<li>
<a href="#java">Java</a>
<ul class="sub-menu">
<li><a href="https://gokisoft.com/java-basic.htm">Java Basic</a></li>
<li><a href="https://gokisoft.com/java-advanced.htm">Java Advanced</a></li>
<li><a href="https://gokisoft.com/java-web-ejb-ead.htm">Java Web + EJB (EAD)</a></li>
<li><a href="https://gokisoft.com/java-web-webservice.htm">Java Web + WebService</a></li>
<li><a href="https://gokisoft.com/java-web-ea.htm">Java Web + EA</a></li>
<li><a href="https://gokisoft.com/web-component-development-servjsp.htm">Web Component Development (SERVJSP)</a></li>
<li><a href="https://gokisoft.com/spring-mvc.htm">Spring MVC</a></li>
</ul>
</li>
<li class="main-menu">
<a href="https://gokisoft.com/android.htm">Android</a>
</li>
<li>
<a href="#tools">Tools</a>
<ul class="sub-menu">
<li><a href="https://gokisoft.com/git-github.htm">Git/Github</a></li>
</ul>
</li>
<li>
<a href="#khac">Khác</a>
<ul class="sub-menu">
<li><a href="https://gokisoft.com/projects.htm">Projects</a></li>
<li><a href="https://gokisoft.com/chia-se-cntt.htm">Chia Sẻ CNTT</a></li>
<li><a href="https://gokisoft.com/c-sharp.htm">C Sharp</a></li>
<li><a href="https://gokisoft.com/sql.htm">SQL</a></li>
<li><a href="https://gokisoft.com/tai-lieu-hoc.htm">Tài Liệu Học</a></li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
</div>
</header>
<div class="container">
<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
<div class="f2-s-1 p-r-30 m-tb-6">
<a href="https://gokisoft.com" class="breadcrumb-item f1-s-3 cl9">
Trang Chủ
</a>
<a href="https://gokisoft.com/tin-tuc" class="breadcrumb-item f1-s-3 cl9">
Chủ Đề
</a>
<span class="breadcrumb-item f1-s-3 cl9">
03. Hướng dẫn làm việc trên branch git - git github
</span>
</div>
<form method="GET">
<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" id="s_tmp" name="q" placeholder="Tìm kiếm">
<button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
<i class="zmdi zmdi-search"></i>
</button>
</div>
</form> </div>
</div>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="https://gokisoft.com/01-huong-dan-quan-ly-du-an-git--github.html" style="font-size: 14pt !important;">1) 01. Hướng dẫn quản lý dự án git + github</a>
<a href="https://gokisoft.com/02-huong-dan-su-dung-github-desktop-git-github.html" style="font-size: 14pt !important;">2) 02. Huong dan su dung github desktop - git github</a>
<a href="https://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" style="font-size: 14pt !important; color: red">3. 03. Hướng dẫn làm việc trên branch git - git github</a>
</div>
<span style="font-size:30px;cursor:pointer;position: fixed; top: 40%; left: 15px;" onclick="openNav()">&#9776;
</span>
<section class="bg0 p-b-140 p-t-10" id="description">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8 p-b-30">
<div class="p-r-10 p-r-0-sr991">

<div class="p-b-70">
<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
03. Hướng dẫn làm việc trên branch git - git github <g:sharetoclassroom url="https://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" size="32"></g:sharetoclassroom>
</h3>
<div class="flex-wr-s-s p-b-40">
<span class="f1-s-3 cl8 m-r-15">
<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
by Trần Văn Điêp
 </a>
<span class="m-rl-3">-</span>
<span>
11:52 21/08/2019
</span>
</span>
<span class="f1-s-3 cl8 m-r-15">
1,545 Lượt Xem
</span>
</div>
<style type="text/css">
							p img {
								width: 100% !important;
							}
						</style>
<div id="menu_post_div" style="display: none; background: #ecebeb; padding: 15px;">
<h1 style="font-weight: bold; text-transform: uppercase; font-size: 14pt;">Menu Bài Viết:</h1>
<ul id="menu_post">
</ul>
</div> <p class="f1-s-11 cl6 p-b-15" id="description_main">
<label style="color: grey; font-weight: bold;">Short URL: <a href="https://gokisoft.com/594">https://gokisoft.com/594</a></label>
<p><iframe frameborder="0" src="//www.youtube.com/embed/MeDq5PvERDw" width="640" height="360" class="note-video-clip"></iframe><br></p>
</p>
<p>
<ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-7242961778697092" data-ad-slot="3026237021"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>
<div class="f1-s-11 cl6 p-b-25" style="border-left: solid 3px green; padding-left: 8px; background-color: #f7f7f7; margin-top: 20px">
<p style="font-weight: bold;">Theo dõi cập nhật nội dung học trên Youtube</p>
<br />
<script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channelid="UCd8aIzwdaoQ_Abp3frmeZSA" data-layout="full" data-count="default"></div>
</div>

<div class="flex-s-s p-t-12 p-b-15">
<span class="f1-s-12 cl5 m-r-8">
Tags:
</span>
<div class="flex-wr-s-s size-w-0">
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-github" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn github">
hướng dẫn github
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%C3%A3n-s%E1%BB%AD-d%E1%BB%A5ng-github" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dãn sử dụng github">
hướng dãn sử dụng github
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-c%C3%A0i-%C4%91%E1%BA%B7t-github" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn cài đặt github">
hướng dẫn cài đặt github
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-commit-github" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn commit github">
hướng dẫn commit github
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-%C4%91%C4%83ng-k%C3%BD-github" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn đăng ký github">
hướng dẫn đăng ký github
</a>
<a href="https://gokisoft.com/tag/github" class="f1-s-12 cl8 hov-link1 m-r-15" title="github">
github
</a>
<a href="https://gokisoft.com/tag/git" class="f1-s-12 cl8 hov-link1 m-r-15" title="git">
git
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-s%E1%BB%AD-dung-git" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn sử dung git">
hướng dẫn sử dung git
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-c%C3%A0i-%C4%91%E1%BA%B7t-git" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn cài đặt git">
hướng dẫn cài đặt git
</a>
<a href="https://gokisoft.com/tag/h%C6%B0%E1%BB%9Bng-d%E1%BA%ABn-commit-git" class="f1-s-12 cl8 hov-link1 m-r-15" title="hướng dẫn commit git">
hướng dẫn commit git
</a>
<a href="#more" onclick="$('.quick_setting_class').toggle()">More</a>
</div>
</div>
</div>

<div>
<h4 class="f1-l-4 cl3 p-b-12">
Bình luận
</h4>
<div class="sharethis-inline-share-buttons"></div>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a73edc97d6e9100131b2337&product=custom-share-buttons"></script>
<br /><br />
<div class="fb-like" data-href="http://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
<div class="fb-comments" data-href="http://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" data-numposts="10" data-width="100%"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s);
             js.id = id;
              js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=1958502331079659&autoLogAppEvents=1';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
<div class="row table-responsive" style="margin-top: 20px;background-color: #eae8e8; padding: 15px">
<div class="col-md-12">
<h3 style="text-transform: uppercase; font-weight: bold; color: black">Chia sẻ từ lớp học</h3>
</div>
<div class="col-md-12" id="comments_id">
</div>
</div>
</div>
</div>
</div>

<div class="col-md-10 col-lg-4 p-b-30">
<div class="p-l-10 p-rl-0-sr991 p-t-70">

<div class="p-b-30">
<div class="how2 how2-cl4 flex-s-c">
<h3 class="f1-m-2 cl3 tab01-title">
Danh Sách Bài Học
</h3>
</div>
<ul class="p-t-35">
<li class="flex-wr-sb-s p-b-22">
<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
1
</div>
<a href="https://gokisoft.com/01-huong-dan-quan-ly-du-an-git--github.html" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03" title="01. Hướng dẫn quản lý dự án git + github">
01. Hướng dẫn quản lý dự án git + github
</a>
</li>
<li class="flex-wr-sb-s p-b-22">
<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
2
</div>
<a href="https://gokisoft.com/02-huong-dan-su-dung-github-desktop-git-github.html" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03" title="02. Huong dan su dung github desktop - git github">
02. Huong dan su dung github desktop - git github
</a>
</li>
<li class="flex-wr-sb-s p-b-22">
<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6" style="background-color: #d0021b !important;">
3
</div>
<a href="https://gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github.html" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03" title="03. Hướng dẫn làm việc trên branch git - git github">
03. Hướng dẫn làm việc trên branch git - git github
</a>
</li>
</ul>
<ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-7242961778697092" data-ad-slot="3026237021"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="p-b-55">
<div class="how2 how2-cl4 flex-s-c m-b-30">
<h3 class="f1-m-2 cl3 tab01-title">
Quick Quizzz!!!
</h3>
</div>
<div class="flex-wr-s-s m-rl--5" style="background: #ecebeb; padding: 8px;">
<div class="form-group" style="width: 100% !important;">
<label>
<img src="https://www.gravatar.com/avatar/fc6ba9324e017d540af3613b3a77dd21.jpg?s=80&amp;d=mm&amp;r=g" class="user-image" alt="User Image" style="width: 35px !important" />
<strong>TRẦN VĂN ĐIỆP</strong>
<p>20:34 23/04/2020</p>
<p style="font-weight: bold;">Bạn thích làm về mảng nào nhất?</p>
</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 0, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index0" index="0"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index0">Lập Trình Mobile Android</label> <img src="https://www.gravatar.com/avatar/fc6ba9324e017d540af3613b3a77dd21.jpg?s=80&d=mm&r=g" title="TRẦN VĂN ĐIỆP" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/af7b1a912cb63a5c2d1432db54b2f2dd.jpg?s=80&d=mm&r=g" title="Trần Văn Điêp" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/ee4661d1f9133c241d6c8287c7ea8ceb.jpg?s=80&d=mm&r=g" title="Trần Mạnh Dũng" class="user-image" alt="User Image" style="width: 35px !important" /><label class="numberCircle">+21</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 1, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index1" index="1"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index1">Lập Trình Frontend</label> <img src="https://www.gravatar.com/avatar/c2ef7c316acb82467912bf5677b52a8b.jpg?s=80&d=mm&r=g" title="Đường Thanh Bình" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/5db166b7b74443c5c221e4c0068d6da9.jpg?s=80&d=mm&r=g" title="Phí Văn Long" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/5a1d730aa7a3ff117afa545ea99d03f3.jpg?s=80&d=mm&r=g" title="Trần Tuấn Anh" class="user-image" alt="User Image" style="width: 35px !important" /><label class="numberCircle">+9</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 2, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index2" index="2"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index2">Lập trình PHP/Laravel</label> <img src="https://www.gravatar.com/avatar/fc6ba9324e017d540af3613b3a77dd21.jpg?s=80&d=mm&r=g" title="TRẦN VĂN ĐIỆP" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/c2ef7c316acb82467912bf5677b52a8b.jpg?s=80&d=mm&r=g" title="Đường Thanh Bình" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/5db166b7b74443c5c221e4c0068d6da9.jpg?s=80&d=mm&r=g" title="Phí Văn Long" class="user-image" alt="User Image" style="width: 35px !important" /><label class="numberCircle">+16</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 3, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index3" index="3"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index3">Theo Java Web (SpringBoot, ...)</label> <img src="https://www.gravatar.com/avatar/c2ef7c316acb82467912bf5677b52a8b.jpg?s=80&d=mm&r=g" title="Đường Thanh Bình" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/98f1e29922dc48dd5d41b8f6cbce24e0.jpg?s=80&d=mm&r=g" title="Đỗ tuấn anh" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/d3627ce786997fab24d1b790c91c6368.jpg?s=80&d=mm&r=g" title="hoangkhiem" class="user-image" alt="User Image" style="width: 35px !important" /><label class="numberCircle">+21</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 4, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index4" index="4"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index4">Theo NodeJS</label> <img src="https://www.gravatar.com/avatar/114894070fbd15fc0c29ffdeab37f4b5.jpg?s=80&d=mm&r=g" title="Vũ Việt Đức" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/565f27ecffbed3df91d80c107af48418.jpg?s=80&d=mm&r=g" title="Nguyen Duc Viet" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/5a1d730aa7a3ff117afa545ea99d03f3.jpg?s=80&d=mm&r=g" title="Trần Tuấn Anh" class="user-image" alt="User Image" style="width: 35px !important" /><label class="numberCircle">+5</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 5, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index5" index="5"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index5">Theo Ruby on Rail</label> <img src="https://www.gravatar.com/avatar/49c73db02b33c675d2086a8998a3ce70.jpg?s=80&d=mm&r=g" title="GokiSoft.Com" class="user-image" alt="User Image" style="width: 35px !important" />
</div>
<div class="checkbox" name="quiz_answer" style="display: flex; margin-top: 8px; margin-bottom: 8px;" onclick="switchQuiz(478, 6, 0)">
<input type="checkbox" style="float: left; margin-top: 12px !important;" id="index6" index="6"><label style="float: left; margin-left: 10px; margin-top: -7px; cursor: pointer; border: solid 1px #f3f3f3; padding: 10px; margin-right: 10px" for="index6">Không biết gì để theo :D :P :D</label> <img src="https://www.gravatar.com/avatar/af7b1a912cb63a5c2d1432db54b2f2dd.jpg?s=80&d=mm&r=g" title="Trần Văn Điêp" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/ecca255d725eed36a872105205af1b8e.jpg?s=80&d=mm&r=g" title="Minh Nghia" class="user-image" alt="User Image" style="width: 35px !important" /><img src="https://www.gravatar.com/avatar/76e646e11f1674fba03bddd0ae020813.jpg?s=80&d=mm&r=g" title="Hoàng Quang Huy" class="user-image" alt="User Image" style="width: 35px !important" /><label class="numberCircle">+13</label>
</div>
<a href="https://gokisoft.com/menu/quiz_list">>> Hiển Thị Quizzz</a>
</div>
</div>
<div class="p-b-55" style="padding-top: 30px">
<div class="how2 how2-cl4 flex-s-c m-b-30">
<h3 class="f1-m-2 cl3 tab01-title">
Theo Dõi Học Trên Gokisoft
</h3>
</div>
<div class="flex-wr-s-s m-rl--5">
<div class="textwidget">
<div class="fb-page" data-href="https://www.facebook.com/gokisoft/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gokisoft/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gokisoft/">GokiSoft - Chia sẻ thông tin trong trường học, thầy cô giáo, v.v</a></blockquote></div>
</div>
<div id="fb-root"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="modal" id="import_code_modal" style="background: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title">Nhập source code của bạn</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
<div class="form-group">
<textarea id="message" class="form-control" rows="8"></textarea>
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
<button type="button" class="btn btn-success" data-dismiss="modal" onclick="import_code()">Hoàn Thành</button>
</div>
</div>
</div>
</div>




<footer>
<div class="bg2 p-t-40 p-b-25">
<div class="container">
<div class="row">
<div class="col-lg-4 p-b-20">
<div class="size-h-3 flex-s-c">
<a href="https://gokisoft.com">
<img style="height: 65px !important;" class="max-s-full" src="https://res.cloudinary.com/ziczacgroup/image/upload/v1587623413/qhwncq3wtjkrsyke6ayw.png" alt="LOGO">
</a>
</div>
<div class="f1-s-1 cl11 p-b-16">
<span style="color: #aaa;">Chúng tôi tạo ra website nay với mong muốn chia sẻ những kiến thức và kinh nghiệm thực tiễn mà chung tôi đã có được - nhằm giúp cho những bạn mới bắt đầu học lập trình trở nên dễ dàng hơn và có lộ trình học cụ thể &amp; rút ngắn thời gian học</span>
</div>
<p class="f1-s-1 cl11 p-b-16">
Bạn có câu hỏi? Hãy email chúng tôi tại <a href="/cdn-cgi/l/email-protection#0c6b6367657f636a78226f63614c6b616d6560226f6361" class="email"><span class="__cf_email__" data-cfemail="caada5a1a3b9a5acbee4a9a5a78aada7aba3a6e4a9a5a7">[email&#160;protected]</span></a>
</p>
<div class="p-t-15">
<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
<span class="fab fa-facebook-f"></span>
</a>
<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
<span class="fab fa-twitter"></span>
</a>
<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
<span class="fab fa-pinterest-p"></span>
</a>
<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
<span class="fab fa-vimeo-v"></span>
</a>
<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
<span class="fab fa-youtube"></span>
</a>
</div>
</div>
<div class="col-sm-6 col-lg-4 p-b-20">
<div class="size-h-3 flex-s-c">
<h5 class="f1-m-7 cl0" style="text-transform: uppercase;">
Bài viết nổi bật
</h5>
</div>
<ul>
<li class="flex-wr-sb-s p-b-20">
<a href="https://gokisoft.com/share-code-tim-hieu-jstl--cookie--session-lap-trinh-jspservlet.html" class="size-w-4 wrap-pic-w hov1 trans-03">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1583834689/vf4gyxt7gmthx4eykvlp.jpg" alt="IMG">
</a>
<div class="size-w-5">
<h6 class="p-b-5">
<a href="https://gokisoft.com/share-code-tim-hieu-jstl--cookie--session-lap-trinh-jspservlet.html" class="f1-s-5 cl11 hov-cl10 trans-03">
[Share Code] Tìm hiểu JSTL + Cookie + Session - Lập trình JSP/Servlet
</a>
</h6>
<span class="f1-s-3 cl6">
28-11-2020
</span>
</div>
</li>
<li class="flex-wr-sb-s p-b-20">
<a href="https://gokisoft.com/tao-ung-dung-nghe-nhac-lap-trinh-android.html" class="size-w-4 wrap-pic-w hov1 trans-03">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1583834689/vf4gyxt7gmthx4eykvlp.jpg" alt="IMG">
</a>
<div class="size-w-5">
<h6 class="p-b-5">
<a href="https://gokisoft.com/tao-ung-dung-nghe-nhac-lap-trinh-android.html" class="f1-s-5 cl11 hov-cl10 trans-03">
Tạo ứng dụng nghe nhạc - Lập trình Android
</a>
</h6>
<span class="f1-s-3 cl6">
27-11-2020
</span>
</div>
</li>
<li class="flex-wr-sb-s p-b-20">
<a href="https://gokisoft.com/video-huong-dan-tao-food-app-bang-listview--baseadapter-lap-trinh-android.html" class="size-w-4 wrap-pic-w hov1 trans-03">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1583834689/vf4gyxt7gmthx4eykvlp.jpg" alt="IMG">
</a>
<div class="size-w-5">
<h6 class="p-b-5">
<a href="https://gokisoft.com/video-huong-dan-tao-food-app-bang-listview--baseadapter-lap-trinh-android.html" class="f1-s-5 cl11 hov-cl10 trans-03">
[Video] Hướng dẫn tạo Food App bằng ListView + BaseAdapter - Lập trình android
</a>
</h6>
<span class="f1-s-3 cl6">
27-11-2020
</span>
</div>
</li>
</ul>
</div>
<div class="col-sm-6 col-lg-4 p-b-20">
<div class="size-h-3 flex-s-c">
<h5 class="f1-m-7 cl0" style="text-transform: uppercase;">
Bài viết mới nhất
</h5>
</div>
<li class="flex-wr-sb-s p-b-20">
<a href="https://gokisoft.com/sql-thiet-ke-csdl-quan-ly-ban-hang-lap-trinh-sql-server.html" class="size-w-4 wrap-pic-w hov1 trans-03">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1596721424/g5qnb8gmw9ehincaohty.png" alt="IMG">
</a>
<div class="size-w-5">
<h6 class="p-b-5">
<a href="https://gokisoft.com/sql-thiet-ke-csdl-quan-ly-ban-hang-lap-trinh-sql-server.html" class="f1-s-5 cl11 hov-cl10 trans-03">
SQL - Thiết kế CSDL quản lý bán hàng - Lập trình SQL Server
</a>
</h6>
<span class="f1-s-3 cl6">
27-11-2020
</span>
</div>
</li>
<li class="flex-wr-sb-s p-b-20">
<a href="https://gokisoft.com/share-code-bai-giang-t2008a-lap-trinh-sql-server.html" class="size-w-4 wrap-pic-w hov1 trans-03">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1583834689/vf4gyxt7gmthx4eykvlp.jpg" alt="IMG">
</a>
<div class="size-w-5">
<h6 class="p-b-5">
<a href="https://gokisoft.com/share-code-bai-giang-t2008a-lap-trinh-sql-server.html" class="f1-s-5 cl11 hov-cl10 trans-03">
[Share Code] Bài giảng T2008A - Lập trình SQL Server
</a>
</h6>
<span class="f1-s-3 cl6">
27-11-2020
</span>
</div>
</li>
<li class="flex-wr-sb-s p-b-20">
<a href="https://gokisoft.com/video-tim-hieu-listview-trong-android-lap-trinh-android.html" class="size-w-4 wrap-pic-w hov1 trans-03">
<img src="https://res.cloudinary.com/ziczacgroup/image/upload/v1583834689/vf4gyxt7gmthx4eykvlp.jpg" alt="IMG">
</a>
<div class="size-w-5">
<h6 class="p-b-5">
<a href="https://gokisoft.com/video-tim-hieu-listview-trong-android-lap-trinh-android.html" class="f1-s-5 cl11 hov-cl10 trans-03">
[Video] Tìm hiểu ListView trong Android - Lập trình Android
</a>
</h6>
<span class="f1-s-3 cl6">
25-11-2020
</span>
</div>
</li>
</div>
</div>
</div>
</div>
<div class="bg11">
<div class="container size-h-4 flex-c-c p-tb-15">
<span class="f1-s-1 cl0 txt-center">
<a href="#" class="f1-s-1 cl10 hov-link1">
Copyright &copy; 2019 All rights reserved
</span>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-146138928-1"></script>
<script>
					  window.dataLayer = window.dataLayer || [];
					  function gtag(){dataLayer.push(arguments);}
					  gtag('js', new Date());
					  gtag('config', 'UA-146138928-1');
					</script>

<script>
					  !function(f,b,e,v,n,t,s)
					  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
					  if(!f._fbq)f._fbq=n;
						n.push=n;
						n.loaded=!0;
						n.version='2.0';
						n.queue=[];
						t=b.createElement(e);
						t.async=!0;
						t.src=v;
						s=b.getElementsByTagName(e)[0];
					  s.parentNode.insertBefore(t,s)}(window, document,'script',
					  'https://connect.facebook.net/en_US/fbevents.js');
					  fbq('init', '1217882781722846');
					  fbq('track', 'PageView');
					</script>
<noscript><img height="1" width="1" style="display:none"
					  src="https://www.facebook.com/tr?id=1217882781722846&ev=PageView&noscript=1"
					/></noscript>
 </footer>
<div id="snackbar">Đã sao chép!!!</div>

<div class="btn-back-to-top" id="myBtn">
<span class="symbol-btn-back-to-top">
<span class="fas fa-angle-up"></span>
</span>
</div>

<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document" data-dismiss="modal">
<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
<div class="wrap-video-mo-01">
<div class="video-mo-01">
<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>

<script src="https://gokisoft.com/themes/gokisoft/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://gokisoft.com/themes/gokisoft/vendor/animsition/js/animsition.min.js"></script>

<script src="https://gokisoft.com/themes/gokisoft/vendor/bootstrap/js/popper.js"></script>
<script src="https://gokisoft.com/themes/gokisoft/vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://gokisoft.com/themes/gokisoft-old/lib/rainbow/rainbow.min.js"></script>
<script src="https://gokisoft.com/themes/gokisoft-old/lib/rainbow/language/javascript.js"></script>
<script src="https://gokisoft.com/themes/gokisoft/js/main.js"></script>
<script src="https://gokisoft.com/js/vendor/summernote.js"></script>
<script type="text/javascript" src="https://gokisoft.com/js/upload/upload.js"></script>
<script type="text/javascript" src="https://gokisoft.com/js/base64.js"></script>
<script type="text/javascript">
	var url_upload = 'https://api.cloudinary.com/v1_1/ziczacgroup/image/upload#h7sjrjob';

	function sendCVPermission(idPost, status) {
		$.get('https://gokisoft.com/mycomment/change?status='+status+'&idPost='+idPost, function() {
			location.reload()
		})
	}

	function filterGroup(groupName) {
		document.cookie = 'currentGroup='+groupName
		location.reload()
	}

	$('#description img').click(function() {
		window.open($(this).attr('src'), '_self')
	})

	var deltaTime = 0
	function viewCodeFromOther() {
		$.get('https://gokisoft.com/view_comment_from_other?id=594', function() {
			deltaTime = 2 * 60 * 60;
			countDownTimer()
		})
	}
	setTimeout(function() {
		if(deltaTime > 0) {
			countDownTimer()
		}
	}, 500)

	function countDownTimer() {
		setInterval(function() {
			deltaTime -= 1;
			hour = parseInt(deltaTime / 3600);
			minute = parseInt((deltaTime - hour * 3600) / 60);
			second = deltaTime - hour * 3600 - minute * 60;
			// console.log(hour + ',' + minute + ',' + second)
			$('#view_code_id').html('Xem code sau >> ' + hour + ':' + minute + ':' + second)

			if(deltaTime <= 0) {
				location.reload()
			}
		}, 1000)
	}

	function removeComment(id) {
		option = confirm('Bạn chắc chắn muốn xoá phản hồi này?')
		if(option) {
			$.get('https://gokisoft.com/remove_comment?id='+id, function() {
				location.reload()
			})
		}
	}

	function postComment() {
		if($($("#summernote").summernote("code")).text() == '') {
			alert('Bạn cần nhập nội dung phản hồi trước khi gửi !');
			return;
		}

		if($('#fullname').val() == '' || $('#phone_number').val() == '' || $('#email').val() == '') {
			alert('Thông tin cá nhân không được để trống !');
			return;
		}

		$.post("https://gokisoft.com/post/comment",
		  {
		    id_product: 0,
		    id_news: 594,
		    fullname: $('#fullname').val(),
		    email: $('#email').val(),
		    phone_number: $('#phone_number').val(),
		    comment: $('#summernote').val(),
		    _token: $('[name=_token]').val()
		  },
		  function(data, status){
		  	$('#alert_div').show()
		  	$('#alert_div').append('<p style="color: red">Chúng tôi đã nhận được phản hồi từ bạn - chúng tôi sẽ duyệt trước khi phản hồi hiển thị trên mục này</p>')
		  	setTimeout(function() {
		  		location.reload()
		  	}, 2000)
		  });
	}

	function filterByTags(tagName) {
		tagName = remove_unicode(tagName)
		$('[name=tagFilter]').each(function() {
			if($(this).attr('data').includes(tagName)) {
				$(this).show()
			} else {
				$(this).hide()
			}
		})
	}

	function remove_unicode(str)
	{
	   str= str.toLowerCase();
	   str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
	   str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
	   str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
	   str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
	   str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
	   str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
	   str= str.replace(/đ/g,"d");
	   // str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");

	   // str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
	   // str= str.replace(/^\-+|\-+$/g,"");

	   return str;
	}
</script>
<script type="text/javascript">
	$("pre.prettyprint").each(function() {
        var html = $(this).html()//.replace("; ", ";\n")
        // html = html.replace(";", ";\n")
        // html = tidy_html5(html, options);
        $(this).html('<code data-language="java">'+html+'</code>')
      })

      $(".w3-code").each(function(index) {
        var content = $(this).html().split('<br>').join("\n");
        // $(this).html(content);
        // console.log(content)
        content = strip_html_tags(content)
        $(this).html('<pre><code class="language-js">'+content+'</code></pre>');
      })

      $("pre").each(function(index) {
        $(this).attr('id', 'code_' + index)

        if($(this).attr('filename') != null && ($(this).attr('filename').endsWith('.html') || $(this).attr('filename').endsWith('.htm'))) {

         var parentclosest = $(this).closest('[name=comment_child]')
         if(parentclosest.length > 0) {
         	url = '//gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github/comment/'+$(parentclosest[0]).attr('value')
         } else {
         	url = '//gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github/demo';
         }

          $(this).before("<span class='badge badge-info' style='cursor: pointer;font-size: 12px;' id='label_"+index+"' onclick='toggle_code(" +index+")'>Ẩn Code</span>&nbsp;&nbsp;<span class='badge badge-danger' id='copy_"+index+"' style='cursor: pointer;font-size: 12px;' onclick='copyDivToClipboard(\"code_" +index+"\")'>Copy Code</span>&nbsp;&nbsp;<a href='"+url+"/"+$(this).attr('filename')+"' target='_blank'><span class='badge badge-success' style='cursor: pointer;font-size: 12px;'>Xem Demo</span></a>")
        } else {
          $(this).before("<span class='badge badge-info' style='cursor: pointer;font-size: 12px;' id='label_"+index+"' onclick='toggle_code(" +index+")'>Ẩn Code</span>&nbsp;&nbsp;<span class='badge badge-danger' id='copy_"+index+"' style='cursor: pointer;font-size: 12px;' onclick='copyDivToClipboard(\"code_" +index+"\")'>Copy Code</span>")
        }

        if($(this).attr('filename') != null && ($(this).attr('filename').endsWith('.css') || $(this).attr('filename').endsWith('.css.map'))) {
          toggle_code(index)
        }
      })

  function toggle_code(index) {
    // alert(index)
    $("#code_"+index).toggle()
    $("#copy_"+index).toggle()
    if($("#code_"+index).is(':visible')) {
      $("#label_"+index).html("Ẩn Code")
    } else {
      $("#label_"+index).html("Hiển Thị Code")
    }
  }
</script>
<script>
    	function import_code() {
		      var message = $("#message").val();

		      $("#summernote").summernote('code', $("#summernote").summernote('code') + '<br/><pre><code class="language-js">'+escapeHtml(message)+'</code></pre><br/><br/>')

		      $("#message").val("");
		  }

		function escapeHtml(text) {
		    var map = {
		      '&': '&amp;',
		      '<': '&lt;',
		      '>': '&gt;',
		      '"': '&quot;',
		      "'": '&#039;'
		    };

		    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
		  }

    	$(function(){
    		//editor setup
			$('#summernote').summernote({
				height: 100,
				toolbar: [
				    ['font', ['bold', 'italic', 'underline', 'clear']],
				    ['fontsize', ['fontsize']],
				    ['color', ['color']],
				    ['para', ['ul', 'ol', 'paragraph']],
				    ['table', ['table']],
				    ['insert', ['link', 'picture', 'video']]
				  ],
				callbacks: {
					onInit: function() {
				      // Add "open" - "save" buttons
				      var noteBtn = '<button data-toggle="modal" data-target="#import_code_modal" type="button" class="btn btn-default btn-sm btn-small" title="Add Code" data-event="something" tabindex="-1"><i class="fa fa-file-text"></i></button>';
				      var fileGroup = '<div class="note-file btn-group">' + noteBtn + '</div>';
				      $(fileGroup).appendTo($('.note-toolbar'));
				      // Button tooltips
				      $('#makeSnote').tooltip({
				        container: 'body',
				        placement: 'bottom'
				      });
				    },
				    onBlur: function() {
	                  // $('#yourInfor').show()
	                }
				}
			});

			$('.note-popover').hide()

			// process tags
			tags = 'hướng dẫn github, hướng dãn sử dụng github, hướng dẫn cài đặt github, hướng dẫn commit github, hướng dẫn đăng ký github, github, git, hướng dẫn sử dung git, hướng dẫn cài đặt git, hướng dẫn commit git'.toLowerCase()
			tags = tags.split(',')
			if(tags != null && tags.length > 0) {
				$('[name=className]').each(function() {
					className = $(this).val().toLowerCase()
					if(tags.indexOf(className) >= 0) {
						$(this).prop('checked', true)
					}
				})
			}

			$('[name=className]').change(function() {
				if($(this).prop('checked')) {
					// console.log('checked >> ' + $(this).val())
					quickSetting('tags', 'add', $(this).val())
				} else {
					// console.log('unchecked >> ' + $(this).val())
					quickSetting('tags', 'remove', $(this).val())
				}
			})

			$('#Highlight').change(function() {
				quickSetting('Highlight', '', $(this).val())
			})

			$('#is_view_comment').change(function() {
				quickSetting('is_view_comment', '', $(this).val())
			})

			$('#Highlight').val(0)
			$('#is_view_comment').val(1)

			$('#import_code_files').change(function(e) {
				console.log('change.........')
				if ( ! window.FileReader ) {
					return console.log('FileReader API is not supported by your browser.');
				}
				// console.log($(this).val())
				input = e.target; // Getting the element from jQuery
				if ( input.files && input.files[0] ) {
					fileList = input.files
					index = 0

					readFile()
				} else {
					// Handle errors here
					console.log('File not selected or browser incompatible.')
				}
			})
		});

		function quickSetting(fieldName, action, value) {
			$.get('https://gokisoft.com/admin/quick/setting?id='+594+'&fieldName='+fieldName+'&action='+action+'&value='+value, function(data) {
				location.reload()
			})
		}

		var fileList = null;
    	var index = 0;

		function readFile() {
			if(index >= fileList.length) {
				return;
			}

			file = fileList[index]
			index++

			var allowedExtension = ['.jpeg', '.jpg', '.png', '.gif', '.bmp'];
			for (var i = 0; i < allowedExtension.length; i++) {
				if(file.name.endsWith(allowedExtension[i])) {
					uploadURLCloudinary(file, null, function(url) {
						$("#summernote").summernote('code', $("#summernote").summernote('code') + '<h1>#'+file.name+'</h1><br/><pre filename="'+file.name+'" type="image" data="sample"><code class="language-js">'+url+'</code></pre><br/><br/>')

						readFile()
					})
					return;
				}
			}

			fr = new FileReader(); // FileReader instance
			fr.onload = function () {
				// Do stuff on onload, use fr.result for contents of file
				// console.log(fr.result)
				// console.log(file)
				// content = fr.result.replace('data:text/plain;base64,', '')
				// content = content.replace('data:application/octet-stream;base64,', '')
				content = fr.result.split(',')
				if(content.length > 1) {
					content = content[1]
				} else {
					content = content[0]
				}
				content = Base64.decode(content)
				$("#summernote").summernote('code', $("#summernote").summernote('code') + '<h2>#'+file.name+'</h2><br/><pre filename="'+file.name+'" type="code" data="sample"><code class="language-js">'+escapeHtml(content)+'</code></pre><br/><br/>')

				readFile()
			};
			//fr.readAsText( file );
			fr.readAsDataURL( file );
		}

		function uploadAllFiles() {
			$('#import_code_files').click()
		}
    </script>
<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "420px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
	</script>
<script type="text/javascript">
    // $(function() {

        var h1Tags = jQuery('h1')
        var menuContent = ''
        for (var i = 0; i < h1Tags.length; i++) {
            if(jQuery(h1Tags[i]).text().startsWith('#')) {
                title = jQuery(h1Tags[i]).text().trim()
                title = title.replace(/\*+$/,' ');
                if(jQuery(h1Tags[i]).text().trim().startsWith('##')) {
                    title = title.replace(/#/g, '&nbsp;&nbsp;&nbsp;&nbsp;');
                } else {
                    title = title.replace(/#/g, '');
                }

                htmlDemo = ''
                if(title.includes('.htm')) {
                  var parentclosest = $(this).closest('[name=comment_child]')
                  if(parentclosest.length > 0) {
                    url = '//gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github/comment/'+$(parentclosest[0]).attr('value')
                  } else {
                    url = '//gokisoft.com/03-huong-dan-lam-viec-tren-branch-git-git-github/demo';
                  }
                  htmlDemo = "&nbsp;&nbsp;<a href='"+url+"/"+title+"' target='_blank'><span class='badge badge-success' style='cursor: pointer;font-size: 12px;'>Xem Demo</span></a>";
                }

                param = remove_unicode(jQuery(h1Tags[i]).text().replace(/#/g, '').toLowerCase())
                menuContent += '<li style="list-style-type: none;"><a style="text-decoration:none" href="#'+param+'" onclick="scrollToTarget(\''+param+'\')">'+title + htmlDemo +'</a></li>';

                if(jQuery(h1Tags[i]).text().trim().endsWith('*')) {
                  title = jQuery(h1Tags[i]).html()
                  title = title.replace(/#/g, '');
                  title = title.replace(/\*/g, ' ');
                  jQuery(h1Tags[i]).html(title + '<a style="color: black; color: 12pt;" href="#menu_post" onclick="scrollToTarget(\'menu_post\')"> >> Xem menu bài viết</a>')
                } else {
                  title = jQuery(h1Tags[i]).html()
                  title = title.replace(/#/g, '');
                  jQuery(h1Tags[i]).html(title)
                }

                jQuery(h1Tags[i]).attr('id', param)
            }
        }

        if(menuContent != '') {
            jQuery('#menu_post_div').show()
            jQuery('#menu_post').append(menuContent)
        }
    // })

    function scrollToTarget(target) {
        jQuery('html, body').animate({
            scrollTop: jQuery("#"+target).offset().top
        }, 600);
    }

    function remove_unicode(str)
    {
       str= str.toLowerCase();
       str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
       str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
       str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
       str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
       str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
       str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
       str= str.replace(/đ/g,"d");
       str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");

       str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
       str= str.replace(/^\-+|\-+$/g,"");

       str = str.replace(/\s/g,'');
       return str;
    }
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
 js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
  function copyDivToClipboard(id) {
    // var range = document.getSelection().getRangeAt(0);
    // range.selectNode(document.getElementById(id));
    // window.getSelection().addRange(range);
    // document.execCommand("copy")
    var text = $("#"+id).text();

    var dummy = document.createElement("textarea");
    document.body.appendChild(dummy);
    dummy.innerHTML = text;
    dummy.select();
    document.execCommand("copy");
    document.body.removeChild(dummy);

    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
    </script>

<style type="text/css">
  .quiz_answer_content:empty:before {
    content:attr(data-placeholder);
    color:gray
  }

  .tag.label.label-info {
    background: #f0ad4e !important;
    border-color: #eea236 !important;
    padding: 3px !important;
  }

  .bootstrap-tagsinput {
    width: 100% !important;
  }

  .numberCircle {
      float: left;
      border-radius: 50%;
      width: 36px;
      height: 36px;
      padding-left: 8px;
      padding-right: 8px;
      padding-top: 5px;
      background: #fff;
      border: 2px solid grey;
      color: grey;
      text-align: center;
      font-weight: bold;
  }
</style>
<link rel="stylesheet" href="https://gokisoft.com/vendor/TagJs/bootstrap-tagsinput.css">
<script src="https://gokisoft.com/vendor/TagJs/bootstrap-tagsinput.js"></script>
<div class="modal" id="quiz" style="background: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title" style="text-transform: uppercase; color: red !important;">Tạo câu hỏi (Quizzz)</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body" id="quiz_answer_content_group">
<div class="form-group">
<label>Câu hỏi</label>
<input type="text" name="quiz_title" class="form-control" placeholder="Nhập câu hỏi vào đây ..." style="border: none !important;">
</div>
<div class="form-group">
<label>Đáp Án (Đáp án rỗng sẽ không hiển thị)</label>
</div>
<div class="checkbox" name="quiz_answer" style="display: flex;">
<input type="checkbox" style="float: left;"><label contenteditable="true" name="quiz_answer_content" class="quiz_answer_content" style="float: left;min-width: 60% !important; margin-left: 10px; margin-top: -7px" onkeyup="onkeyupQuiz()" data-placeholder="Vào đáp án ..."></label>
</div>
</div>
<div class="modal-body">
<div class="form-group">
<label>Tags:</label>
<input type="text" name="tags" class="form-control tagsInput" data-role="tagsinput" width="100% !important;" placeholder="Nhập tags vào đây ..." style="border: none !important;">
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
<button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitQuiz()">Hoàn Thành</button>
</div>
</div>
</div>
</div>

<script type="text/javascript">
  function onkeyupQuiz() {
    var answers = jQuery('[name=quiz_answer_content]')
    var isAddMore = true;
    for (var i = 0; i < answers.length; i++) {
      if($(answers[i]).html().length == 0 || $(answers[i]).html().includes('Vào đáp')) {
        isAddMore = false;
        break;
      }
    }
    if(isAddMore) {
      $('#quiz_answer_content_group').append(`<div class="checkbox" name="quiz_answer" style="display: flex;">
          <input type="checkbox" style="float: left;"><label contenteditable="true" name="quiz_answer_content" style="float: left;min-width: 60% !important; margin-left: 10px; margin-top: -7px" onkeyup="onkeyupQuiz()" data-placeholder="Vào đáp án ..." class="quiz_answer_content"></label>
        </div>`)
    }
  }

  function submitQuiz() {
    if($('[name=quiz_title]').val() == '') {
      alert('Không được để trống tiêu đề Quiz.')
      return;
    }
    var content = []
    var answers = jQuery('[name=quiz_answer_content]')
    for (var i = 0; i < answers.length; i++) {
      if($(answers[i]).html().length == 0 || $(answers[i]).html().includes('Vào đáp')) {
      } else {
        content.push($(answers[i]).html())
      }
    }
    if(content.length == 0) {
      alert('Quiz của bạn không có đáp án nào.')
      return;
    }
    content = JSON.stringify(content)

    $.post('https://gokisoft.com/menu/add_menu_expand_content', {
      content_id: '',
      id: 473,
      _token: "F98OdD4rjIuO36rNC7S7WYTESpXqJxGgLYwg0nwQ",
      title: $('[name=quiz_title]').val(),
      tags: $('[name=tags]').val(),
      content: content
    }, function(data) {
      location.reload()
    })
  }

  function switchQuiz(id, index, status) {
    $.get('https://gokisoft.com/menu/switch_quiz?id='+id+'&index='+index+'&status='+status, function(data) {
      location.reload()
    })
  }

  function deleteBrand(id) {
    option = confirm('Bạn chắc chắn muốn xoá menu này không?')
    if(option) {
      $.post("https://gokisoft.com/menu/delete_menu_expand_content",
      {
          _token: "F98OdD4rjIuO36rNC7S7WYTESpXqJxGgLYwg0nwQ",
          id: id,
      },
      function(data, status){
        location.reload()
      });
    }
  }
</script></body>
</html>
