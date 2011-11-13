<?php
/**
 * File containing the BCMemberOfRoleOperators class.
 *
 * @name BCMemberOfRoleOperators
 * @author Brookins Consulting <info a~t brookinsconsulting d~o~t com>
 * @copyright Copyright (C) 1999 - 2011 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or later)
 * @package bcmemberofrole
 * @link http://projects.ez.no/bcmemberofrole
 * @version 0.1.8
 */

class BCMemberOfRoleOperators extends OWSimpleOperator
{
    /*!
     * Return true if user roles of the provided userID match provided roleID
     *
     * @static
     * @param integer $userID is an integer of the user_id otherwise known as contentobject_id, the ID number of the object that represents the user
     * @param integer $roleID is an integer of the role_id otherwise known as the ID number of the role
     * @return bool true if user roles contain a match of the roleID parameter, false otherwise
     */
    static function member_of_role( $userID, $roleID )
    {
        return self::member_of_role_by_user_id( $userID, $roleID );
    }

    /*!
     * Return true if user roles of the provided userID match provided roleID
     *
     * @static
     * @param integer $userID is an integer of the user_id otherwise known as contentobject_id, the ID number of the object that represents the user
     * @param integer $roleID is an integer of the role_id otherwise known as the ID number of the role
     * @return bool true if user roles contain a match of the roleID parameter, false otherwise
     */
    static function member_of_role_by_user_id( $userID, $roleID )
    {
    	$result = false;

        // Fetch user roles
        $userRoles = eZUserFunctionCollection::fetchMemberOf( $userID );
        foreach( $userRoles['result'] as $userRole )
        {
                // Check for roleID match in each user role
            if( $roleID == $userRole->attribute( 'id' ) )
            {
                    // Exit foreach loop and return true. We found a matching roleID the user in question has the role being requested.
                $result = true;
	        break;
            }
        }

        return $result;
    }

    /*!
     * Return true if user roles of the provided userID match provided roleID
     *
     * @static
     * @param integer $userID is an integer of the user_id otherwise known as contentobject_id, the ID number of the object that represents the user
     * @param integer $roleID is an integer of the role_id otherwise known as the ID number of the role
     * @return bool true if user roles contain a match of the roleID parameter, false otherwise
     */
    static function member_of_role_by_user( $user, $roleID )
    {
	    $result = false;

	    // Fetch user ID
	    $userID = $user->attribute( 'contentobject_id' );
	    
	    // Perform comparison
	    $result = self::member_of_role_by_user_id( $userID, $roleID );

        return $result;
    }
}

?>
