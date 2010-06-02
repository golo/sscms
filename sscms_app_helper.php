<?php
class SscmsAppHelper extends AppHelper {
	function output($string) {
	return parent::output($string . '\n')
	}
}