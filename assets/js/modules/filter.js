function taxonomyFilter() {
	const taxonomyFilterGroup = document.querySelectorAll('.taxonomy_filter');

	taxonomyFilterGroup.forEach((taxonomy) => {
		const taxSearch = taxonomy.querySelector('.taxonomy-search');
		const taxItems = taxonomy.querySelectorAll('.search-items > *');
		if (!taxSearch) return;

		taxSearch.addEventListener('keyup', (e) => {
			const value = e.target.value;

			taxItems.forEach((tax) => {
				tax.classList.toggle(
					'hidden',
					!tax.innerText.toLowerCase().includes(value.toLowerCase())
				);
			});
		});
	});
}

taxonomyFilter();

function priceFilter() {
	const minPriceInput = document.querySelector('#minPriceInput');
	const maxPriceInput = document.querySelector('#maxPriceInput');

	if (!minPriceInput || !maxPriceInput) return;

	function localStringToNumber(s) {
		return Number(String(s).replace(/[^0-9.-]+/g, ''));
	}

	minPriceInput.addEventListener('keyup', (e) => {
		var value = e.target.value;

		e.target.value =
			value || value === 0 ? localStringToNumber(value).toLocaleString() : '';
	});

	maxPriceInput.addEventListener('keyup', (e) => {
		var value = e.target.value;

		e.target.value =
			value || value === 0 ? localStringToNumber(value).toLocaleString() : '';
	});
}

priceFilter();
