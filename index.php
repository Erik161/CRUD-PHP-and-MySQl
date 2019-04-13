<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php session_unset(); } ?> <!--SESSION_UNSET: nos sirve para limpiar los datos que tengo en sesion-->

        <div class="card card-body">
            <!--------------FORM------------------------>
            <form action="save_task.php" method="POST" >

                <div class="form-grup">
                    <input type="text" name="title" class="form-control"
                    placeholder="Task Title" autofocus>
                </div><br>

                <div class="form-grup">
                    <textarea name="description" id="" rows="2" class="form-control"
                    placeholder="Task Description"></textarea> <br>
                </div>

                <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task" >
            </form>
            <!--------------------------------------------->
            
        </div>

        </div>

        <div class="col-md-8">
            <table  class="table table-bordered" >
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead> 
            <tbody>
            <?php 
               $query = "SELECT * FROM  task"; //consulta para seleccionar todas las tareas que viene de la tabla task
            $result_tasks = mysqli_query($conn, $query );

            while($row = mysqli_fetch_array($result_tasks)) { ?>
                    <tr>
                        <td> <?php echo $row['title'] ?>  </td>
                        <td> <?php echo $row['description'] ?>  </td>
                        <td> <?php echo $row['created_at'] ?>  </td>
                        <td>
                            <a href="edit_task.php?id=<?php echo $row['id']?>" class="btn btn-secondary" >
                                <i class="fas fa-marker" ></i>
                            </a>

                            <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger" > 
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>
