jQuery(document).ready(function($) {

// ============================================================================================
// Utility Drawer: Animates down on click, disappears on off click or other drawer click
var drawer_timing = 250,
	drawer_trigger = $('.drawer-trigger'),
	drawer = $('.utility-drawer'),
	user_status = $('user-status'),
	reset_position = -250,
	scrolled = 0,
	active_position = -25,
	inactive_utility = $('.utility-drawer section'),
	user_status_caret = $('.user-status-caret'),
	open_drawer,
	is_animating = false,
	doc = $(document);

function resetCaret() {
	user_status_caret.css({'display':'none'});
	is_animating = false;
}
function drawerReset() {
	drawer_trigger.removeClass('active');
	drawer.animate({'top':reset_position},0, function() {
		is_animating = false;
	});
	inactive_utility.css({'display':'none'});
	resetCaret();
}
function drawerOpen(me, active_utility) {
	me.addClass('active');
	me.find(user_status_caret).css({'display':'block','top':'100%'});
	$(active_utility).css({'display':'block'});
	drawer.animate({'top':active_position}, drawer_timing, function() {
		is_animating = false;
	});
	open_drawer = active_utility;
}
drawer_trigger.on('click', function() {
	var me = $(this),
		active_utility = me.data('utility');
	if (!is_animating) {
		is_animating = true;
		if ( open_drawer == active_utility ) {
			drawerReset();
			open_drawer = '';
		} else {
			if ( !(me.hasClass('active')) ) {
				drawerReset();
				drawerOpen(me, active_utility);	
			} else {
				return false;
			}
		}
	} else if (is_animating == true) {
		drawerReset();
	}
});
// subpar fix for rapid user clicking on drawer trigger icons/links, but workable in allowed timeframe.
drawer_trigger.on('dblclick', function() {
	var me = $(this),
		active_utility = me.data('utility');
	if (!is_animating) {
		is_animating = true;
		if ( open_drawer == active_utility ) {
			drawerReset();
			open_drawer = '';
		} else {
			if ( !(me.hasClass('active')) ) {
				drawerOpen(me, active_utility);	
			} else {
				return false;
			}
		}
	} else if (is_animating == true) {
		drawerReset();
	}
});

// close utility drawer when user clicks away from drawer
doc.on('mouseup', function(e) {
    var edit_menu = $('.icon-menu-dropdown'); 	
    if (!drawer.is(e.target) && (drawer.has(e.target).length === 0 )) {
        drawerReset();
    } else if (!edit_menu.is(e.target) && (edit_menu.has(e.target).length === 0 )) {
        $('.module-menu-dropdown').removeClass('show-menu');
    } else {	
    	return false;
    }

    // closes open popovers if clicking outside
     $('[data-toggle="popover"]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});

// ========================================================================================
// full width module fix
var breakpoint_md = 785,
	breakpoint_sm = 620,
	nav_width = 230,
	callMobileNav =	false,
	content = $('#content'),
	wrap = $('#wrap');
function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] - 15 , height : e[ a+'Height' ] };
}
function setContentWidth(w) {
	var width = 0;
	if (w > breakpoint_md) {
		width = w - nav_width;
		callMobileNav = false;
	} else if (w < breakpoint_sm) { 
		width = breakpoint_sm -15;
		callMobileNav = true;
	} else {
		width = w - 40;
		callMobileNav = true;
	} 
	checkMobile();
	content.css({'width':width});
}
function setContentHeight(h, w) {
	content.css({'min-height' : h});
	var content_h = content.height();
}
function setContentSize() {
	screen_width = viewport().width,
	screen_height = viewport().height;
	setContentWidth(screen_width);
	setContentHeight(screen_height -100);
}
$(window).resize(function() {
	setContentSize();
});
setContentSize();

// ========================================================================================
// main nav active tabs and active page states
var active_nav_tab_html = '<span class="mainnav-caret"></span>',
	active_main_nav_tab = $('#mainnav > .panel > a.active'),
	main_nav_link = $('#mainnav > .panel > a'),
	nav_accordion = $('#mainnav a[data-toggle="collapse"]');
main_nav_link.on('click', function(e) {
	main_nav_link.removeClass('active');
	$(this).addClass('active');
	$(this).children('a:first').append(active_nav_tab_html);
	$('#mainnav .collapse.in').collapse('toggle');
	nav_accordion.addClass('collapsed');
});		
active_main_nav_tab.append(active_nav_tab_html);

// main nav 2nd, 3rd, 4th tier active states
var nav_link = $('#mainnav .panel a.panel-heading'),
	active_page = $('.active-page');
nav_link.on('click', function(e) {
	nav_link.removeClass('active-page');
	$(this).addClass('active-page');
});
nav_link.append(active_nav_tab_html);

// main navigation collapsing menu caret functionality
var nav_caret_html 	= '<span class="icon-arrow-right pull-right"></span><span class="icon-arrow-down pull-right"></span>';
	nav_accordion.append(nav_caret_html);

// ========================================================================================
// mobile/tablet nav movement
var wrap = $('div#wrap');
function checkMobile() {
	if (callMobileNav) {
		function hideNav() {
			if (wrap.hasClass('navslide')) {
				wrap.removeClass('navslide');
			}
		}
		function showNav() {
			if (!wrap.hasClass('navslide')) {
				wrap.addClass('navslide');
			}
		}
		function mobileNav() {
			$('button.navbar-toggle').off('click');
			$('button.navbar-toggle').on('click', function() {
				wrap.toggleClass('navslide');
			});
			content.off('click');
			content.on('click', function() {
				hideNav();
			});
		}
		$(function() {     
			$('div#wrap').swipe( {
				swipeLeft: function(event, direction) {
					hideNav();
				},
				swipeRight: function(event, direction) {
					showNav();
				},
				excludedElements: ('.breadcrumb', '.module')
			});
		});
		mobileNav();
	} else {
		// dance.
	}
}
	
// ========================================================================================
// ajax page loading
var main_nav_link_load = $('#mainnav a'),
	content_container = $('div#content-container');

content_container.load('modules/mock-landing.html');

main_nav_link_load.on('click', function(e) {
	e.preventDefault();
	var page_load = e.target.hash.split('#')[1] + ".html";
	$.ajax({
		url: "modules/" + page_load,
		success: function(html) {
			content_container.html(html);
		}
	});
});
	
doc.on('ajaxComplete', function() {
	pageUpdate();
});

// ========================================================================================
// return to top
var return_to_top = $('footer > .return-to-top'),
	return_time = 600,
	page = $(window),
	return_threshold = 60;
page.on('scroll',function() {
	scrolled = page.scrollTop();
	if ( scrolled > return_threshold ) {
		return_to_top.animate({'opacity':'1'}, 150);
	} else {
		return_to_top.animate({'opacity':'0'}, 150);
	}
});
return_to_top.on('click', function() {
	$('html, body').animate({ scrollTop: 0 }, return_time);
	return false;
});

// ========================================================================================
// conditional updates made to each page upon ajax load
var element_appends = [
	'<span class="tab-caret"></span>',
	'<span class="icon-arrow-down"></span>'
];

function checkExists(selector) {
	if (selector.length > 0) {
		return true;
	} else {
		return false;
	}
}

function appendMe(selector, markup) {
		selector.append(markup); 
}

function pageUpdate() {

	var elements = [
		$('.nav.nav-tabs>li>a'),			// 0
		$('#content div.custom-select'),	// 1
		$('.tip'),							// 2
		$('.file-tree'),					// 3
		$('pre > code'),					// 4 
		$('.modal'),						// 5
		$('.datepicker'),					// 6
		$('.editing-options'),				// 7 
		$('.dropdown')						// 8
	];

	for (var i=0; i<elements.length; i++) {
		if (checkExists(elements[i])) {
			switch(elements[i]) {
				case elements[0]:
					appendMe(elements[0], element_appends[0]);
					break;
				case elements[1]:
					appendMe(elements[1], element_appends[1]);
					break;
				case elements[2]:
					popoverDefaults();
					break;
				case elements[3]:
					fileTree();
					break;
				case elements[4]:
					elements[4].each(function(i, e) {
						hljs.highlightBlock(e);
					});
					break;
				case elements[5]:
					modalFocus();
					break;
				case elements[6]:
					elements[6].datepicker();
					datepickerDefaults(elements[6]);	
					break;
				case elements[7]:
					attachModuleMenu();
					break;	
				case elements[8]:
					appendMe(elements[8], element_appends[1]);
					break;	
			}
		}
	}
}

// ========================================================================================
// module header menu functionality
// **** module menus may be going away. remove this if so.

function attachModuleMenu() {
	var module = $('.module');
	var menu = $('.module > .header > .editing-options > .module-menu-bar');
	var dropdown = $('.module > .header > .editing-options > .module-menu-dropdown');

	$.each(module, function() {
		var this_menu = $(this).find('.module-menu-bar').html();
		$(this).find('.module-menu-dropdown').html(this_menu);
	});
}

doc.on('click', '.module-menu-trigger', function() {
	$(this).next('div.module-menu-dropdown').toggleClass('show-menu');
});

// ========================================================================================
// Popover, Tooltip, Modal options
function popoverDefaults() {
	var tip = $('.tip');
	tip.popover({
		animation: true,
		html: true,
		content: function() {
			var this_content = $(this).data('popovercontent');
			return $(this_content).html();
		}
	});
}

// change focus to first 'autofocus' input in modals when opened
function modalFocus() {
	var modal = $('.modal');
	modal.on('shown.bs.modal', function() {
		$('[autofocus]:first').focus();
	});
}
	
		
// ========================================================================================
// Custom Dropdown
var dropdown_selection = $('ul.dropdown-menu li a');
doc.on('click', dropdown_selection, function(e) {
	var me = $(e.target);
	me.parents(".dropdown").find('.selection').text(me.text());
		me.parents(".dropdown").find('.selection').val(me.text());
});

// ========================================================================================
// File Tree Collapse/Expand All
function fileTree() {
	var ft_expand = $('.file-tree .ft-expand-all'),
		ft_collapse	= $('.file-tree .ft-collapse-all'),
		content = $('#content');

	ft_expand.on('click', function(e) {
		$('.file-tree .collapse').collapse('show');
		$('.file-tree .collapsed').removeClass('collapsed');
		
	});

	ft_collapse.on('click', function(e) {
		$('.file-tree .collapse.in').collapse('hide');
		$('[data-toggle="collapse"]').addClass('collapsed');
	});
}

// ============================================================================
// Bootstrap Datepicker
function datepickerDefaults(dp){

	dp.on('changeDate', function(e){
		dp.datepicker('hide');
	});

}



}); // ====================================
