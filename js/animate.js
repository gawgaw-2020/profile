$(window).on('load scroll', function(){
  //animatedのclassを持った要素をセレクタに指定
  const elem = $('.animated');

  elem.each(function () {

    //data属性からアニメーション名を取得
    const isAnimate = $(this).data('animate');
    // Get position of the element
    const elemOffset = $(this).offset().top;
    const scrollPosition = $(window).scrollTop();
    const windowsHeight = window.innerHeight;

    // Fired animation when the element on the bottom of the window
    if(scrollPosition > elemOffset - (windowsHeight+77) ){
      $(this).addClass(isAnimate);
    }
  });

});

