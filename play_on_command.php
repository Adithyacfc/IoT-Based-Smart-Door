<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//


function update_db() {
	//system('gst-launch-0.10 -q filesrc location=bell.wav ! wavparse ! autoaudiosink &');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "tag=status2&hidden=html&value=0&submit=Store \a \value");
		curl_setopt($ch, CURLOPT_URL,"http://testfileup-1219.appspot.com/storeavalue");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
		curl_exec ($ch);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "tag=flag&hidden=html&value=0&submit=Store \a \value");
		curl_setopt($ch, CURLOPT_URL,"http://testfileup-1219.appspot.com/storeavalue");
		curl_exec ($ch);
		curl_close ($ch);
}

function fetch_flag_from_db() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "tag=flag&hidden=html&submit=Get\ value");
		curl_setopt($ch, CURLOPT_URL,"http://testfileup-1219.appspot.com/getvalue");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$json = curl_exec ($ch);
		$decoded = json_decode($json, true);
		//echo $decoded[2];
		curl_close ($ch);
		return $decoded[2];
}

function fetch_status_from_db() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "tag=status2&hidden=html&submit=Get\ value");
		curl_setopt($ch, CURLOPT_URL,"http://testfileup-1219.appspot.com/getvalue");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$json = curl_exec ($ch);
		//echo $json;
		$decoded = json_decode($json, true);
		//echo "status=".$decoded[2];
		//echo $decoder[2];
		curl_close ($ch);
		return $decoded[2];
}


while (1){

$flag = fetch_flag_from_db();
//echo "flag=".$flag;
echo $flag;
if ($flag == 1) {

$swc =  fetch_status_from_db();
//echo "statusreturned=".$swc;

switch ($swc) {
    case  1:
        update_db();
       // system('gst-launch-0.10 -q filesrc location=bell.wav ! wavparse ! autoaudiosink &');
       //system('./play.sh');
       system('aplay bell.wav &');
		sleep(5);
	//	system('gst-launch-0.10 -q filesrc location=will_be_right_back.wav ! wavparse ! autoaudiosink &');
	system('aplay will_be_right_back.wav &');
		sleep(1);
	    break;
    case 2:
        update_db();
       // system('gst-launch-0.10 -q filesrc location=bell.wav ! wavparse ! autoaudiosink &');
		system('aplay  bell.wav &');
		sleep(5);
		// system('gst-launch-0.10 -q filesrc location=will_be_back_in_ten_min.wav ! wavparse ! autoaudiosink &');
		system('aplay  will_be_back_in_ten_min.wav &');
		sleep(1);
		break;
    case 3:
        update_db();
       // system('gst-launch-0.10 -q filesrc location=bell.wav ! wavparse ! autoaudiosink &');
       system('aplay  bell.wav &');
		sleep(5);
		system('aplay we_will_meet_later.wav  &');
		sleep(1);
        break;
	case 4:
        update_db();
        //system('gst-launch-0.10 -q filesrc location=bell.wav ! wavparse ! autoaudiosink &');
		system('aplay  bell.wav &');
		sleep(5);
		system('aplay oof_meet_u_later.wav  &');
		sleep(1);
        break;
    case 5:
        update_db();
       // system('gst-launch-0.10 -q filesrc location=bell.wav ! wavparse ! autoaudiosink &');
		system('aplay  bell.wav &');
		sleep(5);
		system('aplay on_leave.wav  &');
		sleep(1);
        break;
	}
}
	sleep(2);
}
?>




