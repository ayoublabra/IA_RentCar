@extends('layouts.app')
@section('title', 'Liste des marques')

@section('content')

    <style>
        :root {
            --primary: #4f46e5;
            --primary-light: #eef2ff;
            --danger: #ef4444;
            --warning: #f97316;
            --dark: #111827;
            --gray: #6b7280;
            --border: #eef2f7;
        }

        body {
            background: linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%);
            font-family: 'Inter', sans-serif;
        }

        /* ================= CARD ================= */
        .iq-card {
            border: none;
            border-radius: 28px;
            overflow: hidden;
            background: #fff;
            box-shadow:
                0 20px 50px rgba(15, 23, 42, .08),
                0 2px 10px rgba(15, 23, 42, .04);
            animation: fadeIn .5s ease;
        }

        .iq-card-header {
            padding: 25px 30px;
            border-bottom: 1px solid var(--border);
            background: #fff;
        }

        .card-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark);
            margin: 0;
            letter-spacing: -0.5px;
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

        /* ================= DATATABLE ================= */
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 20px;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #e5e7eb !important;
            border-radius: 14px !important;
            padding: 10px 15px !important;
            outline: none;
            transition: .3s;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, .10);
        }

        /* ================= TABLE ================= */
        .table {
            border-collapse: separate;
            border-spacing: 0 14px;
            margin-top: 10px !important;
        }

        .table thead th {
            border: none !important;
            color: #6b7280;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding-bottom: 8px;
        }

        .table tbody tr {
            background: #fff;
            transition: all .25s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .05);
        }

        .table tbody tr:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 35px rgba(79, 70, 229, .10);
        }

        .table tbody tr td:first-child {
            border-radius: 18px 0 0 18px;
        }

        .table tbody tr td:last-child {
            border-radius: 0 18px 18px 0;
        }

        .table td {
            vertical-align: middle !important;
            border: none !important;
            padding: 18px 16px;
        }

        /* ================= BRAND ================= */
        .brand-name {
            font-size: 15px;
            font-weight: 700;
            color: #111827;
        }

        .brand-logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
            background: #fff;
            padding: 8px;
            border-radius: 16px;
            border: 1px solid #eef2f7;
            transition: .3s;
        }

        .brand-logo:hover {
            transform: scale(1.08);
        }

        /* ================= ACTIONS ================= */
        .action-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-btn {
            width: 42px;
            height: 42px;
            border: none;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all .25s ease;
            font-size: 17px;
        }

        .action-btn:hover {
            transform: translateY(-3px);
        }

        .action-edit {
            background: #fff7ed;
            color: #ea580c;
        }

        .action-edit:hover {
            background: #fed7aa;
        }

        .action-delete {
            background: #fef2f2;
            color: #dc2626;
        }

        .action-delete:hover {
            background: #fecaca;
        }

        /* ================= PAGINATION ================= */
        .page-item.active .page-link {
            background: var(--primary);
            border-color: var(--primary);
        }

        .page-link {
            border-radius: 12px !important;
            margin: 0 3px;
            border: none;
            color: #4b5563;
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:768px) {

            .top-bar {
                flex-direction: column;
                align-items: flex-start;
            }

            .table-responsive {
                overflow-x: auto;
            }

            .table {
                min-width: 800px;
            }

            .card-title {
                font-size: 20px;
            }
        }

        /* ================= ANIMATION ================= */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">

                <div class="iq-card">

                    <!-- HEADER -->
                    <div class="iq-card-header d-flex justify-content-between align-items-center">

                        <div class="iq-header-title">
                            <h4 class="card-title">
                                🚗 Liste des marques
                            </h4>
                        </div>

                    </div>

                    <!-- BODY -->
                    <div class="iq-card-body">

                        <div class="top-bar">

                            <a href="{{ route('marques.create') }}" class="btn btn-primary">
                                <i class="ri-add-line"></i>
                                Ajouter une marque
                            </a>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-borderless" id="MyTable">

                                <thead>
                                    <tr>
                                        <th>Nom Marque</th>
                                        <th>Logo</th>
                                        <th width="130">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($marques as $marque)
                                        <tr>

                                            <td>
                                                <span class="brand-name">
                                                    {{ $marque->nom_marque }}
                                                </span>
                                            </td>

                                            <td>
                                                <img src="{{ asset($marque->path) }}" alt="{{ $marque->nom_marque }}"
                                                    class="brand-logo">
                                            </td>

                                            <td>

                                                <div class="action-group">

                                                    <a href="#" class="action-btn action-edit" title="Modifier">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>

                                                    <form action="{{ route('marques.destroy', $marque->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Supprimer cette marque ?')">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="action-btn action-delete border-0"
                                                            title="Supprimer">
                                                            <i class="ri-delete-bin-6-line"></i>
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
                    searchPlaceholder: "🔍 Rechercher une marque...",
                    lengthMenu: "Afficher _MENU_ éléments",
                    info: "Affichage de _START_ à _END_ sur _TOTAL_ marques",
                    paginate: {
                        previous: "←",
                        next: "→"
                    },
                    emptyTable: "Aucune marque disponible"
                }

            });

        });
    </script>

@endsection
