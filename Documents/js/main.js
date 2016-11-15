$(document).ready(function(){	
	// Navigation control
	$('.nav a').on('click', function(event){
		var element = event.target;
		var name = element.className;
		var tab = element.parentElement;
		// Remove active class from previously selected nav tab
		$('.active').removeClass('active');
		// Add the active class to currently selected nav tab
		$(tab).addClass('active');
		// Hide all content sections
		$('.content').hide();
		// Load and show the section selected
		var object;
		switch(name){
			case 'schedule':
				object = new Schedule();
				break;
			case 'team-builder':
				object = new Team_Builder();
				break;
			case 'talks': 
				object = new Talks();
				break;
			case 'reporting':
				object = new Reporting();
				break;
		}
		object.load();
		$('.content.' + name).html(object.getDisplay()).show();
	});
	
	// Trigger schedule tab click
	$('.nav a.schedule').trigger('click');
	
});