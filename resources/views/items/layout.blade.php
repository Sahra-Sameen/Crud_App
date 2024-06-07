<!DOCTYPE html>
<html lang="">
<head>
    <title>Item Details CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container mt-5">
    @if (session('flash_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('flash_message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-EFVf2hW/JJc34BIHLYJ7+IbV8twUt9vQeiG3/ePjM9Y15/rbGGde7Baa5sH8Eao" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9EDABkL+U1ekFNPxJvg6jYlRr8DhjEnqfRlmDaKnv9K05FvRJHtvJ2O" crossorigin="anonymous"></script>
</body>
</html>
