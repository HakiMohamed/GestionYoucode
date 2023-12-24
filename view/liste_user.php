<?php 

$title ="liste of users";
?>
<?php
ob_start(); ?>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b><?=$title?></b></h2>
                    </div>
                       <div class="col-sm-7" align="right">
                       <a href="index.php?action=create" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Ajouter utilisateur</span></a>
                       <a href="index.php?action=logout" class="btn btn-warning"><i class="material-icons">&#xE147;</i> <span>Logout</span></a>
                                   
                       

                       
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>nom</th>
                        <th>prenom</th>                       
                        <th>Email</th>
                        <th>role</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                 foreach($result as $res):  ?>
                   
                    <tr>
                        <td><?=$res->getNom()?></td>
                        <td><?=$res->getPrenom()?></td>
                        <td><?=$res->getEmail()?></td>
                        <td><?=$res->getRole()?></td>
                          
                        <td>
                           
                            <a href="index.php?editid=<?=$res->getId()?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>edit</a>
                            <a href="index.php?delid=<?=$res->getId()?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');">delete<i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>

<!-- If no records found -->
<?php   if (count($result) == 0): ?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>       <?php  endif; ?>         
                </tbody>
            </table>
       
        </div>
    </div>
</div>   

<?php $body=ob_get_clean(); ?>
<?php
include_once 'include/nav_bar.php';
?>
