<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';

    require_once 'db/conn.php'; 

    $results = $crud->getGenre();

    if(!isset($_GET['id']))
    {
      
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $subscribers = $crud->getSubscribersDetails($id);
    

    
?>

    <h1 class="text-center">Edit Record </h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $subscribers['subscriber_id'] ?>" />
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $subscribers['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $subscribers['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $subscribers['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="genre"> Favourite Anime Genre</label>
            <select class="form-control" id="genre" name="genre">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['genre_id'] ?>" <?php if($r['genre_id'] == $subscribers['genre_id']) echo 'selected' ?>>
                        <?php echo $r['anime']; ?>
                   </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" value="<?php echo $subscribers['emailaddress'] ?>" name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">Email will remain confidencial, unless requested by you to share.</small>
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" value="<?php echo $subscribers['contactnumber'] ?>" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">Phone number will remain confidencial.</small>
        </div>
        
        <a href="viewrecords.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-outline-dark btn-block">Save Changes</button>
    </form>

<?php } ?>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>