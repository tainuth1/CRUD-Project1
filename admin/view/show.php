<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
        include 'function.php';
        include '../../link/link.php';
        include 'modle.php';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/show.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container d-flex justify-content-between align-items-center py-3">
        <h2 class="text-primary "><i class="fa-solid fa-user-tie"></i> Admin Dashboard</h2>
        <div class="">
            <button class="btn btn-primary " id="open-add" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Add Product</button>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table table-hover table-striped align-middle" style="table-layout: fixed;">
            <tr class="table-dark shadow ">
                <th>Picture</th>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php include 'row.php' ?>
        </table>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $('#open-add').click(function(){
            $('#add-btn').show();
            $('#update-btn').hide();
        });

        $(document).on('click', '#open-update', function(){
            $('#add-btn').hide();
            $('#update-btn').show();

            var id       = $(this).parents('tr').find('td').eq(0).text();
            var name     = $(this).parents('tr').find('td').eq(1).text();
            var category = $(this).parents('tr').find('td').eq(2).text();
            var brand    = $(this).parents('tr').find('td').eq(3).text();
            var price    = $(this).parents('tr').find('td').eq(4).text();

            $('#id').val(id);
            $('#name').val(name);
            $('#category').val(category);
            $('#brand').val(brand);
            $('#price').val(price);
        });
    });
</script>
