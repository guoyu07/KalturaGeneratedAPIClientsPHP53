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
namespace Kaltura\Client\Plugin\ViewHistory\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ViewHistoryUserEntry extends \Kaltura\Client\Type\UserEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaViewHistoryUserEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->playbackContext))
			$this->playbackContext = (string)$xml->playbackContext;
		if(count($xml->lastTimeReached))
			$this->lastTimeReached = (int)$xml->lastTimeReached;
		if(count($xml->lastUpdateTime))
			$this->lastUpdateTime = (int)$xml->lastUpdateTime;
	}
	/**
	 * Playback context
	 * @var string
	 */
	public $playbackContext = null;

	/**
	 * Last playback time reached by user
	 * @var int
	 */
	public $lastTimeReached = null;

	/**
	 * 
	 * @var int
	 */
	public $lastUpdateTime = null;

}