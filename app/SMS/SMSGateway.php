<?php 

namespace SMS;

interface SMSGateway {

	/**
	* Checks whether or not a new text is present
	* @return boolean
	*/
	public function hasNewText();

	/**
	* Gets the latest text message as a String
	* @return String
	*/
	public function getTextMessage();

	/**
	* Replies to the text message
	* @return boolean
	*/
	public function reply($relevantMessage);
}