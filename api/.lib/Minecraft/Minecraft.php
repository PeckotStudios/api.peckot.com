<?php

require 'MinecraftPing.php';
require 'MinecraftPingException.php';
require 'MinecraftQuery.php';
require 'MinecraftQueryException.php';

use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

function QueryInfo($host, $port, $method)
{
    if ($method != 'query') {
        try {
            $Query = new MinecraftPing($host, $port);
            $result['code'] = 200;
            $result['state'] = 'Online';
            $result['info'] = 'Request successfully!';
            $result['server'] = $Query->Query();
            return $result;
        } catch (MinecraftPingException $e) {
            $result['code'] = 400;
            $result['state'] = 'Offline';
            $result['info'] = $e->getMessage();
            return $result;
        } finally {
            if ($Query) {
                $Query->Close();
            }
        }
    } else {
        $Query = new MinecraftQuery();
        try {
            $Query->Connect($host, $port);
            $result['code'] = 200;
            $result['state'] = 'Online';
            $result['info'] = 'Request successfully!';
            $result['server'] = $Query->GetInfo();
            $result['server']['playerlist'] = $Query->GetPlayers();
            return $result;
        } catch (MinecraftQueryException $e) {
            $result['code'] = 400;
            $result['state'] = 'Offline';
            $result['info'] = $e->getMessage();
            return $result;
        }
    }
}
