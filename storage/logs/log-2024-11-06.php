<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-06 07:45:48 --> Severity: error --> Exception: FilesystemIterator::__construct(C:\xampp\htdocs\sidesa\\storage\framework/cache/data\d2\25): The system cannot find the file specifi (code: 2) C:\xampp\htdocs\sidesa\vendor\illuminate\filesystem\Filesystem.php 687
ERROR - 2024-11-06 08:07:14 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5006 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 08:07:28 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5006 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 08:35:22 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 08:38:31 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 08:39:00 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 08:45:22 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-06 08:45:33 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5014 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 02:51:11 --> 404 Page Not Found: 
ERROR - 2024-11-06 02:56:04 --> 404 Page Not Found: 
ERROR - 2024-11-06 08:58:45 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 02:58:48 --> 404 Page Not Found: 
ERROR - 2024-11-06 08:58:52 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:00:37 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:00:41 --> 404 Page Not Found: 
ERROR - 2024-11-06 03:01:15 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:01:18 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:01:19 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:01:23 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:01:51 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:01:53 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:01:56 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:03:57 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:04:05 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:04:31 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:04:34 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:04:41 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:04:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:04:58 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:05:12 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:07:02 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:07:08 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:07:11 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:07:57 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:08:01 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:08:07 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:09:01 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:09:05 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:09:06 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:10:10 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:10:19 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:10:28 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:13:06 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:13:11 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:13:51 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:14:39 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:17:33 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:17:37 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:17:58 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:18:04 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:19:09 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:19:13 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:19:52 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\Main.php(56): Track_model->track_desa('main')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:20:49 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:21:07 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:21:14 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\Main.php(56): Track_model->track_desa('main')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:22:45 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:22:52 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:22:53 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:23:09 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:23:14 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:24:31 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-06 09:25:28 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-06 09:25:34 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:26:24 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
#17 C:\xampp\htdocs\sidesa\donjo-app\controllers\Main.php(56): Track_model->track_desa('main')
#18 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#19 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#20 {main}
ERROR - 2024-11-06 09:28:40 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 09:31:23 --> sasaran: 1
ERROR - 2024-11-06 09:31:23 --> sasaran: 1
ERROR - 2024-11-06 09:31:23 --> sasaran: 1
ERROR - 2024-11-06 09:31:54 --> sasaran: 1
ERROR - 2024-11-06 09:31:54 --> sasaran: 1
ERROR - 2024-11-06 09:31:54 --> sasaran: 1
ERROR - 2024-11-06 09:35:57 --> sasaran: 3
ERROR - 2024-11-06 09:35:57 --> sasaran: 3
ERROR - 2024-11-06 09:35:57 --> sasaran: 3
ERROR - 2024-11-06 09:36:04 --> sasaran: 3
ERROR - 2024-11-06 09:36:04 --> Query error: Unknown column 'a.dusun' in 'where clause' - Invalid query: SELECT `p`.`nama` as `program`, `pp`.`kartu_nama` as `peserta`, `pp`.`kartu_alamat` AS `alamat`
FROM `program` `p`
LEFT JOIN `program_peserta` `pp` ON `p`.`id` = `pp`.`program_id`
LEFT JOIN `tweb_rtm` `s` ON `s`.`no_kk` = `pp`.`peserta`
WHERE   (
`a`.`dusun` = 'glagah'
 )
AND   (
`p`.`config_id` = 1
OR `p`.`config_id` IS NULL
 )
AND `p`.`id` = '2'
ORDER BY `peserta` ASC
 LIMIT 10
ERROR - 2024-11-06 09:36:05 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 09:36:25 --> sasaran: 3
ERROR - 2024-11-06 09:36:25 --> sasaran: 3
ERROR - 2024-11-06 09:36:25 --> sasaran: 3
ERROR - 2024-11-06 09:38:46 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:38:59 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:39:04 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:39:08 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:41:01 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:41:04 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:41:20 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:41:33 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:41:36 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:43:10 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:43:16 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:45:19 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:45:48 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:46:01 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:46:21 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:46:30 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:48:39 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:48:43 --> 404 Page Not Found: 
ERROR - 2024-11-06 03:48:55 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:48:59 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:49:05 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:49:10 --> 404 Page Not Found: 
ERROR - 2024-11-06 03:49:20 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:49:26 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:50:14 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:50:41 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5013 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 09:50:53 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5008 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 09:51:03 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5003 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 09:51:15 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5014 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-06 09:51:55 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:52:10 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\Main.php(56): Track_model->track_desa('main')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:52:27 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:53:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:55:24 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 03:55:29 --> 404 Page Not Found: 
ERROR - 2024-11-06 09:55:43 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:55:57 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:57:01 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:57:06 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:57:27 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:57:34 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:57:46 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
ERROR - 2024-11-06 09:57:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 C:\xampp\htdocs\sidesa\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#12 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#13 C:\xampp\htdocs\sidesa\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#14 C:\xampp\htdocs\sidesa\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#15 C:\xampp\htdocs\sidesa\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#16 C:\xampp\htdocs\sidesa\index.php(284): require_once('C:\\xampp\\htdocs...')
#17 {main}
