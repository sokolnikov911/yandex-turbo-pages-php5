<?php

namespace sokolnikov911\YandexTurboPages;


interface TurboContentHeaderInterface
{
    /**
     * Set header h1 title
     * @param string $titleH1
     * @return TurboContentHeaderInterface
     */
    public function titleH1($titleH1);

    /**
     * Set header h2 title
     * @param string $titleH2
     * @return TurboContentHeaderInterface
     */
    public function titleH2($titleH2);

    /**
     * Set header image url
     * @param string $img
     * @return TurboContentHeaderInterface
     */
    public function img($img);

    /**
     * Return header as HTML
     * @return string
     */
    public function asHTML();
}