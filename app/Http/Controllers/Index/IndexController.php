<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{
    //

    private $blogFeedUrl = 'https://seanodonnell.co.uk/blog/feed/';

    /**
     * Show our index page
     * Calculates tea!
     */
    public function showIndex() {

        // I'm taking when I started drinking tea, averaging out that I'd sometimes drink 1 or 2 not drinking all the way cups of tea every day and outputting that.
        // Basically, I drink a fuck ton of tea.
        $end = Carbon::parse(1110584223);
        $tea = round(($end->diffInDays(Carbon::now()) * 1.25));

        $posts = $this->fetchBlogPosts();

        return view('index', [
            'tea' => $tea,
            'posts' => $posts
        ]);
    }

    /**
     * Fetch blog posts from a URL (WordPress Expected)
     */
    private function fetchBlogPosts() {
        $posts = []; // Init posts incase we get none back
        $n = 0;
        $feed = implode(file($this->blogFeedUrl)); // Fetch XML rss feed

        $xml = simplexml_load_string($feed,'SimpleXMLElement', LIBXML_NOCDATA); // Load string using simple XML
        $json = json_encode($xml); // Encode XML into useable JSON
        $array = json_decode($json,TRUE); // Decode the JSON into a PHP Array

        if($array) {
            foreach($array['channel']['item'] as $i) {
                if($n == 6)
                {
                    break;
                }
                $posts[] = $i;
                $n++;

            }
        }

        return $posts;

    }
}
