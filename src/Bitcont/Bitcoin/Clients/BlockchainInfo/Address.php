<?php

namespace Bitcont\Bitcoin\Clients\BlockchainInfo;

use Bitcont\Bitcoin\Protocol\IAddress;


class Address implements IAddress
{

	/**
	 * Address id.
	 *
	 * @var string
	 */
	protected $id;


	/**
	 * Returns address id.
	 *
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}
}

