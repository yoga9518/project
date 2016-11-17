
<div class="col-xs-12">
    <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Sistem Informasi</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <?php
            if (isset($_SESSION["login"])) {
                ?>

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#fakelink">Data Barang</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Pegawai<b class="caret"></b></a>
                        <span class="dropdown-arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="#">Pegawai Tetap</a></li>
                            <li><a href="#">Pegawai Kontrak</a></li>
                        </ul>
                    </li>
                    <li><a href="#fakelink">About Us</a></li>
                </ul>
            <?php } ?>
             <?php
            if (!isset($_SESSION["login"])) {
                ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php">Register</a></li>
            </ul>
            <?php }?>
        </div><!-- /.navbar-collapse -->
    </nav><!-- /navbar -->
</div>
