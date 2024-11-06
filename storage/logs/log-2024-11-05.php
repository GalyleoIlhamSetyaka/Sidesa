<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-05 07:37:26 --> 404 Page Not Found: 
ERROR - 2024-11-05 07:37:35 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5013 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 07:42:14 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5008 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 07:42:31 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5003 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 07:44:28 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-05 07:45:38 --> cURL error 6: Could not resolve host: idm.kemendesa.go.id (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021
ERROR - 2024-11-05 07:45:46 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-05 01:51:01 --> 404 Page Not Found: 
ERROR - 2024-11-05 07:59:33 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:49 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:49 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:49 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:49 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:49 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:50 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:50 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:50 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:50 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:51 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:51 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:51 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:51 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:51 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:52 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:52 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:52 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.1.1. Hasil Usaha Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 07:59:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4013 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 08:00:41 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:44 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:44 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:44 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:47 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:47 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:47 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:48 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:52 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:55 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:56 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:56 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:56 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:00:56 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:09 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.1. Hasil Usaha Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:14 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:14 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:14 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:15 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:15 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:15 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:15 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:16 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:16 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:16 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:16 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:16 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:17 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:17 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:17 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:17 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:17 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:01:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: UPDATE `keuangan_manual_rinci` SET `Tahun` = '2024', `Kd_Akun` = '4.PENDAPATAN', `Kd_Keg` = '', `Kd_Rincian` = '4.1.2. Hasil Aset Desa', `Nilai_Anggaran` = '200.000.000', `Nilai_Realisasi` = '180.000.000'
WHERE   (
`config_id` = 1
 )
AND `id` = '64'
ERROR - 2024-11-05 08:47:27 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5010 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 08:48:29 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5013 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 08:49:04 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5007 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 08:49:33 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5009 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 08:49:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5012 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 08:50:11 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5002 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:01:45 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5003 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:12:30 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4011 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:12:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4006 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:14:20 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4016 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:15:02 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4005 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:15:17 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4012 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:15:33 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4012 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:35:05 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5011 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:35:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5005 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:36:26 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:36:42 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5015 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 09:39:25 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:43:44 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 03:48:13 --> 404 Page Not Found: Laporan_apbdes/delete_all
ERROR - 2024-11-05 03:48:23 --> 404 Page Not Found: Laporan_apbdes/delete_all
ERROR - 2024-11-05 09:56:03 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:05 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:05 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:05 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:06 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:06 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:06 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:06 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:06 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:07 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:07 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:07 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:08 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:08 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:09 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:09 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:09 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:09 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:10 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:11 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.4. Hibah dan Sumbangan dari Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:12 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:13 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:14 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:15 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:16 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:16 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:18 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:18 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:19 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:19 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:19 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:19 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:20 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:20 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:21 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:21 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:21 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.3. Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:22 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:23 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:25 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:26 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:27 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:28 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:29 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:31 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:32 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:33 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:34 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:36 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:37 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:38 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:39 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:41 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:41 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:41 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:42 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:42 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:43 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:43 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:56:44 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:45 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:46 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:48 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:49 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:51 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:52 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:54 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:55 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:56 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:56:59 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:57:00 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:57:02 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:58:04 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:58:04 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:58:04 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:58:05 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:58:05 --> Query error: Data truncated for column 'Nilai_Anggaran' at row 1 - Invalid query: INSERT INTO `keuangan_manual_rinci` (`Tahun`, `Kd_Akun`, `Kd_Keg`, `Kd_Rincian`, `Nilai_Anggaran`, `Nilai_Realisasi`, `config_id`) VALUES ('2024', '4.PENDAPATAN', '', '4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '200.000.000', '180.000.000', 1)
ERROR - 2024-11-05 09:58:08 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:58:10 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 09:58:13 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 10:37:20 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-05 10:37:30 --> cURL error 6: Could not resolve host: idm.kemendesa.go.id (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021
ERROR - 2024-11-05 10:59:58 --> Query error: Unknown column 'Kd_SubRinci' in 'field list' - Invalid query: INSERT INTO `keuangan_ta_jurnal_umum_rinci` (`Akun`, `DK`, `Debet`, `Kd_Desa`, `Kd_Keg`, `Kd_Rincian`, `Kd_SubRinci`, `Kredit`, `NoBukti`, `NoID`, `RincianSD`, `Sumberdana`, `Tahun`, `config_id`, `id_keuangan_master`) VALUES ('','K','0.0000000000000000e+000','24.2005.','24.2005.00.00.00.','6.1.1.01.','00','5.0000000000000000e+005','0001/SP/24.2005/2024','1','6.1.1.01.PBH','PBH','2024',1,2), ('','K','0.0000000000000000e+000','24.2005.','24.2005.00.00.00.','6.1.1.01.','00','3.0270000000000000e+007','0001/SP/24.2005/2024','2','6.1.1.01.PAD','PAD','2024',1,2), ('','K','0.0000000000000000e+000','24.2005.','24.2005.00.00.00.','6.1.1.01.','00','5.6159222000000000e+007','0001/SP/24.2005/2024','3','6.1.1.01.DLL','DLL','2024',1,2), ('','K','0.0000000000000000e+000','24.2005.','24.2005.00.00.00.','6.1.1.01.','00','2.4882750000000000e+007','0001/SP/24.2005/2024','4','6.1.1.01.DDS','DDS','2024',1,2), ('','K','0.0000000000000000e+000','24.2005.','24.2005.00.00.00.','6.1.1.01.','00','1.5520650000000000e+007','0001/SP/24.2005/2024','5','6.1.1.01.ADD','ADD','2024',1,2), ('','D','1.2733262200000000e+008','24.2005.','24.2005.00.00.00.','3.1.2.01.','00','0.0000000000000000e+000','0001/SP/24.2005/2024','6','3.1.2.01.DLL','DLL','2024',1,2)
ERROR - 2024-11-05 11:00:00 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2024-11-05 15:21:26 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 15:27:49 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 15:49:27 --> GuzzleHttp\Exception\ConnectException: cURL error 35: error:14094410:SSL routines:ssl3_read_bytes:sslv3 alert handshake failure (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\sidesa\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
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
ERROR - 2024-11-05 15:56:07 --> cURL error 6: Could not resolve host: idm.kemendesa.go.id (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021
ERROR - 2024-11-05 15:58:54 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-05 15:59:05 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-11-05 16:00:44 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3306071010/2021` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

