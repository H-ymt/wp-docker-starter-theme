<?php get_template_part("./include/global-header"); ?>

<main class="index">
  <h1>Top page</h1>
  <p class="index__text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laboriosam illum, consequuntur ab, esse nam sapiente laudantium incidunt odio quis illo ea porro repellendus.
  </p>

  <a class="button buttonPrimary--medium" href="<?php echo home_url(
    "about",
  ); ?>">about page ></a>

  <div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample-01.jpg" alt="" width="600" height="600" loading="eager">
  </div>
</main>

<?php get_template_part("./include/global-footer"); ?>
