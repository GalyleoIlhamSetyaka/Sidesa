<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-07 05:19:22 --> 404 Page Not Found: 
ERROR - 2024-11-07 11:22:54 --> cURL error 6: Could not resolve host: idm.kemendesa.go.id (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021
ERROR - 2024-11-07 14:26:24 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5014 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#20 {main}
ERROR - 2024-11-07 14:45:25 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4001 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#20 {main}
ERROR - 2024-11-07 16:01:42 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-07 16:08:09 --> Severity: error --> Exception: syntax error, unexpected token "endif" C:\xampp\htdocs\sidesa\vendor\themes\esensi\layouts\beranda.tpl.php 118
ERROR - 2024-11-07 20:32:57 --> Severity: error --> Exception: FilesystemIterator::__construct(C:\xampp\htdocs\sidesa\\storage\framework/cache/data\66\77): The system cannot find the file specifi (code: 2) C:\xampp\htdocs\sidesa\vendor\illuminate\filesystem\Filesystem.php 687
