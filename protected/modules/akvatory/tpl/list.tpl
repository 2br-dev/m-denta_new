{block name=head}
    <link href="/css/akvatory/akvatory.css" rel="stylesheet" type="text/css"/>
    <link href="/apps/libs/simplelightbox-master/dist/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
{/block}

{strip}
<header class="header">
  <a href="#"><img class="header-logo" src="/img/akvatory/logo.png"></a>
  <div class="header-navigation">
    <nav>
      <ul>
        <li><a href="#more">О компании</a></li>
        <li><a href="#">Магазин Мир воды</a></li>
        <li><a href="#">Доставка и оплата</a></li>
        <li><a href="#">Контакты</a></li>        
      </ul>
    </nav>
    <nav class="header-navigation__menu">
      <ul>
        <li><a href="#" class="active">ВОДА 19 Л</a></li>
        <li><a href="#">ПОМПЫ</a></li>
        <li><a href="#">КОФЕ</a></li>
        <li><a href="#">ЧАЙ</a></li>        
        <li><a href="#">ОДНОРАЗОВАЯ ПОСУДА</a></li>
      </ul>    
    </nav>
  </div>
  <div class="header-apps">
    <a href="#"><img src="/img/akvatory/google-play.png"></a>
    <a href="#"><img src="/img/akvatory/appstore.png"></a>
  </div>
  <div class="header-contacts">
    <a class="header-contacts__city">Краснодар</a>
    <a class="header-contacts__phone" href="tel:2044444">20-444-44</a>
  </div>
  <a href="#"><img class="header-basket" src="/img/akvatory/basket.png"></a>
</header>
<div class="akvatory">
  <div class="content">
    <h1 class="content-header">Вода 19 л.</h1>
    
    <div class="circle">
      <div class="bottle">
        <h2>Горячий ключ Горячий ключ Горячий ключ</h2>
        <div class="bottle-info">
          <p class="bottle-info__about"><a href="#more"> Больше <br>о товаре</a></p>
          <div class="bottle-info__prices">
            <p>1 бут. <br><b>150 ₽</b></p>
            <p>2 бут. <br><b>130 ₽</b></p>
            <p>от 4-х бут. <br><b>100 ₽</b></p>
          </div>
          <p  class="bottle-info__note">Указана стоимость воды при наличии оборотной тары</p>
        </div>
        
        <button>Купить в 1 клик</button>
      </div>
      <div class="bottle-buy">
        <p>КУПИТЬ</p>
      </div>
      <div class="bottle-buy__controls">
        <div class="bottle-buy__plus">+</div>
        <p  class="bottle-buy__counter">1</p>
        <div class="bottle-buy__minus">—</div>
      </div>
      <section class="bottles">
        <div class="bottle-small"></div>
        <div class="bottle-small"></div>
        <div class="bottle-small"></div>
        <div class="bottle-small"></div>
        <div class="bottle-small"></div>
      </section>
    </div>

    <div class="information" id="more">
      <div class="information-header">
        <div class="information-header__link">
          <p>О товаре</p>
          <img src="/img/akvatory/yellow-triangle.png">
        </div>
      </div>
      <div class="information-text">
        <p>Питьевая вода "Горячий ключ" 19 л. - это артезианская вода первой категории. Глубина скважины составляет 197 метров. Производитель ООО "Ключ здоровья".</p>
        <p>Вода "Горячий Ключ" не требует глубокой очистки, так как изначально содержание в ней минералов и микроэлементов максимально приближено к идеальному. Поэтому эта вода отлично подходит для ежедневного употребления, насыщая организм необходимыми микроэлементами.</p>
        <p class="information-text__center">ХИМИЧЕСКИЙ СОСТАВ ПИТЬЕВОЙ ВОДЫ "ГОРЯЧИЙ КЛЮЧ"</p>
        <p style="text-indent: unset"> биокарбонаты - 152,5 мг/л <br>
            кальций - 0,98 мг/л       <br>
            натрий - 1,0 мг/л         <br>
            калий -  < 0,5 мг/л       <br>
            фтор - 0,21 мг/л          <br>
            серебро - < 0,025 мг/л    </p>
      </div>
      <div class="information-certificate">
        <p class="information-certificate__header">Сертификат</p>
        <a href="/img/akvatory/107.jpg"><img src="/img/akvatory/107.jpg" title="Сертификат" alt="Сертификат"></a>
      </div>
    </div>

  </div>
</div>

<script src="/apps/libs/simplelightbox-master/dist/simple-lightbox.min.js"></script>
<script>  
  $(".information-certificate a").simpleLightbox();
</script>
{/strip}



