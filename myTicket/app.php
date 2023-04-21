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
            <div class="col-6" id="idEventTicketInformation">
                <div class="row">
                    <div class="col-12">
                        <h1>myTicket App</h1>
                        <h2><em>A simple PHP event ticket generator</em></h2>
                    </div>
                </div>

                <form action="app.php" method="post" class="row mt-3 g-3 align-items-center">
                    <div class="col-12">
                        <h3>Event information</h3>
                    </div>

                    <div class="col-3">
                        <label class="form-label" for="idEventname">Event name:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="idEventname" name="eventname" placeholder="e.g. BUGA MANNHEIM 23">
                    </div>

                    <div class="col-3">
                        <label class="form-label">Location:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="location" placeholder="e.g. Luisenpark Mannheim">
                    </div>

                    <div class="col-3">
                        <label class="form-label">Date/Time:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="datetime" placeholder="e.g. 06.06.2023">
                    </div>

                    <div class="col-12 gy-5">
                        <h3>Personal information</h3>
                    </div>

                    <div class="col-3">
                        <label class="form-label">First name:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="firstname" placeholder="e.g. Max">
                    </div>

                    <div class="col-3">
                        <label class="form-label">Last name:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="lastname" placeholder="e.g. Mustermann">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-6" id="idPdfOutput">
                <? foreach ($_POST as $key => $value)
                    echo "$key=$value&amp;" ?>

                    <object data="output.php?<? foreach ($_POST as $key => $value)
                    echo "$key=$value&" ?>" type="application/pdf" width="100%" height="800px">
                        <p>It appears you don't have a PDF plugin for this browser.
                            No biggie... you can <a href="resume.pdf">click here to
                                download the PDF file.</a></p>
                    </object>
                </div>
            </div>
        </div>
    </body>

    </html>