<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php'; ?>


<div class="container">
    <div class="form--box">
        <div class="row">
            <div class="column-grid-xs-12 text-center">
                <h2>Send us a suggestion</h2>
            </div>

            <div class="column-grid-sm-8 column-grid-sm-offset-2">
                <form name="suggestion-form" action="functions/email_sender.php" onsubmit="return validate(this)" method="post">
                    <div class="form-group">
                        <label for="email">Your email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="suggestion">Suggestion:</label>
                        <textarea name="suggestion" cols="40" rows="5"></textarea>
                    </div>

                    <input type="submit" class="btn btn-simple" value="Send">

                </form>
            </div>
        </div>
    </div>

</div>
</body>

<script type="text/javascript">

    function validate(form){

        var email = document.forms["suggestion-form"]["email"].value;
        var suggestion = document.forms["suggestion-form"]["suggestion"].value;

        if (email.length < 1) {
            alert("You must enter a name);
            return false;
        }
        if (suggestion.length < 1) {
            alert("The suggestion field is empty");
            return false;
        }



    }

</script>

</html>

