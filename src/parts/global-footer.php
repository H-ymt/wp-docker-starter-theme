<footer class="global-footer">
  <p><small class="global-footer__copyright">Copyright © All Rights Reserved.</small></p>
</footer>
<?php wp_footer(); ?>
<?php if (is_front_page()) : ?>
  <script type="module" crossorigin src="<?= vite_src_js("front-page.js") ?>"></script>
<?php endif; ?>
<script type="module" crossorigin src="<?= vite_src_js("app.js") ?>"></script>
</body>

</html>