<?php

namespace sokolnikov911\YandexTurboPages\helpers;

use PHPUnit\Framework\TestCase;

class ContentRatingTest extends TestCase
{
    public function testRating()
    {
        $rating = Content::rating(3.5, 5);
        $code = "<div itemscope=\"\" itemtype=\"http://schema.org/Rating\">
                       <meta itemprop=\"ratingValue\" content=\"3.5\" />
                       <meta itemprop=\"bestRating\" content=\"5\" />
                   </div>";
        $this->assertXmlStringEqualsXmlString($rating, $code);
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testBigCurrentValueException()
    {
        Content::rating(6, 5);
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testIncorrectMaxValueException()
    {
        Content::rating(6, -1);
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testZeroMaxValueException()
    {
        Content::rating(6, 0);
    }
}