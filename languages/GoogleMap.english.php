<?php
$txt['googleMap'] = 'Member Map';
$txt['googleMap_Reset'] = 'Reset Map';
$txt['googleMap_GroupOfPins'] = "Group of Pins";
$txt['googleMap_Where'] = 'Where';
$txt['googleMap_Whereis'] = 'is';
$txt['googleMap_Whereare'] = 'are';
$txt['googleMap_Thereare'] = 'There are %s member pins on the map';
$txt['googleMap_Plus'] = 'Plus';
$txt['googleMap_Otherpins'] = 'other Pins';
$txt['googleMap_Legend'] = 'Legend';
$txt['googleMap_Pinned'] = 'Member Pins';
$txt['googleMap_MemberPin'] = 'Someones Pin';
$txt['googleMap_AndrogynyPin'] = 'No Gender';
$txt['googleMap_MalePin'] = 'Male';
$txt['googleMap_FemalePin'] = 'Female';
$txt['googleMap_OnMove'] = 'Recently Added/Moved';
$txt['googleMap_bold'] = 'BOLD';
$txt['googleMap_AddPinNote'] = '<b>Click here to add or edit your pin location on the map.</b>';
$txt['googleMap_PleaseClick'] = 'Click to place your pin on the map or click on your pin to remove it.';
$txt['googleMap_Disclaimer'] = '<br />Place your pin as close to your location as you feel comfortable.<br />Use the search function on the map to quickly move to a location (city, zip code, etc) then click on the map to set your pin.<br /><br />When you are done click on "Change Profile" to save your location.';

$txt['cannot_googleMap_view'] = 'Sorry, you are not allowed to view the Member Map.';
$txt['permissionname_googleMap_view'] = 'View Member Map';
$txt['permissionhelp_googleMap_view'] = 'Allow the people to view the Member Map.  If not set, the people will not see the map.';
$txt['cannot_googleMap_place'] = 'Sorry, you are not allowed to place a pin on the Member Map.';
$txt['permissionname_googleMap_place'] = 'Place Pin on the Member Map';
$txt['permissionhelp_googleMap_place'] = 'Allow the people place their pin the Member Map.  If not set, the people will not be able to place their pins.';
$txt['googleMap_xmlerror'] = 'Error making the ajax request';
$txt['googleMap_error'] = 'Unable to read the map pin data, result was';

$txt['googleMap_license'] = 'The Google JavaScript Maps API V3 is a free service, available for any web site that is free to consumers. By enabling and using this SMF modification you are acknowledging and agreeing to the Google<a href="http://code.google.com/apis/maps/terms.html"> terms of use</a>';

$txt['googleMap_MapSettings'] = 'General Map Settings';
$txt['googleMap_desc'] = 'From here you can control the settings for how the Member Map appears and functions on your forum';
$txt['googleMap_Enable'] = 'Enable the Member Map Modification';
$txt['googleMap_ButtonLocation'] = 'Select the top menu location for the Member Map button';
$txt['googleMap_DefaultLat'] = 'The default Latitude';
$txt['googleMap_DefaultLat_info'] = 'Latitude for map center';
$txt['googleMap_DefaultLong'] = 'The default Longitude';
$txt['googleMap_DefaultLong_info'] = 'Longitude for map center';
$txt['googleMap_DefaultZoom'] = 'The default Zoom Level';
$txt['googleMap_DefaultZoom_Info'] = 'Defines the default map location by defining the map center and zoom level. Examples: Europe: Lat:48, Lng:15, Zm:4  USA: Lat:39, Lng:-95, Zm:4';
$txt['googleMap_Type'] = 'The type of map to display by default';
$txt['googleMap_roadmap'] = 'RoadMap';
$txt['googleMap_satellite'] = 'Satellite';
$txt['googleMap_hybrid'] = 'Hybrid';
$txt['googleMap_NavType'] = 'Select the type of navigation control (Pan/Zoom)';
$txt['googleMap_largemapcontrol3d'] = 'Large 3D pan/zoom control';
$txt['googleMap_smallzoomcontrol3d'] = 'Small 3D zoom control';
$txt['googleMap_defaultzoomcontrol'] = 'Best fit for viewport';
$txt['googleMap_EnableLegend'] = 'Display a Pin Legend below the map';
$txt['googleMap_KMLoutput_enable'] = 'Allow KML (Google Earth) output';
$txt['googleMap_KMLoutput_enable_info'] = 'KML is a file that is downloadable on the Google Map page that will display the member pins inside Google Earth';
$txt['googleMap_PinNumber'] = 'Maximum number of pins to show on map';
$txt['googleMap_PinNumber_info'] = 'Enter 0 for no limit';
$txt['googleMap_Sidebar'] = 'Where to show the map sidebar';
$txt['googleMap_nosidebar'] = 'No Sidebar';
$txt['googleMap_rightsidebar'] = 'Right Sidebar';
$txt['googleMap_leftsidebar'] = 'Left Sidebar';
$txt['googleMap_BoldMember'] = 'Show recently added / moved pins as <strong>bold</strong> in the sidebar';

$txt['googleMap_MemeberpinSettings'] = 'Member Pin Style';
$txt['googleMap_PinStyle'] = 'What style of member pin to use';
$txt['googleMap_PinShadow'] = 'Add a drop shadow to the member pin';
$txt['googleMap_PinText'] = 'Enter text for use with a member text pin';
$txt['googleMap_PinIcon'] = 'Select the icon to use for an member pin';
$txt['googleMap_PinSize'] = 'Enter the size of the member icon pin';
$txt['googleMap_plainpin'] = 'Plain Pin';
$txt['googleMap_textpin'] = 'Pin with Text';
$txt['googleMap_iconpin'] = 'Pin with Icon';
$txt['googleMap_PinText_info'] = 'Must select ' . $txt['googleMap_textpin'];
$txt['googleMap_PinIcon_info'] = 'Must select ' . $txt['googleMap_iconpin'];
$txt['googleMap_PinGender'] = 'Should the pins reflect members gender';
$txt['googleMap_PinGenderInfo'] = 'Enabling this will supersede other pin settings, excluding size and drop shadow, for those members who\'s gender is known';

$txt['googleMap_ClusterpinSettings'] = 'Cluster Pin Settings';
$txt['googleMap_EnableClusterer'] = 'Enable Pin Clustering';
$txt['googleMap_EnableClusterer_info'] = 'Groups nearby pins into a single cluster pin to prevent overloading a map.  Zooming in on a cluster will expand it out to the individual pins.';
$txt['googleMap_MinMarkerPerCluster'] = 'Minimum number of pins per grid to generate a cluster';
$txt['googleMap_MinMarkertoCluster'] = 'Minimun number of pins on the map before clustering starts (if enabled)';
$txt['googleMap_GridSize'] = 'The size of the cluster searching grid';
$txt['googleMap_MaxLinesCluster'] = 'Maximum number of info lines to display in a Cluster Info Box';
$txt['googleMap_ClusterpinStyle'] = 'Cluster Pin Style';
$txt['googleMap_PinBackground'] = 'Background color of the member pin as a six-digit HTML hexadecimal color';
$txt['googleMap_PinForeground'] = 'Text color of the member pin as a six-digit HTML hexadecimal color';
$txt['googleMap_ClusterBackground'] = 'Background color of the cluster pin as a six-digit HTML hexadecimal color';
$txt['googleMap_ClusterForeground'] = 'Text color of the cluster pin as a six-digit HTML hexadecimal color';
$txt['googleMap_ClusterStyle'] = 'What style of clustering pin to use';
$txt['googleMap_ClusterShadow'] = 'Add a drop shadow to the cluster pin';
$txt['googleMap_ClusterText'] = 'Enter text for use with a cluster text pin';
$txt['googleMap_ClusterIcon'] = 'Select the icon to use for an cluster icon pin';
$txt['googleMap_ClusterSize'] = 'Enter the size of the cluster pin';
$txt['googleMap_zonepin'] = 'Zone icon';
$txt['googleMap_peepspin'] = 'People icon';
$txt['googleMap_talkpin'] = 'Talk icon';
$txt['googleMap_ScalableCluster'] = 'Allow Clusters with more pins to grow in size';
$txt['googleMap_ScalableCluster_info'] = 'Allows cluster pins to grow dynamically in size depending on how many pins they contain';

$txt['academy'] = 'academy';
$txt['activities'] = 'activities';
$txt['airport'] = 'airport';
$txt['amusement'] = 'amusement';
$txt['aquarium'] = 'aquarium';
$txt['art-gallery'] = 'art gallery';
$txt['atm'] = 'atm';
$txt['baby'] = 'baby';
$txt['bank-dollar'] = 'dollar';
$txt['bank-euro'] = 'euro';
$txt['bank-intl'] = 'intl';
$txt['bank-pound'] = 'pound';
$txt['bank-yen'] = 'yen';
$txt['bar'] = 'bar';
$txt['barber'] = 'barber';
$txt['beach'] = 'beach';
$txt['beer'] = 'beer';
$txt['bicycle'] = 'bicycle';
$txt['books'] = 'books';
$txt['bowling'] = 'bowling';
$txt['bus'] = 'bus';
$txt['cafe'] = 'cafe';
$txt['camping'] = 'camping';
$txt['car-dealer'] = 'car dealer';
$txt['car-rental'] = 'car rental';
$txt['car-repair'] = 'car repair';
$txt['casino'] = 'casino';
$txt['caution'] = 'caution';
$txt['cemetery-grave'] = 'grave';
$txt['cemetery-tomb'] = 'tomb';
$txt['cinema'] = 'cinema';
$txt['civic-building'] = 'building';
$txt['computer'] = 'computer';
$txt['corporate'] = 'corporate';
$txt['fire'] = 'fire';
$txt['flag'] = 'flag';
$txt['floral'] = 'floral';
$txt['helicopter'] = 'helicopter';
$txt['home1'] = 'home';
$txt['info'] = 'info';
$txt['landslide'] = 'landslide';
$txt['legal'] = 'legal';
$txt['location1'] = 'location';
$txt['locomotive'] = 'locomotive';
$txt['medical'] = 'medical';
$txt['mobile'] = 'mobile';
$txt['motorcycle'] = 'motorcycle';
$txt['music'] = 'music';
$txt['parking'] = 'parking';
$txt['pet'] = 'pet';
$txt['petrol'] = 'petrol';
$txt['phone'] = 'phone';
$txt['picnic'] = 'picnic';
$txt['postal'] = 'postal';
$txt['repair'] = 'repair';
$txt['restaurant'] = 'restaurant';
$txt['sail'] = 'sail';
$txt['school'] = 'school';
$txt['scissors'] = 'scissors';
$txt['ship'] = 'ship';
$txt['shoppingbag'] = 'shopping bag';
$txt['shoppingcart'] = 'shopping cart';
$txt['ski'] = 'ski';
$txt['snack'] = 'snack';
$txt['snow'] = 'snow';
$txt['sport'] = 'sport';
$txt['star'] = 'star';
$txt['swim'] = 'swim';
$txt['taxi'] = 'taxi';
$txt['train'] = 'train';
$txt['truck'] = 'truck';
$txt['wc-female'] = 'female';
$txt['wc-male'] = 'male';
$txt['wc'] = 'unisex';
$txt['wheelchair'] = 'wheelchair';

?>