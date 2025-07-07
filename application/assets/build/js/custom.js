/**
 * Resize function without multiple trigger
 * 
 * Usage:
 * $(window).smartresize(function(){  
 *     // code here
 * });
 */
(function($,sr){
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
      var timeout;

        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args); 
                timeout = null; 
            }

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100); 
        };
    };

    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
    $BODY = $('body'),
    $MENU_TOGGLE = $('#menu_toggle'),
    $SIDEBAR_MENU = $('#sidebar-menu'),
    $SIDEBAR_FOOTER = $('.sidebar-footer'),
    $LEFT_COL = $('.left_col'),
    $RIGHT_COL = $('.right_col'),
    $NAV_MENU = $('.nav_menu'),
    $FOOTER = $('footer');

// Sidebar

function cargarPagina(a){
	var pag=$(a).attr('data-pag')
	
	if(pag!=''){
		if($BODY.hasClass('nav-sm')){
			$SIDEBAR_MENU.find('li ul').slideUp();
			$SIDEBAR_MENU.find('li.head').removeClass('active active-sm'); //.head
		}
		
		if(BLOQUEADO_POR_CAMBIO){
			alert('bloqueado por cambio')
			//msgYesNo('¿Desea descartar los cambios realizados?',function(){//si
			//	BLOQUEADO_POR_CAMBIO=false
			//	cambiarPagina(elem)
			//},function(){} ) //no	
		}else{
			
			CARGANDO_PAGINA=true
			var loader1=$('i.fa-spin',a).show()
			$(window).scrollTop(0)
			$('#pagina').html('Cargando '+ $(a).text() +' ...' ) //loading_header loading_footer
			
			for (var i = 1; i < 99999; i++)
                window.clearInterval(i);
		
		    $('div.tooltip').remove()
			
			$('#pagina').load(pag,function(){
				CARGANDO_PAGINA = false
				loader1.hide()
			})
			
			$('li.child',$SIDEBAR_MENU).removeClass('active active-sm'); //nueva line
		
			$(a).parent().addClass('active active-sm')
			
		}
	}
	
}

$(document).ready(function() {
    // TODO: This is some kind of easy fix, maybe we can improve this
    var setContentHeight = function () {
        // reset height
        $RIGHT_COL.css('min-height', $(window).height());

        var bodyHeight = $BODY.outerHeight(),
            footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
            leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
            contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

        // normalize content
        contentHeight -= $NAV_MENU.height() + footerHeight;

        $RIGHT_COL.css('min-height', contentHeight);
    };

    $SIDEBAR_MENU.find('a').on('click', function(ev) {
        
		var $li = $(this).parent();

        if ($li.is('.active')) {
			
			if(!$li.is('.child')){
				$li.removeClass('active active-sm');
			}else{
				cargarPagina(this)
			}
            $('ul:first', $li).slideUp(function() {
                setContentHeight();
            });
			
        } else {
			
            // prevent closing menu if we are on child menu
            if (!$li.parent().is('.child_menu')) {
                $SIDEBAR_MENU.find('li.head').removeClass('active active-sm'); //.head
                $SIDEBAR_MENU.find('li ul').slideUp();
            }else{
				
				//if(CARGANDO_PAGINA) return;
				cargarPagina(this)
				
				/*var elem=this;
				var pag=$(this).attr('data-pag')
				
				if(pag!=''){
					if($BODY.hasClass('nav-sm')){
						$SIDEBAR_MENU.find('li ul').slideUp();
						$SIDEBAR_MENU.find('li.head').removeClass('active active-sm'); //.head
					}
					if(BLOQUEADO_POR_CAMBIO){
						alert('bloqueado por cambio')
						//msgYesNo('¿Desea descartar los cambios realizados?',function(){//si
						//	BLOQUEADO_POR_CAMBIO=false
						//	cambiarPagina(elem)
						//},function(){} ) //no	
					}else{
						var pag=$(elem).attr('data-pag')
						CARGANDO_PAGINA=true
						var loader1=$('i.fa-spin',elem).show()
						$(window).scrollTop(0)
						$('#pagina').html('Cargando '+ $(elem).text() +' ...' ) //loading_header loading_footer
						
						$('#pagina').load(pag,function(){
							CARGANDO_PAGINA = false
							loader1.hide()
						})	
						
						$SIDEBAR_MENU.find('li.child').removeClass('active active-sm'); //nueva line
					}	
				}*/
				
				
			}
            
            $li.addClass('active');

            $('ul:first', $li).slideDown(function() {
                setContentHeight();
            });
        }
		
		
		
		
    });

    // toggle small or large menu
    $MENU_TOGGLE.on('click', function() {
        if ($BODY.hasClass('nav-md')) {
            $SIDEBAR_MENU.find('li.active ul').hide();
            $SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
        } else {
            $SIDEBAR_MENU.find('li.active-sm ul').show();
            $SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
        }

        $BODY.toggleClass('nav-md nav-sm');

        setContentHeight();
    });

    // check active menu
    $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

    $SIDEBAR_MENU.find('a').filter(function () {
        return this.href == CURRENT_URL;
    }).parent('li').addClass('current-page').parents('ul').slideDown(function() {
        setContentHeight();
    }).parent().addClass('active');

    // recompute content when resizing
    $(window).smartresize(function(){  
        setContentHeight();
    });

    setContentHeight();

    // fixed sidebar
    if ($.fn.mCustomScrollbar) {
        $('.menu_fixed').mCustomScrollbar({
            autoHideScrollbar: true,
            theme: 'minimal',
            mouseWheel:{ preventDefault: true }
        });
    }
	
	$('.right_col').click(function(){
	
		if($BODY.hasClass('nav-sm')){
			$SIDEBAR_MENU.find('li ul').slideUp();
			$SIDEBAR_MENU.find('li.head').removeClass('active active-sm'); //.head
		}	
	})
	
});
// /Sidebar

// Panel toolbox
$(document).ready(function() {
    $('.collapse-link').on('click', function() {
        var $BOX_PANEL = $(this).closest('.x_panel'),
            $ICON = $(this).find('i'),
            $BOX_CONTENT = $BOX_PANEL.find('.x_content');
        
        // fix for some div with hardcoded fix class
        if ($BOX_PANEL.attr('style')) {
            $BOX_CONTENT.slideToggle(200, function(){
                $BOX_PANEL.removeAttr('style');
            });
        } else {
            $BOX_CONTENT.slideToggle(200); 
            $BOX_PANEL.css('height', 'auto');  
        }

        $ICON.toggleClass('fa-chevron-up fa-chevron-down');
    });

    $('.close-link').click(function () {
        var $BOX_PANEL = $(this).closest('.x_panel');

        $BOX_PANEL.remove();
    });
});
// /Panel toolbox

// Tooltip
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });
});
// /Tooltip

// Progressbar
if ($(".progress .progress-bar")[0]) {
    $('.progress .progress-bar').progressbar();
}
// /Progressbar

// Switchery
$(document).ready(function() {
    if ($(".js-switch")[0]) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#26B99A'
            });
        });
    }
});
// /Switchery

// Table
$('table input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('table input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var checkState = '';

$('.bulk_action input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('.bulk_action input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
$('.bulk_action input#check-all').on('ifChecked', function () {
    checkState = 'all';
    countChecked();
});
$('.bulk_action input#check-all').on('ifUnchecked', function () {
    checkState = 'none';
    countChecked();
});

function countChecked() {
    if (checkState === 'all') {
        $(".bulk_action input[name='table_records']").iCheck('check');
    }
    if (checkState === 'none') {
        $(".bulk_action input[name='table_records']").iCheck('uncheck');
    }

    var checkCount = $(".bulk_action input[name='table_records']:checked").length;

    if (checkCount) {
        $('.column-title').hide();
        $('.bulk-actions').show();
        $('.action-cnt').html(checkCount + ' Records Selected');
    } else {
        $('.column-title').show();
        $('.bulk-actions').hide();
    }
}

// Accordion
$(document).ready(function() {
    $(".expand").on("click", function () {
        $(this).next().slideToggle(200);
        $expand = $(this).find(">:first-child");

        if ($expand.text() == "+") {
            $expand.text("-");
        } else {
            $expand.text("+");
        }
    });
});

// NProgress
if (typeof NProgress != 'undefined') {
    $(document).ready(function () {
        NProgress.start();
    });

    $(window).load(function () {
        NProgress.done();
    });
}
