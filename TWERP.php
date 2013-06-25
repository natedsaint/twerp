<?php
/** 
 * Twitter Web Exchange Request Processor 
 * 
 * After discussing the initial pull request with the author of the base class (@J7mbo), it
 * makes more sense to wrap the base class with a new utility class, and thus TWERP was born. : )
 *
 * PHP version 5.3.10
 * 
 * @category Awesomeness
 * @package  TWERP
 * @author   Nathan St. Pierre <nathan@nathanstpierre.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://github.com/natedsaint/twitter-api-php
 *
 *
 */

class TWERP extends TwitterAPIExchange
{
    /** 
     * Public method to request user status using the GET method (most common for public queries) 
     *
     * @param string @username The username of the timeline you'd like to query. 
     *
     * @return string $return JSON-encoded text response from the twitter api
     */

    public function getStatuses($username,$options=null) 
    {
      if ($options && gettype($options) === "array") 
      {
        $params = "";
        foreach ($options as $key=>$value) 
        {
          $params .= "&".urlencode($key)."=".urlencode($value);
        }
      }
      $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
      $return =  $this->setGetField("?screen_name=".urlencode($username).$params)->buildOauth($url,'GET')->performRequest();
      return $return;
    }

}

