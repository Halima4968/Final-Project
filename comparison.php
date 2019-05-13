<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
    get_bread();
    if(!empty($_POST)){
    $id=$_GET['bankk'];
    $id2=$_GET['poilicy'];}
?>
        <section id="contact">
            <div class="container bgc">
                <div class="row">
                    <div class="col-sm-12 heading p0">
                       <h2>Comparison</h2>
                    
                    <div class="col-md-2"></div>
                    <div class="col-md-5 table2_cmp">
                        <div class="search_cmp">
                            <form class="navbar-form navbar-left" role="search">
                                <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                  <select name="bankk">
                                    <?php
                                        $sel = "SELECT * FROM bank";
                                        $qqy = mysqli_query($con, $sel);
                                        while ($per = mysqli_fetch_array($qqy)){?>
                                        <option value="<?= $per['bank_id']; ?>"><?= $per['b_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                  <select name="poilicy">
                                    <?php
                                        $sel = "SELECT * FROM poilicy";
                                        $qqry = mysqli_query($con, $sel);
                                        while ($peer = mysqli_fetch_array($qqry)){?>
                                        <option value="<?= $peer['poilicy_id']; ?>"><?= $peer['poilicy_name']; ?></option>
                                        <?php } ?>
                                </select>
                                
                                    <input type="submit" value="Search">
                            </form>
                                
                        </div>
                            <?php
                                $s = "SELECT * FROM bank_policy NATURAL JOIN bank NATURAL JOIN poilicy WHERE bank_id='$id' AND poilicy_id='$id2'";
                                $qtqy = mysqli_query($con, $s);
                                while ($pere = mysqli_fetch_array($qtqy)){?>
                            
                        <table class="table table-hover table-striped table-responsive view_table_cus">
                            
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>
                                    parvez
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>
                                    parvez
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>
                                    parvez
                                </td>
                            </tr>
                        </table>
                                    <?php } ?>
                    </div>
                    </div>
                    
                </div>
            </div>
        </section><!-- contact ends -->
       
        
        <?php
            get_footer();
        ?>