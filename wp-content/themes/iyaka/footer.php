<footer>
    <section aria-labelledby="footer"
             class="rl:py-9 gap-y-12  grid-default-12 bg-brand max-rg:px-0 rl:gap-y-16 relative overflow-hidden text-grey-dark font-quicksand font-medium rl:text-xl">
        <h2 class="sr-only" id="footer"><?= __('Pied de page', 'iyaka') ?></h2>
        <div class="col-span-full rg:flex rg:flex-row-reverse justify-between items-center">
            <div class="flex max-rg:flex-col items-center text-lg rg:text-xl justify-center max-rg:py-7">
                <?php wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'nav-menu menu text-center flex  max-rg:flex-col gap-5 rg:gap-10',
                ]); ?>
            </div>

            <p class="max-rg:text-sm rg:text-xl text-center py-4 max-rg:bg-brand-light/30"><?= date('Y') . '  <span class="uppercase">' . get_the_title(5) . '</span>' . __(' — Tous droits réservés', 'iyaka') ?></p>
        </div>

    </section>
</footer>

<?php wp_footer() ?>
</body>

</html>