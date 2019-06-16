<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel QR Code Example</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
    <h3>Laravel QR Code Example</h3>

    <?php echo QrCode::size(300)->generate('jembut keriting');; ?>


    <p>MyNotePaper</p>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\cobaqr\resources\views/qrcode.blade.php ENDPATH**/ ?>