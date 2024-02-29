<?php
require_once("layouts/header.php");

if (count($data) > 0): ?>
    <div class="row">
        <?php foreach ($data as $key => $value) 
            foreach ($value as $v): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $v['name']; ?></h5>
                            <a href="projects/show.php?id=<?php echo $v['id']; ?>" class="btn btn-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
        <?php endforeach ?>
    </div>
<?php else: ?>
    <p class="text-center">No hay proyectos creados.</p>
<?php endif; ?>

<?php require_once("layouts/footer.php");