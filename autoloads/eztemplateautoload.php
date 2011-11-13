<?php
/**
 * File containing the BCMemberOfRoleOperators class autoloads.
 *
 * @name BCMemberOfRoleOperators
 * @author Brookins Consulting <info a~t brookinsconsulting d~o~t com>
 * @copyright Copyright (C) 1999 - 2011 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or later)
 * @package bcmemberofrole
 * @link http://projects.ez.no/bcmemberofrole
 * @version 0.1.8
 */

/*!
 * Prepare the expected autoload configuration of the custom template operator for use within eZ Publish
 *
 * Look in the operator files for documentation on use and parameters definition.
 *
 * @var array $eZTemplateOperatorArray
 * @param array entry key 'script' value 'path/to/extension/class/file'
 * @param array entry key 'class' value 'PHP Class Name'
 * @param array entry key 'operator_names' value is an array of 'PHP Class Method Names'
 */

$eZTemplateOperatorArray = array();

/**
 * Autload configuration for BCMemberOfRoleOperators
 */

$eZTemplateOperatorArray[] = array( 'script' => 'extension/bcmemberofrole/classes/bcmemberofroleoperators.php',
                                    'class' => 'BCMemberOfRoleOperators',
                                    'operator_names' => array( 'member_of_role',
                                                               'member_of_role_by_user',
                                                               'member_of_role_user_id' ) );

?>
