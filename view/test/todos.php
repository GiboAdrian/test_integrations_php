<h1 class="page-header">Tareas</h1>

<a class="btn btn-primary pull-left" href="?c=test&a=Detalles&id=<?php echo $userId; ?>">Regresar</a>
<a class="btn btn-primary pull-right" href="?c=test&a=Nuevo&id=<?php echo $userId; ?>">Nueva Tarea</a>
<br><br><br>

<div class="row">
    <?php foreach ($todos as $data):
        $completed = $data["completed"] != null ? "Completa" : 'Sin Completar';
        ?>
        <div class="col-md-12">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Tarea: ". $data["id"]; ?></h5>
                    <p class="card-text">Título: <?php echo $data["title"]; ?></p>
                    <p class="card-text">Completa: <?php echo $completed ?></p>
                </div>
            </div>
            <br>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>