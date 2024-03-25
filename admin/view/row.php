<?php

    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    $sql = "SELECT * FROM `accessory` WHERE `status` = 0 ORDER BY `id` DESC";

    $result = $connection->query($sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            ?> 
                <tr>
                    <td>
                        <img class="row-img shadow " src="../images/<?= $row['image'] ?>" alt="<?= $row['image'] ?>">
                    </td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['category'] ?></td>
                    <td><?= $row['brand'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2 ">
                            <button class="btn btn-outline-primary "  id="open-update" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>
                            <form action="" method="POST" onsubmit="return confirm('Are Your Sure You Want To Delete This Record?');">
                                <button type="submit" name="_delete-btn" value="<?= $row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php
        }
    }