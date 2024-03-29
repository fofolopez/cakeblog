<!-- File: /app/View/Posts/index.ctp  (edit links added) -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Agregar Comentario", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Accion</th>
        <th>Fecha de creacion</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
		
		
        <td>
			<?php
				echo $this->Form->postLink(
					'Borrar',
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' => 'Are you sure?')
				);
			?>
            <?php
                echo $this->Html->link(
                    'Editar',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>