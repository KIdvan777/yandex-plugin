<?php

$id = '57691045';
$token = 'AgAAAAA9lyDZAAYpa3wrl4l4uElFgKDbjtDhkM8';

function curl_file_get_contents($url)
{
	$authToken = 'AgAAAAA9lyDZAAYplyr3o_5ZVUC4pyxJHPs5L3k';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-yametrika+json', 'Authorization: OAuth' . $authToken]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$obj = curl_exec($ch);
	curl_close($ch);
	return $obj;
	}
	$url = 'https://api-metrika.yandex.ru/stat/v1/data';
	$params = array(
	'ids' => '57691045',
	'metrics' => 'ym:s:visits',
	'dimensions' => 'ym:s:externalRefererPathLevel1',
	'date1' => '7daysAgo',
	'date2' => 'yesterday'
	);
	$obj = curl_file_get_contents($url . '?' . http_build_query($params));
	$obj = json_decode($obj, true);

	// for ($i = 0;$i < count($obj['data']);$i++)
	// {
	// echo '[', "'", $obj['data'][$i]['dimensions'][0]['name'], "'", ', ', $obj['data'][$i]['metrics']['0'], '],';
	// }
