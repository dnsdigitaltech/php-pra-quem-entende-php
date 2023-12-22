<a href="?page=create_user" class="btn btn-success">Cadastrar user</a>
<h2>Página inicial</h2>
<?=get('message')?>
<div
    class="table-responsive"
>
    <table
        class="table table-striped table-hover table-borderless table-primary align-middle"
    >
        <thead class="table-light">
            <tr><th colspan="5">Lista de Usuários</th></tr>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php 
                $users = all('users');
                foreach($users as $user):
            ?>
            <tr
                class="table-primary"
            >
                <td scope="row"><?=$user->id?></td>
                <td><?=$user->name?> <?=$user->lastname?></td>
                <td><?=$user->email?></td>
                <td><a href="?page=edit_user&id=<?=$user->id?>" class="btn btn-info">Editar</a></td>
                <td><a href="?page=delete_user&id=<?=$user->id?>" class="btn btn-danger">Deletar</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</div>
