<h1 class="page-header">Prueba Técnica Nuxiba</h1>
<br><br><br>

<div class="table-responsive">
    <table class="table table-striped table-hover" id="tabla">
        <thead>
        <tr>
            <th style= "background-color: #5DACCD; color:#fff">Id</th>
            <th style= "background-color: #5DACCD; color:#fff">Nombre</th>
            <th style="  background-color: #5DACCD; color:#fff">Usuario</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->model->Listar() as $data): ?>
            <tr>
                <td><?php echo $data->id; ?></td>
                <td>
                    <a href="?c=test&a=Detalles&id=<?php echo $data->id; ?>"><?php echo $data->name; ?></a>
                </td>
                <td><?php echo $data->username; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>