<?php
if (!defined("ASS")) {
    die("<pre>Нет доступа!</pre>");
}

class Auth
{
    public function LogOut() {
        unset($_SESSION['user']);
    }

    public function Register($email, $first_name = null, $last_name = null, $password, $birthday = null, $gender = null, $disc = null, $stuff = null, $exclusives = null, $partners = null, $google = null, $facebook = null, $apple = null, $twitter = null) {
        global $link;
        $email = $link->quote($email);
        if($first_name == null) {
            $first_name = NULL;
        } else {
            $first_name = $link->quote($first_name);
        }
        if($last_name == null) {
            $last_name = NULL;
        } else {
            $last_name = $link->quote($last_name);
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        if($birthday == null) {
            $birthday = NULL;
        } else {
            $birthday = $link->quote($birthday);
        }
        if($gender == null) {
            $gender = NULL;
        } else {
            $gender = $link->quote($gender);
        }
        if($disc == null) {
            $disc = NULL;
        } else {
            $disc = $link->quote($disc);
        }
        if($stuff == null) {
            $stuff = NULL;
        } else {
            $stuff = $link->quote($stuff);
        }
        if($exclusives == null) {
            $exclusives = NULL;
        } else {
            $exclusives = $link->quote($exclusives);
        }
        if($partners == null) {
            $partners = NULL;
        } else {
            $partners = $link->quote($partners);
        }
        if($google == null) {
            $google = 0;
        } else {
            $google = $link->quote($google);
        }
        if($facebook == null) {
            $facebook = 0;
        } else {
            $facebook = $link->quote($facebook);
        }
        if($apple == null) {
            $apple = 0;
        } else {
            $apple = $link->quote($apple);
        }
        if($twitter == null) {
            $twitter = 0;
        } else {
            $twitter = $link->quote($twitter);
        }
        if($link->query("INSERT INTO `users`(`email`,`first_name`,`last_name`,`password`,`birthday`,`gender`,`disc`,`stuff`,`exclusives`,`partners`,`google`,`facebook`,`apple`,`twitter`) VALUES({$email}, {$first_name}, {$last_name}, {$password}, {$birthday}, {$gender}, {$disc}, {$stuff}, {$exclusives}, {$partners}, {$google}, {$facebook}, {$apple}, {$twitter})")) {
            $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
            $_SESSION['user'] = $sel;
            return true;
        } else {
            return false;
        }
    }

    public function UserExist($email) {
        global $link;
        $email = $link->quote($email);
        $sel = $link->query("SELECT COUNT(*) FROM `users` WHERE `email` = {$email}")->fetchColumn();
        if($sel > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function UpdateUser($email, $set) {
        global $link;
        $email = $link->quote($email);
        $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
        if(isset($sel['id']) && $sel['id'] != null) {
            $link->query("UPDATE `users` SET ".$set." WHERE `email` = {$email}");
            return true;
        } else {
            return false;
        }
    }

    public function SelectUser($email) {
        global $link;
        $email = $link->quote($email);
        $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
        if(isset($sel['id']) && $sel['id'] != null) {
            return $sel;
        } else {
            return false;
        }
    }

    public function Login($email, $password) {
        global $link;
        $email = $link->quote($email);
        $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
        if(isset($sel['id']) && $sel['id'] != null) {
            if(password_verify($password, $sel['password'])) {
                $_SESSION['user'] = $sel;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function UpdateSession($email) {
        global $link;
        $email = $link->quote($email);
        $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
        if(isset($sel['id']) && $sel['id'] != null) {
            $_SESSION['user'] = $sel;
            return true;
        } else {
            return false;
        }
    }

    public function RecoveryToken($email) {
        global $link;
        $email = $link->quote($email);
        $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
        if(isset($sel['id']) && $sel['id'] != null) {
            $token = generate_string(64);
            $link->query("UPDATE `users` SET `recovery_token` = '{$token}' WHERE `email` = {$email}");
            $sel = $link->query("SELECT * FROM `users` WHERE `email` = {$email}")->fetch();
            return $sel['recovery_token'];
        } else {
            return false;
        }
    }

    public function ChangePassword($email, $newpassword) {
        global $link;
        $email = $link->quote($email);
        $newpassword = $link->quote($newpassword);
        if($link->query("UPDATE `users` SET `password` = {$newpassword} WHERE `email` = {$email}")) {
            return true;
        } else {
            return false;
        }
    }

    public function GoogleButton() {
        global $config;
        $params = array(
            'client_id'     => $config['apps']['google']['client_id'],
            'redirect_uri'  => 'https://'.$config['main']['mainurl'].'auths/login_google.php',
            'response_type' => 'code',
            'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
            'state'         => '1'
        );
         
        $url = 'https://accounts.google.com/o/oauth2/auth?' . urldecode(http_build_query($params));
        return $url;
    }

    public function GoogleAuth($code) {
        global $config;
        $params = array(
            'client_id'     => $config['apps']['google']['client_id'],
            'client_secret' => $config['apps']['google']['client_secret'],
            'redirect_uri'  => 'https://'.$config['main']['mainurl'].'auths/login_google.php',
            'grant_type'    => 'authorization_code',
            'code'          => $code
        );  
                
        $ch = curl_init('https://accounts.google.com/o/oauth2/token');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $data = curl_exec($ch);
        curl_close($ch);    
     
        $data = json_decode($data, true);
        if (!empty($data['access_token'])) {
            $params = array(
                'access_token' => $data['access_token'],
                'id_token'     => $data['id_token'],
                'token_type'   => 'Bearer',
                'expires_in'   => 3599
            );
     
            $info = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?' . urldecode(http_build_query($params)));
            $info = json_decode($info, true);
            return $info; //id, email, verified_email, given_name, family_name, name, picture, locale
        } else {
            return false;
        }
    }

    public function FacebookButton() {
        global $config;
        $params = array(
            'client_id'     => $config['apps']['facebook']['client_id'],
            'redirect_uri'  => 'https://'.$config['main']['mainurl'].'auths/login_facebook.php',
            'scope'         => 'email',
            'response_type' => 'code',
            'state'         => '1'
        );
         
        $url = 'https://www.facebook.com/dialog/oauth?' . urldecode(http_build_query($params));
        return $url;
    }

    public function FacebookAuth($code) {
        global $config;
        $params = array(
            'client_id'     => $config['apps']['facebook']['client_id'],
            'client_secret' => $config['apps']['facebook']['client_secret'],,
            'redirect_uri'  => 'https://'.$config['main']['mainurl'].'auths/login_facebook.php',
            'code'          => $code
        );
        
        $data = file_get_contents('https://graph.facebook.com/oauth/access_token?' . urldecode(http_build_query($params)));
        $data = json_decode($data, true);
     
        if (!empty($data['access_token'])) {
            $params = array(
                'access_token' => $data['access_token'],
                'fields'       => 'id,email,first_name,last_name,picture'
            );

            $info = file_get_contents('https://graph.facebook.com/me?' . urldecode(http_build_query($params)));
            $info = json_decode($info, true);
     
            return $info; //email, first_name, last_name, picture->data, id
        } else {
            return false;
        }
    }

    public function AppleButton() {
        global $config;
        $params = array(
            'client_id'     => $config['apps']['apple']['client_id'],
            'redirect_uri'  => 'https://'.$config['main']['mainurl'].'auths/login_apple.php',
            'scope'         => 'email',
            'response_type' => 'code',
            'state'         => '1'
        );
         
        $url = 'https://appleid.apple.com/auth/authorize?' . urldecode(http_build_query($params));
        return $url;
    }

    public function AppleAuth($code) {
        global $config;
        $params = array(
            'client_id'     => $config['apps']['apple']['client_id'],
            'client_secret' => $config['apps']['apple']['client_secret'],,
            'grant_type'  => 'authorization_code',
            'code'          => $code
        );
        
        $ch = curl_init('https://appleid.apple.com/auth/token');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $data = curl_exec($ch);
        curl_close($ch);
     
        $data = json_decode($data, true);
        // if (!empty($data['access_token'])) {
        //     $params = array(
        //         'access_token' => $data['access_token'],
        //         'fields'       => 'id,email,first_name,last_name,picture'
        //     );

        //     $info = file_get_contents('https://graph.facebook.com/me?' . urldecode(http_build_query($params)));
        //     $info = json_decode($info, true);
     
        //     return $info; //email, first_name, last_name, picture->data, id
        // } else {
        //     return false;
        // }
    }
}