<?php

namespace sokolnikov911\YandexTurboPages;

/**
 * Interface ItemInterface
 * @package sokolnikov911\YandexTurboPages
 */
interface ItemInterface
{
    /**
     * Set turbo mode
     * @param bool $turbo
     */
    public function __construct($turbo);

    /**
     * Set item title
     * @param string $title
     * @return ItemInterface
     */
    public function title($title);

    /**
     * Set item URL
     * @param string $link
     * @return ItemInterface
     */
    public function link($link);

    /**
     * Set page content
     * @param string $turboContent
     * @return ItemInterface
     */
    public function turboContent($turboContent);

    /**
     * Set item category
     * @param string $category Category name
     * @return ItemInterface
     */
    public function category($category);

    /**
     * Set published date
     * @param int $pubDate Unix timestamp
     * @return ItemInterface
     */
    public function pubDate($pubDate);

    /**
     * Set the author
     * @param string $author Email of item author
     * @return ItemInterface
     */
    public function author($author);

    /**
     * Append item to the channel
     * @param ChannelInterface $channel
     * @return ItemInterface
     */
    public function appendTo(ChannelInterface $channel);

    /**
     * Add list of related items to item
     * @param RelatedItemsListInterface $relatedItemsList
     * @return ItemInterface
     */
    public function addRelatedItemsList(RelatedItemsListInterface $relatedItemsList);

    /**
     * Return XML object
     * @return SimpleXMLElement
     */
    public function asXML();
}
