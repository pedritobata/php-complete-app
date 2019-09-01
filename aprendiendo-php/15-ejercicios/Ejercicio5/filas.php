
 <tbody>
       <?php for($i=0; $i < sizeof($tabla["ACCION"]) ;$i++): ?>
        <tr>
            <?php foreach($cabecera as $head): ?>
                <td><?= $tabla[$head][$i] ?></td>
            <?php endforeach;  ?>
        </tr>
       <?php endfor; ?> 
  </tbody>
