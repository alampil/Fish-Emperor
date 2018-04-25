<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fish-Emperor Інтернет-магазин рибацького спорядження</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../template/img/Fish Food_64px.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../template/css/wicart.css" />
  <link rel="stylesheet" type="text/css" href="../../template/css/style.css">
  <link rel="stylesheet" type="text/css" href="../../template/css/fonts.css">
  <link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="../../template/js/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../../template/js/script.js"></script>
  <script src="../../template/js/jqscript.js"></script>
   <script src="../../template/js/wicart.js"></script></head>
</head>
<body>
  <header>

  <nav class="navbar navbar-expand-lg mx-background-top-linear">
  <a class="navbar-brand logo" href="#">
    <b>Fish-Emperor</b>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Головна</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="modal" data-target="#catalogModal">
          Каталог
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment_and_delivery.html">Інформація</a>
      </li>  
    <li class="nav-item">
        <a class="nav-link" href="contact.html">Контакти</a>
      </li>          
    </ul>

<span class="shop-cart">
      <button type="button" class="btn btn-outline-primary header-btn" onclick="cart.showWinow('bcontainer', 1)" data-toggle="modal" data-target="#Modal">
        <img src="../../template/img/Shopping Cart_48px.png" alt="shop-cart " />
          <a href="#" id="basketwidjet" class="badge badge-light" onclick="cart.showWinow('bcontainer', 1)"></a>
      </button>



    </span>    

    <span class="login">
      <button type="button" class="btn btn-outline-primary header-btn" data-toggle="modal" data-target="#authModal">
        <img src="../../template/img/Exit_52px.png" alt="auth" />
      </button>
    </span>
   

  </div>
</nav>
  </header>
<script>
var priceList = {
  "001" : {"id" : "001", "subid" : {}, "name" : "ВУДКА MAJOR CRAFT BASSPARA BPS-632L", "price" : "1974"},
  "002" : {"id" : "002", "subid" : {}, "name" : "ВУДКА YAMAGA BLANKS BALLISTICK 810ML/NANO RIVER ", "price" : "12301"}
  };
</script> 
<div id="order" class="popup">
<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right; color: #fff;">[закрити]</a>
<h4>Введіть ваші контактні дані</h4>

<form id="formToSend">
<input id="fio" type="text" placeholder="Ваші прізвище та ім'я"  class="" />
<input id="city" type="text" placeholder="Місто"  class="text-input"/>
<input id="phone" type="text" placeholder="Контактний телефон" class="text-input"/>
<input id="email" type="text" placeholder="Поштова скринька" class="" />
<br>
<textarea id="question" placeholder="Адреса"></textarea>
<br>
<b>Доставлення:</b>
<br>
<select id="delivery">
<option value="-">-</option>
<option value="Укрпошта">Укрпошта</option>
<option value="Нова пошта">Нова пошта</option>
<option value="Meest Express">Meest Express</option>
</select>
<br>
<input type="checkbox" value="V"> Предоплата
</form>
<button onclick="cart.sendOrder('formToSend,overflw,bsum');" href="#">Віправити замовлення</button>
</div>
<div class="main-content">
  <center><div class="btn-group btn-group-lg catalog-btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-dark catalog-btn">Вудки</button>
  <button type="button" class="btn btn-dark catalog-btn">Катушки</button>
  <button type="button" class="btn btn-dark catalog-btn">Ліски</button>
  <button type="button" class="btn btn-dark catalog-btn">Гачки</button>
  <button type="button" class="btn btn-dark catalog-btn">Поплавки</button>
  <button type="button" class="btn btn-dark catalog-btn">Приманки</button>
  <button type="button" class="btn btn-dark catalog-btn">Прикормки</button>
  <button type="button" class="btn btn-dark catalog-btn">Готові оснастки</button>
  
</div></center>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 product-img">
         <a href="#"><img src="../../template/img/ww.jpeg" alt="product image" width="100%" height="100%"></a>
      </div>
      <div class="col-lg-6 product-info">
        <div class="row">
          <div class="col-lg-12"><h4 class="product-name" id="product-name">Product name</h4></div>
        </div>
        <div class="row">
          <div class="col-lg-8 ">
            <center>
              <span class="product-price" id="product-price">1 200 <small>грн.</small></span>
            </center>
            <div class="rating">
                <input type="radio" name="star" id="star1" checked="checked" />
                <label for="star1"><div class="star"></div></label>
                <input type="radio" name="star" id="star2" />
                <label for="star2"><div class="star"></div></label>
                <input type="radio" name="star" id="star3" />
                <label for="star3"><div class="star"></div></label>
                <input type="radio" name="star" id="star4" />
                <label for="star4"><div class="star"></div></label>
                <input type="radio" name="star" id="star5" />
                <label for="star5"><div class="star"></div></label>
            </div>

            <div class="reviews">
                <a href="">
                <span id="reviews_count">
                  9
                </span>
                відгуків
                  </a>
            </div>
            <button type="button" class="btn btn-dark buy-product" >Купити</button>
            <div class="information" id="information">
              	<li>information:</li>
              	<li>information:</li>
              	<li>information:</li>
              	<li>information:</li>
            </div>
          </div>
          <div class="col-lg-4 payment_and_delivery">
            <div class="delivery">
              <img src="../../template/img/Car_48px.png" alt="delivery"><h6>Доставка замовлення</h6>
              
              <span>"Нова пошта"</span><br/>
              <span>"Meest Express"</span><br/>
              <span>"Укрпошта"</span><br/>
              <span>Самовивіз</span><br/>
              <span>Доставка по Чернівцях</span><br/>
              
              
            </div>
            <div class="payment">
              <img src="../../template/img/Bank Cards_50px.png" alt="payment"><h6>Спосіб оплати</h6>
              <span>Накладений платіж</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-11 categories_menu">
          <div class="filtres">
            <ul class="categories">
                <li><a href="#tab1" class="active">ОПИС</a></li>
                <li><a href="#tab2">ХАРАКТЕРИСТИКИ</a></li>
                <li><a href="#tab3">ВІДГУКИ</a></li>
            </ul>
          </div>
          <div class="categories_info" id="tab1">
                <h6>Опис</h6>
                <p></p>
          </div>
          <div class="categories_info" id="tab2">
                <table>
                  <tbody>
                    <tr>
                      <th>First characteritic:</th>
                      <td>paramether 1</td>
                    </tr>
                    <tr>
                      <th>Second characteritic:</th>
                      <td>paramether 2</td>
                    </tr>
                    <tr>
                      <th>Third characteritic:</th>
                      <td>paramether 3</td>
                    </tr>
                    <tr>
                      <th>Fourth characteritic:</th>
                      <td>paramether 4</td>
                    </tr>                    
                  </tbody>
                </table>
          </div>
          <div class="categories_info" id="tab3">
             <label for="raiting">Оцініть товар</label>
              <div class="rating">
                  <input type="radio" name="star" id="star1" checked="checked" />
                  <label for="star1"><div class="star"></div></label>
                  <input type="radio" name="star" id="star2" />
                  <label for="star2"><div class="star"></div></label>
                  <input type="radio" name="star" id="star3" />
                  <label for="star3"><div class="star"></div></label>
                  <input type="radio" name="star" id="star4" />
                  <label for="star4"><div class="star"></div></label>
                  <input type="radio" name="star" id="star5" />
                  <label for="star5"><div class="star"></div></label>
              </div><br/>
                <div class="row">
                  <div class="col-lg-4">
                    <form action="#" method="post">
                      <div class="form-group review_form">
                    <label for="reviewGood">Переваги:</label>
                    <textarea class="form-control" id="reviewGood" rows="3"></textarea>
                  </div>
                    </form>
                  </div>
                  <div class="col-lg-4">
                    <form action="#" method="post">
                       <div class="form-group review_form">
                    <label for="reviewBad">Недоліки:</label>
                    <textarea class="form-control" id="reviewBad" rows="3"></textarea>
                  </div> 
                    </form>
                  </div>
                  <div class="col-lg-4">
                    <form action="#" method="post">
                       <div class="form-group review_form">
                    <label for="reviewComment">Ваш коментар:</label>
                    <textarea class="form-control" id="reviewComment" rows="3"></textarea>
                  </div>
                    </form>
                  </div>
                </div>
                <form action="#" method="post" class=" review_form">
                <span>Введіть свій email</span>
                <input type="email" id="inputEmail" class="form-control " placeholder="Email" required autofocus>                    
                </form>
                <button type="button" class="btn btn-primary reviwe_btn">ЗАЛИШИТИ ВІДГУК</button>
          </div>    
      </div>  
    </div>
	</div>
</div>




  <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5 >Сайт</h5>
                    <ul>
                        <li><a href="#">Головна</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#authModal">Увійти</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <h5 >Про нас</h5>
                    <ul>
                        <li><a href="#">Контактна інформація</a></li>
                        <li><a href="#">Оплата і доставка</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 >Підтримка</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Зворотній зв'язок</a></li>
                    </ul>
                </div>
            </div>
            <!-- Here we use the Google Embed API to show Google Maps. -->
            <!-- In order for this to work in your project you will need to generate a unique API key.  -->
            <iframe id="map-container" frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.497815811298!2d25.927216715654488!3d48.29327637923618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4734089eaf308e41%3A0x974c4f797f290a9b!2sFaculty+of+Mathematics+and+Computer+Science!5e0!3m2!1sru!2sua!4v1519494187518" width="400" height="450" frameborder="0" style="border:0" allowfullscreen >
            </iframe>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><img src="../../template/img/Facebook_48px.png" alt="Facebook" /></a>
            <a href="#" class="facebook"><img src="../../template/img/Google_48px.png" alt="Twitter" /></a>
            <a href="#" class="google"><img src="../../template/img/Twitter_48px.png" alt="Google" /></a>
        </div>
        <div class="footer-copyright">
            <p>FishEmperor© 2018 </p>
        </div>
    </footer>


<div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="container">
        <div class="card card-container modal-auth">
            <img id="profile-img" class="profile-img-card" src="../../template/img/avatar.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <span>Введіть свій email</span>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" onchange="email_validate_auth(this.value);" required autofocus>
                <small id='mailAuthResult' class="mailAuthResult"></small><br/>
                <span>Введіть пароль</span>
                <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" max="catalog.php" minlength="6" maxlength="16" required  onkeyup="checkPassAuth(); return false;">
                <small id='passAuthResult'></small><br/>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> <span> Запам'ятати мене </span>
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-auth-ok" type="submit" id="submitAuth">Увійти</button>
            </form>
            <center>
              <a href="#" class="forgot-password">
             <span>Забули пароль? </span>
             <br/>
            </a>
            </center>
            <br/>
            <center>
             <a href="" class="registration">
              <span>Зареєструватись! </span>
            </a>
          </center>
           
        </div>
    </div>
    </div>
  </div>
</div>




<div class="modal fade" id="catalogModal" tabindex="-1" role="dialog" aria-labelledby="catalogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="card card-container">
<center>
      <span class="catalog-title">
        <h4>Каталог товарів</h4>
      </span>
    </center>
    <div class="row cont-catalog">
      <div class="col-lg-10 catalog">
        <div class="row">
          <div class="col-lg-3 catalog-info catalog-br">
            <a href=""><h4>ВУДКИ</h4></a>
              <a href=""><li>Спінінгові вудки</li></a>
              <a href=""><li>Махові вудки</li></a>
              <a href=""><li>Сомові вудки</li></a>
                        <br/>
            <a href=""><h4>КАТУШКИ</h4></a>
              <a href=""><li>Безінерціонні</li></a>
              <a href=""><li>Інерціонні</li></a>
                        <br/> 
            <a href=""><h4>ШНУРИ</h4></a>
                        <br/>         
            <a href=""><h4>ЛІСКИ</h4></a>
          </div>
          <div class="col-lg-3 catalog-info catalog-br">
            <a href=""><h4>ГАЧКИ</h4></a>
                        <br/>
            <a href=""><h4>ПРИМАНКИ</h4></a>
              <a href=""><li>Силіконові приманки</li></a>
              <a href=""><li>Блешні</li></a>
              <a href=""><li>Воблери</li></a>
                        <br/>
            <a href=""><h4>ВСЕ ДЛЯ МОНТАЖУ</h4></a>
              <a href=""><li>Джиг-головки</li></a>
              <a href=""><li>Грузили</li></a>
              <a href=""><li>Застіжки</li></a>
              <a href=""><li>Вертюги</li></a>
          </div>
          <div class="col-lg-3 catalog-info catalog-br">
            <a href=""><h4>ПОПЛАВКИ</h4></a>
                        <br/>
            <a href=""><h4>ГОТОВІ ОСНАСТКИ</h4> </a>
                        <br/>
            <a href=""><h4>ПІДСАКИ</h4></a>
              <a href=""><li>Підсаки</li></a>
              <a href=""><li>Голови підсаків</li></a>
              <a href=""><li>Ручки підсаків</li></a>
                        <br/>
            <a href=""><h4>САДКИ І КУКАНИ</h4></a>
              <a href=""><li>Садки</li></a>
              <a href=""><li>Кукани</li></a>
          </div>
          <div class="col-lg-3 catalog-info">
            <a href=""><h4>ТРАНСПОРТУВАННЯ І ЗБЕРІГАННЯ</h4></a>
              <a href=""><li>Коробки</li></a>
              <a href=""><li>Ящики</li></a>
              <a href=""><li>Сумки</li></a>
              <a href=""><li>Рюкзаки</li></a>
                        <br/>
            <a href=""><h4>ЧОВНИ</h4></a>
          </div>
        </div>
        
      </div>
    </div>            
            
        </div>
    </div>
    
</div>


<!----------------------------------------------------->


<script>
var cart;
var config;
var wiNumInputPrefID;
/* WI-GLOBAL-VARS */
$(document).ready(function(){  
    cart = new WICard("cart");
    config = {'clearAfterSend':true, 'showAfterAdd':false};
    
    cart.init("basketwidjet", config);
    /* WI-MODULES */
    
    
}); 
document.addEventListener('visibilitychange', function(e) {
cart.init("basketwidjet", config);
}, false);
</script>

</body>
</html>