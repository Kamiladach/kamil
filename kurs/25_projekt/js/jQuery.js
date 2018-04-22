$(document).ready(function(){
  $('#tabela1 th').css({'background':'#767e76','color':'white'});
  $('#tabela1 tr:even').css('background','#3aeaf8');
  $('#tabela1 tr:odd').css('background','#43aaa2');

  $('#tabela1 tr').mouseover(function(){
    $(this).css('background','#12ffa4');
  });

  $(this).mouseout(function(){
    $('#tabela1 tr:even').css('background','#3aeaf8');
    $('#tabela1 tr:odd').css('background','#43aaa2');
  });

});
