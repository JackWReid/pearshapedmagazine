<script>
	const ratingNodes = document.querySelectorAll('p[data-rating]');
	ratingNodes.forEach(node => {
		const ratingNum = parseInt(node.getAttribute('data-rating'));
		const stars = `★`.repeat(ratingNum);
		node.innerHTML = stars;
	});
</script>