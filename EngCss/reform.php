<!DOCTYPE html>
<html>

    <head>
        <title> This is where our form is been processed </title>
    </head>

    <body> 
        <h1> Thank You <?php $_POST["applicant_name"] ?>

        <h3> We thank you for registering with us, be less assured that your information is highly 
        secured and you can access it any time you want. </h3>

        <dl>
            <dt> Name </dt>
            <dd><?php echo $_POST["applicant_name"] ?> </dd>
        </dl>
    </body>
</html>