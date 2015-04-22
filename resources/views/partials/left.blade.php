<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper" style="z-index:10000;">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">Quick Notes<span class="glyphicon glyphicon-chevron-left sidebar-right" onclick="$('#wrapper').toggleClass('toggled');"></span></a>
            </li>
            <li>
                <a href="#menu-toggle" id="menu-toggle">Dashboard</a>
            </li>
        </ul>

    </div>
    <span class="glyphicon glyphicon-chevron-right side-bar-button" aria-hidden="true" onclick="$('#wrapper').toggleClass('toggled');"></span>

    <!-- /#sidebar-wrapper -->

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>