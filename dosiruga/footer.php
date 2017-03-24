
    <a href="#top" class="totop"></a>

	<?php if(is_page('blog')):?>
    <footer class="page-footer">
        <div class="container">
            <div class="inside">
                <div class="mod_article first last block" id="article-14">
                    <div class="ce_accordionStart first ce_accordion block">
                        <div class="accordion toggler ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" role="tablist" tabindex="-1">
                            <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
                            <a href="#legal_notes"><strong id="legal_notes">LEGAL NOTES</strong></a>
                        </div>
                        <div class="panel ui-accordion-content" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                            <div>
                                <div class="ce_text col-md-6 col-sm-6 col-xs-12 block">
									<?php the_field('contact', false, false);?>
                                    <p class="adz-contact-headline-small">Disclaimer – rechtliche Hinweise</p>
                                    <?php the_field('disclaimer', false, false);?>
                                    <p class="adz-contact-headline-small">Datenschutzerklärung:</p>
                                    <p><strong>Datenschutz</strong></p>
                                    <?php the_field('datenschutz', false, false);?>
                                    <p><strong>Personenbezogene Daten</strong></p>
                                    <?php the_field('personenbezogene_daten', false, false);?>
                                    <p><strong>Kommentarfunktionen</strong></p>
                                    <?php the_field('kommentarfunktionen', false, false);?>
                                </div>
                                <div class="ce_text col-md-6 col-sm-6 col-xs-12 block">
                                    
                                    <?php the_field('kommentarfunktionen2', false, false);?><br><br>
                                    <p><strong>Datenschutzerklärung für das Facebook-Plugin („Gefällt mir“)</strong></p>
									<?php the_field('datenschutzerklarung2', false, false);?>
                                    <p><strong>Datenschutzerklärung für den Webanalysedienst Google Analytics</strong></p>
									<?php the_field('datenschutzerklarung_fur_den_webanalysedienst_google_analytics', false, false);?>
                                    <p><strong>Datenschutzerklärung für den Webanzeigendienst Google Adsense</strong></p>
									<?php the_field('datenschutzerklarung_fur_den_webanzeigendienst_google_adsense', false, false);?>
                                    <p><strong>Datenschutzerklärung für das soziale Netzwerk Google Plus</strong></p>
									<?php the_field('datenschutzerklarung_fur_das_soziale_netzwerk_google_plus', false, false);?>
                                    <p><strong>Datenschutzerklärung für die Nutzung von twitter.com</strong></p>
									<?php the_field('datenschutzerklarung_fur_die_nutzung_von_twitter_com', false, false);?>
                                    <p><strong>Auskunftsrecht</strong></p>
									<?php the_field('auskunftsrecht', false, false);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<?php else:?>
	<footer class="page-footer">
        <div class="container">
            <div class="inside">
                <div class="mod_article first last block" id="article-14">
                    <div class="ce_accordionStart first ce_accordion block">
                        <div class="accordion toggler ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" role="tablist" tabindex="-1">
                            <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
                            <a href="#legal_notes"><strong id="legal_notes">LEGAL NOTES</strong></a>
                        </div>
                        <div class="panel ui-accordion-content" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                            <div>
                                <div class="ce_text col-md-6 col-sm-6 col-xs-12 block">
									<?php the_field('contact',5, false, false);?>
                                    <p class="adz-contact-headline-small">Disclaimer – rechtliche Hinweise</p>
                                    <?php the_field('disclaimer',5, false, false);?>
                                    <p class="adz-contact-headline-small">Datenschutzerklärung:</p>
                                    <p><strong>Datenschutz</strong></p>
                                    <?php the_field('datenschutz',5, false, false);?>
                                    <p><strong>Personenbezogene Daten</strong></p>
                                    <?php the_field('personenbezogene_daten',5, false, false);?>
                                    <p><strong>Kommentarfunktionen</strong></p>
                                    <?php the_field('kommentarfunktionen',5, false, false);?>
                                </div>
                                <div class="ce_text col-md-6 col-sm-6 col-xs-12 block">
                                    
                                    <?php the_field('kommentarfunktionen2',5, false, false);?><br><br>
                                    <p><strong>Datenschutzerklärung für das Facebook-Plugin („Gefällt mir“)</strong></p>
									<?php the_field('datenschutzerklarung2',5, false, false);?>
                                    <p><strong>Datenschutzerklärung für den Webanalysedienst Google Analytics</strong></p>
									<?php the_field('datenschutzerklarung_fur_den_webanalysedienst_google_analytics',5, false, false);?>
                                    <p><strong>Datenschutzerklärung für den Webanzeigendienst Google Adsense</strong></p>
									<?php the_field('datenschutzerklarung_fur_den_webanzeigendienst_google_adsense',5, false, false);?>
                                    <p><strong>Datenschutzerklärung für das soziale Netzwerk Google Plus</strong></p>
									<?php the_field('datenschutzerklarung_fur_das_soziale_netzwerk_google_plus',5, false, false);?>
                                    <p><strong>Datenschutzerklärung für die Nutzung von twitter.com</strong></p>
									<?php the_field('datenschutzerklarung_fur_die_nutzung_von_twitter_com',5, false, false);?>
                                    <p><strong>Auskunftsrecht</strong></p>
									<?php the_field('auskunftsrecht',5, false, false);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<?php endif;?>

    <div id="confloater">
        <div class="top">
            <a href="tel:<?php the_field('phone',5);?>"><?php the_field('phone',5);?></a>
        </div>
        <div class="bottom">
            <a href="mailto:<?php the_field('email',5);?>" class="email"><?php the_field('email',5);?></a>
        </div>
    </div>
	<?php wp_register_script( $handle, $src, $deps, $ver, $in_footer ); ?>
	
<?php wp_footer();?>
	
</body>
</html>