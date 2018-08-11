<?php

namespace muratoffalex\parser;

/**
 * @author Student <notrealemail@gmail.com>
 */
class Parser implements ParserInterface
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array
    {

        $htmlPage = file_get_contents($url);

        if ($htmlPage === false) {
            return ['Invalid URL'];
        }
        
        // Regular expression

        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);

        if (empty($strings[1])) {
            return ['There are no such tags on the page'];
        }

        return $strings[1];
    }
    
    public function test()
    {
        // feature
    }
    
    public function test2()
    {
        // feature 2
    }
    
    public function test3()
    {
        // feature 3
    }

}
