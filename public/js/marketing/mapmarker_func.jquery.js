		//set up markers
		var myMarkers = {"markers": [
				{"latitude": "19.206338", "longitude":"72.874438", "icon": "img/map-marker.png"}
			]
		};

		//set up map options
		$(".map_contact").mapmarker({
			zoom	: 14,
			center	: 'Thakur College of Engineering and Technology',
			markers	: myMarkers
		});

