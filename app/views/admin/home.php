<!-- Hello <?=$data['name']?> -->
<?php include_once '../app/views/header/adminheader.php' ?>

<section>
  <h1>Home - <?php echo $data['user']->fname ?></h1>
  <section style="overflow-x:hidden;overflow-y:hidden" width="50px">
      <img width="50px" src="<?php echo Globals::baseUrl() ?>/<?php echo $data['user']->prof_pic ?>" alt="">
      <p style="font-size:10px;margin-top:-4px;margin-bottom:2px;"><?php echo $data['user']->email ?></p>
  </section>
  <a href="<?php echo Globals::baseUrl() ?>/public/adminhome/logout">
      <button type="button" name="logout">Logout</button>
  </a>
  <hr>
</section>

<section class="">
    <!-- <h3>Add Admin/Manager</h3> -->
    <?php if( !empty($data['success_msg']) ): ?>
        <p style="color:green"><?=$data['success_msg']?></p>
    <?php endif; ?>
    <?php if( !empty($data['error_msg']) ): ?>
        <p style="color:red"><?=$data['error_msg']?></p>
    <?php endif; ?>
    <!-- <form enctype="multipart/form-data" action="<?php echo Globals::baseUrl(); ?>/public/adminhome/adduser" method="post">
        <input type="text" name="fname" value="" placeholder="First name" required>
        <input type="text" name="mname" value="" placeholder="Middle name" required>
        <input type="text" name="lname" value="" placeholder="Last name" required>
        <input type="email" name="email" value="" placeholder="Email" required>
        <br>
        <input type="text" name="contact" value="" placeholder="Contact #" required>
        <br>
        <textarea name="address" rows="3" cols="80" placeholder="Address" required></textarea>
        <br>
        <select class="" name="gender" required>
            <option value="">Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select class="" name="role" required>
            <option value="">Position</option>
            <?php foreach($data['roles'] as $role): ?>
                <option value="<?php echo $role['id'] ?>"><?php echo $role['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="password" name="password" value="" placeholder="Password" required>
        <input type="password" name="confirm_password" value="" placeholder="Confirm Password" required>
        <br>
        <label style="font-size:11px;">Select profile picture (175px by 200px)</label><br>
        <input type='file'id="file" name="prof_pic" required>
        <br>
        <button type="submit" name="submit">Add</button>
    </form> -->

    <table>
      <tr>
        <th>Patient's Name First/Middle/Last</th>
        <th>Marital Status</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Contact</th>
        <th>email</th>
        <th>Birthdate</th>
        <th>Age</th>
        <th>SSS #</th>
      </tr>

        <?php foreach( $data['patients'] as $p ): ?>
        <tr>
            <td><?php echo $p['fname'] . " " . $p['mname'] . " " . $p['lname'] ?></td>
            <td><?php echo $p['maritalstatname'] ?></td>
            <td><?php echo $p['gendername'] ?></td>
            <td><?php echo $p['st_address'] . ", " . $p['city'] . " " . $p['state'] . " " . $p['zipcode'] ?></td>
            <td>
                Home: <?php echo $p['homephone'] ?><br>
                Work: <?php echo $p['workphone'] ?><br>
                Cell: <?php echo $p['cellphone'] ?>
            </td>
            <td><?php echo $p['email'] ?></td>
            <?php

            $timestamp = strtotime($p['birth']);
            $date_formated = date("jS F, Y", $timestamp);

            ?>
            <td><?php echo $date_formated; ?></td>
            <td><?php echo $p['age'] ?></td>
            <td><?php echo $p['sss_no'] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</section>

</body>
</html>
