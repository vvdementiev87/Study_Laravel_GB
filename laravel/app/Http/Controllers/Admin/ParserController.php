<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade;

class ParserController extends Controller
{
    public function __invoke(Request $request)
    {
        $link = "https://news.rambler.ru/rss/photo/";
        $xml = Facade::load($link);
        $data = $xml->parse([
            "title" => [
                "uses" => "channel.title"
            ],
            "link" => [
                "uses" => "channel.link"
            ],
            "description" => [
                "uses" => "channel.description"
            ],
            "image" => [
                "uses" => "channel.image.url"
            ],
            "news" => [
                "uses" => "channel.item[title,link,guid,description,pubDate]"
            ]
        ]);

        dd($data);
    }
}
