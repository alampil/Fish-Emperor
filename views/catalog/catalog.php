<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fish-Emperor Каталог</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../template/img/Fish Food_64px.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../../template/css/wicart.css" />
  <link rel="stylesheet" type="text/css" href="../../template/css/style.css">
  <link rel="stylesheet" type="text/css" href="../../template/css/fonts.css">
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

  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <h2 class="catalogTitle">Вудки</h2>
        <div class="col-md-3 catalog-left-menu">
        <div class="up-btn">
          <a href="#" id="up">
            <div class="icon"></div>
          </a>
        </div>            
          <div class="price_scroller">
             <h5>Ціна</h5>
             <center>
             <input type="text" id="minCost" value="0"/>
             <span>-</span>
             <input type="text" id="maxCost" value="10000"/>
             <button type="button" class="btn btn-primary" id="scroller_ok">OK</button>
             </center>
             <div id="slider"></div>
          </div>
        <div class="availability">
           <h5>Доступність</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
            <label class="form-check-label dd" for="defaultCheck12">
            Є в наявності
            <span class="badge">(num)</span>
          </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
            <label class="form-check-label" for="defaultCheck13">
              Предзамовлення
              <span class="badge">(num)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
            <label class="form-check-label" for="defaultCheck14">
            Немає в наявності
            <span class="badge">(num)</span>
          </label>
        </div>
      </div> 
          <div class="fishing_rod">
           <h5>Вид</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
            Спінінгові вудки
            <span class="badge">(num)</span>
          </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
              Махові вудки
              <span class="badge">(num)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">
            Сомові вудки
            <span class="badge">(num)</span>
          </label>
        </div>
      </div>
        <div class="manufacturer">
           <h5>Виробник</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
            <label class="form-check-label" for="defaultCheck4">
            Yamaga Blanks
            <span class="badge">(num)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
            <label class="form-check-label" for="defaultCheck5">
            Shimano
            <span class="badge">(num)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
            <label class="form-check-label" for="defaultCheck6">
            Major Craft
            <span class="badge">(num)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
            <label class="form-check-label" for="defaultCheck7">
            Megabass
            <span class="badge">(num)</span>
            </label>
          </div>        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
            <label class="form-check-label" for="defaultCheck8">
            Favorite
            <span class="badge">(num)</span>
            </label>
          </div>        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
            <label class="form-check-label" for="defaultCheck9">
            Zemex
            <span class="badge">(num)</span>
            </label>
          </div>        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
            <label class="form-check-label" for="defaultCheck10">
            Zenryu
            <span class="badge">(num)</span>
            </label>
          </div>        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
            <label class="form-check-label" for="defaultCheck11">
            Ever Green
            <span class="badge">(num)</span>
            </label>
        </div>        
      </div>
    <div class="length">
           <h5>Довжина</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
            <label class="form-check-label" for="defaultCheck12">
            До 2.1 м
            <span class="badge">(num)</span>
          </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
            <label class="form-check-label" for="defaultCheck13">
              Від 2.1 до 2.4 м
              <span class="badge">(num)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
            <label class="form-check-label" for="defaultCheck14">
            Більше 2.4 м
            <span class="badge">(num)</span>
          </label>
        </div>
      </div>            
        </div>

        <div class="col-lg-9 products">
          
          <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>
            
        <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>
        <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>
        <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>
        <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>                                    
            <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div> 
          <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>            
          <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>                     
          <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
              </div>
          </div>            
          <div class="newsTop">
               <center>
                <a href="#"><img src="../../template/img/ww.jpeg" alt="image 1" width="100%" height="50%"></a>
              </center>
              <div class="name-product">
                <a href="#">
                  <h4>Product name</h4>
                </a>
              </div> 
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
                <div class="product-info"><br>
                  <div class="shopping-cart"><br>
                  <button type="button" class="btn btn-dark shopping_cart">
                    <img src="../../template/img/Shopping Cart_48px.png" alt="shopping_cart" /></button>
              </div><br/>
                 <h4 class="price">Price
                  <span> грн</span>
                </h4> 
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