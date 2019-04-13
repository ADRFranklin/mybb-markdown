<?php
require __DIR__ . "/vendor/autoload.php";

if (!defined("IN_MYBB")) {
	die("Direct initialization of this file is not allowed.");
}

use League\CommonMark\CommonMarkConverter;


$plugins->add_hook("parse_message", "markdown_parse_message");


function markdown_info() {
	return [
		"name"			=> "Markdown",
		"description"	=> "The long-needed markdown plugin for MyBB.",
		"website"		=> "https://github.com/kristoisberg/mybb-markdown",
		"author"		=> "Kristo Isberg",
		"authorsite"	=> "https://kristo.xyz",
		"version"		=> "1.0.0",
		"guid" 			=> "",
		"codename"		=> "",
		"compatibility" => "*"
    ];
}


function markdown_install() {

}


function markdown_is_installed() {

}


function markdown_uninstall() {

}


function markdown_activate() {

}


function markdown_deactivate() {

}


function markdown_parse_message($message) {
    return (new CommonMarkConverter())->convertToHtml($message);
}