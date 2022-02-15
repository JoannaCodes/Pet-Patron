<script>
    //Sidebar
    var wrapper = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");
    toggleButton.onclick = function toggle() {
        wrapper.classList.toggle("toggled");
    };

    // Content
    $(function(){
        // for initial load
        pageUrl = '../admin/dashboard.php';
        navName = 'Dashboard';

        $('#dashboard').click(function(){
            pageUrl = '../admin/dashboard.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#pets').click(function(){
            pageUrl = '../admin/pets.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#org').click(function(){
            pageUrl = '../admin/rescueOrg.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#orders').click(function(){
            pageUrl = '../admin/orders.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#inventory').click(function(){
            pageUrl = '../admin/inventory.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#users').click(function(){
            pageUrl = '../admin/users.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#admin').click(function(){
            pageUrl = '../admin/admin.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        $('#log').click(function(){
            pageUrl = '../admin/log.php';
            navName = $(this).text();
            LoadingPages(pageUrl, navName);
        })

        function LoadingPages(pageUrl, navName){
            $('#content').load(pageUrl);
            $("#nav-name").text(navName);
        }
        LoadingPages(pageUrl, navName)
    })
</script>

</body>

</html>