@extends('layouts.app')

@section('title', 'Ajouter une Marque')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

<style>
.card-marque{
    background:#fff;
    border-radius:25px;
    padding:35px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.dropzone{
    border:2px dashed #6366f1;
    border-radius:20px;
    padding:40px;
    text-align:center;
    cursor:pointer;
    transition:.3s;
    background:#f8faff;
}

.dropzone:hover{
    background:#eef2ff;
    transform:translateY(-2px);
}

.dropzone.dragover{
    border-color:#4f46e5;
    background:#e0e7ff;
}

.dropzone i{
    font-size:55px;
    color:#6366f1;
}

.dropzone h5{
    margin-top:10px;
    font-weight:700;
}

.preview-container{
    margin-top:20px;
}

.preview-card{
    position:relative;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.preview-card img{
    width:100%;
    height:250px;
    object-fit:contain;
    background:#fff;
    padding:15px;
}

.btn-save{
    background:linear-gradient(135deg,#4f46e5,#7c3aed);
    color:white;
    border:none;
    border-radius:15px;
    padding:14px 30px;
    font-weight:700;
}
</style>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card-marque">

                <h2 class="fw-bold mb-4">
                    🚗 Ajouter une Marque
                </h2>

                <form action="{{ route('marques.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            Nom de la marque
                        </label>

                        <input type="text"
                               name="nom_marque"
                               class="form-control form-control-lg"
                               placeholder="Ex: Mercedes-Benz"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Logo
                        </label>

                        <div class="dropzone" id="dropZone">

                            <i class="ri-image-add-line"></i>

                            <h5>Déposez votre logo ici</h5>

                            <p class="text-muted">
                                ou cliquez pour sélectionner une image
                            </p>

                            <input type="file"
                                   name="logo"
                                   id="logoInput"
                                   hidden
                                   accept="image/*">

                        </div>
                    </div>

                    <div class="preview-container" id="previewContainer"></div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn-save">
                            <i class="ri-save-line"></i>
                            Enregistrer
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<script>

const dropZone = document.getElementById('dropZone');
const input = document.getElementById('logoInput');
const preview = document.getElementById('previewContainer');

dropZone.addEventListener('click', () => {
    input.click();
});

dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', () => {
    dropZone.classList.remove('dragover');
});

dropZone.addEventListener('drop', (e) => {

    e.preventDefault();

    dropZone.classList.remove('dragover');

    const file = e.dataTransfer.files[0];

    input.files = e.dataTransfer.files;

    showPreview(file);
});

input.addEventListener('change', function(){

    if(this.files.length){
        showPreview(this.files[0]);
    }

});

function showPreview(file){

    const reader = new FileReader();

    reader.onload = function(e){

        preview.innerHTML = `
            <div class="preview-card">
                <img src="${e.target.result}">
            </div>
        `;

    }

    reader.readAsDataURL(file);
}

</script>

@endsection
