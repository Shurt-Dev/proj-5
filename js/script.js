
$(document).ready(function(){
  $('.sidenav').sidenav();
  $(".dropdown-trigger").dropdown();
});

$(document).ready(function(){
  $('.modal').modal();
})
$('.carousel.carousel-slider').carousel({
  indicators: true,
  noWrap: true,
  onCycleTo:function(el){
    if($(el).attr('href') == "#one!"){
      $(".texte-carousel1").css("display","block");
      $(".texte-carousel2").css("display","none");
      $(".texte-carousel3").css("display","none");
      $(".texte-carousel4").css("display","none");
    }else if($(el).attr('href') == "#two!"){
      $(".texte-carousel1").css("display","none");
      $(".texte-carousel2").css("display","block");
      $(".texte-carousel3").css("display","none");
      $(".texte-carousel4").css("display","none");
    }else if($(el).attr('href') == "#three!"){
      $(".texte-carousel1").css("display","none");
      $(".texte-carousel2").css("display","none");
      $(".texte-carousel3").css("display","block");
      $(".texte-carousel4").css("display","none");
    }else if($(el).attr('href') == "#four!"){
      $(".texte-carousel1").css("display","none");
      $(".texte-carousel2").css("display","none");
      $(".texte-carousel3").css("display","none");
      $(".texte-carousel4").css("display","block");
    }
  }
});

$("#btn").click(function(){
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  }
  $("body").css("background-color","rgb(0,120,215)");
  $(".ok").css("display","none");
  $(".blue-screen").css("display","block");
  var audio = new Audio('./audio/bluescreensound.mp3');
  audio.play();
  })


function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  M.toast({html: 'Discord ID copied to clipboard'})
  $temp.remove();
}

$(document).ready(function(){
  $('.parallax').parallax();
});

var toastElement = document.querySelector('.toast');
var toastInstance = M.Toast.getInstance(toastElement);
toastInstance.dismiss();
