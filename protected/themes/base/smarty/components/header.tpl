{strip}
<div class="form-container hide-form" id="sign-up-form">
  <div class="sign-up-form">
    <span class="fas fa-times" id="close-form" aria-hidden="true"></span>
    <form action="" method="POST">
      <div class="input-group">
        <label for="clientName">Ваше имя</label>
        <input type="text" name="name" id="clientName">
      </div>
      <div class="input-group">
        <label for="telNumb">Ваш номер</label>
        <input type="tel" name="phone" id="telNumb">
      </div>
      <input type="submit">
    </form>
  </div>
</div>

<input id="main-menu-checkbox" type="checkbox">

<nav id="main-menu" role="navigation" class="main-menu" aria-label="Main menu">
  <label for="main-menu-checkbox"class="menu-close">
    <span class="sr-only">Close main menu</span>
    <span class="fas fa-times" aria-hidden="true"></span>
  </label>
  <ul>
    <li><a href="#">Products</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>

<label for="main-menu-checkbox"
  class="backdrop"
  tabindex="-1"
  aria-hidden="true" hidden></label>

<div class="wrapper">
  <header>
    <div class="navbar">
      <div class="logo">
        <img src="img/logo.svg">
      </div>
      <div>
        <div class="socials">
          <a href="#"><img src="img/facebook.svg"></a>
          <a href="#"><img src="img/instagram.svg"></a>
        </div>
        <label for="main-menu-checkbox" class="menu-toggle">
          <span class="sr-only">Open main menu</span>
          <span class="fa fa-bars" aria-hidden="true"></span>
        </label>
        </a>
      </div>
    </div>

    <div class="header-info">
      <div class="info">
        <h1>Стоматология в Краснодаре M-Denta</h1>
        <p><b>65,5 тыс.</b> подписчиков в Instagram</p>
        <div>
          <p class="phones">
            <b id="phone1"></b><br>
            <b id="phone2"></b>
          </p>
          <p>
            г. Краснодар,<br>
            ул. Северная, 490
          </p>
        </div>
      </div>

      <div class="sign-up">
        <img src="img/ava.svg">
        <span href="#" id="open-form">ЗАПИСАТЬСЯ НА ПРИЕМ</span>
      </div>
    </div>
  </header>
{/strip}