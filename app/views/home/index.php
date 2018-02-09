<?php include_once '../app/views/header/header.php' ?>

<form class="" action="" method="post">
    <label for="registration_date">Today's Date</label>
    <input type="date" name="registration_date" value="" placeholder="Todays date">

    <br>
    <br>

    <label for="">Patient's Information</label>

    <br>
    <?php foreach( $data['prefixnames'] as $pn ): ?>
        <input type="radio" name="prefixname" value="<?php echo $pn['id']; ?>"><?php echo $pn['prename'] ?>
    <?php endforeach; ?>
    <input type="text" name="patient_last_name" value="" placeholder="Patient's Last Name">
    <input type="text" name="fname" value="" placeholder="First Name">
    <input type="text" name="mname" value="" placeholder="Middle Name">

    <br>

    <input type="text" name="st_addr" value="" placeholder="Street Address">
    <input type="text" name="city" value="" placeholder="City">
    <input type="text" name="state" value="" placeholder="State">
    <input type="text" name="zipcode" value="" placeholder="Zipcode">

</form>

</body>
</html>
