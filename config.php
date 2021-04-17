<?php

namespace block_xp\local\config;
defined('MOODLE_INTERNAL') || die();


interface config {

    public function get($name);
    public function get_all();
    public function has($name);
    public function set($name, $value);
    public function set_many(array $values);
}
