<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Script{

  	public function __construct() {

	}

	function alert($msg) {
		$TMP_HTML = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
		$TMP_HTML .="<script>alert('".$msg."');</script>";
		echo $TMP_HTML;
	}


	// javascript historyback
	function historyback() {
		$TMP_HTML = "<script>history.back(-1);</script>";
		echo $TMP_HTML;
	}


	// javascript location
	function locationhref($url) {
		$TMP_HTML = "<script>location.href='".$url."';</script>";
		echo $TMP_HTML;
	}


	// javascript opner reload
	function openerreload($url) {
		$TMP_HTML = "<script>opener.location.reload();</script>";
		echo $TMP_HTML;
	}


	// javascript window.close
	function windowclose() {
		$TMP_HTML = "<script>window.open('about:blank', '_self').close();</script>";
		echo $TMP_HTML;
	}

}
