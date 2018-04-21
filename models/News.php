<?php

class News
{
    private static $body;
    public static function getConnect()
    {
        $url = "https://newsapi.org/v2/everything?sources=bbc-news&apiKey=7d0ded37b2954b71b0d425bac7be2915";
        // sendRequest
        // note how referer is set manually
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        self::$body = curl_exec($ch);
        curl_close($ch);
        return self::$body;
    }

    public static function getNewsById($id)
    {
        $newsArray = self::getListNews();
        $oneNews = array();
        foreach ($newsArray as $item) {
            if ($item['id'] == $id){
                $oneNews = $item;
            }
        }
        return $oneNews;
    }

    public static function getListNews()
    {
       $body = self::getConnect();
       $json = json_decode($body, true);
       unset($json['status']);
       unset($json['totalResults']);
       $newsArray = array();
       $id = 0;
        foreach ($json as $articles => $numberOfArticles) {
            foreach ($numberOfArticles as $source => $value) {
                $newsArray1['id'] = $id;
                $newsArray1['title'] = $value['title'];
                $newsArray1['description'] = $value['description'];
                $newsArray1['url'] = $value['url'];
                $newsArray1['urlToImage'] = $value['urlToImage'];
                $newsArray1['publishedAt'] = $value['publishedAt'];
                $newsArray1['author'] = $value['author'];
                $newsArray[] = $newsArray1;
                $id++;
            }
       }
        return $newsArray;
    }

}