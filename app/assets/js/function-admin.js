/* LOGIN / NOVO CADASTRO */
$(document).ready(function(){
	$('.sidebar nav .abas a').click(function(){
		item = '#'+$(this).attr('rel');
		if(item != '#sair'){
			$('.sidebar nav .abas li').removeClass('ativo');
			$('.content-nav').removeClass('ativo');
			$(this).parent('li').addClass('ativo');
			$(item).addClass('ativo');
		}
	});
});

$(document).ready(function(){
    $('.tables').DataTable({
	    searching: false,
	    ordering:  false,
	    select: false,
		bFilter : false,               
		bLengthChange: false,
		info: false,
		language: {
			paginate: {
				previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
				next: '<i class="fa fa-angle-right" aria-hidden="true"></i>'
			}
		}
    });
});