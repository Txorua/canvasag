<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<div id="enlaces" class="<?php print $classes; ?> owl-carousel image-carousel">

  <?php if ($rows): ?>
    <?php print $rows; ?>
  <?php endif; ?>

  <script type="text/javascript">

    jQuery(document).ready(function($) {

      var ocImages = $("#enlaces");

      ocImages.owlCarousel({
        margin: 20,
        nav: true,
        navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
        autoplay: false,
        autoplayHoverPause: true,
        dots: false,
        navRewind: false,
        responsive:{
          0:{ items:1 },
          600:{ items:3 },
          1000:{ items:4 },
          1200:{ items:5 }
        }
      });

    });

  </script>
</div><?php /* class view */ ?>
