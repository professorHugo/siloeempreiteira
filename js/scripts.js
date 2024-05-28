/** Scripts personalizados */
$(function(){
  /** Largura da janela */
  var largura = $(window).width();

  console.log('largura: ', largura);

  if( largura > 1300 ){
    console.log('Janela > 1300, ajustar configurações do menu');
    $("#menu").attr('style', 'padding: 10px 15%; margin: 0 auto');
    $("#navbar-brand").removeClass('col-md-1').addClass('col-md-3');
    $("#eletrica2").attr('style', 'display: none;');
    $("#revestimentos2").attr('style', 'display: none;');
    $("#pintura_interna2").attr('style', 'display: none;');
  }else{
    $("#eletrica").attr('style', 'display: none;');
    $("#revestimentos").attr('style', 'display: none;');
    $("#pintura_interna").attr('style', 'display: none;');

    $("#hidraulica").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
    $("#eletrica2").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
    $("#pintura_predial").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
    $("#revestimentos2").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
    $("#impermeabilizacao").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
    $("#pintura_interna2").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
    $("#telhadista").attr('style', 'margin-top: 2rem; margin-bottom: 2rem');
  }

});