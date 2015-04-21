<?php
include 'proCrypt.php';

// Encrypt the string

if ($_POST["encrypt"]) {
    $message = $_POST['message'];
    $key = $_POST['key'];

// a new proCrypt instance
    $crypt = new proCrypt;

// encrypt the string
    $encoded = $crypt->encrypt($message, $key);
    echo '<div>Encrypted Message</div>' . $encoded;

    // Decryption  The String
} elseif ($_POST["decrypt"]) {
    $decMessage = $_POST['encMessage'];
    $key = $_POST['key'];

// a new proCrypt instance
    $crypt = new proCrypt;
    $decoded= $crypt->decrypt($decMessage, $key);
        echo '<div>Decrypted Message</div>' . $decoded;

}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title>StarWareEnc-De </title>

        <link rel="shortcut icon" href="assets/images/gt_favicon.png">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="assets/css/main.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="home">

        <!-- container -->
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <button type="button" class="btn btn-primary" id="encryption">Encryption</button>
                <button type="button" class="btn btn-primary" id="decryption">Decryption</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal hide" role="form" method="post" id="decryption-form" action="index.php">


                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" rows="4" name="encMessage" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="human" class="col-sm-2 control-label">Enter Your Key</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="key" name="key" placeholder="Key">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="decrypt" type="submit" value="Decrypt" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <! Will be used to display an alert to the user>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-body">
                <form class="form-horizontal hide" role="form" method="post" id="encryption-form" action="index.php">


                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" rows="4" name="message" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="human" class="col-sm-2 control-label">Enter Your Key</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="key" name="key" placeholder="Key">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="encrypt" type="submit" value="Encrypt" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <! Will be used to display an alert to the user>
                        </div>
                    </div>
                </form>
            </div>

        </div>	<!-- /container -->


        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>


        <script type="text/javascript">
            var enc = false;
            var dec = false;


            $('#decryption').click(function () {
                if (dec) {
                    doeven();
                } else {
                    doodd();
                }

                dec = !dec;
            });
            $('#encryption').click(function () {
                if (enc) {
                    doEven();
                } else {
                    doOdd();
                }

                enc = !enc;
            });

            function doodd() {
                $('#decryption-form').removeClass('hide')
            }

            function doeven() {
                // second click, fourth click, sixth click, etc
                $('#decryption-form').addClass('hide')

            }
            function doOdd() {
                $('#encryption-form').removeClass('hide')
            }

            function doEven() {
                // second click, fourth click, sixth click, etc
                $('#encryption-form').addClass('hide')

            }

        </script>
    </body>

</html>