<!DOCTYPE html>
<html>
<head>
  <title>Landing Page - PLN Kepanjen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'lato';
    list-style: none;
    text-decoration: none;
}
body{
  min-height:100%;
  background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url(<?php echo base_url()?>assets/bg.PNG);
  background-size:cover;
  background-repeat: no-repeat;
}

.wrapper{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.mainMenu{
    width: 250px;
    display: block;
    border-radius: 10px;
    overflow: hidden;
}
.item{
    border-top: 1px solid #ef584a;
    overflow: hidden;
}
.btn{
    display: block;
    padding: 15px 20px;
    background-color: #03bafc;
    color: #fff;
    position: relative;

}
.btn:before{
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right:8px solid transparent;
    border-top:10px solid #ff6f61;
    right: 15px;
    bottom: -10px;
    z-index: 9;
    
}
.btn i {
    margin-right: 10px;
}
.subMenu{
    background: #273057;
    overflow: hidden;
    transition: max-height 0.7s;
    max-height: 0;
}
.subMenu a{
    display: block;
    padding: 15px 20px;
    color: #fff;
    font-size: 14px;
    border-bottom: 1px solid #394c7f;
    position: relative;
    
}
.subMenu a:before{
    content: '';
    opacity: 0;
    transition: opacity 0.3s;

}
.subMenu a:hover:before{
    content: '';
    position: absolute;
    height: 0;
    width: 6px;
    left: 0;
    top:0;
    opacity: 1;
    /* background-color: #d8d824; */
    border-top: 24px solid transparent;
    border-left: 11px solid #fcdc29;
    border-bottom: 24px solid transparent;
}
.subMenu a:after{
    content: '';
    opacity: 0;
    transition: opacity 0.3s;

}
.subMenu a:hover:after{
    content: '';
    position: absolute;
    height: 0;
    width: 6px;
    right: 0px;
    top:0;
    opacity: 1;
    /* background-color: #d8d824; */
    border-top: 24px solid transparent;
    border-right: 11px solid #fcdc29;
    border-bottom: 24px solid transparent;
}
.subMenu a:hover{
    background: #273057;
    background: -moz-linear-gradient(top, #273057 0%, #273057 50%, #394c7f 51%, #394c7f 100%);
    background: -webkit-linear-gradient(top, #273057 0%,#273057 50%,#394c7f 51%,#394c7f 100%);
    background: linear-gradient(to bottom, #273057 0%,#273057 50%,#394c7f 51%,#394c7f 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#273057', endColorstr='#394c7f',GradientType=0 );
    transition: all 0.3s;
    border-bottom: 1px solid #394c7f;
}
.subMenu a:last-child{
    border:none;
}
.item:target .subMenu{
    max-height: 10em;
}




/*  footer   */
footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida  Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
footer .fa-heart{
    color: red;
}
footer .fa-dev{
    color: #fff;
}
footer .fa-twitter-square{
  color:#1da0f1;
}
footer .fa-instagram{
  color: #f0007c;
}
fotter .fa-linkedin{
  color:#0073b1;
}
footer .fa-codepen{
  color:#fff
}
footer a {
    color: #3c97bf;
    text-decoration: none;
  margin-right:5px;
}
.youtubeBtn{
    position: fixed;
    left: 50%;
  transform:translatex(-50%);
    bottom: 45px;
    cursor: pointer;
    transition: all .3s;
    vertical-align: middle;
    text-align: center;
    display: inline-block;
}
.youtubeBtn i{
   font-size:20px;
  float:left;
}
.youtubeBtn a{
    color:#ff0000;
    animation: youtubeAnim 1000ms linear infinite;
  float:right;
}
.youtubeBtn a:hover{
  color:#c9110f;
  transition:all .3s ease-in-out;
  text-shadow: none;
}
.youtubeBtn i:active{
  transform:scale(.9);
  transition:all .3s ease-in-out;
}
.youtubeBtn span{
    font-family: 'Lato';
    font-weight: bold;
    color: #000;
    display: block;
    font-size: 12px;
    float: right;
    line-height: 20px;
    padding-left: 5px;
  
}

@keyframes youtubeAnim{
  0%,100%{
    color:#c9110f;
  }
  50%{
    color:#ff0000;
  }
}

/*styling navbar*/
.ul2 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #5bc0de;
}

.li2 {
  float: left;
}

.li2 a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/*
.li2 a:hover:not(.active) {
  background-color: #111;
}*/

.active2 {
  background-color: #04AA6D;
}

/* footer  */
  </style>
</head>
<body>

    <ul class="ul2">
      <?php if(!$this->session->userdata('id_pelanggan_pengaduan')){ ?>
                   <li class="li2" style="float:right; font-weight: bold;"><a href="<?= base_url('act/login')?>">Login</a></li>
      <?php } else { ?>
                    <li class="li2" style="float:right; font-weight: bold;"><a href="<?= base_url('act/logout')?>">Logout</a></li>
      <?php } ?>
      <li class="li2"><a href="<?= base_url()?>" style="font-size: 20px;">PLN Kepanjen</a></li>  
      <li class="li2" style="float:right"><a href="<?= base_url('act/kontak')?>">Kontak</a></li>
      <li class="li2" style="float:right"><a href="<?= base_url('act/berita')?>">Berita</a></li>
      <li class="li2" style="float:right"><a href="<?= base_url('act/layanan')?>">Layanan</a></li>
      <li class="li2" style="float:right"><a href="<?= base_url('act/tentang')?>">Tentang</a></li>
      <li class="li2" style="float:right"><a href="<?= base_url('act/beranda')?>">Beranda</a></li>
    </ul>

    <div class="wrapper">
        <ui class="mainMenu">
            <li class="item" id="account">
                <center><a href="#account" class="btn">Main Menu</a></center>
            </li>
            <li class="item" id="account">
                <a href="<?= base_url('act/beranda')?>" class="btn"><i class="fa fa-home"></i>Profil Perusahaan</a>
            </li>
            <li class="item" id="about">
                <a href="<?= base_url('act/pengaduan') ?>" class="btn"><i class="fa fa-user"></i>Pengaduan Pelanggan</a>
            </li>
            <li class="item" id="about">
                <a href="<?= base_url('act/kritik_saran')?>" class="btn"><i class="fa fa-comment"></i>Kritik & Saran</a>
            </li>
        </ui>
    </div>

</body>
</html>