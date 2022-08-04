<h1 class="page-header">Posts</h1>

<a class="btn btn-primary pull-right" href="?c=test&a=Detalles&id=<?php echo $userId; ?>">Regresar</a>
<br><br><br>

<div class="row">
    <?php foreach ($posts as $data): ?>
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title"><?php echo "Post: ". $data->title; ?></h5>
                <p class="card-text"><?php echo $data->body; ?></p>
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Comentarios</h5>
                        <br>
                        <?php foreach ($this->model->ObtenerComentarios($data->id) as $comentario): ?>
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                    <p class="card-text">Nombre: <?php echo $comentario->name; ?></p>
                                    <p class="card-text">Email: <?php echo $comentario->email; ?></p>
                                    <p class="card-text"><?php echo $comentario->body; ?></p>
                                    <hr>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <?php endforeach; ?>
</div>

</body>
</html>