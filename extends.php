<?php

class Base {
    public function __call($name, $args = []) {
    }
}

class TestClass extends Base {
    public function __call($name, $args) {
    }
}
