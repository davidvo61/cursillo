var Talks = function(){};

$.extend(Talks.prototype, {
	template: '<h2>Talks</h2>',
    
    load: function() {
        this.body = $(this.template);
    },
    
    getDisplay: function() {
        return this.body;
    }
});