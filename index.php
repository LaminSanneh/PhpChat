<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Php and Jquery Chat Application</title>
        <link rel="stylesheet" href="/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
        <style media="screen">
            .label-success{
                display: block;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-push-2 col-md-8">
                <h2>Php Jquery Chat Application</h2>
                <h3>Messages for <span class="username label label-primary" ></span></h3>
                <div class="row">
                    <form class="username-setter" action="index.html" method="post">
                        <div class="form-group">
                            <label for="">Set username</label>
                            <input type="text" name="name" value="" class="form-control username-input" >
                        </div>
                        <button class="btn btn-primary pull-right" type="submitbutton" name="button">Set</button>
                    </form>
                </div>
                <h3>Messages</h3>
                <ul class="messages-list">

                </ul>
                <form class="chatForm" action="index.html" method="post">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="button" id="message" name="message" class="form-control" value="">
                        </textarea>
                    </div>
                    <div class="">
                        <button type="submit" name="button" class="btn btn-primary pull-right" >Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    <script src="js/jquery.js" ></script>
    <script src="js/jquery.cookie.js" ></script>
    <script src="js/main.js" ></script>
</html>
