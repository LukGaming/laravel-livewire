<form wire:submit.prevent="AddComment">
    <div class="container">
        <input type="text" name="mensagem" id="inputMensagem"
            style="margin-right: 10px;margin-top: 200px; margin-bottom:20px; width: 90%" wire:model.lazy="newComment">
        <input class="btn btn-primary" type="submit" value="Enviar">

        <div class="border border-dark rounded w-100 " id="mensagens">
            @foreach ($comments as $comment)
                <div class="mensagem mensagem border border-dark" style="margin:20px; padding: 5px">
                    {{ $comment['creator'] }}
                    {{ $comment['created_at'] }}
                    <hr>
                    {{ $comment['body'] }}
                </div>
            @endforeach
        </div>
    </div>
</form>
