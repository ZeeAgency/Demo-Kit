$(function() {
	FastClick.attach(document.body);
	$('a').on('click', function(e) {
		e.preventDefault();
		var $active = $('img.active'),
			$next = $active.next();
		if($next.length) {
			$next.addClass('active');
		} else {
			$('img:first-child').addClass('active');
		}
		$active.removeClass('active');
	});
});