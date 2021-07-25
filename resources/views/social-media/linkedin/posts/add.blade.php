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
            <label>Type du  post</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rb_post" id="rb_text" value="text">
                <label class="form-check-label" for="rb_text">Text</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rb_post" id="rb_article" value="article" >
                <label class="form-check-label" for="rb_article">Article</label>
            </div>
            <!--<div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rb_post" id="rb_image" value="image">
                <label class="form-check-label" for="rb_image">Image</label>
            </div>-->
            <br>
            <br>
            <!--<div id="image" class="hide">
                <label>Titre</label>
                <input type="text" class="form-control" name="img_text" placeholder="Titre pour votre image">
                <br>
                <label>Status</label>
                <input type="text" class="form-control" name="img_commentary" placeholder="De quoi parle votre image ? ">
                <br>
                <input type="hidden" id="path" name="path">
                <label>Select Image</label>
                <input name="image" id="input_image" class="form-control-file" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0]);document.getElementById('path').value = window.URL.createObjectURL(this.files[0]);">
                <br>
                <img id="output" src="" style="height: 20%;width:20%">
                <br>
                <br>
                <label>Description</label>
                <textarea class="form-control" name="img_description" rows="3" placeholder="Description de votre image"></textarea>
            </div>-->
            <div id="text" class="hide">
                <label>Text</label>
                <textarea class="form-control" name="txt_text" rows="3"></textarea>
            </div>
            <div id="article" class="hide">
                <label>Titre</label>
                <input type="text" class="form-control" name="text" placeholder="Titre de votre article">
                <br>
                <label>Commentaire </label>
                <input type="text" class="form-control" name="commentary" placeholder="De quoi parle votre aticle ? ">
                <label>Lien</label>
                <input type="text" class="form-control" name="link" placeholder="Lien de votre article">
                <br>
                <label>Dexcription</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Description de votre article"></textarea>
            </div>
            <script>
                $('input[name="rb_post"]').on('change', function() {
                    var rd = this;
                // this, in the anonymous function, refers to the changed-<input>:
                // select the element(s) you want to show/hide:
                $('.hide')
                    // pass a Boolean to the method, if the numeric-value of the changed-<input>
                    // is exactly equal to 2 and that <input> is checked, the .business-fields
                    // will be shown:
                    .each(function (e) {
                        if(rd.value == this.id && rd.checked)
                            this.style = "display: block";
                        else 
                            this.style = "display: none";
                    });
                // trigger the change event, to show/hide the .business-fields element(s) on
                // page-load:
                }).change();
            </script>
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
            <script>
                document.querySelector('.btn-outline-danger').addEventListener("click", function(event) {
                    var checked = false;
                    var rb_array = document.querySelectorAll('input[name="rb_post"]');
                    for (var i = 0; i < rb_array.length; i++) {
                        if(rb_array[i].checked) {
                            checked = true;
                        }
                     }
                    if(!checked){
                        alert('Merci de selectionner un type pour votre poste !');
                        event.preventDefault();
                    }
                }, false);
            </script>

        </div>


    </form>
</div>
@endsection