<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        text-align: center;
    }
</style>

<!-- Creates a simple form for the required inputs then submits to invoice.php -->
<body>
    <form action="invoice.php" method="post">
        <label for="fName">First Name</label>
        <br>
        <input type="text" name="fName">
        <br>
        <label for="mName">Middle Initial</label>
        <br>
        <input type="text" name="mName">
        <br>
        <label for="lName">Last Name</label>
        <br>
        <input type="text" name="lName">
        <br>
        <label for="price">Price</label>
        <br>
        <input type="text" name="price">
        <br>
        <label for="downPayment">Downpayment</label>
        <br>
        <input type="text" name="downPayment">
        <br>
        <label for="months">Months to pay</label>
        <br>
        <input type="text" name="months">
        <br>
        <input type="submit" value="Confirm">
    </form>
</body>

</html>