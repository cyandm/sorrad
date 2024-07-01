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
