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
                    <form action="app.php" method="post">
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
                    <object data="output.php?firstname=<?if (isset($_POST["firstname"])) echo $_POST["firstname"];?>&lastname=<?if (isset($_POST["lastname"])) echo $_POST["lastname"];?>" 
                        type="application/pdf" width="100%" height="800px"> 
                        <p>It appears you don't have a PDF plugin for this browser.
                        No biggie... you can <a href="resume.pdf">click here to
                        download the PDF file.</a></p>  
                    </object>
                </div>
            </div>
        </body>
    </html>