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
// Copyright (C) 2006-2017  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\ElasticSearch\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class ESearchResult extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchResult';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->object) && !empty($xml->object))
			$this->object = \Kaltura\Client\ParseUtils::unmarshalObject($xml->object, "KalturaObjectBase");
		if(count($xml->highlight))
		{
			if(empty($xml->highlight))
				$this->highlight = array();
			else
				$this->highlight = \Kaltura\Client\ParseUtils::unmarshalArray($xml->highlight, "KalturaESearchHighlight");
		}
		if(count($xml->itemsData))
		{
			if(empty($xml->itemsData))
				$this->itemsData = array();
			else
				$this->itemsData = \Kaltura\Client\ParseUtils::unmarshalArray($xml->itemsData, "KalturaESearchItemDataResult");
		}
	}
	/**
	 * 
	 * @var \Kaltura\Client\Type\KalturaObjectBase
	 */
	public $object;

	/**
	 * 
	 * @var array<KalturaESearchHighlight>
	 */
	public $highlight;

	/**
	 * 
	 * @var array<KalturaESearchItemDataResult>
	 */
	public $itemsData;

}