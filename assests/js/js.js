$(function(){

  // accordion
  $('tr.item-title').click(function(){
    var id = $(this).data('id');
    var childSelector = '[data-parent-id=' + id + ']';
    $(childSelector).toggle();
  });

  // tablesorter
  $('#expert').tablesorter({ widgets: ['staticRow'] });

  $('#expert').bind('sortEnd',function(e, table) {
    $('tr.static').each(function(){
      var id = $(this).data('parent-id');
      var parentSelector = '[data-id=' + id + ']';
      $(this).insertAfter(parentSelector);
    });
  });

  // captions of images are same width as image
  // $(window).bind('load', function() {
	// 	$('figure img').each(function( index ) {
	// 		var width = $(this).width();
	// 		var parent = $(this).parents('figure');
	// 		var caption = parent.find('figcaption');
	// 		$(caption).css('max-width', width);
	// 	});
	// });

});
