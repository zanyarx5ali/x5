<?php
error_reporting(0);
$green="\033[1;32m";
$wait = $green."WAIT";
$res="\033[0m";
$red="\033[1;31m";
$yellow="\033[0;93m";
$lightblue="\033[1;35m";
$bluelight="\033[1;34m";
$blue="\033[1;36m";
$purple="\e[35m";
$banner="
\033[1;36m██████╗ \033[0m██╗   ██╗\033[1;35m████████╗
\033[1;36m██╔══██╗\033[0m██║   ██║\033[1;35m╚══██╔══╝
\033[1;36m██████╔╝\033[0m╚██╗ ██╔╝   \033[1;35m██║
\033[1;36m██╔═══╝  \033[0m╚████╔╝    \033[1;35m██║
\033[1;36m██║       \033[0m╚██╔╝     \033[1;35m██║
\033[1;36m╚═╝        \033[0m╚═╝      \033[1;35m╚═╝\n
\033[1;94m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    \033[1;95m╭─⋞──────────────────────────────────╮
       \033[1;31m[\033[1;32m√\033[1;31m]\033[0;97m => \033[1;36mMy Name's: \033[1;37mPhạm Văn Trọng \033[1;32m✓
       \033[1;31m[\033[1;32m√\033[1;31m]\033[0;97m => \033[1;36mDonate:    \033[1;37m0392791170\033[1;32m     ✓
       \033[1;31m[\033[1;32m√\033[1;31m]\033[0;97m => \033[1;36mYoutube:   \033[1;37mP V T 范文通 \033[1;32m  ✓  
    \033[1;95m╰──────────────────────────────────⋟─╯ 
\033[1;96m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
@system("clear");
echo"$banner\n";

for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Tool Lọc Mail Cổ\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Donate Lấy Động Lực Làm Tool\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$red." Ví MoMo : ".$bluelight."0392791170\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Check Việt Hay Via ? ( Gõ 'vn' / 'via' / 'cahai') : ";
$viav=trim(fgets(STDIN));
$viavn=[];
if ($viav=='cahai'){
	array_push($viavn, 'via', 'vn');
	}else{
	array_push($viavn, $viav);
	}
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Kí Tự (Để Trống Nếu Không Muốn Thêm) (Gõ 'random' nếu muốn random kí tự) : ";
$kitu=trim(fgets(STDIN));

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Check Mail Yahoo Không ? (y/n) : ";
$yahoo=trim(fgets(STDIN));

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Check HotMail Không ? (y/n) : ";
$hotmail=trim(fgets(STDIN));

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Check Rediffmail Không ?(y/n) : ";
$rediff=trim(fgets(STDIN));

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Check Mail AOL Không (y/n) : ";
$aol=trim(fgets(STDIN));

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Check Mail Azet Không (y/n) : ";
$azet=trim(fgets(STDIN));

echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Random List Mail Rồi Check Live Die Không ? (y/n) : ";
$randomopt=trim(fgets(STDIN));
if ($randomopt=='y'){
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Sau Khi Check Live Die Thì Check Vaild Facebook Không ? (y/n) : ";
$facebookopt=trim(fgets(STDIN));
	}else{
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Xuất Bao Nhiêu Email / 1 Domain (Dưới 5000) (Bạn Có Thể Chạy Lại Để Lấy Thêm)  : ";
$slrand=trim(fgets(STDIN));
if ($slrand > 5000){
exit($res."~ ".$red."Dưới 5000 Mail\n");
}
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Xuất Email Đã Random Ra File Nào : ";
$filexuatrand=trim(fgets(STDIN));
		}
if ($facebookopt=='y'){
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Xuất Email Facebook Ra File Nào : ";
$filexuatfb=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Xuất Bao Nhiêu Email Facebook : ";
$slfb=trim(fgets(STDIN));
}else{
if ($randomopt=='y'){
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Xuất Email DIE Ra File Nào : ";
$filexuatdie=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Bạn Muốn Xuất Bao Nhiêu Email DIE : ";
$sldie=trim(fgets(STDIN));
}
}
$domai=[];
if ($yahoo=='y'){
	array_push($domai, 'yahoo.com');
	}
	if ($hotmail=='y'){
	array_push($domai, 'hotmail.com');
	}
	if ($rediff=='y'){
	array_push($domai, 'rediffmail.com');
	}
	if ($aol=='y'){
	array_push($domai, 'aol.com');
	}
	if ($azet=='y'){
	array_push($domai, 'azet.sk');
	}
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
$idie=0;
$ifb=0;
while (true){
	$listmail=[];
	if ($randomopt=='y'){
		foreach ($viavn as $viavni){
	foreach ($domai as $domain){
$url="https://shopmailvip.xyz/api/genmail.php";
$data="text=&domain=".$domain."&total=5000&kitu=".$kitu."&loai=".$viavni;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$list=curl_exec($ch);
curl_close($ch);
$listmai=explode(PHP_EOL, $list);
foreach ($listmai as $mal){
	array_push($listmail, $mal);
	}
	}
	}
	}else{
		foreach ($domai as $domain){
	
$url="https://shopmailvip.xyz/api/genmail.php";
$data="text=&domain=".$domain."&total=".$slrand."&kitu=".$kitu."&loai=".$viavni;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$list=curl_exec($ch);
curl_close($ch);
$k = fopen($filexuatrand,"a+");
fwrite($k, $list);
fclose($k);
echo $res."~ ".$green."Thành Công : \n$list\n=>> $filexuatrand\n";
	}
	}
	
	if ($randomopt=='n'){
exit();
}
	
echo $res."~ ".$green."Hệ Thống Đã Lấy Thành Công Danh Sách ".count($listmail)." Mail !\n";


foreach ($listmail as $email){
	$mail=strtolower($email);
	echo $res."~ ".$green."Checking $mail                                                        \r";
	$loai=explode('@', $mail)[1];
	if ($loai=='yahoo.com'){
$url="https://tooldinao.com/API/check-yahoo";
$data="email=".$mail;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$stas=json_decode(curl_exec($ch), true);
curl_close($ch);
}
if ($loai=='hotmail.com'){
	$url="https://tooldinao.com/API/check-hotmail";
$data="email=".$mail;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$stas=json_decode(curl_exec($ch), true);
curl_close($ch);
	}
	if ($loai=='rediffmail.com'){
		$url="https://tooldinao.com/API/check-rediffmail";
$data="email=".$mail;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$stas=json_decode(curl_exec($ch), true);
curl_close($ch);
		}
		if ($loai=='aol.com'){
			$url="https://tooldinao.com/API/check-aol";
$data="email=".$mail;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$stas=json_decode(curl_exec($ch), true);
curl_close($ch);
			}

if ($loai=='azet.sk'){
		$url="https://tooldinao.com/API/check-azet";
$data="email=".$mail;
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$stas=json_decode(curl_exec($ch), true);
curl_close($ch);
		}

if ($stas["msg"] == 'Yahoo chưa đăng kí' or $stas["msg"] == 'Hotmail chưa đăng kí' or $stas["msg"] == 'Rediffmail chưa đăng kí' or $stas["msg"] == 'Aol chưa đăng kí' or $stas["msg"] == 'Azet chưa đăng ký'){
if ($facebookopt=='n'){
if ($idie==$sldie){
	exit();
	}
echo $res."~ ".$green."Thành Công Email Die : $mail vào File ".$filexuatdie."\n";
$k = fopen($filexuatdie,"a+");
fwrite($k, $mail."\n");
fclose($k);
$idie++;
}else{
echo $res."~ ".$green."Checking Vaild Facebook $mail (EMAIL DIE)                                       \r";

$url="https://mbasic.facebook.com/login/identify/?ctx=recover&search_attempts=1&ars=m_account_switcher&alternate_search=1&show_friend_search_filtered_list=0&birth_month_search=0&city_search=0";
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, 'datr=V-AvXxv-6KobUTnJxPuzNtWP;sb=WuAvX_HDhty10v1L7Wu1cvkL;_fbp=fb.1.1598183409937.1088567839;dpr=2.75;locale=en_US;wd=980x1735;fr=0bI4rcxmZXgHCIW6Y.AWVXBd9GhB22YFp7GFXSQy9lqTg.BffxC5.Iy.GAt.0.0.BgLLeT.');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$source = curl_exec($ch);
	curl_close($ch);
$ls=explode('name="lsd" value="', $source);
$lsd=explode('"', $ls[1])[0];
$jazo=explode('name="jazoest" value="', $source);
$jazoest=explode('"', $jazo[1])[0];

$data="lsd=".$lsd."&jazoest=".$jazoest."&email=".$mail."&did_submit=Search";

$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_COOKIE, 'datr=V-AvXxv-6KobUTnJxPuzNtWP;sb=WuAvX_HDhty10v1L7Wu1cvkL;_fbp=fb.1.1598183409937.1088567839;dpr=2.75;locale=en_US;wd=980x1735;fr=0bI4rcxmZXgHCIW6Y.AWVXBd9GhB22YFp7GFXSQy9lqTg.BffxC5.Iy.GAt.0.0.BgLLeT.');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$source = curl_exec($ch);
	curl_close($ch);
	if (strpos($source, 'login_identify_search_error_msg') !== false) {}else{
	if ($ifb==$slfb){
	exit();
	}
	$k = fopen($filexuatfb,"a+");
fwrite($k, $mail."\n");
fclose($k);
	echo $res."~ ".$green." Đã Lưu Email Facebook : $mail Vào File mailfb.txt\n";
	$ifb++;
}
}
}
}
}
  
  function clear_now(){ DIRECTORY_SEPARATOR === '\\' ? popen('cls', 'w') : exec('clear'); }