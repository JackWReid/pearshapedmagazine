# PearShaped Magazine
PearShaped Magazine is the official music magazine of the University of Exeter. I founded the magazine with some friends over the summer after my first year there. Now it's an institution at the university, with around thirty student volunteers keeping it running every year. It's a big Wordpress site.

## Code Details

1. [That Review Grid](#that-review-grid)

### That Review Grid
Right from the outset, the designs for PearShaped's website had this huge grid of album artwork. Each of the album artwork squares would be an album review. You could hover on the artwork and the title of the album, and the name of the reviewer would appear. PearShaped was the biggest development job I'd had to date, and it was a steep learning curve. This was a major problem for me to solve. I don't claim to have done this in the best possible way, in fact I'm almost certain I haven't.

```php
<?php
$current_month = get_the_time('F');
$current_year = get_the_time('Y');
echo "<div class='date-divider'><h3>" . $current_month. " " . $current_year . "</h3></div><div class='thumbnail-grid'>";

while (have_posts()) : the_post();
    $current_year = get_the_time('Y');
    $this_month = get_the_time('F');
    if( $this_month!=$current_month ):
        $current_month = $this_month;
        echo "</div><div class='date-divider'><h3>" . $current_month . " " . $current_year . "</h3></div><div class='thumbnail-grid'>";
    endif;

    $author = get_post_meta($post->ID, 'Author', true);
    echo "<div class='thumbnail-grid__item'><a href='" . get_permalink() . "'>";
    the_post_thumbnail('medium');
    echo "<div class='thumbnail-grid__item__meta'><h3>"; the_title(); echo "</h3>";
    if ($author) { echo "<p>" . $author . "</p></div>"; }
    echo "</a></div>";
endwhile;
echo "</div>";
?>
```

So here's the template code. Different category pages on PearShaped have different layouts but all of the same context, so I used partials to drop in different layouts within the same template context.

```php
<?php get_template_part('partials/loops/reviews'); ?>
```

That's all it takes to drop in the grid layout, rather than say, the standard media object layout. From what I'd heard about Wordpress's verbosity up to this point I was pretty impressed that I could load partials like this.

```html
<div class="thumbnail-grid">
  <div class="thumbnail-grid__item">
    <a href="http://pearshapedexeter.com/review/foobar">
      <div class="thumbnail-grid__item__meta">
        <h3>Foobar - Bazbar</h3>
        <p>Jane Doe</p>
      </div>
    </a>
  </div>
</div>
```

As you can see, I've been able to pare down the markup to something pretty slim and cruft-less. It isn't _quite_ the ideal `<figure>` and `<figcaption>` combo. The first couple of iterations of this had far more nested `<div>`s to try and get the titles centred on the overlay, in turn covering and overlaying the album artwork on hover. However, there's no markup within the grid that breaks the list of articles into columns or anything like that... because flexbox!

```css
.thumbnail-grid{
	display: flex;
	flex-wrap: wrap;
	margin: 0 auto 4em auto;
}
```

Laying out stuff in a square grid isn't nearly as difficult as it used to be. What was a total pain, was trying to get the hover behaviour to work and be aligned properly.

```scss
.thumbnail-grid__item__meta{
  max-height: 100%;
  position: relative;
  text-align: center;
  padding: 1em;
  opacity: 0;
  @include fade;
  transform: translateY(-230px);
  h3{
    font-size: 1.5em;
  }
  @media screen and (max-width: 953px){
    transform: translateY(-210px);
  }
  @media screen and (max-width: 625px){
    transform: translateY(-180px);
  }
}

.thumbnail-grid__item:hover{
  img{
    opacity: 0.3;
  }
  .thumbnail-grid__item__meta{
    opacity: 1;
  }
}
```

As you can see, the styles for the meta-info are anything but simple. The switch works by flipping the opacity of the overlay element on, and we ensure that the titles remain within the square of the album artwork by using `translateY` in negative values, pushing them back up by about half of the cover height. That cover height changes though: when the viewport width is smaller, the grid drops down to three wide, and then two wide. That means the text has to be pushed further up the square to be centred. I found these breakpoints and values manually: resizing the viewport and waiting for the text to overflow, and knocking the text back up the right amount. That's how I ended up with these magic numbers.

This is an example of ending up with a solution that works, but is kind of brittle and hideous. If I rebuilt this today (don't tempt me), I'd do things very differently.
