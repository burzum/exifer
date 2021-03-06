<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Iptc;

use Exifer\Common\Directory;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
class IptcDirectory extends Directory
{
    public function addTag(TagInterface $tag)
    {
        if(!$tag instanceof IptcTagInterface) {
            throw new \InvalidArgumentException(sprintf(
            'The tag "%s" must be implement Exifer\Iptc\IptcTagInterface', 
            $tag->getTagName()));
        }
        return parent::addTag($tag);
    }
}
