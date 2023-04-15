<?php
if (isset($_GET('submit'))) {
    echo "First Name : " . $_GET('fname');
    echo " Last Name : " . $_GET('lname');
    echo "Email Address : " . $_GET('email');
    echo "Date of Birth: " . $_GET('dob');
    echo "Age : " . $_GET('age');
    echo "Phone number : " . $_GET('contact');
    echo "Address : " . $_GET('address');
    echo "Post Code : " . $_GET('pcode');
    echo "Country : " . $_GET('country');
    echo "State : " . $_GET('state');
    echo "First Name : " . $_GET('city');
    echo "City : " . $_GET('username');
    echo "Password : " . $_GET('password');
}
