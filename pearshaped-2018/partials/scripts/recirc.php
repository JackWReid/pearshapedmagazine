<script>
  window.postId = <?php the_ID(); ?>;
  window.postCategory = <?php
  $categories = get_the_category();
  echo $categories[0]->cat_ID;
  ?>;

  async function addImageToPost(postData) {
    const mediaRes = await fetch(postData.mediaUrl);
    const mediaJson = await mediaRes.json();
    return {
      image: {
        src: mediaJson['source_url'],
        alt: mediaJson['alt_text'],
      },
      ...postData,
    };
  }

  async function getPosts(categoryId, postId) {
    const apiRes = await fetch(
      `http://pearshapedexeter.com/wp-json/wp/v2/posts?categories=${categoryId}&exlude=${postId}&per_page=9`);
    const rawPosts = await apiRes.json();

    const postsWithoutImages = rawPosts.map(old => ({
      id: old.id,
      title: old.title.rendered,
      url: old.link,
      mediaUrl: old['_links']['wp:featuredmedia'][0].href,
    }));

    return await Promise.all(postsWithoutImages.map(addImageToPost));
  }

  function createPostsDom(posts) {
    return posts.map(post => {
      const item = document.createElement('li');
      const link = document.createElement('a');
      link.setAttribute('href', post.url);
      const image = document.createElement('img');
      image.setAttribute('src', post.image.src),
        image.setAttribute('alt', post.image.alt);
      const title = document.createElement('h1');
      title.innerHTML = post.title;
      item.appendChild(link);
      link.appendChild(image);
      link.appendChild(title);
      return item;
    });
  }

  async function main() {
    const recircList = document.querySelector('ul.recirc-list');
    const posts = await getPosts(window.postCategory, window.postId);
    const elements = createPostsDom(posts);
    elements.forEach(el => recircList.appendChild(el));
  }

  main();
</script>