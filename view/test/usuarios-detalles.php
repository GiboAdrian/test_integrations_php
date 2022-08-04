<h1 class="page-header">
    <?php echo $test->id != null ? "Información de " . $test->name : 'Sin registro'; ?>
</h1>


<a class="btn btn-primary pull-right" href="?c=test&a=Index">Regresar</a>
<br><br><br>

<div class="table-responsive">
    <table class="table table-striped table-hover" id="tabla">
        <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style=" background-color: #5DACCD; color:#fff">Usuario</th>
            <th style=" background-color: #5DACCD; color:#fff">Correo</th>
            <th style=" background-color: #5DACCD; color:#fff">Dirección</th>
            <th style=" background-color: #5DACCD; color:#fff">Teléfono</th>
            <th style=" background-color: #5DACCD; color:#fff">WebSite</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><?php echo $test->id; ?></td>
            <td><?php echo $test->name; ?></td>
            <td><?php echo $test->username; ?></td>
            <td><?php echo $test->email; ?></td>
            <td><?php echo $test->address->street . " " . $test->address->suite . " " . $test->address->city; ?></td>
            <td><?php echo $test->phone; ?></td>
            <td><?php echo $test->website; ?></td>
            <td>
                <a class="btn btn-success" href="?c=test&a=Posts&id=<?php echo $test->id; ?>">Posts</a>
            </td>
            <td>
                <a class="btn btn-primary" href="?c=test&a=ToDos&id=<?php echo $test->id; ?>">Tareas</a>
            </td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>