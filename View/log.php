<html>
    
    <html>
    
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/del.css">
    <link rel="stylesheet" type="text/css" href="style/up.css">

        
<body>
    
    
<body   bgcolor="#D7C3C4">
<div class="head col-12">
 
 <div class="menu col-10">
 <ul>
 <li class="col-1"><a href="login.html">  ورود/ثبت نام  </a></li> 
 <li class="col-1"> <a href="sabad.html">  سبد خرید </a></li>
 <li class="col-1"><a href="ketab.html"> کتاب ها</a></li>
 <li class="col-1"><a href="laptop.html"> لپ تاپ</a></li>
 <li class="col-1"><a href="musiqi.html"> موسیقی</a></li>
 <li class="col-1"><a href="honar.html"> هنر</a></li>
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
    
    
  <form id="log"method="post">
      <?php echo (isset($message)? $message : ''); ?>
     Username: <input name="username" type="text" />
     Password: <input type="password" name="password" />
     <input type="submit" name="action" value="login" />

  </form>
</body>
</html>