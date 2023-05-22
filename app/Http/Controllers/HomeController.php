<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    private $categories;
    private $products;
    private $product;
    private $data = [];
    private $item = [];

    public function index()
    {
        $client = new Client();
        //$category = Category::find($id);
//        $text = $category->name;
        $text = 'Shoes';
        $translate = new GoogleTranslate();

        // Set the source language to Chinese and the target language to English
        $translate->setSource('en');
        $translate->setTarget('zh');
        $translatedText = $translate->translate($text);
        $encodedText = urlencode($translatedText);
        $response = $client->request('GET',  'https://16881.p.rapidapi.com/api?api=item_search_1688&q='.$encodedText.'&page_size=20&page=1&sort=default', [
            'headers' => [
                'X-RapidAPI-Key' => '913e0e2cd0mshe8e47bd9412427bp1d1079jsn173ca7526bd1'
            ]
        ]);

//        $encodedText = urlencode('shoe');
//        dd($encodedText);

        $categoriesAndProducts = json_decode($response->getBody(), true);

        foreach($categoriesAndProducts['result']['item'] as $key => $item)
        {
            // Instantiate a new GoogleTranslate object
//            $translate = new GoogleTranslate();

            // Set the source language to Chinese and the target language to English
            $translate->setSource('zh');
            $translate->setTarget('en');
            $exchange_rate = 106;

            $this->data[$key]['id']             = $item['num_iid'];
            $this->data[$key]['name']           = $translate->translate($item['title']) ;
            $this->data[$key]['image']          = $item['pic'];
            $this->data[$key]['price']          = number_format($item['price'] * $exchange_rate, 2,'.', '');
            $this->data[$key]['seller_id']      = $item['seller_id'];
            $this->data[$key]['category']       = $item['category'];
            $this->data[$key]['seller_nick']    = $translate->translate($item['seller_nick']);
            $this->data[$key]['company_name']   = $translate->translate($item['company_name']);
        }

//        return $this->data;

        return view('front.index', [
            'products' =>$this->data
        ]);
    }
}
