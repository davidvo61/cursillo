var Reporting = function(){};

$.extend(Reporting.prototype, {
	template: '<h2>Reporting</h2>',
    
    load: function() {
        this.body = $(this.template);
    },
    
    getDisplay: function() {
        return this.body;
    }
});