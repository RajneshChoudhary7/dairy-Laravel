<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary Management System</title>
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <style>
        /* Custom Styles for Diary App */
body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.navbar-brand {
    font-weight: 600;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    border-radius: 10px 10px 0 0 !important;
}

.list-group-item {
    border-left: none;
    border-right: none;
}

.list-group-item:first-child {
    border-top: none;
}

.list-group-item:last-child {
    border-bottom: none;
}

.list-group-item:hover {
    background-color: #f8f9fa;
}

.form-control:focus {
    border-color: #86b7fe;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

footer {
    margin-top: auto;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .card-body {
        padding: 15px;
    }
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Diary App Logo" height="30" class="d-inline-block align-text-top">
                Diary Management
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Entries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Add New Entry</h5>
                    </div>
                    <div class="card-body">
                        <form id="diary-form">
                            <div class="mb-3">
                                <label for="entry-date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="entry-date" required>
                            </div>
                            <div class="mb-3">
                                <label for="entry-title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="entry-title" placeholder="Entry title" required>
                            </div>
                            <div class="mb-3">
                                <label for="entry-content" class="form-label">Content</label>
                                <textarea class="form-control" id="entry-content" rows="5" placeholder="Write your thoughts..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Save Entry</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Entries</h5>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown">
                                Filter
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">All Entries</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <input type="text" class="form-control form-control-sm w-50" placeholder="Search entries...">
                            <button class="btn btn-sm btn-outline-secondary">Search</button>
                        </div>
                        
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">A Wonderful Day</h6>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Today was an amazing day filled with joy and excitement...</p>
                                <small class="text-muted">June 12, 2023</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Reflections on Life</h6>
                                    <small>1 week ago</small>
                                </div>
                                <p class="mb-1">Sometimes I wonder about the meaning of life and our purpose...</p>
                                <small class="text-muted">June 5, 2023</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">My Travel Adventures</h6>
                                    <small>2 weeks ago</small>
                                </div>
                                <p class="mb-1">The mountains were breathtaking this time of year. The crisp air...</p>
                                <small class="text-muted">May 28, 2023</small>
                            </a>
                        </div>
                        
                        <nav class="mt-3">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">Diary Management System &copy; {{ date('Y') }}. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>