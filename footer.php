<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<a href="<?php $this->options->siteUrl(); ?>index.php/about.html">About</a> Theme by <a href="https://github.com/suliang1100/typecho-theme-latte">suliang</a>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script type="text/javascript">
	$(function(){
		$("#header").headroom({
		  "tolerance": 10,
		  "offset": 200,
		  "classes": {
		    "initial": "animated",
		    "pinned": "slideInDown",
		    "unpinned": "slideOutUp"
		  }
		});
	})
</script>
</body>
</html>
