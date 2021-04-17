<?php

require(__DIR__ . 'config.php');

\block_xp\di::get('router')->dispatch();
