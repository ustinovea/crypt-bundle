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

namespace Gtt\Bundle\CryptBundle\Encryption;

/**
 * Interface for all the classes expect decryptor via setter injection
 *
 * @author fduch <alex.medwedew@gmail.com>
 */
interface DecryptorAwareInterface
{
    /**
     * Sets decryptor
     *
     * @param string             $name      unique name of the decryptor set in bundle config
     * @param DecryptorInterface $decryptor decryptor
     */
    public function setDecryptor($name, DecryptorInterface $decryptor);
}
