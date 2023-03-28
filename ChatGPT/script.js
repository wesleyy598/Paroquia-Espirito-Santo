// Fechar o modal ao clicar no botão "Fechar"
$('#myModal .close').click(function(){
    $('#myModal').modal('hide');
  });
  
  // Fechar o modal ao clicar fora do modal
  $('#myModal').click(function(e){
    if(e.target.id === 'myModal'){
      $('#myModal').modal('hide');
    }
  });
  