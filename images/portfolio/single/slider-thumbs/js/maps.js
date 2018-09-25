$(document).ready(function () {
    jQuery('#google-map').gMap({
        address: 'Features Design e Consultoria em Marketing digital, Bombinhas',
        maptype: 'ROADMAP',
        zoom: 16,
        markers: [
            {
                address: "Features Design e Consultoria em Marketing digital, Bombinhas",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;"><span>Features Design e Consultoria</span></h4><p class="nobottommargin">Localizada ao lado da prefeitura de Bombinhas.</p></div>',
                icon: {
                    image: "images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [32,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });
});