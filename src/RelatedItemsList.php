<?php

namespace sokolnikov911\YandexTurboPages;

/**
 * Class RelatedItemsList
 * @package sokolnikov911\YandexTurboPages
 */
class RelatedItemsList implements RelatedItemsListInterface
{
    /** @var RelatedItemInterface[] */
    protected $relatedItems = [];

    /** @var bool */
    protected $infinity;

    /**
     * Add channel
     * @param bool $infinity Use or not infinity scroll of related items
     */
    public function __construct($infinity = false)
    {
        $this->infinity = $infinity;
    }

    public function appendTo(ItemInterface $item)
    {
        $item->addRelatedItemsList($this);
        return $this;
    }

    public function addItem(RelatedItem $relatedItem)
    {
        $this->relatedItems[] = $relatedItem;
        return $this;
    }

    public function asXML()
    {
        $infinity = $this->infinity ? 'type="infinity"' : '';

        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><yandex:related xmlns:yandex="http://news.yandex.ru" '
            . $infinity . '></yandex:related>', LIBXML_NOERROR | LIBXML_ERR_NONE | LIBXML_ERR_FATAL);

        foreach ($this->relatedItems as $item) {
            $toDom = dom_import_simplexml($xml);
            $fromDom = dom_import_simplexml($item->asXML());
            $toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
        }

        return $xml;
    }
}
