<?php 

    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    $sql = "SELECT * FROM `accessory` WHERE `status` = 0 ORDER BY `id` DESC";

    $result = $connection->query($sql);

    while($row = mysqli_fetch_assoc($result)){
        ?>
            <div class="pro-card shadow rounded-2 pb-2 overflow-hidden p-2">
                <div class="pro-img rounded overflow-hidden ">
                    <img src="../../admin/images/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>">
                </div>
                <div class="pro-info d-flex flex-column gap-3 ">
                    <div class="name-cate">
                        <center>
                            <h5><?php echo $row['name'] ?></h5>
                            <p class="text-bg-light"><?php echo $row['category'] ?></p>
                        </center>
                    </div>
                    <div class="price d-flex align-items-center justify-content-between ">
                        <p>$<?php echo $row['price'] ?></p>
                        <button class="btn btn-warning "><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button></button>
                    </div>
                </div>
            </div>
        <?php
    }