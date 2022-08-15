<?php
define("ASS", true);
require($_SERVER['DOCUMENT_ROOT'].'/engine/core.php');
require(ROOT_DIR.'/classes/parser.class.php');
set_time_limit(5000);

$parser = new Parser;
$parsegoods = $parser->SelectParseGood();
$countparsegoods = count($parsegoods);
for($i = 0; $i < $countparsegoods; $i++) {
	$product_code = $parsegoods[$i]['product_id'];
	if(!$parser->GoodExist("WHERE `product_code` = '".$product_code."'")) {
		$name = $parsegoods[$i]['product_name'];
		$category = $parsegoods[$i]['category'];
		$gender = $parsegoods[$i]['gender'];
		$priceparse = $parsegoods[$i]['price'];
		$pricex = explode("£", $priceparse);
		//$getcur = getcurrency('GBP', 'RUB');
		//$calculate = round($pricex[1] * $getcur);
		// if($config['main']['pluscost'] > 0 && $config['main']['pluspercent'] > 0) {
		// 	$pricecalc = $calculate + $config['main']['pluscost'];
		// 	$pricecalc2 = $calculate * $config['main']['pluspercent'] / 100;
		// 	$pricecalc3 = $pricecalc + $pricecalc2;
		// 	$price_str = $pricecalc3;
		// } elseif($config['main']['pluscost'] > 0 && $config['main']['pluspercent'] <= 0) {
		// 	$pricecalc = $calculate + $config['main']['pluscost'];
		// 	$price_str = $pricecalc;
		// } elseif($config['main']['pluscost'] <= 0 && $config['main']['pluspercent'] > 0) {
		// 	$pricecalc = $calculate * $config['main']['pluspercent'] / 100;
		// 	$price_str = $pricecalc;
		// } else {
		$price_str = $pricex[1];
		//}
		$after_me = $parsegoods[$i]['after_me'];
		$sizes = explode("||", $parsegoods[$i]['sizes']);
		$sizefit = $parsegoods[$i]['sizefit'];
		$brand = $parsegoods[$i]['brand'];
		$product_detailsex = explode("||", $parsegoods[$i]['product_details']);
		$product_detailsex2 = implode("</p><p>", $product_detailsex);
		$product_details = '<p>'.$product_detailsex2.'</p>';
		$additional_details = $parsegoods[$i]['additional_details'];
		$asos_url = $parsegoods[$i]['product_link'];
		print_r($asos_url);
		$image_urls = explode("||", $parsegoods[$i]['image_urls']);
		$colors = explode("||", $parsegoods[$i]['color']);
		$categorys = explode("||", $parsegoods[$i]['categorys']);
		$asos_id = $parsegoods[$i]['asos_id'];
		$instock = $parsegoods[$i]['stock'];
		$indead = $parsegoods[$i]['dead'];
		$variants = $parsegoods[$i]['variants'];
		$discountex = explode("||", $parsegoods[$i]['discount']);
		$discount = $discountex[1];
		if(!$parser->CategoryExist("WHERE `name` = '".end($categorys)."' AND `gender` = '".$gender."'")) {
			for($j = 0; $j < count($categorys); $j++) {
				$catexp = explode("|", $categorys[$j]);
				if(!$parser->CategoryExist("WHERE `name` = '".$catexp[0]."' AND `gender` = '".$gender."'")) {
					if($catexp[0] != $gender && $catexp[0] != 'Home' && $catexp[0] != 'Women' && $catexp[0] != 'Men') {
						if($categorys[$j] == end($categorys)) {
							$category_id = $parser->CreateCategory($catexp[0], $gender, $catexp[1]);
						} else {
							$parser->CreateCategory($catexp[0], $gender, $catexp[1]);
						}
					}
				}
			}
		} else {
			$selcat = $parser->SelectCategory("WHERE `name` = '".end($categorys)."' AND `gender` = '".$gender."'");
			$category_id = $selcat[0]['id'];
		}
		$parser->CreateFolder($category_id);
		$imagename = generate_string().'.png';
		$parser->FilePutWithUrl($image_urls[0], $imagename, ROOT_DIR.'/photos/'.$category_id.'/');
		$creategood = $parser->CreateGood($name, $category_id, $gender, $price_str, $after_me, $sizes[0], $sizefit, $brand, $product_details, $additional_details, $asos_url, 'https://'.$config['main']['mainurl'].'photos/'.$category_id.'/'.$imagename, $colors[0], $product_code, $asos_id, $instock, $indead);
		for($k = 0; $k < count($sizes); $k++) {
			if(isset($colors[$k])) {
				$parser->CreateAdditionalGood($creategood, $sizes[$k], $colors[$k]);
			} else {
				$parser->CreateAdditionalGood($creategood, $sizes[$k]);
			}
		}
		if(count($colors) > count($sizes)) {
			for($l = 0; $l < count($colors); $l++) {
				if($l >= count($sizes)) {
					$parser->CreateAdditionalGood($creategood, null, $colors[$l]);
				}
			}
		}
		for($m = 0; $m < count($image_urls); $m++) {
			$imagenamer = generate_string().'.png';
			$parser->FilePutWithUrl($image_urls[$m], $imagenamer, ROOT_DIR.'/photos/'.$category_id.'/');
			$parser->CreateGoodImage($creategood, 'https://'.$config['main']['mainurl'].'photos/'.$category_id.'/'.$imagenamer);
		}
	} else {
		$itsgood = $parser->SelectGood("WHERE `product_code` = '".$product_code."'");
		$name = $parsegoods[$i]['product_name'];
		$category = $parsegoods[$i]['category'];
		$gender = $parsegoods[$i]['gender'];
		$priceparse = $parsegoods[$i]['price'];
		$pricex = explode("£", $priceparse);
		//$getcur = getcurrency('GBP', 'RUB');
		//$calculate = round($pricex[1] * $getcur);
		// if($config['main']['pluscost'] > 0 && $config['main']['pluspercent'] > 0) {
		// 	$pricecalc = $calculate + $config['main']['pluscost'];
		// 	$pricecalc2 = $calculate * $config['main']['pluspercent'] / 100;
		// 	$pricecalc3 = $pricecalc + $pricecalc2;
		// 	$price_str = $pricecalc3;
		// } elseif($config['main']['pluscost'] > 0 && $config['main']['pluspercent'] <= 0) {
		// 	$pricecalc = $calculate + $config['main']['pluscost'];
		// 	$price_str = $pricecalc;
		// } elseif($config['main']['pluscost'] <= 0 && $config['main']['pluspercent'] > 0) {
		// 	$pricecalc = $calculate * $config['main']['pluspercent'] / 100;
		// 	$price_str = $pricecalc;
		// } else {
		$price_str = $pricex[1];
		//}
		$after_me = $parsegoods[$i]['after_me'];
		$sizes = explode("||", $parsegoods[$i]['sizes']);
		$sizefit = $parsegoods[$i]['sizefit'];
		$brand = $parsegoods[$i]['brand'];
		$product_detailsex = explode("||", $parsegoods[$i]['product_details']);
		$product_detailsex2 = implode("</p><p>", $product_detailsex);
		$product_details = '<p>'.$product_detailsex2.'</p>';
		$additional_details = $parsegoods[$i]['additional_details'];
		$asos_url = $parsegoods[$i]['product_link'];
		print_r($asos_url);
		$image_urls = explode("||", $parsegoods[$i]['image_urls']);
		$colors = explode("||", $parsegoods[$i]['color']);
		$categorys = explode("||", $parsegoods[$i]['categorys']);
		$asos_id = $parsegoods[$i]['asos_id'];
		$instock = $parsegoods[$i]['stock'];
		$indead = $parsegoods[$i]['dead'];
		if(!$parser->CategoryExist("WHERE `name` = '".end($categorys)."' AND `gender` = '".$gender."'")) {
			for($j = 0; $j < count($categorys); $j++) {
				$catexp = explode("|", $categorys[$j]);
				if(!$parser->CategoryExist("WHERE `name` = '".$catexp[0]."' AND `gender` = '".$gender."'")) {
					if($catexp[0] != $gender && $catexp[0] != 'Home') {
						if($categorys[$j] == end($categorys)) {
							$category_id = $parser->CreateCategory($catexp[0], $gender, $catexp[1]);
						} else {
							$parser->CreateCategory($catexp[0], $gender, $catexp[1]);
						}
					}
				}
			}
		} else {
			$selcat = $parser->SelectCategory("WHERE `name` = '".end($categorys)."' AND `gender` = '".$gender."'");
			$category_id = $selcat[0]['id'];
		}
		$parser->CreateFolder($category_id);
		$imagename = generate_string().'.png';
		$parser->FilePutWithUrl($image_urls[0], $imagename, ROOT_DIR.'/photos/'.$category_id.'/');
		$creategood = UpdateGood($name, $category_id, $gender, $price_str, $after_me, $sizes[0], $sizefit, $brand, $product_details, $additional_details, $asos_url, 'https://'.$config['main']['mainurl'].'photos/'.$category_id.'/'.$imagename, $colors[0], $product_code, $asos_id, $instock, $indead);
		$parser->DeleteAdditionalGood($creategood);
		$parser->DeleteImagesGood($creategood);
		for($k = 0; $k < count($sizes); $k++) {
			if(isset($colors[$k])) {
				$parser->CreateAdditionalGood($creategood, $sizes[$k], $colors[$k]);
			} else {
				$parser->CreateAdditionalGood($creategood, $sizes[$k]);
			}
		}
		if(count($colors) > count($sizes)) {
			for($l = 0; $l < count($colors); $l++) {
				if($l >= count($sizes)) {
					$parser->CreateAdditionalGood($creategood, null, $colors[$l]);
				}
			}
		}
		for($m = 0; $m < count($image_urls); $m++) {
			$imagenamer = generate_string().'.png';
			$parser->FilePutWithUrl($image_urls[$m], $imagenamer, ROOT_DIR.'/photos/'.$category_id.'/');
			$parser->CreateGoodImage($creategood, 'https://'.$config['main']['mainurl'].'photos/'.$category_id.'/'.$imagenamer);
		}
	}
}