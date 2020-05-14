<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'F0ddBl8kIOPBKUtPJowB8Dz/9j9QqIW1TNCblhpya4Zckm0ugRy5bHcFW+TmCHFN2eF9yIJcuYdJ4nhyVqi2UQP3MrfAP4pR0tq2724iYdlv3a7muLhjcjTkZ3eA4Id10pV6twA9+ymwkE//g5Y3uwdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '87ce2a52c00aa44b2b66392bd87c556c';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='Hi')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Halo'
									)
							)
						);
				
	}

}
if($message['type']=='text')
{
	if($pesan_datang=='menu')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' => 
  array (
    'type' => 'carousel',
    'actions' => 
    array (
    ),
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://fmedia.000webhostapp.com/img/menumultimedia.png',
        'title' => 'Multimedia',
        'text' => 'Menu Multimedia',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Convert Video',
            'text' => 'Ketik /convert [URL Video Youtube]',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Cari Anime',
            'text' => 'Ketik /anime [Judul Anime]',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Cari Musik',
            'text' => 'Ketik /musik [Judul Lagu]',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://fmedia.000webhostapp.com/img/menuutilitas.png',
        'title' => 'Utilitas 1',
        'text' => 'Menu Utilitas',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Cari Lirik',
            'text' => 'Ketik /lirik [Judul Lagu]',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Cari Lokasi',
            'text' => 'Ketik /lokasi [Nama Kota]',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Cek Profile',
            'text' => '/cekprofile',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      2 => 
      array (
        'thumbnailImageUrl' => 'https://fmedia.000webhostapp.com/img/menuutilitas.png',
        'title' => 'Utilitas 2',
        'text' => 'Menu Utilitas',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Translate',
            'text' => 'Ketik /translate',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Cari Quotes',
            'text' => 'Ketik /quotes',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Cek Tanggal Lahir',
            'text' => 'Ketik /cek [tanggal-bulan-tahun] Contoh: /cek 10-05-1991',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      3 => 
      array (
        'thumbnailImageUrl' => 'https://fmedia.000webhostapp.com/img/menuscience.png',
        'title' => 'Science',
        'text' => 'Menu Science',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Waktu',
            'text' => 'Ketik /waktu [Nama Kota]',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Ramalan Cuaca',
            'text' => 'Ketik /cuaca [Nama Kota]',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Kalender',
            'text' => 'Ketik /kalender',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      4 => 
      array (
        'thumbnailImageUrl' => 'https://fmedia.000webhostapp.com/img/menuhiburan.png',
        'title' => 'Hiburan',
        'text' => 'Kerang Ajaib',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Apakah?',
            'text' => 'ketik Apakah [Pertanyaan] Contoh: Apakah saya jomblo?',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Bisakah?',
            'text' => 'ketik Bisakah [Pertanyaan] Contoh: Bisakah saya punya pacar?',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Cek Dosa',
            'text' => 'ketik Dosanya [Nama Orang] Contoh: Dosanya Adit',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      5 => 
      array (
        'thumbnailImageUrl' => 'https://fmedia.000webhostapp.com/img/musik.png',
        'title' => 'Musik',
        'text' => 'Menu Musik',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Dapatkan Lirik',
            'text' => 'Ketik /lirik [Judul Lagu]',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Download Lagu',
            'text' => 'Ketik /download [URL Video Youtube]',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Top Charts',
            'text' => 'Ketik /topcharts [Nama Lagu]',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      6 => 
      array (
        'thumbnailImageUrl' => 'https://www.newagesmb.com/images/2020/06/Mobile-App-Developers-Maryland.jpg',
        'title' => 'Developer',
        'text' => 'Developer Info',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Developer',
            'text' => 'Developer : Maxi Aditya',
            'data' => 'action=add&itemid=111',
          ),
          1 => 
          array (
            'type' => 'postback',
            'label' => 'Admin',
            'text' => 'Admin : Maxi Aditya',
            'data' => 'action=add&itemid=111',
          ),
          2 => 
          array (
            'type' => 'postback',
            'label' => 'Support',
            'text' => 'Support : Godfather',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      7 => 
      array (
        'thumbnailImageUrl' => 'https://republikseo.net/wp-content/uploads/2020/03/Sosial-Media.jpeg',
        'title' => 'Sosial Media',
        'text' => 'Sosial Media Developer',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'Youtube',
            'uri' => 'https://youtube.com/maxiaditya',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'Instagram',
            'uri' => 'https://instagram.com/maxi.aditya',
          ),
          2 => 
          array (
            'type' => 'uri',
            'label' => 'Whatsapp',
            'uri' => 'https://wa.me/6287873328012?text=Halo, Maxi Aditya senang berkenalan dengan anda',
          ),
        ),
      ),
    ),
  ),
)
						);
				
	}

}
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
