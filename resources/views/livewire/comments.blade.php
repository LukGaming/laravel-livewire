<form  wire:submit.prevent="AddComment">
    
<div class="container" style="margin-top: 200px;">
    @if ($errors->any())
    <div class="alert alert-danger w-25">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <input type="text" name="mensagem" id="inputMensagem" 
            style="margin-right: 10px; margin-bottom:20px; width: 93%" wire:model.lazy="newComment">
        <input class="btn btn-primary" type="submit"   value="Enviar">
    
        <div class="border border-dark rounded w-100 " id="mensagens">
                @foreach ($comments->reverse() as $comment)
                <div class=" mensagem mensagem border border-dark " aria-hidden="true" style="margin:20px; padding: 5px">
                    <div class="d-flex justify-content-end">
                    <button type="button" class="close bg-light border border-success" wire:click="removeComment({{$comment->id}})" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>               
                    </div>
                    {{$comment['creator']}} 
                    {{$comment['created_at']}}<hr>
                    {{$comment['body']}}
                </div>
                @endforeach
        </div>
    </div>
</form>
