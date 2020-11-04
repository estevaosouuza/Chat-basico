$(document).ready(function () {
  comeca();
  
});



  
$(window).scroll(function() {
    var altura = $(document).height()-$(window).height()
    if ($(this).scrollTop() < altura) {
        console.log(altura + " "+ $(this).scrollTop())
        $('#news-message').fadeIn();
    } else {
        $('#news-message').fadeOut();
        console.log(altura + " "+ $(this).scrollTop())
    }
}).trigger('scroll');  





var timerI = null;
var timerR = false;

function para() {
  if (timerR) clearTimeout(timerI);
  timerR = false;
}



function comeca() {
  para();
  lista();
}



function lista() {
  $.ajax({
    url: "../model/lista.php",
    success: function (textStatus) {
      $("#lista").html(textStatus); //mostrando resultado
    },
  });
  timerI = setTimeout("lista()", 1000); //tempo de espera
  timerR = true;
  //deixarVisivel($(document).height());
}


function excluir(id_delete) {
  $.ajax({
    type: "POST",
    url: "../model/delete.php",
    async: true,
    data: {id_delete: id_delete},
    success: function (response) {
        $("#mensagem").val("");
        //location.reload();
        lista()
      },
  });

  
  //deixarVisivel($(document).height());
}




setTimeout(function(){
rolar() 
}, 1000);




function rolar() {


    setTimeout(function(){
        $('html, body').animate({
                scrollTop: $(document).height()
        }, 700);
 
    }, 100);
 


  
}

$(document).ready(function () {
  /// Quando usuário clicar em salvar será feito todos os passo abaixo
  $("#enviar").click(function () {
    var dados = $("#chat").serialize();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../model/insert.php",
      async: true,
      data: dados,
      success: function (response) {
        $("#mensagem").val("");
        //location.reload();
        rolar()
      },
    });

    return false;
  });
});
