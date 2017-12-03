
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>


<div class="row">
    <div class="col-md-3">

        <aside class="sidebar-left">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li class="active"> <a href="<?php echo $this->webroot ?>partenaires/comptepart"><i class="fa fa-user" aria-hidden="true"></i>    Mon compte</a>
                </li>



            </ul>
        </aside>
    </div>
    <div class="gap gap-small"></div>
    <?php
    //debug($this->request->data);
    ?>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd lobidrag">
                <?php echo $this->Form->create('Partenaire'); ?>
                <?php echo $this->Form->input('id'); ?>
                <?php echo $this->Form->input('id',array('name'=>'data[User][id]')); ?>
                    <?php
                    echo $this->Form->input('role', array('label' => false, 'div' => false, 'type' => 'hidden','value'=>'2'));
                    ?>
                <div class="form-group row">
                    <div class="gap gap-small"></div>
                    <label for="username" class="col-sm-3 col-form-label"> Adresse E-mail</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'email','name'=>'data[User][username]','type'=>'email','value'=>$this->request->data['User']['username'],'type'=>'email')); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Mot de passe</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'password','name'=>'data[User][password]','pattern'=>"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}")); ?>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('nom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom','name'=>'data[User][nom]','value'=>$this->request->data['User']['nom'],'pattern'=>'[A-Za-z]*')); ?>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="prenom" class="col-sm-3 col-form-label">Prenom</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('prenom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'prenom','name'=>'data[User][prenom]','value'=>$this->request->data['User']['prenom'],'pattern'=>'[A-Za-z]*')); ?>
                    </div>
                </div>
                <?php
                echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id'));
                ?>


                <div class="form-group row">
                    <label for="sexe"
                           class="col-sm-3 col-form-label"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Sexe</label>
                    <div class="col-sm-6"  >
                        <div class="radio">
                            <label>
                                <input checked value="1" type="radio" class="i-radio" name="data[partenaire][sexe]" />Homme</label>
                        </div>

                        <div class="radio">
                            <label>
                                <input value="2" type="radio" class="i-radio" name="data[partenaire][sexe]" />Femme</label>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="adresse"
                           class="col-sm-3 col-form-label">Adresse</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('adresse',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'adresse','required'));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nom_de_societe"
                           class="col-sm-3 col-form-label"><i class="fa fa-university" aria-hidden="true"></i> Nom de societe</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('nom_de_societe', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'champ obligatoire *','id' => 'nom_de_societe','required'));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image"
                           class="col-sm-3 col-form-label"><i class="fa fa-picture-o" aria-hidden="true"></i> Image</label>
                    <div class="col-sm-6">

                        <?php
                        echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file','required'));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facebook"
                           class="col-sm-3 col-form-label"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('facebook', array('label' => false, 'div' => false,'placeholder' => 'champ obligatoire *', 'class' => 'form-control', 'id' => 'facebook','required'));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telephone" class="col-sm-3 col-form-label">Telephone</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone','pattern'=>"[0-9]{8}",'title'=>'8 chiffres !!!'));
                        ?>
                </div></div>
                <div class="form-group row">
                    <label for="telephone" class="col-sm-3 col-form-label">Faxe</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone','pattern'=>"[0-9]{8}",'title'=>'8 chiffres !!!'));
                        ?>
                    </div></div>
                <div class="form-group row">
                    <label for="map"
                           class="col-sm-2 col-form-label"><i class="fa fa-globe" aria-hidden="true"></i> Map</label>
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
                echo $this->Form->input('altitude', array('label' => false, 'div' => false, 'type' => 'hidden', 'id' => 'altitude','value'=>$this->request->data['Partenaire']['altitude']));
                ?>

                <?php
                echo $this->Form->input('longitude', array('label' => false, 'div' => false, 'type' => 'hidden', 'id' => 'longitude','value'=>$this->request->data['Partenaire']['longitude']));
                ?>
                <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2"><i class="fa fa-user" aria-hidden="true"></i>  Modifier profil utilisateur</button>


                <?php echo $this->Form->end(); ?>
            </div>
        </div>
        <div class="gap"></div>
    </div>
</div> </div>

<script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: <?php echo $this->request->data['Partenaire']['altitude']; ?>, lng: <?php echo $this->request->data['Partenaire']['longitude']; ?>},
            zoom: 6
        });
        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pac-input'));

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var myLatLng = {lat: <?php echo $this->request->data['Partenaire']['altitude']; ?>, lng: <?php echo $this->request->data['Partenaire']['longitude']; ?>};


        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            position: myLatLng,
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