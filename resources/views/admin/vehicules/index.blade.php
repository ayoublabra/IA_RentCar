@extends('layouts.app')

@section('title', 'Liste des véhicules')

@section('content')

<style>
:root{
    --primary:#4f46e5;
    --dark:#111827;
    --gray:#6b7280;
    --border:#eef2f7;
}

body{
    background:linear-gradient(180deg,#f8fafc 0%,#eef2ff 100%);
    font-family:'Inter',sans-serif;
}

/* ================= CARD ================= */
.iq-card{
    border:none;
    border-radius:28px;
    overflow:hidden;
    background:#fff;
    box-shadow:0 20px 50px rgba(15,23,42,.08);
    animation:fadeIn .4s ease;
}

.iq-card-header{
    padding:25px 30px;
    border-bottom:1px solid var(--border);
    background:#fff;
}

.card-title{
    font-size:24px;
    font-weight:800;
    color:var(--dark);
    margin:0;
}
/* ================= TOP BAR ================= */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        /* ================= BUTTON ================= */
        .btn-primary {
            border: none;
            border-radius: 16px;
            padding: 13px 22px;
            font-weight: 700;
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            box-shadow: 0 12px 25px rgba(79, 70, 229, .25);
            transition: all .3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 30px rgba(79, 70, 229, .30);
        }

        .btn-primary i {
            margin-right: 6px;
        }


/* ================= TABLE ================= */
.table{
    border-collapse:separate;
    border-spacing:0 14px;
}

.table thead th{
    border:none !important;
    font-size:12px;
    text-transform:uppercase;
    color:#6b7280;
    font-weight:800;
    letter-spacing:1px;
}

.table tbody tr{
    background:#fff;
    box-shadow:0 8px 25px rgba(0,0,0,.05);
    transition:.25s ease;
}

.table tbody tr:hover{
    transform:translateY(-4px);
    box-shadow:0 15px 35px rgba(79,70,229,.10);
}

.table td{
    border:none !important;
    padding:18px 16px;
    vertical-align:middle;
}

/* ================= BADGES ================= */
.badge-primary{
    display:inline-block;
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:700;
    background:#eef2ff;
    color:#4f46e5;
}

.badge-dark{
    display:inline-block;
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:700;
    background:#f3f4f6;
    color:#ffffff;
}

/* ================= PRICE ================= */
.price{
    font-weight:800;
    color:#111827;
}

/* ================= ACTION ================= */
.action-group{
    display:flex;
    gap:10px;
}

.action-btn{
    width:40px;
    height:40px;
    border:none;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.25s;
    cursor:pointer;
    font-size:16px;
}

.action-btn:hover{
    transform:translateY(-3px);
}

.edit-btn{
    background:#fff7ed;
    color:#ea580c;
}

.delete-btn{
    background:#fef2f2;
    color:#dc2626;
}

/* ================= STATUS ================= */
.status{
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:700;
}

.status-dispo{
    background:#ecfdf5;
    color:#059669;
}

.status-indispo{
    background:#fef2f2;
    color:#dc2626;
}

/* ================= ANIMATION ================= */
@keyframes fadeIn{
    from{opacity:0;transform:translateY(15px);}
    to{opacity:1;transform:translateY(0);}
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    .table{
        min-width:900px;
    }

    .card-title{
        font-size:20px;
    }
}
</style>

<div class="container-fluid">

    <div class="iq-card">

        <!-- HEADER -->
        <div class="iq-card-header">
            <h4 class="card-title">🚗 Liste des véhicules</h4>
        </div>

        <!-- BODY -->
        <div class="iq-card-body">
             <div class="top-bar">

                <a href="{{ route('vehicules.create') }}" class="btn btn-primary">
                    <i class="ri-add-line"></i>
                    Ajouter un véhicule
                </a>

            </div>
            <div class="table-responsive">

                <table class="table table-borderless" id="MyTable">

                    <thead>
                        <tr>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Version</th>
                            <th>Couleur</th>
                            <th>Immatriculation</th>
                            <th>Prix/jour</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($vehicules as $vehicule)

                        <tr>

                            <!-- MARQUE -->
                            <td>
                                @if($vehicule->marque && $vehicule->marque->path)
                                    <div style="display:flex;align-items:center;gap:10px;">

                                        <img
                                            src="{{ asset($vehicule->marque->path) }}"
                                            alt="{{ $vehicule->marque->nom_marque }}"
                                            style="
                                                width:80px;
                                                height:80px;
                                                object-fit:contain;
                                                border-radius:10px;
                                                background:#fff;
                                                padding:4px;
                                                box-shadow:0 2px 8px rgba(0,0,0,.08);
                                            "
                                        >

                                        {{-- <span class="badge-primary">
                                            {{ $vehicule->marque->nom_marque }}
                                        </span> --}}

                                    </div>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <!-- MODELE -->
                            <td>
                                @if($vehicule->modelle)
                                    <span class="badge-dark">
                                        {{ $vehicule->modelle->nom_modelle }}
                                    </span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                             <!-- Version -->
                            <td>
                                @if($vehicule->version)
                                    <span class="badge-dark">
                                        {{ $vehicule->version->nom }}
                                    </span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <!-- COULEUR -->
                            <td>
                                <span
                                    style="
                                        display:inline-block;
                                        width:28px;
                                        height:28px;
                                        border-radius:50%;
                                        background:{{ $vehicule->couleur }};
                                        border:2px solid #e2e8f0;
                                        box-shadow:0 2px 8px rgba(0,0,0,.1);
                                    "
                                    title="{{ $vehicule->couleur }}">
                                </span>
                            </td>

                            <!-- IMMATRICULATION -->
                            <td>
                                <strong>
                                    {{ $vehicule->immatriculation }}
                                </strong>
                            </td>

                            <!-- PRIX -->
                            <td>
                                <span class="price">
                                    {{ $vehicule->prix_journalier }} MAD
                                </span>
                            </td>

                            <!-- STATUT -->
                            <td>
                                @if($vehicule->statut == 'disponible')
                                    <span class="status status-dispo">
                                        Disponible
                                    </span>
                                @else
                                    <span class="status status-indispo">
                                        Indisponible
                                    </span>
                                @endif
                            </td>

                            <!-- ACTIONS -->
                            <td>
                                <div class="action-group">

                                    <a href="#" class="action-btn edit-btn" title="Modifier">
                                        ✏️
                                    </a>

                                    <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="action-btn delete-btn"
                                                title="Supprimer">
                                            🗑️
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#MyTable').DataTable({

                responsive: true,

                pageLength: 10,

                language: {
                    search: "",
                    searchPlaceholder: "🔍 Rechercher un véhicule...",
                    lengthMenu: "Afficher _MENU_ éléments",
                    info: "Affichage de _START_ à _END_ sur _TOTAL_ véhicules",
                    paginate: {
                        previous: "←",
                        next: "→"
                    },
                    emptyTable: "Aucun véhicule disponible"
                }

            });

        });
    </script>
@endsection
