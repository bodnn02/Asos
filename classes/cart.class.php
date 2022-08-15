<?php
if (!defined("ASS")) {
    die("<pre>Нет доступа!</pre>");
}

class Cart
{
	public function GetCart($phpid) {
		global $link;
		$result = $link->query("SELECT * FROM `cart` WHERE `phpid` = '{$phpid}' AND `status` = 0")->fetchAll();
		$resultcount = $link->query("SELECT COUNT(*) AS `count` FROM `cart` WHERE `phpid` = '{$phpid}' AND `status` = 0")->fetchColumn();
		if($resultcount > 0) {
			return $result;
		} else {
			return false;
		}
	}

	public function AddCart($good, $count, $variant) {
		global $link;
		$good = $link->quote($good);
		$count = $link->quote($count);
		$variant = $link->quote($variant);
		$phpid = $link->quote($_SESSION['phpsesid']);
		$select = $link->query("SELECT * FROM `cart` WHERE `good` = {$good} AND `phpid` = {$phpid} AND `variant` = {$variant}")->fetch();
		if(!isset($select['id']) OR $select['id'] == null) {
			if($link->query("INSERT INTO `cart`(`good`, `count`, `variant`, `phpid`, `status`) VALUES({$good}, {$count}, {$variant}, {$phpid}, 0)")) {
				$select = $link->query("SELECT * FROM `cart` WHERE `good` = {$good} AND `phpid` = {$phpid} AND `variant` = {$variant}")->fetch();
				return $select['id'];
			} else {
				return false;
			}
		} else {
			if($link->query("UPDATE `cart` SET `count` = `count` + 1 WHERE `good` = {$good} AND `phpid` = {$phpid} AND `variant` = {$variant}")) {
				return $select['id'];
			} else {
				return false;
			}
		}
	}

	public function DeleteCart($good, $variant) {
		global $link;
		$good = $link->quote($good);
		$variant = $link->quote($variant);
		$phpid = $link->quote($_SESSION['phpsesid']);
		if($link->query("DELETE FROM `cart` WHERE `good` = {$good} AND `phpid` = {$phpid} AND `variant` = {$variant}")) {
			return true;
		} else {
			return false;
		}
	}

	public function SelectCart($where) {
		global $link;
		$phpid = $link->quote($_SESSION['phpsesid']);
		if($select = $link->query("SELECT * FROM `cart` WHERE `phpid` = {$phpid} AND ".$where)->fetch()) {
			return $select;
		} else {
			return false;
		}
	}
}