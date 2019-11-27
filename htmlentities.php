<?php

var_dump(htmlentities("<html>"));
// string(12) "&lt;html&gt;"

var_dump(htmlentities("<"));
// string(4) "&lt;"

var_dump(htmlentities("a&b"));
// string(7) "a&amp;b"
