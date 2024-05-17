/** Scripts personalizados */
$(function(){
  /** Largura da janela */
  var largura = $(window).width();

  console.log('largura: ', largura);

  if( largura > 1300 ){
    console.log('Janela > 1300, ajustar configurações do menu');
    $("#menu").attr('style', 'padding: 10px 15%; margin: 0 auto');
    $("#navbar-brand").removeClass('col-md-1').addClass('col-md-3');
  }

});