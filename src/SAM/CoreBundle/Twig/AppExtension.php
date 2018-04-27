<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 27/04/2018
 * Time: 09:52
 */

namespace SAM\CoreBundle\Twig;


use Twig\TwigFilter;
use Twig_Extension;
use Twitter\Text\Autolink;

class AppExtension extends Twig_Extension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('deleteHashTags', array($this, 'deleteHashTagsFilter')),
        );
    }

    public function deleteHashTagsFilter($text)
    {
        $html = preg_replace("/(^|\s)#(\w*[a-zA-Z_]+\w*)/", "", $text);
        return $html;
    }
}