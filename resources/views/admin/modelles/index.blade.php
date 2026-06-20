@extends('layouts.app')

@section('title', 'Liste des modèles')

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

/* ================= BADGE MARQUE ================= */
.brand-badge{
    display:inline-block;
    padding:7px 14px;
    border-radius:30px;
    font-size:12px;
    font-weight:700;
    background:#eef2ff;
    color:#4f46e5;
}

/* ================= ACTION BUTTONS ================= */
.action-group{
    display:flex;
    gap:10px;
    align-items:center;
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
    font-size:16px;
    cursor:pointer;
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

/* ================= EMPTY ================= */
.empty-text{
    color:#9ca3af;
    font-size:13px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    .table{
        min-width:700px;
    }

    .card-title{
        font-size:20px;
    }
}

/* ================= ANIMATION ================= */
@keyframes fadeIn{
    from{opacity:0;transform:translateY(15px);}
    to{opacity:1;transform:translateY(0);}
}
</style>

<div class="container-fluid">

    <div class="iq-card">

        <!-- HEADER -->
        <div class="iq-card-header">
            <h4 class="card-title">🚗 Liste des modèles</h4>
        </div>

        <!-- BODY -->
        <div class="iq-card-body">

            <div class="table-responsive">

                <table class="table table-borderless" id="MyTable">

                    <thead>
                        <tr>
                            <th>Nom modèle</th>
                            <th>Marque</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($modelles as $modele)

                        <tr>

                            <!-- NOM MODELE -->
                            <td>
                                <strong style="color:#111827;">
                                    {{ $modele->nom_modelle }}
                                </strong>
                            </td>

                            <!-- MARQUE -->
                            <td>
                                @if($modele->marque)
                                    <span class="brand-badge">
                                        {{ $modele->marque->nom_marque }}
                                    </span>
                                @else
                                    <span class="empty-text">Aucune marque</span>
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
                    searchPlaceholder: "🔍 Rechercher un modèle...",
                    lengthMenu: "Afficher _MENU_ éléments",
                    info: "Affichage de _START_ à _END_ sur _TOTAL_ modèles",
                    paginate: {
                        previous: "←",
                        next: "→"
                    },
                    emptyTable: "Aucun modèle disponible"
                }

            });

        });
    </script>

@endsection
