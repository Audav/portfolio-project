<?php

include('includes/head.html');
require ('includes/php-setup.php');

?>

<body>

<div class="container" id="main">
    <!-- Jumbotron Header -->
    <div class="jumbotron">
        <h1 class="display-4">Aubrey's Guestbook</h1>
    </div>

    <?php
    include('includes/navbar.html');
    ?>

    <!-- Form -->
    <form action="confirm.php" method="post" id="guestform">

        <!-- Contact Information -->
        <fieldset class="form-group border p-2 row">
            <legend>Contact Info</legend>
            <div class="form-group col-6">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname">
                <span class="err" id="err-fname">Please enter a first name</span>
            </div>
            <div class="form-group col-6">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname">
                <span class="err" id="err-lname">Please enter a last name</span>
            </div>
            <div class="form-group col-6">
                <label for="job">Job Title:</label>
                <input type="text" class="form-control" id="job" name="job">
            </div>
            <div class="form-group col-6">
                <label for="company">Company:</label>
                <input type="text" class="form-control" id="company" name="company">
            </div>
            <div class="form-group col-6">
                <label for="linkedin">Linkedin URL:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin">
                <span class="err" id="err-linkedin">Please enter a valid Linkedin url</span>
            </div>
            <div class="form-group col-6">
                <label for="email">Email Address:</label>
                <input type="text" class="form-control" id="email" name="email">
                <span class="err" id="err-email">Please enter a valid email address</span>
            </div>
        </fieldset>

        <!-- How We Met -->
        <fieldset class="form-group border p-2 row">
            <legend>How We Met</legend>
            <div class="form-group col-6">
                <label for="choosehow">How Did We Meet?</label>
                <select id="choosehow" class="form-control" name="choosehow">
                    <option value="none">Choose...</option>
                    <option value="meetup">Meetup</option>
                    <option value="jobfair">Job Fair</option>
                    <option value="havenot">We haven't met yet</option>
                    <option value="other">Other</option>
                </select>
                <span class="err" id="err-choosehow">Please select an option</span>
            </div>
            <div class="form-group col-6">
                <label for="ifother">If you chose Other, please specify</label>
                <input type="text" class="form-control" id="ifother" name="ifother">
                <span class="err" id="err-ifother">Please enter how we met</span>
            </div>
            <div class="form-group col-12">
                <label for="message">Message:</label>
                <textarea class="form-control" rows="3" id="message" name="message"></textarea>
            </div>
        </fieldset>

        <!-- Mailing List -->
        <fieldset class="form-group border p-2 row">
            <legend>Mailing List</legend>
            <div class="form-check col-12">
                <label class="form-check-label" >
                    <input class="form-check-input" type="checkbox" value="mailing"
                           id="check" name="mailing[]">Please add me to your mailing list!
                </label>
            </div>
            <div class="col-12">
                <label>Choose an email format:</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"
                               id="html" name="format" value="html">HTML
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"
                               id="text" name="format" value="text">Text
                    </label>
                </div>
                <span class="err" id="err-format">Please select an option</span>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary btn-default">Submit</button>

    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="script/jquery.slim.min.js"></script>
<script src="script/popper.min.js"></script>
<script src="script/bootstrap.min.js"></script>
<script src="script/guestbook_script.js"></script>

</body>
</html>