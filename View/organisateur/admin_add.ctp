<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
    </div>
    <div class="header-title">
        <h1>GESTION DES PARTENAIRES</h1>
        <small>Ajouter</small>
        <ol class="breadcrumb">
            <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
            <li><a href="#">Partenaire</a></li>
            <li class="active">Ajouter</li>
        </ol>
    </div>
</section>


<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Ajouter Partenaire </h4>
                    </div>
                </div>
                <div class="panel-body">




                    <?php echo $this->Form->create('Partenaire',array('type'=>'file')); ?>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('username', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'username', 'name' => 'data[User][username]')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'password', 'name' => 'data[User][password]')); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('nom', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'nom', 'name' => 'data[User][nom]')); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('prenom', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'prenom', 'name' => 'data[User][prenom]')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sexe"
                               class="col-sm-2 col-form-label">Sexe</label>
                        <div class="col-sm-6">
                            <?php
                            $options = array('1' => 'Homme', '2' => 'Femme');

                            echo $this->Form->input('sexe', array('legend' => false,
                                'before' => '<div class="radio radio-info radio-inline">',
                                'after' => '</div>',
                                'between' => '',
                                'separator' => '</div><div class="radio radio-info radio-inline">',
                                'options' => $options,
                                'type' => 'radio'
                            ));
                            ?>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telephone"
                               class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('telephone', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'telephone','pattern'=>"[0-9]{8}",'title'=>'8 chiffres !!!'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faxe"
                               class="col-sm-2 col-form-label">Faxe</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('faxe', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'faxe','pattern'=>"[0-9]{8}",'title'=>'8 chiffres !!!'));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nom_de_societe"
                               class="col-sm-2 col-form-label">Nom de societe</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('nom_de_societe', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'nom_de_societe'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adresse"
                               class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('adresse', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'adresse'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="activite"
                               class="col-sm-2 col-form-label">Activite</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('activite', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'activite'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image"
                               class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-6">

                            <?php
                            echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file'));

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facebook"
                               class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('facebook', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'facebook'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="etat"
                               class="col-sm-2 col-form-label">Etat</label>
                        <div class="col-sm-6">
                            <?php
                            $options = array('1' => 'Vlidée', '2' => 'Non validée');

                            echo $this->Form->input('etat', array('legend' => false,
                                'before' => '<div class="radio radio-info radio-inline">',
                                'after' => '</div>',
                                'between' => '',
                                'separator' => '</div><div class="radio radio-info radio-inline">',
                                'options' => $options,
                                'type' => 'radio'
                            ));
                            ?>


                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="etat"
                               class="col-sm-2 col-form-label">Map</label>
                        <div class="col-sm-10">






                            <style>
                                /* Always set the map height explicitly to define the size of the div
                                 * element that contains the map. */
                                #map {
                                    /*height: 100%;*/
                                    height: 500px;
                                }
                                /* Optional: Makes the sample page fill the window. */
                                html, body {
                                    height: 100%;
                                    margin: 0;
                                    padding: 0;
                                }
                                .controls {
                                    margin-top: 10px;
                                    border: 1px solid transparent;
                                    border-radius: 2px 0 0 2px;
                                    box-sizing: border-box;
                                    -moz-box-sizing: border-box;
                                    height: 32px;
                                    outline: none;
                                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                                }

                                #pac-input {
                                    background-color: #fff;
                                    font-family: Roboto;
                                    font-size: 15px;
                                    font-weight: 300;
                                    margin-left: 12px;
                                    padding: 0 11px 0 13px;
                                    text-overflow: ellipsis;
                                    width: 300px;
                                }

                                #pac-input:focus {
                                    border-color: #4d90fe;
                                }

                                .pac-container {
                                    font-family: Roboto;
                                }

                                #type-selector {
                                    color: #fff;
                                    background-color: #4d90fe;
                                    padding: 5px 11px 0px 11px;
                                }

                                #type-selector label {
                                    font-family: Roboto;
                                    font-size: 13px;
                                    font-weight: 300;
                                }
                            </style>

                            <input id="pac-input" class="controls" type="text"
                                   placeholder="Enter a location">
                            <div id="type-selector" class="controls">
                                <input type="radio" name="type" id="changetype-all" checked="checked">
                                <label for="changetype-all">All</label>

                                <input type="radio" name="type" id="changetype-establishment">
                                <label for="changetype-establishment">Establishments</label>

                                <input type="radio" name="type" id="changetype-address">
                                <label for="changetype-address">Addresses</label>

                                <input type="radio" name="type" id="changetype-geocode">
                                <label for="changetype-geocode">Geocodes</label>
                            </div>

                            <div id="map"></div>
                        </div>
                    </div>
























                    <?php
                    echo $this->Form->input('altitude', array('label' => false, 'div' => false, 'type' => 'hidden', 'id' => 'altitude','value'=>'34.801663'));
                    ?>

                    <?php
                    echo $this->Form->input('longitude', array('label' => false, 'div' => false, 'type' => 'hidden', 'id' => 'longitude','value'=>'9.318847'));
                    ?>




                    <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">Ajouter
                    </button>
                    <?php echo $this->Form->end(); ?>


                </div>
            </div>
        </div>
    </div>
    </div>
</section>




















<script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 34.801663, lng: 9.318847},
            zoom: 6
        });
        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pac-input'));

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });


        marker.addListener('dragend', function() {

            document.getElementById('altitude').value = this.position.lat().toFixed(7);
            document.getElementById('longitude').value = this.position.lng().toFixed(7);
            //console.log(this.position.lat());
        });



        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);  // Why 17? Because it looks good.
            }
            marker.setIcon(/** @type {google.maps.Icon} */({
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(35, 35)
            }));
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);


            document.getElementById('altitude').value = place.geometry.location.lat().toFixed(7);
            document.getElementById('longitude').value = place.geometry.location.lng().toFixed(7);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            //infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
            //infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            radioButton.addEventListener('click', function() {
                autocomplete.setTypes(types);
            });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDipuEUi7_0s5zk_v7sC9FGIr0UmFXZ3do&libraries=places&callback=initMap"
        async defer></script>