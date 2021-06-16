@extends('layouts/dashboard')

@section('content')
@if(session('fail'))
<div class="alert alert-danger">{{session('fail')}}</div>
@endif
<div class="d-flex justify-content-between align-items-center">
    <h2 style="width: 100%;height:10%;text-align:center;">Ajouter un post </h2>

</div>
<div class="contentp">
    <form action="{{ url('dashboard/social-media/linkedin/post/add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label>Titre</label>
            <input type="text" class="form-control" name="text" placeholder="Entre votre texte ici...">
            <br>
            <label>Type du  post</label>
            <br>
            <script>
                var text = document.getElementById("rb_text");
                var article = document.getElementById("rb_article");
                var image = document.getElementById("rb_image");
                if(rb_text.checked){
                    
                }
                function content_type_toggle(elem){
                    var content_text = document.getElementById('post-text');
                    var content_image = document.getElementById('post-image');
                    var content_article = document.getElementById('post-article');
                    content_text.classList = [];
                    if(elem.checked){
                        switch(elem.value)
                        {
                            case 'image':
                                content_image.className = 'show-post';
                                content_text.className = 'hide-post';
                                content_article.className = 'hide-post';
                                break;
                            case 'text':
                                content_text.className = 'show-post';
                                content_image.className = 'hide-post';
                                content_article.className = 'hide-post';
                                break;
                            case 'article':
                                content_article.className = 'show-post';
                                content_text.className = 'hide-post';
                                content_image.className = 'hide-post';
                        }
                        
                    }
                }
            </script>
            <div class="form-check form-check-inline">
<<<<<<< HEAD
                <input class="form-check-input-danger" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="text">
=======
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rb_text" value="text" onchange="content_type_toggle(this)">
>>>>>>> 0960a9058c02d1bb0f97c6847f89686fd7fe546a
                <label class="form-check-label" for="inlineRadio1">Text</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rb_article" value="article" onchange="content_type_toggle(this)">
                <label class="form-check-label" for="inlineRadio2">Article</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rb_image" value="image" onchange="content_type_toggle(this)">
                <label class="form-check-label" for="inlineRadio3">Image</label>
            </div>
            <br>
            <br>
            <div id="post-image" class="post-content">
                <label>Select Image</label>
                <input name="image" class="form-control-file" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                <br>
                <img id="output" src="" style="height: 20%;width:20%">
                <br>
                <br>
                <label>Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div id="post-text" class="post-content">
                <label>Text</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div id="post-article" class="post-content">
                <label>Lien</label>
                <input type="text" class="form-control" name="link">
                <br>
                <label>Dexcription</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
                
            </div>
            <br>
            <br>
            <label>Visibilité</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="visibility" id="btnRadio1" value="CONNECTIONS">
                <label class="form-check-label" for="btnRadio1">Connections</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="visibility" id="btnRadio2" value="PUBLIC">
                <label class="form-check-label" for="btnRadio2">Publique</label>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-outline-danger">Ajouter</button>

        </div>


    </form>
</div>
@endsection