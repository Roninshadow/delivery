document.addEventListener('DOMContentLoaded', function () {
	const e = document.querySelector('.Ronin-plan__tab.Ronin-FBO'),
		t = document.querySelector('.Ronin-plan__tab.Ronin-FBS'),
		a = document.querySelector('.Ronin-plan__tabDisplay-fbo'),
		c = document.querySelector('.Ronin-plan__tabDisplay-fbs'),
		s = document.querySelectorAll('.Ronin-faq__item'),
		l = document.querySelectorAll('.Ronin-graphics__item')
	t &&
		a &&
		c &&
		e &&
		(t.addEventListener('click', function () {
			a.classList.remove('Ronin-active-plan'),
				c.classList.add('Ronin-active-plan'),
				e.classList.remove('Ronin-active'),
				t.classList.add('Ronin-active')
		}),
		e.addEventListener('click', function () {
			a.classList.add('Ronin-active-plan'),
				c.classList.remove('Ronin-active-plan'),
				t.classList.remove('Ronin-active'),
				e.classList.add('Ronin-active')
		})),
		s.length > 0 &&
			s.forEach(function (e) {
				e.addEventListener('click', function () {
					e.classList.toggle('Ronin-open')
				})
			}),
		l.length > 0 &&
			l.forEach(function (e) {
				e.addEventListener('click', function () {
					e.classList.toggle('Ronin-open-marketplace')
				})
			})
})
