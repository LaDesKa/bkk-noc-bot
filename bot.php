<?php

$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:1eujkGzOws3Goxl';

require "vendor/autoload.php";

$access_token = 'rZC7OxAaKHIz4OS/72ty7JwBYqMJBprC+MsdWsVrG5ePZX2/dhiusE2hYb1vu0BQ4aMA0Ylw2mNnrtHP1OmNZEOJJWyxnfE2JkP0VAOSmZIp5wGDaBp3nC0FGd+qJ6jqaHe7BfN1m2UHBWtdzXEzMAdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$channelSecret = '9b9c85d174878dd562bbf3972c961c18';

//$httpClient = new LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
//$bot = new LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]); 
//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
//$response = $bot->pushMessage('U1cefecdcaa49cdb7c36785307c86e68f', $textMessageBuilder);
//$httpClient = new CurlHTTPClient($access_token);
//$bot = new LINEBot($httpClient, array('channelSecret' => $channelSecret));

$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
$arrayJson = json_decode($content, true); // new code
$arrayHeader = array(); // new code
$arrayHeader[] = "Content-Type: application/json"; // new code
$arrayHeader[] = "Authorization: Bearer {$accessToken}"; // new code
$message = $arrayJson['events'][0]['message']['text']; // new code
$welcome = ['Hi','RGS','RGS_Country','Report','555','hello'];
$userID = $events['events'][0]['source']['userId'];
//$responses = $bot -> getProfile($userID);
//$userData = $userID->getJSONDecodedBody();
// Validate parsed JSON data

if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $message == $welcome[0]) {
			// Get text sent
			//$welcome == 'Hi' ;
			// Get replyToken
			
			//$userData = json_decode($userID);
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => 'Hello!! I am Aerothai Noc Bot'
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                        $result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $message == $welcome[1]) {
			// Get text sent
			//$welcome == 'Hi' ;
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => 'Total RGS is 143 station 
					   ACARS: 143 stations 
					   VDL: 32 stations 
					   Autotune: 32 stations'
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                        $result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
    else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $message == $welcome[2]) {
			// Get text sent
			//$welcome == 'Hi' ;
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => 'Australia : 28 stations
					   Brunei : 1 station
					   Cambodia : 2 stations
					   India : 7 stations
					   Indonesia : 12 stations
					   Malaysia : 18 stations
					   Mongolia : 4 stations
					   Myanmar : 3 stations
					   New Zealand : 6 stations
					   Philippines : 7 stations
					   Singapore : 5 stations
					   South Korea : 18 stations
					   Taiwan : 5 stations
					   Thailand : 20 stations
					   Vietnam : 7 stations'
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                        $result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
		if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $message == $welcome[3]) {
			// Get text sent
			//$welcome == 'Hi' ;
			// Get replyToken
			$report = "http://10.1.10.212";
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $report
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                        $result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
		if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $message == $welcome[4]) {
			// Get text sent
			//$welcome == 'Hi' ;
			// Get replyToken
			$report = "http://10.1.10.212";
			$replyToken = $event['replyToken'];
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => 'ขำอะไรนักหวะ!!'
			];
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                        $result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
	}
}
//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK";
