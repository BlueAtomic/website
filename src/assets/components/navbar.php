<script>
    function updatemenu() {
        if (document.getElementById('responsive-menu').checked == true) {
            document.getElementById('menu').style.borderBottomRightRadius = '0';
            document.getElementById('menu').style.borderBottomLeftRadius = '0';
        }else{
            document.getElementById('menu').style.borderRadius = '50px';
        }
    }
</script>

<nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
        <li><a href='../../../index.php'>Home</a></li>
        <li><a href='../../../about.php'>About</a></li>
        <li><a href='../../../support.php'>Support</a></li>
        <li><a href='../../../privacy.php'>Privacy</a></li>
    </ul>
</nav>