<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Exif\Gps;

use Exifer\Common\Tag;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
abstract class GpsTag extends Tag implements GpsTagInteface
{
    /**
     * {@inheritDoc} 
     */
    protected $name = 'GPS Unknown Tag';
}
