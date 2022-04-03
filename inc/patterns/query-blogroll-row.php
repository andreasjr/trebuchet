<?php

register_block_pattern('trebuchet/blogroll-list',
array(
    'title'         => __( 'Blogroll List', 'trebuchet' ),
    'description'   => __( 'Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'trebuchet' ),
    'categories'    => array('trebuchet/general'),
    'content'       =>
'<!-- wp:query {"queryId":27,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"trebuchet\u002d\u002dquery\u002d\u002dblogroll"} -->
<!-- wp:group {"style":{"border":{"width":"1px","style":"solid","radius":"20px","color":"#ededed"},"spacing":{"padding":{"top":"1em","right":"1em","bottom":"1em","left":"1em"},"blockGap":"10px"}},"backgroundColor":"light-gray","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-border-color has-light-gray-background-color has-background" style="border-color:#ededed;border-radius:20px;border-style:solid;border-width:1px;padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em"><!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"trebuchet\u002d\u002dquery\u002d\u002dblogroll\u002d\u002ditem\u002d\u002dmeta","layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
<div class="wp-block-group trebuchet--query--blogroll--item--meta"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} /-->

<!-- wp:post-date {"textAlign":"center"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->'));