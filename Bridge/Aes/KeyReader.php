<?php
/**
 * This file is part of the Global Trading Technologies Ltd crypt-bundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gtt\Bundle\CryptBundle\Bridge\Aes;

use Gtt\Bundle\CryptBundle\Exception\KeyReaderException;
use Defuse\Crypto\Core as CryptoCore;
use Defuse\Crypto\Key as CryptoKey;

/**
 * Simple service to read the key from specific file.
 */
class KeyReader
{
    /**
     * Path to a key file
     *
     * @var string
     */
    private $keyPath;

    /**
     * Constructor.
     *
     * @param string $keyPath Path to a key file
     */
    public function __construct($keyPath)
    {
        $this->keyPath = $keyPath;
    }

    /**
     * Get the CryptoCore::KEY_BYTE_SIZE bytes from the file (extra bytes skipped).
     *
     * @throws KeyReaderException When unable to read file
     *
     * @return CryptoKey
     */
    public function read()
    {
        $key = file_get_contents($this->keyPath, false, null, 0);
        if ($key === false) {
            throw new KeyReaderException($this->keyPath);
        }
        return CryptoKey::loadFromAsciiSafeString($key);
    }
}