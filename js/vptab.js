/**
 * This handles the initial loading of a specific tab on the page load.
 * @method object_mes_hashTab
 * @param tabId {String} Required. The id of the pages tabs.
 * @param tourId {String} Required. The id of the pages tabs.
 * @static
 */
window.object_mes_hashTab = function(tabId, tourId) {
	var hash = window.location.hash.replace(/#/, ''),
		cId = tourId.replace(/-.*/, ''),
		cTabId = $('#tab-' + hash),
		cTourId = $('#' + cId + '-' + hash),
		first = $('#' + tabId + ' li.selected')[0],
		tId = 0,
		_autoplayTimeout = 5000,
		_intervalId = 0,
		_autoplayIndex = 0,
		_tabs = $('li', '#' + tabId);
		
	if (hash && cTabId && cTabId) {		
		// clears the existing select/active styles
		if (first) {
			$(first).removeClass('selected');
			$('#' + tourId + ' div.active').removeClass('active');
		}
	
		// add the classes to appropriate element
		cTabId.addClass('selected');
		cTourId.addClass('active');
	}
	
	var handleTabClick = function(){
		hash = $(this).attr('id').replace(/.*?-/,'');
		$('.selected','#'+tabId).removeClass('selected');
		$('div.active','#'+tourId).fadeOut(250);
		$('#' + cId + '-' + hash).css('visibility','visible').fadeIn().addClass('active');
		$(this).addClass('selected');
	};
	
	/*
	not necessary while using the hover behavior
	$.ready($('li','#'+tabId).click(function() {
		handleTabClick.call(this);
		clearInterval(_intervalId);
	}));
	*/
	
	$.ready($('li','#'+tabId).hover(handleTabClick));
	
	var targetTabFromHash = function() {
		var nhash = window.location.hash.replace(/#/, '') || (first && first.id.replace(/.*-/, ''));
		if (hash && nhash && hash !== nhash) {
			handleTabClick.call($('#tab-' + nhash));
		}
	};
	
	// polls the hash 4x a second to see if it has changed. if it has, then update the DOM
	// tId = setInterval(targetTabFromHash, 250);
	targetTabFromHash(); // turned off auto polling of the hash, so that hover can work, however, we still check on page load to allow tab targeting from other pages
	
	/* No Autoplay
	if (cTabId) {
		_autoplayIndex = _tabs.index(cTabId);
	}
	
	if (0 > _autoplayIndex) {
		_autoplayIndex = 0;
	}
		
	_intervalId = setInterval(function() {
		if (_autoplayIndex < _tabs.length - 1) {
			_autoplayIndex += 1;
		}
		else {
			_autoplayIndex = 0;
		}
		
		var tab = _tabs[_autoplayIndex];
		window.location.hash = tab.id.replace(/.*-/, '');
		handleTabClick.call(tab);
	}, _autoplayTimeout);
	*/
};