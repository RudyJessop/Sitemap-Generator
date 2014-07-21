<?php
	echo '<!-- /* This Sitemap generator was built by Rudy Jessop at http://rudyjessop.com 
	This software is under MIT Commerical Licence Copyright &copy; 2014 Rudy Jessop Creative Professional */-->'

	echo '<!-- /* 
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (Site Map Generator), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/-->'

	header("Content-Type: application/xml; charset=utf-8");
	echo '<?xml version="1.0" encoding="UTF-8"?>' .PHP_EOL;
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
				http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' .PHP_EOL;

			define('SITEMAP_DIR','./');
			define('SITEMAP_DIR_URL', 'http://www.example.com/')

			$freq = "always";
			$prio = 1;

	function urlElement($url){
		echo '<url>\n
				<loc>'.$url.'<loc>\n
				<changefreq>'.$freq.'</changefreq>\n
				<priority>'.$prio.'</priority>\n
			</url>'.PHP_EOL;

	}

	echo '</urlset>'

	urlElement("http://rudyjessop.com");
	urlElement("http://github.com/RudyJessop/Sitemap-Generator");
	urlElement("http://twitter.com/rudy_di_lover");


?>