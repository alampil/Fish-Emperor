<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fish-Emperor Оплата і доставка</title>
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
  <a class="navbar-brand logo" href="index.php">
    <b>Fish-Emperor</b>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Головна</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="modal" data-target="#catalogModal">
          Каталог
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment_and_delivery.php">Інформація</a>
      </li>  
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Контакти</a>
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
  </header>

<div class="main-content">
	<div class="container-fluid">
	<div class="container contact">
		<div class="row ">
			<div class="col-lg-3 pt-3 left-menu">
				<ul class="info-menu">
					<li><a class="active-link" href="payment_and_delivery.html">Оплата і доставка</a></li>
					<li><a href="contact.html">Контакти</a></li>
					<li><a href="faq.html">FAQ</a></li>
					<li><a href="guarantees.html">Гарантія</a></li>
				</ul>
<div class="info-left-menu menu-img">
          <center>
            <span class="buy-now-text">Великий вибір <br/> вудок і спінінгів</span>
            <button type="button" class="btn btn-dark buy-now">Купити</button>

          </center>
         
        </div>        
			</div>
			<div class="col-lg-9 pt-3 contacts">
				<section class="inner-article-section">
					<div class="section-title big-size"><h3 class="big-size">Оплата і доставка</h3></div>
						<article class="article-details">
							<div class="text-block">
								<div class="row">
                  <div class="col-lg-3">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-payment-list" data-toggle="list" href="#list-payment" role="tab" aria-controls="payment">Способи оплати</a>
                      <a class="list-group-item list-group-item-action" id="list-supUa-list" data-toggle="list" href="#list-supUa" role="tab" aria-controls="supUa">Доставка по Україні</a>
                      <a class="list-group-item list-group-item-action" id="list-supCh-list" data-toggle="list" href="#list-supCh" role="tab" aria-controls="supCh">Доставка по Чернівцях</a>
                      <a class="list-group-item list-group-item-action" id="list-selfCheckout-list" data-toggle="list" href="#list-selfCheckout" role="tab" aria-controls="selfCheckout">Самовивіз</a>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-payment" role="tabpanel" aria-labelledby="list-payment-list">
                        <p>Ми пропонуємо Вам різні варіанти оплати замовлень:</p>
                        <p><span class="tab-pane-h6">готівкою</span> - при кур'єрській доставці по Києву або самовивіз</p>
                        <p><span class="tab-pane-h6">безготівкові </span> - оплата по виставленому рахунку в будь-якому банку, пункті прийому платежів або платіжному терміналі. Після підтвердження замовлення консультант інтернет-магазину надішле Вам на електронну пошту рахунок, який Ви зможете оплатити протягом 3-х робочих днів</p>
                        <p><span class="tab-pane-h6">подарунковий сертифікат FishEmperor</span> - замовлення має бути на суму не менше вартості сертифікатів. Якщо замовлення на суму більше, то просто доплачується різниця</p>
                        <p><span class="tab-pane-h6">накладений платіж</span> - кур'єрські служби беруть додаткову плату за цю послугу, як правило це% від вартості замовлення і його розмір залежить від умов кожної служби доставки. Замовлення менш 200грн накладеним платежем відправляємо.</p>




                      </div>
                      <div class="tab-pane fade" id="list-supUa" role="tabpanel" aria-labelledby="list-supUa-list">
                        <p>Відправка замовлення здійснюється в термін від 2-х робочих днів після обробки його менеджером. Замовлення з передоплатою збираються і відправляються після оплати також в термін від 2-х робочих днів. Більш точну інформацію щодо термінів відправки може надати менеджер.</p>

                        <p>Увага: Якщо у Вашому замовленні вудилище або ручка підсаки, то за умовами служб доставки до замовлення додається транспортувальний тубус, тому вартість замовлення збільшиться від 30 до 60 грн, залежно від транспортировочной довжини.</p>

                        <div class="tab-pane-border">
                          <h5>Досавка по Україні "Нова пошта"</h5><br>
                          <span class="tab-pane-h6">Тарифи оплати:</span>стандартний тариф Нової пошти. <br><p></p>
                          <span class="tab-pane-h6">Варіанти оплати:</span> безготівкова, а також накладеним платежем.<br><p></p>
                          
                        <p>Звертаємо вашу увагу:</p>
                          <ul>
                            <li><p>При відправленні замовлення з роздрібних магазинів України діють стандартні тарифи компанії "Нова пошта": Адреса-Відділення "Нова пошта".</p></li>
                            <li><p>У вартість доставки додатково включається страховка в розмірі 1% від вартості посилки.</p></li>
                            <li><p>При виборі оплати «накладений платіж» у Вас будуть додаткові витрати на цю послугу, а саме 20 грн + 2% від суми замовлення, але не менше 10 грн.</p></li>
                          </ul>
                        </div>

                        <div class="tab-pane-border">
                          <h5>Досавка по Україні "Meest Express"</h5><br>
                          <span class="tab-pane-h6">Тарифи оплати:</span>стандартний тариф Meest Express. <br><p></p>
                          <span class="tab-pane-h6">Варіанти оплати:</span> безготівкова, а також накладеним платежем.<br><p></p>
                          
                        <p>Звертаємо вашу увагу:</p>
                          <ul>
                            <li><p>Відправка даними оператором проводиться 2 рази в тиждень.</p></li>
                            <li><p>  При виборі оплати «накладений платіж» у Вас будуть додаткові витрати на цю послугу, а саме 1% від суми замовлення, але не менше 10 грн.</p></li>
                          </ul>
                        </div>                        

                        <div class="tab-pane-border">
                          <h5>Досавка по Україні "Укрпошта"</h5><br>
                          <span class="tab-pane-h6">Тарифи оплати:</span>Фіксована ціна 30грн за посилку.<br><p></p>
                          <span class="tab-pane-h6">Варіанти оплати:</span> безготівкова, а також накладеним платежем.<br><p></p>
                          
                        <p>Звертаємо вашу увагу:</p>
                          <ul>
                            <li><p>Відправка даними оператором проводиться 2 рази в тиждень. Термін доставки до 10днів. Відправка замовлень тільки до 10 кг. Прикормки даними оператором не відправляємо !!!</p></li>
                            <li><p>У вартість доставки додатково включається страховка в розмірі 1% від вартості посилки</p></li>
                          </ul>
                        </div>                        

                                                

                      </div>
                      <div class="tab-pane fade" id="list-supCh" role="tabpanel" aria-labelledby="list-supCh-list">
                        <h5>Кур'єрська доставка по Чернівцях</h5>
                        <p>Товар доставляється протягом 1-2 днів з моменту оформлення замовлення. Конкретна дата доставки узгоджується з менеджером при обробці замовлення.</p>
                        <p>Доставка здійснюється з понеділка по суботу з 11:00 до 18:00. Доставка здійснюється тільки до під'їзду.</p>
                        <p>При замовленні товарів на суму 700 грн. і вище доставка по місту Київ безкоштовна. Якщо замовлення на суму менше 700 грн., То вартість доставки 45 грн.</p>
                        <p>Варіанти оплати: готівкова при отриманні, онлайн оплата, подарунковим сертифікатом, безготівкова.</p>
                      
                      </div>
                      <div class="tab-pane fade" id="list-selfCheckout" role="tabpanel" aria-labelledby="list-selfCheckout-list">
                        <h5>Самовивіз з нашого пункту обслуговування клієнтів</h5>
                        <p>м. Чернівці, вул.Волинська 48/50, з понеділка по п'ятницю з 10:00 до 18:00, в суботу з 10:00 до 17:00</p>
                        <p>Повідомте, будь ласка, про Ваш візит в службу підтримки, щоб ми встигли доставити товар зі складу, якщо його не буде в достатній кількості в пункті самовивозу.</p>
                        <p>Варіанти оплати: готівкова при отриманні, подарунковим сертифікатом.</p>
                      </div>
                    </div>
                  </div>
                </div>
				</section>
			</div>
		</div>
	</div></div>
</div>




  <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5 >Сайт</h5>
                    <ul>
                        <li><a href="index.php">Головна</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#authModal">Увійти</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <h5 >Про нас</h5>
                    <ul>
                        <li><a href="contact.php">Контактна інформація</a></li>
                        <li><a href="payment_and_delivery.php">Оплата і доставка</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 >Підтримка</h5>
                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Зворотній зв'язок</a></li>
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