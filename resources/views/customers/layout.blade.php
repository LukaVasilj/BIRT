<!DOCTYPE html>
<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
.table {
    width: 2300px;
}

.table-scroll {
    overflow-x: auto;
    max-height: 400px; /* Podesite maksimalnu visinu tablice prema potrebama */
}
/* Dodajemo tamniju boju pozadine svakom drugom retku */
.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Dodajemo granice između svakog stupca */
.table th,
.table td {
    border: 1px solid #ddd;
    padding: 8px;
}

/* Dodajemo granice između redaka */
.table tbody tr td {
    border-top: 1px solid #ddd;
}

.btn:hover {
    background-color: #0056b3;
}





.table tbody tr:hover {
    background-color: #e0e0e0;
}

/* Dodajte fiksni položaj za zaglavlje */
.fixed-header {
    position: sticky;
    top: 0;
    background-color: #ffffff; /* Možete prilagoditi boju pozadine po želji */
    z-index: 100;
}

.table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            transform: scale(1.05);
            background-color: #ffe1a6;
        }




        </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
