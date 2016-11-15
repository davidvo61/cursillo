var Team_Builder = function(){};

$.extend(Team_Builder.prototype, {
	template: '<h2>Team Builder</h2>',
    
    load: function() {
        this.body = $(this.template);
    },
    
    getDisplay: function() {
        return this.body;
    }
});