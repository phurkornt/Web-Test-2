<?php

if (!isset($_SESSION['id'])) { 
    
?>
<!-- ไม่ได้  login -->
<div class="bg-secondary bg-opacity-25">
            <div class="container p-3 ">
                <span>
                    <i class="bi bi-house-door-fill"></i>
                    <a href="index.php" class="text-dark fs-5" style="text-decoration: none;"> Home</a>
                </span>
                <span class="float-end" >
                    <i class="bi bi-box-arrow-right"></i>
                    <a href="login.php" class="text-dark fs-5" style="text-decoration: none;"> เข้าสู่ระบบ</a>
                 </span>
            </div>
        </div>

<?php

}else{?>

<!--  login -->
<div class="bg-secondary bg-opacity-25">
            <div class="container p-3 ">
                <span>
                    <i class="bi bi-house-door-fill"></i>
                    <a href="index.php" class="text-dark fs-5" style="text-decoration: none;"> Home</a>
                </span>
                <span class="float-end">

                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-lines-fill"></i>
                    <?php echo $_SESSION['username']; ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">
                        <i class="bi bi-power"></i>
                            ออกจากระบบ
                        </a></li>
                    </ul>
                </div>
                                    
                   
                 </span>
            </div>
</div>



<?php }?>




    


