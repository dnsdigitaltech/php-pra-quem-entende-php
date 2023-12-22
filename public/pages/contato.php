<h2>Contato</h2>
<?=get('message')?>
<div class="container">
    <form action="/pages/forms/contato.php" method="post">
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
            <label for="subject" class="form-label">Assunto</label>
            <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Assunto"
            />
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Mensagem</label>
            <textarea class="form-control" name="message" id="message" rows="10"></textarea>
        </div>
        
        <button
            type="submit"
            class="btn btn-primary"
        >
            Enviar
        </button>
        
        
    </form>
</div>
