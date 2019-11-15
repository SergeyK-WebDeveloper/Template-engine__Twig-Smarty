<?php

/**
 * This file is part of Twig.
 *
 * (c) 2014 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

use Symfony\Component\Translation\TranslatorInterface;

/**
 * @author Robin van der Vleuten <robinvdvleuten@gmail.com>
 */
class Twig_Extensions_Extension_Mydate extends Twig_Extensions_Extension_Date
{
    

    protected function getPluralizedInterval($count, $invert, $unit)
    {
       
        if ($count > 1) {
            $unit .= 's';
        }

        return $invert ? "через $count $unit" : "$count $unit назад";
    }
}
