<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2015  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EdgeServer extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEdgeServer';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->desciption))
			$this->desciption = (string)$xml->desciption;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->hostName))
			$this->hostName = (string)$xml->hostName;
		if(count($xml->playbackHostName))
			$this->playbackHostName = (string)$xml->playbackHostName;
		if(count($xml->deliveryProfileIds))
			$this->deliveryProfileIds = (string)$xml->deliveryProfileIds;
		if(count($xml->parentId))
			$this->parentId = (int)$xml->parentId;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * edgeServer name
	 * 	 
	 * @var string
	 */
	public $name = null;

	/**
	 * edgeServer uniqe system name
	 * 	 
	 * @var string
	 */
	public $systemName = null;

	/**
	 * edgeServer description
	 * 	 
	 * @var string
	 */
	public $desciption = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\EdgeServerStatus
	 */
	public $status = null;

	/**
	 * edgeServer tags
	 * 	 
	 * @var string
	 */
	public $tags = null;

	/**
	 * edgeServer host name
	 * 	 
	 * @var string
	 */
	public $hostName = null;

	/**
	 * edgeServer playback hostName
	 * 	 
	 * @var string
	 */
	public $playbackHostName = null;

	/**
	 * Delivery profile ids comma seperated
	 * 	 
	 * @var string
	 */
	public $deliveryProfileIds = null;

	/**
	 * Id of the parent edge server
	 * 	 
	 * @var int
	 */
	public $parentId = null;

}