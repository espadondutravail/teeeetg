<?php
/**
* @version 			SEBLOD 3.x Core ~ $Id: fields.php sebastienheraud $
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				http://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2015 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.controlleradmin' );

// Controller
class CCKControllerFields extends JControllerAdmin
{
	protected $text_prefix	=	'COM_CCK';
	
	// __construct
	public function __construct( $config = array() )
	{
		parent::__construct( $config );
	}
	
	// getModel
	public function getModel( $name = 'Field', $prefix = CCK_MODEL, $config = array( 'ignore_request' => true ) )
	{
		$model	=	parent::getModel( $name, $prefix, $config );
		
		return $model;
	}
}
?>