<h2>Cadastrar Usuário</h2>
<?=get('message')?>
<form action="/pages/forms/create_user.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Nome"
        />
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Sobrenome</label>
        <input
            type="text"
            class="form-control"
            name="lastname"
            id="lastname"
            placeholder="Sobrenome"
        />
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="E-mail"
        />
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input
            type="text"
            class="form-control"
            name="password"
            id="password"
            placeholder="Senha"
        />
    </div>
    <button
        type="submit"
        class="btn btn-primary"
    >
        Cadastrar
    </button>
    
</form>