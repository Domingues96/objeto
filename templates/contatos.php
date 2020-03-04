<p>Preencha o formulário abaixo para entrar em contato com a equipe do site.</p>

{{FORMERROR}}

<p class="center text-red small">Todos os campos são obrigatórios!</p>

<form action="{{SELF}}" method="post">
    <input type="hidden" name="send" value="send">
    <p>
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Seu nome completo" value="{{FORMNAME}}">
    </p>
    <p>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" placeholder="Seu e-mail. Ex.: usuario@provedor.com" value="{{FORMEMAIL}}">
    </p>
    <p>
    <label for="subject">Assunto:</label>
    <input type="text" name="sybject" id="sybject" placeholder="Assunto do seu contato" value="{{FORMSUBJECT}}">
    </p>
    <p>
    <label for="message">Mensagem:</label>
    <textarea name="message" id="message" placeholder="sua mensagem para a equipe do site">{{FORMMESSAGE}}</textarea>
    </p>
    <p>
        <label for="submit"></label>
        <button type="submit" id="submit" name="submit">Enviar</button>
    </p>
</form>