 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
              <p class="box-title">Nos info</p>
               
              <?php 
              if ($this->session->flashdata('success')) { ?>
               
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                <?php echo $this->session->flashdata("success"); ?>
              </div>
             <?php } elseif($this->session->flashdata('error')) { ?> 
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo $this->session->flashdata("error"); ?>
              </div>
              
            <?php   } ?>

              
              <button type="button" style="left: 70%" class="btn btn-primary bg-navy btn-flat" data-toggle="modal" data-target="#myModal">
        add information
           </button>
             
        </div> 
          <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Titre</th>
                  <th>Commentaire</th>
                  <th>Image</th>
                 <th style="width: 80px">Controle</th>
                </tr>
                <?php foreach ($result as $row) { ?>
                <tr>
                  <td><?php echo $row -> id; ?></td>
                  <td><?php echo $row -> title; ?></td>
                  <td><?php echo $row -> content; ?></td>
                  <td>
<img src="<?php echo base_url() . 'assets/images/uploads/'. $row -> image; ?>" width="200px">
                  </td>
                   <td>
                  <a href="<?php echo base_url('Admin/Crud/edit_about') ?>/<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('Admin/Crud/delete_about') ?>/<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
               <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->

            <div class="box-footer clearfix">
              <button type="submit" class="btn btn-primary bg-navy btn-flat">Plus</button>
            </div>

      </div>
    </section>
<div class="container mt-3">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Ajouter une information sur nous</h4>
             
            </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('Admin/Crud/insert_validation'); ?>" method="post"> 
          <span class="text-danger"><?php echo $this->session->flashdata("error"); ?></span> 
            <div class="modal-body">
            <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                  <input type="text" name="title" placeholder="Entrer le titre ..." class="form-control"> 
                </div>
                <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa  fa-commenting"></i>
                  </div>
 
                  <textarea name="content" type="text" style="height: 140px"  class="form-control" placeholder="Commentaire ...">
                    
                  </textarea>
                </div>
                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Choix image
                  <input type="file" name="attachment" class="form-control"/>
                </div>
              </div>
         
              <hr>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" name="submitForm" id="submitForm" value="Upload" class="btn btn-primary bg-navy btn-flat"/>
            </div>
        </form>
          </div>
        </div>
      </div>
</div>

    
  </div>
  <!-- /.content-wrapper -->