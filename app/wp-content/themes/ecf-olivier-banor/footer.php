<!-- DEBUT FOOTER -->
    </main>  
    <footer class="site-footer">
        COPYRIGHT <?php date('Y');?> par <?php the_author();?>
    </footer>
</div> <!-- fin wrapper -->

<aside class="site-aside">
    <!-- SIDEBAR -->
    <?php dynamic_sidebar('principal'); ?>
</aside>
<?php wp_footer(); ?>
</body>
</html>