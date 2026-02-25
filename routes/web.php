<?php
// ROUTER
use TheFramework\App\Router;

// MIDDLEWARE
use TheFramework\Middleware\WAFMiddleware;
use TheFramework\Middleware\CsrfMiddleware;

// CONTROLLER
use TheFramework\Http\Controllers\HomeController;
// UTILITIES

Router::add('GET', '/', HomeController::class, 'Beranda', [WAFMiddleware::class]);
Router::add('GET', '/tentang', HomeController::class, 'Tentang', [WAFMiddleware::class]);

Router::add('GET', '/list-mobil', HomeController::class, 'ListMobil', [WAFMiddleware::class]);
Router::add('GET', '/list-mobil/{slug_mobil}/{uid}', HomeController::class, 'DetailMobil', [WAFMiddleware::class]);
Router::add('POST', '/testimonial/submit', HomeController::class, 'submitTestimonial', [WAFMiddleware::class, CsrfMiddleware::class]);

Router::add('GET', '/galeri', HomeController::class, 'Galeri', [WAFMiddleware::class]);
Router::add('GET', '/galeri/page/{halaman}', HomeController::class, 'Galeri', [WAFMiddleware::class]);

Router::add('GET', '/kontak', HomeController::class, 'Kontak', [WAFMiddleware::class]);
Router::add('POST', '/kontak/message', HomeController::class, 'sendMessage', [WAFMiddleware::class, CsrfMiddleware::class]);

Router::add('POST', '/booking/now', HomeController::class, 'Booking', [WAFMiddleware::class, CsrfMiddleware::class]);

Router::add('GET', '/terms-and-condition', HomeController::class, 'TermsAndCondition', [WAFMiddleware::class]);
Router::add('GET', '/faq', HomeController::class, 'Faq', [WAFMiddleware::class]);
Router::add('GET', '/opsi-pembayaran', HomeController::class, 'OpsiPembayaran', [WAFMiddleware::class]);
Router::add('GET', '/tips-booking', HomeController::class, 'TipsBooking', [WAFMiddleware::class]);





























// Router::add('GET', '/users', HomeController::class, 'Users', [WAFMiddleware::class, LanguageMiddleware::class]);

// Router::group(
//     [
//         'prefix' => '/users',
//         'middleware' => [
//             CsrfMiddleware::class,
//             WAFMiddleware::class,
//             LanguageMiddleware::class
//         ]
//     ],
//     function () {
//         Router::add('POST', '/create', HomeController::class, 'CreateUser');
//         Router::add('POST', '/update/{uid}', HomeController::class, 'UpdateUser');
//         Router::add('POST', '/delete/{uid}', HomeController::class, 'DeleteUser');
//         Router::add('GET', '/information/{uid}', HomeController::class, 'InformationUser');
//     }
// );

// Router::group(
//     [
//         'prefix' => '/api',
//         'middleware' => [
//             ApiAuthMiddleware::class,
//             LanguageMiddleware::class
//         ]
//     ],
//     function () {
//         Router::add('GET', '/users', ApiHomeController::class, 'Users');
//         Router::add('GET', '/users/{uid}', ApiHomeController::class, 'InformationUser');
//         Router::add('POST', '/users/create', ApiHomeController::class, 'CreateUser');
//         Router::add('POST', '/users/update/{uid}', ApiHomeController::class, 'UpdateUser');
//         Router::add('POST', '/users/delete/{uid}', ApiHomeController::class, 'DeleteUser');
//     }
// );

// // --- 🛠️ ERROR PAGE PREVIEW (LOCAL ONLY) 🛠️ ---
// if (\TheFramework\App\Config::get('APP_ENV') === 'local') {
//     Router::group(['prefix' => '/test-error'], function () {
//         Router::add('GET', '/403', function () {
//             \TheFramework\Http\Controllers\Services\ErrorController::error403();
//         });
//         Router::add('GET', '/404', function () {
//             \TheFramework\Http\Controllers\Services\ErrorController::error404();
//         });
//         Router::add('GET', '/500', function () {
//             \TheFramework\Http\Controllers\Services\ErrorController::error500();
//         });
//         Router::add('GET', '/payment', function () {
//             \TheFramework\Http\Controllers\Services\ErrorController::payment();
//         });
//         Router::add('GET', '/maintenance', function () {
//             \TheFramework\Http\Controllers\Services\ErrorController::maintenance();
//         });
//         Router::add('GET', '/database', function () {
//             throw new \TheFramework\App\DatabaseException(
//                 "Koneksi gagal ke 'framework_test'",
//                 500,
//                 null,
//                 ['DB_HOST' => 'localhost', 'DB_PORT' => '3306'],
//                 ['DB_NAME' => 'Kemungkinan Typo di .env']
//             );
//         });
//         Router::add('GET', '/exception', function () {
//             throw new Exception("Ini adalah contoh Pengecualian Sistem (Exception).");
//         });
//         Router::add('GET', '/fatal', function () {
//             // Memicu ParseError (Fatal)
//             eval ('syntax error here');
//         });
//     });
// }
