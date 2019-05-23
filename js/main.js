$(document).ready(function(){
    $(".bottle-info__about").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
    top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1500);
  });
});
  
var circlesCount  =   20 - $(`.bottle-small`).length,
          cloned  =   $(`.bottle-small:first`);

for(var i = 0; i < circlesCount; i++) {
   cloned.clone().appendTo('.circle').addClass('cloned');
}

$(`.bottle-small`).click(function() {
  $(`.bottle-small`).removeClass('active');
  $(this).addClass('active');
})

$(`.bottle-buy`).click(function() {
  $('.bottle-buy__controls').css("display") == 'none' ? $('.bottle-buy__controls').fadeIn() : $('.bottle-buy__controls').fadeOut();
})

 var fields     =   $('.bottle-small'),
  container     =   $('.circle'),
  width         =   container.width(),
  height        =   container.height(),
  angle         =   -.65,
  radius        =   container.width() / 2 * .97,
  step          =   (2*Math.PI) / fields.length;
  
  fields.each(function() {
    var x       =   Math.round(width/2 - radius * Math.cos(angle) - $(this).width()/2),
        y       =   Math.round(height/2 - radius * Math.sin(angle) - $(this).height()/2);
    
    $(this).css({
      left: x + 'px',
      top: y + 'px'
    });
    
    angle       +=  step;
});

$(`.bottle-small:first-child`).css('background', 'white url("/img/akvatory/Горячий ключ_вотерзнак Акватория.png") no-repeat center/contain');
$(`.bottle-small:nth-child(2)`).css('background', 'white url("/img/akvatory/buddha_PNG3.png") no-repeat center/contain');
$(`.bottle-small:nth-child(3)`).css('background', 'white url("/img/akvatory/kisscc0-vladimir-putin-accession-of-crimea-to-the-russian-vladimir-putin-5b5eeaa984ce88.524078991532947113544.jpg") no-repeat center/contain');
$(`.bottle-small:nth-child(4)`).css('background', 'white url("/img/akvatory/banana_PNG817.png") no-repeat center/contain');

$(`.bottle-small:first-child`).addClass('active');

$(`.bottle-small:nth-child(4)`).click(function() {
  $('.bottle').css({
    'background': 'url("/img/akvatory/banana_PNG817.png") no-repeat center/contain',
    'background-size': '350px'
  });
});
$(`.bottle-small:nth-child(5)`).click(function() {
  $('.bottle').css({
    'background': 'url("/img/akvatory/bottle.png") no-repeat center/contain',
    'background-size': '500px'
  });
});
$(`.bottle-small:nth-child(3)`).click(function() {
  $('.bottle').css({
    'background': 'url("/img/akvatory/vladimir_putin_PNG32.png") no-repeat center/contain',
    'background-size' : '400px',
  });
});
$(`.bottle-small:nth-child(2)`).click(function() {
  $('.bottle').css({
    'background': 'url("/img/akvatory/buddha_PNG3.png") no-repeat center/contain',
    'background-size': '400px',
  });
});
$(`.bottle-small:nth-child(1)`).click(function() {
  $('.bottle').css({
    'background': 'url("/img/akvatory/Горячий ключ_вотерзнак Акватория.png") no-repeat center/contain',
    'background-size': '250px'
  });
});
/* $(`.bottle-small`).click(function() {
  $('.bottle').css('background-size', '200px');
}); */

var counter = 1;
$(`.bottle-buy__plus`).click(function() {
  counter++;
  $(`.bottle-buy__counter`).text(counter);
});
$(`.bottle-buy__minus`).click(function() {
  counter--;
  if (counter == 0) {
    counter = 1;
  }
  $(`.bottle-buy__counter`).text(counter);
});