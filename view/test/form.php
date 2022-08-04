<h1 class="page-header">
    Nueva Tarea
</h1>

<a class="btn btn-primary pull-left" href="?c=test&a=ToDos&id=<?php echo $userId; ?>">Regresar</a>
 
<form id="frm-todo" action="?c=test&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="userId" value="<?php echo $userId; ?>" />
    <div class="form-group">
        <label>Título</label>
        <input type="text" name="title" value="" class="form-control" placeholder="Ingrese el título de la tarea" required>
    </div>
    
    <div class="form-group">
        <label>Completa</label>
        <input type="checkbox" name="isCompleted" value="1">
    </div>        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
 
<script>
    $(document).ready(function(){
        $("#frm-todo).submit(function(){
            return $(this).validate();
        });
    })
</script>