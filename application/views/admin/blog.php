
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mon blog
        <small>Liste de blog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Liste blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       
      <section class="content">
      <div class="box">
        <div class="box-header with-border">
              <h3 class="box-title">Blog Table</h3>
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
        add blog
           </button> 
        </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Auteur</th>
                  <th>Domaine</th>
                  <th>Categorie</th>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Contenu</th>
                  <th>Image</th>
                  <th>Controle</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $row) { ?>
                <tr>
                  <td><?php echo $row -> id; ?></td>
                  <td><?php echo $row -> auteur; ?></td>
                  <td><?php echo $row -> gradeAuteur; ?></td>
                  <td><?php echo $row -> categorie; ?></td>
                  <td><?php echo $row -> title; ?></td>
                  <td><?php echo $row -> description; ?></td>
                  <td><?php echo $row -> content; ?></td>
                  <td>
<img src="<?php echo base_url() . 'assets/images/uploads/'. $row -> image; ?>" width="100px">
                  </td>
                   <td>
                   <a href="<?php echo base_url('Admin/Crud/blog_detail') ?>/<?php echo $row->id; ?>"><i class="fa fa-folder-open"></i></a>
                  <a href="<?php echo base_url('Admin/Crud/edit_blog') ?>/<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('Admin/Crud/delete_blog') ?>/<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
               <?php } ?>
          
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Auteur</th>
                  <th>Domaine</th>
                  <th>Categorie</th>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Contenu</th>
                  <th>Image</th>
                  <th>Controle</th>
                </tr>
                </tfoot>
              </table>
            </div>

            <!-- /.box-body -->

      </div>
    </section>
<!-- modal  -->


    <div class="container mt-3">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Publication du blog</h4>
             
            </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('Admin/Crud/insert_validation_blog'); ?>" method="post"> 
          <span class="text-danger"><?php echo $this->session->flashdata("error"); ?></span> 
            <div class="modal-body">
            <div class="input-group" style="width: 100%;"> 
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                  <input type="text" name="auteur" placeholder="Auteur ..." class="form-control"> 
                </div>
                <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa fa-sticky-note"></i>
                  </div>
                  <input type="text" name="domaine" placeholder="Domaine Auteur ..." class="form-control"> 
                </div>
                <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa fa-tags"></i>
                  </div>
                  <input type="text" name="categorie" placeholder="Categorie blog ..." class="form-control"> 
                </div>
                <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                  <input type="text" name="title" placeholder="Titre blog ..." class="form-control"> 
                </div>
                <div class="input-group" style="width: 100%;">
                  <div class="input-group-addon">
                    <i class="fa  fa-commenting"></i>
                  </div>
                  <textarea name="description" placeholder="Description ..." style="height: 110px;" class="form-control">
                  </textarea> 
                </div>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-commenting"></i>
                  </div>
                  <textarea name="content" placeholder="Contenu ..." style="height: 110px;"  class="form-control">
                    
                  </textarea>
                </div>
                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Choix image
                  <input type="file" name="attachment">
                </div>
              </div>
         
              <hr>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submitForm" id="submitForm" value="Upload" class="btn btn-primary bg-navy btn-flat">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
</div>

<!-- /modal -->

      <!-- /.row -->
    </section>
    <!-- /.content -->


  </div>




  <!-- /.content-wrapper -->