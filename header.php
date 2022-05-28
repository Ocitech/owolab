<?php

error_reporting(E_ALL);
ini_set('display_errors', 5);

/// Reports any error it detects
if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); 


class Request
{

    /**
     * Retrieves IP address set in the request header.
     *
     * Each ISPs sets them following their own logic. There is also a possibility for the user
     * to easily spoof their IP address.
     *
     * So using this for mission critical situations is not advisable.
     * If you are getting the IP address for casual logging purposes, then this is fine.
     */
    public function getIpAddress()
    {
        $ipAddress = '';
        if (! empty($_SERVER['HTTP_CLIENT_IP']) && $this->isValidIpAddress($_SERVER['HTTP_CLIENT_IP'])) {
            // check for shared ISP IP
            $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // check for IPs passing through proxy servers
            // check if multiple IP addresses are set and take the first one
            $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($ipAddressList as $ip) {
                if ($this->isValidIpAddress($ip)) {
                    $ipAddress = $ip;
                    break;
                }
            }
        } else if (! empty($_SERVER['HTTP_X_FORWARDED']) && $this->isValidIpAddress($_SERVER['HTTP_X_FORWARDED'])) {
            $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (! empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && $this->isValidIpAddress($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } else if (! empty($_SERVER['HTTP_FORWARDED_FOR']) && $this->isValidIpAddress($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (! empty($_SERVER['HTTP_FORWARDED']) && $this->isValidIpAddress($_SERVER['HTTP_FORWARDED'])) {
            $ipAddress = $_SERVER['HTTP_FORWARDED'];
        } else if (! empty($_SERVER['REMOTE_ADDR']) && $this->isValidIpAddress($_SERVER['REMOTE_ADDR'])) {
            $ipAddress = $_SERVER['REMOTE_ADDR'];
        }
        return $ipAddress;
    }

    /**
     * To validate if an IP address is both a valid and does not fall within
     * a private network range.
     *
     * @access public
     * @param string $ip
     */
    public function isValidIpAddress($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
            return false;
        }
        return true;
    }

}
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $ipAddress = $_SERVER['REMOTE_ADDR'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 7 | IE 8]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="description" content="Oci Technology – Web development company in Lagos and Nigeria, Affordable Web Design, Mobile Applications And Custom-Web Application" />
<meta name='robots' content='all' />
        <meta name='robots' content='index, follow' />
        <meta name='msnbot' content='index, follow' />
        <meta name='slurp' content='index, follow' />
        <meta name='rating' content='General' />
        <meta name='revisit-after' content='1 day' />
        <meta name='expires' content='never' />
<meta name="author" content="https://www.ocitech.com.ng/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Welcome To Villa Park Hotel Official Sites</title>
    <!-- favicon icon -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/icon" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen">

	<!--[if lt IE 9]>
	<![endif]-->

		
	<link href="assets/css/css.css" rel="stylesheet" type="text/css">
    
<link rel="stylesheet" id="thickbox.css-css" href="<?php echo PREPEND_PATH; ?>assets/css/thickbox.css" type="text/css" media="all">

<script src="<?php echo PREPEND_PATH; ?>include/js/all.js" type="text/javascript"></script>
<script src="j/ga.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo PREPEND_PATH; ?>include/js/jquery.js"></script>
<script type="text/javascript">try{jQuery.noConflict();}catch(e){};</script>
<script type="text/javascript" src="<?php echo PREPEND_PATH; ?>include/js/jquery-migrate.js"></script>
<script type="text/javascript" src="<?php echo PREPEND_PATH; ?>include/js/init.js"></script>
<script type="text/javascript" src="<?php echo PREPEND_PATH; ?>include/js/supersized.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<body class="home blog" onkeydown="return false">
<header>

	<div class="wrapper wrapper-menu">
		
			<div id="logo">
								<a href="" title="">
                                <img src="images/logo.png" alt="" width="304" height="81"></a>			</div>
<!-- end #logo -->
		
			<a class="toggle_mobile_menu" id="hermes-toggle" href="#" rel="nofollow"></a>
			<nav id="menu-main">				
				
                <link href="<?php echo PREPEND_PATH; ?>assets/css/ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
               <script src="<?php echo PREPEND_PATH; ?>assets/css/ddmenu/ddmenu.js" type="text/javascript"></script>

<nav id="ddmenu">
        <div class="menu-icon"></div>
        <ul>
            <li><a href="index">Home</a>
            </li>
             <li>Rooms
<div>
                    <div class="column">
                       <a href="<?php echo PREPEND_PATH; ?>junior">Junior Suite</a>
                        <a href="<?php echo PREPEND_PATH; ?>double">Double Room</a>
                        <a href="<?php echo PREPEND_PATH; ?>single">Single Room</a> 
                        <a href="<?php echo PREPEND_PATH; ?>vip">VIP Room</a>                </div>
              </div>
            </li>
            <li class="text"><a href="<?php echo PREPEND_PATH; ?>testimonials">Testimonials</a></li>
            <li><a href="<?php echo PREPEND_PATH; ?>photo-gallery">Photo Gallery</a></li>
             <li>Contact
<div>
                    <div class="column">
                        <a href="<?php echo PREPEND_PATH; ?>booking">Booking</a>
                          </div>
              </div>
            </li>
            <li><a href="<?php echo PREPEND_PATH; ?>special-offers">Special Offer</a></li>
        </ul>
    </nav><!-- end #menu-main -->


        </header><!--header end-->
        
        <!-- Loader Starts-->
      