<?php

    /**
     *
     */
    class FreeKassa extends dbc
    {
        private $freekassa_id       = FK_ID;
        private $freekassa_secret_1 = FK_SEC1;
        private $freekassa_secret_2 = FK_SEC2;

        private $order_id   = null;
        private $price      = null;

        public $days       = null;

        public $language   = 'ru';

        public $us_login    = null;
        public $us_password = null;

        function __construct() {$this->data = $this->paymentStatus();}

        public function prices(){
            $array = array(
                80 => 7,
                149 => 30,
                249 => 60,
                399 => 90,
                749 => 180,
                1299 => 360,
                1399 => 9999,
            );
            return $array;
        }


        private function validUser(){
            $login      = isset($_COOKIE['login'])      ? $_COOKIE['login']     : $this->us_login;
            $password   = isset($_COOKIE['password'])   ? $_COOKIE['password']  : $this->us_password;

            $login      = parent::SECURE($login);
            $password   = parent::SECURE($password);
            $password   = md5($password);


            $this->query_select_one = true;
            $check = parent::query(
                "SELECT * FROM `Users` WHERE
                ( `email` = '{$login}' or `login` = '{$login}' )
                and
                `password` = '{$password}'
                LIMIT 1"
            ); 
            if($check == false)
                return false;

            return $check;
        }

        private function getInfoUser($login){
            $login = parent::SECURE($login);

            $this->query_select_one = true;
            $check = parent::query("SELECT * FROM `Users` WHERE `login` = '{$login}' LIMIT 1");
            if($check == false)
                return false;

            return $check;
        }

        private function sign($form = true){
            if($form)
                return md5($this->freekassa_id . ':' . $this->price . ':' . $this->freekassa_secret_1 . ':' . $this->order_id);
            else
                return md5(FK_ID . ':' . $this->price . ':' . FK_SEC2 . ':' . $this->order_id);
        }

        public function getURL(){
            $check = $this->validUser();
            if(!$check)
                return header('Location: /?s=1');

            $days = isset($_GET['id']) ? $_GET['id'] : $this->days;

            foreach ($this->Prices() as $key => $value) {
                if($days == $value)
                    $this->price = $key;
            }
            if($this->price == null)
                return header('Location: /?s=2');

            $this->order_id = time();

            $query = array(
                'm'         => $this->freekassa_id,
                'oa'        => $this->price,
                'o'         => $this->order_id,
                's'         => $this->sign(),
                'lang'      => $this->language,
                'us_login'  => $check['login']
            );
            // $this->price > 119 ||
            $link = 'http://www.free-kassa.ru/merchant/cash.php?'.http_build_query($query);
            return header('Location: ' . $link);
        }

        private function validIP(){
            $ip = isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : $_SERVER['REMOTE_ADDR'];
            $allow = array(
                '136.243.38.147',
                '136.243.38.149',
                '136.243.38.150',
                '136.243.38.151',
                '136.243.38.189',
                '88.198.88.98',
                '190.115.18.213'
            );

            if (!in_array($ip, $allow)) {
                return false;
            }
            return true;
        }

        public function payment(){

            $validIP = $this->validIP();
            if($validIP == false)
                die('ERROR - IP');

            $this->order_id = $_POST['MERCHANT_ORDER_ID'];
            $this->price = $_POST['AMOUNT'];

            $sign = $this->sign(false);
            if($sign != $_POST['SIGN'])
                die('ERROR - SIGN');

            foreach ($this->Prices() as $key => $value) {
                if($this->price == $key)
                    $this->days = $value;
            }
            if($this->days == null)
                die('ERROR - PRICE');

            $getInfo = $this->getInfoUser($_POST['us_login']);
            if($getInfo == false)
                die('ERROR - USER');

            $ctime = time();
            $timeleft = $this->days * 60 * 60 * 24;
            if($getInfo['subscription'] > $ctime){
                $timeleft = $getInfo['subscription'] + $timeleft;
            }else{
                $timeleft = $ctime + $timeleft;
            }

            parent::query("UPDATE `Users` SET `subscription` = '{$timeleft}' WHERE `login` = '{$getInfo['login']}' LIMIT 1");

            die('YES');
        }
        public function paymentStatus() { return [false,false]; }
    }
