<?php
    if(isset($_POST['upd_skill'])){
        $skill=$_POST['skill'];
        $def_username=$_SESSION['default_username'];
        $query="UPDATE profile SET skilles='$skill' WHERE default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        if(!$query_run){
            die("QUERY FAILED". mysqli_error($connection));
        }else{
            echo'<b style="color:green;">Successfully Update</b>';
        }
    }
?>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h4>Update Your Skill</h4>
                    <?php
                        $def_username=$_SESSION['default_username'];
                        $query="SELECT * FROM profile where default_username='$def_username'";
                        $query_run=mysqli_query($connection ,$query);
                        $row=mysqli_fetch_array($query_run);
                        $skill=$row['skilles'];
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                         <label>Skills (One Or Two Skills only)</label>
                         <input type="text" class="form-control" name="skill" placeholder="one or two skill only" value="<?php echo $skill;?>"required>
                        </div>
                        <div class="form-group">
                         <button class="btn btn-danger" type="submit" name="upd_skill">Update Skill</button>
                        </div>
                    </form>
                </div>