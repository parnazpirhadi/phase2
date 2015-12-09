<html>
    <meta charset="UTF-8">   
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/del.css">
    <link rel="stylesheet" type="text/css" href="style/up.css">
    
<body  bgcolor="#D7C3C4">
<div class="head col-12">
            
 <div class="menu col-10">
 <ul>
 <li class="col-1"><a href="login.html">  ورود/ثبت نام </a></li> 
 <li class="col-1"><a href="sabad.html">  سبد خرید </a></li>
 <li class="col-1"><a href="ketab.html"> کتاب ها </a></li>
 <li class="col-1"><a href="laptop.html"> لپ تاپ </a></li>
 <li class="col-1"><a href="musiqi.html"> موسیقی </a></li>
 <li class="col-1"><a href="honar"> هنر </a></li>
 </ul>
<form id="search" method=get action="javascript:void(0)" onsubmit="search(this); return false;">
<tr><td><input placeholder="  search...  " type=text name=srchval value=""><button type="submit"><img src="image/search-icon.png" /><button/></td></tr>
</form>
</div>
  
 <div class="logo col-1">
 <img src="image/shopping arm.jpg" >
 </div>
 <div class="moto col-1"> <span> خرید اینترنتی,فروشگاه go shopping </span></div> 
</div>
    
<div class="left-nav col-2">
 <ul>
 <li> <a href="garanti.html">گارانتی </a> </li>
 <li> <a href="express.html"> تحویل اکسپرس </a></li>
 <li> <a href="delivery.html">پرداخت در محل </a></li>
 <li> <a href="tazmin.html">قیمت مناسب </a></li>
 </ul>
 </div>
    
    
<div class="delivery col-10"><h1 style="font-size:25px"> <strong>*لیست کتاب ها*</strong></h1>
   
    <?php foreach($books as $book): ?>
    <div class="lap-item">
    <h2 style="font-size:20px"><?php echo $book["title"]?></h2>
    <img src="image/jazb.jpg">
    <span><?php echo $book['price'] ?> rial</span>
    <a href="sabad.html" data-id="<?php echo $book['id']?>" > به سبد خرید اضافه شود </a>
    </div> 
    <?php endforeach;?>
</div>    
    
<a href="index.html" id="btn-back" > <img src="image/home-icon.png"/> </a>

</body>
</html>