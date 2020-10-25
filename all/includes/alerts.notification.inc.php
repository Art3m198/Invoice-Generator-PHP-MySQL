<?php
	
	// Array of messages to be displayed to the user for various scenarios, such as wrong password, page not found, timeout, etc.
	$notification = array (
		
		// Notifications which display when a user logs in
		"login" => array (
			"success" => "You have successfully logged in",
			"failure" => "This username/password is not registered in the system",
			"redirect" => "You are already logged in, we redirect you to the main page"
		),
		
		"logout" => array (
			"success" => "You have successfully logged out",
			"security_failed" => "You are automatically logged out due to a failed security check. Please try again"
		),
		
		// Notifications relating to adding/deleting/updating API tokens
		"api" => array(
			"add" => array(
				"success" => "A new API token has been successfully added.",
				"failure" => "There was an error adding an API token. Please check all fields and try again.",
			),
			"delete" => array(
				"success" => "API token has been successfully deleted.",
				"failure" => "There was an error deleting an API token. Please check all fields and try again.",
				"not_found" => "The API token you have tried to delete could not be found in the database.",
			),
			"update" => array(
				"success" => "API token has been successfully updated.",
				"failure" => "There was an error updating an API token. Please check all fields and try again.",
				"not_found" => "The API token you have tried to update could not be found in the database.",
			),
		),
		
		// Notifications relating to users which have access to the system
		"user" => array (
			"add" => array (
				"success" => "New user added successfully",
				"failure" => "An error occurred while adding a user. Please check all fields and try again",
				"duplicate" => "This username already exists. Please choose a different username",
			),
			"delete" => array (
				"success" => "The user was successfully deleted",
				"failure" => "An error occurred when deleting the user",
				"not_found" => "The user you tried to delete was not found in the database",
				"self" => "You can't delete yourself from the system",
			),
			"update" => array (
				"name" => array (
					"success" => "Full name / name of the user was updated successfully",
					"failure" => "An error occurred while updating the user name. Please check all fields and try again",
					"duplicate" => "The username already exists. Please choose a different username",
				),
				"password" => array (
					"success" => "Password updated successfully",
					"failure" => "An error occurred while updating the password. Please check all fields and try again",
				),
				"not_found" => "The user you are trying to update could not be found. Please check and try again",
			),
			
		),
		
		// Notifications relating to contacts in the address book
		"contact" => array (
			
			// Adding contacts to the address book
			"add" => array (
				"success" => "New person added successfully",
				"failure" => "A person cannot be added",
			),
			
			// Updating existing contacts in the address book
			"update" => array (
				"success" => "Person updated successfully",
				"failure" => "The person can't be updated",
				"not_found" => "Not found",
			),
			
			// Deleting a contact from the address book
			"delete" => array (
				"success" => "Person deleted",
				"failure" => "Error when deleting a person",
				"not_found" => "Not found"
			),
			
			// Viewing contacts in the address book
			"view" => array (
				"not_found" => "Not found"
			)
		),
		
		// Items relating to log messages, primarily if a log has failed to be added
		"log" => array (
			"add" => array (
				"failure" => "There is a problem with registering your actions in the system",
			),
		),
		
		// Items relating to the user currently logged in
		"authenticate" => array (
			// Not authenticated is used when a person tries accessing a page when they haven't been authenticated
			"not_authenticated" => "To view this page, you must log in. Please log in to the system.",
			"not_found" => "This account does not exist in the database.",
			"details_changed" => "Your account information has changed.",
			"agent_changed" => "It looks like your device has changed. Please log in to the system.",
			"ip_changed" => "It looks like your IP address has changed. Please log in.",
			// Page time out - likely caused by making no actions on the system but being logged in
			"timeout" => "Your session has expired. Please log in to the system.",
		)
		
		
	);

?>