
			var deviceWidth
			setHtmlFontSize()

			if (window.addEventListener) {
			  window.addEventListener('resize', function () {
				  setHtmlFontSize()
			  }, false)
			}
			function setHtmlFontSize () {
			  
				deviceWidth = document.documentElement.clientWidth > 1442 ? 1442 : document.documentElement.clientWidth
				document.getElementsByTagName('html')[0].style.cssText = 'font-size:' + deviceWidth / 14.42 + 'px !important'
			}
