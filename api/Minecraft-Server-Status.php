<?php

require __DIR__ . '/.lib/Minecraft/MinecraftPing.php';
require __DIR__ . '/.lib/Minecraft/MinecraftPingException.php';
require __DIR__ . '/.lib/Minecraft/MinecraftQuery.php';
require __DIR__ . '/.lib/Minecraft/MinecraftQueryException.php';

use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

$host = $_GET['ip'];
$port = $_GET['port'];
$type = $_GET['type'];

if ($_GET['method'] == 'ping') {
	try {
		$Query = new MinecraftPing($host, $port);
		if ($type == 'array') {
			$result = $Query->Query();
			$result['status'] = 'online';
			$result['message'] = 'Request successfully!';
			$result['code'] = 200;
			print_r($result);
		} else {
			$result = $Query->Query();
			$result['status'] = 'online';
			$result['message'] = 'Request successfully!';
			$result['code'] = 200;
			print_r(json_encode($result, true));
		}
	} catch (MinecraftPingException $e) {
		if ($type == 'array') {
			$result = array(
				'status' => 'Offline',
				'message' => $e->getMessage(),
				'code'   => 400,
			);
			print_r($result);
		} else {
			$result = array(
				'status' => 'Offline',
				'message' => $e->getMessage(),
				'code'   => 400,
			);
			print_r(json_encode($result, true));
		}
	} finally {
		if ($Query) {
			$Query->Close();
		}
	}
} elseif ($_GET['method'] == 'query') {
	$Query = new MinecraftQuery();
	try {
		$Query->Connect($host, $port);
		if ($type == 'array') {
			$result = $Query->GetInfo();
			$result['playerlist'] = $Query->GetPlayers();
			$result['status'] = 'online';
			$result['message'] = 'Request successfully!';
			$result['code'] = 200;
			print_r($result);
		} else {
			$result = $Query->GetInfo();
			$result['playerlist'] = $Query->GetPlayers();
			$result['status'] = 'online';
			$result['message'] = 'Request successfully!';
			$result['code'] = 200;
			print_r(json_encode($result));
		}
	} catch (MinecraftQueryException $e) {
		if ($type == 'array') {
			$result = array(
				'status' => 'offline',
				'message' => $e->getMessage(),
				'code'   => 400,
			);
			print_r($result);
		} else {
			$result = array(
				'status' => 'offline',
				'message' => $e->getMessage(),
				'code'   => 400,
			);
			print_r(json_encode($result, true));
		}
	}
}
