<?php
/**
 * This file is part of the Global Trading Technologies Ltd crypt-bundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * (c) fduch <alex.medwedew@gmail.com>
 *
 * @date 21.12.15
 */

namespace Gtt\Bundle\CryptBundle\Encryption;

/**
 * Base encryptor interface
 *
 * @author fduch <alex.medwedew@gmail.com>
 */
interface EncryptorInterface
{
    /**
     * Encrypts the value specified
     *
     * @param string $value value to be encrypted
     *
     * @return string
     */
    public function encrypt($value);
}
