function getViewportDimensions() {
	var $window = $(window),
		width = $window.width(),
		height = $window.height();
	return {
		'width' : width,
		'height' : height
	}
}