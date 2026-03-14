<?php

namespace TheFramework\Http\Controllers\Services;

use TheFramework\App\Router;
use TheFramework\App\Config;
use TheFramework\App\Logging;
use TheFramework\Models\Car;
use Throwable;

class SitemapController
{
    /**
     * Generate Sitemap XML automatically based on registered routes.
     * v2.0 - More robust implementation with full error handling.
     * 
     * @return void
     */
    public function index()
    {
        // Start output buffering to catch any stray output or warnings
        ob_start();

        try {
            $routes = Router::getRouteDefinitions();

            // Dapatkan Base URL dari .env atau construct manual
            $appUrl = Config::get('APP_URL');
            if (empty($appUrl) || $appUrl === 'http://localhost') {
                $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
                $appUrl = $protocol . "://" . $_SERVER['HTTP_HOST'];
            }
            $baseUrl = rtrim($appUrl, '/');

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

            $uniquePaths = [];

            // --- Static Routes ---
            foreach ($routes as $route) {
                $path = $route['path'];

                if ($route['method'] !== 'GET' || str_starts_with($path, '/_system') || str_starts_with($path, '/api') || str_contains($path, '{') || str_contains($path, '(') || str_contains($path, '*') || in_array($path, $uniquePaths)) {
                    continue;
                }
                $uniquePaths[] = $path;

                $xml .= '    <url>' . PHP_EOL;
                $xml .= '        <loc>' . htmlspecialchars($baseUrl . $path) . '</loc>' . PHP_EOL;
                $xml .= '        <lastmod>' . date('Y-m-d') . '</lastmod>' . PHP_EOL;
                $xml .= '        <changefreq>daily</changefreq>' . PHP_EOL;
                $xml .= '        <priority>' . ($path === '/' ? '1.0' : '0.8') . '</priority>' . PHP_EOL;
                $xml .= '    </url>' . PHP_EOL;
            }

            // --- Dynamic Content: Cars ---
            if (class_exists('\TheFramework\Models\Car')) {
                $cars = Car::all();
                foreach ($cars as $car) {
                    $slug = urlencode($car['slug_mobil']);
                    $uid = urlencode($car['uid']);

                    $xml .= '    <url>' . PHP_EOL;
                    $xml .= '        <loc>' . htmlspecialchars($baseUrl . '/list-mobil/' . $slug . '/' . $uid) . '</loc>' . PHP_EOL;
                    $xml .= '        <lastmod>' . date('Y-m-d') . '</lastmod>' . PHP_EOL;
                    $xml .= '        <changefreq>weekly</changefreq>' . PHP_EOL;
                    $xml .= '        <priority>0.6</priority>' . PHP_EOL;
                    $xml .= '    </url>' . PHP_EOL;
                }
            }

            $xml .= '</urlset>';

            // Clean the buffer, throw away any warnings that might have been generated
            ob_end_clean();

            // Now, it's safe to send headers and output the clean XML
            header("Content-Type: application/xml; charset=utf-8");
            echo $xml;
            exit;

        } catch (Throwable $e) { // Catch ANY error or exception
            // Clean the buffer from any half-rendered content or fatal error messages
            ob_end_clean();

            // Log the actual error for debugging purposes
            Logging::getLogger()->error('Sitemap Generation Failed: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);

            // Output a valid but minimal XML to avoid browser errors.
            // This tells search engines there's a problem without breaking their parsers.
            header("Content-Type: application/xml; charset=utf-8");
            echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"><!-- Sitemap generation failed. Check server logs for details. --></urlset>';
            exit;
        }
    }
}
