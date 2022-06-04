function res(){
   var width = $('.franchise-block').width();
	 $('.franchise-block').height(width);
} res();

$( window ).resize(function() {
	res();
});




/* Открытие меню */
 
var main = function() { 
 
    $('.icon-menu').click(function() { 
 
        $('.sidebar-mobail').animate({ 
 
            left: '0vw'
 
        }, 200); 

      $('.icon-menu').css('display','none');
     $('.icon-close').css('display','block');

        
    });
 
 
/* Закрытие меню */
 
    $('.icon-close').click(function() {
 
        $('.sidebar-mobail').animate({ 
            left: '-100vw' 
 
        }, 200);
     $('.icon-close').css('display','none');
     $('.icon-menu').css('display','block');

    });
};
 
$(document).ready(main); /* как только страница полностью загрузится, будет
               вызвана функция main, отвечающая за работу меню */