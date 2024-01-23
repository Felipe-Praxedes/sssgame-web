<?php

function multiexplode ($delimiters,$string) {
  $ready = str_replace($delimiters, $delimiters[0], $string);
  $launch = explode($delimiters[0], $ready);
  return $launch;
}

function getStr($string,$inicio,$fim){
  $string = explode($inicio, $string);
  $string = explode($fim, $string[1]);
  return $string[0];
}

function echoAndFlush($message) {
    ini_set('output_buffering', 'off');
    ini_set('zlib.output_compression', false);
    
    // verifica se o ob_start() está ativado e limpa
    while (ob_get_level() > 0) {
        ob_end_flush();
    }
    
    echo $message;
    
    // Certifica-se que o PHP faz o flush do buffer de saída internamente
    ob_flush();
    flush();
}

function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $randomString;
}

$contagemaccaccacc = 0;
$tentativassss = 10000;

while($contagemaccaccacc < $tentativassss) {

set_time_limit(0);
error_reporting(1);

if (file_exists(getcwd()."/cookie.txt")) {
    unlink(getcwd()."/cookie.txt");
}

if (isset($_GET['lista'])) {
  $extract = $_GET['lista'];
  $conta = multiexplode(array(",","»","|",":"," ","/",";"), $extract);
  $convite = $conta[0];
}

//$servico = "19"; //qualquer outro
$servico = "15"; //microsoft

$userpass = generateRandomString(8);  // Define o comprimento da senha como 8 caracteres
$random = random_int(1000, 9999);
$userpass = "$userpass$random";

$contagemaccaccacc++;  // Incrementa o contador
echoAndFlush("Tentativa de criar conta $contagemaccaccacc de $tentativassss<br>");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://meuip.com.br/');
curl_setopt($ch, CURLOPT_PROXY, 'pr.lunaproxy.com:12233');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user-lu7071320:bVLSm2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: meuip.com.br',
'Connection: keep-alive',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$meuip = curl_exec($ch);
$meuip = getStr($meuip, 'Meu ip é ', '<');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=get_number&country_id=BR&operator=Total_BR&service=opt'.$servico.'&id=1&redirectphone=0');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $final = curl_exec($ch);
        $celularsimsms = getStr($final, 'ok~', '~');
        //$celularsimsms = "11961360653";
        $idsms = getStr($final, ''.$celularsimsms.'~', '~');

        if (strpos($final, '5~~1')) {
        echoAndFlush("Conta bloqueada de pegar SMS, aguarde 1 minuto.");
        sleep(90);
        }

        if (strpos($final, 'error')) {
        echoAndFlush("Ocorreu algum erro ao gerar seu número na plataforma, provalmente seu token expirou.<br>");
        }

$number = 1689788237022;
$min = 10 ** (strlen($number) - 1);
$max = (10 ** strlen($number)) - 1;
$timestamp = rand($min, $max);

$url = "https://www.sssgame.com/api/member/sendCode";
$data = json_encode(array(
    "email" => "",
    "areaCode" => "+55",
    "mobile" => "$celularsimsms",
    "item" => 1,
    "timestamp" => $timestamp // aqui você pode usar a sua função de geração de número único
));

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PROXY, 'pr.lunaproxy.com:12233');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user-lu7071320:bVLSm2');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array(
    'Connection: keep-alive',
    'language: pt',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.82',
    'Content-Type: application/json;charset=UTF-8',
    'Accept: application/json, text/plain, */*',
    'device: Pc',
    'sign: ',
    // Adicione seus cookies aqui
    'Cookie: ', 
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$successMessage = "Código de verificação enviado com sucesso";
$maxAttempts = 3;
$attempts = 0;

for ($attempts = 1; $attempts <= $maxAttempts; $attempts++) {
    $response = curl_exec($ch);
    $msgsms = getStr($response, 'msg" : "', '"');
    $tokensms = getStr($response, 'data" : "', '"');

    if (strpos($response, 'O número de telefone já existe')) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=ban&id='.$idsms.'');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);
        $ban = curl_exec($ch); 

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=ban&id='.$idsms.'');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);
        $ban = curl_exec($ch); 

        echoAndFlush("Celular $celularsimsms já utilizado na plataforma. <br>");
        echoAndFlush("Conta não criada. <br>");


        //header('Location: http://localhost/solvecap/api.php?lista='.$convite.'');
    
    }

    if (strpos($response, $successMessage) !== false) {
        // A mensagem de sucesso foi encontrada, então deixe o script continuar
        echoAndFlush("SMS do celular $celularsimsms enviado com sucesso, script em execução.<br>Aguardando 60 segundos para verificar se o SMS chegou.<br>");
        
        sleep(60);
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=get_sms&service=opt'.$servico.'&id='.$idsms.'&redirectphone=0');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $end = curl_exec($ch);
        
        $codigosms = getStr($end, 'Your verification code is ', ' ');
    //echo "TESTE SMS: :$codigosms:";exit;

        if (!preg_match("/^[0-9]{6}$/", $codigosms)) {
        echoAndFlush("Tentando obter o código OTP enviado por SMS no celular $celularsimsms.<BR>");
        sleep(1);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=get_sms&service=opt'.$servico.'&id='.$idsms.'&redirectphone=0');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $end = curl_exec($ch);
        $codigosms = getStr($end, ''.$celularsimsms.'~', '~');

    }

        if (!preg_match("/^[0-9]{6}$/", $codigosms)) {
        echoAndFlush("Código OTP enviado por SMS no celular $celularsimsms não foi encontrado.<BR>");
        echoAndFlush("O número foi deletado da API.<BR>");

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=denial&id='.$idsms.'');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $delete = curl_exec($ch);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=denial&id='.$idsms.'');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $delete = curl_exec($ch);

        echoAndFlush("O código não chegou na caixa de entrada. <br>");
        //header('Location: http://localhost/solvecap/api.php?lista='.$convite.'');
    
}
        if (preg_match("/^[0-9]{6}$/", $codigosms)) {
        echoAndFlush("SMS do celular $celularsimsms encontrado, continuando processo...<BR>");    

$maxTentativas = 3;
$tentativa = 0;

do {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.sssgame.com/api/member/getCaptcha?type=login&timestamp=');
curl_setopt($ch, CURLOPT_PROXY, 'pr.lunaproxy.com:12233');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user-lu7071320:bVLSm2');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: www.sssgame.com',
        'Connection: keep-alive',
        'language: pt',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Content-Type: application/json;charset=utf-8',
        'Accept: application/json, text/plain, */*',
        'device: Pc',
        'sign: ',));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $r1 = curl_exec($ch);

    $byimagem = getStr($r1, '"data:image/png;base64,', '",');
    $codecap = getStr($r1, 'key" : "', '"');

    if (empty($byimagem) || empty($codecap)) {
        echoAndFlush("Não foi possível obter o captcha, realizando nova tentativa " . ($tentativa+1) . " de 3<br>");
    }

    $tentativa++;
} while ($tentativa < $maxTentativas && (empty($byimagem) || empty($codecap)));

if (empty($byimagem) || empty($codecap)) {
    echoAndFlush("Falha ao obter captcha.");
    //echo "Falha ao obter captcha (R1)";
    
}

// Se o código chegou até aqui, $byimagem e $codecap não estão vazios
// Continue com o restante do seu código

$data = base64_decode($byimagem);

// Integração com 2Captcha começa aqui
$captchaImageData = base64_encode($data);

// O ID da sua chave da API 2Captcha
$apiKey = '0648a7a0fb032e192cbed52d5a7949b8';

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://2captcha.com/in.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'key' => $apiKey,
    'method' => 'base64',
    'body' => $captchaImageData
)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$serverOutput = curl_exec($ch);

list(, $captchaId) = explode('|', $serverOutput);

$captchaAnswer = null;
for ($i = 0; $i < 5; $i++) {
    sleep(5);  

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://2captcha.com/res.php?key=$apiKey&action=get&id=$captchaId");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $serverOutput = curl_exec($ch);
    curl_close ($ch);

    if (substr($serverOutput, 0, 3) == 'OK|') {
        $captchaAnswer = substr($serverOutput, 3);
        break;
    }
}

if ($captchaAnswer) {
$url = "https://www.sssgame.com/api/member/register";
$data = json_encode(array(
    "username" => "$userpass",
    "password" => "$userpass",
    "confirmPassword" => "$userpass",
    "realName" => "",
    "mobile" => "$celularsimsms",
    "spreaderId" => "$convite",
    "verifyCode" => "$captchaAnswer",
    "birthday" => "2023-07-19",
    "email" => "",
    "firstName" => "",
    "lastName" => "",
    "areaCode" => "55",
    "mobileCode" => "$codigosms",
    "emailCode" => "",
    "uuid" => "$tokensms",
    "verificationCode" => "$codecap",
    "identificationType" => "CPF",
    "identificationNumber" => "",
    "identificationTypeCode" => 4,
    "timestamp" => $timestamp
));

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PROXY, 'pr.lunaproxy.com:12233');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user-lu7071320:bVLSm2');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array(
    'Host: www.sssgame.com',
    'Connection: keep-alive',
    'Content-Length: ' . strlen($data),
    'sec-ch-ua: "Not.A/Brand";v="8", "Chromium";v="114", "Google Chrome";v="114"',
    'language: pt',
    'sec-ch-ua-mobile: ?0',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Accept: application/json, text/plain, */*',
    'device: Pc',
    'sign: c2294354d3494b319f73ca333d293a4a',
    'sec-ch-ua-platform: "Windows"',
    'Origin: https://www.sssgame.com',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://www.sssgame.com/',
    // Adicione seus cookies aqui
    'Cookie: ',
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$r2 = curl_exec($ch);
$msgfinal = getStr($r2, 'msg" : "', '"');

if (strpos($r2, 'registro bem sucedido')) {

$rtoken = getStr($r2, 'refresh_token" : "', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.sssgame.com/api/member/getUserInfo?timestamp=');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array(
    'Connection: keep-alive',
    'language: pt',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.82',
    'Content-Type: application/json;charset=UTF-8',
    'Accept: application/json, text/plain, */*',
    'device: Pc',
    'Authorization: Bearer '.$rtoken.'',
    'sign: ',
    // Adicione seus cookies aqui
    'Cookie: ', 
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$getmeuconvite = curl_exec($ch);
$meuconvite = getStr($getmeuconvite, 'uid" : ', ',');

    echoAndFlush("Seu código captcha é $captchaAnswer.<br>"); 
    echoAndFlush("Conta criada!<br>");
    echoAndFlush("Username: $userpass - Password: $userpass - CODE registrado: $convite - CODE para convidar: $meuconvite - $pixgg - IP: $meuip | Desenvolvido por Zohan (Whatsapp: 11951902593)");

$gg = "$userpass:$userpass = $convite / (All: CODE registrado: $convite - CODE para convidar: $meuconvite - $pixgg - IP: $meuip | Desenvolvido por Zohan (Whatsapp: 11951902593))\n";
$myfile = fopen("afilhadas_mae_$convite.txt", "a") or die("Unable to open file!");
$txt = $gg;
fwrite($myfile, $txt);
fclose($myfile);
break;
exit;
}
else {
    echoAndFlush("Conta $userpass não criada por motivos de $r2 $msgfinal - :(");
}

} else {
    echoAndFlush("??? - Conta $userpass não criada por motivos de $r2 $msgfinal - :(");
exit;

//echoAndFlush("Conta $userpass criada por motivos de $r2 $msgfinal - :/<br>");

}

        } 
        
    } else {
        // A mensagem de sucesso não foi encontrada, tentar novamente
        //echoAndFlush("Não foi possível enviar SMS, realizando nova tentativa $attempts de 3 $msgsms<br>");
        //header('http://localhost/solvecap/api.php?lista='.$convite.'');
        //echo "Não foi possível enviar SMS, realizando nova tentativa $attempts de 3.<br>";
    }
}

if ($attempts > $maxAttempts) {
    // Todas as tentativas falharam
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=denial&id='.$idsms.'');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $delete = curl_exec($ch);

                $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://simsms.org/reg-sms.api.php?type=denial&id='.$idsms.'');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: simsms.org',
        'Connection: keep-alive',
        'Accept: */*',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Cookie: _ym_uid=1691559386441556314; _ym_d=1691559386; _ym_isad=2; supportOnlineTalkID=zdwax6T1CN77MdlS0NPBIEMPZQrkuV99; dle_user_id=319796; dle_password=35b3d6ccaf895e8984e551efe1487751; dle_hash=ef24f71e0506b8bbcb5db9eb439a431f; dle_newpm=0; _ym_visorc=w'));

        curl_setopt($ch, CURLOPT_HEADER, 1);

        $delete = curl_exec($ch);


        echoAndFlush("Falha ao enviar o SMS - $celularsimsms $msgsms<br>");
        //header('Location: http://localhost/solvecap/api.php?lista='.$convite.'');
    
    //echo "Falha ao enviar o SMS<br>";
}

    echoAndFlush("Tentando novamente!<br><br>");
} //while termina aqui
?>
