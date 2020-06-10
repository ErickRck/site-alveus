<div class="content-wrapper">
<section class="content">
    <div class="row">
      <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                   <h3 class="box-title">Modifier un service</h3>
              </div> 
              <form action="<?php echo base_url('Admin/Crud/update_service'); ?>/<?php echo $row->id;  ?>" enctype="multipart/form-data" method="post">
              
              <?php 
              if ($this->session->flashdata('error')) { ?>
                # code...
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo $this->session->flashdata("error"); ?>
              </div>
             <?php }

               ?>
                <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                  <input type="text" name="title" value="<?php echo $row->title; ?>" placeholder="Entrer le titre ..." class="form-control"> 
                </div>
                <div class="input-group"  style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa  fa-commenting"></i>
                  </div>
                  <textarea name="description" class="form-control" type="text" style="height: 140px" ><?php echo $row->description; ?></textarea>
                    
                  
                </div>
                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> 
                  <input type="file" name="attachment" class="form-control" value="<?php echo $row->image; ?>"/>
                </div>
              </div>
                

                <div class="input-group-btn" style="left: 70%;">
                    <button type="submit" value="update" class="btn btn-primary bg-navy btn-flat">Add</button>
                </div>
                
              </form>
            </div>
      </div>
    </div>
    </section>
  </div>