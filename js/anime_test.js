var basicTimeline = anime.timeline();

basicTimeline
	.add({
		targets: 'body',
		opacity: 1,// Animate all divs opacity to .8
		duration: 900,
		elasticity: 10,
		easing: 'easeInOutQuart'
	})
	.add({
		targets: '#lineDrawing .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutSine',
		duration: 900,
		delay: function(el, i) { return i * 250 }
	})
	.add({
		targets: '#logo_big',
		opacity: 1,// Animate all divs opacity to .8
		duration: 1200,
		elasticity: 10
	})
	.add({
		targets: '#lineDrawing .lines path',
		easing: 'easeInOutSine',
		duration: 400,
		opacity: 0,
		offset: '-=800'
	})
	.add({
		targets: '#sidenav',
		opacity: 1,// Animate all divs opacity to .8
		duration: 1000,
		elasticity: 10,
		offset: '-=800'
	})
	.add({
		targets: '.social',
		opacity: 1,// Animate all divs opacity to .8
		duration: 500,
		elasticity: 10,
		delay: function(el, i, l) {
			return i * 100;
		},
		offset: '-=1100'
	});
