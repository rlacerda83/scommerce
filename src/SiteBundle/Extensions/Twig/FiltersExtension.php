<?php

namespace SiteBundle\Extensions\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class FiltersExtension extends \Twig_Extension
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;

    /**
     * CleanStringExtension constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'cleanString' => new \Twig_SimpleFilter('cleanString', array($this, 'cleanString')),
        );
    }

    /**
     * @param $string
     * @return mixed|string
     */
    public function cleanString($string)
    {
        $param = strtolower($string);

        $str = htmlentities($param);
        $str = preg_replace('/&((?i)[a-z]{1,2})(?:grave|accent|acute|circ|tilde|uml|ring|lig|cedil|slash);/', '$1', $str);
        $str = str_replace(array('&ETH;', '&eth;', '&THORN;', '&thorn;'), array('dh', 'd', 'TH', 'th'), $str);

        $param = str_replace(array('_', ' '), array('-', '-'), $str);
        $param = preg_replace('![^\w_-]!', '', $param);
        $param = preg_replace('!-{2,}!', '-', $param);
        $param = preg_replace('!^-+|-+$!', '', $param);

        return $param;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'filters_extension';
    }
}