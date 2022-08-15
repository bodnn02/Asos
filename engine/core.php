<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!defined("ASS")) die("<pre>Нет доступа!</pre>");

define('ROOT_DIR'       , $_SERVER['DOCUMENT_ROOT']            );
define('PHOTO_DIR'      , $_SERVER['DOCUMENT_ROOT'].'/photos'  );
define('ENGINE_DIR'     , $_SERVER['DOCUMENT_ROOT'].'/engine'  );
define('CLASSES_DIR'    , ROOT_DIR . '/classes'                );
define('TEMPLATE_DIR'   , ROOT_DIR . '/template'               );
define('VERSION'        , '0.1'                                );

session_start();

if(!isset($_SESSION['phpsesid'])) {
	generateses();
}

require(ENGINE_DIR . "/config.php");

if ($config['main']['installed']) {
	try {
		$opt = array(
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);
		$link = @new PDO("mysql:host={$config['main']['db_host']};port={$config['main']['db_port']};dbname={$config['main']['db_name']};charset=utf8", $config['main']['db_user'], $config['main']['db_pass'], $opt);
	} catch (PDOException $ex) {
		exit("{$ex->getMessage()}<p>[Database] Вы не подключились к базе данных.</p>");
	}
}

function TextSave($string) {
	return htmlspecialchars($string);
}

function MessageSend($t, $s, $u = '') {
	switch ($t) {
		case 2:
			$class_name = 'warning';
			$title = 'Предупреждение';
			break;

		case 3:
			$class_name = 'success';
			$title = 'Успех';
			break;

		case 1:
		default:
			$class_name = 'danger';
			$title = 'Ошибка';
			break;
	}
	$_SESSION['message'] = '<div class="' . $class_name . '" id="alert">' . $s . '</div>';

	$_SESSION['message'] = <<<END
	<div class="alert alert-$class_name">
		<b>$title!</b> $s
	</div>
END;

	if ($u)	{
		exit(header("Location: ".$u));
	} else {
		if(isset($_SERVER['HTTP_REFERER'])) {
			exit(header("Location: ".$_SERVER['HTTP_REFERER']));
		} else {
			exit(header("Location: /"));
		}
	}
}

function MessageShow() {
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function savecfg() {
	global $config;

	$txt  = '<?php' . PHP_EOL;
	$txt .= "//CMS создана разработчиком Ruslaan1!" . PHP_EOL;
	$txt .= '$config = '.var_export($config, true).';' . PHP_EOL;
	$txt .= '?>';

	$result = file_put_contents(ROOT_DIR . "/config.php", $txt);

	if($result === false) {
		return false;
	}

	return true;
}

function getcheap() {
	$result = $_SERVER['REQUEST_URI'];
	$array_url = preg_split('/(\/|\..*$)/', $result, 1, PREG_SPLIT_NO_EMPTY);
	$pagex = explode("/", $array_url[0]);
	$sef_value = end($pagex);
	return $sef_value;
}

function generateses() {
	$_SESSION['phpsesid'] = generate_string(64);
	return true;
}

function getcurrency($curone, $curtwo) {
	global $config;
	$get = file_get_contents('https://currate.ru/api/?get=rates&pairs='.$curone.$curtwo.'&key='.$config['main']['currate_key']);
	if($get != false) {
		$json = json_decode($get, true);
		return $json['data'][$curone.$curtwo];
	} else {
		return false;
	}
}

function photosecurity($photo, $number) {
	$name = $photo['name'][$number];
	$type = $photo['type'][$number];
	$size = $photo['size'][$number];
	$blacklist = array(".php", ".js", ".html", ".ajax", ".css", ".txt", ".zip", ".rar", ".gif");

	foreach($blacklist as $row) {
		if(preg_match("/$row\$/i", $name)) return false;
	}

	if($size > 5242880) return false;

	if(($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) return false;

	return true;
}

function loadphoto($photo, $number) {
	$type = $photo['type'][$number];
	$name = md5(microtime()).'.'.substr($type, strlen("image/"));
	$photosfile = PHOTO_DIR.'/'.$name;
	$_SESSION['photo'] = $name;
	move_uploaded_file($photo['tmp_name'][$number], $photosfile);
	return true;
}

function generate_string($strength = 16) {
	$input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

function getCity() {
	$ch = curl_init('http://ip-api.com/json/' . $_SERVER['REMOTE_ADDR'] . '?lang=ru');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$res = curl_exec($ch);
	curl_close($ch);
	 
	$res = json_decode($res, true);
	if(isset($res['status']) && $res['status'] == 'fail') {
		return 'Город не определён';
	} else {
		return $res['city'];
	}
}

function translit($textcyr = null, $textlat = null) {
    $cyr = array(
    'ж',  'ч',  'щ',   'ш',  'ю',  'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я',
    'Ж',  'Ч',  'Щ',   'Ш',  'Ю',  'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я', ' ');
    $lat = array(
    'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'y', 'x', 'q',
    'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', 'Y', 'X', 'Q', '_');
    if($textcyr) return str_replace($cyr, $lat, $textcyr);
    else if($textlat) return str_replace($lat, $cyr, $textlat);
    else return null;
}

function translitrus($textcyr = null, $textlat = null) {
    $lat = array(
    'ж',  'ч',  'щ',   'ш',  'ю',  'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я',
    'Ж',  'Ч',  'Щ',   'Ш',  'Ю',  'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я', ' ');
    $cyr = array(
    'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'y', 'x', 'q',
    'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', 'Y', 'X', 'Q', '_');
    if($textcyr) return str_replace($cyr, $lat, $textcyr);
    else if($textlat) return str_replace($lat, $cyr, $textlat);
    else return null;
}

function getIP() {
	if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
		$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
	} else {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip=$_SERVER['REMOTE_ADDR'];
		}
	}

	return $ip;
}

function getTime($time) {
	return date("d.m.Y H:i:s", $time);
}