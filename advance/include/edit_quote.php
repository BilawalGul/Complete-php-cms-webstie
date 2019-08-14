 <div class="container-fluid">
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                         <?php 
                         if(isset($_GET['id'])){
                            $id=$_GET['id'];
                          
                         ?> 
                        <?php 

                            if(isset($_POST['q_submit'])){
                                $quotes=$_POST['quotes'];
                                $color=$_POST['color'];
                                $author=$_POST['author'];
                                date_default_timezone_set('Asia/Karachi');
                                $date_time=date('Y-m-d H:m:s');

                    $query="UPDATE quotes SET author='$author' , text='$quotes' , color='$color' , date_time='$date_time' where id='$id'";
                        $query_run=mysqli_query($connection ,$query);
                        header('Location:addquotes.php');
                    if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }else{
echo 
'
    
';
                    }

                            }

                        ?>

                        <form method="POST" action="">
                            <?php 
                                $query="SELECT * FROM quotes where id='$id'";
                                if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }else{
echo 
'
    
';
                    
                                $query_run=mysqli_query($connection , $query);
                                while($rows=mysqli_fetch_array($query_run)){
                                  $author=$rows['author'];
                                  $txt=$rows['text'];
                                  $color=$rows['color'];
                                  $date=$rows['date_time'];
                                ?>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Author</b>
                                                <input type="text" name="author" class="form-control" placeholder="author" value="<?php echo $author;?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Header color</b>
                                                <select name="color">
                                <option value="bg-red">bg-red</option>
                                <option value="bg-cyan">bg-cyan</option>
                                <option value="bg-green">bg-green</option>
                                <option value="bg-orange">bg-orange</option>
                                <option value="bg-blue-grey">bg-blue-grey</option>
                                <option value="bg-pink">bg-pink</option>
                                <option value="bg-light-blue">bg-light-blue</option>
                                <option value="bg-amber">bg-amber</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Quotes</b>
                                                <textarea cols="50" rows="5" name="quotes" required>
                                                   <?php echo $txt;?>
                                                </textarea>
                                            </div>
                                        </div>
                                    <?php } } } ?>
                                        <div class="form-group">
                                            
                                                <button type="submit" data-color="red" class="btn bg-red waves-effect" name="q_submit">Update Quotes</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form> 




                        </div>
                    </div>
                </div>
            </div>
        </div>