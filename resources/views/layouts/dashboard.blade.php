<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ImpulsoApp</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Morris Charts CSS -->
    <!-- <link href="{{ asset('css/morrisjs/morris.css') }}" rel="stylesheet"> -->
    <!-- DataTables CSS -->
    <link href="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
    <!-- DataTables Select Rows -->
    <link href="{{ asset('vendor/jquery/jquery.dataTables.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .center {
            margin: 0 auto;
            width: 80%;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">IMPULSO APP</a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""><i class="fa fa-file-o"></i> Documentos</a>
                        </li>
                        <li>
                            <a href="../biblioteca"><i class="fa fa-book"></i> Biblioteca</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-lightbulb-o"></i> Proyectos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="wrapper">
            @yield('contenido')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <!-- Morris Charts JavaScript -->
    <!-- <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    // <script src="{{ asset('js/morrisjs/morris.min.js') }}"></script>
    // <script src="{{ asset('js/morrisjs/morris-data.js') }}"></script> -->
    <!-- DataTables JavaScript -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTablesexample').DataTable({
            responsive: true,
        });
        $('#dataTablesexample2').DataTable({
            responsive: true,
        });

        var dataTablesexample = $('#dataTablesexample').DataTable();  

        $('#dataTablesexample').on( 'click', 'tr', function (){
            if ($(this).hasClass('selected') ) 
            {
                $(this).removeClass('selected');
            }
            else 
            {
                dataTablesexample.$('tr.selected').removeClass('selected');
                $(this).addClass('selected'); 
                var id = $(this).find('td:first').text();
            }
        });
        $('#dataTablesexample2').on( 'click', 'tr', function (){
            if ($(this).hasClass('selected') ) 
            {
                $(this).removeClass('selected');
            }
            else 
            {
                dataTablesexample.$('tr.selected').removeClass('selected');
                $(this).addClass('selected'); 
                var id2 = $(this).find('td:first').text();
            }
        });
    
    });

    </script>

    <script type="text/javascript">

        $('#mEDocumento').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('myname')
            var life = button.data('mylife')
            var description = button.data('mydescription')
            var id3 = button.data('myid')
            var modal = $(this)
            modal.find('.modal-body #name2').val(name);
            modal.find('.modal-body #life2').val(life);
            modal.find('.modal-body #description2').val(description);
            modal.find('.modal-body #id2').val(id3);
        })

        $('#mDDocumento').on('show.bs.modal', function (event) {
            var button2 = $(event.relatedTarget)
            var id4 = button2.data('myid')
            var modal = $(this)
            modal.find('.modal-body #id4').val(id4);
        })
        
    </script>







</body>

</html>


