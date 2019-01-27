<?php

$setting = array_merge_recursive(
include "controller.config.php",
include "navigation-calendar.config.php",
include "navigation.config.php",
include "route.config.php",
include "zfm-datagrid.servicio.config.php"
);

return $setting;
