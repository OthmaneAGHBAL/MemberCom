


<form action="Profile.php" method="Post" enctype="multipart/form-data">
    <div class="row ">
        <div class="col-md-6"><label class="labels">Fist Name</label><input type="text" name="fname" class="form-control" placeholder="<?php echo $row['fname']; ?>" value=""></div>
        <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="lname" class="form-control" value="" placeholder="<?php echo $row['lname']; ?>"></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 mb-2"><label class="labels">Old Password</label><input type="text" name="oldpass" class="form-control" placeholder="enter password..." value=""></div>
        <div class="col-md-12 mb-2"><label class="labels">New Password</label><input type="text" name="newpass" class="form-control" placeholder="enter password..." value=""></div>
        <div class="col-md-12 mb-2"><label class="labels">Work</label><input type="text" name="work" class="form-control" placeholder="your work ?" value=""></div>
    </div>
    <div class="field image"><label for="image">Image de Profil*</label><input type="file"  name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required class="form-control" ></div>
    <div class="mt-4 text-center"><input type="submit" class="btn btn-primary profile-button" name="submit" value="Enregistrer"></input></div>
</form>