<?php

$setting = array_merge_recursive(
include "navigation-calendar.config.php",
include "navigation.config.php",
include "route.config.php"
);

return $setting;
