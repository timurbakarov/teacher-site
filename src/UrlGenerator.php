<?php

namespace App;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UrlGenerator
{
    /**
     * @var \Symfony\Component\Routing\Generator\UrlGenerator
     */
    private $urlGenerator;

    public function __construct(\Symfony\Component\Routing\Generator\UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param $path
     * @return string
     */
    public function path($path, array $params = [])
    {
        return $this->urlGenerator->generate($path, $params);
    }

    /**
     * @param $url
     * @return string
     */
    public function url($url)
    {
        return $this->urlGenerator->generate($url, [], UrlGeneratorInterface::RELATIVE_PATH);
    }

    /**
     * @param $url
     * @return string
     */
    public function absoluteUrl($url)
    {
        return $this->urlGenerator->generate($url, [], UrlGeneratorInterface::ABSOLUTE_URL);
    }
}