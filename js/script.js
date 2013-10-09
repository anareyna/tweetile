var Tweetile = ( function() {
    var st = {
    	container : '.container',
    	retweet: '.retweet',
    	submenu: '.submenu',
    	tweet: '.tweet',
    	tweetText: '.tweet-text'
	},
	dom = {},
	catchDom = function() {
		dom.container = $(st.container);
		dom.retweet = $(st.retweet);
		dom.submenu = $(st.submenu);
		dom.tweet = $(st.tweet);
		dom.tweetText = $(st.tweetText);
	},
	bindEvents = function() {
		dom.retweet.on('mouseenter', toggleSubmenu);
	},
	runFunction = function() {
		initEmbedlyMasonry();
		/*initMasonry();
		initEmbedly();*/
	};
	toggleSubmenu = function() {
		$(this).parent().find('.submenu').toggleClass('hide');
	},

	initEmbedlyMasonry = function() {
		dom.tweetText.find('a').not('.username, .ht').embedly({
            maxwidth : 280,
            words : 30,
            wmode: 'transparent',
            method: 'afterParent',
            key:'6e23d5a4685147d28f5b382dc110e276'
         }).bind('displayed', function() {
	         	dom.container.masonry({
				itemSelector: '.tweet'
			});
         });
	},
	
	initMasonry = function() {
		dom.container.masonry({
			itemSelector: '.tweet'
		});
	},
	initEmbedly = function() {
		dom.tweetText.find('a').not('.username, .ht').embedly({
            maxwidth : 280,
            words : 30,
            wmode: 'transparent',
            method: 'afterParent',
            key:'6e23d5a4685147d28f5b382dc110e276'
         });
	}
	return {
		init : function() {
			catchDom();
			bindEvents();
			runFunction();
		}
	}
})();
Tweetile.init();