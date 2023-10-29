// Use capturing by setting the third argument of addEventListener to true
document.querySelectorAll('.elementor-accordion-item .elementor-tab-title .elementor-accordion-title').forEach(function (title) {
	title.addEventListener('click', function (e) {
		// Check if the clicked title is not currently expanded
		let titleParent = this.closest('.elementor-tab-title');
		if(titleParent.getAttribute('aria-expanded') === 'false') {
			setTimeout(() => {
				// Get the top position of the element relative to the document
				let topPosition = titleParent.getBoundingClientRect().top + window.scrollY - 150;
				// Scroll to the element
				window.scrollTo({ top: topPosition, behavior: 'smooth' });
			}, 500); // Delay increased to 100ms
		}
	}, true); // Set useCapture to true to initiate capturing
});