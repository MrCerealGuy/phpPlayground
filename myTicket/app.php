<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>myTicket</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>myTicket App</h1>
                    <h2>A simple PHP event ticket generator</h2>

                    <hr>

                    <form action="app.php" method="post">
                        <div class="mb-3">
                            <h3>Event information</h3>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event name:</label>
                            <input type="text" class="form-control" name="eventname">
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Location:</label>
                            <input type="text" class="form-control" name="location">
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Date/Time:</label>
                            <input type="text" class="form-control" name="datetime">
                        </div>

                        <div class="mb-3">
                            <h3>Personal information</h3>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">First name:</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last name:</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col">
                    <? foreach ($_POST as $key => $value) echo "$key=$value&amp;" ?>

                    <object data="output.php?<? foreach ($_POST as $key => $value) echo "$key=$value&" ?>"
                        type="application/pdf" width="100%" height="800px"> 
                        <p>It appears you don't have a PDF plugin for this browser.
                        No biggie... you can <a href="resume.pdf">click here to
                        download the PDF file.</a></p>  
                    </object>
                </div>
            </div>
        </body>
    </html>