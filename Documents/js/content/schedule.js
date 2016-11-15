var Schedule = function(){};

$.extend(Schedule.prototype, {
	template: '<h2>Schedule</h2>',
    
    load: function() {
        this.body = $(this.template);
    },
    
    getDisplay: function() {
        return this.body;
    }
});


