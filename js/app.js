$(document).foundation();

$(function() {

	// window.alert('hi');
 







var cols = $('.mainContent h3').parent();
// var cols = $('.mainContent div div div');
// var cols = $('.block');
// var cols = $('a');


// console.log(cols);


// cols.on('mouseover', function() {
	// console.log('mouseover');
    // $(this).addClass('focusBlock');
// });


/* 
cols.hover(
	function() {
		console.log('over');
		$(this).addClass('focusBlock');
		return false;
	},
	function() {
		console.log('out');
		$(this).removeClass('focusBlock');
		return false;
	}
);
*/



/*cols.on({
    mouseenter: function () {
        //stuff to do on mouse enter
		console.log('over');
		$(this).addClass('focusBlock');
    },
    mouseleave: function () {
        //stuff to do on mouse leave
		console.log('out');
		$(this).removeClass('focusBlock');
    }
});
*/







cols.bind("mouseenter focus mouseleave", 
	function(event) { 
		// console.log(event.type); 
		switch(event.type) {
			case 'mouseenter':
				// console.log('over');
				$(this).addClass('focusBlock');
				break;
			
			case 'mouseleave':
				// console.log('out');
				$(this).removeClass('focusBlock');
				break;
			
			default:

		}
	}
);











});











