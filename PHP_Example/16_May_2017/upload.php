<html>
    <head>
        <title>PHP File upload</title>
    </head>
    <body>
        <form enctype="multipart/form-data" method="post" action="processUpload.php">
            <label>Attachment</label> <br>
            <input type="file" name="attachment"> <br><br>
<!--            <label>Name</label>-->
<!--            <input type="text" name="name">-->
            <button type="submit">Upload</button>

        </form>
    </body>
</html>