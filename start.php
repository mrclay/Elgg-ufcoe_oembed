<?php

elgg_register_event_handler('init', 'system', 'ufcoe_oembed_init');

function ufcoe_oembed_init() {
    elgg_extend_view('js/elgg',  'ufcoe_oembed/js/elgg_after' , 501);
    elgg_extend_view('css/elgg', 'ufcoe_oembed/css/elgg_after', 501);
}
