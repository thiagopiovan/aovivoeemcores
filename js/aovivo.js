$(document).ready( function() {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.volta_topo').fadeIn();
        } else {
            $('.volta_topo').fadeOut();
        }
    });

    $('.volta_topo').click(function () {
        $("php, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


	/*	jQuery Carrousel */
    $('#myCarousel').carousel({
        interval: 3000
    });

    var clickEvent = false;

    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');

    }).on('slid.bs.carousel', function(e) {

        if(!clickEvent) {
            var count = $('#myCarousel .nav').children().length -1;
            var current = $('#myCarousel .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));

            if(count == id) {
                $('#myCarousel .nav li').first().addClass('active');

            }

        }   

    clickEvent = false;
        
    });
    
	/* jQuery Modal Login */
    $("#myBtn").click(function(){
        $("#myModal").modal();
		
    });

    /*  Dropdown da barra de pesquisa em Noticias */
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
	
    $('#doacao').keyup(function(){
        var v = $(this).val();
        v=v.replace(/\D/g,'');
        v=v.replace(/(\d{1,2})$/, ',$1');  
        v=v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');  
        v = v != ''?'R$ '+v:'';
        $(this).val(v);
    });

	/* jQuery Validação do Cadastro */
    $('#contato_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            usuario: {
                validators: {
                        stringLength: {
                        min: 4,
						max: 12
                    },
                        notEmpty: {
                        message: 'Por favor, digite um nome de usuário'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, digite um endereço de email'
                    },
                    emailAddress: {
                        message: 'Por favor, digite um endereço de email válido'
                    }
                }
            },
            senha: {
                validators: {
					stringLength: {
                        min: 6,
						max: 16,
						message: 'Mínimo 6 caracteres e no máximo 16 caracteres'
                    },
                    notEmpty: {
                        message: 'Por favor, digite uma senha'
                    },
                    identical: {
						field: 'confirmar_senha',
						message: 'A senha e sua confirmação não conferem'
					}
                }
            },
            confirmar_senha: {
                validators: {
					stringLength: {
                        min: 6,
						max: 16,
						message: 'Mínimo 6 caracteres e no máximo 16 caracteres'
                    },
                    notEmpty: {
                        message: 'Por favor, digite uma senha'
                    },
                    identical: {
						field: 'senha',
						message: 'A senha e sua confirmação não conferem'
					}
                }
            },
            nome: {
                validators: {
                     stringLength: {
                        min: 3
                    },
                    notEmpty: {
                        message: 'Por favor, digite um nome'
                    }
                }
            },
            sobrenome: {
                validators: {
                     stringLength: {
                        min: 3
                    },
                    notEmpty: {
                        message: 'Por favor, digite um sobrenome'
                    }
                }
            },
            celular: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, digite um número de celular ou telefone'
                    },
                    phone: {
                        country: 'BR',
                        message: 'Por favor, digite um número válido com o seu código de àrea'
                    }
                }
            },
            /*rg: {
                validators: {
					regexp: {
						regexp: ^\(?([0-9]{2})?\)? ?([0-9]{4,5})-?([0-9]{4})$,
						message: 'Digite um RG no formato válido'
					}
                }
            },*/
            cidade: {
                validators: {
                    stringLength: {
                        min: 3
                    },
                    notEmpty: {
                        message: 'Por favor, digite o nome de sua cidade'
                    }
                    }
                },
			estado: {
                validators: {
                      stringLength: {
                        min: 2
                    },
                    notEmpty: {
                        message: 'Por favor, digite o nome do seu estado'
                    }
                    }
                }
			
            }
        })
        .on('success.form.bv', function(e) {
            $('#mensagem_sucesso').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contato_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });

});

/*	Javascript Patricionadores/Colaboradores/Apoiadores */
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides-um");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}