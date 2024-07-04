   var data = get_country_state();
console.log(data);
  $( function() {
    var availableTags = [
      "Australia","Canada","Canberra","Australian","Capital Territory","New South Wales","Northern Territory","Queensland","South Australia","Tasmania","Victoria","Western Australia","Ottawa","Alberta","British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Nunavut","Ontario","Prince Edward Island","Quebec","Saskatchewan","Yukon Territory","Ethiopia","Adama","Addis Ababa","Dese","Dire Dawa","Diredawa","Gondar","Mekele","Germany","Berlin","Baden-Wuerttemberg","Bayern","Berlin","Brandenburg","Bremen","Hamburg","Hessen","Mecklenburg-Vorpommern","Niedersachsen","Nordrhein-Westfalen","Rheinland-Pfalz","Saarland","Sachsen","Sachsen-Anhalt","Schleswig-Holstein","Thueringen","Norway","Oslo","Akershus","Aust-Agder","Buskerud","Finnmark","Hedmark","Hordaland","More og Romsdal","Nordland","Nord-Trondelag","Oppland","Ostfold","Rogaland","Sogn og Fjordane","Sor-Trondelag","Telemark","Troms","Vest-Agder","Vestfold"
      
    ];
    $( "#locations" ).autocomplete({
      source: availableTags
    });
  } );