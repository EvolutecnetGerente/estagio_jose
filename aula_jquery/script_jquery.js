// $(document).ready(function(){
//     $('button').click(function(){
//         $('h1').hide();
//     });
// });

// ---------------------------------------------------------------------------------------------------------------------
//                                  FORMA SIMPLIFICADA DA MESMA FUNÇÂO ACIMA
//  $(function(){
//      $('button').click(function(){
//          $('h1').hide();
//      });
//  });
// ---------------------------------------------------------------------------------------------------------------------
//                                                 ALTERANDO O CSS
// $(function(){
//     $('#azul').click(function(){
//         $('p').css("background-color", "blue");
//         $('p').fadeOut('slow');
//         $('p').delay(1000);
//         $('p').fadeIn('slow');
//     });
//
//     $('#vermelho').click(function(){
//         $('p').css("background-color","red");
//         $('p').fadeOut('fast');
//         $('p').fadeIn('fast');
//         $('p').fadeOut(2000);
//         $('p').fadeIn(3000);
//     });
// });
// ---------------------------------------------------------------------------------------------------------------------
//                                                 GRAVANDO MENSAGEM
// $(function(){
//     $('#azul').click(function(){
//         $('p').css("background-color", "blue");
//         $('p').fadeOut('');
//         $('p').delay(1000);
//         $('p').fadeIn('');
//     });
//
//     $('#vermelho').click(function(){
//         $('p').css("background-color","red");
//         $('#mensagem').text("Cor Alterada com sucesso");
//         $('#mensagem').css('color','red');
//         $('#mensagem').css('border','1px solid red');
//         $('#mensagem').delay(3000);
//         $('#mensagem').fadeOut('fast');
//     });
// });
// ---------------------------------------------------------------------------------------------------------------------
//                                                ENCADEAMENTO EM BLOCO
// $(function(){
//     $('#azul').click(function(){
//         $('p').css("background-color", "blue");
//         $('p').fadeOut('');
//         $('p').delay(1000);
//         $('p').fadeIn('');
//     });
//
//     $('#vermelho').click(function(){
//         $('p')
//             .css("background-color","red");
//         $('#mensagem')
//             .text("Cor Alterada com sucesso")
//             .css('color','red')
//             .css('border','1px solid red')
//             .delay(3000)
//             .fadeOut('fast');
//     });
// });
// ---------------------------------------------------------------------------------------------------------------------
//                                            DECLARAÇÃO MÚLTIPLAS DE CSS
// $(function(){
//     $('#azul').click(function(){
//         $('p').css("background-color", "blue");
//         $('p').fadeOut('');
//         $('p').delay(1000);
//         $('p').fadeIn('');
//     });
//
//     $('#vermelho').click(function(){
//         $('p')
//             .css("background-color","red");
//         $('#mensagem')
//             .text("Cor Alterada com sucesso")
//             .css({color:'red', border:'1px solid red', backgroundColor:'#F08080'})
//             .delay(3000)
//             .fadeOut('fast');
//     });
// });
// ---------------------------------------------------------------------------------------------------------------------
//                                          ADICIONANDO E REMOVENDO CLASSES
// $(function(){
//     $('#azul').click(function(){
//         $('p').css("background-color", "blue");
//         $('p').fadeOut('');
//         $('p').delay(1000);
//         $('p').fadeIn('');
//     });
//
//     $('#vermelho').click(function(){
//         $('p')
//             .css("background-color","red");
//         $('#mensagem')
//             .text("Cor Alterada com sucesso")
//             .css({color:'red', border:'1px solid red'})
//             .delay(3000)
//             .fadeOut('fast')
//             .addClass('green');
//
//         $('button').removeClass('red');
//     });
// });
// ---------------------------------------------------------------------------------------------------------------------
//                                                  SLIDESHOW
$(function(){
    $('#li').click(function(){
        $('#i2').hide();
        $('#i3').hide();
        $('#i4').hide();
        $('#i1').show();
    });
    $('#l2').click(function(){
        $('#i1').hide();
        $('#i3').hide();
        $('#i4').hide();
        $('#i2').show();
    });
    $('#l3').click(function(){
        $('#i1').hide();
        $('#i2').hide();
        $('#i4').hide();
        $('#i3').show();
    });
    $('#l4').click(function(){
        $('#i1').hide();
        $('#i2').hide();
        $('#i3').hide();
        $('#i4').show();
    });

});

// ---------------------------------------------------------------------------------------------------------------------

