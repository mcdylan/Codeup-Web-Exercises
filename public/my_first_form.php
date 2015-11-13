<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First Form</title>
</head>
<body>
<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="password">
    </p>
    <p>
        <button type="submit" name="hit-submit" value="Login">Login</button>
    </p>
</form>
<form method="POST" action="/my_first_form.php">
    <p>
        Compose an email.
    </p>
    <p>
        <label for="to">To:</label>
        <input id="to" name="to" type="email" placeholder="Send to">
    </p>
    <p>
        <label for="from">From:</label>
        <input id="from" name="from" type="from" placeholder="Your email">
    </p>
    <p
        <label for="subject">Subject:</label>
        <input id="subject" name="subject" type="subject" placeholder="What's it about?">
    </p>
    <p>
        <label for="body">Your Message:</label>
        <textarea id="body" name="body" type="body" placeholder="Write your heart out!"></textarea>

    <p>
        <input type="checkbox" id="mailing-list" name="mailing-list" value="yes" checked>
        <label for="save-copy">Save a copy of this message.</label>
    </p>
    <p>
        <em><strong>Tell me more about you!</strong></em>
    </p>
    <p>
        <p>What street is Codeup on?</p>
        <p>
            <label>
                <input type="radio" name="q1" value="pecan">
                Pecan
            </label>
        </p>
        <p>
            <label>
                <input type="radio" name="q1" value="navarro">
                Navarro
            </label>
        </p>
        <p>
            <label>
                <input type="radio" name="q1" value="st-marys">
                St. Mary's
            </label>
        </p>
        <p>
            <label>
                <input type="radio" name="q1" value="commerce">
                Commerce
            </label>
        </p>
        <p>How many years have you lived in San Antonio?</p>
        <p>
            <label>
                <input type="radio" name="q1" value="0-2">
                0-2 years
            </label>
        </p>
        <p>
            <label>
                <input type="radio" name="q1" value="2-5">
                2-5 years
            </label>
        </p>
        <p>
            <label>
                <input type="radio" name="q1" value="5-10">
                5-10 years
            </label>
        </p>
        <p>
            <label>
                <input type="radio" name="q1" value="10+">
                10+ years
            </label>
        </p>
        <p>What kind of wine do you like? Select all that apply.</p>
        <p>
            <label>
                <input type="checkbox" id="wine" name="beer[]" value="red">
                Red
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="wine" name="beer[]" value="white">
                White
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="wine" name="beer[]" value="rosé">
                Rosé
            </label>
        </p>
        <p>What's your favorite animal?</p>
        <p>
            <label>
                <input type="radio" id="animal" value="animal">
                Dog
            </label>
        </p>
        <p>
            <label>
                <input type="radio" id="wine" value="animal">
                Cat
            </label>
        </p>
        <label for="hobbies">What hobbies do you do?</label>
        <select id="hobbies" name="hobbies[]" multiple>
            <option value="rowing">rowing</option>
            <option value="cello">cello</option>
            <option value="studying">studying</option>
        </select>
    </p>
        <button type="submit" name="hit-send" value="Send Now!">Send Now!</button>
    </p>
    </p>
</form>
<form method="POST" action="/my_first_form.php">
    <p>Select Testing</p>
    <select id="yes-no" name="yes-no">
        <option value="1">yes</option>
        <option value="0">no</option>
    </select>

</form>
</body>