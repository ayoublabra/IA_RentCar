@extends('layouts.app')

@section('title', 'Ajouter un véhicule')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<style>
/* ================= SAME DESIGN AS SALON ================= */

:root{
    --primary:#0ea5a4;
    --primary-light:#2dd4bf;
    --dark:#0f172a;
    --text:#64748b;

    --radius-xl:38px;
    --radius-lg:28px;

    --shadow-md:0 22px 55px rgba(15,23,42,.10);
}

body{
    font-family:'Inter',sans-serif;
    background: linear-gradient(to bottom,#f8fbff,#eef5ff);
}

/* PAGE */
.vehicle-page{
    max-width:1500px;
    margin:auto;
    padding:45px 24px 90px;
}

/* HEADER */
.page-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:40px;
    border-radius:var(--radius-xl);
    background:linear-gradient(135deg,rgba(255,255,255,.78),rgba(255,255,255,.58));
    backdrop-filter:blur(20px);
    box-shadow:var(--shadow-md);
    margin-bottom:40px;
}

.page-header h1{
    font-size:44px;
    font-weight:900;
    color:var(--dark);
}

.header-badge{
    padding:14px 28px;
    border-radius:999px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;
    font-weight:900;
}

/* MAIN CARD */
.main-card{
    background:linear-gradient(145deg,rgba(255,255,255,.78),rgba(255,255,255,.55));
    backdrop-filter:blur(24px);
    border-radius:40px;
    padding:35px;
    box-shadow:var(--shadow-md);
}

/* NAV */
.nav-pills .nav-link{
    border-radius:22px;
    font-weight:800;
    height:70px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#fff;
    border:1px solid #edf2f7;
}

.nav-pills .nav-link.active{
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;
}

/* SECTION */
.section-card{
    position:relative;

    overflow:hidden;

    margin-top:30px;

    padding:34px;

    border-radius:34px;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,.95),
            rgba(255,255,255,.85)
        );

    border:1px solid rgba(226,232,240,.8);

    box-shadow:var(--shadow-sm);
}

.section-card::before{
    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:7px;

    background:
        linear-gradient(
            90deg,
            var(--primary),
            #67e8f9
        );
}

/* GRID */
.form-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:20px;
}

/* INPUT */
.form-control,
.form-select{
    padding:14px 18px;
    border-radius:18px;
    border:1px solid #e5e7eb;
    background:linear-gradient(to bottom,#fff,#f8fafc);
}

.form-control:focus,
.form-select:focus{
    border-color:var(--primary);
    box-shadow:0 0 0 5px rgba(14,165,164,.12);
}

/* ================= SELECT2 LOGO ================= */

.select2-container .select2-selection--single{
    height:54px;
    border-radius:18px;
    display:flex;
    align-items:center;
    border:1px solid #e5e7eb;
    background:linear-gradient(to bottom,#fff,#f8fafc);
}

.select2-selection__rendered{
    display:flex !important;
    align-items:center;
    gap:10px;
    font-weight:700;
}

.brand-row img,
.brand-selected img{
    width:28px;
    height:28px;
    object-fit:contain;
    border-radius:6px;
}

/* DROPZONE */
#dropZone{
    position:relative;

    overflow:hidden;

    border:2px dashed rgba(14,165,164,.25);

    border-radius:34px;

    padding:90px 25px;

    text-align:center;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.95),
            rgba(240,253,255,.95)
        );

    transition:.35s ease;

    cursor:pointer;
}

#dropZone::before{
    content:"";

    position:absolute;
    inset:0;

    background:
        radial-gradient(circle,
        rgba(14,165,164,.10),
        transparent 70%);

    opacity:0;

    transition:.35s ease;
}

#dropZone:hover::before{
    opacity:1;
}

#dropZone:hover{
    transform:translateY(-6px);

    border-color:var(--primary);

    box-shadow:
        0 25px 50px rgba(14,165,164,.10);
}
.drop-icon{
    font-size:72px;

    margin-bottom:18px;

    animation:floatIcon 4s ease-in-out infinite;
}

.preview{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(160px,1fr));
    gap:15px;
    margin-top:25px;
}

.preview img{
    width:100%;
    height:140px;
    object-fit:cover;
    border-radius:18px;
}
.drop-title{
    font-size:28px;
    font-weight:900;

    color:var(--dark);

    margin-bottom:10px;
}
.drop-subtitle{
    color:var(--text);

    font-size:15px;
}
/* ===================================================
   PREVIEW
=================================================== */

#preview .image-card{
    position:relative;

    overflow:hidden;

    border-radius:28px;

    padding:10px;

    background:#fff;

    border:1px solid #edf2f7;

    transition:.35s ease;

    box-shadow:0 18px 35px rgba(15,23,42,.06);
}

#preview .image-card:hover{
    transform:translateY(-8px);

    box-shadow:
        0 28px 55px rgba(15,23,42,.12);
}

#preview img{
    width:100%;
    height:240px;

    object-fit:cover;

    border-radius:22px;
}

.image-radio{
    position:absolute;

    bottom:18px;
    left:50%;

    transform:translateX(-50%);

    display:flex;
    align-items:center;
    gap:8px;

    padding:10px 18px;

    border-radius:999px;

    background:rgba(255,255,255,.92);

    backdrop-filter:blur(10px);

    font-size:13px;
    font-weight:800;

    box-shadow:0 12px 24px rgba(15,23,42,.08);
}

/* BUTTON */
.submit-btn{
    width:100%;
    margin-top:35px;
    height:70px;
    border:none;
    border-radius:28px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;
    font-weight:900;
    font-size:18px;
}
</style>

<div class="vehicle-page">

    {{-- HEADER --}}
    <div class="page-header">
        <div>
            <h1>Ajouter un véhicule</h1>
            <p>Gestion moderne de flotte</p>
        </div>
        <div class="header-badge">Fleet Manager</div>
    </div>

    <form method="POST" action="{{ route('vehicules.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="main-card">

            {{-- TABS --}}
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#vehicule">🚗 Véhicule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#details">⚙️ Détails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#images">🖼️ Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#credit">
                        💰 Crédit
                    </a>
                </li>
            </ul>

            <div class="tab-content">

                {{-- VEHICULE --}}
                <div class="tab-pane fade show active" id="vehicule">
                    <div class="section-card">

                        <div class="form-grid">

                            {{-- MARQUE (SELECT2 + LOGO) --}}
                            <select name="marque_id" id="marque_id" class="form-select">
                                <option value="">Marque</option>
                                @foreach($marques as $marque)
                                    <option value="{{ $marque->id }}"
                                            data-logo="{{ asset($marque->path) }}">
                                        {{ $marque->nom_marque }}
                                    </option>
                                @endforeach
                            </select>

                            <select name="modelle_id" id="modelle_id" class="form-select" style="display:none;"></select>

                            <select name="version_id" id="version_id" class="form-select" style="display:none;"></select>

                            <input type="number" name="annee" class="form-control" placeholder="Année">

                        </div>
                    </div>
                </div>

                {{-- DETAILS --}}
                <div class="tab-pane fade" id="details">
                    <div class="section-card">

                        <div class="form-grid">

                            <input class="form-control" name="immatriculation" placeholder="Immatriculation">

                            <input class="form-control" name="kilometrage" placeholder="Kilométrage">

                            <select class="form-select" name="carburant">
                                <option>Essence</option>
                                <option>Diesel</option>
                                <option>Hybride</option>
                            </select>

                            <select class="form-select" name="transmission">
                                <option>Manuelle</option>
                                <option>Automatique</option>
                            </select>
                            <input class="form-control" type="color" name="couleur" placeholder="Couleur">

                        </div>
                    </div>
                </div>

                {{-- IMAGES --}}
                <div class="tab-pane fade" id="images">
                    <div class="section-card">

                        <div id="dropZone">

                            <div class="drop-icon">
                                📸
                            </div>

                            <div class="drop-title">
                                Ajouter vos images
                            </div>

                            <div class="drop-subtitle mt-2">
                                Glisser-déposer ou cliquer pour sélectionner
                            </div>

                            <input type="file"
                                   id="photoInput"
                                   name="photos[]"
                                   multiple
                                   hidden>

                        </div>

                        <div id="preview"
                             class="row mt-4"></div>

                    </div>
                </div>
                {{-- CREDIT --}}
                <div class="tab-pane fade" id="credit">
                    <div class="section-card">

                        <div class="mb-4">
                            <label class="fw-bold mb-2">
                                Véhicule acheté à crédit ?
                            </label>

                            <select class="form-select" id="is_credit" name="is_credit">
                                <option value="0">Non</option>
                                <option value="1">Oui</option>
                            </select>
                        </div>

                        <div id="creditSection" style="display:none;">

                            <div class="form-grid">

                                <div>
                                    <label>Montant total</label>
                                    <input type="number"
                                        step="0.01"
                                        name="montant_total"
                                        id="montant_total"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Apport</label>
                                    <input type="number"
                                        step="0.01"
                                        name="apport"
                                        id="apport"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Montant financé</label>
                                    <input type="number"
                                        step="0.01"
                                        name="montant_finance"
                                        id="montant_finance"
                                        class="form-control"
                                        readonly>
                                </div>

                                <div>
                                    <label>Taux d'intérêt (%)</label>
                                    <input type="number"
                                        step="0.01"
                                        id="taux_interet"
                                        name="taux_interet"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Mensualité</label>
                                    <input type="number"
                                        step="0.01"
                                        id="mensualite"
                                        name="mensualite"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Nombre de mois</label>
                                    <input type="number"
                                        id="nombre_mois"
                                        name="nombre_mois"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Date début</label>
                                    <input type="date"
                                        id="date_debut"
                                        name="date_debut"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Date fin</label>
                                    <input type="date"
                                        id="date_fin"
                                        name="date_fin"
                                        class="form-control">
                                </div>

                                <div>
                                    <label>Reste à payer</label>
                                    <input type="number"
                                        step="0.01"
                                        name="reste_a_payer"
                                        id="reste_a_payer"
                                        class="form-control"
                                        readonly>
                                </div>
                                <div>
                                    <label>Total à payer</label>
                                    <input type="number"
                                        step="0.01"
                                        id="total_payer"
                                        name="total_payer"
                                        class="form-control"
                                        readonly>
                                </div>

                                <div>
                                    <label>Coût du crédit</label>
                                    <input type="number"
                                        step="0.01"
                                        id="cout_credit"
                                        name="cout_credit"
                                        class="form-control"
                                        readonly>
                                </div>
                                <div>
                                    <label>Statut</label>
                                    <select name="statut" class="form-select">
                                        <option value="en_cours">En cours</option>
                                        <option value="termine">Terminé</option>
                                        <option value="retard">En retard</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <button class="submit-btn">💾 Enregistrer</button>

        </div>
    </form>
</div>

{{-- JS --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

/* ===== SELECT2 LOGO ===== */

function formatBrand(option){
    if(!option.id) return option.text;

    let logo = $(option.element).data('logo');

    return $(`
        <div style="display:flex;align-items:center;gap:10px;">
            <img src="${logo}" width="28" height="28"/>
            <span>${option.text}</span>
        </div>
    `);
}

function formatBrandSelection(option){
    if(!option.id) return option.text;

    let logo = $(option.element).data('logo');

    return $(`
        <div style="display:flex;align-items:center;gap:10px;">
            <img src="${logo}" width="28" height="28"/>
            <span>${option.text}</span>
        </div>
    `);
}

$('#marque_id').select2({
    placeholder:'Choisir une marque',
    templateResult:formatBrand,
    templateSelection:formatBrandSelection,
    width:'100%'
});

/* ================= DRAG DROP ================= */
let dropZone = document.getElementById('dropZone');
let input = document.getElementById('photoInput');

dropZone.addEventListener('click', () => input.click());

dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropZone.style.borderColor = '#06b6d4';
});

dropZone.addEventListener('dragleave', () => {
    dropZone.style.borderColor = '#cbd5e1';
});

dropZone.addEventListener('drop', (e) => {
    e.preventDefault();

    input.files = e.dataTransfer.files;

    displayImages(input.files);
});

input.addEventListener('change', function() {
    displayImages(this.files);
});

function displayImages(files){

    let preview = document.getElementById('preview');

    preview.innerHTML = "";

    Array.from(files).forEach((file,index)=>{

        let reader = new FileReader();

        reader.onload = function(e){

            preview.innerHTML += `
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="image-card">

                        <img src="${e.target.result}">

                        <div class="image-radio">

                            <input type="radio"
                                   name="is_profile"
                                   value="${index}">
                            Principale

                        </div>

                    </div>
                </div>
            `;
        }

        reader.readAsDataURL(file);

    });

}
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
    $('#is_credit').on('change', function(){

        if($(this).val() == 1){
            $('#creditSection').slideDown();
        }else{
            $('#creditSection').slideUp();
        }

    });

    function calculFinancement(){

        let total = parseFloat($('#montant_total').val()) || 0;
        let apport = parseFloat($('#apport').val()) || 0;

        let finance = total - apport;

        $('#montant_finance').val(finance.toFixed(2));
        $('#reste_a_payer').val(finance.toFixed(2));
    }

    $('#montant_total, #apport').on('keyup change', calculFinancement);

    function calculCredit() {

        let montantTotal = parseFloat($('#montant_total').val()) || 0;
        let apport       = parseFloat($('#apport').val()) || 0;
        let taux         = parseFloat($('#taux_interet').val()) || 0;
        let mois         = parseInt($('#nombre_mois').val()) || 0;

        // Montant financé
        let montantFinance = montantTotal - apport;

        if(montantFinance < 0){
            montantFinance = 0;
        }

        $('#montant_finance').val(montantFinance.toFixed(2));

        let mensualite = 0;
        let totalPayer = 0;
        let coutCredit = 0;

        if(mois > 0){

            let tauxMensuel = (taux / 100) / 12;

            if(tauxMensuel == 0){

                mensualite = montantFinance / mois;

            }else{

                mensualite =
                    montantFinance *
                    tauxMensuel *
                    Math.pow(1 + tauxMensuel, mois) /
                    (Math.pow(1 + tauxMensuel, mois) - 1);

            }

            totalPayer = mensualite * mois;
            coutCredit = totalPayer - montantFinance;

        }

        $('#mensualite').val(mensualite.toFixed(2));
        $('#total_payer').val(totalPayer.toFixed(2));
        $('#cout_credit').val(coutCredit.toFixed(2));
        $('#reste_a_payer').val(totalPayer.toFixed(2));

    }

    $('#montant_total,#apport,#taux_interet,#nombre_mois').on('keyup change',function(){
        calculCredit();
    });
    function calculDateFin(){

        let debut = $('#date_debut').val();
        let mois  = parseInt($('#nombre_mois').val()) || 0;

        if(debut && mois){

            let d = new Date(debut);

            d.setMonth(d.getMonth() + mois);

            let annee = d.getFullYear();
            let moisDate = String(d.getMonth()+1).padStart(2,'0');
            let jour = String(d.getDate()).padStart(2,'0');

            $('#date_fin').val(`${annee}-${moisDate}-${jour}`);
        }
    }

    $('#date_debut,#nombre_mois').on('change keyup', calculDateFin);


</script>

@endsection
