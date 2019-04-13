<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

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
            <!-------------------------------------->
           
        </div>

        </div>

        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>

