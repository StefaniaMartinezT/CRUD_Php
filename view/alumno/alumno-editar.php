<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo aspirante'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">Aspirantes</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo aspirante'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese nombres del aspirante" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $alm->Apellido; ?>" class="form-control" placeholder="Ingrese los apellidos del aspirante" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="Documento" value="<?php echo $alm->Documento; ?>" class="form-control" placeholder="Ingrese documento del aspirante" data-validacion-tipo="requerido|max:15" />
    </div>
    
    <div class="form-group">
        <label>Sexo</label>
        <select name="Sexo" class="form-control">
            <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
            <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input readonly type="text" name="FechaNacimiento" value="<?php echo $alm->FechaNacimiento; ?>" class="form-control datepicker" placeholder="Ingrese la fecha de nacimiento del aspirante" data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>