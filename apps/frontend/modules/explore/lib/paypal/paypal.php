<?php

class Paypal {
   /**
    * Последние сообщения об ошибках
    * @var array
    */
   protected $_errors = array();

   /**
    * Данные API
    * Обратите внимание на то, что для песочницы нужно использовать соответствующие данные
    * @var array
    */
   protected $_credentials = array(
//      'USER' => 'imkogroup-facilitator_api1.gmail.com',
//      'PWD' => '1394794577',
//      'SIGNATURE' => 'AQU0e5vuZCvSg-XJploSa.sGUDlpAibJwc61WoONFw3AJd3axLhF0FSO',
      'USER' => 'cameron-facilitator_api1.sodeclothing.org',
      'PWD' => '1394662201',
      'SIGNATURE' => 'AIkHrqhfqXOnKz-JIr9z2KCn9qs4AFGIyAWuhfRbjWW4x7JNefVxLvq0',
   );
   //protected $_credentials1 = array(
   //   'USER' => 'altainmet-facilitator_api1.mail.ru',
   //   'PWD' => '1395147016',
   //   'SIGNATURE' => 'An5ns1Kso7MWUdW4ErQKJJJ4qi4-AqmwxhEzw25fxRaJlRZq4GNw6IX-',
   //);

   /**
    * Указываем, куда будет отправляться запрос
    * Реальные условия - https://api-3t.paypal.com/nvp
    * Песочница - https://api-3t.sandbox.paypal.com/nvp
    * @var string
    */
   protected $_endPoint = 'https://api-3t.sandbox.paypal.com/nvp';

   /**
    * Версия API
    * @var string
    */
   protected $_version = '111.0';

   /**
    * Сформировываем запрос
    *
    * @param string $method Данные о вызываемом методе перевода
    * @param array $params Дополнительные параметры
    * @return array / boolean Response array / boolean false on failure
    */
   public function request($method, $params = array()) {
      $this->_errors = array();
      if( empty($method) ) { // Проверяем, указан ли способ платежа
         $this->_errors = array('API method is missing');
         return false;
      }

      // Параметры нашего запроса
      $requestParams = array(
         'METHOD' => $method,
         'VERSION' => $this -> _version
      ) + $this->_credentials;

      // Сформировываем данные для NVP
      $request = http_build_query($requestParams + $params);

      // Настраиваем cURL
      $curlOptions = array (
         CURLOPT_URL => $this -> _endPoint,
         CURLOPT_VERBOSE => 1,
         CURLOPT_SSL_VERIFYPEER => true,
         CURLOPT_SSL_VERIFYHOST => 2,
         CURLOPT_CAINFO => dirname(__FILE__) . '/cacert.pem', // Файл сертификата
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_POST => 1,
         CURLOPT_POSTFIELDS => $request
      );

      $ch = curl_init();
      curl_setopt_array($ch,$curlOptions);

      // Отправляем наш запрос, $response будет содержать ответ от API
      $response = curl_exec($ch);

      // Проверяем, нету ли ошибок в инициализации cURL
      if (curl_errno($ch)) {
         $this -> _errors = curl_error($ch);
         curl_close($ch);
         return false;
      } else  {
         curl_close($ch);
         $responseArray = array();
         parse_str($response,$responseArray); // Разбиваем данные, полученные от NVP в массив
         return $responseArray;
      }
   }
}
