<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 

    $results = $crud->getSpecialties();

?>
   
   
  

    <form method="post" action="success.php" enctype="multipart/form-data">
    <br>

    <h4 class="text-center"> Anime Central Subcription List </h4>
    <div class="card-body">
    <div class="form-group" >
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['gender_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?> 
            </select>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input required type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="genre">Favourite Anime Genre</label>
            <select class="form-control" id="genre" name="genre">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['genre_id'] ?>"><?php echo $r['anime']; ?></option>
                <?php }?> 
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-groupform-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>

        <br/>
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
            <label class="custom-file-label" for="avatar">Upload Favourite Anime Character</label>
            <small id="avatar" class="form-text text-danger">File Upload Is Optional</small>
        </div>
        <br/>
       
        <button type="submit" name="submit" class="btn btn-primary text-white btn-block" style="width: 67rem;">Submit</button>
    </div>

 </form>



<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

