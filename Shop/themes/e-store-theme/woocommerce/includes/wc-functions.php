<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 03.11.2023
 * Time: 12:43
 */


 add_action( 'custom_images', 'custom_show_images', 20 );
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

 //===================================================================================BREAD CRUMPS====
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'estore_add_breadcrumbs', 20 );
function estore_add_breadcrumbs(){
	?>
        <div class="sub-header">
            <div class="sub-header__title icon-slider-right-arrow subtitle">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>
    <?php
}
//=======================================================================OPEN "product-page__container container"==============
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', 'estore_output_content_wrapper_start', 10 );
function estore_output_content_wrapper_start() {
	?>
<!--        <div class="product-page__container">-->
	<?php
}
//=============================================================CLOSE "product-page__container container"========================
add_action( 'woocommerce_after_main_content', 'estore_output_content_wrapper_end', 10 );
function estore_output_content_wrapper_end() {
	?>
<!--        </div>-->
	<?php
}
//=====================================================================================






remove_action( 'woocommerce_after_single_product', 'woocommerce_related_products', 10 );
add_action( 'estore_after_main_content', 'woocommerce_related_products', 10 );






//==================================================================================OPEN "content"
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single', 5 );
add_action( 'woocommerce_before_single_product_summary', 'estore_template_single', 5 );
function estore_template_single() {
	?>
        <div data-prodid="1" class="content">
	<?php
}
//============================================================================================
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
add_action( 'custom_image', 'woocommerce_show_product_images', 20 );
add_action( 'custom_image_submain', 'custom_image_sub', 20 );
//===============================================================================Create "content__characteristic"
add_action( 'custom_product_short_text', 'woocommerce_template_single_excerpt', 25 );
add_action( 'custom_product_text', 'woocommerce_product_description_tab', 25 );
add_action( 'woocommerce_before_single_product_summary', 'esore_template_single_excerpt', 25 );
function esore_template_single_excerpt() {
	?>
        <div class="content__characteristic">
                        <div class="characteristic__conteiner">
                            <div class="characteristic__title subtitle">ХАРАКТЕРИСТИКА ТА ОПИС </div>
                            <div class="characteristic__text">
                                <input type="checkbox" id="show-more">
                                <div class="characteristic__label smalltext">
                                    	<?php do_action( 'custom_product_text' ); ?>
                                </div>
                                <label class="characteristic__show-more" for="show-more"></label>
                            </div>
                        </div>
                    </div>
	<?php
}
//===============================================================================Create "content__product-sliders"
add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_image_start', 30 );
function estore_wrapper_product_image_start() {
	?>
            <div class="content__product-sliders">
                        <div class="main-photo">
                            <div class="main-photo__slider">
                                <div class="main-photo__wrapper ">
                                    <?php do_action( 'custom_image' );?>
                                </div>
                            </div>
                        </div>
                        <div class="submain-photo">
                            <div class="submain-photo__slider">
                                <div class="submain-photo__wrapper">
                                    <?php do_action( 'custom_image_submain' );?>
                                </div>
                            </div>
                            <div class="submain-photo__navigations">
                                <div class="submain-photo__scrollbar"></div>
                            </div>
                        </div>
            </div>
	<?php
}
//=========================================================================================







//=====================================================================In "content__buy" add "buy__info-container"
add_action( 'woocommerce_single_product_summary-custom', 'estore_template_single_info', 40 );
function estore_template_single_info() {
	?>
                        <?php
                        $delivery_info = carbon_get_theme_option('delivery_info');
                        $help_call = carbon_get_theme_option('help_call');
                        $add_info = carbon_get_theme_option('add_info');
                        ?>

                         <div class="buy__info-container">

                            <?php if($delivery_info) : ?>
                            <div class="buy__delivery buy__info">
                                <div class="buy__info-title subtitle  icon-box">ДОСТАВКА</div>
                                <div class="buy__info-content smalltext ">
                                    <div> <?php echo $delivery_info ?> </div>
                                    <a href="" class="link _hover">детальніше</a>
                                </div>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>

                            <?php if($help_call) : ?>
                            <div class="buy__call buy__info">
                                <div class="buy__info-title subtitle icon-phone">ДОПОМОГА</div>
                                <div class="buy__info-content smalltext ">
                                    <div>Допомога вибору</div>
                                    <div>Запитати про наявність</div>
                                    <a href="tel:<?php echo $help_call ?>" class="link _hover">позвонити: <?php echo $help_call ?></a>
                                </div>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>

                            <?php if($add_info) : ?>
                            <div class="buy__info">
                                <div class="buy__info-title subtitle icon-phone">ДОДАТКОА ІНФОРМАЦІЯ</div>
                                <div class="buy__info-content smalltext ">
                                    <div> <?php echo $add_info ?> </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>

                        </div>
	<?php
}
//=========================================================================================








add_action( 'wp_footer', 'converts_product_attributes_from_select_options_to_div' );
function converts_product_attributes_from_select_options_to_div() {

    ?>
        <script type="text/javascript">

            jQuery(function($){

                // clones select options for each product attribute
                var clone = $(".single-product div.product table.variations select").clone(true,true);

                // adds a "data-parent-id" attribute to each select option
                $(".single-product div.product table.variations select option").each(function(){
                    $(this).attr('data-parent-id',$(this).parent().attr('id'));
                });

                // converts select options to div
                $(".single-product div.product table.variations select option").unwrap().each(function(){
                    if ( $(this).val() == '' ) {
                        $(this).remove();
                        return true;
                    }
                    var option = $('<label class="form__sizes-label is-visible" data-parent-id="'+$(this).data('parent-id')+'" data-value="'+$(this).val()+'">'+''+'<span class="form__sizes-checkmark">'+$(this).text()+'</span>'+'</label>');
                    $(this).replaceWith(option);
                });
                

                // reinsert the clone of the select options of the attributes in the page that were removed by "unwrap()"
                $(clone).insertBefore('.single-product div.product table.variations .reset_variations').hide();

                // when a user clicks on a div it adds the "selected" attribute to the respective select option
                $(document).on('click', '.form__sizes-label', function(){
                    var parentID = $(this).data('parent-id');
                    if ( $(this).hasClass('on') ) {
                        $(this).removeClass('on');
                        $(".single-product div.product table.variations select#"+parentID).val('').trigger("change");
                    } else {
                        $('.form__sizes-label[data-parent-id='+parentID+']').removeClass('on');
                        $(this).addClass('on');
                        $(".single-product div.product table.variations select#"+parentID).val($(this).data("value")).trigger("change");
                    }
                    
                });

                // if a select option is already selected, it adds the "on" attribute to the respective div
                $(".single-product div.product table.variations select").each(function(){
                    if ( $(this).find("option:selected").val() ) {
                        var id = $(this).attr('id');
                        $('.form__sizes-label[data-parent-id='+id+']').removeClass('on');
                        var value = $(this).find("option:selected").val();
                        $('.form__sizes-label[data-parent-id='+id+'][data-value='+value+']').addClass('on');
                    }
                });

                // when the select options change based on the ones selected, it shows or hides the respective divs
                $('body').on('check_variations', function(){
                    $('div.form__sizes-label').removeClass('is-visible');
                    $('.single-product div.product table.variations select').each(function(){
                        var attrID = $(this).attr("id");
                        $(this).find('option').each(function(){
                            if ( $(this).val() == '' ) {
                                return;
                            }
                            $('div[data-parent-id="'+attrID+'"][data-value="'+$(this).val()+'"]').addClass('is-visible');
                        });
                    });
                });

            });

        </script>
    <?php

}