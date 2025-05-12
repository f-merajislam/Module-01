<?php

//Contact management system
$name_1 = "";
$phoneNumber_1 = "";

$name_2 = "";
$phoneNumber_2 = "";

while (true) {
    echo "\n========= Contact Management System =========\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";

    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));
    

    if ($choice == "1") {
        
        if ($name_1 == "") {
            echo "Please enter the name_1 of the contact: ";
            $name_1 = trim(fgets(STDIN));

            echo "Please enter the phone number_1 of the contact: ";
            $phoneNumber_1 = trim(fgets(STDIN));
        }
        elseif ($name_2 == "") {
            echo "Please enter the name_2 of the contact: ";
            $name_2 = trim(fgets(STDIN));

            echo "Please enter the phone number_2 of the contact: ";
            $phoneNumber_2 = trim(fgets(STDIN));
        } 
        else {
            echo "You have added already 2 contacts.\n";
        }
    } 
    elseif ($choice == "2") {

        echo "\n========= Contacts List =========\n";

        if ($name_1 != "") {
            echo "Contact 1: Name: $name_1, Phone Number: $phoneNumber_1\n";
        }
        if ($name_2 != "") {
            echo "Contact 2: Name: $name_2, Phone Number: $phoneNumber_2\n";
        } 
        else {
            echo "No contact found.\n";
        }
    }
    elseif ($choice == "3") {
        echo "Exiting the program.\n";
        break;
    } 
    else {
        echo "Invalid choice. Please try again.\n";
    }

}

?>