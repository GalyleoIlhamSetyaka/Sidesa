<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-01 08:11:05 --> 404 Page Not Found: 
ERROR - 2024-11-01 08:11:08 --> 404 Page Not Found: 
ERROR - 2024-11-01 02:14:21 --> 404 Page Not Found: 
ERROR - 2024-11-01 02:14:23 --> 404 Page Not Found: 
ERROR - 2024-11-01 02:14:24 --> 404 Page Not Found: 
ERROR - 2024-11-01 08:14:51 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4005 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 09:07:31 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 09:08:18 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 09:08:20 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 09:09:13 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 09:09:34 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 09:10:05 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 10:54:52 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4005 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 13:24:58 --> Severity: error --> Exception: FilesystemIterator::__construct(C:\xampp\htdocs\sidesa\\storage\framework/cache/data\66\77): The system cannot find the file specifi (code: 2) C:\xampp\htdocs\sidesa\vendor\illuminate\filesystem\Filesystem.php 687
ERROR - 2024-11-01 13:25:06 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5007 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-01 13:50:41 --> Severity: error --> Exception: Call to a member function lokasi_latar_website() on null C:\xampp\htdocs\sidesa\donjo-app\models\Setting_model.php 170
ERROR - 2024-11-01 13:51:35 --> Severity: error --> Exception: Call to a member function lokasi_latar_website() on null C:\xampp\htdocs\sidesa\donjo-app\models\Setting_model.php 170
ERROR - 2024-11-01 13:55:52 --> Severity: error --> Exception: Call to a member function lokasi_latar_website() on null C:\xampp\htdocs\sidesa\donjo-app\models\Setting_model.php 170