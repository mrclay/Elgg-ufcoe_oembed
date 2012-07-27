<?php
if (0): ?><script><?php endif; ?>

<?php // inlining the script here so it will be cached with js/elgg
readfile(dirname(dirname(dirname(dirname(__DIR__)))) . '/lib/jquery.oembed.min.js'); ?>

$(function() {
    // don't display embeds in comments
    $("a[title^=video]:not(.elgg-comments a, .elgg-river-comments a)").append(' (loading...)').oembed(null, {
        embedMethod:'fill',
        maxWidth: 500
    });
});
