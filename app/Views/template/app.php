<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="<?= base_url() ?>/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/leaflet/leaflet.css">
    <!-- file css leaflet-search -->
    <link rel="stylesheet" href="<?= base_url() ?>/leaflet-search/src/leaflet-search.css">">
    <!-- File css routing/jalur  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" /> 
    <script src="<?= base_url() ?>/leaflet/leaflet.js"></script>

    <!-- plugin cluster routing/jalur & jquery -->
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- cluster plugin -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/cluster/example/screen.css"/> -->
    <link rel="stylesheet" href="<?= base_url() ?>/cluster/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/cluster/dist/MarkerCluster.Default.css" />
    <script src="<?= base_url() ?>/cluster/dist/leaflet.markercluster-src.js"></script>

    <!-- heatmap plugin -->
    <script src="<?= base_url() ?>/heatmap_leaflet/dist/leaflet-heat.js"></script>
    <!-- leaflet-search plugin -->
    <script src="<?= base_url() ?>/leaflet-search/src/leaflet-search.js"></script>

    <style>
        #auto_com {z-index: 100;}
    </style>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?= $this->include("template/navbar") ?>       
                
        <div class="app-main">
            <?= $this->include("template/sidebar") ?>

            <div class="app-main__outer">

                <div class="app-main__inner">

                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="<?= $icon ?> icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div><?= $title_header_page ?>
                                    <div class="page-title-subheading">
                                        <?= $description_header_page ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?= $this->renderSection("content") ?>
                </div>
                
                <?= $this->include("template/footer") ?>    
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="<?= base_url() ?>/scripts/main.js"></script></body>

<?= $this->renderSection("js") ?>

</html>
