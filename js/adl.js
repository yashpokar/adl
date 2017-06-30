// Switch Sidebar To On And Off
var sidebar_switch = document.querySelector('.adl-navigation .adl-navigation__switch-sidebar');
var menu_switch = document.querySelector('.adl-navigation .adl-navigation__switch-menu');
var sidebar = document.querySelector('.adl-sidebar');
var menu = document.querySelector('.adl-navigation__menu--collapsed');

sidebar_switch.addEventListener('click', () => {
	sidebar.style.visibility = (sidebar.style.visibility == 'visible') ? 'hidden' : 'visible';
});

menu_switch.addEventListener('click', () => {
	menu.style.display = (menu.style.display == 'block') ? 'none' : 'block';
});

// Dropdown Menu
var dropdown_menus = document.querySelectorAll('.adl-navigation__menu > li.dropdown');

dropdown_menus.forEach(li => {
	let menu = li.children[1];
	li.addEventListener('mouseenter', () => {
		menu.style.visibility = 'visible';
		li.setAttribute('class', 'dropdown active');
	});
	li.addEventListener('mouseleave', () => {
		menu.style.visibility = 'hidden';
		li.setAttribute('class', 'dropdown');
	});
});

// Alert
var alerts = document.querySelectorAll('.adl-alert__close');

alerts.forEach(alert => {
	alert.addEventListener('click', () => {
		alert.parentElement.remove();
	});
});

// Modal
var models = document.querySelectorAll('.adl-modal');
var close_models = document.querySelectorAll('.adl-modal__close');

models.forEach(modal => {
	let stands_for = document.querySelector(modal.getAttribute('stands-for'));
	
	stands_for.addEventListener('click', () => {
		modal.style.visibility = 'visible';
	});
});

close_models.forEach(model => {
	model.addEventListener('click', () => {
		model.parentElement.style.visibility = 'hidden';
	});
});

// Notify
var notifies = document.querySelectorAll('.adl-notify__close');

notifies.forEach(notify => {
	notify.addEventListener('click', () => {
		notify.parentElement.remove();
	});
});

var adl = {
	test: () => {
		console.log('okey');
	}
};

var $ = adl;