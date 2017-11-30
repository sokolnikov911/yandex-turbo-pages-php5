<?php

namespace sokolnikov911\YandexTurboPages;

/**
 * Interface ChannelInterface
 * @package sokolnikov911\YandexTurboPages
 */
interface ChannelInterface
{
    /**
     * Set channel title
     * @param string $title
     * @return ChannelInterface
     */
    public function title($title);

    /**
     * Set channel URL
     * @param string $link
     * @return ChannelInterface
     */
    public function link($link);

    /**
     * Set channel description
     * @param string $description
     * @return ChannelInterface
     */
    public function description($description);

    /**
     * Set ISO 639-1 language code
     * @param string $language
     * @return ChannelInterface
     */
    public function language($language);

    /**
     * Add ad to channel
     * @param string $type Type of Ad Network: Yandex or ADFOX
     * @param string $id Id of Yandex Ad block, if Yandex Ad network used
     * @param string $turboAdId Id of <figure> element in content, in which Ad block should placed
     * @param string $code ADFOX code, if ADFOX used
     * @return ChannelInterface
     */
    public function adNetwork($type, $id = '', $turboAdId = '', $code = '');

    /**
     * Add item object
     * @param ItemInterface $item
     * @return ChannelInterface
     */
    public function addItem(ItemInterface $item);

    /**
     * Add counter object
     * @param CounterInterface $counter
     * @return ChannelInterface
     */
    public function addCounter(CounterInterface $counter);

    /**
     * Append to feed
     * @param FeedInterface $feed
     * @return ChannelInterface
     */
    public function appendTo(FeedInterface $feed);

    /**
     * Return XML object
     * @return SimpleXMLElement
     */
    public function asXML();
}
