<?php
$images = $args["images"] ?? []; // ["src" => "", "width" => "", "height" => "", "alt" => "", loading => "eager"]
$eager = ($images["loading"] ?? null) === "eager" || ($args["eager"] ?? false);
$className = $args["className"] ?? "";
?>

<picture>
  <?php if (IS_TYPE === "production") : ?>
    <source srcset="<?= vite_src_images($images["src"], "avif") ?>" type="image/avif" />
    <source srcset="<?= vite_src_images($images["src"], "webp") ?>" type="image/webp" />
  <?php endif; ?>
  <img src="<?= vite_src_images($images["src"]) ?>" width="<?= $images["width"] ?>" height="<?= $images["height"] ?>" alt="<?= $images["alt"] ?: "" ?>" loading="<?= $eager ? "eager" : "lazy" ?>" decoding="async" class="<?= $className ?>" />
</picture>