<?php
if (!defined("ASS")) {
    die("<pre>Нет доступа!</pre>");
}

class Parser
{
    public function CreateCategory($name, $gender, $asos_url = null, $parent = null) {
        global $link;
        $name = $link->quote($name);
        $gender = $link->quote($gender);
        if($asos_url != null) {
            $asos_url = $link->quote($asos_url);
            if($parent == null) {
                if($link->query("INSERT INTO `categorys`(`name`, `gender`, `asos_url`) VALUES({$name}, {$gender}, {$asos_url})")) {
                    $cat = $link->query("SELECT * FROM `categorys` WHERE `name` = {$name} AND `gender` = {$gender}")->fetch();
                    return $cat['id'];
                } else {
                    return false;
                }
            } else {
                $parent = $link->quote($parent);
                if($link->query("INSERT INTO `categorys`(`name`, `gender`, `asos_url`, `parent`) VALUES({$name}, {$gender}, {$asos_url}, {$parent})")) {
                    $cat = $link->query("SELECT * FROM `categorys` WHERE `name` = {$name} AND `gender` = {$gender}")->fetch();
                    return $cat['id'];
                } else {
                    return false;
                }
            }
        } else {
            if($parent == null) {
                if($link->query("INSERT INTO `categorys`(`name`, `gender`) VALUES({$name}, {$gender})")) {
                    $cat = $link->query("SELECT * FROM `categorys` WHERE `name` = {$name} AND `gender` = {$gender}")->fetch();
                    return $cat['id'];
                } else {
                    return false;
                }
            } else {
                $parent = $link->quote($parent);
                if($link->query("INSERT INTO `categorys`(`name`, `gender`, `parent`) VALUES({$name}, {$gender}, {$parent})")) {
                    $cat = $link->query("SELECT * FROM `categorys` WHERE `name` = {$name} AND `gender` = {$gender}")->fetch();
                    return $cat['id'];
                } else {
                    return false;
                }
            }
        }
    }

    public function CreateParseCategory($name, $gender, $asos_url) {
        global $link;
        $name = $link->quote($name);
        $gender = $link->quote($gender);
        $asos_url = $link->quote($asos_url);
        if($link->query("INSERT INTO `parse_categorys`(`name`, `gender`, `url`) VALUES({$name}, {$gender}, {$asos_url})")) {
            $cat = $link->query("SELECT * FROM `parser_categorys` WHERE `name` = {$name} AND `gender` = {$gender}")->fetch();
            return $cat['id'];
        } else {
            return false;
        }
    }

    public function SelectCategory($where = null, $order = null) {
        global $link;
        if($where == null && $order == null) {
            $categorys = $link->query("SELECT * FROM `categorys`")->fetchAll();
            return $categorys;
        } elseif($order != null && $where != null) {
            $categorys = $link->query("SELECT * FROM `categorys` ".$where." ".$order)->fetchAll();
            return $categorys;
        } elseif($where == null && $order != null) {
            $categorys = $link->query("SELECT * FROM `categorys` ".$order)->fetchAll();
            return $categorys;
        } elseif($order == null && $where != null) {
            $categorys = $link->query("SELECT * FROM `categorys` ".$where)->fetchAll();
            return $categorys;
        } else {
            return false;
        }
    }

    public function CategoryExist($where) {
        global $link;
        if($where != null) {
            $cat = $link->query("SELECT * FROM `categorys` ".$where)->fetch();
            if(isset($cat['id']) && $cat['id'] != null) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function SelectParseCategory($where = null, $order = null) {
        global $link;
        if($where == null && $order == null) {
            $categorys = $link->query("SELECT * FROM `parse_categorys`")->fetchAll();
            return $categorys;
        } elseif($order != null && $where != null) {
            $categorys = $link->query("SELECT * FROM `parse_categorys` ".$where." ".$order)->fetchAll();
            return $categorys;
        } elseif($where == null && $order != null) {
            $categorys = $link->query("SELECT * FROM `parse_categorys` ".$order)->fetchAll();
            return $categorys;
        } elseif($order == null && $where != null) {
            $categorys = $link->query("SELECT * FROM `parse_categorys` ".$where)->fetchAll();
            return $categorys;
        } else {
            return false;
        }
    }

    public function DeleteCategory($where = null) {
        global $link;
        if($where == null) {
            if($link->query("DELETE FROM `categorys`")) {
                return true;
            } else {
                return false;
            }
        } else {
            if($link->query("DELETE FROM `categorys` ".$where)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function DeleteParseCategory($where = null) {
        global $link;
        if($where == null) {
            if($link->query("DELETE FROM `parse_categorys`")) {
                return true;
            } else {
                return false;
            }
        } else {
            if($link->query("DELETE FROM `parse_categorys` ".$where)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function CreateFolder($name1 = null, $name2 = null, $name3 = null) {
        if($name1 != null && $name2 != null && $name3 != null) {
            if(!file_exists(ROOT_DIR.'/photos/'.$name1)) {
                mkdir(ROOT_DIR.'/photos/'.$name1);
            }
            if(!file_exists(ROOT_DIR.'/photos/'.$name1.'/'.$name2)) {
                mkdir(ROOT_DIR.'/photos/'.$name1.'/'.$name2);
            }
            if(!file_exists(ROOT_DIR.'/photos/'.$name1.'/'.$name2.'/'.$name3)) {
                mkdir(ROOT_DIR.'/photos/'.$name1.'/'.$name2.'/'.$name3);
            }
        } elseif($name1 != null && $name2 != null && $name3 == null) {
            if(!file_exists(ROOT_DIR.'/photos/'.$name1)) {
                mkdir(ROOT_DIR.'/photos/'.$name1);
            }
            if(!file_exists(ROOT_DIR.'/photos/'.$name1.'/'.$name2)) {
                mkdir(ROOT_DIR.'/photos/'.$name1.'/'.$name2);
            }
        } elseif($name1 != null && $name2 == null && $name3 == null) {
            if(!file_exists(ROOT_DIR.'/photos/'.$name1)) {
                mkdir(ROOT_DIR.'/photos/'.$name1);
            }
        } else {
            return false;
        }
    }

    public function FilePutWithUrl($url, $name, $folder = null) {
        if($folder == null) {
            file_put_contents($name, file_get_contents($url));
        } else {
            file_put_contents($folder.$name, file_get_contents($url));
        }
    }

    public function CreateGood($name, $category_id, $gender, $price_str, $after_me, $size, $sizefit, $brand, $product_details, $additional_details, $asos_url, $image, $color, $product_code, $asos_id, $instock, $indead, $discount) {
        global $link;
        $name = $link->quote($name);
        $category_id = $link->quote($category_id);
        $gender = $link->quote($gender);
        $price_str = $link->quote($price_str);
        $after_me = $link->quote($after_me);
        $size = $link->quote($size);
        $sizefit = $link->quote($sizefit);
        $brand = $link->quote($brand);
        $product_details = $link->quote($product_details);
        $additional_details = $link->quote($additional_details);
        $asos_url = $link->quote($asos_url);
        $image = $link->quote($image);
        $color = $link->quote($color);
        $product_code = $link->quote($product_code);
        $asos_id = $link->quote($asos_id);
        $instock = $link->quote($instock);
        $indead = $link->quote($indead);
        $discount = $link->quote($discount);
        if($link->query("INSERT INTO `goods`(`name`,`category_id`,`gender`,`price_str`,`after_me`,`size`,`sizefit`,`brand`,`product_details`,`additional_details`,`asos_url`, `image`, `color`, `product_code`, `asos_id`, `instock`, `indead`, `discount`) VALUES({$name}, {$category_id}, {$gender}, {$price_str}, {$after_me}, {$size}, {$sizefit}, {$brand}, {$product_details}, {$additional_details}, {$asos_url}, {$image}, {$color}, {$product_code}, {$asos_id}, {$instock}, {$indead}, {$discount})")) {
            $good = $link->query("SELECT * FROM `goods` WHERE `name` = {$name} AND `gender` = {$gender} AND `category_id` = {$category_id} AND `image` = {$image}")->fetch();
            return $good['id'];
        } else {
            return false;
        }
    }

    public function UpdateGood($name, $category_id, $gender, $price_str, $after_me, $size, $sizefit, $brand, $product_details, $additional_details, $asos_url, $image, $color, $product_code, $asos_id, $instock, $indead, $good_id, $discount) {
        global $link;
        $name = $link->quote($name);
        $category_id = $link->quote($category_id);
        $gender = $link->quote($gender);
        $price_str = $link->quote($price_str);
        $after_me = $link->quote($after_me);
        $size = $link->quote($size);
        $sizefit = $link->quote($sizefit);
        $brand = $link->quote($brand);
        $product_details = $link->quote($product_details);
        $additional_details = $link->quote($additional_details);
        $asos_url = $link->quote($asos_url);
        $image = $link->quote($image);
        $color = $link->quote($color);
        $product_code = $link->quote($product_code);
        $asos_id = $link->quote($asos_id);
        $instock = $link->quote($instock);
        $indead = $link->quote($indead);
        $good_id = $link->quote($good_id);
        $discount = $link->quote($discount);
        if($link->query("UPDATE `goods` SET `name` = {$name},`category_id` = {$category_id},`gender` = {$gender},`price_str` = {$price_str},`after_me` = {$after_me},`size` = {$size},`sizefit` = {$sizefit},`brand` = {$brand},`product_details` = {$product_details},`additional_details` = {$additional_details},`asos_url` = {$asos_url}, `image` = {$image}, `color` = {$color}, `product_code` = {$product_code}, `asos_id` = {$asos_id}, `instock` = {$instock}, `indead` = {$indead}, `discount` = {$discount} WHERE `id` = {$good_id}")) {
            $good = $link->query("SELECT * FROM `goods` WHERE `name` = {$name} AND `gender` = {$gender} AND `category_id` = {$category_id} AND `image` = {$image}")->fetch();
            return $good['id'];
        } else {
            return false;
        }
    }

    public function SelectGood($where = null, $order = null) {
        global $link;
        if($where == null && $order == null) {
            $goods = $link->query("SELECT * FROM `goods`")->fetchAll();
            return $goods;
        } elseif($order != null && $where != null) {
            $goods = $link->query("SELECT * FROM `goods` ".$where." ".$order)->fetchAll();
            return $goods;
        } elseif($where == null && $order != null) {
            $goods = $link->query("SELECT * FROM `goods` ".$order)->fetchAll();
            return $goods;
        } elseif($order == null && $where != null) {
            $goods = $link->query("SELECT * FROM `goods` ".$where)->fetchAll();
            return $goods;
        } else {
            return false;
        }
    }

    public function SelectParseGood($where = null, $order = null) {
        global $link;
        if($where == null && $order == null) {
            $goods = $link->query("SELECT * FROM `parse`")->fetchAll();
            return $goods;
        } elseif($order != null && $where != null) {
            $goods = $link->query("SELECT * FROM `parse` ".$where." ".$order)->fetchAll();
            return $goods;
        } elseif($where == null && $order != null) {
            $goods = $link->query("SELECT * FROM `parse` ".$order)->fetchAll();
            return $goods;
        } elseif($order == null && $where != null) {
            $goods = $link->query("SELECT * FROM `parse` ".$where)->fetchAll();
            return $goods;
        } else {
            return false;
        }
    }

    public function GoodExist($where) {
        global $link;
        if($where != null) {
            if($link->query("SELECT * FROM `goods` ".$where)) {
                $good = $link->query("SELECT * FROM `goods` ".$where)->fetch();
                if(isset($good['id']) && $good['id'] != null) {
                    return true;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function GoodParseExist($where) {
        global $link;
        if($where != null) {
            if($link->query("SELECT * FROM `parse` ".$where)) {
                $good = $link->query("SELECT * FROM `parse` ".$where)->fetch();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function DeleteGood($good_id) {
        global $link;
        if($good_id == null) {
            return false;
        } else {
            if($link->query("DELETE FROM `goods` WHERE `id` = ".$good_id)) {
                $link->query("DELETE FROM `goods_images` WHERE `good_id` = ".$good_id);
                $link->query("DELETE FROM `additional_goods` WHERE `good_id` = ".$good_id);
                return true;
            } else {
                return false;
            }
        }
    }

    public function DeleteParseGood($where = null) {
        global $link;
        if($where == null) {
            if($link->query("DELETE FROM `parse`")) {
                return true;
            } else {
                return false;
            }
        } else {
            if($link->query("DELETE FROM `parse` ".$where)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function CreateGoodImage($good_id, $image) {
        global $link;
        $good_id = $link->quote($good_id);
        $image = $link->quote($image);
        if($link->query("INSERT INTO `goods_images`(`good_id`,`image`) VALUES({$good_id}, {$image})")) {
           $img = $link->query("SELECT * FROM `goods_images` WHERE `good_id` = {$good_id} AND `image` = {$image}")->fetch();
           return $img['id'];
        } else {
            return false;
        }
    }

    public function DeleteAdditionalGood($good_id) {
        $link->query("DELETE FROM `additional_goods` WHERE `good_id` = ".$good_id);
        return true;
    }

    public function DeleteImagesGood($good_id) {
        $link->query("DELETE FROM `goods_images` WHERE `good_id` = ".$good_id);
        return true;
    }

    public function CreateAdditionalGood($good_id, $size, $color, $instock) {
        global $link;
        // if($size != null && $color != null) {
        $size = $link->quote($size);
        $color = $link->quote($color);
        if($instock == 1) {
            $instock = $link->quote($instock);
        } else {
            $instock = $link->quote(0);
        }
        if($link->query("INSERT INTO `additional_goods`(`size`,`color`,`good_id`,`instock`) VALUES({$size}, {$color}, '{$good_id}', {$instock})")) {
           $add = $link->query("SELECT * FROM `additional_goods` WHERE `good_id` = '{$good_id}' AND `size` = {$size} AND `color` = {$color} AND `instock` = {$instock}")->fetch();
           return $add['id'];
        } else {
            return false;
        }
        // } elseif($size == null && $color != null) {
        //     $color = $link->quote($color);
        //     if($link->query("INSERT INTO `additional_goods`(`color`,`good_id`) VALUES({$color}, '{$good_id}')")) {
        //        $add = $link->query("SELECT * FROM `additional_goods` WHERE `good_id` = '{$good_id}' AND `size` IS NULL AND `color` = {$color}")->fetch();
        //        return $add['id'];
        //     } else {
        //         return false;
        //     }
        // } elseif($size != null && $color == null) {
        //     $size = $link->quote($size);
        //     if($link->query("INSERT INTO `additional_goods`(`size`,`good_id`) VALUES({$size}, '{$good_id}')")) {
        //        $add = $link->query("SELECT * FROM `additional_goods` WHERE `good_id` = '{$good_id}' AND `size` = {$size} AND `color` IS NULL")->fetch();
        //        return $add['id'];
        //     } else {
        //         return false;
        //     }
        // } else {
        //     return false;
        // }
    }
}