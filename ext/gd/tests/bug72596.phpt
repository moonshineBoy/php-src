--TEST--
Bug #72596 (imagetypes function won't advertise WEBP support)
--SKIPIF--
<?php
if (!extension_loaded('gd')) die('skip gd extension not available');
?>
--FILE--
<?php
var_dump(function_exists('imagewebp') === (bool) (imagetypes() & IMG_WEBP));
?>
--EXPECT--
bool(true)
