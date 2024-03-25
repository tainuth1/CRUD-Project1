<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php 

    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    function add_product(){
        global $connection;

        if(isset($_POST['_add-btn'])){
            $name     = $_POST['_name'];
            $category = $_POST['_category'];
            $brand     = $_POST['_brand'];
            $price    = $_POST['_price'];
            $image    = $_FILES['_image']['name'];

            if(!empty($name) && !empty($category) && !empty($brand) && !empty($price) && !empty($image)){
                $thumbnail = date('YmdHis') . '-' . $image;
                $path = '../images/'. $thumbnail;
                move_uploaded_file($_FILES['_image']['tmp_name'], $path);

                $sql = "INSERT INTO `accessory` (`name`, `category`, `brand`, `price`, `image`)
                        VALUES('$name', '$category', '$brand', '$price', '$thumbnail')";

                $result = $connection->query($sql);

                if($result){
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Product Inserted",
                                    text: "You clicked the button!",
                                    icon: "success",
                                    button: "Continous",
                                });
                            });
                        </script>
                    ';
                }

            }

        }
    }
    add_product();

    function delete_product(){
        global $connection;

        if(isset($_POST['_delete-btn'])){
            $id_to_delete = $_POST['_delete-btn'];
            
            $sql = "UPDATE `accessory` SET `status` = 1 WHERE `id` = $id_to_delete";

            $result = $connection->query($sql);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Product Deleted",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Continous",
                            });
                        });
                    </script>
                ';
            }
        }
    }
    delete_product();