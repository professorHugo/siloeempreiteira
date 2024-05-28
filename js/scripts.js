/** Scripts personalizados */
$(function(){
  /** Largura da janela */
  var largura = $(window).width();

  console.log('largura: ', largura);

  if( largura > 1300 ){
    console.log('Janela > 1300, ajustar configurações do menu');
    $("#menu").attr('style', 'padding: 10px 15%; margin: 0 auto');
    $("#navbar-brand").removeClass('col-md-1').addClass('col-md-3');

    /** Remover blocos desnecessários */
    $("#eletrica2").attr('style', 'display: none;');
    $("#revestimentos2").attr('style', 'display: none;');
    $("#pintura_interna2").attr('style', 'display: none;');
    $("#space").attr('style', 'display: none;');

    /** Alterar formatação para dar espaçamentos */
    $("#hidraulica").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0.75rem 2rem 0; color: #FFF');
    $("#eletrica").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0 2rem 0.75rem;');
    $("#pintura_predial").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0.75rem 2rem 0; color: #FFF');
    $("#revestimentos").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0 2rem 0.75rem;');
    $("#impermeabilizacao").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0.75rem 2rem 0; color: #FFF');
    $("#pintura_interna").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0 2rem 0.75rem;');
    $("#telhadista").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding: 2rem 0.75rem 2rem 0; color: #FFF');
  }else{
    /** Remover blocos desnecessários */
    $("#eletrica").attr('style', 'display: none;');
    $("#revestimentos").attr('style', 'display: none;');
    $("#pintura_interna").attr('style', 'display: none;');

    /** Alterar formatação para dar espaçamentos */
    $("#hidraulica").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem; color: #FFF');
    $("#eletrica2").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem;');
    $("#pintura_predial").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem; color: #FFF');
    $("#revestimentos2").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem;');
    $("#impermeabilizacao").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem; color: #FFF');
    $("#pintura_interna2").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem;');
    $("#telhadista").attr('style', 'margin-top: 2rem; margin-bottom: 2rem; padding-top: 2rem; color: #FFF');
    $("h4.col-12.text-center").attr('style', 'margin-top: 1rem');

  }

});