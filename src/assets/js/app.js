const fboTab = document.querySelector('.plan__tab.FBO')
const fbsTab = document.querySelector('.plan__tab.FBS')
const fboContent = document.querySelector('.plan__tabDisplay-fbo')
const fbsContent = document.querySelector('.plan__tabDisplay-fbs')
const faqItem = document.querySelectorAll('.faq__item')
const graphicItem = document.querySelectorAll('.graphics__item')

fbsTab.addEventListener('click', () => {
		fboContent.classList.remove('active-plan')
		fbsContent.classList.add('active-plan')
		fboTab.classList.remove('active')
		fbsTab.classList.add('active')
	})

fboTab.addEventListener('click', () => {
		fboContent.classList.add('active-plan')
		fbsContent.classList.remove('active-plan')
		fbsTab.classList.remove('active')
		fboTab.classList.add('active')
	})

faqItem.forEach(item => {
		item.
			addEventListener('click', () => {
				item.classList.toggle('open')
			})
	})

graphicItem.forEach(item => {
		item.
			addEventListener('click', () => {
				item.classList.toggle('open-marketplace')
			})
	})
