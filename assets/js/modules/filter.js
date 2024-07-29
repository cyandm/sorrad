function taxonomyFilter() {
	const taxonomyFilterGroup = document.querySelectorAll('.taxonomy_filter');

	taxonomyFilterGroup.forEach((taxonomy) => {
		const taxSearch = taxonomy.querySelector('.taxonomy-search');
		const taxItems = taxonomy.querySelectorAll('.search-items > *');
		if (!taxSearch) return;

		taxSearch.addEventListener('keyup', (e) => {
			const value = e.target.value;

			taxItems.forEach((tax) => {
				tax.classList.toggle('hidden', !tax.innerText.includes(value));
			});
		});
	});
}

taxonomyFilter();

function priceFilter() {
	const maxPrice = document.querySelector('input[type="range"]#maxPrice');
	const minPrice = document.querySelector('input[type="range"]#minPrice');

	const minPriceText = document.querySelector('#minPriceText');
	const maxPriceText = document.querySelector('#maxPriceText');

	if (!maxPrice || !minPrice) return;

	minPrice.addEventListener('change', (e) => {
		minPriceText.value = e.target.value;
	});

	minPriceText.addEventListener('change', (e) => {
		minPrice.value = e.target.value;
	});

	maxPrice.addEventListener('change', (e) => {
		maxPriceText.value = e.target.value;
	});

	maxPriceText.addEventListener('change', (e) => {
		maxPrice.value = e.target.value;
	});
}

priceFilter();
