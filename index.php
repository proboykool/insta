<!DOCTYPE html>
<html>
<style>
        html, body {
            height: 100%;
            margin-top: 15px;
            padding: 0;
            width: 100%;
        }

        body {
            display: table;
        }
        .my-block {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
		div.round2 {
    border: 2px solid grey;
    border-radius: 8px;
}
input[type=text], select {
	font-size: 20px;
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
	font-size: 20px;
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
div.imgdown {
    width: 100%;
    height: 100%;	
}
div.imgdown img {
    max-width: 40%;
    height: auto;
}
</style>
<link rel="shortcut icon" type="image/x-icon" href="/Instagram/insta/dfa85bb1fd63.ico">
<title>Instagram Downloader</title>
<body>
<div class="my-block">
<center><a href="/Instagram" ><img frameborder="0" src="/Instagram/insta/insta.png" style="height:20%;"/></a></center><br>
<form method="post" action="">
<center><input name="insta" type="text"></center>
<font size="4">Download more link: End every link with "," - Video just download one link per time</font><br>
<input type="submit"></font>
<?php
class cURL {
var $headers;
var $user_agent;
var $compression;
var $cookie_file;
var $proxy;
	function __construct($cookies=TRUE,$cookie='cookie.txt',$compression='gzip',$proxy='') {
		$this->headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
		$this->headers[] = 'Connection: Keep-Alive';
		$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
		$this->user_agent = 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36';
		$this->compression=$compression;
		$this->proxy=$proxy;
		$this->cookies=$cookies;
		if ($this->cookies == TRUE) $this->cookie($cookie);
	}
	function cookie($cookie_file) {
		if (file_exists($cookie_file)) {
		$this->cookie_file=$cookie_file;
		} else {
		fopen($cookie_file,'w') or $this->error('The cookie file could not be opened. Make sure this directory has the correct permissions');
		$this->cookie_file=$cookie_file;
		fclose($this->cookie_file);
		}
	}
	
	function getheader($url) {
		$process = curl_init($url);
		curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($process, CURLOPT_HEADER, 1);
		curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
		if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
		if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
		curl_setopt($process,CURLOPT_ENCODING , $this->compression);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($process,CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($process,CURLOPT_CAINFO, NULL);
		curl_setopt($process,CURLOPT_CAPATH, NULL);
		$return = curl_exec($process);
		curl_close($process);
		return $return;
	}
	
	function get($url) {
		$process = curl_init($url);	
		curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($process, CURLOPT_HEADER, 0);
		curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
		if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
		if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
		curl_setopt($process,CURLOPT_ENCODING , $this->compression);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		//curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($process,CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt($process,CURLOPT_CAINFO, NULL); 
		curl_setopt($process,CURLOPT_CAPATH, NULL);
		$return = curl_exec($process);
		curl_close($process);
		return $return;
	}
	function post($url,$data) {
		$process = curl_init($url);
		curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($process, CURLOPT_HEADER, 1);
		curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
		if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
		if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
		curl_setopt($process, CURLOPT_ENCODING , $this->compression);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_POSTFIELDS, $data);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($process, CURLOPT_POST, 1);
		curl_setopt($process,CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt($process,CURLOPT_CAINFO, NULL); 
		curl_setopt($process,CURLOPT_CAPATH, NULL); 
		$return = curl_exec($process);
		curl_close($process);
		return $return;
	}
}
$curl = new cURL();
if(isset($_POST['insta'])){
$id = $_POST['insta'];
$mult = explode(",", $id);
if(isset($mult[1])){
$x = 0;
echo '<br>';
echo '<br>';
echo '<center><font size="4">Download here: </font><center>';
echo '<br>';
echo '<a href="http://tmqtest.rf.gd/insta/download.php?file='.$id.'" target="_blank"><img frameborder="0" src="/Instagram/insta/downloadbt.png" style="width:120px;height:40px;"/></a>';
echo '<br>';
echo '<br>';
echo '<center><font size="4">Your Picture:</font><center>';
echo '<br>';
echo '<div class="imgdown">';
while (isset($mult[$x])){
$dl = $curl->get($mult[$x]);
$t1 = explode("display_url", $dl);
$t3 = explode("video_url", $dl);
$dk1 = '"';
if(isset($t3[1])){
	$t4 = explode($dk1, $t3[1]);
}
$t2 = explode($dk1, $t1[1]);
if(isset($t3[1])){
echo '<img frameborder="0" src="'.$t2[2].'"/>';
echo '<video width="30%" height="30%" controls>
  <source src="'.$t4[2].'" type="video/mp4">
</video>';
}else{
echo '<img frameborder="0" src="'.$t2[2].'"/>';
}
$x++;
}
echo '</div>';
}else{
$dl = $curl->get($id);
$t1 = explode("display_url", $dl);
$t3 = explode("video_url", $dl);
$dk1 = '"';
if(isset($t3[1])){
	$t4 = explode($dk1, $t3[1]);
}
$t2 = explode($dk1, $t1[1]);
echo '<br>';
echo '<br>';
echo '<center><font size="4">Download here: </font><center>';
echo '<br>';
if(isset($t3[1])){
	echo '<center>Image download: </center><a href="'.$t2[2].'" download><img frameborder="0" src="/Instagram/insta/downloadbt.png" style="width:120px;height:40px;"/></a><br>';
	echo '<center>Video download: </center><a href="'.$t4[2].'" download><img frameborder="0" src="/Instagram/insta/downloadbt.png" style="width:120px;height:40px;"/></a>';
}else{
echo '<a href="'.$t2[2].'" download><img frameborder="0" src="/Instagram/insta/downloadbt.png" style="width:120px;height:40px;"/></a>';
}
echo '<br>';
echo '<br>';
if(isset($t3[1])){
echo '<center><font size="4">Your Picture, Video:</font></center>';
echo '<br>';
echo '<div class="imgdown"><img frameborder="0" src="'.$t2[2].'"/>	';
echo '<video width="30%" height="30%" controls>
  <source src="'.$t4[2].'" type="video/mp4">
</video>';
echo '</div>';
}else{
echo '<center><font size="4">Your Picture:</font></center>';
echo '<br>';
echo '<div class="imgdown"><img frameborder="0" src="'.$t2[2].'" /></div>';
}
}
}
?>
</form>
</div>

</body>
</html>