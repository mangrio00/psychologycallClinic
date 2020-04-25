<div class="container">
    <div class="row mt-3">
        <center>
            <div class="col">
                <div class="card">
                    <br><br>
                    <br>
                    <div class="head" style="width:500px;background-color: #588da8;border-radius: 5px 5px 5px 5px ">
                        <center>
                            <h1 style="margin: 20px">CHANGE PASSWORD </h1>
                        </center>
                    </div>
                    <br>
                    <div class="card-body" style="width: 500px;background-color:#588da8;padding:2rem;border-radius: 5px 5px 5px 5px ">
                        <form method="POST" action="">
                            <div class="form-group">
                                <?php if ($this->session->flashdata('flash')) : ?>
                                    <div class="row mt-3">
                                        <div class="alert alert-danger alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong><?= $this->session->flashdata('flash'); ?></strong>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('oldpass'); ?></small>
                                <label for="oldapass">Current Password</label>
                                <input type="password" class="form-control" id="oldpass" placeholder="Password" name="oldpass">
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('newpass'); ?></small>
                                <label for="newapass">New Password</label>
                                <input type="password" class="form-control" id="newpass" placeholder="New Password" name="newpass">
                            </div>
                            <div class="footer">
                                <a class="btn btn-warning" id="back" href="<?= base_url(); ?>PasienC/profilePasien/">Back To Your Account</a>
                                <input type="submit" class="btn btn-primary" id="add" value="Change Password">
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </center>
    </div>
</div>