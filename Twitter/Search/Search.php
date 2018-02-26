<?php
/**
 * Created by PhpStorm.
 * User: NgaNguyen
 * Date: 26/2/2018
 * Time: 2:36 PM
 */

namespace Twitter\Search;


use GuzzleHttp\Exception\RequestException;
use Twitter\Base;

/**
 * Class Search
 * @package Twitter\Search
 */
class Search extends Base
{
    public function search($value)
    {
        try {
            $url = "/search/tweets.json";
            $response = $this->callTwitter("get", $url, $value);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}
