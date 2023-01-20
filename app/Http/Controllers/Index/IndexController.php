<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //

    private $blogFeedUrl = 'https://seanodonnell.co.uk/blog/feed/';

    /**
     * Show our index page
     * Calculates tea!
     */
    public function showIndex()
    {
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
    private function fetchBlogPosts()
    {
        $posts = []; // Init posts incase we get none back
        $n = 0;
        $websiteResponse = curl_init($this->blogFeedUrl);


        // check the blog site is returning 200's
        if($websiteResponse !== false) {
            $feed = implode(file($this->blogFeedUrl)); // Fetch XML rss feed

            $xml = simplexml_load_string($feed,'SimpleXMLElement', LIBXML_NOCDATA); // Load string using simple XML
            $json = json_encode($xml); // Encode XML into useable JSON
            $array = json_decode($json,TRUE); // Decode the JSON into a PHP Array

            if($array) {
                foreach($array['channel']['item'] as $i) {
                    if($n == 6)
                        break;
                    $posts[] = $i;
                    $n++;
                }
            }
        }

        return $posts;
    }

    public function processContact(Request $r) {

        $to_name = 'Sean O\'Donnell';
        $to_email = 'contact@seanodonnell.co.uk';
        $data = array('name'=>"SeanOdonnell", "body" => $r->all());
        Mail::send('emails.contact-form', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Contact Form Request Submitted');
            $message->from('sean@streambit.tv');
        });
    }
}
