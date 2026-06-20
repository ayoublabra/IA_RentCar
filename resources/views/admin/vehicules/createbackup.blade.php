@extends('layouts.app')

@section('title', 'Ajouter un véhicule')

@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background:
                radial-gradient(circle at top left, rgba(99, 102, 241, .15), transparent 35%),
                radial-gradient(circle at bottom right, rgba(168, 85, 247, .15), transparent 40%),
                linear-gradient(180deg, #f8fafc, #eef2ff);
            min-height: 100vh;
        }

        /* PAGE */
        .page {
            max-width: 1400px;
            margin: auto;
            padding: 40px 25px;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 32px;
            border-radius: 28px;

            background: rgba(255, 255, 255, .8);
            backdrop-filter: blur(20px);

            border: 1px solid rgba(255, 255, 255, .7);

            box-shadow:
                0 10px 40px rgba(15, 23, 42, .06),
                0 20px 80px rgba(15, 23, 42, .08);

            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 900;
            color: #0f172a;
        }

        .header p {
            margin-top: 8px;
            color: #64748b;
            font-size: 15px;
        }

        /* CARD */
        .card {
            background: rgba(255, 255, 255, .85);
            backdrop-filter: blur(20px);

            border-radius: 30px;

            padding: 35px;

            border: 1px solid rgba(255, 255, 255, .7);

            box-shadow:
                0 20px 60px rgba(15, 23, 42, .08);
        }

        /* SECTION */
        .section {
            margin-bottom: 28px;
            padding: 25px;
            border-radius: 24px;

            background: #fff;

            border: 1px solid #e2e8f0;

            transition: .3s;
        }

        .section:hover {
            transform: translateY(-2px);

            box-shadow:
                0 15px 35px rgba(99, 102, 241, .08);
        }

        .step-title {
            display: inline-flex;
            align-items: center;

            padding: 8px 16px;

            background: #eef2ff;

            color: #4f46e5;

            border-radius: 999px;

            font-size: 13px;

            font-weight: 800;

            margin-bottom: 20px;
        }

        /* GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 20px;
        }

        .field {
            grid-column: span 6;
            display: flex;
            flex-direction: column;
        }

        .field.full {
            grid-column: span 12;
        }

        /* LABEL */
        label {
            margin-bottom: 8px;

            font-size: 12px;

            font-weight: 800;

            color: #334155;

            text-transform: uppercase;

            letter-spacing: .7px;
        }

        /* INPUTS */
        input,
        select,
        textarea {
            width: 100%;

            height: 56px;

            padding: 0 16px;

            border-radius: 16px;

            border: 2px solid #e2e8f0;

            background: #fff;

            font-size: 14px;

            transition: .25s;
        }

        textarea {
            height: 140px;
            padding: 14px 16px;
        }

        input:hover,
        select:hover,
        textarea:hover {
            border-color: #c7d2fe;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;

            border-color: #6366f1;

            box-shadow:
                0 0 0 5px rgba(99, 102, 241, .12);
        }

        /* COLOR PICKER */
        input[type="color"] {
            padding: 6px;
            cursor: pointer;
        }

        /* SELECT2 */
        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single {
            height: 56px !important;

            border-radius: 16px !important;

            border: 2px solid #e2e8f0 !important;

            display: flex !important;

            align-items: center !important;

            transition: .3s;
        }

        .select2-container--default .select2-selection--single:hover {
            border-color: #c7d2fe !important;
        }

        .select2-container--default.select2-container--focus .select2-selection--single {
            border-color: #6366f1 !important;
            box-shadow: 0 0 0 5px rgba(99, 102, 241, .12);
        }

        .select2-selection__rendered {
            line-height: 52px !important;
            color: #0f172a !important;
        }

        .select2-selection__arrow {
            height: 56px !important;
        }

        .select2-dropdown {
            border: none !important;
            border-radius: 16px !important;

            overflow: hidden;

            box-shadow:
                0 20px 40px rgba(15, 23, 42, .12);
        }

        /* MARQUES */
        .brand-option {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-option img {
            width: 34px;
            height: 34px;
            object-fit: contain;
        }

        /* ACTIONS */
        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 35px;
        }

        /* BTN SECONDARY */
        .btn-secondary {
            height: 56px;

            padding: 0 24px;

            border-radius: 16px;

            background: #f1f5f9;

            color: #475569;

            font-weight: 700;

            text-decoration: none;

            display: flex;

            align-items: center;

            transition: .3s;
        }

        .btn-secondary:hover {
            background: #e2e8f0;
        }

        /* BTN PRIMARY */
        .btn-primary {
            height: 56px;

            padding: 0 30px;

            border: none;

            border-radius: 16px;

            cursor: pointer;

            color: white;

            font-size: 15px;

            font-weight: 800;

            background:
                linear-gradient(135deg,
                    #4f46e5,
                    #7c3aed);

            box-shadow:
                0 15px 35px rgba(99, 102, 241, .35);

            transition: .3s;
        }

        .btn-primary:hover {
            transform: translateY(-3px);

            box-shadow:
                0 20px 45px rgba(99, 102, 241, .45);
        }

        /* ERREURS */
        .error-box {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 18px;
            border-radius: 18px;
            margin-bottom: 25px;
        }

        /* RESPONSIVE */
        @media(max-width:992px) {

            .field {
                grid-column: span 12;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .header h1 {
                font-size: 28px;
            }

            .card {
                padding: 25px;
            }
        }


        /* DROPZONE */
        .dropzone {
            border: 2px dashed #c7d2fe;
            border-radius: 20px;
            padding: 35px;
            text-align: center;
            cursor: pointer;
            background: #f8fafc;
            transition: .3s;
        }

        .dropzone:hover {
            border-color: #6366f1;
            background: #eef2ff;
        }

        .dropzone-content .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .dropzone-content p {
            margin: 0;
            font-weight: 700;
            color: #0f172a;
        }

        .dropzone-content span {
            font-size: 13px;
            color: #64748b;
        }

        /* PREVIEW */
        .preview {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 12px;
            margin-top: 20px;
        }

        .preview img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 14px;
            border: 2px solid #e2e8f0;
        }
    </style>

    <div class="page">

        {{-- HEADER --}}
        <div class="header">
            <div>
                <h1>Ajouter un véhicule</h1>
                <p>Créer et gérer votre flotte de véhicules</p>
            </div>
        </div>

        {{-- FORM CARD --}}
        <div class="card">

            @if ($errors->any())
                <div style="background:#fee2e2;padding:12px;border-radius:12px;margin-bottom:15px;">
                    <ul style="margin:0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('vehicules.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- SECTION 1 --}}
                <div class="section">
                    <div class="step-title">Informations générales</div>

                    <div class="grid">

                        <div class="field">
                            <label>Marque</label>

                            <select name="marque_id" id="marque_id">
                                <option value="">Sélectionnez une marque</option>

                                @foreach ($marques as $marque)
                                    <option value="{{ $marque->id }}" data-image="{{ asset($marque->path) }}">
                                        {{ $marque->nom_marque }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="field">
                            <label>Modèle</label>
                            <select class="form-select" name="modelle_id" id="modelle_id" style="display:none;">
                            </select>
                        </div>

                        <div class="field">
                            <label>Version</label>
                            <select class="form-select" name="version_id" id="version_id" style="display:none;">
                            </select>
                        </div>

                        <div class="field">
                            <label>Année</label>
                            <input type="number" id="annee" name="annee">
                        </div>

                    </div>
                </div>

                {{-- SECTION 2 --}}
                <div class="section">
                    <div class="step-title">Caractéristiques</div>

                    <div class="grid">

                        <div class="field">
                            <label>Immatriculation</label>
                            <input type="text" id="immatriculation" name="immatriculation">
                        </div>

                        <div class="field">
                            <label>Couleur</label>
                            <input type="color" id="couleur" name="couleur">
                        </div>

                        <div class="field">
                            <label>Carburant</label>
                            <select name="carburant">
                                <option>Essence</option>
                                <option>Diesel</option>
                                <option>Hybride</option>
                                <option>Électrique</option>
                            </select>
                        </div>

                        <div class="field">
                            <label>Transmission</label>
                            <select name="transmission">
                                <option>Manuelle</option>
                                <option>Automatique</option>
                            </select>
                        </div>

                        <div class="field">
                            <label>Places</label>
                            <input type="number" name="nombre_places">
                        </div>

                        <div class="field">
                            <label>Kilométrage</label>
                            <input type="number" name="kilometrage">
                        </div>

                    </div>
                </div>

                {{-- SECTION 3 --}}
                <div class="section">
                    <div class="step-title">Prix & Description</div>

                    <div class="grid">

                        <div class="field">
                            <label>Prix journalier</label>
                            <input type="number" name="prix_journalier">
                        </div>

                        <div class="field">
                            <label>Prix achat</label>
                            <input type="number" name="prix_achat">
                        </div>

                        <div class="field full">
                            <label>Description</label>
                            <textarea name="description"></textarea>
                        </div>

                    </div>
                </div>

                {{-- SECTION IMAGES --}}
                <div class="section">
                    <div class="step-title">Images du véhicule</div>

                    <div id="dropzone" class="dropzone">
                        <input type="file" name="images[]" id="images" multiple hidden>

                        <div class="dropzone-content">
                            <div class="icon">📷</div>
                            <p><strong>Glisser-déposer vos images ici</strong></p>
                            <span>ou cliquez pour sélectionner</span>
                        </div>
                    </div>

                    <div id="preview" class="preview"></div>
                </div>

                {{-- ACTIONS --}}
                <div class="actions">
                    <a href="{{ url()->previous() }}" class="btn-secondary">Annuler</a>
                    <button class="btn-primary">Ajouter véhicule</button>
                </div>

            </form>

        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            const dropzone = document.getElementById('dropzone');
            const input = document.getElementById('images');
            const preview = document.getElementById('preview');

            dropzone.addEventListener('click', () => input.click());

            // drag over
            dropzone.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropzone.style.borderColor = "#6366f1";
            });

            // drag leave
            dropzone.addEventListener('dragleave', () => {
                dropzone.style.borderColor = "#c7d2fe";
            });

            // drop
            dropzone.addEventListener('drop', (e) => {
                e.preventDefault();
                input.files = e.dataTransfer.files;
                showPreview(input.files);
            });

            // change
            input.addEventListener('change', function() {
                showPreview(this.files);
            });

            function showPreview(files) {
                preview.innerHTML = "";

                Array.from(files).forEach(file => {
                    if (!file.type.startsWith('image/')) return;

                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        preview.appendChild(img);
                    }

                    reader.readAsDataURL(file);
                });
            }

            function formatMarque(state) {

                if (!state.id) {
                    return state.text;
                }

                let image = $(state.element).data('image');

                if (!image) {
                    return state.text;
                }

                return $(`
                <div class="brand-option">
                    <img src="${image}">
                    <span>${state.text}</span>
                </div>
            `);
            }

            $('#marque_id').select2({
                templateResult: formatMarque,
                templateSelection: formatMarque,
                escapeMarkup: function(markup) {
                    return markup;
                },
                width: '100%'
            });
            $('#marque_id').on('change', function() {

                let marqueId = $(this).val();

                let select = $('#modelle_id');

                if (!marqueId) {

                    select.hide();

                    return;
                }

                select.show();

                $.ajax({

                    type: 'GET',

                    url: '/getModelles',

                    data: {
                        marque: marqueId
                    },

                    dataType: 'JSON',

                    success: function(result) {

                        let options = '<option value="">Sélectionner modèle</option>';

                        result.forEach(modelle => {

                            options += `
                            <option value="${modelle.id}">
                                ${modelle.nom_modelle}
                            </option>
                        `;
                        });

                        select.html(options);

                    }

                });

            });
            $('#modelle_id').on('change', function() {

                let versionId = $(this).val();

                let select = $('#version_id');

                if (!versionId) {

                    select.hide();

                    return;
                }

                select.show();

                $.ajax({

                    type: 'GET',

                    url: '/getVersions',

                    data: {
                        version: versionId
                    },

                    dataType: 'JSON',

                    success: function(result) {

                        let options = '<option value="">Sélectionner version</option>';

                        result.forEach(version => {

                            options += `
                            <option value="${version.id}">
                                ${version.nom}
                            </option>
                        `;
                        });

                        select.html(options);

                    }

                });

            });
        });
    </script>
@endsection
