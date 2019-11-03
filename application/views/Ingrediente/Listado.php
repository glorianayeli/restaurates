<div class="row mb-5">
    <div class="col-12">
        <h2>
            Listado de ingredientes
        </h2>
        <span>
            Se encontraron <?php echo($totalRegistros); ?> ingredientes
        </span>
    </div>
</div>
<div class="row">
    <table class="table table-bordered col-12">
        <thead>
            <tr>
                <td>Ingrediente</td>
                <td>Unidad</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($registros as $ingrediente):
            ?>
                <tr>
                    <td>
                        <?php echo($ingrediente['in_nombre']); ?>
                    </td>
                    <td class="text-center">
                        <?php echo($ingrediente['in_unidad']); ?>
                    </td>
                    <td class="text-center">

                    </td>
                </tr>
            <?php 
                endforeach;
            ?>
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-12">
        <nav aria-label="Page navigation example">
            <?php if(isset($links)): ?>
                <?php echo $links ?>
            <?php endif; ?>
        </nav>
    </div>
</div>