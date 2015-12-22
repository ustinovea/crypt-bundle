<?php
/**
 * This file is part of the Global Trading Technologies Ltd crypt-bundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * (c) fduch <alex.medwedew@gmail.com>
 *
 * @date 22.12.15
 */

namespace Gtt\Bundle\CryptBundle\Exception;

/**
 * Exception for cases when DI tag is defined incorrectly
 *
 * @author fduch <alex.medwedew@gmail.com>
 */
class InvalidTagException extends \InvalidArgumentException implements ExceptionInterface
{

}
