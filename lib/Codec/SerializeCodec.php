<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ICanBoogie\Storage\Codec;

use ICanBoogie\Storage\Codec;

/**
 * Encode and decode data using PHP's `serialize()` and `unserialize()`.
 */
class SerializeCodec implements Codec
{
	/**
	 * @inheritdoc
	 */
	public function encode($data)
	{
		return serialize($data);
	}

	/**
	 * @inheritdoc
	 */
	public function decode($data)
	{
		return unserialize($data);
	}
}