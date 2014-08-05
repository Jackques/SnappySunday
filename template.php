<?php
function themename_preprocess_page(&$variables) {
  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
}

function theme_preprocess_page(&$variables, $hook) {
$variables['theme_hook_suggestions'][] = 'page__news';
}
?>