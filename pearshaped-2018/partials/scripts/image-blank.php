<script>
  const images = document.querySelectorAll('img');
  images.forEach(image => {
    image.removeAttribute('width');
    image.removeAttribute('height');
  });
</script>