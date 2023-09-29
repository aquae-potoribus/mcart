<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("AGENTS_NAME"),
    "DESCRIPTION" => GetMessage("AGENTS_DESCRIPTION"),
//    "ICON" => "/images/icon.gif",
    "PATH" => array(
        "ID" => "agents",
    ),
//	"CACHE_PATH" => "Y",
);
