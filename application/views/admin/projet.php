  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Tables
        <small>projet table</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Projet</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <p class="box-title">Nos projet</p>
               
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
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Titre projet</th>
                  <th>Description</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Controle</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $row) { ?>
                <tr>
                  <td><?php echo $row -> id; ?></td>
                  <td><?php echo $row -> title; ?></td>
                  <td><?php echo $row -> description; ?></td>
                  <td><?php echo $row -> content; ?></td>
                  <td>
<img src="<?php echo base_url() . 'assets/images/uploads/'. $row -> image; ?>" width="100px">
                  </td>
                   <td>
                  <a href="<?php echo base_url('Admin/Crud/edit_projet') ?>/<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('Admin/Crud/delete_projet') ?>/<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
               <?php } ?>
          
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Titre projet</th>
                  <th>Description</th>
                  <th>content</th>
                  <th>Image</th>
                  <th>Controle</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="container mt-3">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Ajouter un service</h4>
             
            </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('Admin/Crud/insert_validation_projet'); ?>" method="post"> 
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
 
                  <textarea name="description" type="text" style="height: 120px"  class="form-control" placeholder="Commentaire ...">
                    
                  </textarea>
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