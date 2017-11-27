<?php

namespace sokolnikov911\YandexTurboPages;

/**
 * Interface RelatedItemInterface
 * @package sokolnikov911\YandexTurboPages
 */
interface RelatedItemInterface
{
    /**
     * Set item URL
     * @param string $link
     * @param string $title
     * @param string $img
     */
    public function __construct($title, $link, $img = '');

    /**
     * Append item to the channel
     * @param RelatedItemsListInterface $relatedItemsList
     * @return RelatedItemInterface
     */
    public function appendTo(RelatedItemsListInterface $relatedItemsList);

    /**
     * Return XML object
     * @return SimpleXMLElement
     */
    public function asXML();
}
